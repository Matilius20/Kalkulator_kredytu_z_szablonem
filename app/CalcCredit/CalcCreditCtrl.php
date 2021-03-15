<?php

require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.php';
require_once $conf->root_path.'/app/CalcCredit/CalcCreditForm.php';
require_once $conf->root_path.'/app/CalcCredit/CalcCreditResult.php';


class CalcCreditCtrl{
    	   
    private $msgs;   	
    private $form;   	
    private $rate; 

	
    public function __construct(){
		                              
        $this->msgs = new Messages();		          
        $this->form = new CalcCreditForm();		          
        $this->rate = new CalcCreditResult();
      
    }
	
        
		
    public function getParams(){
        
                                  
        $this->form->Loan = isset($_REQUEST ['Loan']) ? $_REQUEST ['Loan'] : null;		           
        $this->form->Years = isset($_REQUEST ['Years']) ? $_REQUEST ['Years'] : null;		           
        $this->form->Interest = isset($_REQUEST ['Interest']) ? $_REQUEST ['Interest'] : null;
               
    }
        
	
		
    public function validate(){
				
        
        if (! (isset ( $this->form->Loan ) && isset ( $this->form->Years ) && isset ( $this->form->Interest ))){		                             
            return false;                                   
        }
				
        if ($this->form->Loan == ""){			
            $this->msgs->addError('Nie podano kwoty kredytu');                      
        }
                      
        if ($this->form->Years == ""){           			
            $this->msgs->addError('Nie podano lat');
		                       
        }
                
        if ($this->form->Interest == ""){			
            $this->msgs->addError('Nie podano oprocentowania');		          
        }
		
				
        if (! $this->msgs->isError()){
									          
            if (! is_numeric ( $this->form->Loan )){              				
                $this->msgs->addError('Kwota kredytu nie jest liczbą');               
            }
            
            if (! is_numeric ( $this->form->Years )){				
                $this->msgs->addError('Ilość lat nie jest liczbą');			               
            }    
            
            if (! is_numeric ($this->form->Interest)) {			
                $this->msgs->addError('Oprocentowanie nie jest liczbą');
	           
                
            }
		
            
            }
		
		return ! $this->msgs->isError();
	
                
           }
	
		
            public function process(){
		
                $this->getparams();
				
                if ($this->validate()){
				
						
                    $this->form->Loan = intval($this->form->Loan);			
                    $this->form->Years = intval($this->form->Years);			
                    $this->form->Interest = floatval($this->form->Interest);
				
		
                    $this->rate->rate = $this->form->Loan / ($this->form->Years * 12) * (1.0 + $this->form->Interest / 100);
			
			
		}
		
		$this->generateView();
	}
	
		
       
        public function generateView(){		
            
            global $conf;
				
            $smarty = new Smarty();		
            $smarty->assign('conf',$conf);
				
            $smarty->assign('page_title','Kalkulator kredytu');		
            $smarty->assign('page_description','Oblicz swoją miesieczną ratę');
		
				
			
            $smarty->assign('msgs',$this->msgs);		
            $smarty->assign('form',$this->form);		
            $smarty->assign('rate',$this->rate);
				
            $smarty->display($conf->root_path.'/app/CalcCredit/CalcCreditView.tpl');
	}
}














