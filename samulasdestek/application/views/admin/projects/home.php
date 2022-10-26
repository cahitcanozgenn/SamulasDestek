<div class="dash-app">
  <div class="p-5 text-center">
  <table class="table table-bordered table-hover">
                <thead>
                    <th>ID</th>
                    <th>BAŞLIK</th>
                    <th>DETAY</th>
                    <th>ÖZELLİKLER</th>
                    <th>GÜNCELLE</th>
                    <th>SİL</th>
                    
                </thead>
                <tbody>
                    <?php  foreach($project as $project) { ?>  
                    <tr>
                        <td><?php echo  $project->project_id?></td>
                        <td><?php echo  $project->project_title?></td>
                        <td><a href="<?=base_url("admin/Projects/detail/").md5($project->project_id)?>"><i class="fa-solid fa-circle-info"></i></i></a></td>
                        <td><a href="<?= base_url("admin/Features?project=").md5($project->project_id)?>"><i class="fa-solid fa-bars"></i></a></td>
                        <td><a href="<?=base_url("admin/Projects/update/").md5($project->project_id)?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="<?php echo base_url("admin/Projects/delete/").md5($project->project_id) ?>"><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
               
  </table>
  </div>
  <a href="<?php echo base_url("admin/Projects/add") ?>" class="btn btn-outline-primary">YENİ PROJE EKLE</a>
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