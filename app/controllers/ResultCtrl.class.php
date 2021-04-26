<?php
namespace app\controllers;
use PDOException;

class ResultCtrl {     
    private $records; 
          public function action_result(){
           
              try {          
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
                
                  
              } catch (\PDOException $ex) {         
                  getMessages() ->addError("DB Error: ".$ex->getMessage());    
                  }
              
                  try{			
                      $this->records = $database->select("wynik", [                                        
                          "kwota",	
                          "lata",	
                          "oprocentowanie",		
                          "rata",
				], );		
                      
                  } catch (PDOException $e){			
                      getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');			
                      if (getConf()->debug) getMessages()->addError($e->getMessage());					                     
                  }	
                      
                  getSmarty()->assign('page_title','Wyniki');               
                  getSmarty()->assign('results',$this->records);  		
                  getSmarty()->display('ResultView.tpl');
}

}