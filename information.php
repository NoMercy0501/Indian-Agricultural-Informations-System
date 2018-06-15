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
	<script>$(document).ready(function(){$('#menu3').addClass('active');}) ;</script>
	
	<section class="container">

<div class="row">

<?php include("info-sidebar.php"); ?>
<script>$(document).ready(function(){$('#prod').addClass('active');}) ;</script>

<section class="col-sm-9 container-panel">

     <div class="clearfix">
  	<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Information Hub </a></li></ul>
	
  </div>

   <!--[/breadcrumb]-->

 <div class="clearfix data-overview">
 	
	<h3>Welcome to IFFCO Information Hub:</h3>
	Here you can get inforamtion and reports related to various Agricultural based inputs and usages like:
	<ul>
		<li>Pesticides</li>
		<ul>
			<li>Pesticide Dealers Numbers around the Nation</li>
			<li>Do's & Don'ts while using & applying Pesticides</li>
		</ul>
		<li>LiveStock</li>
		<li>Animal & Birds Diseases & Symptoms</li>
		<li>Search for Diagnostics Laboratories all across the Nation</li>
		<li>Search for Soil Testing Laboratories all across the Nation</li>
		<li>Fertilizers</li>
		<ul>
			<li>Fertilizers Dealers Numbers around the Nation</li>
			<li>Do's & Don'ts while using & applying Fertilizers</li>
		</ul>
		<li>Indian Pest Management POP</li>
		<li>etc..</li>
	</ul>

	
	</div>
 
 </div>
</section>
</div>

</section>
	
	<?php
		include("bottomhome.php");
		include("footer.php");
		include("core_scripts.php");
	 ?>
</body>
</html>