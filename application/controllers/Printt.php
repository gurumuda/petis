<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Printt extends CI_Controller
{

    public function index()
    {
        $this->db->order_by('kelas', 'asc');
        $this->db->order_by('nama', 'asc');
        $data['pemilih'] = $this->db->get('t_pemilih')->result();

        $this->load->view('admin/kartu', $data);
    }
}

/* End of file Printt.php */
