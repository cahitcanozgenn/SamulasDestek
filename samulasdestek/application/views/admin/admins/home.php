<div class="dash-app">
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
  <div class="p-5 text-center">
  <div class="row">
  <a class="add btn btn-outline-primary" data-toggle="modal"  data-target="#detailModal" link="<?=base_url("admin/Admins/add/")?>">Yeni Kullanıcı Ekle</a>
  </div>
  <form id="filterForm" action="" method="get" class="form-group mt-5">
    <select name="project" id="" class="filterSelect form-control">
      <option value>Tümü</option>
      <option value>Aktif</option>
      <option value>Pasif</option>
    <?php  foreach($projects as $project) { ?>  
      <option value="<?php echo md5($project->project_id) ?>" <?=($currentProject == md5($project->project_id)) ? 'selected' : null ;?> ><?php echo $project->project_title ?></option>
                    <?php } ?>
      
    </select><br>
    </form>
    
 <table class="table table-bordered table-hover" id="sampleTable">
                <thead>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Durum</th>
                    <th>Detay</th>
                </thead>
                <tbody>
                    <?php  foreach($admin as $admin) { ?>  
                    <tr>
                        <td><?php echo  $admin->adminFirstName?></td>
                        <td><?php echo  $admin->adminLastName?></td>
                        <td><?php echo  $admin->adminStatus==1?'<label class="btn btn-success btn-sm">Aktif</label>':'<label class="btn btn-danger btn-sm">Pasif</label>'; ?></td>
                        <td><a  href="<?=base_url("admin/Admins/detail/").md5($admin->adminId)?>"><i class="fa-solid fa-circle-info"></i></i></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
  </div>
 
</div>

<div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel"></h5>
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
  });
  $('.add').click(function(){
      var id = $(this).data('id');
      $.post('<?=base_url("admin/admins/add")?>', {id: id}, function(response){
        $('.detailBody').html(response);
      });
    });
    $('.update').click(function(){
      var id = $(this).data('id');
      $.post('<?=base_url("admin/admins/update")?>', {id: id}, function(response){
        $('.detailBody').html(response);
      });
    });




    $('#sampleTable').DataTable({
		"language":{
			"sDecimal":        ",",
			"sEmptyTable":     "Tabloda herhangi bir veri mevcut değil",
			"sInfo":           "_TOTAL_ kayıttan _START_ - _END_ arasındaki kayıtlar gösteriliyor",
			"sInfoEmpty":      "Kayıt yok",
			"sInfoFiltered":   "(_MAX_ kayıt içerisinden bulunan)",
			"sInfoPostFix":    "",
			"sInfoThousands":  ".",
			"sLengthMenu":     "Sayfada _MENU_ kayıt göster",
			"sLoadingRecords": "Yükleniyor...",
			"sProcessing":     "İşleniyor...",
			"sSearch":         "Ara:",
			"sZeroRecords":    "Eşleşen kayıt bulunamadı",
			"oPaginate": {
				"sFirst":    "İlk",
				"sLast":     "Son",
				"sNext":     " Sonraki",
				"sPrevious": " Önceki"
			},
			"oAria": {
				"sSortAscending":  ": artan sütun sıralamasını aktifleştir",
				"sSortDescending": ": azalan sütun sıralamasını aktifleştir"
			}
		},
		'order': [0, 'desc'],
		"lengthMenu": [ [50, 100, 200, 300], [50, 100, 200, 300] ]
	});
</script>
