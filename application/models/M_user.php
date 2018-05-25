<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{

    public function __construct(){
            parent::__construct();
    }
	public function insert($form = array()){
		$array_sql = array(
	            'username'      => $form['username'],
                'password'      => $form['password'],
                'nama'          => $form['nama'],
                'foto'          => $form['foto'],
                'status'        => $form['status'],
                'aktif'         => $form['aktif']
		);
		$this->db->insert('admin', $array_sql);
	}
    public function edit($form = array()){
		$array_sql = array(
            'username'      => $form['username'],
            'password'      => $form['password'],
            'nama'          => $form['nama'],
            'foto'          => $form['foto'],
            'status'        => $form['status'],
            'aktif'         => $form['aktif']
		);
        $this->db->where('username', $form['username']);
		$this->db->update('admin', $array_sql);
	}

    public function getUser($username,$aktif){
        $this->db->select('*');
        $this->db->from('admin');
        if($username != ""){
            $this->db->where('username', $username);
        }
        if($aktif != ""){
            $this->db->where('aktif', $aktif);
        }
		return $this->db->get()->result_array();
    }
    public function deleteUser($username){
        $this->db->where('username',$username);
        $this->db->delete('admin');
    }
    public function loginUser($username,$password,$aktif){
        $this->db->select('username,password');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->where('aktif', $aktif);
        return $this->db->get('admin')->result_array();
    }
}
