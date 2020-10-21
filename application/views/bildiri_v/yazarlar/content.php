

	<br/><br/><a href="my-submissions.php" class="btn btn-primary">Geri Dön</a>
<h2 class="page-header">Yazarları Düzenle</h2>

<p></p>
<p></p>
      <strong>Bildirinize ek yazarlar atayailirsiniz.</strong>
      
      <p></p>
      <div class="row">
        <div class="col-md-8">
              <form class="form-signin" role="form" action="edit-authors.php?sid=3516" method="post" id="addmodform">
      	<p><strong>Aktif Kongre: </strong>
   	    <i>Deneme</i></p>
      	<p><strong>Aktif Bildiri:</strong><i>
        deneme                                                                                      </i></p> 
           	<strong>
        Yeni Yazar Ekle</strong>
        <input type="text" id="mod" name="mod" class="form-control" placeholder="Yeni yazarın e-posta adresi" required>
          <div style="background-color: #f5f5f5; border-radius: 4px; font-size:11px;">Lütfen eklenecek yazarın e-posta adresini girmeye başlayın daha sonra açılan listeden eklenecek yazarı seçebilirsiniz.<br/>Her bir yazarın sisteme kendi bilgileriyle ayrıca kayıt olması gerekmektedir.</div>
      
  
          <input type="hidden" id="mod-id" name="mod-id">     
          <input name="action" type="hidden" id="action" value="addAuthor"> 
          <input name="cid" type="hidden" id="cid" value="35">
      <p></p>
        <button class="btn btn-lg btn-primary btn-block" id="addauthorbutton" type="submit">Ekle &raquo;</button>
         </form>
        <p>&nbsp;</p>
        <p><strong>Aktif Yazarlar:</strong></p>

        <table class="table table-hover" id="authortable">
        <thead>  <tr>
  <td>Ad Soyad</td><td>E-Posta</td><td>Kurum</td><td>Sunucu olarak ayarla</td><td>Yetkili</td><td>Yazarı Kaldır</td>
  </tr>
  </thead>
  <tbody class="sort" style="cursor:move"><tr id="4226"><td>Berkay Yılmazer</td><td>2140656008@nku.edu.tr</td><td>Namık Kemal University</td><td><span class="glyphicon glyphicon-ok"></span>&nbsp;</td><td><span class="glyphicon glyphicon-ok"></span>&nbsp;</td><td></td></tbody>        </tbody>
        </table>

        <button onClick="document.location.href='my-submissions.php'" class="btn btn-lg btn-success btn-block">Kaydet</button><br/><br/>


        <div id="ajaxresult" style="color:red;"></div>
     
 </div>

        <div class="col-md-4">
          <div style="background-color: #f5f5f5; border-radius: 4px;">
            <p>Bu ekranda seçili bildiriye ait yazarlar düzenlenmektedir.</p>
            <p>Yeni bir yazar eklemek için e-posta adresini yazabilir ve Ekle butonuyla ekleyebilirsiniz.</p>
            <p>Yazarların sırasını değiştirmek için yazar isminin üzerine gelerek (taşıma imleci gözükür) yazarı listede sürükleyip bırakabilirsiniz. Değişiklikler anlık olarak kaydedilmektedir.</p>			  <p></p>
			  

			</div></div>
      
      </div>
