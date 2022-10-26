<div class="dash-app">
  <div class="p-5 text-center">
  <form id="filterForm" action="" method="get" class="form-group">
    <select name="content" id="" class="filterSelect form-control">
      <option value>Tümü</option>
    <?php  foreach($features as $feature) { ?>  
      <option value="<?php echo md5($feature->feature_id) ?>" <?=($currentProject == md5($feature->feature_id)) ? 'selected' : null ;?> ><?php echo $feature->feature_title ?></option>
                    <?php } ?>
      
    </select><br>
    </form>
  <table class="table table-bordered table-hover">
                <thead>
                    <th>ID</th>
                    <th>ÖZELLİK</th>
                    <th>BAŞLIK</th>
                    <th>DETAY</th>
                    <th>GÜNCELLE</th>
                    <th>SİL</th>
                </thead>
                <tbody>
                    <?php  foreach($content as $content) { ?>  
                    <tr>
                        <td><?php echo  $content->content_id?></td>
                        <td><?php echo  $feature->feature_title?></td>
                        <td><?php echo  $content->content_title?></td>
                        <td><a href="<?=base_url("admin/Content/detail/").md5($content->content_id)?>"><i class="fa-solid fa-circle-info"></i></i></a></td>
                        <td><a href="<?=base_url("admin/Content/update/").md5($content->content_id)?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                        
                       
                    </tr>
                    <?php } ?>
                </tbody>
               
  </table>
  </div>
  <a href="<?php echo base_url("admin/Content/add") ?>" class="btn btn-outline-primary">YENİ İÇERİK EKLE</a>
</div>

<script>

$(function(){
 $('.projectDel').click(function(){
  var deleUrl = $(this).attr('goto');
  let soru = "Projeyi silmek istediğinizden emin misiniz?";
  if (confirm(soru) == true) {
    window.location.href = deleUrl;
  } else {
    return false;
  }
 });
});
</script>

<script>
  $(function(){
    $('.filterSelect').change(function(){
      $('#filterForm').submit();
    });
  });
</script>