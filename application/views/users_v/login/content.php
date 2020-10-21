
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			
				<span><img src="<?php echo base_url("assets/assets/images/nku.jpg"); ?>"></span>
				
			
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Giriş Yap</h4>
	<form action="<?php echo base_url("userop/do_login"); ?>" method="post">
		<div class="form-group">
			<input id="sign-in-email" type="email" class="form-control" placeholder="E-posta" name="user_email">
            <?php if(isset($form_error)){ ?>
                    <small class="pull-right input-form-error"> <?php echo form_error("user_email"); ?></small>
                <?php } ?>
		</div>

		<div class="form-group">
			<input id="sign-in-password" type="password" class="form-control" placeholder="Şifre" name="user_password">
            <?php if(isset($form_error)){ ?>
                    <small class="pull-right input-form-error"> <?php echo form_error("user_password"); ?></small>
                <?php } ?>
		</div>

		
		<Button type="submit" class="btn btn-primary">GİRİŞ YAP</Button>
	</form>
</div><!-- #login-form -->

<div class="simple-page-footer">

	<p>
		<a href="<?php echo base_url("userop/register");?>"><b>Kayıt Ol !</b></a>
	</p>
    
    <p><a href="password-forget.html">Şifremi Unuttum ?</a></p>
    
</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->