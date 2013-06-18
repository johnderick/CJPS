<?php
//include('data_gs1.php');
include('nurse.php');
$rc= new collect();
$rc->front();
$rc->progress();
$rc->info();
$rc->back();
$rc->end();
//$rc->studata();
//$rc->subj();
//$rc->footer();
$rc->output();
?>