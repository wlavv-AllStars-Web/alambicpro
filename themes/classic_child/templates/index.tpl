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

 {block name='page_content_container'}
   <section id="content" class="page-home">
     {block name='page_content_top'}{/block}

     {block name='page_content'}
       {block name='hook_home'}
         {$HOOK_HOME nofilter}

         <div class="grid">
           <div class="card_1 card">
           
            <img class="" src="https://www.maritastills.es/img/cms/destila_2.jpg" style="width: 100%; position: absolute;height: 100%;
            object-fit: cover;" alt="Tradicionais" />
             <div class="layer"></div>
             <div class="content_category">{l s='Alambiques Tradicionais' d='Shop.Theme.Alambic'}</div>
             <div class="buy"><a href="{$link->getCategoryLink(3)}">{l s='BUY NOW' d='Shop.Theme.Alambic'}</a></div>
           </div>

           <div class="card_2 card">
           <img class="" src="https://albinovieira.pt/wp-content/uploads/2023/07/destilarias_1920x.webp" style="width: 100%; position: absolute;height: 100%;
           object-fit: cover;"  alt="Coluna">
             <div class="layer"></div>
             <div class="content_category">{l s='Alambiques Coluna' d='Shop.Theme.Alambic'}</div>
             <div class="buy"><a href="{$link->getCategoryLink(4)}">{l s='BUY NOW' d='Shop.Theme.Alambic'}</a></div>
           </div>
           <div class="card_3 card">
           <img class="" src="https://albinovieira.pt/wp-content/uploads/2023/11/alambiques-cat-1500x1500-1.webp" style="width: 100%; position: absolute;height: 100%;
           object-fit: cover;" alt="Vedados a Água">
             <div class="layer"></div>
             <div class="content_category">{l s='Alambiques Vedados a Água' d='Shop.Theme.Alambic'}</div>
             <div class="buy"><a href="{$link->getCategoryLink(5)}">{l s='BUY NOW' d='Shop.Theme.Alambic'}</a></div>
           </div>
           <div class="card_4 card lazy">
           <img class="lazy" data-src="https://images.pexels.com/photos/6752421/pexels-photo-6752421.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" style="width: 100%; position: absolute;height: 100%;
           object-fit: cover;" alt="Gin">
             <div class="layer"></div>
             <div class="content_category">{l s='Alambiques Gin' d='Shop.Theme.Alambic'}</div>
             <div class="buy"><a href="{$link->getCategoryLink(6)}">{l s='BUY NOW' d='Shop.Theme.Alambic'}</a></div>
           </div>
           <div class="card_5 card lazy">
           <img class="lazy" data-src="https://www.maritastills.es/img/cms/destila_2.jpg" style="width: 100%; position: absolute;height: 100%;
           object-fit: cover;" alt="Whisky">
             <div class="layer"></div>
             <div class="content_category">{l s='Alambiques Whisky' d='Shop.Theme.Alambic'}</div>
             <div class="buy"><a href="{$link->getCategoryLink(7)}">{l s='BUY NOW' d='Shop.Theme.Alambic'}</a></div>
           </div>
           <div class="card_6 card lazy">
           <img class="lazy" data-src="https://albinovieira.pt/wp-content/uploads/2023/07/destilarias_1920x.webp" style="width: 100%; position: absolute;height: 100%;
           object-fit: cover;" alt="Oleos Essênciais">
             <div class="layer"></div>
             <div class="content_category">{l s='Alambiques Oleos Essênciais' d='Shop.Theme.Alambic'}</div>
             <div class="buy"><a href="{$link->getCategoryLink(8)}">{l s='BUY NOW' d='Shop.Theme.Alambic'}</a></div>
           </div>
           <div class="card_7 card lazy">
           <img class="lazy" data-src="https://www.maritastills.es/img/cms/destila_2.jpg" style="width: 100%; position: absolute;height: 100%;
           object-fit: cover;" alt="Banho Maria">
             <div class="layer"></div>
             <div class="content_category">{l s='Alambiques Banho Maria' d='Shop.Theme.Alambic'}</div>
             <div class="buy"><a href="{$link->getCategoryLink(9)}">{l s='BUY NOW' d='Shop.Theme.Alambic'}</a></div>
           </div>
           <div class="card_8 card lazy">
           <img class="lazy" data-src="https://albinovieira.pt/wp-content/uploads/2023/07/destilarias_1920x.webp" style="width: 100%; position: absolute;height: 100%;
           object-fit: cover;" alt="Alquitarras">
             <div class="layer"></div>
             <div class="content_category">{l s='Alquitarras' d='Shop.Theme.Alambic'}</div>
             <div class="buy"><a href="{$link->getCategoryLink(10)}">{l s='BUY NOW' d='Shop.Theme.Alambic'}</a></div>
           </div>
           <div class="card_9 card lazy">
           <img class="lazy" data-src="https://albinovieira.pt/wp-content/uploads/2023/11/alambiques-cat-1500x1500-1.webp" style="width: 100%; position: absolute;height: 100%;
           object-fit: cover;" alt="Profissionais">
             <div class="layer"></div>
             <div class="content_category">{l s='Alambiques Profissionais' d='Shop.Theme.Alambic'}</div>
             <div class="buy"><a href="{$link->getCategoryLink(11)}">{l s='BUY NOW' d='Shop.Theme.Alambic'}</a></div>
           </div>
         </div>

         <section class="aboutus_section">
          <div id="aboutus">
            <div class="header_aboutus">
              <h1>{l s='About Us' d='Shop.Theme.Alambic'}</h1>
            </div>
            
            <div class="aboutus_img lazy">
              {* <img  data-src="https://albinovieira.pt/wp-content/uploads/2023/11/foto-sobre-01.webp" class="lazy"/> *}
              {* <img src="https://albinovieira.pt/wp-content/uploads/2023/11/foto-sobre-01.webp" style="width:100%"/> *}
            </div>
            <div class="content_aboutus">
              
              <p>{l s='Bem-vindo ao Alambic Pro!' d='Shop.Theme.Alambic'}<br><br>
              {l s='Somos uma plataforma online dedicada a oferecer uma ampla variedade de produtos de destilaria para entusiastas, profissionais e curiosos em todo o mundo. Fundada em 2024, nossa missão é fornecer acesso fácil e conveniente a equipamentos, ingredientes e acessórios de qualidade para a produção artesanal de destilados.' d='Shop.Theme.Alambic'}
              </p>
            </div>
          </div>

          <div id="ourphilosophy">
            <div class="header_ourphilosophy">
            <h1>{l s='Nossa Filosofia' d='Shop.Theme.Alambic'}</h1>
            </div>
            
            <div class="ourphilosophy_img lazy">
              {* <img src="https://albinovieira.pt/wp-content/uploads/2023/11/foto-sobre-06.webp" style="width:100%"/> *}
            </div>
            <div class="content_ourphilosophy">
              
              <p>{l s='No Alambic Pro, acreditamos que a qualidade começa com os melhores ingredientes e os melhores equipamentos. Valorizamos a autenticidade, a integridade e o compromisso com a satisfação do cliente em tudo o que fazemos. Nosso objetivo é fornecer produtos de destilaria que inspirem confiança e permitam que nossos clientes alcancem resultados excepcionais em seus projetos.' d='Shop.Theme.Alambic'}</p>
            </div>
          </div>


          <div id="ourmission">
            <div class="header_ourmission">
              <h1>{l s='Nossa Missão' d='Shop.Theme.Alambic'}</h1>
            </div>
            <div class="ourmission_img lazy">
              {* <img src="https://albinovieira.pt/wp-content/uploads/2023/11/produtos_4_1920x.webp" style="width:100%"/> *}
            </div>
            <div class="content_ourmission">
              
              <p>
              {l s='Nossa missão é simples: fornecer aos nossos clientes tudo o que precisam para explorar e desfrutar da arte da destilaria. Desde alambiques e fermentadores até ingredientes, acessórios e literatura especializada, nos esforçamos para oferecer uma experiência de compra completa e satisfatória. Queremos ser o seu parceiro confiável em todas as etapas do processo de destilação, desde a concepção da receita até o momento de desfrutar do destilado final.' d='Shop.Theme.Alambic'}
              </p>
            </div>
            
          </div>
         </section>
       {/block}
     {/block}
   </section>
 {/block}
