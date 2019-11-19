
<?php

    $app = new App();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Azzara Bootstrap 4 Admin Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="<?php echo $url ?>vista/assets/img/icon.ico" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="<?php echo $url ?>vista/assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Open+Sans:300,400,600,700"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['<?php echo $url ?>vista/assets/css/fonts.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="<?php echo $url ?>vista/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $url ?>vista/assets/css/azzara.min.css">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="<?php echo $url ?>vista/assets/css/demo.css">
</head>
<body>
	<div class="wrapper">
		<!--
			Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
		-->
		<?php $app ->getComponent('header') ?>

		<!-- Sidebar -->
		<?php $app ->getComponent('sidebar') ?>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Dashboard</h4>
						<div class="btn-group btn-group-page-header ml-auto">
							<button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-ellipsis-h"></i>
							</button>
							
						</div>
					</div>
					
                </div>
                <div class="container-fluid">
                    <?php

                      if(isset($_GET['ruta']) &&  $_GET['ruta'] =="hola"){
                          echo "Existe";
                      }else{
                          echo "404";
                      }
                    
                    ?>
                </div>
			</div>
			
		</div>
		
		
	</div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo $url ?>vista/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?php echo $url ?>vista/assets/js/core/popper.min.js"></script>
<script src="<?php echo $url ?>vista/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?php echo $url ?>vista/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?php echo $url ?>vista/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?php echo $url ?>vista/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="<?php echo $url ?>vista/assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="<?php echo $url ?>vista/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?php echo $url ?>vista/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?php echo $url ?>vista/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?php echo $url ?>vista/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?php echo $url ?>vista/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="<?php echo $url ?>vista/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?php echo $url ?>vista/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $url ?>vista/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="<?php echo $url ?>vista/assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="<?php echo $url ?>vista/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="<?php echo $url ?>vista/assets/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<script src="<?php echo $url ?>vista/assets/js/setting-demo.js"></script>
<script src="<?php echo $url ?>vista/assets/js/demo.js"></script>
</body>
</html>