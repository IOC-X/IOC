<!DOCTYPE html>
<html>
<head>
	<title>IOC | Fuel Station management</title>
	<!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <!-- CSS loading animation -->
    <link href="<?php echo CSS ?>dist/css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/material.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS1 ?>header/spinkit.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS1 ?>login.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo CSS ?>header/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS1 ?>stocks/stocks.css">
    
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    
    <!-- CSS for morning stock for stocks module -->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS1 ?>stocks/morning_reading.css">
    <!-- CSS for pump status  -->
    <link rel="stylesheet" type="text/css" href="<?php echo CSS ?>stocks/pump/css/statuses.css">
    <!-- Jquery  -->
    <script type="text/javascript" src="<?php echo JQuery ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS1?>stocks/graph.css">

    <!-- Path for foating action button CSS -->
    <link href="<?php echo FLOATING ?>mfb.css" rel="stylesheet">
    <!-- Path for foating action button JS -->
    <script src="<?php echo FLOATING ?>mfb.js"></script>

    <script src="<?php echo BOWER ?>sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo BOWER ?>sweetalert/dist/sweetalert.css">

</head>
<body onbeforeunload="return myFunction()">
<div class="navbar navbar-default" id="NavBar">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/IOC/" id="brand">IOC<sup>v0.8</sup></a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo URL ?>stocks" class="nav-bar">Stocks</a></li>
            <li><a href="<?php echo URL ?>clients" class="nav-bar">Clients</a></li>
            <li><a href="<?php echo URL ?>employees" class="nav-bar">Employees</a></li>
            <li><a href="<?php echo URL ?>transport" class="nav-bar">Transportation</a></li>
            <li><a href="<?php echo URL ?>carwash" class="nav-bar">Car wash</a></li>
            <li><a href="<?php echo URL ?>lube_service" class="nav-bar">Lubricant service</a></li>
            <li><a href="<?php echo URL ?>assets" class="nav-bar">Assets maintenance</a></li>
            <li><a href="<?php echo URL ?>revenue" class="nav-bar">Revenue</a></li>
        </ul>

 
        <ul class="nav navbar-nav navbar-right">
            <li id="dashboard-li"><a href="index/Dashboard" id="dashboard">Dashboard</a></li>
            <li><a href="index/logout">Logout</a></li>
        <!--    <li class="dropdown">
                <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="javascript:void(0)">Action</a></li>
                    <li><a href="javascript:void(0)">Another action</a></li>
                    <li><a href="javascript:void(0)">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0)">Separated link</a></li>
                </ul>
            </li> -->
        </ul>
    </div>
    <script>
    
        $(window).ready(function(){
            var hash = window.location.hash;
            $('#loader').empty();
            $('#spinner').load('/IOC/views/css/header/spinkit.html');
            var len = hash.length;
            hash = hash.substring(2,len);
            console.log('Hash value' + hash);
            if(hash == ""){
                // setTimeout(function(){
                //     console.log('timeout');

                //     $('#spinner').empty();  
                    
                //         $('#loader').load('/IOC/',function(){
                //             fadeIN();
                //             window.location.hash = "/";
                //             console.log('Success !');
                //         });   
                    
                // },1000);
                return false;
            }
            console.log(hash);
                setTimeout(function(){
                    console.log('timeout');

                    $('#spinner').empty();  
                    $('#subloader').empty();
                    console.log('YUP ! ' + hashCheck(hash)[0]);
                    if(hashCheck(hash)[1]){
                        $('#loader').load('/IOC/' + hashCheck(hash)[0],function(){
                                fadeIN();
                        //        window.location.hash = "/" + hash;
                                console.log('Success !');
                        });
                        $('#subloader').load('/IOC/stocks/' + hashCheck(hash)[1],function(){
                            //console.log('morning_stock !');

                            $('#subloader').hide();
                            $('#subloader').fadeIn('slow');
                        });
                    }
                    else{
                        $('#loader').load('/IOC/' + hash,function(){
                            fadeIN();
                            window.location.hash = "/" + hash;
                            console.log('Success !');
                        }); 
                    } 
                    
                },1000);
                
            return false;
        });
        function hashCheck(url){
            var hashURL = url.split('/');
            //if(typeof hashURL[1] == 'string'){
                return hashURL;
            //}
        }
        // $(window).on('hashchange', function() {
        //     console.log(window.location.hash);   
        //     var hash = window.location.hash;
        //     if(hash == "#stocks"){
        //         alert('Stocks');
        //         setTimeout(function(){
        //             console.log('timeout');

        //             $('#spinner').empty();  
                    
        //                 $('#loader').load('/IOC/stocks',function(){
        //                     fadeIN();
        //                     window.location.hash = "stocks";
        //                     console.log('Success !');
        //                 });   
                    
        //         },1000);
        //         $('#subloader').empty();
        //     }
        // });
        
            
        
        $('.nav-bar').click(function(e){
            $('#loader').empty();
            $('#spinner').load('/IOC/views/css/header/spinkit.html');
            var url = $(this).attr("href");
            url = url.split('/');
            url = url[4];
            
            setTimeout(function(){
                console.log('timeout');

                $('#spinner').empty();
                window.location.hash = "/"+url;  
                if(url == 'stocks'){ 
                    $('#loader').load('/IOC/stocks',function(){
                        fadeIN();
                        console.log('Success !');
                    });  
                    if(window.mode == "Dashboard"){
                        alert('Das');
                    }
                }
                else if(url == '/'){
                    $('#loader').load('/IOC/',function(){
                        fadeIN();
                        console.log('Success index!');
                    });
                }
                else if(url == "clients"){
                    $('#loader').load('/IOC/clients',function(){
                        fadeIN();
                        console.log('Success !');
                    }); 
                }
                else if(url == "assets"){
                    $('#loader').load('/IOC/assets',function(){
                        fadeIN();
                        console.log('Success !');
                    }); 
                }
                else if(url == "employees"){
                    $('#loader').load('/IOC/employees',function(){
                        fadeIN();
                        console.log('Success !');
                    }); 
                }
                else if(url == "transport"){
                    $('#loader').load('/IOC/transport',function(){
                        fadeIN();
                        console.log('Success !');
                    }); 
                }
                else if(url == "carwash"){
                    $('#loader').load('/IOC/carwash',function(){
                        fadeIN();
                        console.log('Success !');
                    }); 
                }
                else if(url == "lube_service"){
                    $('#loader').load('/IOC/lube_service',function(){
                        fadeIN();
                        console.log('Success !');
                    }); 
                }
                else if(url == "revenue"){
                    $('#loader').load('/IOC/revenue',function(){
                        fadeIN();
                        console.log('Success !');
                    }); 
                }
                else{
                    $('#loader').load('/IOC/err',function(){
                        fadeIN();
                        console.log('Error !');
                    });    
                }
            },1000);
            $('#subloader').empty();
            e.preventDefault();
        });
        // $('#brand').click(function(e){
        //     $('#loader').load('/IOC/',function(){      
        //         console.log('Success !');
        //     }); 
        //    e.preventDefault(); 
        // });
        function fadeIN(){
            $('#loader').hide();
            $('#loader').fadeIn('slow');
        }

        $('#dashboard').click(function(e){
            e.preventDefault();
            if(!window.mode){
                window.mode = "Dashboard";
                $('#NavBar').fadeOut('fast').fadeIn('slow');
                setTimeout(function(){
                    $('#dashboard').text('Quit Dashboard');
                    $('#NavBar').removeClass('navbar navbar-default').addClass('navbar navbar-inverse');
                    window.mode = "Dashboard";
                    $('#loader').empty();
                },200);
            }
            else if(window.mode == "Dashboard"){
                $('#NavBar').fadeOut('fast').fadeIn('slow');
                setTimeout(function(){
                    $('#dashboard').text('Dashboard');
                    $('#NavBar').removeClass('navbar navbar-inverse').addClass('navbar navbar-default');
                    delete window.mode;
                    $('#loader').empty();
                },200);
            }
        });
    </script>
</div>
    <div class="col-lg-12">
        <div class="row">
        <div id="loader" class="col-md-3"> 

        </div>
        <div id="subloader" class="col-md-9">
            
        </div>
            <div style="padding-top:100px"></div>
            <div class="spinner" id="spinner">
            </div>
        </div>
        </div>
    </div>
