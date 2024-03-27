<?php
/* Smarty version 4.3.4, created on 2024-03-26 14:18:17
  from 'C:\xampp\htdocs\alambic\adminalambicpro\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6602d929e7e685_02848687',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b304f19c9f126d34e0956b596720d7295751be5f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alambic\\adminalambicpro\\themes\\new-theme\\template\\content.tpl',
      1 => 1710943397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6602d929e7e685_02848687 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
