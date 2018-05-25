<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin LPMP | Artikel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/AdminLTE.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dataurl.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/cropper.min.css')?>">
    <script type="text/javascript" src="<?php echo base_url('/assets/js/pace.min.js') ?>"></script>
    <script src='<?php echo base_url().'assets/tinymce/tinymce.min.js'?>'></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      theme: "modern",
      content_css : '<?php echo base_url().'assets/css/index.css' ?>,<?php echo base_url().'assets/css/bootstrap.min.css'?>',
      plugins: [
        'advlist autolink lists link image charmap print preview anchor','searchreplace visualblocks code fullscreen',
        'insertdatetime media table contextmenu paste code responsivefilemanager save autoresize'
      ],
      toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager | save',
      image_advtab: true ,
      relative_urls: false,
      save_onsavecallback: function () { console.log('Saved'); },
      external_filemanager_path:"<?php echo base_url().'file_manager/filemanager'.'/';?>",
      filemanager_title:"Responsive Filemanager" ,
      external_plugins: { "filemanager" :"<?php echo base_url().'file_manager/filemanager/plugin.min.js'?>"}
    });

    </script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="container-fluid" style="padding:0">
      <!--header-->
      <?php $this->load->view("admin/V_admin_header") ?>
      <!-- Left side -->
      <?php $this->load->view("admin/V_admin_left-side") ?>
      <!-- Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="">
          <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <div class="artikel-list col-xs-12 no-padding">
                    <div class="artikel-list-header col-xs-12">
                        <h4>Buat Artikel</h4>
                    </div>
                    <div class="artikel-list-body col-xs-12 no-padding">
                        <div class="col-xs-4 left-list-body">
                            <div>
                                <div class="artikel-img-preview-wrap">
                                    <img src="<?php echo base_url('assets/img/artikel/placeholder.png')?>" class="img-responsive" id="imgPreview">
                                    <div class="artikel-img-preview">
                                        <span class="article-btn-wrap">
                                            <button class="icon-article-btn btn btn-info"><i class="fa fa-upload" aria-hidden="true"></i>Pilih Icon</button>
                                            <button class="icon-article-btn btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>Hapus</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <form action="" method="post" id="gambar-artikel" enctype="multipart/form-data">
                                <div class="input-group hidden">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Icon</span>
                                     </span>
                                    <input type="file" name="icon" id="file" class="input-right" required>
                                    <label for="file" class="input-label-file form-control"><span><i class="fa fa-file-image-o" aria-hidden="true"></i>Choose a file&hellip;</span></label>
                                </div>
                                <input type="submit" class="hidden">
                            </form>
                        </div>
                        <form action="" method="post" id="form-artikel" enctype="multipart/form-data">
                        <div class="col-xs-8 right-list-body">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Judul</span>
                                      </span>
                                    <input type="text" class="form-control" name="judul" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Sub Judul</span>
                                      </span>
                                    <input type="text" class="form-control" name="subjudul" required>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Kategori</span>
                                      </span>
                                    <select name="kategori" class="form-control" required>
                                        <option selected disabled="">Pilih Kategori</option>
                                        <option value="1">Hidup Guruku</option>
                                        <option value="2">Kabar Sepekan</option>
                                        <option value="3">Inside School</option>
                                    </select>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-default">Publish</span>
                                     </span>
                                     <select name="publish" class="form-control" required>
                                         <option value="0" selected>Tidak</option>
                                         <option value="1">Ya</option>
                                     </select>
                                </div>
                        </div>
                        <div class="col-xs-12">
                            <textarea name="isiArtikel" id="isiArtikel" style="width:100%"></textarea>
                            <input type="hidden" id="shadowArtikel" name="shadowArtikel">
                            <div id="submitWrap">
                                <input type="submit" class="submitButton" id="submitArtikel" value="Simpan">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-1"></div>
          </div>
        </section>
      </div>
    </div>
    <!-- Modal -->
    <form action="" method="post" id="formCropGambar" enctype="multipart/form-data">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <img src="<?php echo base_url('assets/img/aw.jpg'); ?>" id="imgReadyCrop">
            <input type="submit" class="hidden">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary getCropButton">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    </form>
    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/style-input-file.js')?>"></script>
    <script src="<?php echo base_url('assets/js/canvas-to-blob.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/cropper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/app.js')?>"></script>
    <script>
    $('.btn-info').click(function(e){
        $('#file').click();
    });
    $('.btn-danger').click(function(e){
        var defaultImage = '<?php echo base_url('assets/img/artikel/placeholder.png')?>';
        $('#imgPreview').attr('src',defaultImage);
    });
    $('#mceu_35').css("border-right","1px solid");
    $('#file').change(function(){
        $("#gambar-artikel").submit(function(e){
            var image = $('#imgReadyCrop');
            var cropBoxData;
            var canvasData;
            e.preventDefault();
            $.ajax({
                type : 'POST',
                url : '<?php echo site_url('admin/gambar')?>',
                data :  new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success : function(berhasil){
                    var gambar = '<?php echo base_url(); ?>';
                    image.attr('src',gambar+berhasil);
                    $('#imgPreview').attr('src',gambar+berhasil);
                    $('#myModal').modal({
                        backdrop : 'static',
                        keyboard : false,
                    });
                    $('#myModal').on('shown.bs.modal', function () {
                    image.cropper({
                      autoCropArea: 0.5,
                      built: function () {
                        image.cropper('setCanvasData', canvasData);
                        image.cropper('setCropBoxData', cropBoxData);
                      }
                    });
                  }).on('hidden.bs.modal', function () {
                    cropBoxData = image.cropper('getCropBoxData');
                    canvasData = image.cropper('getCanvasData');
                    image.cropper('destroy');
                  });
                }
            });
        });
        $("#gambar-artikel").find('input[type=submit]').click();
    });
    $("#formCropGambar").submit(function(e){
        e.preventDefault();
        var cropcanvas = $('#imgReadyCrop').cropper('getCroppedCanvas');
        var croppng = cropcanvas.toDataURL("image/jpeg",0.9);
        var imageName = $('#imgReadyCrop').attr('src').split(/(\\|\/)/g).pop();
          $.ajax('<?php echo site_url('admin/gambarCrop')?>', {
            method: "POST",
            data: {'pngimageData': croppng,'filename': imageName},
            success: function(e) {
                $('#imgPreview').attr('src',e);
                $('#myModal').modal('hide');
                console.log(e);
            //   alert(e);
            },
            error: function () {
              alert('Error'+e);
            }
          });
    });
    </script>
    <script>
    $(document).ready(function(){
        var height = $(".main-sidebar").height();
        $(".content-wrapper").css("height",height);
        $("#form-artikel").submit(function(event){
            event.preventDefault();
            $("#mceu_56").css("display","none");
            $('#shadowArtikel').val(tinyMCE.get('isiArtikel').getContent());
            if($('#shadowArtikel').val() == ""){
                swal('Gagal Menyimpan Artikel','Lengkapi Seluruh Form dahulu','error');
            }
            else{
                var formData = new FormData(this);
                var icon_gambar = $('#imgPreview').attr('src');
                formData.append("icon",icon_gambar);
                $.ajax({
                    type : 'POST',
                    url : '<?php echo site_url('admin/artikel_submit')?>',
                    data : formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success : function(berhasil){
                        // alert(berhasil);
                        swal('Berhasil Menyimpan Artikel','','success').then(function() {
                            window.location='<?php echo site_url('admin/artikel') ?>';
                        });
                    }
                });
            }
        });
    });
    </script>
    <script>
    $("li.left-link").click(function(){
        $(this).addClass("active");
        $(this).siblings().removeClass("active");
    });
    $('#artikel-collapse').on('show.bs.collapse',function(){
        $(".left-link i.fa-angle-down").addClass("secondmenu-active");
    });
    $('#artikel-collapse').on('hide.bs.collapse',function(){
        $(".left-link i.fa-angle-down").removeClass("secondmenu-active");
    });
    var uri1 = "<?php $uri = explode("/",uri_string());echo $uri['1'];?>";
    var uri2 = "<?php $uri = explode("/",uri_string());echo $uri['2'];?>";
    $(".left-link").each(function(){
        if($(this).text().toUpperCase() == uri1.toUpperCase()){
            var menu_collpase = "#"+uri1+"-collapse";
            $(menu_collpase).addClass("in");
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        }
    });
    $(".left-link-2").each(function(){
        if($(this).text().toUpperCase() == uri2.toUpperCase()){
            $(this).addClass("active2");
        }
    });
    </script>
  </body>
</html>
