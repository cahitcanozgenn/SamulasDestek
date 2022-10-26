<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <tr>
          <td><b><img src="https://www.letqr.com/uploads/profile/user_profile.png" alt=""  height="50"></b></td>
          <td >

            <a href="<?=base_url("admin/Features/update/").md5($feature->feature_id)?>" class="btn btn-sm btn-warning mr-2"><small><span class="lnr lnr-pencil mr-2"></span></small>Düzenle</a>
          </td>
        </tr>
        <tr>
          <td><b>Özellik Id:</b></td>
          <td> <?=$feature->feature_id?></td>
        </tr>
        <tr>
          <td><b>Başlık:</b></td>
          <td> <?=$feature->feature_title?></td>
        </tr>
        <tr>
          <td><b>Proje:</b></td>
          <td><?=$feature->project_title?></td>
        </tr>
        <tr>
          <td><b>Açıklama:</b></td>
          <td> <?=$feature->feature_description?></td>
        </tr>
        <tr>
          <td><b>Durum:</b></td>
          <td><?=$feature->feature_status?></td>
        </tr>
        <tr>
          <td><b>Sıra:</b></td>
          <td><pre><?=$feature->feature_seq?></pre></td>
        </tr>
        <tr>
          <td><b>Tarih:</b></td>
          <td><?=$feature->feature_date?></td>
        </tr>
       


      </table>

    </div>
  </div>
</div>
