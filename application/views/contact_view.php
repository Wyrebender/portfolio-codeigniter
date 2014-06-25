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
<!-- ================================= [END HEADER] -->

<!-- [CONTENT]
================================================== -->
<div id="row_main">
	<div id="wrapper_main_gradient" class="center_layout">
		<div id="spotlight_graphic" class="center_layout">
			<div id="container_main">
				<div id="column_main" class="align_left">
					<div class="box_title"><img src="<?php echo base_url()?>images/headline_title_contact.png" alt="Contact" /><h2 class="hide_text"><?php echo $header_text?></h2></div>
					<div class="box_subheader"><img src="<?php echo base_url()?>images/custom_text_intouch.png" alt="Get In Touch With Me"/>
						<h2 class="hide_text">Get In Touch With Me</h2>
					</div>
					<div id="contact_form">
					<?php echo form_open('contact'); ?>
						<ul> 
							<li class="legendLabel required"><label>* = required fields</label></li>
							<li id="nameLine" class="line">
								<label>Name</label><span class="required">*</span><br />
								<input type="text" class="textfield" name="field_name" value="<?php echo set_value('field_name'); ?>" size="50" />
								<span  class="error"><?php echo form_error('field_name'); ?></span>
							</li>
							<li id="emailLine" class="line">
								<label>Email</label>
								<span class="required">*</span><br />
								<input type="text" class="textfield" name="email" value="<?php echo set_value('email'); ?>" size="50" />
								<span  class="error"><?php echo form_error('email'); ?></span>
							</li>
							<li id="phoneLine" class="line">
								<label>Phone</label><br />
								<input type="text" class="textfield" name="phone" value="<?php echo set_value('phone'); ?>" size="50" /><span id="hint">&nbsp;&nbsp;Example: 1234567890</span>
								<span  class="error"><?php echo form_error('phone'); ?></span>
							</li>
							<li id="messageLine" class="line">
								<label>Message</label><span class="required">*</span><br />
								<textarea id="textarea_contact" name="message" class="textfield" rows="20" cols="67"><?php echo set_value('message'); ?></textarea>
								<span  class="error"><?php echo form_error('message'); ?></span>
							</li>
							<li class="submit_button"><input type="submit" class="button" value="Submit" /></li>
						</ul>
					<?php echo form_close()?>
					</div><!-- end contact_form -->
				</div><!-- end column_main -->
				
				<div id="column_sidebar" class="align_right">
					<div class="followbox"></div>
					
					<div class="floaterbox" style="width:278px;">
						<div class="box_subheader">
							<img src="<?php echo base_url()?>images/custom_text_contact.png" alt="Contact Information"/>
							<h2 class="hide_text">Contact Information</h2>
						</div><!-- end box_subheader -->
						
						<div id="services" class="box_content">
							<h3>Franco Haley</h3>
							<p>Orlando, Florida</p>
							<br  />
							<p><strong>phone&#58;</strong> &#40;407&#41; 473&#45;2549</p>
						</div><!-- end services -->
						
						<div class="box_subheader">
							<img src="<?php echo base_url()?>images/custom_text_follow.png" alt="Follow Me, I/'m Social"/>
							<h2 class="hide_text">Follow Me, I'm Social</h2>
						</div><!-- end box_subheader -->
						
						<div id="social" class="box_content">
							<ul>
								<li>
									<a href="http://www.linkedin.com/profile/view?id=146275129&amp;authType=NAME_SEARCH&amp;authToken=gtEG&amp;locale=en_US&amp;srchid=5de956ac-8cc6-4015-8b54-e0f0dbba7efc-0&amp;srchindex=1&amp;srchtotal=4&amp;goback=%2Efps_PBCK_franco+haley_*1_*1_*1_*1_*1_*1_*2_*1_Y_*1_*1_*1_false_1_R_true_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;pvs=ps&amp;trk=pp_profile_name_link" target="_blank">
										<img src="<?php echo base_url()?>images/badge_linkedin.png" alt="LinkedIn badge"/><span>LinkedIn</span>
									</a>
								</li>
								<li>
									<a href="http://www.facebook.com/franco.haley" target="_blank">
										<img src="<?php echo base_url()?>images/badge_facebook.png" alt="Facebook badge"/><span>Facebook</span>
									</a>
								</li>
								<li>
									<a href="https://plus.google.com/117207795108738862355/posts"  target="_blank"/>
										<img src="<?php echo base_url()?>images/badge_google_plus.png" alt="Google+ badge"/><span>Google&plus;</span>
									</a>
								</li>
							</ul>
						</div><!-- end social -->
					</div><!-- end floaterbox -->
				</div><!-- end column_sidebar -->
				
				<div class="clearfix"></div>
					
			</div><!-- end container_main -->
		</div><!-- end spotlight_graphic -->
	</div><!-- end wrapper_main_gradient -->
</div><!-- end row_main -->
<!-- ================================= [END CONTENT] -->

<?php echo $this->load->view('includes/analyticstracking')?>