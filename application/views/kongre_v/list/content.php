<div class="row">
<div class="col-md-12">
				<h4 class="m-b-lg">
                Kongreler
                <a href="<?php echo base_url("kongre/new_form") ?>" class="btn btn-outline btn-primary btn-sm pull-right"> <i class=""></i>Kongre Ekle</a>
                </h4>
                </div>
<div class="col-md-12">
				<div class="widget p-lg">
                
                <?php if(empty($items)){?>
                
                <div class="alert alert-info text-center">
                   <p>Kongre Bulunamadı! Eklemek için <a href="<?php echo base_url("kongre/new_form") ?>">tıkla</a></p>
                </div>
                
                <?php } else { ?>
                
			            <table class="table table-hover">
						<thead>
                        <th><i class="fa fa-reorder"></i></th>
                        <th>Kongre Adı</th>
                        <th>Başlangıç Tarihi</th>
                        <th>Bitiş Tarihi</th>
                        <th>Sonuçlanma Tarihi</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                        </thead>
                        
                        <tbody class="sortable" data-url="<?php echo base_url("kongre/rankSetter"); ?>">
                        
                        <?php foreach($items as $item) { ?>
                        
                        <tr id="ord-<?php echo $item->id; ?>">
                        <td><i class="fa fa-reorder"></i></td>
                        <td><?php echo $item->kongre_name ?></td>
                        <td><?php echo $item->start_date ?></td>
                        <td><?php echo $item->finish_date ?></td>
                        <td><?php echo $item->announce_date ?></td>
                        
                        <td>
					             <input
                                 data-url="<?php echo base_url("kongre/isActiveSetter/$item->id"); ?>"
                                 class="isActive"
                                 type="checkbox"
                                 data-switchery
                                 data-color="#10c469"
                                 <?php echo ($item->isActive) ? "checked" : ""; ?>
                        </td>
                        
                        <td>
                     <button
                      data-url="<?php echo base_url("kongre/delete/$item->id"); ?>"
                     class="btn btn-sm btn-danger btn-outline remove-btn">
                     <i class="fa fa-trash"></i> Sil
                     </button>
                        <a href="<?php echo base_url("kongre/update_form/$item->id");?>" class="btn btn-outline btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Düzenle</button></a>
                        <a href="<?php echo base_url("kongre/image_form/$item->id");?>" class="btn btn-outline btn-sm btn-dark"><i class="fa fa-image"></i>Resim Ekle</button></a>
                        </td>
                        
                        </tr>
                        
                        <?php } ?>
                        
                        </tbody>
					</table>
                    <?php } ?>
				</div><!-- .widget -->
			</div><!-- END column -->