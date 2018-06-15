<?php
	require("db.php");
	$sql="SELECT State_Name FROM diagnostics_lab GROUP by State_Name ORDER by State_Name";
	$res=mysqli_query($conn,$sql);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Diagnostics Labs </title>
	<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
	<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
	<link href="css/jquery.dataTables.mina.css" rel="stylesheet">
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
<script>$(document).ready(function(){$('#prod7').addClass('active');}) ;</script>

<section  class="col-sm-9 container-panel">

 <!--[/Banner]-->

     <!--[breadcrumb]-->

     <div class="clearfix">
  	<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Info Hub</a></li><li><a href="#">DIAGNOSTICS LABS </a></li></ul>
 
  </div>

   <!--[/breadcrumb]-->

 <div class="clearfix data-overview">
	
	 <div class="row">
				<div class="col-md-2"></div>
				<script>
					$(window).on('load', function(){
								$.ajax({
									type:"POST",
									url:"setdiagtable.php",
									success:function(html){
										$("#labtable1").html(html);
									}
								});
					});
					$(window).on('beforeunload', function(){
								$.ajax({
									type:"POST",
									url:"setdiagtable.php",
									success:function(html){
										$("#labtable1").html(html);
										$("#state").html("<option value='All' selected>-All-</option>");
										$("#district").html("<option value='All' selected>-All-</option>");
									}
								});
								$("#state").html("<option value='All' selected>-All-</option>");
								$("#district").html("<option value='All' selected>-All-</option>");
					});
				</script>
                <div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="state">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   </label><select style="width:220px;" class="dropdown" id="state" name="state" onchange="get_districts();" >
						<option value="All" selected>-All-</option>
							<?php 
								while($test=mysqli_fetch_array($res)){
									printf("<option value='%s'>%s</option>",$test['State_Name'],$test['State_Name']);
								}
							?>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="district">District&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   </label><select style="width:220px;" class="dropdown" id="district" name="district" onchange="set_table1();" >
						<option value="All" selected>-All-</option>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<script type="text/javascript">
					function get_districts(){
								var state=$("#state").val();
								$.ajax({
									type:"POST",
									url:"get_dl_districts.php",
									data:{'State':state},
									success:function(html){
										$("#district").html(html);
									}
								});
								set_table1();
							}
							function set_table1(){
								var state=$("#state").val();
								var district=$("#district").val();
								$.ajax({
									type:"POST",
									url:"setdiagtable1.php",
									data:{'StateCD':state,'District':district},
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