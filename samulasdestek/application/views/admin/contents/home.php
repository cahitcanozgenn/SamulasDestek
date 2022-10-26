<div class="dash-app">
  <div class="p-5 text-center">
    <div class="container p-0">
      <div class="row">

        <div class="col-12">
          <form id="filterForm" class="w-100" action="" method="get">
            <div class="form-row">
              <div class="form-group col-12">
                <select class="filterSelect form-control" name="parent">
                  <option value>Tümü</option>
                  <?php foreach ($contents as $key => $value): ?>
                    <option value="<?=md5($value->contents_id)?>" <?=($this->input->get('parent') && $this->input->get('parent') == md5($value->contents_id)) ? 'selected' : null ;?>><?=$value->contents_title?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </form>
        </div>
        <?php if ($currentContent): ?>
          <div class="col-12">
            <div class="w-100 p-4">
              <h3><?=$currentContent->contents_title?></h3>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
 <table class="table table-bordered table-hover">
                <thead>
                    <th>ID</th>
                    <th>BAŞLIK</th>
                    <th>AÇ</th>
                    <th>DİYAGRAM</th>
                    <th>DETAY</th>
                    <th>GÜNCELLE</th>
                    <th>SİL</th>
                </thead>
                <tbody>
                    <?php  foreach($contents as $contents) { ?>
                    <tr data-id="<?=md5($contents->contents_id)?>">
                        <td><?php echo  $contents->contents_id ?></td>
                        <td><?php echo  $contents->contents_title ?></td>
                        <td>
                          <a href="<?=base_url('admin/contents?parent=').md5($contents->contents_id)?>" class="btn btn-sm btn-warning" name="button">AÇ</a>
                        </td>
                        <td>
                          <a href="<?=base_url('admin/contents/tree/').md5($contents->contents_id)?>" target="_blank" class="btn btn-sm btn-secondary" name="button">Diagram</a>
                        </td>


                        <td><a class="getDetail btn btn-sm" data-toggle="modal" data-id="<?=md5($contents->contents_id)?>" data-target="#detailModal" link="<?=base_url("admin/Contents/detail/").md5($contents->contents_id)?>"><i class="fa-solid fa-circle-info"></i></i></a></td>
                        <td><a class="getUpdate btn btn-sm" data-toggle="modal" data-id="<?=md5($contents->contents_id)?>" data-target="#detailModal" link="<?=base_url("admin/Contents/update/").md5($contents->contents_id)?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a data-id="<?=md5($contents->contents_id)?>" class="silBtn btn btn-sm"><i class="fa-solid fa-trash"></i></a></td>


                    </tr>
                    <?php } ?>
                </tbody>
            </table>
  </div>
  <a href="<?php echo base_url("admin/Contents/add") ?>" class="btn btn-outline-primary">YENİ AĞAÇ İÇERİK EKLE</a>
</div>

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body detailBody">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Kapat</button>
      </div>
    </div>
  </div>
</div>



<script>
  $(function(){
    $('.filterSelect').change(function(){
      $('#filterForm').submit();
    });

    $('.getDetail').click(function(){
      var id = $(this).data('id');
      $.post('<?=base_url("admin/contents/detail")?>', {id: id}, function(response){
        $('.detailBody').html(response);
      });
    });

      $('.getUpdate').click(function(){
      var id = $(this).data('id');
      $.post('<?=base_url("admin/contents/getupdate")?>', {id: id}, function(response){
        $('.detailBody').html(response);
      });
    });

    $('.silBtn').click(function(){
      var id = $(this).data('id');
      let soru = "Yapıyı silmek istediğinizden emin misiniz?";
      if (confirm(soru) == true) {
        $.post('<?=base_url("admin/contents/delete")?>', {id: id}, function(response){
          if (response == 'success') {
            $('tr[data-id="'+id+'"]').slideUp();
            Swal.fire({
            text: 'Başarılı bir şekilde silind,',
            icon: 'success'
            });
          }
        });
      } else {
        return false;
      }

    });


  });
</script>