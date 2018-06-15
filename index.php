<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home </title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <?php include("core_css.php");?>
</head>

<body class="homepage">
	<?php include("header1.php");?>
	<script>$(document).ready(function(){$('#menu1').addClass('active');}) ;</script>
	<?php
		include("main-slider.php");
		include("bottomhome.php");
		include("footer.php");
	 ?>
	     <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>