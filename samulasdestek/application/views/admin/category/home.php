<section class="content">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="box box-danger mt-5">
				<div class="box-header">
                    
					  <h3 class="box-title">Kategoriler</h3>
					     <div class="pull-right box-tools">
					          <a href="<?php echo base_url("admin/Category/add") ?>" class="btn btn-success">
							     <i class="fa fa-plus"></i> Yeni Kategori
						      </a>

                              
					    </div>
				</div>
				<div class="box-body">
					<div class="box-group" id="accordion">
						<div class="panel box box-danger">
                        <?php  foreach($category as $category) { ?>  
										<div class="box-header with-border">
								<h4 class="box-title">
									<a href="<?=base_url("admin/Category/update/").md5($category->categoryId)?>">
									<?php echo  $category->categoryName?>
									</a>
								</h4>
							</div>
                            <?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>	  
	</div>
</section>














						
						
						
					