<!DOCTYPE html> 
<html> 
	<head> 
		<title>About - Franco Haley</title>

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

<!-- [PAGE - About]
================================================== -->
<div data-role="page" id="about">

	<!-- [HEADER]
================================================== -->
	<div data-role="header" data-theme="a"><h1>About &#45; Franco Haley</h1><a href="<?php echo base_url(); ?>index.php/mobile" data-transition="fade" data-icon="home" data-iconpos="notext">Home</a></div><!-- #header -->
	
	<!-- [CONTENT]
================================================== -->
	<div data-role="content" data-theme="a">
		<div id="headline">
			<a href="<?php echo base_url(); ?>index.php/mobile" data-transition="fade"><img src="<?php echo base_url(); ?>images/mobile/mobile_fh_logo.png" alt="logo"></a>		
			<h4 id="logoh4">Franco Haley</h4>
	        <h6 id="logoh6" >Web Designer &#43; Developer</h6>   		
		</div><!-- #headline -->
		
		<div id="myphoto">
			<img src="<?php echo base_url(); ?>images/mobile/franco_haley.jpg" alt="Franco Haley">
		</div>
		<div id="bio">
		<p>First of all&#44; I would like to take a moment to say thank you for spending some time viewing my portfolio website.  Hopefully&#44; my <a href="<?php echo base_url(); ?>index.php/portfolio">work showcase</a> would help you to become more interested into working together as a team.</p>
<br />

<p>I was born in <a href="http://www.danville-va.gov/" target="_blank">Danville&#44; Virginia</a>&#44; which is located one mile from the North Carolina border.   Throughout the years in elementary school&#44; I have a passion in creating fine artwork.  Any creative skills I involved from art&#44; I have done it&#58; self-portrait drawing&#44; woodcarving&#44; pottery&#44; basket weaving&#44; and paper mache.</p> 
<br />

<p>But once I graduated in high school during the mid 1990s&#44; I would have never thought that my artistic skills would landed me into a desirable profession.  One of the careers I have found that required all the skills I have developed throughout the years was in dental laboratory technology.  So in 1997&#44; I graduated at <a href="http://www.reynolds.edu/" target="_blank">J. Sargeant Reynolds Community College</a> in Richmond&#44; Virginia with a degree in Associate of Applied Science and a Dental Laboratory Technology career certificate.  From there&#44; I decided to become an orthodontic laboratory technician and spent six years designing framework retainers and creating art in plastic appliances.</p>
<br />

<p> Throughout the years in working in a few dental laboratories&#44; its industry began to decline due to lack of dentists&#39; demand in laboratory services.  In 2003&#44; I moved back to my hometown&#44; Danville&#44; Virginia&#44; and attended <a href="http://www.dcc.vccs.edu/" target="_blank">Danville Community College</a> in search for a new career while I was working at a grocery store for five years. </p>
<br />

<p>Besides fine art&#44; my other passion is in computer technology.  During the years of attending Danville Community College&#44; I took various computer and information technology classes. I was later introduced to a web design curriculum and realized that building user interface layouts require something I am definitely capable to adapt&#58; graphic design skills. </p>
<br />

<p>I was so intrigued in learning web design&#59; I decided to further my skills by moving south and attending <a href="http://www.fullsail.edu/" target="_blank">Full Sail University</a>. in <a href="http://www.cityofwinterpark.org/" target="_blank">Winter Park&#44; Florida</a>.  So &#39;here I am&#39;.  I am now a college senior at Full Sail University&#44; following my passion and living my dream.</p>
<br />

<p>Oh by the way&#44; I love to listen to all types of music; especially smooth jazz&#44; electronica and 80s music.  One of my favorite artists is Paul Hardcastle &#40;smooth jazz genre&#41;.  In my downtime&#44; I enjoy road trips&#44; cycling and other outdoor activities.
</p>
	</div><!-- #bio -->
 	<a href="<?php echo base_url(); ?>index.php/mobile" data-role="button" data-transition="fade" data-icon="arrow-l">Back</a>
	</div><!-- #content -->
	
	<!-- [FOOTER]
================================================== -->
	<div data-role="footer" id="row_footer" data-theme="b"> 
		<p>Copyright 2013 Franco Haley</p>
	</div><!-- #footer -->

	<?php echo $this->load->view('includes/analyticstracking'); ?>

</div><!-- #about -->
<!-- ========================== [END PAGE - About] -->
	</body>
</html>