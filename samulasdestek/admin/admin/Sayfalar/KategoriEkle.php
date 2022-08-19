<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';

	
    try{
        $db=new PDO("mysql:host=localhost;dbname=samulasdestek;charset=utf8","root","root");
        $kategoriAdi=$_POST["kategoriAdi"];
        $kategoriAciklama=$_POST["kategoriAciklama"];
        
        $sql = $db->prepare("insert into kategori set kategoriAdi=:kategoriAdi,kategoriAciklama=:kategoriAciklama");
        $ekle = $sql->execute(array(
            "kategoriAdi" => $kategoriAdi,
            "kategoriAciklama" => $kategoriAciklama,
        ));
        if ($ekle)
            echo "Kayıt eklendi";
        else
            echo "Kayıt eklenemedi";
    }
    catch (PDOException $exception)
    {
        print $exception->getMessage();
    }
    $db=null;
    ?>
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Ürün Kategori
              </h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn bg-green btn-sm" data-widget="collapse" data-toggle="tooltip" title="Gizle">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn bg-green btn-sm" data-widget="remove" data-toggle="tooltip" title="Kaldır">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body pad">
                <form action="KategoriEkle.php" method="post"  class="form-horizontal">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Kategori Adı
                                    <span class="text-red"> *</span></label>
                                <div class="col-sm-7">
                                    <input type="text" name="kategoriAdi"
                                           class="form-control input-sm "
                                           value=""
                                           placeholder="">
                                </div>
                            </div>
                        </div>
						<div class="col-xs-6">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">Kategori Açıklaması
                                    </label>
                                <div class="col-sm-7">
                                    <textarea type="text" name="kategoriAciklama"
                                           class="form-control input-sm "
                                           rows="3" cols="80"></textarea>
                                </div>
                            </div>
                        </div>
						<div class="col-md-6"></div>
						<div class="col-md-6">
							<div class="form-group ">
								<div class="col-sm-3 margin"></div>
										<div class="col-sm-3 margin">
											<button type="reset" class="btn btn-block btn-sm  btn-default">Temizle</button>
										</div>
										<div class="col-sm-3 margin">
                                            <input class="btn btn-block btn-sm btn-default" type="submit" value="Kaydet">
											<br />
										</div>
									<?php  } ?>
							</div>
						</div>
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php   require_once 'SayfaAlt.php'; 
		require_once 'SagMenu.php'; 
		require_once 'SayfaJs.php'; ?>
	<script>
			
	</script>
</body>
</html>
