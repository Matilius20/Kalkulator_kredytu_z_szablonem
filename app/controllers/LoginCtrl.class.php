<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl{
	private $form;
	
	public function __construct(){
		$this->form = new LoginForm();
	}
        
        
	
	public function getParams(){

		$this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
	}
        
        
	
	public function validate() {
            
		if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
			return false;
		}
                
		if (! getMessages()->isError ()) {
                    
		
		if ($this->form->login == "") {
				getMessages()->addError ( 'Nie podano nazwy użytkownika' );
		}
                
		if ($this->form->pass == "") {
				getMessages()->addError ( 'Nie podano hasła' );
		}
		}

		if ( !getMessages()->isError() ) {

			if ($this->form->login == "admin" && $this->form->pass == "123") {
				$user = new User($this->form->login, 'admin');
				$_SESSION['user'] = serialize($user);
				addRole($user->role);

			} else if ($this->form->login == "user" && $this->form->pass == "456") {
				$user = new User($this->form->login, 'user');
				$_SESSION['user'] = serialize($user);
				addRole($user->role);

			} else {
				getMessages()->addError('Niepoprawna nazwa użytkownika lub hasło');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	public function doLogin(){

		$this->getParams();
		
		if ($this->validate()){
			header("Location: ".getConf()->app_url."/");
		} else {
			$this->generateView(); 
		}
		
	}
	
	public function doLogout(){
            
		session_destroy();
		
                $this->generateView();		 
	}
	
	public function generateView(){
		
		getSmarty()->assign('page_title','Logowanie');
                getSmarty()->assign('page_description','Zaloguj się do kalkulatora kredytu');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('LoginView.tpl');		
	}
}