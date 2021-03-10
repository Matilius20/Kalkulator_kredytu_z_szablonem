<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';




function getParams(&$Loan,&$Years,&$Interest){
    
    $Loan = isset($_REQUEST['Loan']) ? $_REQUEST['Loan'] : null;
    $Years = isset ($_REQUEST['Years']) ? $_REQUEST ['Years'] : null;
    $Interest = isset ($_REQUEST['Interest']) ? $_REQUEST ['Interest'] : null;
    
}


function validate(&$Loan,&$Years,&$Interest,&$messages){
    
    if ( ! (isset($Loan) && isset($Years) && isset($Interest))) {
        return false;
    }

if($Loan == ''){
	$messages [] = "Nie podano kwoty kredytu"; 		
}

if($Years == ''){
	$messages [] = "Nie podano lat"; 	
}

if($Interest == ''){
	$messages [] = "Nie podano oprocentowania"; 	
}

if (count ( $messages ) != 0) return false;

	
if (! is_numeric ($Loan)) {
	$messages [] = 'Kwota kredytu nie jest liczbą';
}
	
if (! is_numeric($Years)) {
	$messages [] = 'Ilość lat nie jest liczbą';
}	
	
if (! is_numeric($Interest)) {
	$messages [] = 'Oprocentowanie nie jest liczbą';
}

if (count ( $messages ) != 0) return false;
else return true;

}


function process (&$Loan,&$Years,&$Interest,&$messages,&$rate){

if (empty($messages)){
	
	$Loan = intval($Loan);
	$Years = intval($Years);
	$Interest = floatval($Interest);
	
	$rate = $Loan / ($Years * 12) * (1.0 + $Interest / 100);
        
}
}


$Loan = null;
$Years = null;
$Interest = null;
$rate = null;
$messages = array();


getParams($Loan,$Years,$Interest);
if(validate($Loan, $Years, $Interest, $messages)) {
    process($Loan, $Years, $Interest, $messages, $rate);
}

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytu');
$smarty->assign('page_description','Oblicz swoją miesieczną ratę');



$smarty->assign('Loan',$Loan);
$smarty->assign('Years',$Years);
$smarty->assign('Interest',$Interest);
$smarty->assign('rate',$rate);
$smarty->assign('messages',$messages);



$smarty->display(_ROOT_PATH.'/app/calc_credit.html');



	
	
	


