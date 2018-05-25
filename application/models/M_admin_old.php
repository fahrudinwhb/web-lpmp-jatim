<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model{

    private $_table		        = 'admin';
	private $_username          = 'username';
	private $_password          = 'password';
    private $_nama              = 'nama';
    private $_foto              = 'foto';

    public function __construct(){
            parent::__construct();
    }
	public function insert($form = array()){
		$array_sql = array(
	            $this->_username        => $form['username'],
	            $this->_password        => $form['password'],
                $this->_nama            => $form['nama'],
                $this->_foto            => $form['foto']
		);
		$this->db->insert($this->_table, $array_sql);
	}

    public function getData($username){
        $this->db->select('*');
        $this->db->where('username', $username);
		return $this->db->get($this->_table)->result_array();
    }

    public function getUsernamePass($username,$password){
        $this->db->select('username,password');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get($this->_table)->result_array();
    }

}
