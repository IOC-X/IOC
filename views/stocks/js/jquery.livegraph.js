/*!
 * LiveGraph for jQuery v1.0.0
 * http://github.com/lampieg/livegraph
 *
 * Copyright © 2013 lampieg (admin@lampieg.co.uk)
 * Released under the MIT license
 */

(function( $ ){
	var methods = {
		init : function ( options ) {
			//set default options
			var settings = $.extend( {
				'barWidth' : 50,
				'barGapSize' : 5,
				'height' : 400,
				'data' : {demo1:{label:"Yes",value:2},demo2:{label:"No",value:1},demo3:{label:"Maybe",value:3}},
				'animate' : true,
				'animTime' : 2000,
				'hideData' : true
			}, options);
			
			this.data('liveGraph', {
				settings : settings
			});
			var actualdata, parsed = this.liveGraph('parsedata', settings.data);
			if (parsed === false) {
				console.log("jQuery.liveGraph Halted: Data Parsing Error");
				return this;
			} else {
				actualdata = parsed;
			}
			if(!Math.roundTo) {
				Math.roundTo = function(number, to) { return (Math.ceil(number/to))*to; };
			}
			if(!Array.prototype.max) {
				Array.prototype.max = function() { return Math.max.apply(Math, this); };
			}
			this.data('liveGraph', {
				settings : settings,
				data : actualdata,
				ref : this
			});
			this.liveGraph('make');
			return this;
		},
		make : function () {
			var liveGraph = this.data('liveGraph');
			var settings = liveGraph.settings;
			var data = liveGraph.data;
			this.append("<div class=\"liveGraph\"><div class=\"bars\"></div></div>");
			var vals = [], i = 0, x;
			for ( x in data ) {
				i++;
				$('<div class=\"bar bar'+x+'\" bar=\"'+x+'\"><span class=\"barval\">'+data[x].value+'</span><p class=\"barlabel\">'+data[x].label+'</p></div>').appendTo((this).find('div.bars'));
				vals.push(data[x].value);
			}
			liveGraph.numberofbars = i;
			liveGraph.scale = vals.max();
			if (liveGraph.scale == 0) {
				liveGraph.scale = 1;
			}
			for ( x in data ) {
				var height;
				height = ((data[x].value/liveGraph.scale)*100)+'%';
				if (liveGraph.settings.animate) {
					liveGraph.ref.find('div.bars div.bar'+x+' span').css('height', 0);
					liveGraph.ref.find('div.bars div.bar'+x+' span').animate({
						height: height
					}, liveGraph.settings.animTime);
				} else {
					liveGraph.ref.find('div.bars div.bar'+x+' span').css('height', height);
				}
			}
			liveGraph.ref.find('div.liveGraph').css({
				padding:"5px 5px 25px 5px",
				height: liveGraph.settings.height-30+'px'
			});
			liveGraph.ref.find('div.liveGraph div.bars div.bar').css({
				position: "relative",
				height: liveGraph.settings.height-30+'px',
				width: liveGraph.settings.barWidth+'px',
				float: 'left',
				margin: '0 '+liveGraph.settings.barGapSize+'px'
			});
			liveGraph.ref.find('div.liveGraph div.bars div.bar span').css({
				position: 'absolute',
				bottom: 0,
				left: 0,
				width: liveGraph.settings.barWidth+'px',
				border: '1px #000 solid',
				display: 'block',
				"text-align": 'center',
				overflow: 'hidden'
			});
			liveGraph.ref.find('div.liveGraph div.bars div.bar p').css({
				position: 'absolute',
				bottom: '-20px',
				margin: 0,
				left: 0,
				width: liveGraph.settings.barWidth+'px',
				display: 'block',
				"text-align": 'center'
			});
		},
		destroy : function () {
			var liveGraph = this.data('liveGraph');
			this.html("");
			this.removeData('liveGraph');
		},
		update : function (data) {
			var liveGraph = this.data('liveGraph');
			var settings = liveGraph.settings, newdata = this.liveGraph('parsedata', data);
			var newvals = {}, newlabels = {};
			$(liveGraph.ref).find('div.bars div.bar').each(function() {
				var bar = $(this).attr('bar'); //provide a reference to each bar
					if (typeof newdata[bar] == "object") {
						if (typeof newdata[bar].value == "number") {
							newvals[bar] = newdata[bar].value;
							liveGraph.data[bar].value = newdata[bar].value;
						} else {
							newvals[bar] = liveGraph.data[bar].value;
						}
						if (typeof newdata[bar].label == "string" || typeof newdata[bar].label == "number") {
							newlabels[bar] = newdata[bar].label;
							liveGraph.data[bar].label = newdata[bar].label;
						} else {
							newlabels[bar] = liveGraph.data[bar].label;
						}
					} else if (typeof newdata[bar] == "number") {
						newvals[bar] = newdata[bar];
						liveGraph.data[bar].value = newdata[bar];
						newlabels[bar] = liveGraph.data[bar].label;
					} else {
						newvals[bar] = liveGraph.data[bar].value;
						newlabels[bar] = liveGraph.data[bar].label;
					}
			});
			var highest = 0;
			for (val in newvals) {
				if (highest < newvals[val]) { highest = newvals[val]; }
			}
			liveGraph.scale = highest;
			if (liveGraph.scale == 0) {
				liveGraph.scale = 1;
			}
			for (x in newvals) {
				this.liveGraph('updateBarVal', x, newvals[x]);
			}
			for (x in newlabels) {
				this.liveGraph('updateBarLabel', x, newlabels[x]);
			}
			
		},
		updateBarVal : function(bar, val) {
			var liveGraph = this.data('liveGraph');
			var settings = liveGraph.settings;
			if (typeof bar != "string") {
				throw TypeError();
			}
			if (typeof val != "number") {
				throw TypeError();
			}
			var height = ((val/liveGraph.scale)*100)+'%';
			if (settings.animate) {
				$(liveGraph.ref).find('div.bars div[bar="'+bar+'"] span').html(val).animate({
					height: height
				}, settings.animTime);
			} else {
				$(liveGraph.ref).find('div.bars div[bar="'+bar+'"] span').html(val).css('height', height);
			}
			return this;
		},
		updateBarLabel : function(bar, label) {
			var liveGraph = this.data('liveGraph');
			var settings = liveGraph.settings;
			if (typeof bar != "string") {
				throw TypeError();
			}
			if (typeof label != "number" && typeof label != "string") {
				throw TypeError();
			}
			if ($(liveGraph.ref).find('div.bars div[bar="'+bar+'"] p').html() == label) {
				return false;
			}
			if (settings.animate) {
				$(liveGraph.ref).find('div.bars div[bar="'+bar+'"] p').fadeOut(settings.animTime/2, function() {
					$(this).html(label);
					$(this).fadeIn(settings.animTime/2);
				});
			} else {
				$(liveGraph.ref).find('div.bars div[bar="'+bar+'"] p').html(label);
			}
			return this;
		},
		parsedata : function(inputdata) {
			var settings = this.data('liveGraph').settings;
			if (typeof inputdata == "object") {
				return inputdata;
			} else if (typeof inputdata == "string" && inputdata.substr(0,5) == "table") {
				var table, data = {}, i = 1;
				if (inputdata == "table") {
					table = this;
				} else {
					table = $(inputdata);
				}
				if ((table.find('tbody tr')).length == 0) {
					console.log("Warning: jQuery.liveGraph could not find data in table: "+inputdata);
					return false;
				}
				table.find('tbody tr').reverse().each(function() {
					var temp = {
						label: $(this).find('td').first().html(),
						value: parseFloat($(this).find('td').last().html())
					};
					var temp2 = Object();
					temp2['tb'+i] = temp;
					data = $.extend(temp2, data);
					i++;
				});
				if (settings.hideData === true) {
					table.hide();
				}
				return data;
			} else {
				console.log("Warning: jQuery.liveGraph data must either be a reference to a table or a JS object");
				return false;
			}
		}
	};
	$.fn.liveGraph = function( method ) {
		if ( methods[method] ) {
			return methods[ method ].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === "object" || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( "Method " + method + " does not exist on jQuery.liveGraph" );
		}
	};
})( jQuery );
(function( $ ){
	$.fn.reverse = [].reverse;
})( jQuery );