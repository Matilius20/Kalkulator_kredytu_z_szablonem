<?php
/* Smarty version 3.1.39, created on 2021-04-26 10:39:40
  from 'C:\xampp\htdocs\Kalkulator_kredytu_z_szablonem\app\views\CalcCreditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60867c4c3d45b5_53769087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e9804454b6135b1a4e754ca1d3fa7ef569643c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_kredytu_z_szablonem\\app\\views\\CalcCreditView.tpl',
      1 => 1619426375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_60867c4c3d45b5_53769087 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52978693160867c4c3c49d1_68564611', 'content');
?>





<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_52978693160867c4c3c49d1_68564611 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_52978693160867c4c3c49d1_68564611',
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
" >										                          
                </div>							                         
                <br>							                        
                <div>								                                                                      
                    <label for = "Years"> Ilo???? lat <br> </label>                                                                                                                                                                              
                    <input id = "Years" type = "text" name = "Years"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Years;?>
" >							                          
                </div>							                         
                <br>							                          
                <label for = "Interest"> Oprocentowanie <br> </label>                                                                                                                                             
                <input id = "Interest" type = "text" name = "Interest"  value="<?php echo $_smarty_tpl->tpl_vars['form']->value->Interest;?>
" >								                      
            </div>							                     
            <br>							                     
            <div class="12u">								                          
                <ul class="actions">								                              
                    <center><li><input type="submit" class= "pure-menu-heading pure-menu-link" value="Oblicz miesi??czn?? rat??" /></li></center>								                          
                </ul>
            </div>                   
        </fieldset>
           <center><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">Wyloguj</a></center>
           <center><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
result"  class="pure-menu-heading pure-menu-link">Tabela z wynikami</a></center>	
    </form>						              
</div>


	

<?php if ((isset($_smarty_tpl->tpl_vars['rate']->value->rate))) {?>
<h1>Rata miesi??czna wynosi</h1>	      
<p class="res">            
    <?php echo $_smarty_tpl->tpl_vars['rate']->value->rate;?>
       
</p>
<?php }?>					

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
<?php
}
}
/* {/block 'content'} */
}
