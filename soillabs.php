<?php
	require("db.php");
	$sql="Select StateCD,statenm from soiltestinglabs group by StateCD order by statenm";
	$res=mysqli_query($conn,$sql);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Soil Testing Labs </title>
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
<script>$(document).ready(function(){$('#prod6').addClass('active');}) ;</script>

<section  class="col-sm-9 container-panel">

 <!--[/Banner]-->

     <!--[breadcrumb]-->

     <div class="clearfix">
  	<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Info Hub</a></li><li><a href="#">SOIL TESTING LABS </a></li></ul>
 
  </div>

   <!--[/breadcrumb]-->

 <div class="clearfix data-overview">
	<h3 align="center">Search Labs by Location</h3>
	
	 <div class="row">
				<div class="col-md-2"></div>
				<script>
					$(document).ready(function(){
								$.ajax({
									type:"POST",
									url:"setsoiltable.php",
									success:function(html){
										$("#labtable1").html(html);
									}
								});
					});
					$(window).on('beforeunload', function(){
								$.ajax({
									type:"POST",
									url:"setsoiltable.php",
									success:function(html){
										$("#labtable1").html(html);
									}
								});
								$("#state").html("<option value='All' selected>-All-</option>");
								$("#district").html("<option value='All' selected>-All-</option>");
								$("#subdistrict").html("<option value='All' selected>-All-</option>");
					});
				</script>
                <div class="col-md-3 col-sm-2">
					<div class="widget">
                       <label for="state">State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   </label><select style="width:220px;" class="dropdown" id="state" name="state" onchange="get_district();get_subdistricts();set_table1();" >
						<option value="All" selected>-All-</option>
							<?php 
								while($test=mysqli_fetch_array($res)){
									printf("<option value='%d'>%s</option>",$test['StateCD'],$test['statenm']);
								}
							?>
						</select>
                    </div>    
                </div><!--/.col-md-3-->
				<script type="text/javascript">
							function set_table1(){
								var state=$("#state").val();
								
								$.ajax({
									type:"POST",
									url:"setstatetable.php",
									data:{'StateCD':state},
									success:function(html){
										$("#labtable1").html(html);
									}
								});
							}
						</script>
                <div class="col-md-3 col-sm-4">
                    <div class="widget">
                        <label for='district'>District</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select style="width:220px;" id='district' name='district' onchange='get_subdistricts();set_table2();'><option selected value='All'>-All-</option></select>
						<script type="text/javascript">
							function get_district(){
								var state=$("#state").val();
								var dataString="StateCD="+state;
								$.ajax({
									type:"POST",
									url:"getdistricts.php",
									data:dataString,
									success:function(html){
										$("#district").html(html);
									}
								});
							}
							function set_table2(){
								var district=$("#district").val();
								var state=$("#state").val();
								
								$.ajax({
									type:"POST",
									url:"setdistricttable.php",
									data:{'StateCD':state,'DistrictCD':district},
									success:function(html){
										$("#labtable1").html(html);
									}
								});
							}
						</script>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-2 col-sm-2">
                    <div class="widget">
                        <label for='subdistrict'>Block</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select style="width:220px;" id='subdistrict' name='subdistrict' onchange='set_table3();'><option selected value='All'>-All-</option></select>
						<script type="text/javascript">
							function get_subdistricts(){
								var district=$("#district").val();
								var state=$("#state").val();
								
								$.ajax({
									type:"POST",
									url:"getsubdistricts.php",
									data:{'StateCD':state,'DistrictCD':district},
									success:function(html){
										$("#subdistrict").html(html);
									}
								});
							}
							
							function set_table3(){
								var subdistrict=$("#subdistrict").val();
								var district=$("#district").val();
								var state=$("#state").val();
								$.ajax({
									type:"POST",
									url:"setsubdistricttable.php",
									data:{'StateCD':state,'DistrictCD':district,'SubDistrictCD':subdistrict},
									success:function(html){
										$("#labtable1").html(html);
									}
								});
							}
						</script>
                    </div>    
                </div><!--/.col-md-3-->
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