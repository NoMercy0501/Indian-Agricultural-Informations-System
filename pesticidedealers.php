<?php
	require ("db.php");
	$sql="Select * from pesticidedealers";
	$res=mysqli_query($conn,$sql);

	
	
	while($row=mysqli_fetch_array($res)){
		$data1[]=$row['Total Valid Dealer'];
		$data2[]=$row['Total Invalid Dealer'];
		$data3[]=$row['TOTAL'];
		$states1[]=$row['State'];
		$states = "'" . implode( "','",$states1) . "'";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesticide Dealers Report</title>
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <?php include("core_css.php");?>

</head>

<body class="homepage">
	<?php include("header1.php");?>
	<script>$(document).ready(function(){$('#menu3').addClass('active');}) ;</script>
	<section class="container">

	<div class="row">

	<?php include("info-sidebar.php"); ?>
	<script>$(document).ready(function(){$('#prod4').addClass('active');}) ;</script>

	<section class="col-sm-9 container-panel">

		 <div class="clearfix">
		<ul class="breadcrumb"><li><a href="index.php">Home </a></li><li><a href="information.php">Information Hub </a></li><li><a href="#">PESTICIDE DEALERS </a></li></ul>
	 
	  </div>

	   <!--[/breadcrumb]-->

 <div class="clearfix data-overview">
	<script src="http://code.highcharts.com/stock/highstock.js"></script>
	<script src="../highcharts/code/modules/exporting.js"></script>
	<script src="../highcharts/code/modules/export-data.js"></script>
	
	<div id="container" class="container-panel" style="height:600px;"></div>
	
	
		<script type="text/javascript">
		
		Highcharts.chart('container', {
			chart: {
				type: 'column'
			},
			title: {
							text: 'Pesticide Dealers Report'
			},
			subtitle: {
							text: 'Source: <a href="http://www.farmer.gov.in">farmer.gov.in</a>'
			},
			xAxis: {
							categories: [<?php echo $states; ?>],
							max:5,
							title: {
								text: 'States'
							}
			},
			yAxis: {
				min: 0,
				title: {
					text: 'Dealers'
				}
			},
			credits: {
			  enabled: false
		  },
			legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'top',
							x: -40,
							y: 80,
							floating: true,
							borderWidth: 1,
							backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
							shadow: true,
							reversed:true
						},
			plotOptions: {
				
			},
			series: [{
							name: 'Total Valid Dealers',
							data: [<?php echo join($data1, ','); ?>]
						}, {
							name: 'Total Invalid Dealers',
							data: [<?php echo join($data2, ','); ?>]
						}, {
							name: 'Total Dealers',
							data: [<?php echo join($data3, ','); ?>]
						}],
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