<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <tr>
          <td><b><img src="https://www.letqr.com/uploads/profile/user_profile.png" alt=""  height="50"></b></td>
          <td >

            <a href="<?=base_url("admin/Content/update/").md5($content->content_id)?>" class="btn btn-sm btn-warning mr-2"><small><span class="lnr lnr-pencil mr-2"></span></small>Düzenle</a>
          </td>
        </tr>
        <tr>
          <td><b>İçerik Id:</b></td>
          <td> <?=$content->content_id?></td>
        </tr>
        <tr>
          <td><b>Özellik:</b></td>
          <td><?=$content->feature_id?></td>
        </tr>
        <tr>
          <td><b>Başlık:</b></td>
          <td><?=$content->content_title?></td>
        </tr>
        <tr>
          <td><b>Açıklama</b></td>
          <td><?=$content->content_description?></td>
        </tr>
        <tr>
          <td><b>Alt Açıklama:</b></td>
          <td><?=$content->content_subdescription?></td>
        </tr>
        <tr>
          <td><b>Kod:</b></td>
          <td><pre><?=$content->content_code?></pre></td>
        </tr>
        <tr>
          <td><b>Görsel:</b></td>
          <td><?=$content->content_image?></td>
        </tr>
        <tr>
          <td><b>İçerik Sıra:</b></td>
          <td><?=$content->content_seq?></td>
        </tr>
        <tr>
          <td><b>İçerik Durum:</b></td>
          <td><?=$content->content_status?></td>
        </tr>
        <tr>
          <td><b>Tarih:</b></td>
          <td><?=$content->content_date?></td>
        </tr>


      </table>

    </div>
  </div>
</div>
