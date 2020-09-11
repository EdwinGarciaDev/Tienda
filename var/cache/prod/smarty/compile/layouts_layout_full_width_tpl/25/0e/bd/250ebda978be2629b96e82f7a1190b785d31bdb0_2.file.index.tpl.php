<?php
/* Smarty version 3.1.33, created on 2020-09-10 21:08:00
  from 'C:\xampp\htdocs\Tienda\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f5adc00d57f51_60974366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '250ebda978be2629b96e82f7a1190b785d31bdb0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda\\themes\\classic\\templates\\index.tpl',
      1 => 1599787965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f5adc00d57f51_60974366 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15786266255f5adc00d55f17_17795131', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20407599125f5adc00d563b0_77719935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_552633115f5adc00d56e70_31072849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_16825045875f5adc00d56a44_27207947 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_552633115f5adc00d56e70_31072849', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15786266255f5adc00d55f17_17795131 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15786266255f5adc00d55f17_17795131',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20407599125f5adc00d563b0_77719935',
  ),
  'page_content' => 
  array (
    0 => 'Block_16825045875f5adc00d56a44_27207947',
  ),
  'hook_home' => 
  array (
    0 => 'Block_552633115f5adc00d56e70_31072849',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20407599125f5adc00d563b0_77719935', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16825045875f5adc00d56a44_27207947', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
