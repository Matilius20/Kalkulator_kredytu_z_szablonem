{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=content}
      				
      			            
<div class="container 50%">						                 
    <form class="pure-form pure-form-stacked" action="{$conf->action_root}calcCompute" method="post">                   
        <fieldset>                      
            <div>                          
                <br>	                         
                <div>								                             
                    <label for = "Loan"> Kwota kredytu <br> </label>                                                                                                           
                    <input id = "Loan" type = "text" name = "Loan"  value="{$form->Loan}" />										                          
                </div>							                         
                <br>							                        
                <div>								                                                                      
                    <label for = "Years"> Ilość lat <br> </label>                                                                                                                                                                              
                    <input id = "Years" type = "text" name = "Years"  value="{$form->Years}" />							                          
                </div>							                         
                <br>							                          
                <label for = "Interest"> Oprocentowanie <br> </label>                                                                                                                                             
                <input id = "Interest" type = "text" name = "Interest"  value="{$form->Interest}" />								                      
            </div>							                     
            <br>							                     
            <div class="12u">								                          
                <ul class="actions">								                              
                    <center><li><input type="submit" class= "special big" value="Oblicz miesięczną ratę" /></li></center>								                          
                </ul>                                                         	                      
            </div>                   
        </fieldset>                  
    </form>						              
</div>



<div>
                                      
   {if $msgs->isError()}	     
  <h1>Wystąpiły błędy: </h1>	
   <ol class="err">            
       {foreach  $msgs->getErrors() as $err}	
       {strip}              
       <li>{$err}</li>	
       {/strip}		
       {/foreach}		
   </ol>	
   {/if}

	



{if isset($rate->rate)}
<h1>Rata miesięczna wynosi</h1>	      
<p class="res">            
    {$rate->rate}       
</p>
{/if}					
           	
</div>
		
{/block}	



 