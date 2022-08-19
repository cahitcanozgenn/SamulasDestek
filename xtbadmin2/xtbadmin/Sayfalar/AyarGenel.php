<?php
require_once '../../system/guvenlik.php';
if(OturumAktif()==true)
{
    require_once '../../system/ayar.php';
	require_once '../../system/fonksiyon.php';
    require_once 'SayfaUst.php';
    require_once 'SolMenu.php';
    ?>
	<link rel="stylesheet" href="plugins/filesupload/css/jquery.fileupload.css">
  <div class="content-wrapper">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Genel Ayarlar
              </h3>
              <div class="pull-right box-tools">
                <button type="button" class="btn bg-green btn-sm" data-widget="collapse" data-toggle="tooltip" title="Gizle">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn bg-green btn-sm" data-widget="remove" data-toggle="tooltip" title="Kaldır">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body pad">
                <form action="#" method="post" id="Form1" class="form-horizontal">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Site URL</label>
                                <div class="col-sm-8">
                                    <input type="url" name="SiteUrl"
                                           class="form-control input-sm "
                                           value="<?= $SiteUrl ?>"
                                           placeholder="#">
                                </div>
                            </div>
                            <div class="form-group" >
                                <label class="col-sm-3 control-label">Site Başlığı</label>
                                <div class="col-sm-8">
                                    <input id="Title" type="text"
                                           name="Title"
                                           class="form-control input-sm "
                                           value="<?= $Title ?>"
                                           placeholder="<?= $Title ?>">
                                </div>
                            </div>
                            <div class="form-group" >
                                <label class="col-sm-3 control-label">Site Açıklaması (Description)</label>
                                <div class="col-sm-8">
                                    <input id="Description" type="text"
                                           name="Description"
                                           class="form-control input-sm "
                                           value="<?= $Description ?>"
                                           placeholder="<?= $Description ?>">
                                </div>
                            </div>
                            <div class="form-group" >
                                <label class="col-sm-3 control-label">Anahtar Kelimeler (Keywords)</label>
                                <div class="col-sm-8">
                                    <input id="Keywords" type="text"
                                           name="Keywords"
                                           class="form-control input-sm "
                                           value="<?= $Keywords ?>"
                                           placeholder="<?= $Keywords ?>">
                                </div>
                            </div>
                            <div class="form-group" >
                                <label class="col-sm-3 control-label">Site Yazarı (Author)</label>
                                <div class="col-sm-8">
                                    <input id="Author" type="text"
                                           name="Author"
                                           class="form-control input-sm "
                                           value="<?= $Author ?>"
                                           placeholder="<?= $Author ?>">
                                </div>
                            </div>
							<hr>
                            <div class="form-group" >
                                <label class="col-sm-3 control-label">reCAPTCHA</label>
                                <div class="col-sm-8">
                                    <input id="reCAPTCHA" type="text"
                                           name="reCAPTCHA"
                                           class="form-control input-sm "
                                           value="<?= $reCAPTCHA ?>"
                                           placeholder="XXXX-XXXXXXXXXXXXXXXXX">
                                </div>
                            </div>
							<hr>
							<div class="col-md-6">
								<div class="form-group" >
									<label class="col-sm-4 control-label">Üst Logo</label>
									<div class="col-sm-6">
										<label id="UstLogoResimSec"class="btn btn-success btn-block btn-sm fileinput-button">
											<i class="glyphicon glyphicon-plus"></i>
											<span>Resim Seç...</span>
											<input id="UstLogo"  type="file" name="files[]" style="display: none;" multiple>
											<input id="UstLogoName"value=""name="UstLogo" style="display:none">
										</label>
										<br>
										<br>
										<div id="UstLogoProgress" class="progress">
											<div class="progress-bar progress-bar-success"></div>
										</div>
										<div id="UstLogoFiles" class="files"></div>
										<br>
										<br>
									</div>
								</div>
								<div class="form-group" >
									<label class="col-sm-4 control-label">Tema</label>
									<div class="col-sm-6">
										<select id="Tema" type="text"
											name="Tema" value="<?= $Tema ?>" class="form-control input-sm">
											
											<option value="1">Tema 1</option>
											<option value="2">Tema 2</option>
											<option value="3">Tema 3</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group" >
									<label class="col-sm-2 control-label">AltLogo</label>
									<div class="col-sm-6">
										<label id="AltLogoResimSec"class="btn btn-success btn-block btn-sm fileinput-button">
											<i class="glyphicon glyphicon-plus"></i>
											<span>Resim Seç...</span>
											<input id="AltLogo"  type="file" name="files[]" style="display: none;" multiple>
											<input id="AltLogoName"value=""name="AltLogo" style="display:none">
										</label>
										<br>
										<br>
										<div id="AltLogoProgress" class="progress">
											<div class="progress-bar progress-bar-success"></div>
										</div>
										<div id="AltLogoFiles" class="files"></div>
										<br>
										<br>
									</div>
								</div>
								<div class="form-group" >
									<label class="col-sm-4 control-label">Site Durumu</label>
									<div class="col-sm-6">
										<select id="IsActive" type="text"
											name="IsActive" value="<?= $IsActive ?>" class="form-control input-sm">
											<option></option>
											<option value="1">Aktif</option>
											<option value="2">Pasif</option>
										</select>
									</div>
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
											<span id="Kaydet" class="btn btn-block btn-sm btn-info">Kaydet</span><br />
										</div>
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
		


<script src="plugins/filesupload/js/load-image.all.min.js"></script>
<script src="plugins/filesupload/js/canvas-to-blob.min.js"></script>
<script src="plugins/filesupload/js/jquery.iframe-transport.js"></script>
<script src="plugins/filesupload/js/jquery.fileupload.js"></script>
<script src="plugins/filesupload/js/jquery.fileupload-process.js"></script>
<script src="plugins/filesupload/js/jquery.fileupload-image.js"></script>
<script src="plugins/filesupload/js/jquery.fileupload-audio.js"></script>
<script src="plugins/filesupload/js/jquery.fileupload-video.js"></script>
<script src="plugins/filesupload/js/jquery.fileupload-validate.js"></script>
	<script>

$("#Tema").val("<?=$Tema?>");	
$("#IsActive").val("<?=$IsActive?>");	
		
				function Form1Kaydet() {
                    var Form1 = document.getElementById('Form1');
                    var FormPost = $("#Form1").serialize();
                    $.ajax(
                        {
                            url: "ajax/Kayit/AyarGenel.php",
                            type: "POST",
                            dataType: "JSON",
                            data: FormPost+"&islem=Kayit",
                            success: function (cevap) {
                                var hatavar = cevap.hata;
                                var hatayok = cevap.ok;
                                if (hatavar) {
                                    BootstrapDialog.show({
                                        type: BootstrapDialog.TYPE_DANGER,
                                        title: "Sonuç",
                                        message: hatavar
                                    });
                                } else {
                                    BootstrapDialog.show({
                                        title: "Sonuç",
                                        message: hatayok,
                                        onhidden: function (dialogRef) {
                                            window.location="Anasayfa.php";
                                        }
                                    });
                                }
                            },
                            error: function (cevap) {
                                BootstrapDialog.show({
                                    type: BootstrapDialog.TYPE_DANGER,
                                    title: "Hata",
                                    message: "Kayıt sırasında hata oluştu..!"
                                });
                                console.log(cevap);
                            }
                        });
                }
		$("#Kaydet").click(function(){
			
			Form1Kaydet();
		});		
var UstLogoName="<?=$UstLogo?>";	
var UstLogoLink;	
var AltLogoName="<?=$AltLogo?>";	
var AltLogoLink;	
$("#UstLogoName").val(UstLogoName);
if(UstLogoName){
	$("#UstLogoFiles").append('<img src="../../images/'+UstLogoName+'"  width="100px"  >');
}
$("#AltLogoName").val(AltLogoName);
if(AltLogoName){
	$("#AltLogoFiles").append('<img src="../../images/'+AltLogoName+'" width="100px"  >');
}
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = 'ajax/FileUpload/',
        uploadButton = $('<label/>')
            .addClass('btn btn-primary btn-block btn-sm')
            .prop('disabled', true)
            .text('Yükleniyor...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('İptal')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });
//Üst Logo İçin			
    $('#UstLogo').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 999000,
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
		$("#UstLogoFiles img").hide();
        data.context = $('<div/>').appendTo('#UstLogoFiles');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('label')
                .text('Yükle')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#UstLogoProgress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
			UstLogoName=file.name;
			UstLogoLink=file.url;
			$("#UstLogoName").val(UstLogoName);
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
				$("#UstLogoResimSec").hide();
				$("#UstLogoProgress").hide();
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('Yüklenirken Hata Oluştu.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
		
		
		
//Alt Logo İçin		
	$('#AltLogo').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 999000,
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
		$("#AltLogoFiles img").hide();
        data.context = $('<div/>').appendTo('#AltLogoFiles');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('label')
                .text('Yükle')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#AltLogoProgress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
			AltLogoName=file.name;
			AltLogoLink=file.url;
			$("#AltLogoName").val(AltLogoName);
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
				$("#AltLogoResimSec").hide();
				$("#AltLogoProgress").hide();	
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('Yüklenirken Hata Oluştu.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');	
});	
	</script>
</body>
</html>
<?php } ?>