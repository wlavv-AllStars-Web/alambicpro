<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__ee7ab4986851e5d9276b51b81b874f35 */
class __TwigTemplate_2510c80bf6bb300d14a95d1a02e5f611 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>SEO & URLs • Alambic Pro</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminMeta';
    var iso_user = 'pt';
    var lang_is_rtl = '0';
    var full_language_code = 'pt-pt';
    var full_cldr_language_code = 'pt-PT';
    var country_iso_code = 'PT';
    var _PS_VERSION_ = '8.1.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número da encomenda: ';
    var total_msg = 'Total: ';
    var from_msg = 'De: ';
    var see_order_msg = 'Ver esta encomenda';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nome do cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Ler esta mensagem';
    var token = 'dd0e2ae8ae84de3270f9bd0b63ae6d8a';
    var currentIndex = 'index.php?controller=AdminMeta';
    var employee_token = '70c111f5a2cba47098eb95498e42ba03';
    var choose_language_translate = 'Escolher idioma:';
    var default_language = '1';
    var admin_modules_link = '/adminalambicpro/index.php/improve/modules/manage?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI';
    var admin_notification_get_link = '/adminalambicpro/index.php/common/notifications?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI';
    var admin_notification_push_link = adminNotificationPushLink = '/adminalambicpro/index.php/common/notifications/ack?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI';
    var tab_modules_list = '';
    var update_success_msg = 'Atualizado com sucesso';
    var search_product_msg = ";
        // line 43
        echo "'Pesquisar um produto';
  </script>



<link
      rel=\"preload\"
      href=\"/adminalambicpro/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/adminalambicpro/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/adminalambicpro/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/adminalambicpro\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/adminalambicpro\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\"\\u00a0\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script";
        // line 72
        echo " type=\"text/javascript\" src=\"/adminalambicpro/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/adminalambicpro/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/adminalambicpro/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>

  

";
        // line 83
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pt adminmeta\"
  data-base-url=\"/adminalambicpro/index.php\"  data-token=\"I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminDashboard&amp;token=835bd586119f360eade02f6de2391d08\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acesso Rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=54df717d357e377a2f2fff57bcbd852b\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminalambicpro/index.php/improve/modules/manage?token=02ffc3d0e077331bbd4e24e95d916ba0\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminalambicpro/index.php/sell/catalog/categories/new?token=02ffc3d0e077331bbd4e24e95d916ba0\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://192.168.1.64:82/adminalambicpro/index.php/sell/catalog/products-v2/create?token=02ffc3d0e077331bbd4e24e95d916ba0\"
                 data-item=\"New product\"
      >New product</a>
          <a cl";
        // line 120
        echo "ass=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=0aafe6d3d9499d579a1fb88cbc743caf\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://192.168.1.64:82/adminalambicpro/index.php/sell/orders?token=02ffc3d0e077331bbd4e24e95d916ba0\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"200\"
        data-icon=\"icon-AdminParentMeta\"
        data-method=\"add\"
        data-url=\"index.php/configure/shop/seo-urls\"
        data-post-link=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminQuickAccesses&token=bb9e21ef42fd6ee1df16811d8df19644\"
        data-prompt-text=\"Atribua um nome a este atalho:\"
        data-link=\"SEO &amp; URLs - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Adicionar página atual ao «Acesso Rápido»
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminQuickAccesses&token=bb9e21ef42fd6ee1df16811d8df19644\">
      <i class=\"material-icons\">settings</i>
      Gerir os seus acessos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/adminalambicpro/index.php?controller=AdminSearch&amp;token=fcf56de9dff98cf6e7e4be6ac2c2b58f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-";
        // line 160
        echo "control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Pesquisar (por ex.: referência do produto, nome do cliente…)\" aria-label=\"Barra de pesquisa\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Em todo o lado
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Em todo o lado\" href=\"#\" data-value=\"0\" data-placeholder=\"O que procura?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Em todo o lado</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome do produto, referência, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nome</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por endereço IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por endereço IP</a>
        <a class=\"dropdown-item\" data-item=\"Encomendas\" href=\"#\" data-value=\"3\" data-placeholder=\"Nº da Encomenda\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Encomendas</a>
        <a class=\"dropdown-item\" data-item=\"Faturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Número da fatura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Faturas</a>
        <a class=\"dropdown-item\" data-item=\"Carrinhos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID do Carrinho\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrinhos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-v";
        // line 174
        echo "alue=\"7\" data-placeholder=\"Nome do Módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">PESQUISAR</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acesso Rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=54df717d357e377a2f2fff57bcbd852b\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminalambicpro/index.php/improve/modules/manage?token=02ffc3d0e077331bbd4e24e95d916ba0\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminalambicpro/index.php/sell/catalog/categories/new?token=02ffc3d0e077331bbd4e24e95d916ba0\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminalambicpro/index.php/sell/catalog/products-v2/create?token=02ffc3d0e077331bbd4e24e95d916ba0\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=0aafe6d3d9499d579a1fb88cbc743caf\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://";
        // line 214
        echo "192.168.1.64:82/adminalambicpro/index.php/sell/orders?token=02ffc3d0e077331bbd4e24e95d916ba0\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"43\"
      data-icon=\"icon-AdminParentMeta\"
      data-method=\"add\"
      data-url=\"index.php/configure/shop/seo-urls\"
      data-post-link=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminQuickAccesses&token=bb9e21ef42fd6ee1df16811d8df19644\"
      data-prompt-text=\"Atribua um nome a este atalho:\"
      data-link=\"SEO &amp; URLs - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Adicionar página atual ao «Acesso Rápido»
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminQuickAccesses&token=bb9e21ef42fd6ee1df16811d8df19644\">
    <i class=\"material-icons\">settings</i>
    Gerir os seus acessos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              ";
        // line 259
        echo "Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/adminalambicpro/index.php/configure/shop/maintenance/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Modo de manutenção</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://192.168.1.64:82/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Encomendas<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
         ";
        // line 309
        echo "   >
              Clientes<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Mensagens<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhuma nova encomenda por enquanto :(<br>
              Verificou os seus <strong><a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=59f034689fae0afb8e17b7efdd51503b\">carrinhos abandonados</a></strong>?<br>A sua próxima encomenda poderá estar escondida aí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Nenhum novo cliente por enquanto :(<br>
              Tem estado ativo nas redes sociais estes últimos dias?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Sem nova mensagem por enquanto.<br>
              Ao que parece, todos os seus clientes estão satisfeitos :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a";
        // line 356
        echo " class=\"notif\" href='order_url'>
      #_id_order_ -
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registado <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://192.168.1.64:82/img/pr/default.jpg\" alt=\"Paulo\" /></span>
        <span class=\"employee_profile\">Seja bem-vindo ao Paulo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/adminalambicpro/index.php/configure/advanced/employees/1/edit?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\">
      <i class=\"material-icons\">edit</i>
      <span>O seu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminLogin&amp;logout=1&amp;token=68aecd936ba6827f2e58e120cd697228\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <spa";
        // line 402
        echo "n>Fechar sessão</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/adminalambicpro/index.php/configure/advanced/employees/toggle-navigation?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminDashboard&amp;token=835bd586119f360eade02f6de2391d08\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminDashboard&amp;token=835bd586119f360eade02f6de2391d08\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/adminalambicpro/index.php/sell/orders/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Or";
        // line 451
        echo "ders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/adminalambicpro/index.php/sell/orders/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/adminalambicpro/index.php/sell/orders/invoices/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/adminalambicpro/index.php/sell/orders/credit-slips/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                  ";
        // line 482
        echo "                
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/adminalambicpro/index.php/sell/orders/delivery-slips/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminCarts&amp;token=59f034689fae0afb8e17b7efdd51503b\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/adminalambicpro/index.php/sell/catalog/products?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        ";
        // line 514
        echo "      <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/adminalambicpro/index.php/sell/catalog/products?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/adminalambicpro/index.php/sell/catalog/categories?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/adminalambicpro/index.php/sell/catalog/monitoring/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminAttributesGroups&a";
        // line 543
        echo "mp;token=bd9e9b5b603dde5fbfcad0c46eaa57ab\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/adminalambicpro/index.php/sell/catalog/brands/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/adminalambicpro/index.php/sell/attachments/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminCartRules&amp;token=0aafe6d3d9499d579a1fb88cbc743caf\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=";
        // line 574
        echo "\"subtab-AdminStockManagement\">
                                <a href=\"/adminalambicpro/index.php/sell/stocks/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Stocks
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/adminalambicpro/index.php/sell/customers/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/adminalambicpro/index.php/sell/customers/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                          ";
        // line 606
        echo "  
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/adminalambicpro/index.php/sell/addresses/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminCustomerThreads&amp;token=98f0f30593456e9845fc23bf83a8662a\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminCustomerThreads&amp;token=98f0f30593456e9845fc23bf83a8662a\" class=\"link\"> Customer Service
                                </a>
        ";
        // line 635
        echo "                      </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/adminalambicpro/index.php/sell/customer-service/order-messages/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminReturn&amp;token=f5f80c797b4f71791ea6921c1fd8f087\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminStats&amp;token=54df717d357e377a2f2fff57bcbd852b\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                               ";
        // line 667
        echo "                             </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/adminalambicpro/index.php/improve/modules/manage?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/adminalambicpro/index.php/improve/modules/manage?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                 ";
        // line 704
        echo "                       </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/adminalambicpro/index.php/improve/design/themes/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminThemes\">
                                <a href=\"/adminalambicpro/index.php/improve/design/themes/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/adminalambicpro/index.php/improve/design/mail_theme/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Email Theme
                                </a>
                              </";
        // line 734
        echo "li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/adminalambicpro/index.php/improve/design/cms-pages/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/adminalambicpro/index.php/improve/design/modules/positions/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminImages&amp;token=c3552b6dfea67d5cf7640f46233df526\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/adminalambicpro/index.php/modules/link-widget/list?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZ";
        // line 764
        echo "r7kmwrAA3Mv2CuI\" class=\"link\"> Lista de ligações
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminCarriers&amp;token=016daeea2411e047f9059fe247a38326\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminCarriers&amp;token=016daeea2411e047f9059fe247a38326\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-Adm";
        // line 796
        echo "inShipping\">
                                <a href=\"/adminalambicpro/index.php/improve/shipping/preferences/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/adminalambicpro/index.php/improve/payment/payment_methods?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/adminalambicpro/index.php/improve/payment/payment_methods?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                   ";
        // line 828
        echo "                         
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/adminalambicpro/index.php/improve/payment/preferences?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/adminalambicpro/index.php/improve/international/localization/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/adminalambicpro/index.php/improve/international/localization/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Localization
                                </a>
                              </li>

   ";
        // line 859
        echo "                                                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/adminalambicpro/index.php/improve/international/zones/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/adminalambicpro/index.php/improve/international/taxes/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/adminalambicpro/index.php/improve/international/translations/settings?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</";
        // line 892
        echo "span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/adminalambicpro/index.php/configure/shop/preferences/preferences?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/adminalambicpro/index.php/configure/shop/preferences/preferences?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/adminalambicpro/index.php/configure/shop/order-preferences/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" clas";
        // line 922
        echo "s=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/adminalambicpro/index.php/configure/shop/product-preferences/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/adminalambicpro/index.php/configure/shop/customer-preferences/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/adminalambicpro/index.php/configure/shop/contacts/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"86\" id=\"subtab-AdminParent";
        // line 953
        echo "Meta\">
                                <a href=\"/adminalambicpro/index.php/configure/shop/seo-urls/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminSearchConf&amp;token=aa328f23ecdd4312f4d53716147a44ab\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/adminalambicpro/index.php/configure/advanced/system-information/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
          ";
        // line 984
        echo "                    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/system-information/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/performance/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/administration/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/emails/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> E-mail
                                </a>
   ";
        // line 1013
        echo "                           </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/import/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/employees/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/sql-requests/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/logs/?_token=I19UzkHHVxy8nKLj";
        // line 1043
        echo "1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/webservice-keys/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/feature-flags/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/adminalambicpro/index.php/configure/advanced/security/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
               ";
        // line 1072
        echo "                         </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Traffic &amp; SEO</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/adminalambicpro/index.php/configure/shop/seo-urls/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" aria-current=\"page\">SEO &amp; URLs</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            SEO &amp; URLs          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/adminalambicpro/index.php/configure/shop/seo-urls/new?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\"                  title=\"Adicionar nova página\"                                  >
                  <i class=\"material-icons\">add_circle_outline</i>                  Adicionar nova página
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ajuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/adminalambicpro/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminMeta%253Fversion%253D8.1.4%2526country%253Dpt/Ajuda?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\"
                   id=\"product_form_open_help\"
                >
                  Ajuda
                </a>
                    ";
        // line 1123
        echo "                </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  <li class=\"nav-item\">
                    <a href=\"/adminalambicpro/index.php/configure/shop/seo-urls/?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" id=\"subtab-AdminMeta\" class=\"nav-link tab active current\" data-submenu=\"87\">
                      SEO & URLs
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/adminalambicpro/index.php/configure/shop/search-engines/?_token=I19UzkHHVx";
        // line 1142
        echo "y8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\" id=\"subtab-AdminSearchEngines\" class=\"nav-link tab \" data-submenu=\"88\">
                      Search Engines
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/adminalambicpro/index.php/configure/shop/seo-urls/new?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7kmwrAA3Mv2CuI\"              title=\"Adicionar nova página\"            >
              Adicionar nova página
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ajuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/adminalambicpro/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fpt%252Fdoc%252FAdminMeta%253Fversion%253D8.1.4%2526country%253Dpt/Ajuda?_token=I19UzkHHVxy8nKLj1lGtuQATpZrZr7k";
        // line 1169
        echo "mwrAA3Mv2CuI\"
            >
              Ajuda
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1190
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh, não!</h1>
  <p class=\"mt-3\">
    A versão móvel desta página ainda não está disponível.
  </p>
  <p class=\"mt-2\">
    Utilize um computador para obter acesso a esta página, até ser adaptada para um telemóvel.
  </p>
  <p class=\"mt-2\">
    Obrigado.
  </p>
  <a href=\"http://192.168.1.64:82/adminalambicpro/index.php?controller=AdminDashboard&amp;token=835bd586119f360eade02f6de2391d08\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Voltar
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1224
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 83
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1190
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1224
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__ee7ab4986851e5d9276b51b81b874f35";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1391 => 1224,  1370 => 1190,  1359 => 83,  1350 => 1224,  1310 => 1190,  1287 => 1169,  1258 => 1142,  1237 => 1123,  1184 => 1072,  1153 => 1043,  1121 => 1013,  1090 => 984,  1057 => 953,  1024 => 922,  992 => 892,  957 => 859,  924 => 828,  890 => 796,  856 => 764,  824 => 734,  792 => 704,  753 => 667,  719 => 635,  688 => 606,  654 => 574,  621 => 543,  590 => 514,  556 => 482,  523 => 451,  472 => 402,  424 => 356,  375 => 309,  323 => 259,  276 => 214,  234 => 174,  218 => 160,  176 => 120,  134 => 83,  121 => 72,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__ee7ab4986851e5d9276b51b81b874f35", "");
    }
}
