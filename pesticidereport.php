<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Statistical Database</title>
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<link href="css/jquery.dataTables.min.css" rel="stylesheet">
	<style>
	
	</style>
	<?php include("core_css.php"); ?>
	
</head><!--/head-->

<body class="homepage" style="background-color:white;">

    <?php include("header1.php"); ?>
	
	<script>$(document).ready(function(){$('#menu3').addClass('active');}) ;</script>
	
<section class="container">

<div class="row" style="background-color:white;">

<?php include("info-sidebar.php"); ?>
<script>$(document).ready(function(){$('#prod10').addClass('active');}) ;</script>

<section  class="col-sm-9 container-panel">

 <!--[/Banner]-->

     <!--[breadcrumb]-->

     <div class="clearfix">
  	<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Info Hub</a></li><li><a href="#">PESTICIDE REPORT</a></li></ul>
 
  </div>

   <!--[/breadcrumb]-->

 <div class="clearfix data-overview">
 <table class="table table-bordered" >
        <caption>Statistical Database</caption>
        <thead>
      <tr>
                  <th class="views-field views-field-counter"  scope="col">
            S No          </th>
                  <th class="views-field views-field-title"  scope="col">
            Title          </th>
                  <th class="views-field views-field-php"  scope="col">
            Details          </th>
              </tr>
    </thead>
    <tbody>
          <tr class="odd views-row-first">
                  <td class="views-field views-field-counter" >
            1          </td>
                  <td class="views-field views-field-title" >
            ALL INDIA STATISTICS ON AREA UNDER CULTIVATION AND UNDER USE OF CHEMICAL &amp; BIO- PESTICIDES DURING 2010-11 TO 2015-16          </td>
                  <td class="views-field views-field-php" >
            <a href="pesticidereport1.php" title="Statistical Database">Details</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter" >
            2          </td>
                  <td class="views-field views-field-title" >
            Average Prices of the key Pesticides (Indiginous) during 2010-11 to 2015-16*          </td>
                  <td class="views-field views-field-php" >
            <a href="pesticideprices.php" title="Statistical Database">Details</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter" >
            3          </td>
                  <td class="views-field views-field-title" >
            PESTICIDEWISE    STATISTICS OF IMPORT OF PESTICIDES DURING 2010-11 TO 2015-16          </td>
                  <td class="views-field views-field-php" >
            <a href="pesticidereport2.php" title="Statistical Database">Details</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter" >
            4          </td>
                  <td class="views-field views-field-title" >
            PRODUCTION OF KEY PESTICIDES DURING 2010-11 TO 2015-16          </td>
                  <td class="views-field views-field-php" >
            <a href="pesticidereport3.php" title="Statistical Database">Details</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter" >
            5          </td>
                  <td class="views-field views-field-title" >
            PESTICIDEWISE STATISTICS OF EXPORT OF PESTICIDES DURING 2010-11 TO 2015-16          </td>
                  <td class="views-field views-field-php" >
            <a href="pesticidereport4.php" title="Statistical Database">Details</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter" >
            6          </td>
                  <td class="views-field views-field-title" >
            PESTICIDEWISE (IMPORTED) DEMAND DURING 2013-14 TO 2015-16          </td>
                  <td class="views-field views-field-php" >
            <a href="pesticidereport5.php" title="Statistical Database">Details</a>          </td>
              </tr>
          <tr class="odd">
                  <td class="views-field views-field-counter" >
            7          </td>
                  <td class="views-field views-field-title" >
            PESTICIDEWISE (INDIGINEOUS) DEMAND DURING 2010-11 TO 2015-16          </td>
                  <td class="views-field views-field-php" >
            <a href="pesticidereport6.php" title="Statistical Database">Details</a>          </td>
              </tr>
          <tr class="even">
                  <td class="views-field views-field-counter" >
            8          </td>
                  <td class="views-field views-field-title" >
            PESTICIDEWISE CONSUMPTION OF IMPORTED PESTICIDES DURING 2010-11 TO 2015-16          </td>
                  <td class="views-field views-field-php" >
            <a href="pesticidereport7.php" title="Statistical Database">Details</a>          </td>
              </tr>
          <tr class="odd views-row-last">
                  <td class="views-field views-field-counter" >
            9          </td>
                  <td class="views-field views-field-title" >
            PESTICIDEWISE CONSUMPTION OF INDIGENOUS PESTICIDES DURING 2010-11 TO 2015-16          </td>
                  <td class="views-field views-field-php" >
            <a href="pesticidereport8.php" title="Statistical Database">Details</a>          </td>
              </tr>
      </tbody>
</table>
</div>
	<div id="labtable1">
	</div>
 </div>
</section>




</div>



</section>

<?php
		include("footer.php");
		include("core_scripts.php");
?>

	
</body>
</html>