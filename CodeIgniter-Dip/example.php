<?php
require($_SERVER['DOCUMENT_ROOT'].'/codeigniter/system/cidip/cidip_index.php');
$obj =& get_instance();
echo $obj->load->view('welcome_message',null,true);
?>