<!-- [FOOTER]
================================================== -->
<div id="row_footer">
	<div id="container_footer" class="center_layout">
		<p id="copyright" class="align_left">
			<?php
				$this->load->helper('date');
				$yearString = '%Y';
				
				echo '&copy; '.mdate($yearString).'&nbsp;Franco Haley&#58;&nbsp; Web Designer <strong>&plus;</strong> Developer';
			?>
			</p>
		
		<div id="social_footer" class="align_right">
			<ul>
				<li>
					<a href="http://www.linkedin.com/profile/view?id=146275129&amp;authType=NAME_SEARCH&amp;authToken=gtEG&amp;locale=en_US&amp;srchid=5de956ac-8cc6-4015-8b54-e0f0dbba7efc-0&amp;srchindex=1&amp;srchtotal=4&amp;goback=%2Efps_PBCK_franco+haley_*1_*1_*1_*1_*1_*1_*2_*1_Y_*1_*1_*1_false_1_R_true_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2_*2&amp;pvs=ps&amp;trk=pp_profile_name_link" target="_blank">
						<img src="<?php echo base_url()?>images/badge_linkedin.png" alt="LinkedIn badge"/><div class="hide_text">LinkedIn</div>
					</a>
				</li>
				<li>
					<a href="http://www.facebook.com/franco.haley" target="_blank">
						<img src="<?php echo base_url()?>images/badge_facebook.png" alt="Facebook badge"/><div class="hide_text">Facebook</div>
					</a>
				</li>
				<li>
					<a href="https://plus.google.com/117207795108738862355/posts"  target="_blank"/>
						<img src="<?php echo base_url()?>images/badge_google_plus.png" alt="Google+ badge"/><div class="hide_text">Google&plus;</div>
					</a>
				</li>
			</ul>
		</div><!-- end social -->
		<!-- <p id="render_time">Page rendered in <strong>{elapsed_time}</strong> seconds</p> -->
	</div><!-- end container_footer -->
</div><!-- end row_footer-->
<!-- ================================= [END FOOTER] -->

<p><a id="toTop" href="#"></a></p>

<!-- [SCRIPTS]
================================================== -->
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/lightbox.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/easing.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.jfollow.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.ui.totop.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/main.js"></script>

<!-- ================================= [END SCRIPTS] -->

</body>
</html>