<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcShow'); 
getRouter()->setLoginRoute('login'); 

getRouter()->addRoute('calcShow', 'CalcCreditCtrl', ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCreditCtrl', ['user','admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout','LoginCtrl', ['user','admin']);

getRouter()->addRoute('result','ResultCtrl', ['user','admin']);

getRouter()->go();
