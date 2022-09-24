<section class="content">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="box box-danger mt-5">
				<div class="box-header">
                    
					  <h3 class="box-title">Makaleler</h3>
					     <div class="pull-right box-tools">
					          <a href="<?php echo base_url("admin/Content/add") ?>" class="btn btn-success">
							     <i class="fa fa-plus"></i> Yeni Makale
						      </a>

                              
					    </div>
				</div>
				<div class="box-body">
					<div class="box-group" id="accordion">
						<div class="panel box box-danger">
                        <?php  foreach($content as $content) { ?>  
										<div class="box-header with-border">
								<h4 class="box-title">
									<a href="<?=base_url("admin/Content/update/").md5($content->contentId)?>">
									<?php echo  $content->contentTitle?>
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














						
						
						
					