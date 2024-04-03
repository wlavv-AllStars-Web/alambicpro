{**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 *}
{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="col-md-6 hidden-sm-down" id="_desktop_logo">
            {renderLogo}
        </div>
        <div class="col-md-6 text-xs-right hidden-sm-down">
          {hook h='displayNav1'}
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          {hook h='displayNav2'}
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo"><a href="/"><img src="/themes/classic/assets/css/alambicprologo_1.svg" width="24" height="24" /></a></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
{/block}

{block name='header_top'}
  <div class="header-top hidden-md-up">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
          <div class="row">
            {hook h='displayTop'}
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu">
        <ul class="menu_list">
          <li class="menu-item active"><a href="/">Home</a></li>
          <li class="menu-item"><a href="/#aboutus">About Us</a></li>
          
          <li class="menu-item dropdown {if $currentUrl === $link->getCategoryLink(2)}active{/if}">
            <div class="dropbtn" onclick="clickdropdown(this)"><a>{l s='Products' d='Shop.Theme.Global'}</a> <i class="fa-solid fa-caret-down"></i></div>
            <ul class="dropdown-content">
              {foreach from=$categories[2] item=category}
                {* {"/"|cat:$currentLanguage|cat:"/"|cat:$category.infos.id_category|cat:"-"|cat:$category.infos.link_rewrite} *}
              <li><a class="{if $smarty.server.REQUEST_URI === "/"|cat:$currentLanguage|cat:"/"|cat:$category.infos.id_category|cat:"-"|cat:$category.infos.link_rewrite}activeLink{/if}" href="{$category.infos.id_category}-{$category.infos.link_rewrite}">{$category.infos.name}</a></li>
              {/foreach}
              <li><a href="{$categories[1][2]['infos']['id_category']}-{$categories[1][2]['infos']['link_rewrite']}">All</a></li>
            </ul>
          </li>
          <li class="menu-item"><a>(Em Falta)</a></li>
          <li class="menu-item"><a href="{$link->getPageLink('contact', true)}">Contact</a></li>
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
  {hook h='displayNavFullWidth'}
{/block}
