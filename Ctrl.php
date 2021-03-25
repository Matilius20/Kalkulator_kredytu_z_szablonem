<?php

require_once 'init.php';


switch ($action) {
	default : 
		
		$ctrl = new app\controllers\CalcCreditCtrl();
		$ctrl->generateView ();
                
	break;
	case 'calcCompute' :
	
		$ctrl = new app\controllers\CalcCreditCtrl();
		$ctrl->process ();
                
	break;

}

