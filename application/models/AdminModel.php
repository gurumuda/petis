<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminModel extends CI_Model
{

    function getSekolah()
    {
        $this->db->where('xid', '1');
        return $this->db->get('t_school')->row();
    }

    function ubahSekolah($data)
    {
        $this->db->where('xid', '1');
        $this->db->update('t_school', $data);
    }

    function ubahkegiatan($data)
    {
        $this->db->where('xid', '1');
        $this->db->update('t_school', $data);
    }

    function uploadlogo()
    {

        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '1000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('logo')) {
            return $this->upload->display_errors();
        } else {
            $logoLama = $this->db->get_where('t_school', ['xid' => '1'])->row()->logo;
            unlink('./assets/images/' . $logoLama);
            $object = ['logo' => $this->upload->data('file_name')];
            $this->db->where('xid', '1');
            $this->db->update('t_school', $object);
            return "success";
        }
    }

    function getkandidat()
    {
        $this->db->order_by('nomorUrut', 'asc');
        return $this->db->get('t_kandidat');
    }

    function tambahkandidat()
    {

        $config['upload_path'] = './assets/images/calon/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size']  = '1000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            return $this->upload->display_errors();
        } else {

            $data = [
                'nomorUrut' => $this->input->post('nomorUrut', true),
                'nama' => $this->input->post('namaCalon', true),
                'wakil' => $this->input->post('namaWakil', true),
                'kelas' => $this->input->post('kelas', true),
                'visi' => $this->input->post('visi', true),
                'misi' => $this->input->post('misi', true),
                'photo' => $this->upload->data('file_name')
            ];
            $simpandata = $this->db->insert('t_kandidat', $data);

            return 'success';
        }
    }

    function ubahkandidat()
    {

        $config['upload_path'] = './assets/images/calon/';
        $config['allowed_types'] = 'jpg|png';
        $config['max_size']  = '1000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('foto')) {
            return $this->upload->display_errors();
        } else {

            $data = [
                'nomorUrut' => $this->input->post('nomorUrut', true),
                'nama' => $this->input->post('namaCalon', true),
                'wakil' => $this->input->post('namaWakil', true),
                'kelas' => $this->input->post('kelas', true),
                'visi' => $this->input->post('visi', true),
                'misi' => $this->input->post('misi', true),
                'photo' => $this->upload->data('file_name')
            ];
            $this->db->where('xid', $this->input->post('id'));
            $this->db->update('t_kandidat', $data);


            return 'success';
        }
    }

    function getpemilih($a, $b)
    {

        return $this->db->get('t_pemilih', $a, $b);
    }

    function getjumlahpemilih()
    {
        return $this->db->get('t_pemilih')->num_rows();
    }

    function importpemilih()
    {

        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'xlsx|xls';
        $config['max_size']    = '10048';
        $config['overwrite'] = true;
        $config['file_name'] = "data_import";

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('excel')) {
            return $this->upload->display_errors();
        } else {
            $data = array('upload_data' => $this->upload->data());
            return "success";
        }
    }
}

    /* End of file AdminModel.php */;
