<?php $current_page;?>

<div id="navigation">
	<ul>
		<li><?php if($current_page == 'home') echo 'Home'; else echo '<a href="'.base_url().'index.php/home">Home</a>';?></li>
		<li><?php if($current_page == 'portfolio') echo 'Portfolio'; else echo '<a href="'.base_url().'index.php/portfolio">Portfolio</a>';?></li>
		<li><?php if($current_page == 'blog') echo 'Blog'; else echo '<a href="'.base_url().'index.php/blog">Blog</a>';?></li>
		<li><?php if($current_page == 'about') echo 'About'; else echo '<a href="'.base_url().'index.php/about">About</a>';?></li>
		<li><?php if($current_page == 'contact') echo 'Contact'; else echo '<a href="'.base_url().'index.php/contact">Contact</a>';?></li>
	</ul>
</div><!-- end navigation -->