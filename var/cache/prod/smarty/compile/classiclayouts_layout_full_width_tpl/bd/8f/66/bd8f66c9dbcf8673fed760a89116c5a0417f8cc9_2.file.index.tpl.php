<?php
/* Smarty version 4.3.4, created on 2024-03-26 14:18:43
  from 'C:\xampp\htdocs\alambic\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6602d9436c2407_21115224',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8f66c9dbcf8673fed760a89116c5a0417f8cc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alambic\\themes\\classic\\templates\\index.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6602d9436c2407_21115224 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19033480406602d9436c0672_85335811', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13980699426602d9436c0b66_04977787 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_7427562736602d9436c1568_43868707 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_6784885966602d9436c1217_84814031 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7427562736602d9436c1568_43868707', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19033480406602d9436c0672_85335811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19033480406602d9436c0672_85335811',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13980699426602d9436c0b66_04977787',
  ),
  'page_content' => 
  array (
    0 => 'Block_6784885966602d9436c1217_84814031',
  ),
  'hook_home' => 
  array (
    0 => 'Block_7427562736602d9436c1568_43868707',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13980699426602d9436c0b66_04977787', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6784885966602d9436c1217_84814031', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
