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
    <script type="text/javascript" src="<?php echo base_url('/assets/js/pace.min.js') ?>"></script>
    <script src='<?php echo base_url().'assets/tinymce/tinymce.min.js'?>'></script>
    <script>
    tinymce.init({
      selector: 'textarea',
      content_css : '<?php echo base_url().'assets/css/index.css' ?>,<?php echo base_url().'assets/css/bootstrap.min.css'?>',
//      inline:true,
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
      <!--end header-->
      <!-- Left side -->
      <?php $this->load->view("admin/V_admin_left-side") ?>
      <!--end left side-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="">
          <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <div class="artikel-list">
                    <div class="artikel-list-header">
                        Edit Artikel
                    </div>
                    <div class="artikel-list-body">
                        <form action="" method="post" id="form-artikel-edit" enctype="multipart/form-data">
                            <input type="hidden" name="uuidShadow" value="<?php echo $artikel[0]["uuid"] ?>">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Judul</span>
                                  </span>
                                <input type="text" class="form-control" name="judul" value="<?php echo $artikel[0]['judul'] ?>" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Sub Judul</span>
                                  </span>
                                <input type="text" class="form-control" name="subjudul" value="<?php echo $artikel[0]['subjudul'] ?>" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Kategori</span>
                                  </span>
                                <select name="kategori" class="form-control" required>
                                    <?php foreach($kategori as $data_kategori){
                                        $id = $data_kategori['id'];
                                        $nama_kategori = $data_kategori['nama'];
                                        $status = "";
                                        if($nama_kategori == $artikel[0]['nama']){
                                            $status = "selected";
                                        }
                                    ?>
                                    <option value="<?php echo $id ?>" <?php echo $status ?>><?php echo $nama_kategori ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Icon</span>
                                 </span>
                                <input type="file" name="icon" id="file" class="input-right">
                                <label for="file" class="input-label-file form-control"><span><i class="fa fa-file-image-o" aria-hidden="true"></i>Choose a file&hellip;</span></label>
                                <input type="hidden" name="iconShadow" class="input-right" value="<?php echo $artikel[0]['icon'] ?>">
                            </div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Publish</span>
                                 </span>
                                 <select name="publish" class="form-control" required>
                                     <?php
                                     if($artikel[0]['publish'] == 1){
                                      ?>
                                      <option value="1" selected="">Ya</option>
                                      <option value="0">Tidak</option>
                                      <?php }else{ ?>
                                     <option value="0" selected>Tidak</option>
                                     <option value="1">Ya</option>
                                     <?php } ?>
                                 </select>
                            </div>
                            <textarea name="isiArtikel" id="isiArtikel" style="width:100%">
                                <?php echo $artikel[0]['isi'] ?>
                            </textarea>
                            <input type="hidden" id="shadowArtikel" name="shadowArtikel">
                            <div id="submitWrap">
                                <input type="submit" class="submitButton" id="submitArtikel" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-1"></div>
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/style-input-file.js')?>"></script>
    <script src="<?php echo base_url('assets/js/app.js')?>"></script>
    <script>
    $(document).ready(function(){
        var height = $(".main-sidebar").height();
        $(".content-wrapper").css("height",height);
        $("#form-artikel-edit").submit(function(event){
            event.preventDefault();
            $("#mceu_56").css("display","none");
            $('#shadowArtikel').val(tinyMCE.get('isiArtikel').getContent());
            if($('#shadowArtikel').val() == ""){
                swal('Gagal Menyimpan Artikel','Lengkapi Seluruh Form dahulu','error');
            }
            else{
                $.ajax({
                    type : 'POST',
                    url : '<?php echo site_url('admin/artikel_edit')?>',
                    data : new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success : function(berhasil){
                        swal('Berhasil Megedit Artikel','','success').then(function() {
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
