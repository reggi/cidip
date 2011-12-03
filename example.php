<?php
//if codeingiter is in the root directory
//require($_SERVER['DOCUMENT_ROOT'].'/applications/tools/rdip.php');
// if codeigniter is in in a subdirectory
require($_SERVER['DOCUMENT_ROOT'].'/codeigniter/applications/tools/rdip.php');
$obj =& get_instance();
echo $obj->load->view('welcome_message',null,true);
?>