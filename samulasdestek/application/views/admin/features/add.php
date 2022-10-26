<div class="dash-app">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Ekle</h2>
      </div>
      <div class="col-12">
        <form class="w-100" action="" method="post" class="form-group">
        
<input type="text" name="feature_title" id="" placeholder="Başlık" class="form-control"> <br>
<input type="text" name="feature_description" id="" placeholder="Açıklama" class="form-control"> <br>
<input type="text" name="feature_seq" id="" placeholder="Sıra" class="form-control"> <br>
<select class="form-control" name="feature_status" class="form-class">
                <option value="2">Açık</option>
                <option value="1">Kapalı</option>
              </select> <br>

             
    <select name="project_id" id="" class="form-control">
    <?php  foreach($projects as $project) { ?>  
      <option value="<?php echo $project->project_id ?>"><?php echo $project->project_title ?></option>
                    <?php } ?>
      
    </select><br>

    <div class="col-12 form-group text-right">
              <button type="submit" class="btn btn-primary">Ekle</button>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>

