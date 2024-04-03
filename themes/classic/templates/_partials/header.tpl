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
 {* {assign var="languages" value=Language::getLanguages(true, $this->context->shop->id)} *}
 {assign var="currentUrl" value="http://"|cat:$smarty.server.HTTP_HOST|cat:$smarty.server.REQUEST_URI}
 {assign var="currentLanguage" value=Context::getContext()->language->iso_code}
{block name='header_banner'}
  <div class="header-banner">
    {hook h='displayBanner'}
  </div>
{/block}

{block name='header_nav'}
  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            {hook h='displayNav1'}
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
              {hook h='displayNav2'}
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
{/block}

{block name='header_top'}
  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-md-2 hidden-sm-down" id="_desktop_logo">
          {if $shop.logo_details}
            {if $page.page_name == 'index'}
              <h1 class="header-top-logo" class="hidden-sm-down">
                {* {renderLogo} *}
                {* <img src="/themes/classic/assets/css/whisky-still-30.png" width="24" height="24" /> *}
                <a href="/">ALAMBIC PRO</a>
                
              </h1>
              <h1 class="hidden-md-up">
                {* {renderLogo}  *}
              </h1>
            {else}
              {* {renderLogo} *}
              <h1 class="header-top-logo" class="hidden-sm-down">
              <a href="/">ALAMBIC PRO</a>
              </h1>
            {/if}
          {/if}
        </div>
{* {"/"|cat:$currentLanguage|cat:$category.infos.id_category|cat:"-"|cat:$category.infos.link_rewrite} *}
        <div class="menu col-md-8 hidden-sm-down">
          <ul class="menu_list">
            <li class="menu-item {if $currentUrl === $link->getPageLink('index',true)}active{/if}"><a href="/">Home</a></li>
            <li class="menu-item"><a href="/#aboutus" onclick="smoothScroll(event)">About Us</a></li>
            <li class="menu-item dropdown">
              <div class="dropbtn" onclick="clickdropdown(this)"><a>{l s='Products' d='Shop.Theme.Global'}</a> <i class="fa-solid fa-caret-down"></i></div>
              <ul class="dropdown-content hidden-md-down">
                {foreach from=$categories[2] item=category}
                  {* {"/"|cat:$currentLanguage|cat:"/"|cat:$category.infos.id_category|cat:"-"|cat:$category.infos.link_rewrite} *}
                <li><a class="{if $smarty.server.REQUEST_URI === "/"|cat:$currentLanguage|cat:"/"|cat:$category.infos.id_category|cat:"-"|cat:$category.infos.link_rewrite}activeLink{/if}" href="{$category.infos.id_category}-{$category.infos.link_rewrite}">{$category.infos.name}</a></li>
                {/foreach}
                <li><a href="{$categories[1][2]['infos']['id_category']}-{$categories[1][2]['infos']['link_rewrite']}">All</a></li>
              </ul>
            </li>
            <li class="menu-item"><a>(Em Falta)</a></li>
            <li class="menu-item {if $currentUrl === $link->getPageLink('contact', true)}active{/if}"><a href="{$link->getPageLink('contact', true)}">Contact</a></li>
          </ul>
        </div>
        <div class="header-top-right col-md-2 col-sm-12 position-static hidden-sm-down">
          <div class="header_top_icons">
            {hook h='displayTop'}
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


<style>

.dropdown-content {
  display: none;
}

.dropdown.active .dropdown-content {
  display: block;
}


</style>

<script>


</script>