<?php
/* Smarty version 3.1.39, created on 2021-03-10 19:06:06
  from 'C:\xampp\htdocs\Kalkulator_kredytu_smarty\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60490a8e445236_81179123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '11d881b119c9834cf8238eb49f1fde3e6068fef3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_kredytu_smarty\\templates\\main.html',
      1 => 1615399547,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60490a8e445236_81179123 (Smarty_Internal_Template $_smarty_tpl) {
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
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/skel.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/css/style.css" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
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
                    <h2><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_title']->value)===null||$tmp==='' ? "Tytuł domyślny" : $tmp);?>
</h2>			                      
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_118948633860490a8e4448a7_14586130', 'content');
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
class Block_118948633860490a8e4448a7_14586130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_118948633860490a8e4448a7_14586130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}