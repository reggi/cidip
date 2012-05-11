<?php

/**

Codigniter Dip Example File
https://github.com/reggi/cidip

*/

require($_SERVER['DOCUMENT_ROOT'].'/application/third_party/dip.php');

$dip =& get_instance();

echo $dip->load->view('welcome_message',null,true);

?>