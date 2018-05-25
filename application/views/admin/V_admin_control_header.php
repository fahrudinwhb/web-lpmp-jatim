<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin LPMP | Header Image</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/AdminLTE.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/admin.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/sweetalert2.min.css') ?>">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/slick/slick.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/slick/slick-theme.css">
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
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                    <div class="control-header">
                        <div class="container-fluid no-padding">
                            <div class="col-xs-1"></div>
                            <div class="col-xs-12 no-padding" style="background-color:white;margin-top:20px;"><span style="margin:10px">Header</span></div>
                            <div class="col-xs-1"></div>
                        </div>
                    </div>
                    <div class="control-body">
                        <div class="container-fluid no-padding" id="slider">
                            <div class="col-xs-12 no-padding">
                                <div class="slider-wrap">
                                    <div class="main-slider">
                                    <?php foreach($header as $data){ ?>
                                        <a href="">
                                            <div class="main-slider-item item-<?php echo $data['urutan']?>">
                                                <img src="<?php echo base_url().$data['icon'] ?>" class="img-responsive">
                                                <div class="caption-bg">
                                                    <div class="caption-wrap">
                                                        <img src="<?php echo base_url()?>assets/img/headline.png" alt="" class="caption-foto">
                                                        <div class="caption-body">
                                                            <div class="caption-title"><?php echo $data['judul'] ?></div>
                                                            <div class="caption-text"><?php echo $data['subjudul'] ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    <?php } ?>
                                    </div>
                                    <span class="slider-next">
                                        <span class="fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x"></i>
                                          <i class="fa fa-chevron-right fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </span>
                                    <span class="slider-prev">
                                        <span class="fa-stack fa-lg">
                                          <i class="fa fa-circle fa-stack-2x"></i>
                                          <i class="fa fa-chevron-left fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="slider-custom">
                            <div class="col-xs-12">
                                <div class="panel-group" id="accordion">
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          <h4 class="panel-title">Tambah Header</h4>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                      <div class="panel-body">
                                        <form action="" method="post" id="form-header" enctype="multipart/form-data">
                                            <div class="input-group">
                                                <span class="input-group-btn"><span class="btn btn-default">Gambar</span></span>
                                                <input type="file" name="icon" id="file" class="input-right" required>
                                                <label for="file" class="input-label-file form-control"><span><i class="fa fa-file-image-o" aria-hidden="true"></i>Choose a file&hellip;</span></label>
                                            </div>
                                            <div class="input-group">
                                                <span class="input-group-btn"><span class="btn btn-default">Artikel</span></span>
                                                <select name="artikel" class="form-control" required>
                                                    <option selected disabled="">Pilih Artikel</option>
                                                    <?php foreach($artikel as $data){?>
                                                    <option value="<?php echo $data['uuid']?>"><?php echo $data['judul']?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                            <div id="submitWrap">
                                                <input type="submit" class="submitButton" id="submitArtikel" value="Simpan">
                                            </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                          <h4 class="panel-title">Edit Header</h4>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse in">
                                      <div class="panel-body">
                                          <div class="slider-option">
                                              <ul id="urutan-item">
                                                  <?php foreach($header as $data){ ?>
                                                  <li class="item-drag" data-id="<?php echo $data['id']?>">
                                                      <img src="<?php echo base_url().$data['icon']?>" class="img-responsive">
                                                      <a href="" class="delete" data-id="<?php echo $data['id']?>"><i class="fa fa-times" aria-hidden="true"></i></a>
                                                      <div class="item-drag-caption"></div>
                                                  </li>
                                                  <?php } ?>
                                              </ul>
                                          </div>
                                          <div id="submitWrap">
                                              <input type="submit" class="submitButton" id="submitUrutan" value="Simpan">
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1"></div>
            </div>
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->
    <!--Library JS -->
    <script src="<?php echo base_url('assets/js/jquery.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/sweetalert2.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/velocity.min.js')?>"></script>
    <script src="<?php echo base_url()?>assets/slick/slick.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/Sortable.min.js"></script>
    <!--created JS -->
    <script src="<?php echo base_url('assets/js/style-input-file.js')?>"></script>
    <script src="<?php echo base_url('assets/js/app.js')?>"></script>
    <script>
    $('.main-slider').on('init', function(){
        var slide = ".item-<?php echo $header['0']['urutan']?>";
        var caption = slide+" "+".caption-bg";
        // alert(caption);
        $(caption).velocity({
            properties : { bottom : "0%" ,opacity : 1 },
            options : {
                duration : 0,
                queue : false
            }
        })
        .velocity({
            properties : { bottom : "-10%" ,opacity : 0 },
            options : {
                delay : 6800,
                duration : 1000,
                queue : false
            }
        });
      });
    $(".main-slider").slick({
        nextArrow : $('.slider-next'),
        prevArrow : $('.slider-prev'),
        speed : 750,
        autoplay: true,
        autoplaySpeed: 7000,
        pauseOnHover : false,
        adaptiveHeight : true,
    });
    $('.main-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        var next = nextSlide;
        var slide = ".item-"+next;
        var caption = slide+" "+".caption-bg";
        // alert(caption);
        $(caption).velocity({
            properties : { bottom : "0%" ,opacity : 1 },
            options : {
                duration : 1000,
            }
        })
        .velocity({
            properties : { bottom : "-10%" ,opacity : 0 },
            options : {
                delay : 5800,
                duration : 1000,
            }
        });
      });
    </script>
    <script>
    $(document).ready(function(){
        var height = $(".main-sidebar").height();
        $(".content-wrapper").css("height",height);
        $(".left-link i.fa-angle-down").removeClass("secondmenu-active");
        $("#form-header").submit(function(event){
            event.preventDefault();
                $.ajax({
                    type : 'POST',
                    url : '<?php echo site_url('admin/header_submit')?>',
                    data : new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success : function(berhasil){
                        swal('Berhasil Menambahkan Header','','success').then(function() {
                            window.location='<?php echo site_url('admin/header') ?>';
                        });
                    }
                });
        });
        $("#submitUrutan").click(function(e){
            var urutan = [];
            $(".item-drag").each(function(index){
                urutan[index] = $(this).attr("data-id");
            });
            var json = JSON.stringify(urutan);
            $.ajax({
                type : 'POST',
                url : '<?php echo site_url('admin/header_urutan')?>',
                data : {'urutan' : json},
                success : function(berhasil){
                    swal('Berhasil Merubah Urutan Header','','success').then(function() {
                        window.location='<?php echo site_url('admin/header') ?>';
                    });
                }
            });
        });
        $(".item-drag a.delete").click(function(e){
            e.preventDefault();
            var id_header = $(this).attr('data-id');
            var parent = $(this).parent();
            swal({
                title : 'Hapus Header ? ',
                type :'warning',
                showCloseButton: true,
                showCancelButton: true,
            }).then(function() {
                $.ajax({
                    type : 'POST',
                    url : '<?php echo site_url('admin/header_delete')?>',
                    data : {'id_header' : id_header},
                    success : function(berhasil){
                        parent.velocity("fadeOut", { delay: 500, duration: 500 });
                        swal('Berhasil Menghapus Header','','success').then(function() {
                            // window.location='<?php echo site_url('admin/header') ?>';
                        });
                    }
                });
            });
        });
    });
    </script>
    <script>
    var urutan_item = document.getElementById('urutan-item');
    $(".item-drag-caption").each(function(index){
        $(this).text("Urutan "+index);
    });
        Sortable.create(urutan_item,{
            draggable: ".item-drag",
            animation: 150,
            onEnd: function(evt){
                $(".item-drag-caption").each(function(index){
                    $(this).text("Urutan "+index);
                });
            }
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
