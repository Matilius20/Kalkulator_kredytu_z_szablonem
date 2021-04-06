<?php
/* Smarty version 3.1.39, created on 2021-04-06 11:58:28
  from 'C:\xampp\htdocs\Kalkulator_kredytu_z_szablonem\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606c30c4258bb1_49117418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '107e8e08ae7236cf6ac00770115213b55cc983fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_kredytu_z_szablonem\\app\\views\\LoginView.tpl',
      1 => 1617703027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_606c30c4258bb1_49117418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_377038956606c30c42520e7_64835589', 'content');
?>
	
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_377038956606c30c42520e7_64835589 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_377038956606c30c42520e7_64835589',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      				
      			            
<div class="container 50%">						                 
    <form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">                   
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
        <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

         <?php
}
}
/* {/block 'content'} */
}
