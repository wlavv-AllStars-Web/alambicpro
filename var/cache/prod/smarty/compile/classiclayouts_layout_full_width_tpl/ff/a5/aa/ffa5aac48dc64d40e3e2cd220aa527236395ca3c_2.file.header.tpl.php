<?php
/* Smarty version 4.3.4, created on 2024-03-28 16:24:54
  from 'C:\xampp\htdocs\alambicpro\themes\classic\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_660599d6b1b2f2_13822084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffa5aac48dc64d40e3e2cd220aa527236395ca3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\alambicpro\\themes\\classic\\templates\\_partials\\header.tpl',
      1 => 1711643089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660599d6b1b2f2_13822084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php $_smarty_tpl->_assignInScope('currentUrl', Tools::getCurrentUrl());?>
 <?php $_smarty_tpl->_assignInScope('currentLanguage', Context::getContext()->language);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1512185501660599d6b113d3_42539244', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1670247866660599d6b12046_01833025', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_830746174660599d6b12c20_63708484', 'header_top');
?>



<style>



</style><?php }
/* {block 'header_banner'} */
class Block_1512185501660599d6b113d3_42539244 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_1512185501660599d6b113d3_42539244',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_1670247866660599d6b12046_01833025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_1670247866660599d6b12046_01833025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

            <div class="whatsapp_content hidden-sm-down">
              <div class="whatsapp_logo">
              <a href="https://wa.me/961234567" target="_blank" > 
                <img src = "/themes/classic/assets/css/whatsapp.svg" alt="Whatsapp Logo"/>
              </a>
              </div>
              <div class="whatsapp_number">
                <a href="https://wa.me/961234567" target="_blank">961234567</a>
              </div>
            </div>
          </div>
          <div class="col-md-7 right-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_830746174660599d6b12c20_63708484 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_830746174660599d6b12c20_63708484',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
              <h1 class="hidden-sm-down" style="height:6rem;display:flex;justify-content:center;align-items:center;border-radius:10px;">
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

                              </h1>
              <h1 class="hidden-md-up">
                <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>
 
              </h1>
            <?php } else { ?>
              <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'renderLogo', array(), true);?>

            <?php }?>
          <?php }?>
        </div>
                <?php echo htmlspecialchars((string) (("/").($_smarty_tpl->tpl_vars['currentLanguage']->value)).("/"), ENT_QUOTES, 'UTF-8');?>

        <div class="menu col-md-8 hidden-sm-down">
          <ul class="menu_list">
            <li class="menu-item"><a href="/">Home</a></li>
            <li class="menu-item"><a href="/#aboutus" onclick="smoothScroll(event)">About Us</a></li>
            <li class="menu-item dropdown">
              <div class="dropbtn"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories']->value[1][2]['infos']['id_category'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['categories']->value[1][2]['infos']['link_rewrite'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a> <i class="fa-solid fa-caret-down"></i></div>
              <ul class="dropdown-content hidden-md-down">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value[2], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                  <li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['infos']['id_category'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['infos']['link_rewrite'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['infos']['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              </ul>
            </li>
            <li class="menu-item"><a>?</a></li>
            <li class="menu-item"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8');?>
">Contact</a></li>
          </ul>
        </div>
        <div class="header-top-right col-md-2 col-sm-12 position-static hidden-sm-down">
          <div class="header_top_icons">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

          </div>
          
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu">
        <ul class="menu_list">
          <li class="menu-item active">Home</li>
          <li class="menu-item">About Us</li>
          <li class="menu-item">Products</li>
          <li class="menu-item">?</li>
          <li class="menu-item">Contact</li>
        </ul>
        </div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
