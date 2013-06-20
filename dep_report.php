<?php
$data = array(
			'Department' => array('Logistics','HR','I.T'),
			'Particular' => array('Logistics','HR','I.T'),
			'Total' => array('Bond Paper Short','Bond Paper Long','Sign Pen'),
			'Unit' => array('60 reams','36 reams','48pc'),
			'January' => array('12.12','12.00','12.00'),
			'February' => array('478.02','564.00','455.00'),
			'March' => array('582.56','545.00','555.00'),
			'April' => array('445.22','986.00','454.00'),
			'May' => array('457.11','897.23','544.00'),
			'June' => array('457.00','450.43','521.00'),
			'July' => array('124.00','478.43','451.00'),
			'August' => array('145.00','652.46','422.00'),
			'September' => array('483.00','456.65','785.00'),
			'October' => array('324.54','632.00','433.00'),
			'November' => array('213.32','124.00','242.00'),
			'December' => array('123.00','456.00','785.65'),
			//'TOTAL' => array('424.53','868.00','367.00')
		); 
include('departmental_report.php');
$rc=new CollectReport($data);
$rc->hdr($data);
//$rc->debit($data);
$rc->output();

/* $eap['EapVoucher']['details'] = json_decode ($eap['EapVoucher']['details'],true);
$details=$eap['EapVoucher']; */

?>
