<?php

require_once dirname(__FILE__).'/../config.php';

require_once $conf->root_path.'/app/CalcCreditCtrl.php';

$ctrl = new CalcCreditCtrl();
$ctrl->process();
	
	
	


