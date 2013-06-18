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
	
//----------------------- FRONT -------------------------- //
	
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
	
	function info(){
		$metrics = array(
			'base_x'=> 6.062,
			'base_y'=> 7.029,
			'width'=>  5.011,
			'height'=> 0.855,
			'cols'=> 16,
			'rows'=> 8,
		);
		$this->section($metrics);
		$this->SetFillColor(255,0,0);
		$this->DrawBox(0,0.1,.2,2.3,'F');
		$this->DrawBox(0,2.9,.2,2.3,'F');
		$this->DrawBox(0,5.7,.2,2.3,'F');
		$this->SetFillColor(193,193,193);
		$this->DrawBox(0.25,0.1,2.5,2.3,'F');
		$this->DrawBox(0.25,2.9,2.5,2.3,'F');
		$this->DrawBox(9,2.9,1,2.3,'F');
		$this->DrawBox(0.25,5.7,2.5,2.3,'F');
		$this->DrawBox(2.8,5.5,10.57,2.3,'null');
		$this->DrawBox(2.8,2.7,6.1,2.3,'null');
		$this->DrawBox(10,2.7,3.35,2.3,'null');
		$this->DrawBox(2.8,0,10.55,2.3,'null');
		
		$this->GRID['font_size']= 9;
		$this->SetTextColor(0,0,0);
		$this->leftText(.3,1.99,'PUPIL NAME',0,'b');
		$this->leftText(9.3,4.5,'SY',0,'b');
		$this->leftText(.3,7.3,'TEACHER',0,'b');
		$this->GRID['font_size']= 6.5;
		$this->leftText(.3,4.5,'GRADE/SECTION',0,'b');
		
		/* $this->SetTextColor(255,255,255);
		$this->leftText(10.7,1.99,'REPORT CARD',0,'b');
		$this->GRID['font_size']= 10;
		$this->leftText(10.5,5.4,'NURSERY/KINDER',0,'b');
		
		$this->SetTextColor(0,0,0);
		$this->GRID['font_size']= 8;
		$this->leftText(.4,7.8,'w  w  w  .   c   h   i   l   d   j   e   s   u   s   o   f   p   r   a   g   u   e   .   c  o  m',0,'b'); */
	}
	
	//----------------------- END FRONT -------------------------- //
	
	
	function back(){
		$metrics = array(
			'base_x'=> 0.252,
			'base_y'=> 0.274,
			'width'=>  4.870,
			'height'=> 6.184,
			'cols'=> 16,
			'rows'=> 16,
		);
		$this->section($metrics);
		
		for($y=5.3; $y<=16; $y+=0.776){
				$this->SetFillColor(193,193,193);
				$this->DrawBox(.66,$y,6.62,.61,'F');
				$this->SetFillColor(255,0,0);
				$this->DrawBox(.45,$y,.2,.61,'F');
			
		
			}
		
		for($y=5.25; $y<=16; $y+=0.776){
					$this->DrawBox(7.3,$y,1.2,.61,'null');
					$this->DrawBox(8.65,$y,1.2,.61,'null');
					$this->DrawBox(10,$y,1.2,.61,'null');
					$this->DrawBox(11.7,$y,1.2,.61,'null');
					$this->DrawBox(13.06,$y,1.2,.61,'null');
					$this->DrawBox(14.4,$y,1.2,.61,'null');
			
		
			}
		$this->SetFillColor(242,174,153);
		$this->DrawBox(0,0,16,.8,'F');
		$this->DrawBox(7.4,1.22,3.7,1.2,'F');
		$this->DrawBox(7.3,1.15,3.9,1.33,'null');
		$this->DrawBox(11.7,1.15,3.8,1.33,'null');
		
		 $this->SetFillColor(251,224,213);		//1st
		$this->DrawBox(7.4,2.55,1.12,2.5,'F');
		$this->DrawBox(7.3,2.5,1.29,2.6,'null');
		
		$this->DrawBox(11.78,2.58,1.12,2.47,'F');
		$this->DrawBox(11.7,2.5,1.27,2.6,'null');
		
		$this->SetFillColor(242,174,153);		//3rd
		$this->DrawBox(10,2.58,1.12,2.47,'F');
		$this->DrawBox(14.34,2.58,1.12,2.47,'F');
		$this->DrawBox(12.99,2.5,1.27,2.6,'null');
		$this->DrawBox(8.6,2.5,1.27,2.6,'null');
		$this->DrawBox(14.28,2.5,1.23,2.6,'null');
		
		$this->SetFillColor(246,197,180);		//2nd
		$this->DrawBox(8.69,2.58,1.12,2.47,'F');
		$this->DrawBox(13.08,2.58,1.12,2.47,'F');
		$this->DrawBox(9.91,2.5,1.27,2.6,'null');
		
		$this->GRID['font_size']= 13;
		$this->SetTextColor(0,0,0);
		$this->leftText(.3,.5,'I N T  E  L  L  E  C  T U A L      D E  V E  L  O  P M  E  N T',0,'b');
		
		$this->SetTextColor(255,255,255);
		$this->GRID['font_size']= 13.2;
		$this->leftText(7.37,1.6,'1st Semester',0,'b');
		
		$this->GRID['font_size']= 12;
		$this->SetTextColor(242,174,153);
		$this->leftText(11.8,1.6,'2nd Semester',0,'b');
		
		$this->GRID['font_size']= 12;
		$this->SetTextColor(0,0,0);
		$this->leftText(11.8,1.6,'2nd Semester',0,'b');
		$this->GRID['font_size']= 10;
		$this->RotateText(8.3,5,'Very Good',90,'b');
		$this->RotateText(9.6,5,'Satisfactory',90,'b');
		$this->RotateText(10.6,5,'Needs',90,'b');
		$this->RotateText(11,5,'Improvement',90,'b');

		$this->RotateText(12.7,5,'Very Good',90,'b');
		$this->RotateText(13.9,5,'Satisfactory',90,'b');
		$this->RotateText(14.9,5,'Needs',90,'b');
		$this->RotateText(15.3,5,'Improvement',90,'b');
		
		$this->GRID['font_size']= 9;
		$this->leftText(.8,5.75,'I speak in a clear voice.',0,'b');
		$this->leftText(.8,6.56,'I talk easily befre the group.',0,'b');
		$this->leftText(.8,7.3,'I know my name when i see it.',0,'b');
		$this->leftText(.8,8.09,'I can print my name.',0,'b');
		$this->leftText(.8,8.85,'I am good listener.',0,'b');
		$this->leftText(.8,9.6,'I am interested in numbers.',0,'b');
		$this->leftText(.8,11.15,'I recognize numbers in Calendars.',0,'b');
		$this->leftText(.8,12.7,'I know my colors.',0,'b');
		$this->leftText(.8,13.5,'I use art materials correctly.',0,'b');
		$this->leftText(.8,14.3,'I can recognize sounds of letters.',0,'b');
		$this->leftText(.8,15,'I enjoy singing.',0,'b');
		$this->leftText(.8,15.8,'I show good response to rhythm.',0,'b');
		
		$this->GRID['font_size']= 8;
		$this->leftText(.8,10.4,'I understand simple terms in Math',0,'b');
		$this->leftText(.8,11.9,'I am interested in things about me.',0,'b');
		
		
		
	}
	
	function end(){
		$metrics = array(
			'base_x'=> 0.252,
			'base_y'=> 6.535,
			'width'=>  4.998,
			'height'=> 1.542,
			'cols'=> 16,
			'rows'=> 4,
		);
		$this->section($metrics);
		$this->SetFillColor(193,193,193);
		$this->DrawBox(7.3,.2,1.2,.61,'null');
		$this->GRID['font_size']= 9;
		$this->DrawBox(3.3,.1,1.1,.6,'null');
		$this->leftText(.5,.5,'Check Marks',0,'b');
		$this->leftText(4.7,.5,'Indicate Ratings',0,'b');
		
		
	}
	//-----------------------  BACK -------------------------- //
	
	
	
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
	