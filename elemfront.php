<?php
//include('data_gs1.php');
include('elemf.php');
$rc= new collect();
$rc->hdr();
$rc->studata();
$rc->subj();
$rc->footer();
$rc->output();
?>