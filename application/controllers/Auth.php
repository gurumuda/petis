<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        /**
         * Proses memanggil model dan membuat alias untuk digunakan pada method
         */
        $this->load->model('AuthModel', 'am');
        $this->load->model('adminModel', 'am1');
        /**
         * Memanggil library form validation milik CI3
         * library ini digunakan untuk membuat validasi pada input formulir
         */
        $this->load->library('form_validation');
    }

    /**
     * Membuat fungsi login
     */
    public function login()
    {
        /**
         * Melakukan validasi input username dan password dengan menggunakan form validation yang sudah dipanggil sebelumnya
         */
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required');

        /**
         * Logika validasi input dari form
         */
        if ($this->form_validation->run() == FALSE) {
            /**
             * Jika validasi gagal maka panggil (load) views halaman login dengan mengirimkan data sekolah yang sudah disimpan di dalam data array
             * Data sekolah diambil dari database yang dikelola di dalam model dengan method get sekolah
             */
            $data['sekolah'] = $this->am1->getsekolah();
            $this->load->view('vlogin', $data);
        } else {
            /**
             * Jika validasi berhasil, maka diarahkan ke method privat untuk proses login
             */
            $this->login_();
        }
    }

    private function login_()
    {
        /**
         * Menyimpan data input username ke dalam variable xuser dan
         * Pass (password) ke dalam variable xpass
         */
        $xuser = $this->input->post('username', true);
        $xpass = $this->input->post('pass', true);

        /**
         * cek data apakah username yang diinputkan ada di dalam database atau tidak
         * data username dikirimkan ke model adminModel ke method getLogin
         * kemudian ambil data pada untuk satu baris saja
         */
        $cek = $this->am->getLogin($xuser)->row();

        /**
         * Cek data yang diperoleh dari pengembalian data
         */
        if ($cek) {
            /**
             * Jika usernama yang dimasukkan ada di dalam database, maka lanjutkan pengecekkan untuk password yang dimasukkan
             * 
             */
            if (password_verify($xpass, $cek->xpass)) {
                /**
                 * Jika password yang dimasukkan sesuai dengan password yang dimiliki oleh username, maka ambil data pengguna tersebut dan simpan di dalam variable dataku
                 */
                $dataku = $this->db->get_where('t_auth', ['xuser' => $xuser])->row();

                /**
                 * Masukkan data waktu login, user yang login, dan aksi yang dilakukan yaitu login ke dalam variable waktu
                 */
                $waktu = [
                    'time' => time(),
                    'user' => $dataku->nama,
                    'action' => 'Login',
                ];

                /**
                 * Masukkan data variable waktu diatas ke dalam database dengan fungsi dibawah
                 * fungsi ini bawaan dari CI 3
                 */

                $this->db->insert('t_activity', $waktu);

                /**
                 * Membuat atau mendeklarasikan sebuah data untuk dimasukkan dalam session
                 * nama sessionnya adalah boss
                 * yang diisi dengan data id username yang berhasil login
                 */
                $array = array(
                    'boss' => $cek->xid
                );
                /**
                 * Men set session dengan nama boss yang tadi sudah dimasukkan dalam array
                 */
                $this->session->set_userdata($array);

                /**
                 * mengarahkan ke halaman admin
                 */
                redirect('admin');
            } else {
                /**
                 * Jika password yang dimasukkan salah, maka buat session yang hanya sekali pakai (flash data)
                 * dengan nama "pesan"
                 * dengan isi "Username atau password salah"
                 */
                $this->session->set_flashdata('pesan', 'Username atau password salah');
                redirect('auth/login', 'refresh');
            }
        } else {
            /**
             * Jika hasil pengecekan username tidak ditemukan di dalam database
             * maka buat session flash
             * dengan nama "pesan"
             * dengan isi "Username tidak ditemukan"
             */
            $this->session->set_flashdata('pesan', 'Username tidak ditemukan');
            redirect('auth/login', 'refresh');
        }
    }

    /**
     * Method untuk logout user admin
     */
    public function logout()
    {
        /**
         * Hapus data session yang bernama "boss"
         * session ini di sett saat user admin berhasil melakukan login
         */
        $this->session->unset_userdata('boss');
        redirect('', 'refresh');
    }
}

/* End of file Auth.php */
