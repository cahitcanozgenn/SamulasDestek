<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-danger">
				<form class="form-horizontal" action="" method="POST">
					<div class="box-header">
						<h3 class="box-title">Makale Güncelleme Formu</h3>
						<div class="pull-right box-tools">
							<a href="/admin" class="btn btn-success" style="margin-right: 10px;">
								<i class="fa fa-angle-left"></i> Geri
							</a>
						</div>
					</div>
					<!-- /.box-header -->
				
					<div class="box-body">
                    <div class="form-group">
							<label for="title" class="col-sm-2 control-label">Kategori Adı:</label>
                            <div class="col-sm-10">
                            <select name="contentCategory" id="" class="form-control">
                           <?php  foreach($category as $category) { ?>  
                <option value="<?php echo $category->categoryId ?>"><?php echo $category->categoryName ?></option>
                    <?php } ?>
      
               </select>
                            </div>
						</div>
						
                        <div class="form-group">
							<label for="title" class="col-sm-2 control-label">Makale Başlığı: </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="contentTitle" value="<?=$content->contentTitle?>">
							</div>
						</div>
                    <div class="form-group">
							<label for="title" class="col-sm-2 control-label">Makale Açıklaması:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="contentDescription" value="<?=$content->contentDescription?>">
							</div>
						</div>
						
                        <div class="form-group">
							<label for="title" class="col-sm-2 control-label">Makale İçeriği: </label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="contentText" value="<?=$content->contentText?>">
							</div>
						</div>
						<div class="form-group">
							<label for="constant_id" class="col-sm-2 control-label">Makale Durumu: </label>
							<div class="col-sm-10">
								<select class="form-control" name="contentStatus">
									<option value="0">PASİF</option>
									<option value="1">AKTİF</option>
								</select>
							</div>
						</div>

					</div>

					<div class="box-footer clearfix">
						
						<button type="submit" class="btn btn-info pull-right"><i class="fa fa-pen"></i> Güncelle</button>
					</div>
				</form> <br>
               
			</div>
          
				  <!-- /.box -->
		</div>	  
		
	</div>
