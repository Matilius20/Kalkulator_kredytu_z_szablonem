<?php
/* Smarty version 3.1.39, created on 2021-04-06 13:37:19
  from 'C:\xampp\htdocs\Kalkulator_kredytu_z_szablonem\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606c47ef821451_96206454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e32c05c5b625dd28b622b70d09489e26ef5cfa7a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_kredytu_z_szablonem\\app\\views\\templates\\main.tpl',
      1 => 1617709035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606c47ef821451_96206454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
	<head>
		<meta charset="UTF-8">
		<title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/skel.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style-xlarge.css" />
		<?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/skel.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/skel-layers.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/init.js"><?php echo '</script'; ?>
>
		
	</head>
       
        <body class="landing">           
            <div>			
                <div>				
                    <center><h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h2></center>			                      
                </div>			           
                <div id="three" class="wrapper style3 special">								                                  
                    <header class="major">                                                              
                        <h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
</h2>					                
                    </header>			           
                </div>              
            </div>           
            <div id="app_content" class="content">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_424193414606c47ef8201f5_00945118', 'content');
?>
       
            </div>                  
            <footer id="footer">			                                                                      
                <div class="container">	                                                                     
                    <p>Użyto szablonu: <a href="http://templated.co">TEMPLATED</a>.Wykonał Mateusz Kala</p>  
                </div>			         
            </footer>	
        </body>
</html><?php }
/* {block 'content'} */
class Block_424193414606c47ef8201f5_00945118 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_424193414606c47ef8201f5_00945118',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
