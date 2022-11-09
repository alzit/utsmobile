<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_registrasi');
    }

	public function index()
	{
		$data['title'] = 'Data User';
		$data['user']=$this->M_registrasi->registrasi();
		$this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('registrasi/v_register',$data);
        $this->load->view('templates/footer');
	}
	public function tambah_data()
	{
		$data['title'] = 'Tambah Data User';
		$data['user']=$this->M_registrasi->registrasi();
		$this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('registrasi/tambah_data',$data);
        $this->load->view('templates/footer');
	}
	public function proses_tambah_data()
	{
		$this->M_registrasi->proses_tambah_data();
		$this->session->set_flashdata('pesan','
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<strong>Data Berhasil Diinput</strong>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</div>');
		redirect('Registrasi');
	}
	public function hapus_data($id_user)
	{
		$this->M_registrasi->hapus_data($id_user);
		$this->session->set_flashdata('pesan','
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<strong>Data Dihapus</strong>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</div>');
		redirect('Registrasi');
	}
	public function edit_data($id_user)
	{
		$data['title'] = 'Edit Data User';
		$data['user']=$this->M_registrasi->ambil_id_user($id_user);
		$this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('registrasi/edit_data',$data);
        $this->load->view('templates/footer');
	}
	public function proses_edit_data()
	{
		$this->M_registrasi->proses_edit_data();
		$this->session->set_flashdata('pesan','
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<strong>Data Berhasil Diubah</strong>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</div>');
		redirect('Registrasi');
	}
}
