<?php namespace app\controllers;

use app\forms\CalcCreditForm;
use app\transfer\CalcCreditResult;

class CalcCreditCtrl {

	private $form;   
	private $rate; 

	
	public function __construct(){
	
		$this->form = new CalcCreditForm();
		$this->rate = new CalcCreditResult();
	}
	
	
	public function getParams(){
		$this->form->Loan = getFromRequest('Loan');
		$this->form->Years = getFromRequest('Years');
		$this->form->Interest = getFromRequest('Interest');
	}
	
	
	public function validate() {
		if (! (isset ( $this->form->Loan ) && isset ( $this->form->Years ) && isset ( $this->form->Interest ))) {
			return false;
		}
		
		if ($this->form->Loan == "") {
			getMessages()->addError('Nie podano kowty kredytu');
		}
		if ($this->form->Years == "") {
			getMessages()->addError('Nie podano lat');
		}
                if ($this->form->Interest == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
               
		
		if (! getMessages()->isError()) {
			
			if (! is_numeric ( $this->form->Loan )) {
				getMessages()->addError('Kwota kredytu nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->Years )) {
				getMessages()->addError('Ilość lat nie jest liczbą');
			}
                        
                        if (! is_numeric ( $this->form->Interest )) {
				getMessages()->addError('Oprocentowanie nie jest liczbą');
			}
                                            
		}
		
		return ! getMessages()->isError();
	}
	
	
	public function action_calcCompute(){

		$this->getParams();
		
		if ($this->validate()) {
				
		      
			$this->form->Loan = intval($this->form->Loan);
			$this->form->Years = intval($this->form->Years);
			$this->form->Interest = floatval($this->form->Interest);
                        
		        $this->rate->rate = $this->form->Loan / ($this->form->Years * 12) * (1.0 + $this->form->Interest / 100);
                        
                        getMessages()->addInfo('Rata miesięczna została policzona.');
			
                        try{
                            $database = new \Medoo\Medoo([
	 	
                                'database_type' => 'mysql',
                                'database_name' => 'Kredyt',	
                                'server' => 'localhost',	
                                'username' => 'root',                                                              
                                'password' => '',	
                                'charset' => 'utf8',	
                                'collation' => 'utf8_polish_ci',	
                                'port' => 3306,
                                'option' => [		
                                    \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                                    ]
                        ]);
 
 

                            $database->insert("wynik", [	
                                "kwota" => $this->form->Loan,	
                                "lata" => $this->form->Years,
                                "oprocentowanie" => $this->form->Interest,
                                "rata"=> $this->rate->rate,
                                
                                ]);
                            
                            
                        } catch (\PDOException $ex) {
                            getMessages()->addError("DB Error: ".$ex->getMessage());

                        }
			
		}
		
		$this->generateView();
	}
        
        public function action_calcShow(){                    
            getMessages()->addInfo('Witaj w kalkulatorze kredytu.');         
            $this->generateView();
	}
        
	
	
	
	public function generateView(){          
            
                getSmarty()->assign('user',unserialize($_SESSION['user']));           
         				
		getSmarty()->assign('page_title','Kalkulator kredytu');
		getSmarty()->assign('page_description','Oblicz swoją miesieczną ratę');
	
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('rate',$this->rate);
		
		getSmarty()->display('CalcCreditView.tpl'); 
	}
}









