<div class="dash-app">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Proje Güncelleme</h2>
      </div>
      <div class="col-12">
        <form class="w-100" action="" method="post">
          <div class="form-row">
            <div class="form-group col-12">
              <input type="text" class="form-control" name="feature_title" value="<?=$feature->feature_title?>" > <br>
              <input type="text" class="form-control" name="feature_date" value="<?=$feature->feature_date?>">
            </div>


            <div class="form-group col-lg-6 col-md-6 col-12">
              <input type="number" class="form-control" name="feature_seq" value="<?=$feature->feature_seq?>" placeholder="Sıra">
            </div>
            <div class="form-group col-lg-6 col-md-6 col-12">
              <select class="form-control" name="feature_status" value="<?=$feature->feature_status?>">
                <option value="2">Açık</option>
                <option value="1">Kapalı</option>
              </select>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-12">
              <select class="form-control" name="project_id" value="<?=$feature->project_id?>">
              <?php  foreach($projects as $project) { ?>  
      <option value="<?php echo $project->project_id ?>"><?php echo $project->project_title ?></option>
                    <?php } ?>
    
              </select>
            </div>
            <div class="form-group col-12">
            <input type="text" class="form-control" name="feature_description" value="<?=$feature->feature_description?>">
            </div>
            <div class="col-12 form-group text-right">
              <button type="submit" class="btn btn-primary">GÜNCELLE</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


