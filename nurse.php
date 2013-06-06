<?php
require('formsheet.php');
class collect extends Formsheet{
	protected static $_width = 10.5;
	protected static $_height = 8.5;
	protected static $_unit = 'in';
	protected static $_orient = 'L';	
	protected static $_allot_subjects = 15;
	
	function collect($data=null){
		$this->data =$data; 
		$this->showLines = true;
		$this->FPDF(collect::$_orient, collect::$_unit,array(collect::$_width,collect::$_height));
		$this->createSheet();
	}
	
	function front(){
		$metrics = array(
			'base_x'=> 5.876,
			'base_y'=> 0.274,
			'width'=> 4.323,
			'height'=> 1.840,
			'cols'=> 16,
			'rows'=> 8,
		);
		$this->section($metrics);
		$this->DrawImage(.25,2.15,1.12,1.31,'../CJPS/CJPSW.png');
		$this->DrawImage(4.8,4.8,.80,.5,'../CJPS/cjps.png');
		
		$this->SetFillColor(255,0,0);
		$this->DrawBox(13.78,0,2.38,.98,'F');
		
		$this->SetTextColor(255,255,255);	
		$this->GRID['font_size']= 9;
		$this->leftText(13.79,.7,'Form-138',0,'b');
		
		$this->SetTextColor(0,0,0);	
		$this->GRID['font_size']= 9.5;
		$this->leftText(7.8,6.89,'CHILD JESUS OF PRAGUE SCHOOL',0,'b');
		$this->GRID['font_size']= 9;
		$this->leftText(4.7,7.8,'Brgy. Calumpang, Binangonan, Rizal,  Philippines',0,'');
	}
	
	function progress(){
		$metrics = array(
			'base_x'=> 6.268,
			'base_y'=> 3.983,
			'width'=> 3.996,
			'height'=> 0.955,
			'cols'=> 16,
			'rows'=> 8,
		);
		$this->section($metrics);
		$this->SetFillColor(255,0,0);
		$this->DrawBox(10.33,0,5.55,2.5,'F');
		$this->SetFillColor(193,193,193);
		$this->DrawBox(3.5,0,6.8,2.5,'F');
		$this->DrawBox(0,3.7,10.3,2.5,'F');
		
		$this->SetFillColor(0,0,0);
		$this->DrawBox(10.33,3.7,5.55,2.5,'F');
		
		$this->GRID['font_size']= 12;
		$this->SetTextColor(0,0,0);
		$this->leftText(3.6,1.99,'PUPILS PROGRESS',0,'b');
		$this->leftText(.5,5.4,'PRE-SCHOOL DEPARTMENT',0,'b');
		
		
		$this->SetTextColor(255,255,255);
		$this->leftText(10.7,1.99,'REPORT CARD',0,'b');
		$this->GRID['font_size']= 10;
		$this->leftText(10.5,5.4,'NURSERY/KINDER',0,'b');
		
		$this->SetTextColor(0,0,0);
		$this->GRID['font_size']= 8;
		$this->leftText(.4,7.8,'w  w  w  .   c   h   i   l   d   j   e   s   u   s   o   f   p   r   a   g   u   e   .   c  o  m',0,'b');
		
		
	}
	
	function header(){
		$metrics = array(
			'base_x'=> 0,
			'base_y'=> 0,
			'width'=> 4.744,
			'height'=> 1.982,
			'cols'=> 45,
			'rows'=>5,
		);
		$this->section($metrics);
		$this->GRID['font_size']=9;	
		$this->DrawImage(0,0,10.5,8.5,'../CJPS/NursKinderOutside.jpg');
	} 
	
}
?>
	