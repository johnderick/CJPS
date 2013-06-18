<?php
$data = array(
			'Account_no' => ('0011-4000017-6'),
			'Order' => ('Philippine University of the Philippines , Laguna Chapter'),
			'Pesos' => (1252125),
			'Account_name' => ('PHILIPPINE COLLEGE OF CRIMINOLOGY'),
			'Check_no' => ('SC 0002066309'),
			'RT_no' => (' 0019')
		); 
include('check.php');
$rc=new CheckReport($data);
$rc->hdr($data);
//$rc->debit($data);
$rc->output();

/* $eap['EapVoucher']['details'] = json_decode ($eap['EapVoucher']['details'],true);
$details=$eap['EapVoucher']; */

?>
