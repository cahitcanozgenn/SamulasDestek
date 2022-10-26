<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <tr>
          <td><b><img src="https://www.letqr.com/uploads/profile/user_profile.png" alt=""  height="50"></b></td>
        </tr>
        <form action="" method="post">
        <tr>
          <td><b>Özellik:</b></td>
          <td> <input type="text" class="form-control" name="feature_id" value="<?=$content->feature_id?>" required></td>
        </tr>
        <tr>
          <td><b>Başlık:</b></td>
          <td><input type="text" class="form-control" name="content_title" value="<?=$content->content_title?>" required></td>
        </tr>
        <tr>
          <td><b>Açıklama:</b></td>
          <td><input type="text" class="form-control" name="content_description" value="<?=$content->content_description?>" required></td>
        </tr>
        <tr>
          <td><b>Alt Açıklama:</b></td>
          <td><input type="text" class="form-control" name="content_subdescription" value="<?=$content->content_subdescription?>" required></td>
        </tr>
        <tr>
          <td><b>Kod:</b></td>
          <td><input type="text" class="form-control" name="content_code" value="<?=$content->content_code?>" required></td>
        </tr>
        <tr>
          <td><b>Sıra:</b></td>
          <td><input type="text" class="form-control" name="content_seq" value="<?=$content->content_seq?>" required></td>
        </tr>
        <tr>
          <td><b>Durum:</b></td>
          <td><input type="text" class="form-control" name="content_status" value="<?=$content->content_status?>" required></td>
        </tr>
        <tr>
          <td><b>Tarih:</b></td>
          <td><input type="text" class="form-control" name="content_date" value="<?=$content->content_date?>" required></td>
        </tr>
<tr>
    <td></td>
    <td align="right">
    <button class="btn btn-primary">GÜNCELLE</button>
    </td>

</tr>
      
        </form>


      </table>

    </div>
  </div>
</div>
