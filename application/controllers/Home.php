<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->helper('counter');
		$visitor = count_visitor();
		$this->load->model("M_artikel");
		$this->load->model("M_header");
		$data['artikel_inside_school'] = $this->M_artikel->getArtikelByKategori("Inside School"," ");
		$data['artikel_hidup_guruku'] = $this->M_artikel->getArtikelByKategori("Hidup Guruku"," ");
		$data['artikel_kabar_sepekan'] = $this->M_artikel->getArtikelByKategori("Kabar Sepekan"," ");
		$data['header'] = $this->M_header->getHeader("","1");
		foreach ($data['header'] as $key => $value) {
			$artikelById = $this->M_artikel->getArtikel($data['header'][$key]['uuid_artikel'],0);
			$data['header'][$key]['nama_kategori'] = $artikelById[0]['nama'];
			$data['header'][$key]['judul_artikel'] = $artikelById[0]['judul'];
			$data['header'][$key]['sub_judul_artikel'] = $artikelById[0]['subjudul'];
		}
		$data['gallery'][0]['file'] = base_url("assets/img/7.jpg");
		$data['gallery'][1]['file'] = base_url("assets/img/6.jpg");
		$data['gallery'][2]['file'] = base_url("assets/img/8.jpg");
		$data['gallery'][3]['file'] = base_url("assets/img/9.jpg");
		$data['gallery'][4]['file'] = base_url("assets/img/5.jpg");
		for ($i=0;$i<5;$i++) {
			list(${"width_gambar".$i}, ${"height_gambar".$i}) = getimagesize($data['gallery'][$i]['file']);
			$data['gallery'][$i]['width'] = ${"width_gambar".$i};
			$data['gallery'][$i]['height'] = ${"height_gambar".$i};
		}
		$this->load->view('V_home',$data);
	}
}
