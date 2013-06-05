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
		$this->DrawBox(3.5,0,12.7,.89,$fill=null);
		$this->DrawBox(3.5,1.1,7.7,.89,$fill=null);
		$this->DrawBox(12,1.1,5,.89,$fill=null);
		$this->leftText(.3,.65,'Pupils Name',0,'b');
		$this->leftText(.3,1.7,'Grade/Section',0,'b');
		
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
	