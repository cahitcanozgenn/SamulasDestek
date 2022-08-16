<?php
require "/UwAmp/www/samulasdestekadmin/connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SAMULAS DESTEK</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://giris.omu.edu.tr/AdminLTE-2.4.13/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="https://giris.omu.edu.tr/AdminLTE-2.4.13/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/plugins/input-mask/jquery.inputmask.js"></script>
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/plugins/input-mask/jquery.inputmask.extensions.js"></script>
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/moment/min/moment.min.js"></script>
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="https://giris.omu.edu.tr/AdminLTE-2.4.13/dist/js/adminlte.min.js"></script>
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
	<header class="main-header">
		<nav class="navbar navbar-static-top">
			<div class="container">
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand mt-0"><img src="/samulasdestek/images/SamulasLogo.png" alt="Samulaş Destek" height="30"></a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
		</nav>
  </header> 
	<div class="content-wrapper">
		<div class="container">
			<section class="content-header">
				<h1>
					<small></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="index.php"><i class="fa fa-home"></i> Anasayfa</a></li>
					<li  class="active" ><a href="/"></a></li>
				</ol>
			</section>
    <link rel="stylesheet" href="/vendor/editor.md/css/editormd.preview.min.css" />
    <link rel="stylesheet" href="/vendor/editor.md/css/editormd.min.css" />
    <style type="text/css">
    .editormd-fullscreen {
        z-index: 2147483647;
    }
    </style>
    <script type="text/javascript">
        window.jQuery || document.write(unescape("%3Cscript%20type%3D%22text/javascript%22%20src%3D%22//cdn.bootcss.com/jquery/2.2.4/jquery.min.js%22%3E%3C/script%3E"));
    </script>
    <script src="/vendor/editor.md/lib/marked.min.js"></script>
    <script src="/vendor/editor.md/lib/prettify.min.js"></script>
    <script src="/vendor/editor.md/lib/raphael.min.js"></script>
    <script src="/vendor/editor.md/lib/underscore.min.js"></script>
    <script src="/vendor/editor.md/lib/sequence-diagram.min.js"></script>
    <script src="/vendor/editor.md/lib/flowchart.min.js"></script>
    <script src="/vendor/editor.md/lib/jquery.flowchart.min.js"></script>
    <script src="/vendor/editor.md/js/editormd.min.js"></script>
    <script src="/vendor/editor.md/languages/en.js"></script>

<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-warning">
				<form class="form-horizontal" action="addCategory.php" method="POST">
          					<div class="box-header">
						<h3 class="box-title">Yeni Kategori Ekleme</h3>
					</div>
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
									<option value="0" >PASİF</option>
									<option value="1" >AKTİF</option>
								</select>
							</div>
						</div>
          </div>
					<div class="box-footer clearfix">
						<button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Kaydet</button>
						<a href="//" target="_blank" class="btn btn-warning pull-right" style="margin-right: 10px;">
							<i class="fa fa-external-link"></i> Ön İzleme
						</a>
					</div>
					<input type="hidden" name="id" value="0">
				</form>
			</div>
		</div>	  
	</div>
</section>
<script type="text/javascript">
    var _editormd;
    $(function() {
        //emoji
        editormd.emoji = {
            path : "",
            ex : ".png"
        };
        _editormd = editormd({
                id : "editormd",
                width : "100%",
                height : "640",
                saveHTMLToTextarea : true,
                emoji : true,
                taskList : true,
                tex : false,
                toc : true,
                tocm : false,
                codeFold : true,
                flowChart: false,
                sequenceDiagram: false,
                path : "/vendor/editor.md/lib/",
                imageUpload : true,
                imageFormats : ["jpg", "gif", "png"],
				imageUploadURL : "/xetaravel-editor-md/upload/picture?_token=6DD27ZWJeGO8P7wGdMQxtOGN8Mcl9uJ93U2bgQB0&from=/xetaravel-editor-md/upload/picture",
				htmlDecode: true, 
        });
    });
</script>
		</div>
	</div>
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Sürüm</b> 0.0.1
      </div>
      <strong>Copyright &copy; 2022 <a href="http://samulas.com.tr/">SAMULAŞ A.Ş.</a> | <a href="http://www.samulas.com.tr/destek/">SAMULAŞ DESTEK</a></strong>
    </div>
  </footer>
</div>
</body>
</html>

<?php
if ($_POST) 
{
      $categoryName=$_POST["categoryName"];
      $categoryDescription=$_POST["categoryDescription"];
      $categoryStatus=$_POST["categoryStatus"];
try 
{
         $host='localhost';
         $database="samulasdestek";
         $name="root";
         $pass="root";
         $baglanti=new PDO("mysql:host=$host;dbname=$database;charset=utf8",$name,$pass);
         $baglanti->exec("SET NAMES utf8");
         $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
         $ekle = $baglanti->prepare("INSERT INTO category SET categoryName=?, categoryDescription=?, categoryStatus=?");
         $ekle -> execute(array($categoryName, $categoryDescription,$categoryStatus ));
if ($ekle)
   echo "Kategori Ekleme İşlemi Başarılı.";
else
   echo "Kategori Ekleme İşlemi Başarısız.";
}
catch (PDOException $exception)
{
     print $exception->getMessage();
}
}
$db=null;

?>

