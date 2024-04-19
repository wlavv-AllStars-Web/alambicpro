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
{extends file='page.tpl'}

{block name='page_title'}
  {$cms.meta_title}
{/block}

{block name='page_content_container'}
  <section id="content" class="page-content page-cms page-cms-{$cms.id}">

    {block name='cms_content'}
      {if $cms.id == 7}
        <div class="cms-revenda col-md-12">
          <div class="col-md-6">
              <h2>Conviértete ya en uno denuestros socios comerciales </h2>

              <p>Somos una empresa consolidada en el sector, especializada en la fabricación y venta de alambiques para todo tipo de destilaciones. Buscamos socios comerciales que compartan nuestra pasión por la calidad y el excelente servicio de atención al cliente.</p>
              <p>Nos enorgullece ofrecer a nuestros revendedores una amplia gama de beneficios para respaldar su éxito y crecimiento en el mercado. Al unirte a nuestro equipo, disfrutarás de:</p>
              <p>Alambiques de alta calidad: Todos nuestros alambiques han sido fabricados con los más altos estándares de calidad y con la mayor dedicación posible. Esto los convierte en la mejor opción para iniciarse en el mundo del destilado en casa.</p>
              <p>Apoyo continuo: Nuestro equipo estará a tu disposición para proporcionarte constante apoyo en todas las etapas de tu actividad como revendedor. Estaremos encantados de construir una relación duradera y sólida contigo como colaborador de Maritas Stills.</p>
          </div>
          <div class="col-md-6 contact-cms">
            {hook h='displayContactContent' mod='contactform' id_module=25}
            <div class="col-md-12 py-2 px-0">
            Si estás interesado en convertirte en revendedor de Maritas Stills no dudes en ponerte en contacto con nosotros. Ponte en contacto con nosotros hoy mismo para obtener más información sobre esta oportunidad y únete al equipo de Maritas.
            </div>
          </div>

        </div>
      {else}
      {$cms.content nofilter}
      {/if}
    {/block}

    {block name='hook_cms_dispute_information'}
      {hook h='displayCMSDisputeInformation'}
    {/block}

    {block name='hook_cms_print_button'}
      {hook h='displayCMSPrintButton'}
    {/block}

  </section>
{/block}
