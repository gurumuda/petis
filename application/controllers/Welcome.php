<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->helper('deteksi_helper');

		$this->load->library('form_validation');
		$this->load->helper('time_helper');


		$this->load->model('adminModel', 'am');
		$data['sekolah'] = $this->am->getsekolah();
		$data['calon'] = $this->am->getkandidat()->result();

		$this->form_validation->set_rules('kode', 'Kode', 'trim|required');


		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('welcome_message', $data);
		} else {
			# code...
			$this->_pilih();
		}
	}

	private function _pilih()
	{
		$pilihan = $this->input->post('pil', true);
		$kode = $this->input->post('kode', true);
		$data = $this->db->get_where('t_pemilih', ['kunci' => $kode]);

		if ($data->num_rows() > 0) {
			# jika kode yang dimasukkan ada

			if ($data->row()->status == '0') {
				# jika kode yang dimasukkan sudah dipakai
				$object = [
					'status' => '1'
				];
				$this->db->where('kunci', $kode);
				$this->db->update('t_pemilih', $object); // ubah status kode sudah digunakan

				$d = ['pilihan' => $pilihan];
				$this->db->insert('t_result', $d); // input data pilihan

				$f = [
					'time' => time(),
					'user' => base64_decode($data->row()->nama),
					'action' => 'Memilih'
				];
				$this->db->insert('t_activity', $f);


				$this->session->set_flashdata('pesan', 'Proses pemilihan berhasil dilakukan');

				redirect('', 'refresh');
			} else {
				# jika kode belum dipakai
				$this->session->set_flashdata('pesan', 'Proses pemilihan gagal, kode sudah digunakan');

				redirect('', 'refresh');
			}
		} else {
			$this->session->set_flashdata('pesan', 'Proses pemilihan gagal, kode yang dimasukkan salah');

			redirect('', 'refresh');
		}
	}

	function visimisi()
	{
		$this->load->model('adminModel', 'am');
		$data['sekolah'] = $this->am->getsekolah();
		$data['calon'] = $this->am->getkandidat()->result();

		$this->load->view('visimisi', $data);
	}
}
