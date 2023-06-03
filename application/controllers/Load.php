<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Load extends CI_Controller
{

    function aksi()
    {
        $this->load->helper('time_helper');

        $this->db->order_by('xid', 'desc');
        $this->db->limit(6);
        $data = $this->db->get('t_activity');
        $res = '';
        foreach ($data->result() as $key) {
            # code...

            $nowtime = time();
            $oldtime = $key->time;

            $res .= '<div class="desc"><div class="thumb"><span class="badge bg-theme"><i class="fa fa-clock-o"></i></span></div><div class="details"><p><muted>';
            if (time_elapsed_A($nowtime - $oldtime) < 1) {
                # code...
                $res .= 'Baru saja';
            } else {
                $res .= time_elapsed_A($nowtime - $oldtime) . ' yang lalu';
            }
            $res .= '</muted><br/><a href="#">';
            $res .= $key->user;
            $res .= '</a> ';
            $res .= $key->action;
            $res .= '<br/></p></div></div>';
        }

        echo $res;
    }

    function sementara()
    {
        error_reporting(0);
        $this->db->order_by('nomorUrut', 'asc');
        $data = $this->db->get('t_kandidat');
        $baris = $data->num_rows();
        $col = 12 / $baris;

        $res = '';

        $sp = $this->db->get('t_result')->num_rows();

        foreach ($data->result() as $key) {
            # code...
            $suara = $this->db->get_where('t_result', ['pilihan' => $key->nomorUrut])->num_rows();
            $img = base_url() . 'assets/images/calon/' . $key->photo;

            $res .= '<div class="col-md-' . $col . ' mb">
                        <div style="background-color: #b5b3b3" class="darkblue-panel pn">
                        <div class="darkblue-header">
                            <h5>' . $key->nama . '</h5>
                        </div>
                        <img style="border-radius: 10px" height="130px" width="130px" src="' . $img . '" alt="" />
                        
                        <footer style="position:absolute; bottom: 10; left: 0; right: 0;">
                            <div class="centered">
                            <h5><i>Jumlah Suara Sementara</i><br><br> ' . $suara . '</h5>
                            
                            </div>
                        </footer>
                        </div>
                        <div class="progress progress-striped active">
                            <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: ' . $suara / $sp * 100 . '%">
                            <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                        <h5 style="text-align:center">' . ($sp > 0 ? substr(($suara / $sp * 100), 0, 5) : '0') . ' % dari suara masuk</h5>
                    </div>';
        }

        $js = $this->db->get('t_pemilih')->num_rows();
        $jp = $this->db->get_where('t_pemilih', ['status' => '1'])->num_rows();
        $persen = $jp / $js * 100;

        $res .= '<div style="margin: 10px; 15px; 0; 15px">
                    <h3 class="centered">Persentase Suara Masuk</h3>
                    <div class="col-sm-1 col-xs-1 pull-left">
                        <p class="goleft"><i class="fa fa-tint"></i> ' . substr($persen, 0, 4) . ' %</p>
                    </div>
                    <div class="col-sm-11 col-xs-11 pull-right">
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: ' . $persen . '%">
                            <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                </div>';

        echo $res;
    }

    function ubahPemilih()
    {
        $id = $this->input->post('id');
        $data = $this->db->get_where('t_pemilih', ['xid' => $id])->result();

        $new = [];
        foreach ($data as $dt) {
            array_push($new, ([
                'nama' => base64_decode($dt->nama),
                'nisn' => base64_decode($dt->nisn),
                'kelas' => base64_decode($dt->kelas),
                'kode' => $dt->kunci,
                'id' => $id,
            ]));
        }

        echo json_encode($new);
    }
}

/* End of file Load.php */