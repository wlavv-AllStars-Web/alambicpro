<?php
/* Smarty version 4.3.4, created on 2024-03-27 09:16:51
  from 'C:\xampp\htdocs\alambicpro\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6603e40343baf3_34594469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac8465a9f8b3c2ba817b2063bfc5951a28b6a33' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alambicpro\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6603e40343baf3_34594469 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\alambicpro\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\ea\\c8\\46\\eac8465a9f8b3c2ba817b2063bfc5951a28b6a33_2.file.helpers.tpl.php',
    'uid' => 'eac8465a9f8b3c2ba817b2063bfc5951a28b6a33',
    'call_name' => 'smarty_template_function_renderLogo_5026668046603e4033ccdd3_53310732',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_5026668046603e4033ccdd3_53310732 */
if (!function_exists('smarty_template_function_renderLogo_5026668046603e4033ccdd3_53310732')) {
function smarty_template_function_renderLogo_5026668046603e4033ccdd3_53310732(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_5026668046603e4033ccdd3_53310732 */
}
