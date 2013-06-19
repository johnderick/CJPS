<?php
require('formsheet.php');
class CollectReport extends Formsheet{
	protected static $_width = 8.5;
	protected static $_height = 13;
	protected static $_unit = 'in';
	protected static $_orient = 'l';	
	protected static $_available_line = 12;	
	protected static $_curr_page = 1;
	protected static $_total_account = 0;
	protected static $_allot_subjects = 15;
	protected static $_currpage = 1;	
	
	function CollectReport($data=null){
		$this->data =$data; 
		$this->showLines = !true;
		$this->FPDF(CollectReport::$_orient, CollectReport::$_unit,array(CollectReport::$_width,CollectReport::$_height));
		$this->createSheet();
	}
	
	function hdr($data){
		$metrics = array(
			'base_x'=> 0.3,
			'base_y'=> 0.3,
			'width'=> 12.4,
			'height'=> 1,
			'cols'=> 45,
			'rows'=>5,	
		);
		$this->section($metrics);
		$this->GRID['font_size']=15;	
		//$this->DrawImage(12.5,15,3.5,3.5,'../webroot/img/trademarks/school_logo.jpg');
		$y = 1;
		$x = 2;
		$data = $this->data;
		
		$this->SetFillColor(193,193,193);
		$this->DrawBox(0,34,45.2,1.5,'F');
		$this->DrawBox(0,5.3,45.2,1,'F');
		$this->SetFillColor(138,136,136);
		$this->DrawBox(0,35.2,45.2,.5,'F');
		$this->DrawBox(10.5,4.3,34.7,1,'F');
		$this->SetFillColor(119,119,119);
		$this->DrawBox(0,4.3,10.5,1,'F');
		$this->SetFillColor(223,223,223);
		$this->DrawBox(10.4,4.3,.2,2,'F');
		
		
		$this->centerText(0,$y++,'Philippine College of Criminology',45,'b');
		$this->GRID['font_size']=9;	
		$this->centerText(0,$y++,'Manila, Philippines',45,'');
		$this->GRID['font_size']=15;
		$y ++;
		$this->centerText(0,$y++,'Collection Details',45,'b');
		$this->DrawLine(3.2,'h',array(0,45.2));
		$this->DrawLine(4.2,'h',array(0,45.2));
		$this->GRID['font_size']=10;
		$this->centerText(0,$y,'Collection Repository',15,'b');
		$this->centerText(12,$y++,'Revenge Sour',22.5,'b');
	
		$x = 1.5;
		$count = count($data);
			/* echo'<pre>';
		 echo count($data['PTC_CA']);
		print_r($data);  */
		
			foreach($data as $key => $value){
				$this->centerText($x,$y,$key,0,'b');
				$x+=2.5;
			}
				
		$y = 8;
		$x = 0;
		$total = 0;
		for($a = 0; $a <= (count($data['DATE'])-1);$a++){
		$this->centerText($x,$y++,$data['DATE'][$a],3.5,'');
			$total += $data['DATE'][$a]; 	
		} 
			$y = 8;
			$total = 0;
			for($a = 0; $a <= (count($data['PTC_CA'])-1);$a++){
			$this->centerText($x+2.3,$y++,$data['PTC_CA'][$a],3.5,'');
				$total += $data['PTC_CA'][$a]; 	
			} 
			$this->centerText(2,35,'TOTAL:   ',0,'b');
			$this->centerText($x+3.9,35,$total,0,'b');

		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['CBC_CA'])-1);$a++){
		$this->centerText($x+4.7,$y++,$data['CBC_CA'][$a],3.5,'');
			$total += $data['CBC_CA'][$a]; 	
		} 
		$this->centerText($x+6.3,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Tuition'])-1);$a++){
		$this->centerText($x+7.3,$y++,$data['Tuition'][$a],3.5,'');
			$total += $data['Tuition'][$a]; 	
		} 
		$this->centerText($x+8.9,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Misc'])-1);$a++){
		$this->centerText($x+9.7,$y++,$data['Misc'][$a],3.5,'');
			$total += $data['Misc'][$a]; 	
		} 
		$this->centerText($x+11.3,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Alumni'])-1);$a++){
		$this->centerText($x+12.3,$y++,$data['Alumni'][$a],3.5,'');
			$total += $data['Alumni'][$a]; 	
		} 
		$this->centerText($x+13.9,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Review'])-1);$a++){
		$this->centerText($x+14.7,$y++,$data['Review'][$a],3.5,'');
			$total += $data['Review'][$a]; 	
		} 
		$this->centerText($x+16.3,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Accounts'])-1);$a++){
		$this->centerText($x+17.3,$y++,$data['Accounts'][$a],3.5,'');
			$total += $data['Accounts'][$a]; 	
		} 
		$this->centerText($x+18.9,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Tel'])-1);$a++){
		$this->centerText($x+19.7,$y++,$data['Tel'][$a],3.5,'');
			$total += $data['Tel'][$a]; 	
		} 
		$this->centerText($x+21.3,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Grad'])-1);$a++){
		$this->centerText($x+22.3,$y++,$data['Grad'][$a],3.5,'');
			$total += $data['Grad'][$a]; 	
		} 
		$this->centerText($x+23.9,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Sch_id'])-1);$a++){
		$this->centerText($x+24.7,$y++,$data['Sch_id'][$a],3.5,'');
			$total += $data['Sch_id'][$a]; 	
		} 
		$this->centerText($x+26.3,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Textbook'])-1);$a++){
		$this->centerText($x+27.3,$y++,$data['Textbook'][$a],3.5,'');
			$total += $data['Textbook'][$a]; 	
		} 
		$this->centerText($x+28.9,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Training'])-1);$a++){
		$this->centerText($x+29.7,$y++,$data['Training'][$a],3.5,'');
			$total += $data['Training'][$a]; 	
		} 
		$this->centerText($x+31.3,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Doc'])-1);$a++){
		$this->centerText($x+32.3,$y++,$data['Doc'][$a],3.5,'');
			$total += $data['Doc'][$a]; 	
		} 
		$this->centerText($x+34,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Office'])-1);$a++){
		$this->centerText($x+34.7,$y++,$data['Office'][$a],3.5,'');
			$total += $data['Office'][$a]; 	
		} 
		$this->centerText($x+36.35,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Lights'])-1);$a++){
		$this->centerText($x+37.3,$y++,$data['Lights'][$a],3.5,'');
			$total += $data['Lights'][$a]; 	
		} 
		$this->centerText($x+38.9,35,$total,0,'b');
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Lease'])-1);$a++){
		$this->centerText($x+39.7,$y++,$data['Lease'][$a],3.5,'');;
			$total += $data['Lease'][$a]; 	
		} 
		$this->centerText($x+41.3,35,$total,0,'b');
		
		
		$y = 8;
		$total = 0;
		for($a = 0; $a <= (count($data['Athletics'])-1);$a++){
		$this->centerText($x+42.3,$y++,$data['Athletics'][$a],3.5,'');
			$total += $data['Athletics'][$a]; 	
		} 
		$this->centerText($x+43.9,35,$total,0,'b');
	}	
}
?>
	