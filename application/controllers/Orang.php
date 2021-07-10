<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orang extends CI_Controller {

	public function index()
	{
        
		$data['judul'] = 'Daftar Orang';

        $this->load->model('Orang_model', 'orang');

        // load library pagination
        $this->load->library('pagination');

        //ambil data keyword
        if($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        //config
        $this->db->like('nama', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('orang');
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        // var_dump($config['total_rows']); die;
        $config['per_page'] = 10;

        // initialize
        $this->pagination->initialize($config);

        
        $data['start'] = $this->uri->segment(3);
        $data['orang'] = $this->orang->getOrang($config['per_page'], $data['start'], $data['keyword']);

		$this->load->view('templates/header', $data);
		$this->load->view('orang/index', $data);
		$this->load->view('templates/footer');
	}

}
