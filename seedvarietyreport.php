<?php
	require("db.php");
	$typesql="SELECT Type FROM seedvariety GROUP BY Type ORDER BY Type";
	$res1=mysqli_query($conn,$typesql);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Seed Varities</title>
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
<script>$(document).ready(function(){$('#prod19').addClass('active');}) ;</script>

<section  class="col-sm-9 container-panel">

 <!--[/Banner]-->

     <!--[breadcrumb]-->

     <div class="clearfix">
  	<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Info Hub</a></li><li><a href="#">SEED VARITIES BY YEARS</a></li></ul>
 
  </div>

   <!--[/breadcrumb]-->

 <div class="clearfix data-overview">
	
	 <div class="row">
				<div class="col-md-2"></div>
				<script>
					$(document).ready(function(){
								var type=$("#type").val();
								var crop=$("#crop").val();
								var year=$("#year").val();
								$.ajax({
									type:"POST",
									url:"setvarietytabe.php",
									data:{'Type':type,'Crop':crop,'Year':year},
									success:function(html){
										$("#labtable1").html(html);
									}
								});
					});
					$(window).on('beforeunload', function(){
								var type=$("#type").val();
								var crop=$("#crop").val();
								var year=$("#year").val();
								$.ajax({
									type:"POST",
									url:"setvarietytabe.php",
									data:{'Type':type,'Crop':crop,'Year':year},
									success:function(html){
										$("#labtable1").html(html);
									}
								});
								$("#type").html("<option value='All' selected>-All-</option>");
								$("#crop").html("<option value='All' selected>-All-</option>");
								$("#year").html("<option value='All' selected>-All-</option>");
					});
				</script>
                <div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="type">Type of Crops&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   </label><select style="width:220px;" class="dropdown" id="type" name="type" onchange="get_crops();" >
						<option value="All" selected>-All-</option>
							<?php 
								while($test=mysqli_fetch_array($res1)){
									printf("<option value='%s'>%s</option>",$test['Type'],$test['Type']);
								}
							?>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="crop">Name of Crop&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   </label><select style="width:220px;" class="dropdown" id="crop" name="crop" onchange="set_table1();" >
						<option value="All" selected>-All-</option>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<script>
					function get_crops(){
								var type=$("#type").val();
								$.ajax({
									type:"POST",
									url:"getcrops.php",
									data:{'Type':type},
									success:function(html){
										$("#crop").html(html);
									}
								});
								set_table1();
							}
				</script>
				<div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="year">Year&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   </label><select style="width:220px;" class="dropdown" id="year" name="year" onchange="set_table1();" >
						<option value="All" selected>-All-</option>
						<option value="2008" >2008</option>
						<option value="2009" >2009</option>
						<option value="2010" >2010</option>
						<option value="2011" >2011</option>
						<option value="2012" >2012</option>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<script type="text/javascript">
							function set_table1(){
								var type=$("#type").val();
								var crop=$("#crop").val();
								var year=$("#year").val();
								$.ajax({
									type:"POST",
									url:"setvarietytabe1.php",
									data:{'Type':type,'Crop':crop,'Year':year},
									success:function(html){
										$("#labtable1").html(html);
									}
								});
							}
						</script>
    </div>
	</br>
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