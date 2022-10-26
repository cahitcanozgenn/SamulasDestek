<div class="dash-app">
  <div class="container">
    <div class="row">
    <table class="w-100 table table-bordered">
        <tr>
          <td><b><img src="https://www.letqr.com/uploads/profile/user_profile.png" alt=""  height="50"></b></td>
        </tr>
        <form action="" method="post">
        <tr>
          <td><b>Başlık:</b></td>
          <td><input type="text" class="form-control" name="project_title" value="<?=$project->project_title?>" id=""></td>
        </tr>
        <tr>
          <td><b>Açıklama:</b></td>
          <td><input type="text" class="form-control" name="project_description" value="<?=$project->project_description?>" id=""></td>
        </tr>
        <tr>
          <td><b>Durum:</b></td>
          <td><input type="text" class="form-control" name="project_status" value="<?=$project->project_status?>" id=""></td>
        </tr>
        <tr>
          <td><b>Sıra:</b></td>
          <td><input type="text" class="form-control" name="project_seq" value="<?=$project->project_seq?>" id=""></td>
        </tr>
        <tr>
          <td><b>Tarih:</b></td>
          <td><input type="text" class="form-control" name="project_date" value="<?=$project->project_date?>" id=""></td>
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
