<?php
/* Smarty version 4.3.4, created on 2024-03-27 09:16:50
  from 'C:\xampp\htdocs\alambicpro\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6603e4022c63b4_40451225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2130fb4355b8fb45c429de1fcf9b87bb2507cd31' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alambicpro\\themes\\classic\\templates\\index.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6603e4022c63b4_40451225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9541335516603e4022423a5_28030413', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_15858219976603e4022437c7_91109237 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19721545316603e402245412_76259669 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_2404003226603e402244e87_28557104 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19721545316603e402245412_76259669', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9541335516603e4022423a5_28030413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_9541335516603e4022423a5_28030413',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_15858219976603e4022437c7_91109237',
  ),
  'page_content' => 
  array (
    0 => 'Block_2404003226603e402244e87_28557104',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19721545316603e402245412_76259669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15858219976603e4022437c7_91109237', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2404003226603e402244e87_28557104', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
