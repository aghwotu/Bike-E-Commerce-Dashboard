<?php 

    session_start();   

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

    <!--  -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.css">
    

    <!-- CSS for sidebar-->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- CSS for the pages -->
    <link rel="stylesheet" type="text/css" href="css/style.css">



        <!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"></script>

<!-- Custom JavaScript -->
<script src="js/script.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
      <a class="navbar-brand" href="#" id="menu-toggle"><span><i class="fa fa-bars fa-lg"></i></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <!-- <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul> -->
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="icon ion-person"></span> </a></li>
        <li> <a href="includes/logout-submit.php" class=""><span class="fa fa-power-off"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>


<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand" style="margin-top: 50px;">
                    <a href="#">
                        Avatar
                    </a>
                </li>
                <!-- add class 'active' to the list item -->
                <li class="listAdmin">
                    <a href="index.php"><i class="icon ion-ios-home sidebar-icon" ></i id="lblicon">Dashboard</a>
                </li>
               
                <li class="listAdmin ">
                    <a href="products.php"><i class="icon ion-leaf sidebar-icon" ></i>Products</a>
                </li>
                <li class="listAdmin">
                    <a href="categories.php"><i class="icon ion-ios-albums sidebar-icon" ></i>Categories</a>
                </li>
                <li class="listAdmin ">
                    <a href="subcategories.php"><i class="icon ion-filing sidebar-icon" ></i>SubCategories</a>
                </li>
                <li class="listAdmin ">
                    <a href="braketypes.php"><i class="icon ion-aperture sidebar-icon" ></i>BrakeTypes</a>
                </li>
                <li class="listAdmin ">
                    <a href="profile.php"><i class="icon ion-image sidebar-icon" ></i>Media</a>
                </li>
                <li class="listAdmin ">
                    <a href="users.php"><i class="icon ion-android-people sidebar-icon" ></i>Users</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">

            <!-- <h1>This is a random header from the header.php file</h1> -->
            