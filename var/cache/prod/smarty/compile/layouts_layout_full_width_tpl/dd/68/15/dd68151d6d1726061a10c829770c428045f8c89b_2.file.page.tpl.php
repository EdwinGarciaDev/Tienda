<?php
/* Smarty version 3.1.33, created on 2020-09-10 21:08:00
  from 'C:\xampp\htdocs\Tienda\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5adc00d77070_93461730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd68151d6d1726061a10c829770c428045f8c89b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda\\themes\\classic\\templates\\page.tpl',
      1 => 1599787965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5adc00d77070_93461730 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2308205315f5adc00d6f5b2_30973755', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_21399351225f5adc00d70078_75909377 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_17908731315f5adc00d6fac6_34707977 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21399351225f5adc00d70078_75909377', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16979956455f5adc00d752c8_29681599 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_5255742455f5adc00d758a1_68786505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_7913802075f5adc00d74e26_40980612 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16979956455f5adc00d752c8_29681599', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5255742455f5adc00d758a1_68786505', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_9932812085f5adc00d76563_57691438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_3707220655f5adc00d76166_32295144 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9932812085f5adc00d76563_57691438', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2308205315f5adc00d6f5b2_30973755 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2308205315f5adc00d6f5b2_30973755',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_17908731315f5adc00d6fac6_34707977',
  ),
  'page_title' => 
  array (
    0 => 'Block_21399351225f5adc00d70078_75909377',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_7913802075f5adc00d74e26_40980612',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16979956455f5adc00d752c8_29681599',
  ),
  'page_content' => 
  array (
    0 => 'Block_5255742455f5adc00d758a1_68786505',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3707220655f5adc00d76166_32295144',
  ),
  'page_footer' => 
  array (
    0 => 'Block_9932812085f5adc00d76563_57691438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17908731315f5adc00d6fac6_34707977', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7913802075f5adc00d74e26_40980612', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3707220655f5adc00d76166_32295144', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
