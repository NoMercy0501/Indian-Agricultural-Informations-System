<?php
	require ("db.php");
	$sql="Select * from animal_census";
	$res=mysqli_query($conn,$sql);
	$cols=mysqli_num_fields($res);
	$f=mysqli_fetch_fields($res);
	while($row=mysqli_fetch_array($res)){
		$states1[]=$row['State_Name'];
		$states = "'" . implode( "','",$states1) . "'";
		for($i=2;$i<$cols;$i++){
			$data[$i][]=$row[$i];
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestock Census</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <?php include("core_css.php");?>
</head>

<body class="homepage">
	<?php include("header1.php");?>
	<script>$(document).ready(function(){$('#menu3').addClass('active');}) ;</script>
	<section class="container">

	<div class="row">

	<?php include("info-sidebar.php"); ?>
	<script>$(document).ready(function(){$('#prod18').addClass('active');}) ;</script>

	<section class="col-sm-9 container-panel">

		 <div class="clearfix">
		<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Information Hub </a></li><li><a href="#">ANIMAL CENSUS </a></li></ul>
	 
	  </div>

	   <!--[/breadcrumb]-->

 <div class="clearfix data-overview">
	
	<script src="highstock.js"></script>
	<script src="../highcharts/code/modules/exporting.js"></script>
	<script src="../highcharts/code/modules/export-data.js"></script>
	<div id="container" class="container-panel" style="height:600px;"></div>
	
	
		<script type="text/javascript">
			var series = [];
			var i=2;<?php for($i=2;$i<$cols;$i++){?>
				series.unshift({
					name: "<?php echo $f[$i]->name; ?>",
					data: [<?php echo join($data[$i], ','); ?>]
				});
			<?php }?>
			Highcharts.chart('container', {
				chart: {
					type: 'column'
				},
				title: {
								text: 'Animal Census Report'
				},
				subtitle: {
								text: 'Source: <a href="http://www.farmer.gov.in">farmer.gov.in</a>'
				},
				xAxis: {
								categories: [<?php echo $states; ?>],
								max:4,
								min:0,
								title: {
									text: 'States'
								},
								
								
				},
				yAxis: {
					min: 0,
					title: {
						text: 'Animals'
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
					showTable:true
				},
				series: series,
				scrollbar: {
					enabled:true,
					barBackgroundColor: 'gray',
					barBorderRadius: 7,
					barBorderWidth: 0,
					buttonBackgroundColor: 'gray',
					buttonBorderWidth: 0,
					buttonArrowColor: 'yellow',
					buttonBorderRadius: 7,
					rifleColor: 'yellow',
					trackBackgroundColor: 'white',
					trackBorderWidth: 1,
					trackBorderColor: 'silver',
					trackBorderRadius: 7
				}
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