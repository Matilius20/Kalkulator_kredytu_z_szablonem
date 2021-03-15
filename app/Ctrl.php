<?php

require_once dirname (__FILE__).'/../config.php';


$action = isset ($_REQUEST['action']) ? $_REQUEST['action'] : '';

switch ($action) {
	default :
            
		include_once $conf->root_path.'/app/CalcCredit/CalcCreditCtrl.php';
		$ctrl = new CalcCreditCtrl();
		$ctrl->generateView();
                
	break;
        
	case 'calcCompute' :
            
		include_once $conf->root_path.'/app/CalcCredit/CalcCreditCtrl.php';
		$ctrl = new CalcCreditCtrl();
		$ctrl->process();
                
	break;
	
}



