<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('auth_helper');
        $this->load->helper('time_helper');
        $this->load->library('form_validation');
        $this->load->model('adminModel', 'am');
        $this->title = 'Admin Petis';

        $s = $this->db->get_where('t_school', ['xid' => '1'])->row();

        if ((($s->tglPilihan . ' ' . $s->jamPilihan) < date('Y-m-d H:i:s') && ($s->tglPilihans . ' ' . $s->jamPilihans) > date('Y-m-d H:i:s'))) {
            $this->st = '1';
        } else {
            $this->st = '0';
        }
    }


    public function index()
    {
        isadmin();
        $data['title'] = $this->title;
        $data['sekolah'] = $this->am->getsekolah();
        $data['jumlahCalon'] = $this->am->getkandidat()->num_rows();
        $data['jumlahpemilih'] = $this->am->getjumlahpemilih();
        $this->load->view('admin/meta', $data);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/script');
    }

    public function setsekolah()
    {
        isadmin();
        $data['title'] = $this->title;
        $data['sekolah'] = $this->am->getsekolah();
        $this->load->view('admin/meta', $data);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/user');
        $this->load->view('admin/script');
    }

    public function user()
    {
        isadmin();
        $data['title'] = $this->title;
        $data['sekolah'] = $this->am->getsekolah();
        $data['user'] = $this->db->get_where('t_auth', ['xid' => $this->session->userdata('boss')])->row();

        $this->load->view('admin/meta', $data);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/setuser');
        $this->load->view('admin/script');
    }


    public function ubahsekolah()
    {
        isadmin();

        $this->form_validation->set_rules('namaSekolah', 'Nama Sekolah', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('tlp', 'Nomor Tlp', 'trim|required');
        $this->form_validation->set_rules('gov', 'Pemerintah', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->setsekolah();
        } else {
            $data = [
                'nmSekolah' => $this->input->post('namaSekolah', true),
                'almt' => $this->input->post('alamat', true),
                'tlp' => $this->input->post('tlp', true),
                'gov' => $this->input->post('gov', true),
            ];
            $update = $this->am->ubahsekolah($data);

            $this->session->set_flashdata('pesan', 'Data berhasil diubah');

            redirect('admin/setsekolah', 'refresh');
        }
    }

    public function ubahkegiatan()
    {
        isadmin();

        if ($this->input->post('tgl') > $this->input->post('tgls')) {
            # code...
            $this->session->set_flashdata('pesan', 'Data gagal diubah');
            redirect('admin/setsekolah', 'refresh');
        } else {
            # code...
            if ($this->input->post('jam') != '') {
                # code...
                $data = [
                    'status' => $this->input->post('status'),
                    'tglPilihan' => $this->input->post('tgl'),
                    'tglPilihans' => $this->input->post('tgls'),
                    'jamPilihan' => $this->input->post('jam'),
                ];
            } elseif ($this->input->post('jams') != '') {
                $data = [
                    'status' => $this->input->post('status'),
                    'tglPilihan' => $this->input->post('tgl'),
                    'tglPilihans' => $this->input->post('tgls'),
                    'jamPilihans' => $this->input->post('jams'),
                ];
            } elseif ($this->input->post('jams') != '' && $this->input->post('jam') != '') {
                $data = [
                    'status' => $this->input->post('status'),
                    'tglPilihan' => $this->input->post('tgl'),
                    'tglPilihans' => $this->input->post('tgls'),
                    'jamPilihan' => $this->input->post('jam'),
                    'jamPilihans' => $this->input->post('jams'),
                ];
            } else {
                # code...
                $data = [
                    'status' => $this->input->post('status'),
                    'tglPilihan' => $this->input->post('tgl', true),
                    'tglPilihans' => $this->input->post('tgls', true),
                ];
            }
            $update = $this->am->ubahkegiatan($data);

            $this->session->set_flashdata('pesan', 'Data berhasil diubah');

            redirect('admin/setsekolah', 'refresh');
        }
    }

    public function uploadlogo()
    {
        isadmin();
        $upload = $this->am->uploadlogo();
        if ($upload == 'success') {
            # code...
            $this->session->set_flashdata('pesan', 'Logo berhasil diubah');
            redirect('admin/setsekolah', 'refresh');
        } else {
            # code...
            $this->session->set_flashdata('pesan', $this->upload->display_errors());
            redirect('admin/setsekolah', 'refresh');
        }
    }

    public function aturcalon()
    {
        isadmin();
        $data['title'] = $this->title;
        $data['sekolah'] = $this->am->getsekolah();
        $data['calon'] = $this->am->getkandidat()->result();
        $data['st'] = $this->st;

        $this->load->view('admin/meta', $data);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/calon1');
        $this->load->view('admin/script');
    }

    public function tambahkandidat()
    {
        isadmin();
        $simpanData = $this->am->tambahkandidat();
        $this->session->set_flashdata('pesan', 'Data berhasil ditambah');

        redirect('admin/aturcalon', 'refresh');
    }

    public function ubahkandidat()
    {
        isadmin();
        $simpanData = $this->am->ubahkandidat();
        $this->session->set_flashdata('pesan', 'Data berhasil diubah');

        redirect('admin/aturcalon', 'refresh');
    }

    public function hapuskandidat($id)
    {
        isadmin();
        $this->db->where('xid', $id);
        $this->db->delete('t_kandidat');

        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');

        redirect('admin/aturcalon', 'refresh');
    }


    public function pemilih()
    {
        isadmin();
        $data['title'] = $this->title;
        $data['sekolah'] = $this->am->getsekolah();
        $this->load->library('pagination');

        $config['base_url'] = base_url('admin/pemilih/');
        $config['total_rows'] = $this->db->get('t_pemilih')->num_rows();;
        $config['per_page'] = 10;
        $config['num_links'] = 2;
        $config['full_tag_open'] = '<div class="demo"><ul class="pagination pg-primary">';
        $config['full_tag_close'] = '</ul></div>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $this->pagination->initialize($config);

        $data['pemilih'] = $this->am->getpemilih($config['per_page'], $this->uri->segment(3))->result();

        // $data['calon'] = $this->am->getpemilih()->result();

        $this->load->view('admin/meta', $data);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/pemilih');
        $this->load->view('admin/script');
    }

    public function hapuspemilih()
    {
        $a = $this->uri->segment(3);
        $b = $this->uri->segment(4);

        $this->db->where('xid', $a);
        $this->db->delete('t_pemilih');

        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('admin/pemilih/' . $b, 'refresh');
    }

    public function hapussemuapemilih()
    {
        $this->db->truncate('t_pemilih');
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus');
        redirect('admin/pemilih', 'refresh');
    }

    function importpemilih()
    {
        isadmin();
        $import = $this->am->importpemilih();

        if ($import == 'success') {
            include APPPATH . 'third_party/PHPExcel/PHPExcel.php';
            $excelreader = new PHPExcel_Reader_Excel2007();
            $loadexcel   = $excelreader->load('./assets/images/data_import.xlsx');
            $sheet       = $loadexcel->getActiveSheet()->toArray(null, true, true, true);
            $data        = array();
            $numrow      = 1;
            $sukses      = '';
            foreach ($sheet as $row) {

                if ($numrow > 1) {
                    $dataku = [
                        'nisn'    => base64_encode($row['B']),
                        'nama'     => base64_encode($row['C']),
                        'kelas'     => base64_encode($row['D']),
                        'kunci'     => $row['E'],
                        'status'     => '0',
                    ];
                    $nisn = base64_encode($row['B']);
                    $kunci = base64_encode($row['E']);
                    $this->db->where('nisn', $nisn);
                    $this->db->or_where('kunci', $kunci);
                    $ada = $this->db->get('t_pemilih')->row();

                    if ($ada) {
                        $this->session->set_flashdata('pesan', 'Data tidak terupload seluruhnya, ada duplikasi data pada kolom NISN (' . $nisn . ') atau kolom kunci (' . $kunci . ')');
                        redirect('admin/pemilih', 'refresh');
                    } elseif ($row['B'] == '' || $row['E'] == '') {
                        $this->session->set_flashdata('pesan', 'Data tidak terupload seluruhnya, NISN dan kunci tidak boleh kosong');

                        redirect('admin/pemilih', 'refresh');
                    } else {

                        $sukses .= $this->db->insert('t_pemilih', $dataku);
                    }
                }
                $numrow++;
            }

            if ($sukses != '') {
                unlink('./assets/images/data_import.xlsx');
                $this->session->set_flashdata('pesan', 'Data berhasil diimport');
                redirect('admin/pemilih', 'refresh');
            } else {
                $this->session->set_flashdata('pesan', 'Data gagal diimport');
                redirect('admin/pemilih', 'refresh');
            }
        } else {
            $this->session->set_flashdata('pesan', $this->upload->display_errors());
            redirect('admin/pemilih', 'refresh');
        }
    }

    public function ubahstatus($id)
    {
        isadmin();

        $object = ['status' => '0'];
        $this->db->where('xid', $id);
        $this->db->update('t_pemilih', $object);
        $this->session->set_flashdata('pesan', 'Status diubah');
        redirect('admin/pemilih', 'refresh');
    }

    public function swit()
    {
        isadmin();
        $data = ['on' => $this->input->post('on')];
        $this->db->where('xid', '1');
        $this->db->update('t_school', $data);
        $this->session->set_flashdata('pesan', 'Status diubah');
        redirect('admin/aturcalon', 'refresh');
    }

    function sementara()
    {
        isadmin();
        $data['title'] = $this->title;
        $data['sekolah'] = $this->am->getsekolah();
        $data['calon'] = $this->am->getkandidat()->result();

        $this->load->view('admin/meta', $data);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/sementara');
        $this->load->view('admin/script');
    }

    function reset()
    {
        $reset = $this->input->post('reset');
        if ($reset == 'RESET') {
            # code...
            $this->db->update('t_pemilih', ['status' => '0']);

            $this->db->where('action', 'Memilih');
            $this->db->delete('t_activity');

            $this->db->truncate('t_result');
            $this->session->set_flashdata('pesan', 'Data berhasil direset');
            redirect('admin/setsekolah', 'refresh');
        } else {
            # code...
            $this->session->set_flashdata('pesan', 'Data gagal direset');
            redirect('admin/setsekolah', 'refresh');
        }
    }

    public function hasil()
    {
        isadmin();
        $data['title'] = $this->title;
        $data['sekolah'] = $this->am->getsekolah();
        $data['calon'] = $this->am->getkandidat()->result();
        if (($data['sekolah']->tglPilihans . ' ' . $data['sekolah']->jamPilihans) > date('Y-m-d H:i:s')) {

            redirect('admin', 'refresh');
        }
        sleep(3);
        $this->load->view('admin/meta', $data);
        $this->load->view('admin/header');
        $this->load->view('admin/sidebar');
        $this->load->view('admin/hasil');
        $this->load->view('admin/script');
    }

    function buathasil()
    {
        unlink('./assets/hasil/hasil-pemilihan.pdf');
        $this->load->helper('time_helper');

        $sekolah = $this->db->get_where('t_school', ['xid' => '1'])->row_array();
        $kandidat = $this->db->get('t_kandidat');
        $pemilih = $this->db->get('t_pemilih');
        $milih = $this->db->get_where('t_pemilih', ['status' => '1'])->num_rows();

        $daftar_hari = array(
            'Sunday' => 'Minggu',
            'Monday' => 'Senin',
            'Tuesday' => 'Selasa',
            'Wednesday' => 'Rabu',
            'Thursday' => 'Kamis',
            'Friday' => 'Jumat',
            'Saturday' => 'Sabtu'
        );
        $date = $sekolah['tglPilihan'];
        $namahari = date('l', strtotime($date));

        // echo $daftar_hari[$namahari];


        $hasil = $this->db->query('SELECT nomorUrut, nama, wakil, COUNT(pilihan) AS "jumlahPemilih"
                                    FROM t_kandidat
                                    LEFT JOIN t_result
                                    ON t_result.pilihan = t_kandidat.nomorUrut
                                    GROUP BY nomorUrut ')->result();


        require(APPPATH . '/libraries/fpdf/fpdf.php');

        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->SetMargins(10, 5, 10);
        $pdf->Image('./assets/images/' . $sekolah['logo'], 10, 10, 20);
        $pdf->Cell(10, 0, '', 0);
        $pdf->SetFont('Times', 'B', 16);
        $pdf->Cell(180, 8, strtoupper($sekolah['gov']), 0, 0, 'C');
        $pdf->Ln(6);
        $pdf->SetFont('Times', 'B', 14);
        $pdf->Cell(10, 0, '', 0);
        $pdf->Cell(180, 7, 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 0, 0, 'C');
        $pdf->Ln(5);
        $pdf->Cell(10, 0, '', 0);
        $pdf->Cell(180, 7, strtoupper($sekolah['nmSekolah']), 0, 0, 'C');
        $pdf->Ln(5);
        $pdf->Cell(10, 0, '', 0);
        $pdf->SetFont('Times', '', 10);
        $pdf->Cell(180, 6, $sekolah['almt'] . ' Tlp. ' . $sekolah['tlp'], 0, 0, 'C');
        $pdf->Ln(7);
        $pdf->Cell(190, 0, '', 1);
        $pdf->Ln(0.5);
        $pdf->Cell(190, 0, '', 1);

        $pdf->Ln(12);
        $pdf->SetFont('Times', 'B', 13);
        $pdf->Cell(190, 0, 'HASIL PERHITUNGAN SUARA', 0, 0, 'C');
        $pdf->Ln(5);
        $pdf->Cell(190, 0, 'PEMILIHAN KETUA OSIS', 0, 0, 'C');
        $pdf->Ln(5);
        $pdf->Cell(190, 0, 'MASA BAKTI 2021/2022', 0, 0, 'C');

        $pdf->Ln(15);
        $pdf->SetFont('Times', '', 12);
        $pdf->MultiCell(190, 5, 'Panitia pelaksana pemilihan ketua osis ' . $sekolah['nmSekolah'] . ' telah melaksanakan kegiatan pemilihan ketua osis pada :', 0, 'J');
        $pdf->Ln(2);
        $pdf->Cell(10, 0, '', 0);
        $pdf->Cell(80, 6, 'Hari', 0, 0, 'J');
        $pdf->Cell(5, 6, ':', 0, 0, 'J');
        $pdf->Cell(85, 6, $daftar_hari[$namahari], 0, 0, 'J');

        $pdf->Ln(5);
        $pdf->Cell(10, 0, '', 0);
        $pdf->Cell(80, 6, 'Tanggal', 0, 0, 'J');
        $pdf->Cell(5, 6, ':', 0, 0, 'J');
        $pdf->Cell(85, 6, tgl($sekolah['tglPilihan']), 0, 0, 'J');

        $pdf->Ln(5);
        $pdf->Cell(10, 0, '', 0);
        $pdf->Cell(80, 6, 'Jumlah Kandidat', 0, 0, 'J');
        $pdf->Cell(5, 6, ':', 0, 0, 'J');
        $pdf->Cell(85, 6, $kandidat->num_rows() . ' orang', 0, 0, 'J');
        $pdf->Ln(5);
        $pdf->Cell(10, 0, '', 0);
        $pdf->Cell(80, 6, 'Jumlah Pemilih', 0, 0, 'J');
        $pdf->Cell(5, 6, ':', 0, 0, 'J');
        $pdf->Cell(85, 6, $pemilih->num_rows() . ' orang', 0, 0, 'J');
        $pdf->Ln(5);
        $pdf->Cell(10, 0, '', 0);
        $pdf->Cell(80, 6, 'Jumlah pemilih menggunakan hak suara', 0, 0, 'J');
        $pdf->Cell(5, 6, ':', 0, 0, 'J');
        $pdf->Cell(85, 6, $milih . ' orang', 0, 0, 'J');
        $pdf->Ln(5);
        $pdf->Cell(10, 0, '', 0);
        $pdf->Cell(80, 6, 'Jumlah golput', 0, 0, 'J');
        $pdf->Cell(5, 6, ':', 0, 0, 'J');
        $pdf->Cell(85, 6, ($pemilih->num_rows() - $milih) . ' orang', 0, 0, 'J');
        $pdf->Ln(9);
        $pdf->Cell(190, 5, 'Kegiatan ini berjalan lancar dan dengan hasil dapat dipertanggung jawabkan. Berikut ini adalah hasil akhir', 0, 0, 'J');
        $pdf->Ln(5);
        $pdf->Cell(190, 5, 'perhitungan suara :', 0, 0, 'J');


        foreach ($hasil as $hs) {
            $pdf->Ln(5);
            $pdf->Cell(10, 0, '', 0);
            $pdf->Cell(40, 6, 'Nomor Urut', 0, 0, 'J');
            $pdf->Cell(5, 6, ':', 0, 0, 'J');
            $pdf->Cell(135, 6, $hs->nomorUrut, 0, 0, 'J');
            $pdf->Ln(5);
            $pdf->Cell(10, 0, '', 0);
            $pdf->Cell(40, 6, 'Nama Pasangan Calon', 0, 0, 'J');
            $pdf->Cell(5, 6, ':', 0, 0, 'J');
            $pdf->Cell(135, 6, $hs->nama . ' & ' . $hs->wakil, 0, 0, 'J');
            $pdf->Ln(5);
            $pdf->Cell(10, 0, '', 0);
            $pdf->Cell(40, 6, 'Jumlah Suara', 0, 0, 'J');
            $pdf->Cell(5, 6, ':', 0, 0, 'J');
            $pdf->Cell(135, 6, $hs->jumlahPemilih . ' suara', 0, 0, 'J');
            $pdf->Ln(2);
        }

        $pdf->Ln(5);
        $pdf->MultiCell(190, 5, 'Demikian hasil perhitungan suara pemilihan ketua osis ' . $sekolah['nmSekolah'] . ' untuk dapat dijadikan patokan penentuan jabatan ketua osis periode 2020/2021', 0, 'J');

        $pdf->Ln(12);
        $pdf->Cell(145, 0, '', 0);
        $pdf->Cell(45, 6, ', ' . tgl(date('Y-m_d')), 0, 0, 'J');
        $pdf->Ln(6);
        $pdf->Cell(120, 0, '', 0);
        $pdf->Cell(60, 6, 'Ketua Panitia', 0, 0, 'J');
        $pdf->Ln(5);
        $pdf->Cell(120, 0, '', 0);
        $pdf->Cell(60, 6, 'Pemilihan Ketua OSIS', 0, 0, 'J');
        $pdf->Ln(20);
        $pdf->Cell(120, 0, '', 0);
        $pdf->Cell(60, 6, '_____________________________', 0, 0, 'J');



        // Position at 1.5 cm from bottom
        $pdf->SetY(-31);
        // Arial italic 8
        $pdf->SetFont('Arial', 'I', 8);
        // Text color in gray
        $pdf->SetTextColor(128);

        $pdf->Output();
        $pdf->Output('./assets/hasil/hasil-pemilihan.pdf', 'F');
    }

    function ubahuser()
    {
        isadmin();

        $dataawal = $this->db->get_where('t_auth', ['xid' => $this->session->userdata('boss')]);

        $nama = $this->input->post('nama', true);
        $xuser = $this->input->post('xuser', true);
        $pass_lama = $this->input->post('pass_lama', true);
        $pass_baru = $this->input->post('pass_baru', true);

        if (!empty($pass_baru)) {
            # jika password baru ada isinya
            if (password_verify($pass_lama, $dataawal->row()->xpass)) {
                # jika password lama benar
                $object = [
                    'nama' => $nama,
                    'xuser' => $xuser,
                    'xpass' => password_hash($pass_baru, PASSWORD_DEFAULT)
                ];
                $this->db->where('xid', $this->session->userdata('boss'));
                $this->db->update('t_auth', $object);
                $this->session->set_flashdata('pesan', 'Data berhasil diubah');
                redirect('admin/user', 'refresh');
            } else {
                # jika password lama salah
                $this->session->set_flashdata('pesan', 'Data gagal diubah, password lama salah.');
                redirect('admin/user', 'refresh');
            }
        } else {
            # jika tidak ada password baru
            $object = [
                'nama' => $nama,
                'xuser' => $xuser,
            ];
            $this->db->where('xid', $this->session->userdata('boss'));
            $this->db->update('t_auth', $object);
            $this->session->set_flashdata('pesan', 'Data berhasil diubah');
            redirect('admin/user', 'refresh');
        }
    }
}

    /* End of file Admin.php */;
