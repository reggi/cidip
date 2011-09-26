<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CIdip extends CI_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function recover_get_array($query_string = ''){
        $query_string = urldecode($query_string);        
        $_SERVER['QUERY_STRING'] = $query_string;
        $get_array = array();
        parse_str($query_string,$get_array);
        foreach($get_array as $key => $val) {
            $_GET[$key] = $this->input->xss_clean($val);
            $_REQUEST[$key] = $this->input->xss_clean($val);
        }
    }
}

/* End of file CIdip.php */
/* Location: ./application/controllers/CIdip.php */