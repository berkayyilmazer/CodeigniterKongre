<div class="row">
<div class="col-md-12">
				<h4 class="m-b-lg">
                Bildirilerim
                <a href="bildiri/new_form" class="btn btn-outline btn-primary btn-sm pull-right"> <i class=""></i>Bildiri Ekle</a>
                </h4>
                </div>
<div class="col-md-12">
				<div class="widget p-lg">
                
                <?php if(empty($items)){?>
                
                <div class="alert alert-info text-center">
                   <p>Bildiri Bulunamadı! Eklemek için <a href="<?php echo base_url("bildiri/new_form"); ?>">tıkla</a></p>
                </div>
                
                <?php } else { ?>
                
			            <table class="table table-hover">
						<thead>
                        <th><i class="fa fa-reorder"></i></th>
                        <th>Sunum Türü</th>
                        <th>Bildiri Başlığı</th>
                        <th>Durumu</th>
                        <th>İşlem</th>
                        </thead>
                        
                        <tbody class="sortable" data-url="<?php echo base_url("bildiri/rankSetter"); ?>">
                        
                        <?php foreach($items as $item) { ?>
                        
                        <tr id="ord-<?php echo $item->id; ?>">
                        <td><i class="fa fa-reorder"></i></td>
                        <td><?php echo $item->sunumturu ?></td>
                        <td><?php echo $item->title ?></td>
                        <td>-</td>
                        
                        
                        <td>
                   &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; 
                        <a href="<?php echo base_url("bildiri/show_form/$item->id");?>" class="btn btn-sm btn-success"><i class="fa fa-pencil-square-o"></i>Görüntüle</button></a>
                        <a href="<?php echo base_url("bildiri/update_form/$item->id");?>" class="btn  btn-sm btn-info"><i class="fa fa-pencil-square-o"></i>Düzenle</button></a>
                        <a href="<?php echo base_url("bildiri/yazarlar_form/$item->id");?>" class="btn  btn-sm btn-warning"><i class="fa fa-pencil-square-o"></i>Yazarlar</button></a>
                        <a href="#" class="btn  btn-sm btn-dark"><i class="fa fa-pencil-square-o"></i>Tam Metin</button></a>
                        <a href="#" class="btn  btn-sm btn-success"><i class="fa fa-pencil-square-o"></i>Onayla</button></a>
                        <button
                      data-url="<?php echo base_url("bildiri/delete/$item->id"); ?>"
                     class="btn btn-sm btn-danger  remove-btn">
                     <i class="fa fa-trash"></i> Sil
                     </button>
                        </td>
                        
                        </tr>
                        
                        <?php } ?>
                        
                        </tbody>
					</table>
                    <?php } ?>
				</div><!-- .widget -->
			</div><!-- END column -->