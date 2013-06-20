<?php
require('formsheet.php');
class CollectReport extends Formsheet{
	protected static $_width = 8.5;
	protected static $_height = 11;
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
			'width'=> 11,
			'height'=> 1,
			'cols'=> 45,
			'rows'=>5,	
		);
		$this->section($metrics);
		$this->GRID['font_size']=15;	
		$y = 1;
		$x = 2;
		$data = $this->data;
		$this->SetFillColor(193,193,193);
		$this->DrawBox(0,5.3,43,1,'F');	
		
		$this->centerText(0,$y++,'Philippine College of Criminology',45,'b');
		$this->GRID['font_size']=9;	
		$this->centerText(0,$y++,'641 Sales St., Sta. Cruz, Manila',45,'');
		$this->GRID['font_size']=12;
		$y ++;
		$this->centerText(0,$y++,'Departmental Request for Office Supplies 2013',45,'b');
		
		$y = 6;
		$this->GRID['font_size']=8;	
		foreach($data as $key => $value){
				$this->centerText($x,$y,$key,0,'b');
				$x+=2.6;
			}
			
		$y = 8;
		$x = 0;
		$total = 0;
		$this->GRID['font_size']=9;	
		for($a = 0; $a <= (count($data['Department'])-1);$a++){
		$this->leftText($x,$y++,$data['Department'][$a],3.5,'');
			$total += $data['Department'][$a]; 	
		} 
	}
}
?>
	