<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_artikel extends CI_Model{

    public function __construct(){
            parent::__construct();
    }
	public function insert($form = array()){
		$array_sql = array(
	            'uuid'      => $form['uuid'],
                'datetime'  => $form['datetime'],
                'judul'     => $form['judul'],
                'subjudul'  => $form['subjudul'],
                'isi'       => $form['isi'],
                'kategori'  => $form['kategori'],
                'icon'      => $form['icon'],
                'publish'   => $form['publish'],
                'hapus'     => $form['hapus'],
                'editor'    => $form['editor']
		);
		$this->db->insert('artikel', $array_sql);
	}
    public function edit($form = array()){
		$array_sql = array(
                'datetime'  => $form['datetime'],
                'judul'     => $form['judul'],
                'subjudul'  => $form['subjudul'],
                'isi'       => $form['isi'],
                'kategori'  => $form['kategori'],
                'icon'      => $form['icon'],
                'publish'   => $form['publish'],
                'editor'    => $form['editor']
		);
        $this->db->where('uuid', $form['uuid']);
		$this->db->update('artikel', $array_sql);
	}

    public function getArtikel($uuid,$hapus){
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'artikel.kategori = kategori.id');
        if($uuid != ""){
            $this->db->where('uuid', $uuid);
        }
        if($hapus != ""){
            $this->db->where('hapus', $hapus);
        }
        $this->db->order_by('datetime', 'DESC');
		return $this->db->get()->result_array();
    }
    public function getArtikelByJudul($judul){
        $judul = $judul;
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->like('judul',$judul,'after');
		return $this->db->get()->result_array();
    }
    public function getArtikelByKategori($kategori,$limit){
        $this->db->select('*');
        $this->db->from('artikel');
        $this->db->join('kategori', 'artikel.kategori = kategori.id');
        $this->db->where('kategori.nama', $kategori);
        $this->db->where('hapus',0);
        if($limit !== " "){
            $this->db->limit($limit);    
        }
		return $this->db->get()->result_array();
    }
    public function deleteArtikel($id_artikel){
        $this->db->set('hapus',1);
        $this->db->where('uuid',$id_artikel);
        $this->db->update('artikel');
    }

}
