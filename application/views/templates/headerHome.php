<!DOCTYPE html>
<html>
<head>
  <link href="/global_styling.css" rel="stylesheet" type="text/css" />
  <link href="/navigation_menu.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<!--<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>-->
  
	<title><?php echo $title ?></title>
</head>
<body>
<div id=container data-role="page" data-theme="b">
  <div id=header data-role="header">
    <div id=title>
      <?php echo $title; ?>
    </div>
  </div>
  <?php 
    if ($this->session->userdata("logged_in")){
    ?>
    <div id="loginHeader">
      <?php echo "Currently logged in: ".$this->session->userdata("username");
      ?>
      <form action="logout"><input type="submit" value="logout" /></form>
      </div>
    <?php
    }
  ?> 
  <div data-role="content">
