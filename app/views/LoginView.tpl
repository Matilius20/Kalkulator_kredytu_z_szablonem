{extends file="main.tpl"}

{block name=content}
      				
      			            
<div class="container 50%">						                 
    <form class="pure-form pure-form-stacked" action="{$conf->action_url}login" method="post">                   
        <fieldset>                      
            <div>                          
                <br>	                         
                <div>								                             
                    <label for = "id_login"> Nazwa użytkownika: <br> </label>                                                                                                           
                    <input id = "id_login" type = "text" name = "login">										                          
                </div>							                         
                <br>							                        
                <div>								                                                                      
                    <label for = "id_pass"> Hasło: <br> </label>                                                                                                                                                                              
                    <input id = "id_pass" type = "password" name = "pass">							                          
                </div>							                         
                <br>							                          								                      
            </div>							                     
            <br>							                     
            <div class="12u">								                          
                <ul class="actions">								                              
                    <center><li><input type="submit" class= "special big" value="Zaloguj" /></li></center>								                          
                </ul>                                                         	                      
            </div>                   
        </fieldset>                  
    </form>						              
</div>
        {include file='messages.tpl'}

         {/block}	
