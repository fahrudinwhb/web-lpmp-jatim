<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LPMP</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/responsive.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/slick/slick.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/slick/slick-theme.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/photoswipe.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/photoswipe-skin/default-skin.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
</head>
<style>
.first-nav{
    background-image: url("<?php echo base_url()?>assets/img/headmid.jpg");
}
.zero-nav{
    width: 100%;
    height: 15px;
    background-image: url("<?php echo base_url()?>assets/img/headtop.jpg");
}
.menu-small a#menu-trigger{
    background-image: url("<?php echo base_url()?>assets/img/headmid.jpg");
}
</style>
<body>
    <!-- nav -->
    <?php $this->load->view('navbar') ?>
    <!-- end nav -->
    <div class="clearfix"></div>
    <div class="content">
    <div class="container-fluid no-padding">
        <div class="col-xs-12 row-0 no-padding" id="head-line">
            <div class="col-md-1"></div>
            <div class="col-md-10 col-xs-12">
                <div class="col-xs-12 no-padding">
                    <div class="artikel-header">
                        <span class="artikel-header-judul">Headline</span>
                        <div class="artikel-header-underline"></div>
                    </div>
                    <div class="artikel-body">
                        <div class="col-xs-12 col-md-8 head-line-hot no-padding slider-for">
                            <a href="#" class="artikel-link">
                                <img src="<?php echo base_url()?>assets/img/1.jpg" alt="" class="img-responsive">
                                <div class="head-line-hot-text">
                                    <span class="judul">Melihat Sekolah Bagi Anak WNI di Ladang Sawit di Malaysia</span><br>
                                    <span class="sub-judul">asasas</span>
                                </div>
                            </a>
                            <a href="#" class="artikel-link">
                                <img src="<?php echo base_url()?>assets/img/2.jpg" alt="" class="img-responsive">
                                <div class="head-line-hot-text">
                                    <span class="judul">Menpan Punya Cita-cita: PNS Punya Kualitas Lebih Bagus dari Orang Kantoran</span><br>
                                    <span class="sub-judul">asasas</span>
                                </div>
                            </a>
                            <a href="#" class="artikel-link">
                                <img src="<?php echo base_url()?>assets/img/3.jpg" alt="" class="img-responsive">
                                <div class="head-line-hot-text">
                                    <span class="judul">Mendikbud Akan Masukkan Bahaya Rokok ke Dalam Materi Pendidikan Dasar</span><br>
                                    <span class="sub-judul">asasas</span>
                                </div>
                            </a>
                            <a href="#" class="artikel-link">
                                <img src="<?php echo base_url()?>assets/img/4.jpg" alt="" class="img-responsive">
                                <div class="head-line-hot-text">
                                    <span class="judul">Mendikbud Akan Masukkan Bahaya Rokok ke Dalam Materi Pendidikan Dasar</span><br>
                                    <span class="sub-judul">asasas</span>
                                </div>
                            </a>
                        </div>
                        <div class="col-xs-12 col-md-4 head-line-side no-padding-right slider-nav">
                            <a href="#" class="artikel-link artikel-active">
                                <div class="col-xs-12 head-line-side-item no-padding">
                                    <div class="col-xs-5 no-padding-left">
                                        <img src="<?php echo base_url()?>assets/img/1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-xs-7 no-padding">
                                        <div class="head-line-side-item-title artikel-title artikel-title">Menpan Punya Cita-cita: PNS Punya Kualitas Lebih Bagus dari Orang Kantoran</div>
                                        <div class="head-line-side-item-sub-title">Ariani Kusumaningrum</div>
                                        <div class="head-line-side-item-sub-title-2">SMKN 2 Malang</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="artikel-link">
                                <div class="col-xs-12 head-line-side-item no-padding">
                                    <div class="col-xs-5 no-padding-left">
                                        <img src="<?php echo base_url()?>assets/img/2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-xs-7 no-padding">
                                        <div class="head-line-side-item-title artikel-title artikel-title">Mendikbud Akan Masukkan Bahaya Rokok ke Dalam Materi Pendidikan Dasar</div>
                                        <div class="head-line-side-item-sub-title">Ariani Kusumaningrum</div>
                                        <div class="head-line-side-item-sub-title-2">SMKN 2 Malang</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="artikel-link">
                                <div class="col-xs-12 head-line-side-item no-padding">
                                    <div class="col-xs-5 no-padding-left">
                                        <img src="<?php echo base_url()?>assets/img/3.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-xs-7 no-padding">
                                        <div class="head-line-side-item-title artikel-title artikel-title">Mendikbud Minta Masukan Nasyiatul Aisyiyah soal Pendidikan Dasar dan PAUD</div>
                                        <div class="head-line-side-item-sub-title">Ariani Kusumaningrum</div>
                                        <div class="head-line-side-item-sub-title-2">SMKN 2 Malang</div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="artikel-link">
                                <div class="col-xs-12 head-line-side-item no-padding">
                                    <div class="col-xs-5 no-padding-left">
                                        <img src="<?php echo base_url()?>assets/img/4.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-xs-7 no-padding">
                                        <div class="head-line-side-item-title artikel-title artikel-title">Cegah Tumbuhnya Paham Radikal, Kemhan Ajak 1.000 Ulama Ikuti Bela Negara</div>
                                        <div class="head-line-side-item-sub-title">Ariani Kusumaningrum</div>
                                        <div class="head-line-side-item-sub-title-2">SMKN 2 Malang</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <di class="col-md-1"></di>
        </div>
        <div class="col-xs-12"></div>
        <div class="col-xs-12 row-2 no-padding" id="layanan">
            <div class="col-md-1"></div>
            <div class="col-xs-12 col-md-10 no-padding-repsonsive">
                <div class="col-xs-12 col-md-12 no-padding">
                    <div class="artikel-header pengetahuan-header">
                        <span class="artikel-header-judul">Layanan</span>
                        <div class="artikel-header-underline pengetahuan-header-underline"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="clearfix"></div>
            <div class="col-md-1"></div>
            <div class="col-xs-12 col-md-10 no-padding-repsonsive">
                <div class="client-slider">
                    <div class="col-xs-12 col-md-3 no-padding client-slider-item">
                        <a href="">
                            <img src="<?php echo base_url()?>assets/img/backpack.png" class="img-responsive">
                            <p>Hallo</p>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-3 no-padding client-slider-item">
                        <a href="">
                            <img src="<?php echo base_url()?>assets/img/bookshelf.png" class="img-responsive">
                            <p>Hallo</p>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-3 no-padding client-slider-item">
                        <a href="">
                            <img src="<?php echo base_url()?>assets/img/pie-chart.png" class="img-responsive">
                            <p>Hallo</p>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-3 no-padding client-slider-item">
                        <a href="">
                            <img src="<?php echo base_url()?>assets/img/speech-bubble.png" class="img-responsive">
                            <p>Hallo</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="col-xs-12 no-padding" id="pengetahuan">
            <div class="col-md-1 no-padding"></div>
            <div class="col-xs-12 col-md-6 no-padding-responsive">
                <div class="artikel-header pengetahuan-header">
                    <span class="artikel-header-judul">Jembatan Pengetahuan</span>
                    <div class="artikel-header-underline pengetahuan-header-underline"></div>
                </div>
                <div class="artikel-body">
                    <a href="#" class="artikel-link">
                        <div class="col-xs-12 jembatan-pengetahuan-item no-padding">
                            <div class="col-xs-12 col-md-4 no-padding-left">
                                <img src="<?php echo base_url()?>assets/img/2.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-md-8 no-padding">
                                <div class="jembatan-pengetahuan-item-title artikel-title">Menpan Punya Cita-cita: PNS Punya Kualitas Lebih Bagus dari Orang Kantoran</div>
                                <div class="jembatan-pengetahuan-item-sub-title">Ariani Kusumaningrum</div>
                                <div class="jembatan-pengetahuan-item-sub-title-2">SMKN 2 Malang</div>
                                <div class="jembatan-pengetahuan-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae impedit tempore repellendus provident nam laudantium vero ab. Totam nihil, beatae earum ipsa illum ratione, ipsum quasi, repudiandae reiciendis sed nemo.</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="artikel-link">
                        <div class="col-xs-12 jembatan-pengetahuan-item no-padding">
                            <div class="col-xs-12 col-md-4 no-padding-left">
                                <img src="<?php echo base_url()?>assets/img/2.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-md-8 no-padding">
                                <div class="jembatan-pengetahuan-item-title artikel-title">Menpan Punya Cita-cita: PNS Punya Kualitas Lebih Bagus dari Orang Kantoran</div>
                                <div class="jembatan-pengetahuan-item-sub-title">Ariani Kusumaningrum</div>
                                <div class="jembatan-pengetahuan-item-sub-title-2">SMKN 2 Malang</div>
                                <div class="jembatan-pengetahuan-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae impedit tempore repellendus provident nam laudantium vero ab. Totam nihil, beatae earum ipsa illum ratione, ipsum quasi, repudiandae reiciendis sed nemo.</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="artikel-link">
                        <div class="col-xs-12 jembatan-pengetahuan-item no-padding">
                            <div class="col-xs-12 col-md-4 no-padding-left">
                                <img src="<?php echo base_url()?>assets/img/2.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-12 col-md-8 no-padding">
                                <div class="jembatan-pengetahuan-item-title artikel-title">Menpan Punya Cita-cita: PNS Punya Kualitas Lebih Bagus dari Orang Kantoran</div>
                                <div class="jembatan-pengetahuan-item-sub-title">Ariani Kusumaningrum</div>
                                <div class="jembatan-pengetahuan-item-sub-title-2">SMKN 2 Malang</div>
                                <div class="jembatan-pengetahuan-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae impedit tempore repellendus provident nam laudantium vero ab. Totam nihil, beatae earum ipsa illum ratione, ipsum quasi, repudiandae reiciendis sed nemo.</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 no-padding-responsive">
                <div class="artikel-header">
                    <div class="artikel-header buku-header">
                        <span class="artikel-header-judul">Jembatan Pengetahuan</span>
                        <div class="artikel-header-underline buku-header-underline"></div>
                    </div>
                </div>
                <div class="artikel-body">
                    <a href="#" class="artikel-link">
                        <div class="col-xs-12 head-line-side-item no-padding">
                            <div class="col-xs-5 no-padding-left">
                                <img src="<?php echo base_url()?>assets/img/2.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-7 no-padding">
                                <div class="head-line-side-item-title artikel-title artikel-title">Menpan Punya Cita-cita: PNS Punya Kualitas Lebih Bagus dari Orang Kantoran</div>
                                <div class="head-line-side-item-sub-title">Ariani Kusumaningrum</div>
                                <div class="head-line-side-item-sub-title-2">SMKN 2 Malang</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="artikel-link">
                        <div class="col-xs-12 head-line-side-item no-padding">
                            <div class="col-xs-5 no-padding-left">
                                <img src="<?php echo base_url()?>assets/img/2.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="col-xs-7 no-padding">
                                <div class="head-line-side-item-title artikel-title artikel-title">Menpan Punya Cita-cita: PNS Punya Kualitas Lebih Bagus dari Orang Kantoran</div>
                                <div class="head-line-side-item-sub-title">Ariani Kusumaningrum</div>
                                <div class="head-line-side-item-sub-title-2">SMKN 2 Malang</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-1 no-padding"></div>
        </div>
        <div class="col-xs-12 row-3 no-padding" id="artikel">
            <div class="col-md-1 no-padding"></div>
            <div class="col-xs-12 col-md-10 no-padding-repsonsive">
                <div class="col-xs-12 col-md-4 no-padding-left artikel-wrap">
                    <div class="artikel-header inside-school-header">
                        <span class="artikel-header-judul">Inside School</span>
                        <div class="artikel-header-underline inside-school-header-underline"></div>
                    </div>
                    <div class="artikel-body">
                        <div class="artikel-hot">
                            <img src="<?php echo base_url().$artikel_inside_school[0]['icon'] ?>" alt="" class="img-responsive artikel-hot-img">
                            <a href="" class="artikel-hot-caption-wrap">
                                <span class="artikel-hot-caption">
                                    <span class="artikel-hot-date"><?php echo date("d/m/Y", strtotime($artikel_inside_school[0]['datetime'])) ?></span><br>
                                    <?php echo $artikel_inside_school[0]['judul'] ?>
                                </span>
                                <!-- <span class="artikel-hot-sub-caption">Afif Nandya Saputra</span> -->
                            </a>
                        </div>
                        <div class="artikel-normal">
                            <ul>
                                <?php foreach($artikel_inside_school as $inside_school){ ?>
                                <li><a href="<?php echo site_url('artikel/inside-school')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$inside_school['judul']) ?>"><?php echo $inside_school['judul'] ?></a></li>
                                <?php } ?>
                                <li class="lihat-semua"><a href="<?php echo site_url('artikel/inside-school') ?>">Lihat Semua</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 no-padding-left artikel-wrap">
                    <div class="artikel-header kabar-sepekan-header">
                        <span class="artikel-header-judul">Kabar Sepekan</span>
                        <div class="artikel-header-underline kabar-sepekan-header-underline"></div>
                    </div>
                    <div class="artikel-body">
                        <div class="artikel-hot">
                            <img src="<?php echo base_url().$artikel_kabar_sepekan[0]['icon']?>" alt="" class="img-responsive artikel-hot-img">
                            <a href="" class="artikel-hot-caption-wrap">
                                <span class="artikel-hot-caption">
                                    <span class="artikel-hot-date"><?php echo date("d/m/Y", strtotime($artikel_kabar_sepekan[0]['datetime'])) ?></span><br>
                                    <?php echo $artikel_kabar_sepekan[0]['judul'] ?>
                                </span>
                                <!-- <span class="artikel-hot-sub-caption">Afif Nandya Saputra</span> -->
                            </a>
                        </div>
                        <div class="artikel-normal">
                            <ul>
                                <?php foreach($artikel_kabar_sepekan as $kabar_sepekan){ ?>
                                <li><a href="<?php echo site_url('artikel/kabar-sepekan')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$kabar_sepekan['judul']) ?>"><?php echo $kabar_sepekan['judul'] ?></a></li>
                                <?php } ?>
                                <li class="lihat-semua"><a href="<?php echo site_url('artikel/kabar-sepekan') ?>">Lihat Semua</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 no-padding-left artikel-wrap">
                    <div class="artikel-header hidup-guruku-header">
                        <span class="artikel-header-judul">Hidup Guruku</span>
                        <div class="artikel-header-underline hidup-guruku-header-underline"></div>
                    </div>
                    <div class="artikel-body">
                        <div class="artikel-hot">
                            <img src="<?php echo base_url().$artikel_hidup_guruku[0]['icon']?>" alt="" class="img-responsive artikel-hot-img">
                            <a href="" class="artikel-hot-caption-wrap">
                                <span class="artikel-hot-caption">
                                    <span class="artikel-hot-date"><?php echo date("d/m/Y", strtotime($artikel_hidup_guruku[0]['datetime'])) ?></span><br>
                                    <?php echo $artikel_hidup_guruku[0]['judul'] ?>
                                </span>
                                <!-- <span class="artikel-hot-sub-caption"><?php echo $artikel_hidup_guruku[0]['subjudul'] ?></span> -->
                            </a>
                        </div>
                        <div class="artikel-normal">
                            <ul>
                                <?php foreach($artikel_hidup_guruku as $hidup_guruku){ ?>
                                <li><a href="<?php echo site_url('artikel/hidup-guruku')."/".preg_replace('/[^a-zA-Z0-9]/',"-",$hidup_guruku['judul']) ?>"><?php echo $hidup_guruku['judul'] ?></a></li>
                                <?php } ?>
                                <li class="lihat-semua"><a href="<?php echo site_url('artikel/hidup-guruku') ?>">Lihat Semua</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1 no-padding"></div>
        </div>
        <div class="col-xs-12 no-padding" id="media">
            <div class="col-md-1 no-padding"></div>
            <div class="col-xs-12 col-md-5 no-padding-repsonsive">
                <div class="artikel-header pengetahuan-header">
                    <span class="artikel-header-judul">Video</span>
                    <div class="artikel-header-underline pengetahuan-header-underline"></div>
                </div>
                <div class="artikel-body">
                    <iframe src="https://www.youtube.com/embed/uIx0KXLAk14"></iframe>
                </div>
            </div>
            <div class="col-xs-12 col-md-5 ">
                <div class="artikel-header">
                    <div class="artikel-header gallery-header">
                        <span class="artikel-header-judul">Gallery</span>
                        <div class="artikel-header-underline gallery-header-underline"></div>
                    </div>
                </div>
                <div class="artikel-body">
                    <div class="gallery-wrap">
                        <?php
                        foreach ($gallery as $key => $value) {
                            if($key == 0){
                        ?>
                        <div class="col-xs-12 no-padding">
                            <a href="<?php echo $gallery[0]['file'] ?>" class="gallery-click" data-width="<?php echo $gallery[0]['width'] ?>" data-length="<?php echo $gallery[0]['height'] ?>" data-title="mks" data-index="0">
                                <img src="<?php echo $gallery[0]['file'] ?>" alt="Beach" class="img-responsive gallery-item">
                            </a>
                        </div>
                        <?php  }else{
                        ?>
                        <div class="col-xs-3 gallery-item no-padding">
                            <img src="<?php echo $gallery[$key]['file'] ?>" alt="Beach" class="img-responsive gallery-item">
                            <a href="<?php echo $gallery[$key]['file'] ?>" class="gallery-click" data-width="<?php echo $gallery[$key]['width'] ?>" data-length="<?php echo $gallery[$key]['height'] ?>" data-title="qwq" data-index="<?php echo $key ?>">
                            </a>
                        </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>
            <div class="col-md-1 no-padding"></div>
        </div>
        <div class="col-xs-12 separator"></div>
    </div>
    </div>
    <!-- footer -->
    <?php $this->load->view('footer') ?>
    <!-- end footer -->
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                          <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/slick/slick.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/velocity.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/photoswipe.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/photoswipe-ui-default.min.js"></script>
    <script>
    $('.slider-for').slick({
         slidesToShow: 1,
         slidesToScroll: 1,
         arrows: false,
         fade: true,
         asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
         slidesToShow: 5,
         slidesToScroll: 1,
         vertical : true,
         asNavFor: '.slider-for',
         focusOnSelect: true
    });
    $(".slider-nav a").click(function(e){
        $(this).addClass("artikel-active");
        if($(this).siblings().hasClass("artikel-active")){
            $(this).siblings().removeClass("artikel-active");
        }
    });
    </script>
    <script>
    var items = [];
    $(".gallery-click").each(function(){
            var $href   = $(this).attr('href');
            var $width  = $(this).data('width');
            var $height = $(this).data('length');
            var $title  = $(this).data('title');
            var item = {
                    src : $href,
                    w   : $width,
                    h   : $height,
                    title: $title
            }
            items.push(item);
    });
    var photoSwipe = $('.pswp')[0];
    $(".gallery-click").on('click',function(e){
        e.preventDefault();
        var index = $(this).data('index');
        var option = {
            index : index,
            bgOpacity: 0.7,
            showHideOpacity: true,
            getThumbBoundsFn: function(index) {
                // find thumbnail element
                var thumbnail = $(".gallery-item")[index];
                // get window scroll Y
                var pageYScroll = window.pageYOffset || document.documentElement.scrollTop;
                // optionally get horizontal scroll
                // get position of element relative to viewport
                var rect = thumbnail.getBoundingClientRect();
                // w = width
                return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
                // Good guide on how to get element coordinates:
                // http://javascript.info/tutorial/coordinates
            }
        }
        var gallery = new PhotoSwipe( photoSwipe, PhotoSwipeUI_Default, items, option);
        gallery.init();
    });
    </script>
    <script>
    $("document").ready(function(){
        // var height = $(".head-line-hot").height();
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
        $(".client-slider").slick({
            nextArrow : $('.client-slider-next'),
            prevArrow : $('.client-slider-prev'),
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
              {
                breakpoint: 992,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
                }
              },
              {
                breakpoint: 768,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
            ]
        });
});
    </script>
</body>
</html>
