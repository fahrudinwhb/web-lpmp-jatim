<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no;">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LPMP</title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/responsive.css">
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
    <!-- slider -->
    <!-- end slider -->
    <!-- content -->
    <div class="content">
    <div class="container no-padding">
    <div class="col-md-1"></div>
    <div class="col-md-10 col-xs-12">
        <p>fasilitas Lembaga</p>
    </div>
    <div class="col-md-1"></div>
    </div>
    </div>
    <!-- footer -->
    <?php $this->load->view('footer') ?>
    <!-- end footer -->
    <!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <!-- Background of PhotoSwipe.
         It's a separate element as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>
    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">
        <!-- Container that holds slides.
            PhotoSwipe keeps only 3 of them in the DOM to save memory.
            Don't modify these 3 pswp__item elements, data is added later on. -->
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <!--  Controls are self-explanatory. Order can be changed. -->
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                <!-- element will get class pswp__preloader--active when preloader is running -->
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
</body>
</html>
