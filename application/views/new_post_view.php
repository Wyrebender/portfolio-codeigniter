				<div id="navigation" class="clearfix">
					<ul>
						<li class="page_home"><a class="hide_text" href="<?php echo base_url(); ?>index.php/home">Home</a></li>
						<li class="page_portfolio"><a class="hide_text" href="<?php echo base_url(); ?>index.php/portfolio">Portfolio</a></li>
						<li class="page_blog_current">Blog</li>
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
					<div class="box_title"><img src="<?php echo base_url(); ?>images/headline_title_blog.png" alt="Blog" /><h1>Blog</h1></div>
					<div class="box_subheader"><img src="<?php echo base_url(); ?>images/custom_text_new_post.png" alt="Posts"/>
						<h2 class="hide_text">Create New Post</h2></div>
					<div id="section_new_post">
						<?php echo form_open('blog/new_post');?>
							<ul> 
								<li class="legendLabel required"><label>* = required fields</label></li>			
								<li id="phoneLine" class="line">
									<label>Title</label>
									<span class="required">*</span><br />
									<input type="text" class="post_textfield" name="postTitle" value="<?php echo set_value('postTitle');?>" size="50" />
									<span  class="error"><?php echo form_error('postTitle');?></span>
								</li>
								<li id="messageLine" class="line">
									<label>New Post</label><span class="required">*</span>
									<textarea id="textarea_new_post" name="postBody" class="post_textfield" rows="20" cols="43"><?php echo set_value('postBody');?></textarea>
									<span class="error"><?php echo form_error('postBody');?></span>
									<span><input type="hidden" class="post_textfield" name="postDate" value="<?php print date("Y-m-d m:i:s");?>" size="50" /></span>
									<span><input type="hidden" class="post_textfield" name="displayDateTime" value="<?php print date("F j, Y, g:i a");?>" size="50" /></span>
								</li>
							</ul>
							
							<div>
								<input type="submit" class="button" value="Post" />&nbsp;&nbsp;&#124;&nbsp;&nbsp;<?php echo anchor('blog', 'Back to Blog'); ?>
							</div>
						</form>
					</div><!-- end section_new_post -->
				</div><!-- end column_main -->
				
				<div id="column_sidebar" class="align_right">
					<div class="followbox"></div>
					
					<div class="floaterbox" style="width:280px;">
						<div class="box_subheader"><img src="<?php echo base_url(); ?>images/custom_text_services.png" alt="Services"/>
							<h2 class="hide_text">Services</h2>
						</div>
						<div id="services" class="box_content"><?php echo $this->load->view('includes/services'); ?></div>
						
						<div class="box_subheader"><img src="<?php echo base_url(); ?>images/custom_text_availability.png" alt="Availability"/>
							<h2 class="hide_text">Availability</h2></div>
						
						<div id="availability" class="box_content">
							<?php echo $this->load->view('includes/availability'); ?>
						</div><!-- end availability -->
					</div><!-- end floaterbox -->
				</div><!-- end column_sidebar -->
					
				<div class="clearfix"></div>				
			</div><!-- end container_main -->
		</div><!-- end spotlight_graphic -->
	</div><!-- end wrapper_main_gradient -->
</div><!-- end row_main -->
<!-- ================================= [END CONTENT] -->