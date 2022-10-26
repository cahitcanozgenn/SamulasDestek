<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <tr>
          <td><b><img src="https://www.letqr.com/uploads/profile/user_profile.png" alt=""  height="50"></b></td>
          <td >

            <a href="<?=base_url("admin/Projects/update/").md5($project->project_id)?>" class="btn btn-sm btn-warning mr-2"><small><span class="lnr lnr-pencil mr-2"></span></small>Düzenle</a>
          </td>
        </tr>
        <tr>
          <td><b>Proje Id:</b></td>
          <td> <?=$project->project_id?></td>
        </tr>
        <tr>
          <td><b>Başlık:</b></td>
          <td> <?=$project->project_title?></td>
        </tr>
        <tr>
          <td><b>Açıklama:</b></td>
          <td> <?=$project->project_description?></td>
        </tr>
        <tr>
          <td><b>Durum:</b></td>
          <td> <?=$project->project_status?></td>
        </tr>
        <tr>
          <td><b>Sıra:</b></td>
          <td> <?=$project->project_seq?></td>
        </tr>
        <tr>
          <td><b>Tarih:</b></td>
          <td> <?=$project->project_date?></td>
        </tr>
      </table>

    </div>
  </div>
</div>
