<?php
	require('db.php');
	$conn1 = mysqli_connect('localhost', 'root', '');
	 if (!$conn1)
    {
	 die('Could not connect: ' . mysqli_error());
	}
	mysqli_select_db($conn1,'bigdata');
	$sql1="SELECT State_Name FROM state_season GROUP BY State_Name order by State_Name";
	$sql2="SELECT Season FROM state_season GROUP BY Season order by Season";
	$sql3="SELECT Crop_Year FROM state_cy GROUP BY Crop_Year order by Crop_Year";
	$sql4="SELECT Crop FROM state_crop GROUP BY Crop order by Crop";
	$res1=mysqli_query($conn1,$sql1);
	$res2=mysqli_query($conn1,$sql2);
	$res3=mysqli_query($conn1,$sql3);
	$res4=mysqli_query($conn1,$sql4);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Crop Area & Production</title>
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
<script>$(document).ready(function(){$('#prod15').addClass('active');}) ;</script>

<section  class="col-sm-9 container-panel">

 <!--[/Banner]-->

     <!--[breadcrumb]-->

     <div class="clearfix">
  	<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Info Hub</a></li><li><a href="#">CROP PRODUCTION </a></li></ul>
 
  </div>

   <!--[/breadcrumb]-->

<div class="clearfix data-overview">
	
	 <div class="row">
				<div class="col-md-3"></div>
				<script>
					$(window).on('load', function(){
								$.ajax({
									type:"POST",
									url:"setproductiontable.php",
									success:function(html){
										$("#labtable1").html(html);
									}
								});
					});
					$(window).on('beforeunload', function(){
								$("#state").html("<option value='All' selected>-All-</option>");
								$("#district").html("<option value='All' selected>-All-</option>");
								$("#season").html("<option value='All' selected>-All-</option>");
								$("#crop").html("<option value='All' selected>-All-</option>");
								$("#year").html("<option value='All' selected>-All-</option>");
					});
				</script>
                <div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="state">State</label>
					   <select style="width:220px;" class="dropdown" id="state" name="state" onchange="get_districts();get_crops();" >
						<option value="All" selected>-All-</option>
							<?php 
								while($test=mysqli_fetch_array($res1)){
									printf("<option value='%s'>%s</option>",$test['State_Name'],$test['State_Name']);
								}
							?>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="district">District</label>
					   <select style="width:220px;" class="dropdown" id="district" name="district" onchange="get_crops();set_table1();" >
						<option value="All" selected>-All-</option>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<script type="text/javascript">
							function get_districts(){
								var state=$("#state").val();
								$.ajax({
									type:"POST",
									url:"get_prod_districts.php",
									data:{'State':state},
									success:function(html){
										$("#district").html(html);
									}
								});
							}
				</script>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="season">Season</label>
					   <select style="width:220px;" class="dropdown" id="season" name="season" onchange="get_crops();set_table1();" >
						<option value="All" selected>-All-</option>
						<?php 
								while($test=mysqli_fetch_array($res2)){
									printf("<option value='%s'>%s</option>",$test['Season'],$test['Season']);
								}
							?>
						</select>
                    </div>
                </div><!--/.col-md-3-->
				<div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="year">Year</label>
					   <select style="width:220px;" class="dropdown" id="year" name="year" onchange="get_crops();set_table1();" >
						<option value="All" selected>-All-</option>
						<?php 
								while($test=mysqli_fetch_array($res3)){
									printf("<option value='%s'>%s</option>",$test['Crop_Year'],$test['Crop_Year']);
								}
							?>
						</select>
                    </div>
                </div><!--/.col-md-3-->
				<div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="crop">Crop</label>
					   <select style="width:220px;" class="dropdown" id="crop" name="crop" onchange="set_table1();" >
						<option value="All" selected>-All-</option>
						<?php 
								while($test=mysqli_fetch_array($res4)){
									printf("<option value='%s'>%s</option>",$test['Crop'],$test['Crop']);
								}
							?>
						</select>
                    </div>
                </div><!--/.col-md-3-->
				    </div>
				<script type="text/javascript">
							function get_crops(){
								var state=$("#state").val();
								var state=$("#district").val();
								var state=$("#season").val();
								var state=$("#year").val();
								$.ajax({
									type:"POST",
									url:"get_prod_crop.php",
									data:{'State':state,'District':district,'Season':season,'Year':Year},
									success:function(html){
										$("#crop").html(html);
									}
								});
							}
							function set_table1(){
								var state=$("#state").val();
								var district=$("#district").val();
								var season=$("#season").val();
								var year=$("#year").val();
								var crop=$("#crop").val();
								$.ajax({
									type:"POST",
									url:"setproductiontable1.php",
									data:{'State':state,'District':district,'Season':season,'Year':Year,'Crop':crop},
									success:function(html){
										$("#labtable1").html(html);
									}
								});
							}
				</script>
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