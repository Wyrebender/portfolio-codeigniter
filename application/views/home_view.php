				<div id="navigation" class="clearfix">
					<ul>
						<li class="page_home_current">Home</li>
						<li class="page_portfolio"><a class="hide_text" href="<?php echo base_url()?>index.php/portfolio">Portfolio</a></li>
						<li class="page_about"><a class="hide_text" href="<?php echo base_url()?>index.php/about">About</a></li>
						<li class="page_contact"><a class="hide_text" href="<?php echo base_url()?>index.php/contact">Contact</a></li>
					</ul>
				</div><!-- end navigation -->
				
			</div><!-- end container_header -->
		</div><!-- end wrapper_header_gradient -->
	</div><!-- end row_header -->
</div><!-- end bg_texture -->
<!-- ================================= [END HEADER] -->

<!-- [CONTENT]
=================================================== -->
<div id="row_main">
	<div id="wrapper_main_gradient" class="center_layout">
		<div id="spotlight_graphic" class="center_layout">
			<div id="container_main">

				<!-- [INTRODUCTION]
				=================================================== -->
				<div id="introduction" class="align_left">
					<?php echo $this->load->view('includes/introduction'); ?>
				</div><!-- end introduction -->
				
				<div id="triangle_ruler_graphic" class="align_left"></div>
				
				<div id="pen_graphic" class="clearfix align_left"></div>
				
				<div id="recent_work_header" class="clearfix">
					<img src="<?php echo base_url()?>images/custom_text_recent.png" alt="Recent Work"/>
					<h2 class="hide_text"><?php echo $header_text; ?></h2>
				</div>
				
				<!-- [RECENT WORK]
				=================================================== -->
				<ul class="gallery clearfix">
					<?php foreach($query as $row): ?>
						<?php $row->imageID = $row->imageURL; ?>
						<li>
							<a href="<?php echo base_url()?>index.php/portfolio/work_showcase/<?php echo $row->imageID?>">
								<img src="<?php echo base_url()?><?php echo $row->imagePath?>" alt="<?php echo $row->imageTitle?>"/>
							</a>
							<br />
							<p><strong><?php echo $row->imageTitle; ?></strong></p>
						</li>
					<?php endforeach;?>
				</ul><!-- end gallery -->
			</div><!-- end container_main -->
		</div><!-- end spotlight_graphic -->
	</div><!-- end wrapper_main_gradient -->
</div><!-- end row_main -->
<!-- ================================= [END CONTENT] -->

<?php echo $this->load->view('includes/analyticstracking')?>