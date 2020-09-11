<?php
/* Smarty version 3.1.33, created on 2020-09-10 21:49:22
  from 'C:\xampp\htdocs\Tienda\admin958yift9f\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5ae5b2372036_34455463',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dec0ac8d778372bac769450a6a160d5a2d9755df' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda\\admin958yift9f\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1599787962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5ae5b2372036_34455463 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
