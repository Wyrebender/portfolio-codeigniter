<?php include_once("analyticstracking.php") ?>
<!DOCTYPE html> 
<html> 
	<head> 
		<title>Contact - Franco Haley</title> 
		<!-- [META]
================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Franco Haley is a professional web designer and web developer who creates custom web sites, logos, CMS, and graphic designs." />
		<meta name="keywords" content="Franco, Haley, Franco Haley, Frank, portfolio, portfolio site, portfolio website, web, web designer, web developer, designer, developer, freelance, freelance web designer, freelance web developer, freelancing, graphic design, logo, branding, CMS, work showcase, facebook, youtube, linkedin, FSU, Full Sail University, DCC, Danville Community College, JSRCC, J. Sargeant Reynolds Community College" />
		<meta name="author" content="Franco Haley" />
		
		<!-- [FAVICON]
================================================== -->
		<link rel="shortcut icon" href="http://francohaley.com/images/fh_logo_icon.jpg" />	
		
		<!-- [STYLESHEETS]
================================================== -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/themes/portfolio_custom_theme.min.css">
		<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc2/jquery.mobile.structure-1.0rc2.min.css" /> 
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/mobile_styles.css">
		
		<!-- [SCRIPTS]
================================================== -->
		<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>
	</head> 
<body> 

<!-- [PAGE - Contact (Submission Success)]
================================================== -->
<div data-role="page" id="contact">
	<div data-role="header" data-theme="a">
		<h1>Contact &#45; Franco Haley</h1>
		<a href="<?php echo base_url(); ?>index.php/mobile" data-transition="fade" data-icon="home" data-iconpos="notext">Home</a>
	</div><!-- #header -->
	
	<!-- [CONTENT]
================================================== -->
	<div data-role="content" data-theme="a">
		<div id="headline">
			<a href="<?php echo base_url(); ?>index.php/mobile" data-transition="fade"><img src="<?php echo base_url(); ?>images/mobile/mobile_fh_logo.png" alt="logo"></a>		
			<h4 id="logoh4">Franco Haley</h4>
	        <h6 id="logoh6" >Web Designer &#43; Developer</h6>   		
		</div><!-- #headline -->
		
		<div class="submission_results">
			<h4>Your form was successfully submitted!</h4>
			<pre>
				<p>Name: 		<?php echo set_value('field_name'); ?></p>
				<p>Email: 		<?php echo set_value('email'); ?></p>
				<p>Phone No: 	<?php echo set_value('phone'); ?></p>
				<p>Message:		<?php echo set_value('message'); ?></p>
			</pre>
		</div><!-- .submission_results -->
		<a href="<?php echo base_url(); ?>index.php/mobile/home" data-role="button" data-transition="fade" data-icon="arrow-l">Home</a>
</div><!-- #contact -->

	<!-- [FOOTER]
================================================== -->
	<div data-role="footer" id="row_footer" data-theme="b" data-position="fixed">
		<p>Copyright 2013 Franco Haley</p>
	</div><!-- #footer -->

	<?php echo $this->load->view('includes/analyticstracking'); ?>

</div><!-- #contact -->
<!-- ========================== [END PAGE - Contact (Submission Success)] -->

</body>
</html>