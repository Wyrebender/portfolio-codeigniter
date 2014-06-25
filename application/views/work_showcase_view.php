				<div id="navigation" class="clearfix">
					<ul>
						<li class="page_home"><a class="hide_text" href="<?php echo base_url(); ?>index.php/home">Home</a></li>
						<li class="page_portfolio_current">Portfolio</li>
						<li class="page_about"><a class="hide_text" href="<?php echo base_url(); ?>index.php/about">About</a></li>
						<li class="page_contact"><a class="hide_text" href="<?php echo base_url(); ?>index.php/contact">Contact</a></li>
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
				<div id="column_main" class="align_left">
					<div class="box_title"><img src="<?php echo base_url(); ?>images/headline_title_portfolio.png" alt="Portfolio" />
						<h2 class="hide_text">Portfolio</h2>
					</div><!-- end introduction -->
					<div class="box_subheader"><img src="<?php echo base_url(); ?>images/custom_text_showcase.png" alt="Work Showcase"/>
						<h2 class="hide_text">Work Showcase</h2>
					</div>
					<div class="showcase_single clearfix">
						<p><a href="<?php echo base_url(); ?>index.php/portfolio">See My Portfolio</a></p>
						<br />
						<?php foreach($query as $row):?>

								<!--<a href="<?php echo base_url(); ?><?php echo $row->imageLargePath?>" data-lightbox="work" data-title="Image&#58; <?php echo $row->imageTitle?>">-->
									<img src="<?php echo base_url(); ?><?php echo $row->imageLargePath?>" alt="<?php echo $row->imageTitle?>" />
								<!--</a>-->
								<p><strong>Screenshot &#45; <?php echo $row->imageTitle?></strong></p>
								<br />							
							
							
							<?php if($row->imageAltLargePath):?>
								<!--<a href="<?php echo base_url(); ?><?php echo $row->imageAltLargePath?>" data-lightbox="work" data-title="Image&#58; <?php echo $row->imageTitle?>">-->
								
									<img src="<?php echo base_url(); ?><?php echo $row->imageAltLargePath?>" alt="<?php echo $row->imageAltTitle?>" />
								<!--</a>-->
								
								<p><strong>Screenshot &#45; <?php echo $row->imageAltTitle?></strong></p>
								<br />
							<?php endif?>
							
							<?php if($row->imageThirdLargePath):?>
							
								<!--<a href="<?php echo base_url(); ?><?php echo $row->imageThirdLargePath?>" data-lightbox="work" data-title="Image&#58; <?php echo $row->imageTitle?>">-->
									<img src="<?php echo base_url(); ?><?php echo $row->imageThirdLargePath?>" alt="<?php echo $row->imageThirdTitle?>" />
								<!--</a>-->
								
								<p><strong>Screenshot &#45; <?php echo $row->imageThirdTitle?></strong></p>
								<br />
							<?php endif?>
							
						<?php endforeach;?>
						<p><a href="<?php echo base_url(); ?>index.php/portfolio">See My Portfolio</a></p>
					</div><!-- end showcase_single -->
				</div><!-- end column_main -->

				<div id="column_sidebar" class="align_right">
					<div class="box_subheader"><img src="<?php echo base_url(); ?>images/custom_text_study.png" alt="Case Study"/>
						<h2 class="hide_text">Case Study</h2>
					</div>
					<div id="case_study" class="box_content">
						<?php echo $row->imageBody?>
					</div><!-- end box_subheader -->
				</div><!-- end column_sidebar -->
				
				<div class="clearfix"></div>			
				
			</div><!-- end container_main -->
		</div><!-- end spotlight_graphic -->
	</div><!-- end wrapper_main_gradient -->
</div><!-- end row_main -->
<!-- ================================= [END CONTENT] -->

<?php echo $this->load->view('includes/analyticstracking'); ?>