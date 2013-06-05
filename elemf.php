<?php
require('formsheet.php');
class collect extends Formsheet{
	protected static $_width = 4.28;
	protected static $_height = 9.5;
	protected static $_unit = 'in';
	protected static $_orient = 'P';	
	protected static $_allot_subjects = 15;
	
	function collect($data=null){
		$this->data =$data; 
		$this->showLines = true;
		$this->FPDF(collect::$_orient, collect::$_unit,array(collect::$_width,collect::$_height));
		$this->createSheet();
	}
	
	function hdr(){
		$metrics = array(
			'base_x'=> 0.130,
			'base_y'=> 0.215,
			'width'=> 3.877,
			'height'=> 1.054,
			'cols'=> 16,
			'rows'=> 4,
		);
		$this->section($metrics);
		
		$this->SetFillColor(193,193,193);
		//$this->DrawBox(.2,.09,16,.89,'F');
		$this->DrawBox(3.56,2,6.9,1.2,'F');
		
		
		$this->GRID['font_size']= 9;
		$this->leftText(7,1.8,'CHILD JESUS OF PRAGUE SCHOOL',0,'b');
		$this->GRID['font_size']= 12;
		$this->leftText(3.9,2.88,'PUPILS PROGRESS',0,'b');
		$this->leftText(10.9,2.88,'REPORT CARD',0,'b');
		$this->GRID['font_size']= 9;
		$this->leftText(3.7,3.7,'Brgy. Calumpang, Binangonan,Rizal, Philippines',0,'');
		//$this->DrawImage(0,0,4.28,9,'../CJPS/Elem123Front.jpeg');
	}

	function studata(){
		$metrics = array(
			'base_x'=> 0.130,
			'base_y'=> 1.27,
			'width'=> 3.877,
			'height'=> 1.054,
			'cols'=> 16,
			'rows'=> 4,
		);
		$this->section($metrics);
		$this->GRID['font_size']= 8.2;
		//$this->leftText(x,y,'Pupils Name',0,'b');
		//$this->DrawBox($x,$y,$w,$h,$fill=null);
		//$this->DrawBox(0,0,.2,.27,'F');
		
		
		$this->SetFillColor(193,193,193);
		$this->DrawBox(.2,.09,16,.89,'F');
		$this->DrawBox(.2,1.2,16,.89,'F');
		$this->DrawBox(.2,2.3,16,.89,'F');
		
		$this->SetFillColor(97,97,97);
		$this->DrawBox(0,.09,.2,.89,'F');
		$this->DrawBox(0,1.2,.2,.89,'F');
		$this->DrawBox(0,2.3,.2,.89,'F');
		
		$this->SetFillColor(97,97,97);
		$this->DrawBox(3.5,0,12.7,.89,'null');
		$this->DrawBox(3.5,1.1,7.7,.89,'null');
		$this->DrawBox(12.3,1.1,3.89,.89,'null');
		$this->DrawBox(3.5,2.2,12.7,.89,'null');
		$this->leftText(.3,.69,'Pupils Name',0,'b');
		$this->leftText(.3,1.8,'Grade/Section',0,'b');
		$this->leftText(.3,2.94,'Adviser',0,'b');
		$this->GRID['font_size']= 9.5;
		$this->leftText(11.5,1.8,'SY',0,'b');

		
		
		
		//$this->DrawImage(0,0,4.28,9,'../CJPS/Elem123Front.jpeg');
	}
	
	function header(){
		$metrics = array(
			'base_x'=> 0,
			'base_y'=> 0,
			'width'=> 7.9,
			'height'=> 1,
			'cols'=> 45,
			'rows'=>5,
		);
		$this->section($metrics);
		$this->GRID['font_size']=9;		
	
		$this->DrawImage(0,0,4.28,9,'../CJPS/Elem123Front.jpeg');
	}
	
}
?>
	