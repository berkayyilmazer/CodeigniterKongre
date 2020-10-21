<form action="<?php echo base_url("bildiri/update/$item->id");?>" method="post" enctype="multipart/form-data" class="form-article" id="makaleyukleme" role="form">
       
        <p>Bildiri Başlığı:
        
<input type="text" name="title"class="form-control" placeholder="Bildiri Başlığı" value="<?php echo $item->title ?>">
          <p>Sunum Türü: 
     <select class="form-control" name="sunumturu" title="Başvurulacak Sunum Tipi:" value="<?php echo $item->sunumturu ?>" >
              <option value="" selected></option>
              <option value="S">Sözlü</option>
              <option value="P">Poster</option>  
            </select>
          </p>
       
          Bildiri Konusu: <select class="form-control" name="topic"value="<?php echo $item->topic ?>">
		  <option value="" selected></option>
                      <option value="129">evren</option><option value="130">achfghf fggf</option>             

      </select>
      </br>
          <p>Özet</p>
            <p>            
              <textarea class="text" cols="80" id="abstract" name="ozet" rows="10" ><?php echo $item->ozet ?></textarea>
            </p>
            <p><span id="kelimesayisi" value"<?php echo $item->ozet ?>"><i>En az:7 kelime, en çok:300 kelime</i></span></p>
          <p></p>


      <p>Anahtar Kelimeler:</p>
      <p>
        <!--<input type="text" name="keywords" id="keywords" class="form-control" placeholder="" required>-->
        <input type='text' name='anahtar_kelime' id='keywords' class='form-control' value="<?php echo $item->anahtar_kelime ?>"  placeholder='Anahtar Kelime 1 *' ><p></p>
               <!--<div id="keywordentry" style="border-radius:2px;">-->
        <div style="font-size:11px;">En az:3, en çok:7 anahtar kelime girmeniz gerekmektedir.</div>

     </p>
      
        <button class="btn btn-lg btn-success btn-block" id="sendbutton" type="submit" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Kaydet</button>
        
      <div id="ajaxresult" style="color:red;"></div>
        
      </form>