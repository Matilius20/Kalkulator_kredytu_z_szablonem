<?php
/* Smarty version 3.1.39, created on 2021-03-10 19:09:38
  from 'C:\xampp\htdocs\Kalkulator_kredytu_z_szablonem\app\calc_credit.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60490b62043fc1_13228189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25e4aaf24493d177725b45757a6c40805b61bd76' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_kredytu_z_szablonem\\app\\calc_credit.html',
      1 => 1615399162,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60490b62043fc1_13228189 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195178414960490b62034043_90790148', 'content');
?>
	



 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_195178414960490b62034043_90790148 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_195178414960490b62034043_90790148',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      				
      			            
<div class="container 50%">						                 
    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_credit.php" method="post">                   
        <fieldset>                      
            <div>                          
                <br>	                         
                <div>								                             
                    <label for = "id_Loan"> Kwota kredytu <br> </label>                                                                                                           
                    <input id = "id_Loan" type = "text" name = "Loan"  value="<?php echo $_smarty_tpl->tpl_vars['Loan']->value;?>
" />										                          
                </div>							                         
                <br>							                        
                <div>								                                                                      
                    <label for = "id_Years"> Ilość lat <br> </label>                                                                                                                                                                              
                    <input id = "id_Years" type = "text" name = "Years"  value="<?php echo $_smarty_tpl->tpl_vars['Years']->value;?>
" />							                          
                </div>							                         
                <br>							                          
                <label for = "id_Interest"> Oprocentowanie <br> </label>                                                                                                                                             
                <input id = "id_Interest" type = "text" name = "Interest"  value="<?php echo $_smarty_tpl->tpl_vars['Interest']->value;?>
" />								                      
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
                                      
   <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>	
   <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>     
  <h1>Wystąpiły błędy: </h1>	
   <ol class="err">            
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>	
       <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>		
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
   </ol>	
   <?php }
}?>
	



<?php if ((isset($_smarty_tpl->tpl_vars['rate']->value))) {?>
<h1>Rata miesięczna wynosi</h1>	      
<p class="res">            
    <?php echo $_smarty_tpl->tpl_vars['rate']->value;?>
       
</p>
<?php }?>					
           	
</div>
		
<?php
}
}
/* {/block 'content'} */
}
