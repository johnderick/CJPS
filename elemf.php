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
		$this->showLines = !true;
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
		$this->SetFillColor(0,0,0);
		$this->DrawBox(10.5,2,5.7,1.2,'F');
		$this->DrawBox(13.5,.3,2.7,.8,'F');
		
		
		$this->GRID['font_size']= 12;
		$this->SetTextColor(0,0,0);	
		$this->leftText(3.9,2.88,'PUPILS PROGRESS',0,'b');
		$this->DrawImage(0,0,.86,1,'../CJPS/logo.png');
		$this->DrawImage(3.6,0,.78,.5,'../CJPS/cjps.png');
		
		$this->SetTextColor(255,255,255);	
		$this->leftText(10.9,2.88,'REPORT CARD',0,'b');
		$this->GRID['font_size']= 9;
		$this->leftText(13.8,.9,'Form-138',0,'b');
		
		$this->GRID['font_size']= 9;
		$this->SetTextColor(0,0,0);	
		
		$this->leftText(7,1.8,'CHILD JESUS OF PRAGUE SCHOOL',0,'b');
		
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
		$this->DrawBox(.2,.09,3.3,.89,'F'); //pupils
		$this->DrawBox(.2,1.2,3.3,.89,'F'); //grade
		$this->DrawBox(.2,2.3,3.3,.89,'F'); //adviser
		$this->DrawBox(11.4,1.2,.9,.89,'F'); //grade
		
		
		$this->SetFillColor(97,97,97);
		$this->DrawBox(0,.09,.2,.89,'F');
		$this->DrawBox(0,1.2,.2,.89,'F');
		$this->DrawBox(0,2.3,.2,.89,'F');
		$this->DrawBox(0,3.36,16.2,.19,'F');
		
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
	
	function subj(){
		$metrics = array(
			'base_x'=> 0.130,
			'base_y'=> 2.232,
			'width'=> 3.877,
			'height'=> 4.860,
			'cols'=> 16,
			'rows'=> 16,
		);
		$this->section($metrics);
		

		
		
		$this->SetFillColor(193,193,193);
		$this->DrawBox(.2,.7,7.17,.79,'F');
		$this->DrawBox(.2,1.65,7.17,.79,'F');
		$this->DrawBox(.2,2.58,7.17,.79,'F');
			$this->DrawBox(0,3.55,7.37,.79,'F');
			$this->DrawBox(0,4.52,7.37,.79,'F');
			$this->DrawBox(0,8.39,7.37,.79,'F');
			$this->DrawBox(0,9.35,7.37,.79,'F');
			$this->DrawBox(0,10.28,7.37,.79,'F');
		$this->DrawBox(.2,5.5,7.17,.79,'F');
		$this->DrawBox(.2,6.46,7.17,.79,'F');
		$this->DrawBox(.2,7.4,7.17,.79,'F');
		$this->DrawBox(.2,11.25,7.17,.79,'F');
		$this->DrawBox(.2,12.2,7.17,.79,'F');
		$this->DrawBox(.2,13.2,16,.79,'F');
		$this->DrawBox(.2,14.18,16,.79,'F');
		$this->DrawBox(.2,15.1,13.5,.79,'F');
		
		$this->SetFillColor(97,97,97);
		$this->DrawBox(0,.7,.2,.79,'F');
		$this->DrawBox(0,1.65,.2,.79,'F');
		$this->DrawBox(0,2.58,.2,.79,'F');
		$this->DrawBox(0,5.5,.2,.79,'F');
		$this->DrawBox(0,6.46,.2,.79,'F');
		$this->DrawBox(0,7.4,.2,.79,'F');
		$this->DrawBox(0,11.25,.2,.79,'F');
		$this->DrawBox(0,12.2,.2,.79,'F');
		$this->DrawBox(0,13.2,.2,.79,'F');
		$this->DrawBox(0,14.18,.2,.79,'F');
		$this->DrawBox(0,15.1,.2,.79,'F');
		$this->DrawBox(14,15.1,.2,.79,'F');
		$this->DrawBox(0,16,16.2,.19,'F');
		$this->DrawBox(14.34,15,1.88,.8,'null');	//GENERAL AVERAGE
		
		$this->GRID['font_size']=9.5;
		$this->leftText(.4,.4,'Subjects / Grading Periods',0,'b');
		$this->leftText(7.7,.4,'1st',0,'b');
		$this->leftText(9.4,.4,'2nd',0,'b');
		$this->leftText(11,.4,'3rd',0,'b');
		$this->leftText(12.6,.4,'4th',0,'b');
		$this->leftText(14.7,.4,'Ave.',0,'b');
		$this->GRID['font_size']=8.2;
		$this->leftText(.4,1.2,'Christian Living',0,'b');
		$this->leftText(.4,2.17,'Filipino',0,'b');
		$this->leftText(.4,3.15,'English',0,'b');
			$this->leftText(1.2,4.1,'Language and Spelling',0,'b');
			$this->leftText(1.2,5.080,'Reading and Phonics',0,'b');
		$this->leftText(.4,6.058,'Mathematics',0,'b');
		$this->leftText(.4,7,'Science and Health',0,'b');
		$this->leftText(.4,7.99,'Makabayan',0,'b');
			$this->leftText(1.2,8.9,'Sibika at Kultura',0,'b');
			$this->leftText(1.2,9.88,'MSEP',0,'b');	
			$this->leftText(1.2,10.8,'Character Education',0,'b');	
		$this->leftText(.4,11.8,'Computer',0,'b');
		$this->leftText(.4,12.7,'Writing',0,'b');
		$this->GRID['font_size']=9;
		$this->leftText(.4,15.58,'GENERAL AVERAGE',0,'b');
		
		
		for($y=.6; $y<=13; $y+=0.96){
				$this->DrawBox(7.4,$y,1.5,.8,'null');		//1ist
				$this->DrawBox(9.05,$y,1.5,.8,'null');		//2nd
				$this->DrawBox(10.68,$y,1.5,.8,'null');		//3rd
				$this->DrawBox(12.3,$y,1.5,.8,'null');		//4th
				$this->DrawBox(14.34,$y,1.88,.8,'null');	//average
				$this->DrawBox(14,$y,.2,.79,'F');
			}
	}
	
	function footer(){
		$metrics = array(
			'base_x'=> 0.130,
			'base_y'=> 7.154,
			'width'=> 3.877,
			'height'=> 1.658,
			'cols'=> 16,
			'rows'=> 4,
		);
		$this->section($metrics);
		
		$this->SetFillColor(97,97,97);
				$this->DrawBox(0,0.77,.2,.55,'F');
				$this->DrawBox(0,1.48,.2,.55,'F');
				$this->DrawBox(0,2.16,.2,.55,'F');
				$this->SetFillColor(193,193,193);
				$this->DrawBox(.22,.77,2.7,.55,'F');
				$this->DrawBox(.22,1.48,2.7,.55,'F');
				$this->DrawBox(.22,2.16,2.7,.55,'F');
		
		$this->GRID['font_size']= 8;
		$this->SetTextColor(0,0,0);	
		$this->leftText(.4,.45,'Attendance',0,'b');
		$this->GRID['font_size']= 6.7;
		$this->leftText(.4,1.1,'School Days',0,'b');
		$this->leftText(.4,1.9,'Days Present',0,'b');
		$this->leftText(.4,2.59,'Days Tardy',0,'b');

		$this->GRID['font_size']=7;
		
				$this->leftText(15.2,.6,'Total',0,'');
				$this->RotateText(2.9,.6,'______',50,'null');
				$this->RotateText(3.8,.6,'______',50,'null');
				$this->RotateText(3.8,.6,'June',55,'null');
				$this->RotateText(4.8,.6,'July',55,'null');
				$this->RotateText(4.8,.6,'______',50,'null');
				$this->RotateText(5.8,.6,'Aug.',55,'null');
				$this->RotateText(5.8,.6,'______',50,'null');
				$this->RotateText(6.8,.6,'Sept.',55,'null');
				$this->RotateText(6.8,.6,'______',50,'null');
				$this->RotateText(7.7,.6,'Oct.',55,'null');
				$this->RotateText(7.7,.6,'______',50,'null');
				$this->RotateText(8.7,.6,'Nov.',55,'null');
				$this->RotateText(8.7,.6,'______',50,'null');
				$this->RotateText(9.7,.6,'Dec.',55,'null');
				$this->RotateText(9.7,.6,'______',50,'null');
				$this->RotateText(10.7,.6,'Jan.',55,'null');
				$this->RotateText(10.7,.6,'______',50,'null');
				$this->RotateText(11.7,.6,'Feb.',55,'null');
				$this->RotateText(11.7,.6,'______',50,'null');
				$this->RotateText(12.7,.6,'Mar.',55,'null');
				$this->RotateText(12.7,.6,'______',50,'null');
				$this->RotateText(13.7,.6,'Apr.',55,'null');
				$this->RotateText(13.7,.6,'______',50,'null');
				$this->RotateText(14.7,.6,'May.',55,'null');
				$this->RotateText(14.7,.6,'______',50,'null');
				$this->DrawBox(14.8,.74,1.45,.58,'null'); //School Days Total
				$this->DrawBox(14.8,1.4,1.45,.58,'null'); //Days Present Total
				$this->DrawBox(14.8,2.068,1.45,.58,'null'); //Days Tardy Total
					
			for($x=2.94;$x<=14;$x+=0.99){
				$this->DrawBox($x,.74,.8,.58,'null'); //School Days
				$this->DrawBox($x,1.4,.8,.58,'null'); //Days Present
				$this->DrawBox($x,2.068,.8,.58,'null'); //Days Tardy		
			}
			
				$this->SetFillColor(193,193,193);
				$this->DrawBox(0,2.85,10.5,.65,'F');
				$this->SetFillColor(0,0,0);
				$this->DrawBox(10.5,2.85,5.8,.65,'F');
			
				$this->GRID['font_size']= 12;
				$this->SetTextColor(0,0,0);	
				$this->leftText(.5,3.33,'ELEMENTARY DEPARTMENT',0,'b');
				$this->GRID['font_size']= 13;
				$this->SetTextColor(255,255,255);	
				$this->leftText(10.9,3.33,'GRADE 1-3',0,'b');
				
				$this->GRID['font_size']= 8;
				$this->SetTextColor(245,0,0);			
				$this->leftText(.5,3.96,'w  w  w  .   c   h   i   l   d   j   e   s   u   s   o   f   p   r   a   g   u   e   .   c  o  m',0,'b');
				
				
	}
	
	/* function header(){
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
	} */
	
}
?>
	