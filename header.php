<?php 
	error_reporting(E_ALL);
?>
<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
	<head>
		<?php
			if($GLOBALS['title']) {
			    $title = $GLOBALS['title'];
			} else {
			    $GLOBALS['title'] = "Welcome";        
			}
			if($GLOBALS['desc']) {  
			    $desc = $GLOBALS['desc'];
			} else {
			    $desc = "This is a default description of my website";      
			}
			if($GLOBALS['keywords']) {
			    $keywords = $GLOBALS['keywords'];   
			} else {
			    $keywords = "welcome, key, words";     
			}
		?>

		<title> <?php $title ?></title>
		<meta name="description" content="<?php $desc ?>">
		<meta name="keywords" content="<?php $keywords ?>">";
		<link rel="icon" href="./images/favicon.ico" type="image/x-icon">
		<meta charset="UTF-8">
		<!-- jquery -->
  		<script src="js/jquery-3.2.1.slim.min.js"></script>
		<!-- popper -->
  		<script src="js/popper.min.js"></script>
		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  		<script src="js/bootstrap.min.js"></script>
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css">
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
	</head>