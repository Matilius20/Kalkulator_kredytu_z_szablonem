<?php
require_once 'ConfigClass.php';

$conf = new Config();

$conf->root_path = dirname(__FILE__);
$conf->server_name = 'localhost';
$conf->server_url = 'http://'.$conf->server_name;
$conf->app_root = '/Kalkulator_kredytu_z_szablonem';
$conf->app_url = $conf->server_url.$conf->app_root;
$conf->action_root = $conf->app_root.'/app/Ctrl.php?action=';
$conf->action_url = $conf->server_url.$conf->action_root;
    
