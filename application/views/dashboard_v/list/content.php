<h1>Hoş Geldiniz</h1>
        <p class="lead">Bildiri göndermek ya da yönetmek istediğiniz kongreyi seçerek devam edebilirsiniz. Sadece aktif kongreler listelenir.</p>
 
 <div id="a0" class="btn-group-justified" style="width:100%">  
            <div class="row">    
			<?php foreach($items as $item) { ?>
           
				<div class="col-md-4">
                <?php if($item->isActive == 1) { ?>
					<div class="panel panel-primary ">
                    
						<div class="panel-heading">
                        
						<a class="panel-title" href="<?php echo base_url("kongre/kongre_sayfasi/$item->id") ?>">
							<table>
                            
								<tr>
<td width="65" align="left"><img src="<?php echo $item->img_url ?>" style="width:60px;height:60px;"/></td>
									<td  align="left"><?php echo $item->kongre_name ?></td>
								</tr>
                                
							</table>
						</a>
                         
						</div>
                        
					<div class="panel-body"><p>--- submission</p>
                    
					</div>
                   
					</div>
                    
				</div>
                <?php } ?>
                <?php } ?>