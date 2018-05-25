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
                <div class="artikel-list" id="tabel-artikel">
                    <div class="artikel-list-header col-xs-12 no-padding-left no-padding-right">
                        <div class="col-xs-3 no-padding-left"><span>List Artikel</span></div>
                        <div id="custom-search-input" class="col-xs-6">
                            <div class="input-group search-bar">
                                <input type="text" class="form-control search" placeholder="Cari..." />
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </div>
                        <div class="col-xs-3 no-padding-right" style="text-align:right">
                            <a href="<?php echo site_url('admin/artikel/buat') ?>" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i>Buat Artikel</a>
                            <!-- <input type="text" class="search" placeholder="Search Artikel" style="padding-left:10px;"> -->
                        </div>
                    </div>
                    <div class="artikel-list-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr class="bg-primary">
                                <th class="id-column">UUID</th>
                                <th class="icon-column">Icon</th>
                                <th class="date-column">Tanggal</th>
                                <th class="judul-column sort" data-sort="judul-row">Judul</th>
                                <th class="sub-column sort" data-sort="sub-row">Sub Judul</th>
                                <th class="isi-column">Isi</th>
                                <th class="kategori-column sort" data-sort="kategori-row">Kategori</th>
                                <th class="editor-column sort" data-sort="editor-row">Editor</th>
                                <th class="publish-column text-center">Publish</th>
                                <th class="aksi-column">Aksi</th>
                            </tr>
                            </thead>
                            <tbody class="list">
                            <?php foreach($artikel as $data){ ?>
                            <tr class="">
                                <td class="id-row"><?php echo $data['uuid'] ?></td>
                                <td class="icon-row"><img src="<?php echo base_url($data['icon']) ?>" class="img-responsive"></td>
                                <td class="date-row"><?php echo $data['datetime'] ?></td>
                                <td class="judul-row"><?php echo $data['judul'] ?></td>
                                <td class="sub-row"><?php echo $data['subjudul'] ?></td>
                                <td class="isi-row">
                                    <?php
                                        $string = strip_tags($data['isi']);
                                        if (strlen($string) > 20) {
                                            $stringCut = substr($string, 0,20);
                                            echo $stringCut.'<br><a href="'.site_url('admin/artikel/edit/').$data['uuid'].'">selengkapnya</a>';
                                        }
                                        else{
                                            echo $string;
                                        }
                                    ?>
                                </td>
                                <td class="kategori-row"><?php echo $data['nama'] ?></td>
                                <td class="editor-row"><?php echo $data['editor'] ?></td>
                                <td class="publish-row">
                                    <?php if($data['publish'] == 1){
                                        echo '<i class="fa fa-check"></i>';
                                    }else{
                                        echo '<i class="fa fa-times"></i>';
                                    } ?>
                                </td>
                                <td class="aksi-row">
                                    <a href="<?php echo site_url('admin/artikel/edit/').$data['uuid'] ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                    <a data-toggle="tooltip" data-placement="bottom" data-id-artikel="<?php echo $data['uuid'] ?>" title="Hapus" class="action-link"><i class="fa fa-trash-o"></i></a>
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
        function ajaxDelete(id_artikel){
            $.ajax({
                type : 'POST',
                url : '<?php echo site_url('admin/artikel_delete')?>',
                data : {'id_artikel': id_artikel},
                success : function(berhasil){
                    swal('Berhasil Menghapus Artikel','','success');
                }
            });
        }
    </script>
    <script>
    $(document).ready(function(){
        var height = $(".main-sidebar").height();
        $(".content-wrapper").css("height",height);
        $('[data-toggle="tooltip"]').tooltip();
        var options = {
            valueNames: [ 'judul-row', 'sub-row','kategori-row','editor-row']
        };
        var userList = new List('tabel-artikel', options);
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
            var id_artikel = $(this).attr('data-id-artikel');
            var parent = $(this).parentsUntil("tbody ").contents();
            swal({
                title : 'Yakin menghapus artikel ini ?',
                type : 'warning',
                showCancelButton: true,
            }).then(function() {
            ajaxDelete(id_artikel);
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
