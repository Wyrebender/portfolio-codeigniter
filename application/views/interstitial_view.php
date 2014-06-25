<!DOCTYPE html> 
<html> 
	<head> 
	<title>Portfolio - Franco Haley</title>

	<!-- [META]
=================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Franco Haley is a professional web designer and web developer who creates custom web sites, logos, CMS, and graphic designs." />
	<meta name="keywords" content="Franco, Haley, Franco Haley, Frank, portfolio, portfolio site, portfolio website, web, web designer, web developer, designer, developer, freelance, freelance web designer, freelance web developer, freelancing, graphic design, logo, branding, CMS, work showcase, facebook, youtube, linkedin, FSU, Full Sail University, DCC, Danville Community College, JSRCC, J. Sargeant Reynolds Community College" />
	<meta name="author" content="Franco Haley" />
	
	<!-- [FAVICOM]
=================================================== -->
	<link rel="shortcut icon" href="http://francohaley.com/images/fh_logo_icon.jpg" />	
	
	<!-- [STYLESHEETS]
=================================================== -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/themes/portfolio_custom_theme.min.css">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0rc2/jquery.mobile.structure-1.0rc2.min.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/mobile_styles.css">
	
	<!-- [SCRIPTS]
=================================================== -->
	<script src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0rc2/jquery.mobile-1.0rc2.min.js"></script>
	<script type="text/javascript">
		if (screen.width<=600) {
			//**view this page**
		}
		else {
		   window.location.replace('<?php echo base_url(); ?>index.php/home');
		}
	</script>
	</head>
<body> 

<div data-role="page" id="interstitial">

	<!-- [HEADER]
=================================================== -->
	<div data-role="header" id="row_header" data-theme="a">
		<h1>Interstitial &#45; Franco Haley</h1>
	</div><!-- /header -->
<!-- ================================= [END HEADER] -->

<!-- [CONTENT]
=================================================== -->
	<div data-role="content" data-theme="a">
		<div id="headline">
			<h4 id="logoh4">Franco Haley</h4>
	        <h6 id="logoh6" >Web Designer &#43; Developer</h6>   		
			<img src="<?php echo base_url(); ?>images/mobile/mobile_fh_logo.png" alt="logo">		
		</div><!-- /headline -->
		
		<div id="screen_options">
			<h4>Choose Your francohaley.com Experience</h4>
			<ul>
				<li>
					<a href="<?php echo base_url(); ?>index.php/mobile/home" data-transition="fade">
						<img src="<?php echo base_url(); ?>images/mobile/mobile_button.jpg" alt="Mobile">
					</a>
				</li>
				<li>
					<a href="http://www.francohaley.com/index.php/home" data-transition="fade">
						<img src="<?php echo base_url(); ?>images/mobile/full_website_button.jpg" alt="Full Website">
					</a>
				</li>
			</ul>
		</div>
		
	</div><!-- /content -->
<!-- ================================= [END CONTENT] -->
	
	<!-- [FOOTER]
=================================================== -->
	<div data-role="footer" id="row_footer" data-theme="b">		
		<p>Copyright 2013 Franco Haley</p>
	</div><!-- /footer -->
</div><!-- /page-HOME -->
<!-- ================================= [END FOOTER] -->

<?php echo $this->load->view('includes/analyticstracking'); ?>
</body>
</html>