<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Maxitechture</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?php echo base_url(); ?>"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="#">Home</a></li> 
								<li class="nav-item"><a class="nav-link" href="#tabel">Table</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Maxitechture</h2>
						<p><b>It's time to manage your employees</b></p>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
		<!-- Start Button -->
		<section id="tabel" class="button-area">
			<div class="container border-top-generic">
				<div class="section-top-border">
					<div class="table-title">
            			<div class="row">
                   			<div class="col-sm-6">
								<h2>Manage <b>Employees</b></h2>
								<a href='<?php echo base_url("pegawai/tambah"); ?>' class="btn btn-success"><span>Add New Employee</span></a>
							</div>
               			</div>
            		</div>
            	</div>
				<div class="container">
        			<div class="table-wrapper">
            			<table class="table table-striped table-hover">
                			<thead>
                   				<tr>
                                    <th>ID</th>
                  				    <th>Name</th>
                        			<th>Email</th>
									<th>Address</th>
                        			<th>Phone</th>
                        			<th>Actions</th>
                    			</tr>
                			</thead>
                			<tbody>
                    			<tr>
                    			    <?php
                                        if( ! empty($pegawai)){ // Jika data pegawai tidak sama dengan kosong, artinya jika data pegawai ada
                                            foreach($pegawai as $data){
                                            echo "<tr>
                                            <td>".$data->id."</td>
                                            <td>".$data->name."</td>
                                            <td>".$data->email."</td>
                                            <td>".$data->address."</td>
                                            <td>".$data->phone."</td>
                                            <td><a href='".base_url("pegawai/ubah/".$data->id)."' class='edit'> <i class='material-icons' title='Edit'>&#xE254;</i></a>
                                                <a href='".base_url("pegawai/hapus/".$data->id)."' class='delete'><i class='material-icons' title='Delete'>&#xE872;</i></td>
                                            </tr>";
                                            }
                                        }else{ // Jika data pegawai kosong
                                            echo "<tr><td align='center' colspan='6'>Data Tidak Ada</td></tr>";
                                        }
                                    ?>
                			</tbody>
            			</table>
        			</div>
    			</div>
			</div>
	<!-- End Align Area -->



	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Delete Employee</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" value="Delete">
					</div>
				</form>
			</div>
		</div>
	</div>
   
        <!--================Footer Area =================-->
        <footer class="footer_area p_120">
        	<div class="container">
        		<div class="copy_right_text">
        			<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        		</div>
        	</div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>