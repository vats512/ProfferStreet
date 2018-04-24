<!DOCTYPE html>
<html lang="en">
<head>
    <title>Proffer Street</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="fancy/fancy.css" />
    <link rel="shortcut icon" href="img/favicon.png"/>
    <style>
        #header
        {
            padding-top: 5px;
            z-index: 10000;
        }
        #header #search_box
        {
            margin-top: 10px;
        }
        #header a
        {
            font-size: 120%;
        }
        #dropdown_menu
        {
            z-index: 300;
        }
        #myCarousel
        {
          z-index: 0;
        }
    </style>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="fancy/fancy.js"></script>
    <script type="text/javascript" src="js/general.js"></script>
  </head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-inverse" id="header">
  <div class="container-fluid">
    <div class="navbar-header col-sm-8">
      <a class="navbar-brand" href="http://localhost/DE/">ProfferStreet</a>
        <div class="col-sm-9">
            <div class="form-group has-feedback">
              <input type="search" id="search_box" class="form-control" placeholder="Search Product"/>
              <span class="glyphicon glyphicon-search form-control-feedback"></span>
            </div>
            <ul id="search_list" style="display: none">
            </ul>
        </div>
    </div>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-tasks"></span> Products </a>
        <ul class="dropdown-menu">
          <li><a href="autodisplay.php" onclick="window.location.href='autodisplay.php'">Automobile</a></li>
          <li><a href="antidisplay.php" onclick="window.location.href='antidisplay.php'">Antique</a></li>
          <li><a href="furnidisplay.php" onclick="window.location.href='furnidisplay.php'">Furniture</a></li>
          <li><a href="eledisplay.php" onclick="window.location.href='eledisplay.php'">Electronics</a></li>
          <li><a href="display.php" onclick="window.location.href='display.php'">Others</a></li>
        </ul>
      </li>
        <li><a href="#flipperr"><span class="glyphicon glyphicon-thumbs-up"></span> Trending</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account 
            <span class="glyphicon glyphicon-menu-down"></span></a>
        <ul class="dropdown-menu" id="dropdown_menu" style="z-index: 10000">
    		<?php session_start();
      			if(isset($_SESSION['user_id']))
      			{echo '
                <li><a href="viewsort.php" onclick="window.location.href=\'viewsort.php\'">View Shortlist</a></li>
                <li><a style="cursor: pointer" data-toggle="modal" id="track_a" data-target="#track_order">Track Order</a></li>
                <li><a href="profile.php" onclick="window.location.href=\'profile.php\'">My Profile</a></li>
      			<li><a href="logout.php" onclick="window.location.href=\'logout.php\'">Log out</a></li>';
      			}
      			else{
      				echo '
      				<li><a href="signin.php" onclick="window.location.href=\'signin.php\'">Login</a></li>';
      				}
          ?>
        </ul>
      </li>
    </ul>
    <div class="modal fade" id="track_order" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content" style="height: 280px">
          <div class="modal-header" style="background-color: #0da3e2">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Track Your Order</h4>
          </div>
          <div class="modal-body">
            <div>
              <form role="form">
                <div class="form-group col-sm-12 lr0pad">
                  <input type="text" class="form-control col-sm-6" id="order_id" autocomplete="off" placeholder="Order ID"/>
                </div>
              </form>
              <button type="submit" class="btn btn-blue" id="track_btn">
                <span class="glyphicon glyphicon-screenshot"></span> Track
              </button><br/><br/>
              <div id="track_status_div">
                <img src="img/small_loader.gif" style="display: none"/>
                <div class="progress" id="progress_bar" style="display: none">
                  <div class="progress-bar progress-bar-striped active text-center" role="progressbar" style="width:0%">
                  </div>
                </div>
                <span class="h4" id="track_status" style="display: none"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
