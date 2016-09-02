<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);

if($_POST['email'] && $_POST['pass'])
{
	$_SESSION['adminuser'] = $_POST['email'].$_POST['pass'] ;
}
?>
<!DOCTYPE html>
<html lang="en" ng-app="bluemazApp">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	 <!-- The above 3 meta tags *must* come first in the head; any other head 
         content must come *after* these tags -->
	<title>Blue Mazarine | Contemporary handmade ceramics</title>
	 <!-- build:css styles/main.css -->
	<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="styles/custyle.css" rel="stylesheet">
	<link href="styles/bootstrap-social.css" rel="stylesheet">
	 <!-- endbuild -->
	 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	<div ui-view="header"></div>
    <div ui-view="content"></div>
    <div ui-view="footer"></div>
    
	<!-- build:js scripts/main.js -->
   
	<script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/angular/angular.min.js"></script>
    <script src="../bower_components/angular-ui-router/release/angular-ui-router.min.js"></script>
    <script src="../bower_components/angular-resource/angular-resource.min.js"></script>
    <script src="../bower_components/angular-sanitize/angular-sanitize.js"></script>
	<script src="scripts/custom.js"></script>
	<script src="scripts/app.js"></script>
	<script src="scripts/controllers.js"></script>
	<script src="scripts/services.js"></script>
	
	<!-- endbuild -->
	
	 <!-- 
<script src="../wysiwyg/nicEdit.js"></script>
	 <? if(isset($_SESSION['adminuser'])){ echo'<script>bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });</script>'; } ?>
 -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-65274375-1', 'auto');
	  ga('send', 'pageview');

	</script> <!-- google snippet -->
	
</body>
</html>
