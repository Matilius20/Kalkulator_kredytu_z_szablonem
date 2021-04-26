{extends file="main.tpl"}

{block name=content}
    

			                    			            
      			            
<div class="container 50%">						                 
    <form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">                   
        <fieldset>                      
            <div>                          
                <br>	                         
                <div>								                             
                    <label for = "Loan"> Kwota kredytu <br> </label>                                                                                                           
                    <input id = "Loan" type = "text" name = "Loan"  value="{$form->Loan}" >										                          
                </div>							                         
                <br>							                        
                <div>								                                                                      
                    <label for = "Years"> Ilość lat <br> </label>                                                                                                                                                                              
                    <input id = "Years" type = "text" name = "Years"  value="{$form->Years}" >							                          
                </div>							                         
                <br>							                          
                <label for = "Interest"> Oprocentowanie <br> </label>                                                                                                                                             
                <input id = "Interest" type = "text" name = "Interest"  value="{$form->Interest}" >								                      
            </div>							                     
            <br>							                     
            <div class="12u">								                          
                <ul class="actions">								                              
                    <center><li><input type="submit" class= "pure-menu-heading pure-menu-link" value="Oblicz miesięczną ratę" /></li></center>								                          
                </ul>
            </div>                   
        </fieldset>
           <center><a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">Wyloguj</a></center>
           <center><a href="{$conf->action_url}result"  class="pure-menu-heading pure-menu-link">Tabela z wynikami</a></center>	
    </form>						              
</div>


	

{if isset($rate->rate)}
<h1>Rata miesięczna wynosi</h1>	      
<p class="res">            
    {$rate->rate}       
</p>
{/if}					

{include file='messages.tpl'}
		
{/block}




