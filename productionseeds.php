<?php
	require ("db.php");
	$sql="Select * from productionseeds";
	$res=mysqli_query($conn,$sql);
	$cols=mysqli_num_fields($res);
	$f=mysqli_fetch_fields($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production of Seeds Report</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <?php include("core_css.php");?>

</head>

<body class="homepage">
	<?php include("header1.php");?>
	<script>$(document).ready(function(){$('#menu3').addClass('active');}) ;</script>
	<section class="container">

	<div class="row">

	<?php include("info-sidebar.php"); ?>
	<script>$(document).ready(function(){$('#prod16').addClass('active');}) ;</script>

	<section class="col-sm-9 container-panel">

		 <div class="clearfix">
		<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Information Hub </a></li><li><a href="#">PRODUCTION/AVAILABILITY OF SEEDS </a></li></ul>
	 
	  </div>

	   <!--[/breadcrumb]-->

<div class="clearfix data-overview">
	
	<script src="http://code.highcharts.com/stock/highstock.js"></script>
	<script src="../highcharts/code/modules/exporting.js"></script>
	<script src="../highcharts/code/modules/export-data.js"></script>
	<div id="container" class="container-panel" style="height:600px;"></div>
	
	
		<script type="text/javascript">
			var series = [];
			<?php while($row=mysqli_fetch_array($res)){
				$data=array();
				for($i=1;$i<$cols;$i++){
				$data[]=$row[$i]*100;
				}
			?>
			series.push({
				name: "<?php echo $row['CROP']; ?>",
				data: [<?php echo join($data, ','); ?>]
			});
			<?php }?>
			Highcharts.chart('container', {
				 chart: {
					type: 'spline',
				},
				title: {
								text: 'Production/Availability of Seeds'
				},
				subtitle: {
								text: 'Source: <a href="http://www.farmer.gov.in">farmer.gov.in</a>'
				},
				xAxis: {
					categories: [<?php 	for($i=1;$i<$cols;$i++){printf("'%s',",$f[$i]->name);}?>],
					title: {
						text: 'Year Range'
					},
				},
				tooltip: {
					headerFormat: '<b>{series.name}</b><br/>',
					pointFormat: 'Production:{point.y}%'
				},
				yAxis: {
					min: 0,
					title: {
						text: '% of Total Seeds'
					}
				},
				credits: {
				  enabled: false
				},
				legend: {
						shadow: true,
						reversed:true
				},
				exporting:{
					showTable:false
				},
				plotOptions: {
					spline: {
						marker: {
							enable: true
						}
					}
				},
				series: series
			});
		</script>
	</div>
 
 </div>
</section>
</div>

</section>

	
	
	
	<?php
		include("footer.php");
	 ?>
	     <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>