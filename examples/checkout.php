<?php 		
	session_start();
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Make your life sweeter</title>

    <!-- Core CSS - Include with every page -->
    <link href="../Versions/sb-admin-v2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Versions/sb-admin-v2/font-awesome/css/font-awesome.css" rel="stylesheet">


    <!-- Page-Level Plugin CSS - Blank -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="../Versions/sb-admin-v2/css/sb-admin.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

     	<?php require "navigation.php" ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Your product table</h1>
					<?php require "product_table.php" ?>
					 <!-- instruction -->
					<div class="timeline-panel">
						<div class="timeline-heading">
							<h4 class="timeline-title">Instruction</h4>
						</div>
						<div class="timeline-body">
							<p>This instruction has to ..
								First: you should ...
							</p>
						</div>
						<a href="checkout_handler.php" class="btn btn-default">Buy</a>
					</div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
		</div>
     </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../Versions/sb-admin-v2/js/jquery-1.10.2.js"></script>
    <script src="../Versions/sb-admin-v2/js/bootstrap.min.js"></script>
    <script src="../Versions/sb-admin-v2/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Blank -->

    <!-- SB Admin Scripts - Include with every page -->
    <script src="../Versions/sb-admin-v2/js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Blank - Use for reference -->

</body>

</html>
