<!DOCTYPE html>
<html>
<head>
	<title>IOC | Fuel Station management</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="<?php echo CSS ?>dist/css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/material.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/ripples.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS1 ?>header/spinkit.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS1 ?>login.css">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo CSS ?>header/favicon/favicon-16x16.png">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS1 ?>stocks/stocks.css">
    <script type="text/javascript" src="<?php echo JQuery ?>"></script>
</head>
<body>
<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/IOC/" id="brand">IOC<sup>ALPHA</sup></a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo URL ?>stocks" class="nav-bar">Stocks</a></li>
            <li><a href="<?php echo URL ?>clients" class="nav-bar">Clients</a></li>
            <li><a href="<?php echo URL ?>employees" class="nav-bar">Employees</a></li>
            <li><a href="<?php echo URL ?>transport" class="nav-bar">Transportation</a></li>
            <li><a href="<?php echo URL ?>carwash" class="nav-bar">Car wash</a></li>
            <li><a href="<?php echo URL ?>lube_service" class="nav-bar">Lube service</a></li>
            <li><a href="<?php echo URL ?>assets" class="nav-bar">Assets maintenance</a></li>
            <li><a href="<?php echo URL ?>revenue" class="nav-bar">Revenue</a></li>
        </ul>

 
        <ul class="nav navbar-nav navbar-right">
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
        $('.nav-bar').click(function(e){
            $('#loader').empty();
            $('#spinner').load('/IOC/views/css/header/spinkit.html');
            var url = $(this).attr("href");
            url = url.split('/');
            url = url[4];
        
            setTimeout(function(){
                console.log('timeout');
                
                $('#spinner').empty();

                if(url == 'stocks'){ 
                    $('#loader').load('/IOC/stocks',function(){
                        fadeIN();
                        console.log('Success !');
                    });   
                }
                else if(url == "clients"){
                    $('#loader').load('/IOC/clients',function(){
                        
                        console.log('Success !');
                    }); 
                }
                else if(url == "assets"){
                    $('#loader').load('/IOC/assets',function(){
                        
                        console.log('Success !');
                    }); 
                }
                else if(url == "employees"){
                    $('#loader').load('/IOC/employees',function(){
                        
                        console.log('Success !');
                    }); 
                }
                else if(url == "transport"){
                    $('#loader').load('/IOC/transport',function(){
                        
                        console.log('Success !');
                    }); 
                }
                else if(url == "carwash"){
                    $('#loader').load('/IOC/carwash',function(){
                        
                        console.log('Success !');
                    }); 
                }
                else if(url == "lube_service"){
                    $('#loader').load('/IOC/lube_service',function(){
                        
                        console.log('Success !');
                    }); 
                }
                else if(url == "revenue"){
                    $('#loader').load('/IOC/revenue',function(){
                        
                        console.log('Success !');
                    }); 
                }
                else{
                    $('#loader').load('/IOC/err',function(){
                        
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