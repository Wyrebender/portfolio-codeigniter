				<div id="navigation" class="clearfix">
					<ul>
						<li class="page_home"><a class="hide_text" href="<?php echo base_url(); ?>index.php/home">Home</a></li>
						<li class="page_portfolio"><a class="hide_text" href="<?php echo base_url(); ?>index.php/portfolio">Portfolio</a></li>
						<li class="page_about_current">About</li>
						<li class="page_contact"><a class="hide_text" href="<?php echo base_url(); ?>index.php/contact">Contact</a></li>
					</ul>
				</div><!-- end navigation -->
			</div><!-- end container_header -->
		</div><!-- end wrapper_header_gradient -->
	</div><!-- end row_header -->
</div><!-- end bg_texture -->
<!-- ================================= [END HEADER] -->

<!-- [CONTENT]
================================================== -->
<div id="row_main">
	<div id="wrapper_main_gradient" class="center_layout">
		<div id="spotlight_graphic" class="center_layout">
			<div id="container_main">
				<div id="column_main" class="align_left">
					<div class="box_title"><img src="<?php echo base_url(); ?>images/headline_title_about.png" alt="About" />
						<h2 class="hide_text"><?php echo $header_text; ?></h2>
					</div><!-- end introduction -->
					<div class="box_subheader"><img src="<?php echo base_url(); ?>images/custom_text_here.png" alt="Here I Am"/>
						<h2 class="hide_text">Here I Am</h2>
					</div>
					<div id="biography">
						<div id="portrait" class="align_left"><img src="<?php echo base_url(); ?>images/franco_haley.jpg" alt="Franco Haley" /></div>
						<?php echo $this->load->view('includes/biography'); ?>
					</div>
				</div><!-- end column_main -->
				
				<div id="column_sidebar" class="align_right">
				
					<div class="followbox"></div>
					
					<div class="floaterbox" style="width:280px;">
						<div class="box_subheader"><img src="<?php echo base_url(); ?>images/custom_text_services.png" alt="Services"/>
							<h2 class="hide_text">Services</h2>
						</div>
						<div id="services" class="box_content"><?php echo $this->load->view('includes/services'); ?></div>
						
						<div class="box_subheader"><img src="<?php echo base_url(); ?>images/custom_text_availability.png" alt="Availability"/>
							<h2 class="hide_text">Availability</h2>
						</div>
						<div id="availability" class="box_content">
							<?php echo $this->load->view('includes/availability'); ?>
						</div><!-- end floaterbox -->
					</div><!-- end followbox -->
				</div><!-- end column_sidebar -->
					
				<div class="clearfix"></div>			
				
			</div><!-- end container_main -->
		</div><!-- end spotlight_graphic -->
	</div><!-- end wrapper_main_gradient -->
</div><!-- end row_main -->
<!-- ================================= [END CONTENT] -->

<?php echo $this->load->view('includes/analyticstracking'); ?>