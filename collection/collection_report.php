<?php
require('formsheet.php');
class CollectReport extends Formsheet{
	protected static $_width = 8.5;
	protected static $_height = 11;
	protected static $_unit = 'in';
	protected static $_orient = 'p';	
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
	
	function hdr(){
		$metrics = array(
			'base_x'=> 0.3,
			'base_y'=> 0.3,
			'width'=> 7.9,
			'height'=> 1,
			'cols'=> 45,
			'rows'=>5,	
		);
		$this->section($metrics);
		$this->GRID['font_size']=15;	
		$this->DrawImage(12.5,15,3.5,3.5,'../webroot/img/trademarks/school_logo.jpg');
		$y = 1;
		$this->centerText(0,$y++,'Philippine College of Criminology',45,'b');
		$this->GRID['font_size']=9;	
		$this->centerText(0,$y++,'Manila, Philippines',45,'');
		$this->GRID['font_size']=12;
		$y ++;
		$this->centerText(0,$y++,'Collection Summary',45,'b');
		$this->DrawLine(3.2,'h',array(0,45));
		$this->DrawLine(4.2,'h',array(0,45));
		
		$this->GRID['font_size']=9;
	}
	
	function debit($data){
		$metrics = array(
			'base_x'=> 0.3,
			'base_y'=> 1.4,
			'width'=> 7.9,
			'height'=> 1,
			'cols'=> 45,
			'rows'=>5,	
		);
		$this->section($metrics);
		$this->GRID['font_size']=12;
		$y = 1;
		$this->centerText(0,$y,'DEBIT',5,'b');
		$this->centerText(11,$y,'Total',11,'b');
		$this->centerText(22,$y,'January',11,'b');
		$this->centerText(33,$y++,'February',11,'b');
		
		$y = 2.5;
		$this->GRID['font_size']=11;
		$this->centerText(11,$y++,$data['PTC_CA']['Total'],11,'');
		$this->centerText(11,$y++,$data['CBC_CA']['Total'],11,'');
		$this->centerText(11,$y++,'',11,'');
		$this->centerText(11,$y,$data['CBC_CA']['Total'] + $data['PTC_CA']['Total'],11,'b');
		$y = 2.5;
		$this->centerText(22,$y++,$data['PTC_CA']['January'],11,'');
		$this->centerText(22,$y++,$data['CBC_CA']['January'],11,'');
		$this->centerText(22,$y++,'',11,'');		
		$this->centerText(22,$y,$data['CBC_CA']['January'] + $data['PTC_CA']['January'],11,'b');
		$y = 2.5;
		$this->centerText(33,$y++,$data['PTC_CA']['February'],11,'');
		$this->centerText(33,$y++,$data['CBC_CA']['February'],11,'');
		$this->Drawline($y,'h',array(15,28));
		$this->centerText(33,$y++,'',11,'');
		$this->centerText(33,$y++,$data['CBC_CA']['February'] + $data['PTC_CA']['February'],11,'b');
		$this->Drawline($y,'h',array(15,28));
		$y = 2.5;
		$this->GRID['font_size']=11;
		$this->leftText(1,$y++,'PTC-CA',0,'');	
		$this->leftText(1,$y++,'CBC-CA',0,'');
		$this->leftText(1,$y++,'',0,'');
		$this->leftText(1,$y++,'Total',0,'b');
		
		$y = 10;
		$this->centerText(0,$y++,'CREDIT',5,'b');
		$this->centerText(0,$y++,'',5,'b');
		$this->GRID['font_size']=11;
		$this->leftText(1,$y++,'Tuition & Other Fees',0,'');	
		$this->leftText(1,$y++,'Miscellanueos Receipt',0,'');
		$this->leftText(1,$y++,'Alumni Fee',0,'');
		$this->leftText(1,$y++,'Review Fees',0,'');
		$this->leftText(1,$y++,'Accounts Payable',0,'');
		$this->leftText(1,$y++,'Telephone, Telegrams, & Postage',0,'');
		$this->leftText(1,$y++,'Graduation',0,'');
		$this->leftText(1,$y++,'School',0,'');
		$this->leftText(1,$y++,'School ID',0,'');
		$this->leftText(1,$y++,'Textbook',0,'');
		$this->leftText(1,$y++,'Training & Development',0,'');
		$this->leftText(1,$y++,'Doc. Stamp',0,'');
		$this->leftText(1,$y++,'Office Salary Loan',0,'');
		$this->leftText(1,$y++,'Lights & Water',0,'');
		$this->leftText(1,$y++,'Leasehold Improvement',0,'');
		$this->leftText(1,$y++,'Athletics',0,'');
			$this->leftText(1,$y++,'',0,'');
		$this->leftText(1,$y++,'Total',0,'b');
			$this->leftText(1,$y++,'',0,'');
		$this->leftText(1,$y++,'Difference',0,'b');
		
		$y = 12;
		$total = $data['Tuition']['Total'] + $data['Misc']['Total'] + $data['Alumni']['Total'] + $data['Review']['Total'] + $data['Accounts']['Total'] + $data['Tel']['Total'] + $data['Grad']['Total'] + $data['Sch_id']['Total'] + $data['Textbook']['Total'] + $data['Training']['Total'] + $data['Doc']['Total'] + $data['Office']['Total'] + $data['Lights']['Total'] + $data['Lease']['Total'] + $data['Athletics']['Total'];
		$this->rightText(17.5,$y++,$data['Tuition']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Misc']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Alumni']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Review']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Accounts']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Tel']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Grad']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Sch_id']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['School']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Textbook']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Training']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Doc']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Office']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Lights']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Lease']['Total'],0,'');
		$this->rightText(17.5,$y++,$data['Athletics']['Total'],0,'');
		$this->rightText(17.5,$y++,'',0,'');
		$this->rightText(17.5,$y++,$total,0,'b');
		$this->rightText(17.5,$y++,'',0,'');
		$this->rightText(17.5,$y++,$total,0,'b');
		
		$y = 12;
		$total = $data['Tuition']['January'] + $data['Misc']['January'] + $data['Alumni']['January'] + $data['Review']['January'] + $data['Accounts']['January'] + $data['Tel']['January'] + $data['Grad']['January'] + $data['Sch_id']['January'] + $data['Textbook']['January'] + $data['Training']['January'] + $data['Doc']['January'] + $data['Office']['January'] + $data['Lights']['January'] + $data['Lease']['January'] + $data['Athletics']['January'];
		$this->rightText(27.8,$y++,$data['Tuition']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Misc']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Alumni']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Review']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Accounts']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Tel']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Grad']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Sch_id']['January'],0,'');
		$this->rightText(27.8,$y++,$data['School']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Textbook']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Training']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Doc']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Office']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Lights']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Lease']['January'],0,'');
		$this->rightText(27.8,$y++,$data['Athletics']['January'],0,'');
		$this->rightText(27.8,$y++,'',0,'');
		$this->rightText(27.8,$y++,$total,0,'b');
		$this->rightText(27.8,$y++,'',0,'');
		$this->rightText(27.8,$y++,$total,0,'b');
		
		$y = 12;
		$total = $data['Tuition']['February'] + $data['Misc']['February'] + $data['Alumni']['February'] + $data['Review']['February'] + $data['Accounts']['February'] + $data['Tel']['February'] + $data['Grad']['February'] + $data['Sch_id']['February'] + $data['Textbook']['February'] + $data['Training']['February'] + $data['Doc']['February'] + $data['Office']['February'] + $data['Lights']['February'] + $data['Lease']['February'] + $data['Athletics']['February'];
		
		$this->rightText(38.9,$y++,$data['Tuition']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Misc']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Alumni']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Review']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Accounts']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Tel']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Grad']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Sch_id']['February'],0,'');
		$this->rightText(38.9,$y++,$data['School']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Textbook']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Training']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Doc']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Office']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Lights']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Lease']['February'],0,'');
		$this->rightText(38.9,$y++,$data['Athletics']['February'],0,'');
		$this->Drawline($y,'h',array(15,28));
		$this->rightText(38.9,$y++,'',0,'');
		$this->rightText(38.9,$y++,$total,0,'b');
		$this->Drawline($y,'h',array(15,28));
		$this->rightText(38.9,$y++,'',0,'');
		$this->rightText(38.9,$y++,$total,0,'b');
		
		
	}
	
}	
?>
	