<div class="container p-0">
  <div class="row">
    <div class="col-12">
      <form class="updform w-100" id="updateform" action="<?=base_url('admin/contents/update/'.md5($cont->contents_id))?>" method="post">
        <div class="form-row">
          <div class="form-group col-12">
            <label for="">Başlık</label>
            <input type="text" class="form-control" name="contents_title" value="<?=$cont->contents_title?>" required>
          </div>
          <div class="form-group col-12">
            <label for="">Ana Kategorisi</label>
            <select class="form-control" name="contents_parents">
              <option value="0" <?=($cont->contents_parents == '0') ? 'selected' : null ;?>>Ana Kategori Yok</option>
              <?php foreach ($contents as $key => $value): ?>
                <option value="<?=$value->contents_id?>" <?=($cont->contents_parents == $value->contents_id) ? 'selected' : null ;?>><?=$value->contents_title?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group col-12">
            <label for="">Sıra</label>
            <input type="number" class="form-control" name="seq" value="<?=$cont->seq?>" required>
          </div>
          <div class="form-group col-12">
            <label for="">Açıklama</label>
            <textarea name="contents_description" class="form-control" rows="4" cols="80"><?=$cont->contents_description?></textarea>
          </div>
          <div class="form-group col-12">
            <label for="">Kod</label>
            <textarea name="contents_code" class="form-control" rows="4" cols="80"><?=$cont->contents_code?></textarea>
          </div>
          <div class="form-group col-12 text-right">
            <button type="submit" class="btn btn-primary">Kaydet</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- <script type="text/javascript">
  $(function(){
    $('body').delegate('#updateform', 'submit', function(e){
      e.preventDefault();
    });
  });
</script> -->