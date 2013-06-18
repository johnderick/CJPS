<?php
App::import('Vendor','collection_report');
$report= new revenuesReport;
$report->hdr();
//$report->tbl;
$report->output();
?>