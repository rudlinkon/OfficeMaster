<?php
/*
Template Name: Register Form
*/
get_header(); ?>

<section class="register_section" style="padding: 120px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="register_form">
<form name="registerform" id="registerform" action="<?php echo site_url(); ?>/wp-login.php?action=register" method="post" novalidate="novalidate">
	<p>
		<label for="user_login">Username<br>
		<input name="user_login" id="user_login" class="input" value="" size="20" type="text"></label>
	</p>
	<p>
		<label for="user_email">E-mail<br>
		<input name="user_email" id="user_email" class="input" value="" size="25" type="email"></label>
	</p>
    <p>
		<label for="father">Father's Name<br>
		<input name="user_father" id="father" class="input" value="" size="20" type="text"></label>
	</p>
    <p>
		<label for="mother">Mother's Name<br>
		<input name="user_mother" id="mother" class="input" value="" size="20" type="text"></label>
	</p>
    	<p id="reg_passmail">Registration confirmation will be e-mailed to you.</p>
	<br class="clear">
	<input name="redirect_to" value="" type="hidden">
	<p class="submit"><input name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Register" type="submit"></p>
</form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer();