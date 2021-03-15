<?php
/* Smarty version 3.1.39, created on 2021-03-15 16:58:13
  from 'C:\xampp\htdocs\Kalkulator_kredytu_z_szablonem\app\CalcCredit\CalcCreditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604f84150ce3f6_20761112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '322fb7c05e417580ad3ccffebabee22c817250fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_kredytu_z_szablonem\\app\\CalcCredit\\CalcCreditView.tpl',
      1 => 1615823617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604f84150ce3f6_20761112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1986711431604f84150babe1_14764496', 'content');
?>
	



 <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'content'} */
class Block_1986711431604f84150babe1_14764496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1986711431604f84150babe1_14764496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      				
      			            
<div class="container 50%">						                 
    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">                   
        <fieldset>                      
            <div>                          
                <br>	                         
                <div>								                             
                    <label for = "Loan"> Kwota kredytu <br> </label>                                                                                                           
                    <input id = "Loan" type = "text" name = "Loan"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Loan;?>
" />										                          
                </div>							                         
                <br>							                        
                <div>								                                                                      
                    <label for = "Years"> Ilość lat <br> </label>                                                                                                                                                                              
                    <input id = "Years" type = "text" name = "Years"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Years;?>
" />							                          
                </div>							                         
                <br>							                          
                <label for = "Interest"> Oprocentowanie <br> </label>                                                                                                                                             
                <input id = "Interest" type = "text" name = "Interest"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Interest;?>
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
                                      
   <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>	     
  <h1>Wystąpiły błędy: </h1>	
   <ol class="err">            
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>	
       <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>		
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>		
   </ol>	
   <?php }?>

	



<?php if ((isset($_smarty_tpl->tpl_vars['rate']->value->rate))) {?>
<h1>Rata miesięczna wynosi</h1>	      
<p class="res">            
    <?php echo $_smarty_tpl->tpl_vars['rate']->value->rate;?>
       
</p>
<?php }?>					
           	
</div>
		
<?php
}
}
/* {/block 'content'} */
}
