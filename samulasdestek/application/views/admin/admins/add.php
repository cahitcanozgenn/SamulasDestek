<div class="container p-0">
  <div class="row">
    <div class="col-12">
      <form class="updform w-100"  action="<?=base_url('admin/admins/add')?>" method="post">
     
        <div class="form-row">
          <div class="form-group col-12">
            <label for="">Adı</label>
            <input type="text" class="form-control" name="adminFirstName"  required>
          </div>

          <div class="form-group col-12">
            <label for="">Soyadı</label>
            <input type="text" class="form-control" name="adminLastName"  required>
          </div>

          <div class="form-group col-12">
            <label for="">Admin E-Mail Adresi</label>
            <input type="email" class="form-control" name="adminEmailAddress"  required>
          </div>

          <div class="form-group col-12">
            <label for="">Kullanıcı Adı</label>
            <input type="text" class="form-control" name="adminUserName"  required>
          </div>

          <div class="form-group col-12">
            <label for="">Şifre</label>
            <input type="password" class="form-control" name="adminPassword"  required>
          </div>

          <div class="form-group col-12">
            <label for="">Durumu</label>
            <select name="adminStatus" id="" class="form-control" required>
              <option value="1">Aktif</option>
              <option value="0">Pasif</option>
            </select>
          </div>

          <div class="form-group col-12 text-right">
            <button type="submit" class="btn btn-primary">Kaydet</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>