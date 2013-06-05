<?php
//include('data_gs1.php');
include('elemf.php');
$rc= new collect();
$rc->studata();
$rc->hdr();
$rc->output();
?>