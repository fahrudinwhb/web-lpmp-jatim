<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index($param1 = null,$param2 = null){
		$this->load->model('M_kategori');
		$this->load->model('M_artikel');
		$param_edit = str_replace("-"," ",$param1);
		$kategori_artikel = $this->M_kategori->getKategoriByNama($param_edit);
		if($kategori_artikel == null){
			show_404();
		}
		else{
			if(!$this->uri->segment(3)){
				$artikel_by_kategori = $this->M_artikel->getArtikelByKategori($param_edit," ");
				$data['featured_judul'] = $artikel_by_kategori[0]['judul'];
				$data['featured_judul_link'] = str_replace(" ","-",$artikel_by_kategori[0]['judul']);
				$data['featured_sub_judul'] = $artikel_by_kategori[0]['subjudul'];
				$data['featured_icon'] = $artikel_by_kategori[0]['icon'];
				$data['featured_isi'] = strip_tags($artikel_by_kategori[0]['isi']);
				if(strlen($data['featured_isi']) > 300) {
					$data['featured_isi'] = substr($data['featured_isi'], 0,300);
					$data['featured_isi'] = $data['featured_isi'].'<br><a href="'.site_url($this->uri->uri_string())."/".$data['featured_judul_link'].'">selengkapnya</a>';
				}
				$data['artikel'] = $artikel_by_kategori;
				foreach ($artikel_by_kategori as $key => $value){
					$data['artikel'][$key]['judul_link'] = str_replace(" ","-",$data['artikel'][$key]['judul']);
					$data['artikel'][$key]['isi'] = strip_tags($data['artikel'][$key]['isi']);
                    if (strlen($data['artikel'][$key]['isi']) > 300) {
                        $data['artikel'][$key]['isi'] = substr($data['artikel'][$key]['isi'], 0,300);
                        $data['artikel'][$key]['isi'] = $data['artikel'][$key]['isi'].'<br><a href="'.site_url($this->uri->uri_string())."/".$data['artikel'][$key]['judul_link'].'">selengkapnya</a>';
                    }
				}
				$this->load->view('V_kategori_artikel',$data);
			}
			else{
				$param_edit2 = substr(preg_replace('/[^a-zA-Z0-9]/'," ",$param2),0,6);
				$data['artikel'] = $this->M_artikel->getArtikelByJudul($param_edit2);
				$data['artikel_by_kategori'] = $this->M_artikel->getArtikelByKategori($param_edit," ");
				if($data['artikel'] == null){
					echo var_dump($data['artikel']);
					// show_404();
				}
				else{
					$this->load->view('V_artikel_detail',$data);
				}
			}
		}
	}
}
