<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->library('form_validation');
		$this->load->model('query');
	}

	public function index()
	{
		$data['title'] = 'Admin Dashboard';
		$data['tampil'] = $this->db->get('penyewaan')->num_rows();
		$query =  $this->db->query("SELECT COUNT(id) as count,MONTHNAME(created_at) as month_name FROM penyewaan WHERE YEAR(created_at) = '" . date('Y') . "'
		GROUP BY YEAR(created_at),MONTH(created_at)");
		$record = $query->result();
		$data = [];
   
		foreach($record as $row) {
			  $data['label'][] = $row->month_name;
			  $data['data'][] = (int) $row->count;
		}
		$data['chart_data'] = json_encode($data);   
		$this->load->view('layout/header', $data);
		$this->load->view('index');
		$this->load->view('layout/footer');
	}

    public function konfirmasi(){
        $data['title'] = 'Konfirmasi Sewa';
		$data['penyewaan'] = $this->db->get_where('penyewaan', ['status' => 'pending'])->result();

        $this->load->view('layout/header', $data);
        $this->load->view('pegawai/konfirmasi');
        $this->load->view('layout/footer');
    }

    public function konfirmasisewa($id){
		$data = [
			'status' => 'proses'
		];
		$data2 = [
			'tipe' => "Berhasil Konfirmasi Sewa dengan id : $id"
		];
		$this->query->tambah($data2, 'log');
		$this->query->update($data, 'penyewaan', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Berhasil Konfirmasi Sewa !
	   </div>');
	  redirect('/pegawai/konfirmasi');
	}

    public function historisewa(){
        $data['title'] = 'Histori Sewa';
		$data['histori'] = $this->db->get('penyewaan')->result();
		$this->load->view('layout/header', $data);
		$this->load->view('pegawai/histori');
		$this->load->view('layout/footer');
    }

    public function konfirmasiselesai($id){
        $data = [
			'status' => 'berhasil'
		];
		$data2 = [
			'tipe' => "Berhasil Konfirmasi Selesai Sewa dengan id : $id"
		];
		$this->query->tambah($data2, 'log');
		$this->query->update($data, 'penyewaan', $id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
		Berhasil Konfirmasi Selesai Sewa !
	   </div>');
	  redirect('/pegawai/historisewa');
    }
}
