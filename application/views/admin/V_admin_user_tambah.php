<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin LPMP | User</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/AdminLTE.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dataurl.css')?>">
    <script type="text/javascript" src="<?php echo base_url('/assets/js/pace.min.js') ?>"></script>
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
                        Tambah User
                    </div>
                    <div class="artikel-list-body">
                        <form action="" method="post" id="form-admin-add" enctype="multipart/form-data">
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Username</span>
                                  </span>
                                <input type="text" class="form-control" name="username" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Password</span>
                                  </span>
                                <input type="text" class="form-control" name="password" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Nama</span>
                                  </span>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Foto</span>
                                 </span>
                                <input type="file" name="foto" id="file" class="input-right">
                                <label for="file" class="input-label-file form-control"><span><i class="fa fa-file-image-o" aria-hidden="true"></i>Choose a file&hellip;</span></label>
                            </div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Status</span>
                                 </span>
                                 <select name="status" class="form-control" required>
                                     <option value="0">Admin</option>
                                     <option value="1">Super Admin</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <span class="btn btn-default">Aktif</span>
                                 </span>
                                 <select name="aktif" class="form-control" required>
                                     <option value="0">Tidak Aktif</option>
                                     <option value="1">Aktif</option>
                                </select>
                            </div>
                            <div id="submitWrap">
                                <input type="submit" class="submitButton" id="submitUser" value="Simpan">
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
        $("#form-admin-add").submit(function(event){
            event.preventDefault();
            $.ajax({
                type : 'POST',
                url : '<?php echo site_url('admin/user_submit')?>',
                data : new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                success : function(berhasil){
                    swal('Berhasil Menambahkan User','','success').then(function() {
                        window.location='<?php echo site_url('admin/user') ?>';
                    });
                }
            });
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
