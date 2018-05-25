<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hidup Guruku</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/responsive.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/slick/slick.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/slick/slick-theme.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/hidup_guruku.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/hidup_guruku_responsive.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
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
</style>
<body>
  <!-- nav -->
  <?php $this->load->view('navbar') ?>
  <!-- end nav -->
    <!-- content -->
    <div class="container">
        <div class="col-md-1"></div>
        <div class="col-xs-12 col-md-10">
            <ol class="breadcrumb crumb">
                <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>
                <li><a href="<?php echo site_url('artikel')."/".$this->uri->segment(2) ?>"><?php echo $this->uri->segment(2) ?></a></li>
            </ol>
            <p class="col-xs-12 guruku-judul-utama no-padding"><a href="<?php echo site_url($this->uri->uri_string())."/".$featured_judul_link ?>"><?php echo $featured_judul?></a></p>
            <p class="col-xs-12 guruku-tanggal no-padding"><?php echo $featured_sub_judul?></p>
            <div class="col-xs-12 col-md-7 guruku-berita-baru no-padding">
                <img src="<?php echo base_url().$featured_icon?>" class="img-responsive" alt="">
            </div>
            <div class="col-md-5 guruku-cuplikan-berita hidden-xs">
                <p class="guruku-cuplikan">
                    <?php
                        $string = strip_tags($featured_isi);
                        if (strlen($string) > 300) {
                            $stringCut = substr($string, 0,300);
                            echo $stringCut.'<br><a href="'.site_url($this->uri->uri_string())."/".$featured_judul_link.'">selengkapnya</a>';
                        }
                        else{
                            echo $string;
                        }
                    ?>
                </p>
            </div>
            <div class="clearfix"></div>
            <div class="col-xs-12 guruku-berita no-padding">
                <p>Daftar Berita</p>
            </div>
            <?php foreach($artikel as $key => $data){
                if($key == 0){
                    continue;
                }
             ?>
                <div class="col-xs-4 col-md-4 guruku-gambar-berita no-padding">
                    <img src="<?php echo base_url().$data['icon']?>" class="img-responsive" alt="">
                </div>
                <div class="col-xs-8 col-md-8 guruku-cuplikan-berita2">
                    <p class="guruku-judul-berita"><a href=""><?php echo $data['judul'] ?></a></p>
                    <p class="guruku-tanggal-berita"><?php echo $data['subjudul'] ?></p>
                    <p class="guruku-cuplikan hidden-xs"><?php echo $data['isi'] ?></p>
                </div>
                <div class="col-xs-12 guruku-garis no-padding"></div>
            <?php } ?>
            <!-- end content -->
            <!-- pagination -->
            <div class="col-xs-1 col-md-4"></div>
            <div class="col-md-10 col-md-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-xs-1 col-md-4"></div>
            <!-- end pagination -->
        </div>
        <div class="col-md-1"></div>
    </div>
    <!-- footer -->
    <?php $this->load->view('footer') ?>
    <!-- end footer -->
    <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/slick/slick.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/velocity.min.js"></script>
    <script src="<?php echo base_url('assets/js/app.js')?>"></script>
    <script>
    var height = $(".hidup-guruku-main").height();
    $(".hidup-guruku-side").height(height);
    $("document").ready(function(){
        $(".main-slider").slick({
            nextArrow : $('.slider-next'),
            prevArrow : $('.slider-prev'),
            autoplay: true,
            autoplaySpeed: 5000,
            pauseOnHover : false,
            adaptiveHeight : false
        });
        $('.main-slider').on('beforeChange', function(event, slick, currentSlide, nextSlide){
            var slide = ".item-"+nextSlide;
            var caption = slide+" "+".caption-bg";
            // alert(caption);
            $(caption).velocity({
                properties : { bottom : "0%" ,opacity : 1 },
                options : {
                    duration : 1200,
                }
            })
            .velocity({
                properties : { bottom : "-10%" ,opacity : 0 },
                options : {
                    delay : 3500,
                    duration : 1200,
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
            slidesToScroll: 3,
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
