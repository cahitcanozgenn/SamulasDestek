<div class="dash-app">
  <div class="container">
    <div class="row">
        
    <table class="w-100 table table-bordered">
        <tr>
          <td><b><img src="https://www.letqr.com/uploads/profile/user_profile.png" alt=""  height="50"></b></td>
          <td >

            <a href="<?=base_url("admin/Admins/update/").md5($admin->adminId)?>" class="btn btn-sm btn-warning mr-2"><small><span class="lnr lnr-pencil mr-2"></span></small>Düzenle</a>
          </td>
        </tr>
        <tr>
          <td><b>Id:</b></td>
          <td> <?=$admin->adminId?></td>
        </tr>
        <tr>
          <td><b>Adı:</b></td>
          <td><?=$admin->adminFirstName?></td>
        </tr>
        <tr>
          <td><b>Soyadı:</b></td>
          <td><?=$admin->adminLastName?></td>
        </tr>
        <tr>
          <td><b>E-Mail Adresi:</b></td>
          <td><?=$admin->adminEmailAddress?></td>
        </tr>
        <tr>
          <td><b>Kayıt Tarihi:</b></td>
          <td><?=$admin->adminCreateDate?></td>
        </tr>
        <tr>
          <td><b>Durumu:</b></td>
          <td><?php echo  $admin->adminStatus==1?'<label class="btn btn-success btn-sm">Aktif</label>':'<label class="btn btn-danger btn-sm">Pasif</label>'; ?></td>
        </tr>
        <tr>
          <td><b>Kullanıcı Adı:</b></td>
          <td><?=$admin->adminUserName?></td>
        </tr>
        <tr>
          <td><b>Şifre:</b></td>
          <td><?=$admin->adminPassword?></td>
        </tr>
      </table>

    </div>
  </div>
</div>
