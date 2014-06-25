<div id="content">

<h2><?php echo $header_text?></h2>
<div id="login_form">
	<?php echo form_open('blog/login'); ?>
	<p class="error">
		<?php if($this->session->flashdata('login_error'))
			{
				echo 'Invalid username or password.  Please try again.';
			}
		?>
	</p>
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
		</ul>
		<div>
			<input type="submit" value="Login" />
			<span> | Not a member, <a href="<?php echo base_url()?>index.php/site/signup">Signup</a></span>
		</div>
	</form>
</div><!-- login_form -->

</div><!-- content -->