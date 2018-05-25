<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_header extends CI_Model{

    public function __construct(){
            parent::__construct();
    }
	public function insert($form = array()){
		$array_sql = array(
                'icon'          => $form['icon'],
                'uuid_artikel'  => $form['uuid_artikel'],
                'link'          => $form['link'],
                'status'        => $form['status'],
                'urutan'        => $form['urutan']
		);
		$this->db->insert('header', $array_sql);
	}
    public function updateUrutan($form = array()){
        $this->db->set('urutan',$form['urutan']);
        $this->db->where('id',$form['id']);
        $this->db->update('header');
    }

    public function getHeader($id,$status){
        $this->db->select('header.id,header.icon,header.uuid_artikel,header.link,header.status,header.urutan,artikel.judul,artikel.subjudul');
        $this->db->from('header');
        $this->db->join('artikel', 'header.uuid_artikel = artikel.uuid');
        if($id != ""){
            $this->db->where('id', $id);
        }
        if($status != ""){
            $this->db->where('status', $status);
        }
        $this->db->order_by('urutan', 'ASC');
		return $this->db->get()->result_array();
    }

    public function getUrutan(){
        $this->db->select('urutan');
        $this->db->from('header');
        $this->db->order_by('urutan', 'DESC');
        $this->db->limit(1);
        return $this->db->get()->result_array();
    }

    public function deleteHeader($id){
        $this->db->set('status',0);
        $this->db->where('id',$id);
        $this->db->update('header');
    }

}
