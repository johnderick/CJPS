<?php
$data = array(
			'DATE' => array('10/20/10','12/20/30','45/15/45'),
			'PTC_CA' => array('123.33','456.00','785.00'),
			'CBC_CA' => array('145.00','652.44','422.00'),
			'Tuition' => array('124.00','478.33','451.00'),
			'Misc' => array('478.00','564.00','455.00'),
			'Alumni' => array('582.56','545.00','555.00'),
			'Review' => array('445.22','986.00','454.00'),
			'Accounts' => array('457.11','897.23','544.00'),
			'Tel' => array('457.00','450.43','521.00'),
			'Grad' => array('124.00','478.43','451.00'),
			'Sch_id' => array('145.00','652.46','422.00'),
			'Textbook' => array('483.00','456.65','785.00'),
			'Training' => array('324.54','632.00','433.00'),
			'Doc' => array('213.32','124.00','242.00'),
			'Office' => array('123.00','456.00','785.65'),
			'Lights' => array('424.53','868.00','367.00'),
			'Lease' => array('457.33','450.00','521.00'),
			'Athletics' => array('582.56','545.00','555.64')
		);
include('collection_report.php');
$rc=new CollectReport($data);
$rc->hdr($data);
//$rc->debit($data);
$rc->output();

/* $eap['EapVoucher']['details'] = json_decode ($eap['EapVoucher']['details'],true);
$details=$eap['EapVoucher']; */

?>
