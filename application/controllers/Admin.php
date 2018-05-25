<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index(){
        if($this->session->userdata('admin')){
			$this->load->helper('counter');
			$data['jumlah_user'] = $this->db->count_all_results('admin');
			$data['jumlah_artikel'] = $this->db->count_all_results('artikel');
			$data['jumlah_header'] = $this->db->count_all_results('header');
			$data['jumlah_kategori'] = $this->db->count_all_results('kategori');
			$data['kunjungan'] = get_visitor();
			$this->load->view('admin/V_admin',$data);
        }
        else{
			redirect('login');
        }
	}
	public function artikel(){
		if($this->session->userdata('admin')){
			if(!$this->uri->segment(3)){
				$this->load->model('M_artikel');
				$this->load->model('M_kategori');
				$data['artikel'] = $this->M_artikel->getArtikel("","0");
				$this->load->view('admin/V_admin_artikel_list',$data);
			}
			elseif($this->uri->segment(3) == "buat"){
				$this->load->view('admin/V_admin_artikel_buat');
			}
			elseif($this->uri->segment(3) == "edit" and $this->uri->segment(4)){
				$this->load->model('M_artikel');
				$this->load->model('M_kategori');
				$data['kategori'] = $this->M_kategori->getKategori("");
				$data['artikel'] = $this->M_artikel->getArtikel($this->uri->segment(4),"0");
				$this->load->view('admin/V_admin_artikel_edit',$data);
			}
			else{
				show_404();
			}
		}
		else{
			redirect('login');
		}
	}
	public function artikel_submit(){
		$this->load->model("M_artikel");
		date_default_timezone_set("Asia/Bangkok");
		$session = $this->session->userdata("admin");
		$editor = $session[0]['username'];
		// $icon_location = "assets/img/artikel/";
		// $icon_file = $icon_location.basename($_FILES["icon"]["name"]);
		// move_uploaded_file($_FILES["icon"]["tmp_name"], $icon_file);
		$uuid = substr(md5(mt_rand(10,100)), 0, 7);
		$datetime = date("d-m-Y H:i:s");
		$judul = $this->input->post("judul");
		$subjudul = $this->input->post("subjudul");
		$isi = $this->input->post("shadowArtikel");
		$kategori = $this->input->post("kategori");
		$publish = $this->input->post("publish");
		$icon = substr($this->input->post("icon"),32);
		// $icon = $icon_file;
		$hapus = 0;
		print_r($_POST);
		$this->M_artikel->insert(array(
			'uuid'      => substr(md5(mt_rand(10,100)), 0, 7),
			'datetime'	=> date("Y-m-d H:i:s"),
			'judul'     => $judul,
			'subjudul'  => $subjudul,
			'isi'       => $isi,
			'kategori'  => $kategori,
			'icon'      => $icon,
			'publish'   => $publish,
			'hapus'     => $hapus,
			'editor'    => $editor
		));
	}
	public function artikel_edit(){
		$this->load->model("M_artikel");
		date_default_timezone_set("Asia/Bangkok");
		if((isset($_FILES["icon"]["size"]) && ($_FILES["icon"]["size"] > 0))){
			$icon_location = "assets/img/artikel/";
			$icon_file = $icon_location.basename($_FILES["icon"]["name"]);
			move_uploaded_file($_FILES["icon"]["tmp_name"], $icon_file);
			$icon = $icon_file;
		}
		else{
			$icon = $this->input->post("iconShadow");
		}
		$session = $this->session->userdata("admin");
		$editor = $session[0]['username'];
		$datetime = date("Y-m-d H:i:s");
		$uuid = $this->input->post("uuidShadow");
		$judul = $this->input->post("judul");
		$subjudul = $this->input->post("subjudul");
		$isi = $this->input->post("shadowArtikel");
		$kategori = $this->input->post("kategori");
		$publish = $this->input->post("publish");
		$this->M_artikel->edit(array(
			'uuid'		=> $uuid,
			'datetime'	=> $datetime,
			'judul'     => $judul,
			'subjudul'  => $subjudul,
			'isi'       => $isi,
			'kategori'  => $kategori,
			'icon'      => $icon,
			'publish'   => $publish,
			'editor'    => $editor
		));
	}
	public function artikel_delete(){
		$this->load->model("M_artikel");
		$id_artikel = $this->input->post('id_artikel');
		$this->M_artikel->deleteArtikel($id_artikel);
	}
	public function header(){
		if($this->session->userdata('admin')){
			$this->load->model("M_artikel");
			$this->load->model("M_header");
			$data['artikel'] = $this->M_artikel->getArtikel("","0");
			$data['header'] = $this->M_header->getHeader("","1");
			$this->load->view('admin/V_admin_control_header',$data);
		}
		else{
			redirect('login');
		}
	}
	public function header_submit(){
		$this->load->model("M_header");
		$queryUrutan = $this->M_header->getUrutan();
		$uuid_artikel = $this->input->post("artikel");
		$link = 1;
		$status = 1;
		$urutan = $queryUrutan[0]['urutan']+1;
		$icon_location = "assets/img/header/";
		$icon_file = $icon_location.basename($_FILES["icon"]["name"]);
		move_uploaded_file($_FILES["icon"]["tmp_name"], $icon_file);
		$icon = $icon_file;
		$this->M_header->insert(array(
			'icon'	=> $icon,
			'uuid_artikel'     => $uuid_artikel,
			'link'  => $link,
			'status'       => $status,
			'urutan'  => $urutan
		));
		echo "berhasil";
	}
	public function header_urutan(){
		$this->load->model("M_header");
		$urutan = json_decode($this->input->post("urutan"));
		foreach ($urutan as $key => $value){
			$this->M_header->updateUrutan(array(
				'urutan' => $key,
				'id' => $value
			));
		}
		// echo var_dump($urutan);
	}
	public function header_delete(){
		$this->load->model("M_header");
		$id_header = $this->input->post('id_header');
		$this->M_header->deleteHeader($id_header);
	}
	public function user(){
		if($this->session->userdata('admin')){
			$this->load->model("M_user");
			$data['user'] = $this->M_user->getUser("","");
			if($this->uri->segment(3) == ""){
				$this->load->view('admin/V_admin_user',$data);
			}
			elseif($this->uri->segment(3) == "tambah"){
				$this->load->view('admin/V_admin_user_tambah');
			}
			elseif($this->uri->segment(3) == "edit" and $this->uri->segment(4) or $this->uri->segment(3) == "profile" and $this->uri->segment(4)){
				$username = $this->uri->segment(4);
				$data['user'] = $this->M_user->getUser($username,"");
				$this->load->view('admin/V_admin_user_edit',$data);
			}
		}
		else{
			redirect('login');
		}
	}
	public function user_submit(){
		$this->load->model("M_user");
		$foto_location = "assets/img/admin/";
		$foto_file = $foto_location.basename($_FILES["foto"]["name"]);
		move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_file);
		$foto = $foto_file;
		$username = $this->input->post("username");
		$nama = $this->input->post("nama");
		$password = $this->input->post("password");
		$status = $this->input->post("status");
		$aktif = $this->input->post("aktif");
		$this->M_user->insert(array(
			'username'		=> $username,
			'nama'			=> $nama,
			'password'     	=> $password,
			'foto'  		=> $foto,
			'status'		=> $status,
			'aktif'			=> $aktif
		));
	}
	public function user_edit(){
		$this->load->model("M_user");
		if((isset($_FILES["foto"]["size"]) && ($_FILES["foto"]["size"] > 0))){
			$foto_location = "assets/img/admin/";
			$foto_file = $foto_location.basename($_FILES["foto"]["name"]);
			move_uploaded_file($_FILES["foto"]["tmp_name"], $foto_file);
			$foto = $foto_file;
		}
		else{
			$foto = $this->input->post("fotoShadow");
		}
		$username = $this->input->post("username");
		$nama = $this->input->post("nama");
		$password = $this->input->post("password");
		$status = $this->input->post("status");
		$aktif = $this->input->post("aktif");
		$this->M_user->edit(array(
			'username'		=> $username,
			'nama'			=> $nama,
			'password'     	=> $password,
			'foto'  		=> $foto,
			'status'		=> $status,
			'aktif'			=> $aktif
		));
	}
	public function user_delete(){
		$this->load->model("M_user");
		$username = $this->input->post('username');
		$this->M_user->deleteUser($username);
	}
	public function gambar(){
		$icon_location = "assets/img/artikel/temp/";
		$icon_file = $icon_location.basename($_FILES["icon"]["name"]);
		if(move_uploaded_file($_FILES["icon"]["tmp_name"], $icon_file)){
			echo $icon_file;
		}
		else {
			print_r($_FILES);
		}
	}
	public function gambarCrop(){
		$this->load->helper('path');
		$filename = $_POST['filename'];
		$img = $_POST['pngimageData'];
		$lokasi = "assets/img/artikel/temp/";
		$lokasiBaru = "assets/img/artikel/";
		$img = str_replace('data:image/jpeg;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$file = $lokasi."Crop-".$filename;
		$fileBaru = $lokasiBaru."Crop-".$filename;
		$success = file_put_contents($file, $data);
		$lokasi_hasil_crop = base_url().$file;
		copy($file,$fileBaru);
		if($success){
			echo $lokasi_hasil_crop;
		}
		else{
			echo "Gagal menyimpan hasil crop";
		}
	}
}
