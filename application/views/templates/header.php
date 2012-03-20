<!DOCTYPE html>
<html>
<head>
  <link href="/global_styling.css" rel="stylesheet" type="text/css" />
  <link href="/navigation_menu.css" rel="stylesheet" type="text/css" />
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
  
	<title><?php echo $title ?></title>
</head>
<body>
<div id=container data-role="page" data-theme="a">
  <div id=header data-role="header">
    <div id=title>
      <?php echo $title; ?>
    </div>
  </div>
  <div data-role="content">
    <a href="../../pages">
    <img id="headerImage" src="/test.jpg" border="0">
    </a>
    <ul data-role="listview" data-inset="true">
      <li><a data-transition="slide" href="index">Home</a> </li>
      <li><a data-transition="slide" href="show_all_programs">Browse all programs</a> </li>
      <li><a data-transition="slide" href="search_programs">Search programs</a> </li>
      <li><a data-transition="slide" href="favorite_programs">Browse favorite programs</a> </li>
      <li><a data-transition="slide" href="browse_recently">Browse recently viewed</a> </li>
    </ul>
    <!--
    <div id="nav_menu"> 
      <ul id="nav_menu_list" data-role="listview" data-inset="true">
        <li>
          <?php $this->load->helper('url'); ?> 
          <a href=<?php $temp = site_url(); echo $temp; ?>>
            Home
          </a>
        </li>
        <li>   
          <?php $this->load->helper('url'); ?> 
          <a href=<?php $temp = site_url("/pages/show_all_programs"); echo $temp; ?>>
            Browse all programs
          </a>
        </li>
        <li>   
          <?php $this->load->helper('url'); ?> 
          <a href=<?php $temp = site_url("/pages/search_programs"); echo $temp; ?>>
            Search programs
          </a>
        </li>
        <li>   
          <?php $this->load->helper('url'); ?> 
          <a href=<?php $temp = site_url("/pages/favorite_programs"); echo $temp; ?>>
            Browse favorite programs
          </a>
        </li>
        <li>   
          <?php $this->load->helper('url'); ?> 
          <a href=<?php $temp = site_url("/pages/browse_recently"); echo $temp; ?>>
            Browse recently viewed
          </a> 
        </li>
      </ul>
    </div> -->
    
