<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-warning">
				<form class="form-horizontal" action="" method="POST">
					<div class="box-header">
						<h3 class="box-title">Kategori Ekleme Formu</h3>
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
								<input type="text" class="form-control" name="categoryName" value="">
							</div>
						</div>
                    <div class="form-group">
							<label for="title" class="col-sm-2 control-label">Kategori Açıklaması:</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="categoryDescription" value="">
							</div>
						</div>
						<div class="form-group">
							<label for="constant_id" class="col-sm-2 control-label">Kategori Durumu: </label>
							<div class="col-sm-10">
								<select class="form-control" name="categoryStatus">
									<option value="0">PASİF</option>
									<option value="1">AKTİF</option>
								</select>
							</div>
						</div>

					</div>

					<div class="box-footer clearfix">
						
						<button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Kaydet</button>
					</div>
				</form>
			</div>
				  <!-- /.box -->
		</div>	  
		
	</div>
