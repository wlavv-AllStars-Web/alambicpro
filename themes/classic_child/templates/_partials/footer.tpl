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
<div class="container">
  <div class="row">
    {block name='hook_footer_before'}
      {hook h='displayFooterBefore'}
    {/block}
  </div>
</div>
<div class="footer-container">
  <div class="container-md container-fluid">
  <div class="col-lg-12" style="display: flex;">
    <div class="footer_row col-lg-8">
      {block name='hook_footer'}
        {hook h='displayFooter'}
      {/block}
    </div>
    <div class="footer-after col-lg-4">
      {block name='hook_footer_after'}
        {hook h='displayFooterAfter'}
      {/block}

      <div style="display: flex;justify-content:end;">
        <img src="/themes/classic_child/assets/css/ingenico.svg" loading="lazy" alt="" width="103" height="41" class="slick-slide-image loaded">
        <img src="/themes/classic_child/assets/css/multibanco.svg" loading="lazy" alt="" width="103" height="41" class="slick-slide-image loaded">
      </div>
    </div>
  </div>
    <div class="row">
      <div class="col-md-12 copyright-container">
        <p class="text-sm-center">
          {block name='copyright_link'}
            <a class="copyrights" href="/" target="_blank" rel="noopener noreferrer nofollow">
              {l s='%copyright% %year% - Alambic Pro' sprintf=['%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
            </a>
          {/block}
        </p>
      </div>
    </div>
    <div class="btn-back-top" onclick="topFunction()"><i class="fa-solid fa-arrow-turn-up"></i></div>
  </div>
</div>
