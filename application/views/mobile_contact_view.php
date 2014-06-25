<!DOCTYPE html> 
<html> 
	<head> 
	<title>Contact - Franco Haley</title> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Franco Haley is a professional web designer and web developer who creates custom web sites, logos, CMS, and graphic designs." />
	<meta name="keywords" content="Franco, Haley, Franco Haley, Frank, portfolio, portfolio site, portfolio website, web, web designer, web developer, designer, developer, freelance, freelance web designer, freelance web developer, freelancing, graphic design, logo, branding, CMS, work showcase, facebook, youtube, linkedin, FSU, Full Sail University, DCC, Danville Community College, JSRCC, J. Sargeant Reynolds Community College" />
	<meta name="author" content="Franco Haley" />

	<link rel="shortcut icon" href="http://francohaley.com/images/fh_logo_icon.jpg" />	
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/themes/portfolio_custom_theme.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc2/jquery.mobile.structure-1.0rc2.min.css" /> 
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/mobile_styles.css">

	<?php echo $this->load->view('includes/analyticstracking'); ?>

	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>
	</head> 
<body> 

<div data-role="page" id="contact">
	<div data-role="header" data-theme="a"><h1>Contact &#45; Franco Haley</h1><a href="<?php echo base_url(); ?>index.php/mobile" data-transition="fade" data-icon="home" data-iconpos="notext">Home</a></div><!-- /header -->
	
	<div data-role="content" data-theme="a">
		<div id="headline">
			<a href="<?php echo base_url(); ?>index.php/mobile" data-transition="fade"><img src="<?php echo base_url(); ?>images/mobile/mobile_fh_logo.png" alt="logo"></a>		
			<h4 id="logoh4">Franco Haley</h4>
	        <h6 id="logoh6" >Web Designer &#43; Developer</h6>   		
		</div><!-- /headline -->
		
		<div class="content-primary">
			<h4>Follow Me: I'm Social</h4>
			<ul class="mobile_badges" data-role="listview">
				<li><a href="http://www.linkedin.com/profile/view?id=146275129&amp;authType=NAME_SEARCH&amp;authToken=gtEG&amp;locale=en_US&amp;srchid=5de956ac-8cc6-4015-8b54-e0f0dbba7efc-0&amp;srchindex=1&amp;srchtotal=4&amp;goback=%2Efps_PBCK_franco+haley_*1_*1_*1_*1_*1_*1_*2_*1_Y_*1_*1_*1_false_1_R_true_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;pvs=ps&amp;trk=pp_profile_name_link" target="_blank" data-transition="fade"><img src="<?php echo base_url(); ?>images/mobile/mb_badge_linkedin.png" alt="LinkedIn" class="ui-li-icon">LinkedIn</a></li>
				<li><a href="http://www.facebook.com/franco.haley" target="_blank" data-transition="fade"><img src="<?php echo base_url(); ?>images/mobile/mb_badge_facebook.png" alt="Facebook" class="ui-li-icon">Facebook</a></li>
				<li><a href="https://plus.google.com/117207795108738862355/posts" target="_blank" data-transition="fade"><img src="<?php echo base_url(); ?>images/mobile/mb_badge_google_plus.png" alt="Google+" class="ui-li-icon">Google&plus;</a></li>
			</ul>
		</div><!-- /content-primary --> 
		
		<div id="contact_form">
			<?php echo form_open('mobile/contact');?>
				<h4>Get In Touch With Me</h4>
				<div data-role="fieldcontain">
					<label for="phno">Name:</label><br />
					<input type="text" name="field_name" placeholder="First / Last Name" class="textfield" value="<?php echo set_value('field_name');?>" />
					<span  class="error"><?php echo form_error('field_name');?></span>
				</div>
				<div data-role="fieldcontain">
					<label for="phno">Email:</label><br />
					<input type="text" name="email"class="textfield" placeholder="user@domain.com" value="<?php echo set_value('email');?>" />
					<span  class="error"><?php echo form_error('email');?></span>
				</div>
				<div data-role="fieldcontain">
					<label for="phno">Phone:</label><br />
					<input type="text" name="phone"class="textfield" placeholder="1234567890"value="<?php echo set_value('phone');?>" />
					<span  class="error"><?php echo form_error('phone');?></span>
				</div>
				<div data-role="fieldcontain">
					<label for="msg">Message :</label><br />
					<textarea cols="40" rows="8" name="message" placeholder="Please enter message." class="textfield"><?php echo set_value('message');?></textarea>
					<span  class="error"><?php echo form_error('message');?></span>
				</div>
				<div data-role="fieldcontain" class="formbutton">
					<input type="submit" class="button" value="Submit" data-transition="fade"/>
				</div>
			<?php echo form_close(); ?>
		</div><!-- /contact_form -->
	</div><!-- /content -->
	
	<div data-role="footer" id="row_footer" data-theme="b">
		<p>Copyright 2013 Franco Haley</p>
	</div><!-- /footer -->

	<?php echo $this->load->view('includes/analyticstracking'); ?>

</div><!-- #contact -->

</body>
</html>