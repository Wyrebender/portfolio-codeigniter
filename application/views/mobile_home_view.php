<!DOCTYPE html> 
<html> 
	<head> 
		<title>Portfolio - Franco Haley</title> 

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

<!-- [PAGE - Home]
================================================== -->
<div data-role="page" id="home" data-theme="c">

<!-- [HEADER]
================================================== -->
	<div data-role="header" id="row_header" data-theme="a">
		<h1>Home &#45; Franco Haley</h1>
	</div><!-- end #header -->

<!-- [CONTENT]
================================================== -->
	<div data-role="content">
		<div id="headline">
			<h4 id="logoh4">Franco Haley</h4>
	        <h6 id="logoh6" >Web Designer &#43; Developer</h6>   		
			<img src="<?php echo base_url(); ?>images/mobile/mobile_fh_logo.png" alt="logo">	
		</div><!-- end #headline -->

		<div id="menu">
			<ul data-role="listview" data-inset="true" data-filter="false">
				<li><a href="<?php echo base_url(); ?>index.php/mobile/portfolio" data-transition="fade">Portfolio</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/mobile/about" data-transition="fade">About</a></li>
				<li><a href="<?php echo base_url(); ?>index.php/mobile/contact" data-transition="fade">Contact</a></li>
			</ul>
		</div>
	</div><!-- end #content -->
	
	<!-- [FOOTER]
================================================== -->
	<div data-role="footer" id="row_footer" data-theme="b" data-position="fixed">	
		<p>Copyright 2013 Franco Haley</p>
	</div><!-- end #footer -->

	<?php echo $this->load->view('includes/analyticstracking'); ?>

</div><!-- end #home -->
<!-- ========================== [END PAGE - Home] -->

</body>
</html>