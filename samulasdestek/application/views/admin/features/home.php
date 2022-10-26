<div class="dash-app">
  <div class="p-5 text-center">

  <form id="filterForm" action="" method="get" class="form-group">
    <select name="project" id="" class="filterSelect form-control">
      <option value>Tümü</option>
    <?php  foreach($projects as $project) { ?>  
      <option value="<?php echo md5($project->project_id) ?>" <?=($currentProject == md5($project->project_id)) ? 'selected' : null ;?> ><?php echo $project->project_title ?></option>
                    <?php } ?>
      
    </select><br>
    </form>
 <table class="table table-bordered table-hover">
                <thead>
                    <th>ID</th>
                    <th>BAŞLIK</th>
                    <th>KATEGORİ</th>
                    <th>DETAY</th>
                    <th>İÇERİKLER</th>
                    <th>GÜNCELLE</th>
                    <th>SİL</th>
                </thead>
                <tbody>
                    <?php  foreach($features as $feature) { ?>  
                    <tr>
                        <td><?php echo  $feature->feature_id ?></td>
                        <td><?php echo  $feature->feature_title ?></td>
                        <td><?php echo  $feature->project_title ?></td>
                        <td><a href="<?=base_url("admin/Features/detail/").md5($feature->feature_id)?>"><i class="fa-solid fa-circle-info"></i></i></a></td>
                        <td><a href="<?=base_url("admin/Features/update/").md5($feature->feature_id)?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a href="#"><i class="fa-solid fa-trash"></i></a></td>
                        
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
  </div>
  <a href="<?php echo base_url("admin/Features/add") ?>" class="btn btn-outline-primary">YENİ ÖZELLİK EKLE</a>
</div>


<script>
  $(function(){
    $('.filterSelect').change(function(){
      $('#filterForm').submit();
    });
  });
</script>