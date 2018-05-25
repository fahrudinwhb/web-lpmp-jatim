<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model{

    public function __construct(){
            parent::__construct();
    }
	public function insert($form = array()){
		$array_sql = array(
	            'id'        => $form['id'],
                'nama'      => $form['nama'],
                'keterangan'=> $form['keterangan'],
		);
		$this->db->insert('kategori', $array_sql);
	}

    public function getKategori($id){
        $this->db->select('*');
        if($id != ""){
            $this->db->where('id', $id);
        }
		return $this->db->get("kategori")->result_array();
    }
    public function getKategoriByNama($nama){
        $this->db->select('*');
        $this->db->where('nama', $nama);
        return $this->db->get("kategori")->result_array();
    }
}
