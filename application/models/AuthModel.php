<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {

    function getLogin($xuser) {
        return $this->db->get_where('t_auth', ['xuser' => $xuser]);
    }

}

/* End of file AuthModel.php */
 ;?>