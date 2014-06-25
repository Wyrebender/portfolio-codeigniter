<div id="content">
	<h2><?php echo $header_text?></h2>
	<div id="login_form">
		<?php echo form_open('signup'); ?>
			<ul> 
				<li class="legendLabel required"><label>* = required fields</label></li>
				<li id="unameLine" class="line">
					<label>Username</label><br />
					<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
					<span class="required">*</span><br />
					<span  class="error"><?php echo form_error('username'); ?></span>
				</li>
					
				<li id="passwordLine" class="line">
					<label>Password</label><br />
					<input type="password" name="userPassword" value="" size="50" />
					<span class="required">*</span><br />
					<span  class="error"><?php echo form_error('userPassword'); ?></span>
				</li>
		
				<li id="passwordConfLine" class="line">
					<label>Confirm Password</label><br />
					<input type="password" name="passconf" value="" size="50" />
					<span class="required">*</span><br />
					<span  class="error"><?php echo form_error('passconf'); ?></span>
				</li>
		
				<li id="emailLine" class="line">
					<label>Email</label><br />
					<input type="text" name="userEmail" value="<?php echo set_value('userEmail'); ?>" size="50" />
					<span  class="error"><?php echo form_error('userEmail'); ?></span>
				</li>
			</ul>
			
			<div>
				<input type="submit" value="Signup" /> |
				<a href="<?php echo base_url()?>index.php/site/login">Login</a>
			</div>
		</form>
	</div><!-- signup_form -->
</div>