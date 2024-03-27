<?php
/* Smarty version 4.3.4, created on 2024-03-26 14:18:09
  from 'C:\xampp\htdocs\alambic\adminalambicpro\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6602d921e18db0_75305649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '636827d89ee5c2e477fd706aba5c7592ed0ca1ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alambic\\adminalambicpro\\themes\\default\\template\\content.tpl',
      1 => 1710943397,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6602d921e18db0_75305649 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
