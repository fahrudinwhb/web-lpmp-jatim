<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $artikel[0]['judul'] ?></title>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/index.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/css/responsive.css">
    <link rel="stylesheet"href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/hidup_guruku.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/hidup_guruku_responsive.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/dataurl.css')?>">
    <script type="text/javascript" src="<?php echo base_url('/assets/js/pace.min.js') ?>"></script>
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
  <?php $this->load->view('navbar'); ?>
  <!-- end nav -->
  <!-- content -->
  <div class="container">
      <div class="col-md-1"></div>
      <div class="col-col-xs-12 col-md-10">
          <ol class="breadcrumb crumb">
              <li><a href="<?php echo site_url('home') ?>">Beranda</a></li>
              <li><a href="<?php echo site_url('artikel')."/".$this->uri->segment(2) ?>"><?php echo $this->uri->segment(2); ?></a></li>
              <li class="active"><?php echo $this->uri->segment(3) ?></li>
          </ol>
          <div class="col-xs-12 col-md-9 guruku-detail-gambar">
              <p class="guruku-judul-utama"><a href=""><?php echo $artikel[0]['judul'] ?></a></p>
              <p class="guruku-tanggal"><?php echo $artikel[0]['subjudul'] ?></p>
              <img src="<?php echo base_url().$artikel[0]['icon'] ?>" class="img-responsive" alt="">
              <div class="artikel-isi"><?php echo $artikel[0]['isi']?></div>
          </div>
          <div class="col-xs-12 col-md-3 guruku-berita-populer">
              <div class="col-xs-12">
                  <p class="guruku-populer">Berita Terpopuler</p>
              </div>
              <?php foreach($artikel_by_kategori as $list_kategori){ ?>
              <div class="col-xs-12 guruku-garis"></div>
                <div class="col-xs-12 guruku-daftar-populer">
                    <img src="<?php echo base_url().$list_kategori['icon'] ?>" class="img-responsive" alt="">
                    <p class="guruku-judul-berita2"><a href="<?php echo site_url('artikel')."/".$this->uri->segment(2)."/".preg_replace('/[^a-zA-Z0-9]/',"-",$list_kategori['judul']); ?>"><?php echo $list_kategori['judul'] ?></a></p>
                    <p class="guruku-tanggal"><?php echo $list_kategori['subjudul'] ?></p>
                </div>
              <?php } ?>
          </div>
      </div>
      <div class="col-md-1"></div>
  </div>
  <!-- end content -->
  <!-- footer -->
  <?php $this->load->view('footer') ?>
  <!-- end footer -->
  <script src="<?php echo base_url() ?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/velocity.min.js"></script>
</body>

</html>
