
           <div class="row">
           
             <div class="col-md-12">
             
                <h4 class="m-b-lg">  Kongre Ekle </h4>
                
               </div>
                
        <div class="col-md-12">
         <div class="widget">
	      <hr class="widget-separator">
		   <div class="widget-body">
			 <div class="m-b-lg">	
				</div>
                           
                      
						<form action="<?php echo base_url("kongre/save");?>" method="post">
							<div class="form-group">
								<label>Kongre Adı</label>
								<input class="form-control"  placeholder="Kongre adını giriniz" name="ad"value="<?php echo isset($form_error) ? set_value("ad") : ""; ?>">
                                <?php if(isset($form_error)){ ?>
                            <small class="input-form-error"><?php echo form_error("ad");?> </small>
                        <?php } ?>
							</div>
							<div class="form-group">
								<label>Başlangıç Tarih</label>
								<input type="date" class="form-control"  placeholder="btarih"  name="btarih" value="<?php echo isset($form_error) ? set_value("btarih") : ""; ?>">
                                <?php if(isset($form_error)){ ?>
                            <small class="input-form-error"><?php echo form_error("btarih");?> </small>
                        <?php } ?>
							</div>
                            <div class="form-group">
								<label>Bitiş Tarihi</label>
								<input type="date" class="form-control"  placeholder="btstarih"  name="btstarih"value="<?php echo isset($form_error) ? set_value("btstarih") : ""; ?>">
                                <?php if(isset($form_error)){ ?>
                            <small class="input-form-error"><?php echo form_error("btstarih");?> </small>
                        <?php } ?>
							</div>
							
                            <div class="form-group">
								<label>Sonuçlanma Tarihi</label>
								<input type="date" class="form-control"  placeholder="starih"  name="starih"value="<?php echo isset($form_error) ? set_value("starih") : ""; ?>">
                                <?php if(isset($form_error)){ ?>
                            <small class="input-form-error"><?php echo form_error("starih");?> </small>
                        <?php } ?>
							</div>
                            
                            
                            
                       
							<button type="submit" class="btn btn-primary btn-md">Ekle</button>     
                            <a href="<?php echo base_url("kongre");?>" class="btn btn-md btn-danger">İptal</a>
                            
                            
                         
						</form>
					</div><!-- .widget-body -->
				</div><!-- .widget -->
			</div><!-- END column -->