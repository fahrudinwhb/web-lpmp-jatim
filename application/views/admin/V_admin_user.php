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
            <div class="col-xs-12" style="padding-left:25px;">
                <div class="artikel-list" id="tabel-user">
                    <div class="artikel-list-header">
                        <span>User Admin</span>
                        <div class="pull-right">
                            <a href="<?php echo site_url('admin/user/tambah') ?>"><i class="fa fa-user-plus" aria-hidden="true"></i>Tambah User</a>
                        </div>
                    </div>
                    <div class="artikel-list-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th class="username-column sort" data-sort="username-row">Username</th>
                                <th class="nama-column sort" data-sort="nama-row">Nama</th>
                                <th class="foto-column sort">Foto</th>
                                <th class="status-column sort" data-sort="status-row">Status</th>
                                <th class="aktif-column sort" data-sort="aktif-row">Aktif</th>
                                <th class="aksi-column">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach($user as $data){ ?>
                            <tr class="">
                                <td class="username-row"><?php echo $data['username'] ?></td>
                                <td class="nama-row"><?php echo $data['nama'] ?></td>
                                <td class="foto-row"><img src="<?php echo base_url().$data['foto'] ?>" class="img-responsive"></td>
                                <td class="status-row">
                                    <?php if($data['status'] == 1){
                                            echo "Super Admin";
                                          }
                                          else{
                                              echo "Admin";
                                          }
                                    ?>
                                </td>
                                <td class="aktif-row">
                                    <?php if($data['aktif'] == 1){
                                            echo "Aktif";
                                          }
                                          else{
                                              echo "Tidak Aktif";
                                          }
                                    ?>
                                </td>
                                <td class="aksi-row">
                                    <a href="<?php echo site_url('admin/user/edit/').$data['username'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <!-- JS -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/list.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/velocity.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/app.js')?>"></script>
    <script>
        function ajaxDelete(username){
            $.ajax({
                type : 'POST',
                url : '<?php echo site_url('admin/user_delete')?>',
                data : {'username': username},
                success : function(berhasil){
                    swal('Berhasil Menghapus User','','success');
                }
            });
        }
    </script>
    <script>
    $(document).ready(function(){
        var height = $(".main-sidebar").height();
        $(".content-wrapper").css("height",height);
        $(".left-link i.fa-angle-down").removeClass("secondmenu-active");
        $("li.left-link").click(function(){
            $(this).addClass("active");
            $(this).siblings().removeClass("active");
        });
        $('[data-toggle="tooltip"]').tooltip();
        var options = {
            valueNames: [ 'username-row', 'nama-row','status-row']
        };
        var userList = new List('tabel-user', options);
        $(".sort").click(function(){
            if($(this).hasClass("sortAscending")){
                $(this).addClass("sortDescending");
                $(this).removeClass("sortAscending");
                $(this).siblings().removeClass("sortDescending sortAscending");
            }
            else{
                $(this).addClass("sortAscending");
                $(this).removeClass("sortDescending");
                $(this).siblings().removeClass("sortDescending sortAscending");
            }
        });
        $(".action-link").click(function(){
            var username = $(this).attr('data-username');
            var parent = $(this).parentsUntil("tbody ").contents();
            swal({
                title : 'Yakin menghapus user ini ?',
                type : 'warning',
                showCancelButton: true,
            }).then(function() {
            ajaxDelete(username);
            parent.velocity("slideUp", { duration: 100 });
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
    </script>
  </body>
</html>
