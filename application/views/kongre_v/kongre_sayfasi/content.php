
  	<h2><?php foreach($items as $item) { ?><i><?php echo $item->kongre_name ?></i> <?php } ?></h2>
    <div class="row">
    	<div class="col-md-6">
        	<div class="panel panel-primary">
            <div class="panel-heading">
            	<h3 class="panel-title"><span class="glyphicon glyphicon-file" aria-hidden="true"></span> Bildirilerim</h3>
            </div>
  			<div class="panel-body">
  			
			<a type="button" href="<?php echo base_url("bildiri/new_form");?>" class="btn btn-primary btn-lg btn-block">Yeni Bildiri</a>
            
            <a type="button" href="<?php echo base_url("bildiri/index/$item->id");?>" class="btn btn-primary btn-lg btn-block">Bildirilerim</a>
			
            
  			</div><!-- class="panel-body" -->
		</div><!--class="col-md-6" -->
 	</div>
 	<div class="col-md-6">
  		<div class="panel panel-primary">
  			<div class="panel-heading">
    		<h3 class="panel-title"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> Genel Kongre Bilgileri</h3>
  			</div>
            	<div class="panel-body" style="">
                <?php foreach($items as $item) { ?>
    			<p><?php echo $item->kongre_name ?></p>
    			<p><strong>Başlangıç Tarihi Date:</strong> <?php echo $item->start_date ?></p>
    			<p><strong>Bitiş Tarihi:</strong> <?php echo $item->finish_date ?><br></p>
    			<p><strong>Sonuçlanma Tarihi:</strong> <?php echo $item->announce_date ?><br></p>
    			<p><strong>Congress Web Site:</strong> <a target="_blank" href="#"</a></p>
				   <?php } ?>               </div>
		</div>
  	</div>
	</div>
  	<div class="row">
  		<div class="col-md-6">  		</div>
  	</div>
  	<div class="col-md-6">
	
			</div>
		</div>
   	</div>
</div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>