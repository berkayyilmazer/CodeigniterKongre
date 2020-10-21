
<body class="simple-page">
	<div id="back-to-home">
		<a href="<?php echo base_url("login"); ?>" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
	</div>
<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			
			<span><img src="<?php echo base_url("assets/assets/images/nku.jpg"); ?>"></span>	
			
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Kayıt Ol</h4>
	<form action="<?php echo base_url("userop/do_register"); ?>" method="post">
    
		<div class="form-group">
                        
                        <input class="form-control" placeholder="Kullanıcı Adı" name="user_name" value="<?php echo isset($form_error) ? set_value("user_name") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("user_name"); ?></small>
                        <?php } ?>
                    </div>

                    
                    
                    <div class="form-group">
                       
                        <input class="form-control" placeholder="Ad Soyad" name="full_name" value="<?php echo isset($form_error) ? set_value("full_name") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("full_name"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        
                        <input class="form-control" type="email" placeholder="E-posta Adresi" name="email" value="<?php echo isset($form_error) ? set_value("email") : ""; ?>">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        
                        <input class="form-control" type="password" placeholder="Şifre" name="password">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("password"); ?></small>
                        <?php } ?>
                    </div>

                    <div class="form-group">
                        
                        <input class="form-control" type="password" placeholder="Şifre Tekrar" name="re_password">
                        <?php if(isset($form_error)){ ?>
                            <small class="pull-right input-form-error"> <?php echo form_error("re_password"); ?></small>
                        <?php } ?>
                    </div>

		
		<Button type="submit" class="btn btn-primary">KAYIT OL</Button>
	</form>
</div><!-- #login-form -->




	</div><!-- .simple-page-wrap -->