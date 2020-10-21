
<form action="<?php echo base_url("bildiri/save");?>" method="post" enctype="multipart/form-data" class="form-article" id="makaleyukleme" role="form">
        <h2 class="form-article-heading">Yeni Bildiri</h2>
        <p>Bildiri Başlığı:
        
          <input type="text" name="title" id="baslik" class="form-control" placeholder="Bildiri Başlığı" required>
          
        </p>
        <p></p>
          <p>Sunum Türü:
          
            <select class="form-control" name="sunumturu" title="Başvurulacak Sunum Tipi:" >
              <option value="" selected>Seçiniz</option>
              <option value="O">Sözlü</option>
              <option value="P">Poster</option>
            </select>
          </p>
        <p></p>
          Bildiri Konusu: <select class="form-control" name="topic" title="Konu">
		  <option value="" selected>Seçiniz</option>
                      <option value="129">evren</option><option value="130">achfghf fggf</option>             

      </select>
      </br>
          <p>Özet</p>
            <p>            
              <textarea class="ckeditor" cols="80" id="abstract" name="ozet" rows="10"></textarea>
            </p>
            <p><span id="kelimesayisi"><i>En az:7 kelime, en çok:300 kelime</i></span></p>
          <p></p>


      <p>Anahtar Kelimeler:</p>
      <p>
        <!--<input type="text" name="keywords" id="keywords" class="form-control" placeholder="" required>-->
        <input type='text' name='anahtar_kelime' id='keywords' class='form-control' onkeyup="valid(this,'special')" placeholder='Anahtar Kelime 1 *' required><p></p>
               <!--<div id="keywordentry" style="border-radius:2px;">-->
        <div style="font-size:11px;">En az:3, en çok:7 anahtar kelime girmeniz gerekmektedir.</div>

     </p>
      
        <button class="btn btn-lg btn-success btn-block" id="sendbutton" type="submit" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Kaydet</button>
        
      <div id="ajaxresult" style="color:red;"></div>
        
      </form>