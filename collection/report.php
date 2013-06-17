<?php
$data = array(
			'PTC_CA' => array(	'Total' => (1250.00),
								'January' => (2),
								'February' => (9),
				),
			'CBC_CA' => array(	'Total' => (5895.00),
								'January' => (5),
								'February' => (6),				
				),
			
			'Tuition' => array(	'Total' => (487.00),
								'January' => (14),
								'February' => (47),				
				),
			
			'Misc' => array(	'Total' => (4572.00),
								'January' => (12),
								'February' => (45),				
				),
			
			'Alumni' => array(	'Total' => (234.00),
								'January' => (1),
								'February' => (2),				
				),
			'Review' => array(	'Total' => (123.00),
								'January' => (2),
								'February' => (3),				
				),
			'Accounts' => array(	'Total' => (1214.00),
									'January' => (12),
									'February' => (45),				
				),
			'Tel' => array(	'Total' => (141.00),
							'January' => (1),
							'February' => (3),				
				),
			'Grad' => array(	'Total' => (123.00),
								'January' => (3),
								'February' => (2),				
				),
			'Sch_id' => array(	'Total' => (43.00),
								'January' => (1),
								'February' => (1),				
				),
			'School' => array(	'Total' => (43.00),
								'January' => (1),
								'February' => (1),				
				),
			'Textbook' => array(	'Total' => (123.00),
									'January' => (2),
									'February' => (3),				
				),
			'Training' => array(	'Total' => (333.00),
									'January' => (2),
									'February' => (1),				
				),
			'Doc' => array(	'Total' => (111.00),
									'January' => (3),
									'February' => (3),				
				),
			'Office' => array(	'Total' => (588.00),
									'January' => (11),
									'February' => (4),				
				),
			
			'Lights' => array(	'Total' => (555.00),
									'January' => (1),
									'February' => (4),				
				),
			'Lease' => array(	'Total' => (457.00),
									'January' => (4),
									'February' => (2),				
				),
			'Athletics' => array(	'Total' => (785.00),
									'January' => (1),
									'February' => (33),				
				)
		);
		
App::import('Vendor','collection_report');
$rc=new CollectReport($collect);
$rc->hdr();
$rc->debit($data);
$rc->output();

/* $eap['EapVoucher']['details'] = json_decode ($eap['EapVoucher']['details'],true);
$details=$eap['EapVoucher']; */

?>
