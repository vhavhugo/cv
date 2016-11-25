<div>
    <?php if(isset($error)):?>
        <div><?=$error?></div>
    <?php endif; ?>
 
    <form action="<?=base_url('upload')?>" method="POST" enctype="multipart/form-data">
        <div>
            <label>Selecione um arquivo (zip, rar, pdf, doc, xls, jpg, png, gif)</label>
            <input type="file" name="arquivo"/>
        </div>
        <div>
            <input type="submit" value="Processar" />
        </div>
    </form>
</div>