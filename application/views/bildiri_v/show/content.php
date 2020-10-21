<?php foreach($items as $item) { ?>

<h4 align="center" class="form-article-heading">
<?php echo $item->title ?>
</h4>
<div class="container">
<div style="padding-top:40px">
	
    
    <p><strong>Yazarlar :</strong>&nbsp;
    
	<u>user yazar gelecek</u><sup>1</sup>*      </p>
<p><sup>1 </sup>:user kurum gelecek</p><p>*:user mail gelecek</p>
    <p><strong>Sunum Türü:</strong>&nbsp;<?php echo $item->sunumturu ?></p>
    <p><strong>Anahtar Kelimeler:</strong>&nbsp;<?php echo $item->anahtar_kelime ?></p>
    <p><strong>Özet</strong></p>
    <p><p><?php echo $item->ozet ?></p></p>
        <h1 align="center"></h1>
    <div align="center">
    <p align="center"><form action="wordeaktar.php" method="post">
    <a href="<?php echo base_url("bildiri");?>" class="btn btn-info">Geri Dön</a>
    <input class="btn btn-default" type="submit" value="Word'e Aktar">
    <input hidden="hidden" type="text" name="bildirino" value="3515"><br>
    </form></p></div><?php } ?>
	