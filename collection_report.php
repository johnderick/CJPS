<?php
require('formsheet.php');
class CollectReport extends Formsheet{
	protected static $_width = 8.5;
	protected static $_height = 13;
	protected static $_unit = 'in';
	protected static $_orient = 'l';	
	protected static $_available_line = 86;	
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
		$this->centerText(0,$y++,'Philippine College of Criminology',45,'b');
		$this->GRID['font_size']=9;	
		$this->centerText(0,$y++,'Manila, Philippines',45,'');
		$this->GRID['font_size']=12;
		$y ++;
		$this->centerText(0,$y++,'Collection Details',45,'b');
		$this->DrawLine(3.2,'h',array(0,45));
		$this->DrawLine(4.2,'h',array(0,45));
		$this->GRID['font_size']=10;
		$this->centerText(0,$y,'Collection Repository',15,'b');
		$this->centerText(12,$y++,'Revenge Sour',22.5,'b');
		
		$this->centerText(0,$y,'DATE',4,'b');
		$this->centerText(4,$y,'PTC-CA',4,'b');
		$this->centerText(8,$y,'CBC-SA',4,'b');
		$this->GRID['font_size']=8;
		$this->centerText(12,$y,'Tuition & Other Fees',4,'b');
		$this->GRID['font_size']=10;
		$this->centerText(16,$y,'Miscellaneous',4,'b');
		$this->centerText(20,$y,'Alumni Fee',4,'b');
		$this->centerText(24,$y,'Review Fee',4,'b');
		$this->centerText(28,$y,'Graduation',4,'b');
		$this->centerText(32,$y,'School ID',4,'b');
		$this->centerText(36,$y,'Doc.Stamp',4,'b');
		$this->centerText(40,$y++,'Lights & Water',4,'b');
		// echo '<pre>';
		// print_r($data);
		
		$y = 8;
		
		$this->rightText(3,$y++,$data['DATE'][0],0,'');
		$this->rightText(3,$y++,$data['DATE'][1],0,'');
		$this->rightText(3,$y,$data['DATE'][2],0,'');
		$y = 8;
		$this->rightText(6.8,$y++,$data['PTC_CA'][0],0,'');
		$this->rightText(6.8,$y++,$data['PTC_CA'][1],0,'');
		$this->rightText(6.8,$y++,$data['PTC_CA'][2],0,'');
		
		$y = 8;
		$this->rightText(10.7,$y++,$data['CBC_CA'][0],0,'');
		$this->rightText(10.7,$y++,$data['CBC_CA'][1],0,'');
		$this->rightText(10.7,$y++,$data['CBC_CA'][2],0,'');
		$y = 8;
		$this->rightText(14.4,$y++,$data['Tuition'][0],0,'');
		$this->rightText(14.4,$y++,$data['Tuition'][1],0,'');
		$this->rightText(14.4,$y++,$data['Tuition'][2],0,'');
		$y = 8;
		$this->rightText(18.5,$y++,$data['Misc'][0],0,'');
		$this->rightText(18.5,$y++,$data['Misc'][1],0,'');
		$this->rightText(18.5,$y++,$data['Misc'][2],0,'');
		$y = 8;
		$this->rightText(22.6,$y++,$data['Alumni'][0],0,'');
		$this->rightText(22.6,$y++,$data['Alumni'][1],0,'');
		$this->rightText(22.6,$y++,$data['Alumni'][2],0,'');
		$y = 8;
		$this->rightText(26.6,$y++,$data['Review'][0],0,'');
		$this->rightText(26.6,$y++,$data['Review'][1],0,'');
		$this->rightText(26.6,$y++,$data['Review'][2],0,'');
		$y = 8;
		$this->rightText(30.7,$y++,$data['Grad'][0],0,'');
		$this->rightText(30.7,$y++,$data['Grad'][1],0,'');
		$this->rightText(30.7,$y++,$data['Grad'][2],0,'');
		$y = 8;
		$this->rightText(34.7,$y++,$data['Sch_id'][0],0,'');
		$this->rightText(34.7,$y++,$data['Sch_id'][1],0,'');
		$this->rightText(34.7,$y++,$data['Sch_id'][2],0,'');
		$y = 8;
		$this->rightText(38.7,$y++,$data['Doc'][0],0,'');
		$this->rightText(38.7,$y++,$data['Doc'][1],0,'');
		$this->rightText(38.7,$y++,$data['Doc'][2],0,'');
		$y = 8;
		$this->rightText(42.7,$y++,$data['Lights'][0],0,'');
		$this->rightText(42.7,$y++,$data['Lights'][1],0,'');
		$this->rightText(42.7,$y++,$data['Lights'][2],0,'');
		$y = 35;
		$this->SetFillColor(193,193,193);
		$this->DrawBox(1,34,43,1.5,'F');
		$this->rightText(3,$y,'Total',0,'b');
		$this->rightText(6.8,$y,$data['PTC_CA'][0] + $data['PTC_CA'][1] + $data['PTC_CA'][2],0,'b');
		$this->rightText(10.7,$y,$data['CBC_CA'][0] + $data['CBC_CA'][1] + $data['CBC_CA'][2],0,'b');
		$this->rightText(14.4,$y,$data['Tuition'][0] + $data['Tuition'][1] + $data['Tuition'][2],0,'b');
		$this->rightText(18.5,$y,$data['Misc'][0] + $data['Misc'][1] + $data['Misc'][2],0,'b');
		$this->rightText(22.6,$y,$data['Alumni'][0] + $data['Alumni'][1] + $data['Alumni'][2],0,'b');
		$this->rightText(26.6,$y,$data['Review'][0] + $data['Review'][1] + $data['Review'][2],0,'b');
		$this->rightText(30.7,$y,$data['Grad'][0] + $data['Grad'][1] + $data['Grad'][2],0,'b');
		$this->rightText(34.7,$y,$data['Sch_id'][0] + $data['Sch_id'][1] + $data['Sch_id'][2],0,'b');
		$this->rightText(38.7,$y,$data['Doc'][0] + $data['Doc'][1] + $data['Doc'][2],0,'b');
		$this->rightText(42.7,$y,$data['Lights'][0] + $data['Lights'][1] + $data['Lights'][2],0,'b');
		
		
	}
}	
?>
	