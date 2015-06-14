<!DOCTYPE html>
<html>
<head>
	<title>IOC | Fuel Station management</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="<?php echo CSS ?>dist/css/roboto.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/material.min.css" rel="stylesheet">
    <link href="<?php echo CSS ?>dist/css/ripples.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo CSS1 ?>login.css">
</head>
<body>
<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="javascript:void(0)">IOC<sup>ALPHA</sup></a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo URL ?>stock">Stock management</a></li>
            <li><a href="<?php echo URL ?>clients">Clients</a></li>
            <li><a href="<?php echo URL ?>suppliers">Suppliers</a></li>
            <li><a href="<?php echo URL ?>employees">Employees</a></li>
            <li><a href="<?php echo URL ?>managers">Mangers' Hub</a></li>
            <li><a href="<?php echo URL ?>transport">Transportation</a></li>
            <li><a href="<?php echo URL ?>otherstocks">Oil stocks</a></li>
            <li><a href="<?php echo URL ?>revenue">Revenue</a></li>
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
</div>