<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo base_url('img/favicon.png');?>" type="image/png">
        <title>Maxitechture</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('vendors/linericon/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url();?>https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="<?php echo base_url('vendors/owl-carousel/owl.carousel.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('vendors/lightbox/simpleLightbox.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('vendors/nice-select/css/nice-select.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('vendors/animate-css/animate.css');?>">
        <!-- main css -->
        <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/responsive.css');?>">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="<?php echo base_url(); ?>"><img src="<?php echo base_url('img/logo.png'); ?>" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
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

            <!-- Start Form Area -->
            <div class="whole-wrap">
                <div class="container">
                    <div class="section-top-border">
                        <div class="row">
                            <div class="col-lg-8 col-md-8">
                                <h3 class="mb-30 title_color">Add Employee</h3>
                                    <!-- Menampilkan Error jika validasi tidak valid -->
                                    <div style="color: red;"><?php echo validation_errors(); ?></div>
                                
                                <?php echo form_open("pegawai/tambah"); ?>
                                    <div class="mt-10">
                                        <input type="text" name="input_id" placeholder="ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ID'" required class="single-input" value="<?php echo set_value('input_id'); ?>">
                                    </div>
                                    <div class="mt-10">
                                        <input type="text" name="input_name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input" value="<?php echo set_value('input_name'); ?>">
                                    </div>
                                    <div class="mt-10">
                                        <input type="email" name="input_email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input" value="<?php echo set_value('input_email'); ?>">
                                    </div>
                                    <div class="mt-10">
                                        <textarea name="input_address" class="single-textarea" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required><?php echo set_value('input_alamat'); ?></textarea>
                                    </div>
                                    <div class="mt-10">
                                        <input type="text" name="input_phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required class="single-input" value="<?php echo set_value('input_phone'); ?>">
                                    </div>
                                    
                                    <div class="modal-footer">
                                        <a href="<?php echo base_url(); ?>"><input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel"></a>
                                        <input type="submit" name="submit" class="btn btn-success" value="Add">
                                    </div>
                                <?php echo form_close(); ?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Area -->






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
        <script src="<?php echo base_url('js/jquery-3.2.1.min.js');?>"></script>
        <script src="<?php echo base_url('js/popper.js');?>"></script>
        <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('js/stellar.js');?>"></script>
        <script src="<?php echo base_url('vendors/lightbox/simpleLightbox.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/nice-select/js/jquery.nice-select.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/isotope/imagesloaded.pkgd.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/isotope/isotope-min.js');?>"></script>
        <script src="<?php echo base_url('vendors/owl-carousel/owl.carousel.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/jquery-ui/jquery-ui.js');?>"></script>
        <script src="<?php echo base_url('js/jquery.ajaxchimp.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/counter-up/jquery.waypoints.min.js');?>"></script>
        <script src="<?php echo base_url('vendors/counter-up/jquery.counterup.js');?>"></script>
        <script src="<?php echo base_url('vendors/popup/jquery.magnific-popup.min.js');?>"></script>
        <script src="<?php echo base_url('js/mail-script.js');?>"></script>
        <script src="<?php echo base_url('js/theme.js');?>"></script>
    </body>
</html>        