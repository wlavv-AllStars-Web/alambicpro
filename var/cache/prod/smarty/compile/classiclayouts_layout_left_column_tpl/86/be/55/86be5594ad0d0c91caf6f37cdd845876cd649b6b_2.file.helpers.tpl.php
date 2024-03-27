<?php
/* Smarty version 4.3.4, created on 2024-03-26 14:26:20
  from 'C:\xampp\htdocs\alambic\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6602db0c61cf39_97075480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86be5594ad0d0c91caf6f37cdd845876cd649b6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alambic\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1697815446,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6602db0c61cf39_97075480 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\alambic\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\86\\be\\55\\86be5594ad0d0c91caf6f37cdd845876cd649b6b_2.file.helpers.tpl.php',
    'uid' => '86be5594ad0d0c91caf6f37cdd845876cd649b6b',
    'call_name' => 'smarty_template_function_renderLogo_18918060136602db0c6176b3_43369426',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_18918060136602db0c6176b3_43369426 */
if (!function_exists('smarty_template_function_renderLogo_18918060136602db0c6176b3_43369426')) {
function smarty_template_function_renderLogo_18918060136602db0c6176b3_43369426(Smarty_Internal_Template $_smarty_tpl,$params) {
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
/*/ smarty_template_function_renderLogo_18918060136602db0c6176b3_43369426 */
}
