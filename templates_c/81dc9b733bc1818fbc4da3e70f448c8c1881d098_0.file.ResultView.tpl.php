<?php
/* Smarty version 3.1.39, created on 2021-04-26 10:46:51
  from 'C:\xampp\htdocs\Kalkulator_kredytu_z_szablonem\app\views\ResultView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60867dfbd29dd2_36038731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81dc9b733bc1818fbc4da3e70f448c8c1881d098' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Kalkulator_kredytu_z_szablonem\\app\\views\\ResultView.tpl',
      1 => 1619426806,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60867dfbd29dd2_36038731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116550718360867dfbd17674_75671253', 'table');
?>


<?php }
/* {block 'table'} */
class Block_116550718360867dfbd17674_75671253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'table' => 
  array (
    0 => 'Block_116550718360867dfbd17674_75671253',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<table id="tab_result" class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Kwota</th>
		<th>Lata</th>
		<th>Oprocentowanie</th>
		<th>Rata</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["kwota"];?>
</td><td><center><?php echo $_smarty_tpl->tpl_vars['r']->value["lata"];?>
</center></td><td><center><?php echo $_smarty_tpl->tpl_vars['r']->value["oprocentowanie"];?>
</center></td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["rata"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<br>
<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcShow"  class="pure-menu-heading pure-menu-link">Powrót do kalkulatora</a>

<?php
}
}
/* {/block 'table'} */
}
