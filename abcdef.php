<script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
		serverProcessing:true,
		
		"scrollY": 340,
        "scrollX": true,
    } );
} );
</script>
<link href="css/jquery.dataTables.min.css" rel="stylesheet">
<style>
div.dataTables_wrapper {
		height:500px;
        width: 800px;
        margin: 0 auto;
    }
</style>
<table id="example" class="table table-bordered display nowrap" style="width:100%">
</table>