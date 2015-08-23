    <div class="content">
        <div id="box1" class="box show">
            <div class="item">
                <div class="itemhead">
                    <img src="<?php echo IMG ?>stocks/pump/img/pump.jpg" width="70" height"70" />
                    <h2>Eric</h2>
                    <div class="heart">
                        <svg viewBox="0 0 24 24" style="pointer-events: none; width: 24px; height: 24px; display: block;"><g id="favorite"><path d="M12,21.4L10.6,20C5.4,15.4,2,12.3,2,8.5C2,5.4,4.4,3,7.5,3c1.7,0,3.4,0.8,4.5,2.1C13.1,3.8,14.8,3,16.5,3C19.6,3,22,5.4,22,8.5c0,3.8-3.4,6.9-8.6,11.5L12,21.4z"></path></g></svg>
                    </div>
                </div>
              <p>Have you heard about the Web Components revolution?</p><p>Click to tabs!</p>
            </div>
    
        </div>
    </div>

    <script type="text/javascript">
        /*

    Polymer Example: https://polymer-tut.appspot.com/
  Kerem Sevencan @keremciu
  https://twitter.com/keremciu
  https://dribbble.com/keremciu
  ----------------
    Hey Everyone,
  
  I love material design and I developed the following polymer app without canvas and polymer.
  
  I've used Only CSS3 - Pure Javascript! I hope you like it :)
 
*/
window.onload = function() {
    var heart = document.getElementsByClassName("heart");
    var classname = document.getElementsByClassName("tabitem");
    var boxitem = document.getElementsByClassName("box");

    var clickFunction = function(e) {
        e.preventDefault();
        var a = this.getElementsByTagName("a")[0];
        var span = this.getElementsByTagName("span")[0];
        var href = a.getAttribute("href").replace("#","");
        for(var i=0;i<boxitem.length;i++){
            boxitem[i].className =  boxitem[i].className.replace(/(?:^|\s)show(?!\S)/g, '');
        }
        document.getElementById(href).className += " show";
        for(var i=0;i<classname.length;i++){
            classname[i].className =  classname[i].className.replace(/(?:^|\s)active(?!\S)/g, '');
        }
        this.className += " active";
        span.className += 'active';
        var left = a.getBoundingClientRect().left;
        var top = a.getBoundingClientRect().top;
        var consx = (e.clientX - left);
        var consy = (e.clientY - top);
        span.style.top = consy+"px";
        span.style.left = consx+"px";
        span.className = 'clicked';
        span.addEventListener('webkitAnimationEnd', function(event){
            this.className = '';
        }, false);  
    };

    for(var i=0;i<classname.length;i++){
        classname[i].addEventListener('click', clickFunction, false);
    }
    for(var i=0;i<heart.length;i++){
        heart[i].addEventListener('click', function(e) {
            var classString = this.className, nameIndex = classString.indexOf("active");
            if (nameIndex == -1) {
                classString += ' ' + "active";
            }
            else {
                classString = classString.substr(0, nameIndex) + classString.substr(nameIndex+"active".length);
            }
            this.className = classString;

        }, false);
    }
}
    </script>