<?php
require('formsheet.php');
class CheckReport extends Formsheet{
	protected static $_width = 7.93;
	protected static $_height = 3.02;
	protected static $_unit = 'in';
	protected static $_orient = 'l';	
	protected static $_available_line = 86;	
	protected static $_curr_page = 1;
	protected static $_total_account = 0;
	protected static $_allot_subjects = 15;
	protected static $_currpage = 1;	
	
	function CheckReport($data=null){
		$this->data =$data; 
		$this->showLines = !true;
		$this->FPDF(CheckReport::$_orient, CheckReport::$_unit,array(CheckReport::$_width,CheckReport::$_height));
		$this->createSheet();
	}
	
	function hdr($data){
		$metrics = array(
			'base_x'=> 0.1,
			'base_y'=> 0.1,
			'width'=> 7.93,
			'height'=> 1,
			'cols'=> 45,
			'rows'=>5,	
		);
		$this->section($metrics);
		$this->DrawImage(.4,6.62,.56,.527,'../CJPS/ptc.png');
		$this->GRID['font_size']=5;	
		$y = .5;
		$this->leftText(.6,$y,'ACCOUNT No.',0,'b');
		$this->leftText(10.6,$y,'ACCOUNT NAME',0,'b');
		$this->leftText(34.6,$y,'CHECK No.',0,'b');
		$this->leftText(40.9,$y++,'R/T No.',0,'b');
		
		
		$y=4;
		$this->GRID['font_size']=5;	
		//$this->RotateText(.35,8.5,'DOCUMENTARY STAMPS PAID',90,'b');
		$this->GRID['font_size']=9;	
		$this->leftText(.6,$y,'PAY TO THE',0,'b');
		$this->leftText(.6,4.5,' ORDER  OF',0,'b');
		$this->leftText(.6,6.3,' PESOS',0,'b');
		$this->leftText(33.3,4.5,'P',0,'b');
		$this->GRID['font_size']=13;	
		$this->leftText(3.37,8,' PHILTRUST BANK',0,'b');
		$this->GRID['font_size']=7.9;	
		$this->leftText(3.7,8.7,'PHILIPPINE TRUST COMPANY',0,'');
		$this->GRID['font_size']=6.5;	
		$this->leftText(5.7,9.3,'A UNIVERSAL BANK',0,'');
		$this->GRID['font_size']=6.8;	
		$this->leftText(3.9,10,'STA. CRUZ BRANCH',0,'');
		$this->leftText(3.9,10.4,'G/MANILA  CLEARING',0,'');
		$this->leftText(3.9,10.9,'PLAZA LACSON, STA. CRUZ MLA.',0,'');
		$this->GRID['font_size']=20.4;
		$this->SetTextColor(108,105,105);
		$this->leftText(30,7.9,'0011-4000017-6',0,'b');
		$this->Drawline(3,'h',array(28,12));
		$this->Drawline(4.5,'h',array(5.2,28));
		$this->Drawline(4.5,'h',array(34,8.8));
		$this->Drawline(6.4,'h',array(3.3,39.5));
		$this->Drawline(10.5,'h',array(18.3,22));
		
		$this->GRID['font_size']=12;	
		$this->SetTextColor(0,0,0);
		$this->leftText(.6,1.5,$data['Account_no'],0,'bu');
		$this->leftText(31,1.4,$data['Check_no'],0,'bu');
		$this->GRID['font_size']=7.27;	
		$this->leftText(9.5,1.4,$data['Account_name'],0,'b');
		$this->GRID['font_size']=8.8;
		$this->leftText(40.8,1.4,$data['RT_no'],0,'b');
		$this->leftText(5.5,4.2,$data['Order'],0,'b');
		$this->leftText(35,4.2,$data['Pesos'],0,'b');
		$this->leftText(4,6.2,$this->amountToWords($data['Pesos']),0,'b');

		
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
		//$this->DrawImage(0,0,7.93,3.02,'../CJPS/check.jpg');
	} 
}	
?>
	