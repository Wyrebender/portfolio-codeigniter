				<div id="navigation" class="clearfix">
					<ul>
						<li class="page_home"><a class="hide_text" href="<?php echo base_url()?>index.php/home">Home</a></li>
						<li class="page_portfolio"><a class="hide_text" href="<?php echo base_url()?>index.php/portfolio">Portfolio</a></li>
						<li class="page_about"><a class="hide_text" href="<?php echo base_url()?>index.php/about">About</a></li>
						<li class="page_contact_current">Contact</li>
					</ul>
				</div><!-- end navigation -->
			</div><!-- end container_header -->
		</div><!-- end wrapper_header_gradient -->
	</div><!-- end row_header -->
</div><!-- end bg_texture -->

<!-- ================================= [END CONTENT] -->
<div id="row_main">
	<div id="wrapper_main_gradient" class="center_layout">
		<div id="spotlight_graphic" class="center_layout">
			<div id="container_main" class="twenty_pixel_padding">
				<h3>I'm sorry, your email did not go through.  Please try again.</h3>
				<br />
				<p><?php echo anchor('contact', 'Back to Contact'); ?></p>
			</div><!-- end container_main -->
		</div><!-- end spotlight_graphic -->
	</div><!-- end wrapper_main_gradient -->
</div><!-- end row_main -->
<!-- ================================= [END CONTENT] -->

<!-- [ANALYTICS]
================================================== -->
<?php echo $this->load->view('includes/analyticstracking')?>