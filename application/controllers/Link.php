<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function index()
	{
        show_404();
		// $this->load->helper('counter');
		// $visitor = count_visitor();
		// $this->load->model("M_artikel");
		// $this->load->model("M_header");
		// $data['artikel_inside_school'] = $this->M_artikel->getArtikelByKategori("Inside School"," ");
		// $data['artikel_hidup_guruku'] = $this->M_artikel->getArtikelByKategori("Hidup Guruku"," ");
		// $data['artikel_kabar_sepekan'] = $this->M_artikel->getArtikelByKategori("Kabar Sepekan"," ");
		// $data['header'] = $this->M_header->getHeader("","1");
		// $data['gallery'][0]['file'] = base_url("assets/img/7.jpg");
		// $data['gallery'][1]['file'] = base_url("assets/img/6.jpg");
		// $data['gallery'][2]['file'] = base_url("assets/img/8.jpg");
		// $data['gallery'][3]['file'] = base_url("assets/img/9.jpg");
		// $data['gallery'][4]['file'] = base_url("assets/img/5.jpg");
		// for ($i=0;$i<5;$i++) {
		// 	list(${"width_gambar".$i}, ${"height_gambar".$i}) = getimagesize($data['gallery'][$i]['file']);
		// 	$data['gallery'][$i]['width'] = ${"width_gambar".$i};
		// 	$data['gallery'][$i]['height'] = ${"height_gambar".$i};
		// }
		// $this->load->view('V_home',$data);
	}
    public function struktur(){
        $this->load->view('V_struktur_organisasi');
    }
    public function unit_kerja(){
        $this->load->view('V_unit_kerja');
    }
    public function visi_misi(){
        $this->load->view('V_visi_misi');
    }
    public function sejarah(){
        $this->load->view('V_sejarah');
    }
    public function fasilitas(){
        $this->load->view('V_fasilitas_lembaga');
    }
}
