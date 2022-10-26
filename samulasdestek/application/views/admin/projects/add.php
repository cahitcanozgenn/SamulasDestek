<div class="dash-app">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Ekle</h2>
      </div>
      <div class="col-12">
        <form class="w-100" action="" method="post">
          <div class="form-row">
            <div class="form-group col-12">
              <input type="text" class="form-control" name="project_title" value="" required placeholder="Başlık">
            </div>


            <div class="form-group col-lg-6 col-md-6 col-12">
              <input type="number" class="form-control" name="project_seq" value="" placeholder="Sıra">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-12">
              <select class="form-control" name="project_status">
                <option value="2">Açık</option>
                <option value="1">Kapalı</option>
              </select>
            </div>
            <div class="form-group col-12">
            <input type="text" class="form-control" name="project_description" placeholder="Açıklama">
            </div>
            <div class="col-12 form-group text-right">
              <button type="submit" class="btn btn-primary">Ekle</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

