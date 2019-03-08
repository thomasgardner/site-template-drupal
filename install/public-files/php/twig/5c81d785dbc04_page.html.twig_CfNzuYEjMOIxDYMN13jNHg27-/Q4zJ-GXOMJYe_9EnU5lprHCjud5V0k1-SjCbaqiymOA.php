<?php

/* themes/custom/kwall/templates/page.html.twig */
class __TwigTemplate_20504af6fed1656f150bf380ffe19be0da2ed45e67fea1948daa60cb726cd017 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["if" => 48, "set" => 87];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if', 'set'],
                [],
                []
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 46
        echo "
<header id=\"site-branding\" role=\"banner\">
  ";
        // line 48
        if ($this->getAttribute(($context["page"] ?? null), "alerts", [])) {
            // line 49
            echo "  <div class=\"layout-alerts\" role=\"region\">
    ";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "alerts", []), "html", null, true));
            echo "
  </div>
  ";
        }
        // line 53
        echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", []), "html", null, true));
        echo "</div>
    </div>
  </div>
</header>


";
        // line 61
        if ($this->getAttribute(($context["page"] ?? null), "hero", [])) {
            // line 62
            echo "<section class=\"layout-hero-content\" role=\"region\">
  ";
            // line 63
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "hero", []), "html", null, true));
            echo "
</section>
";
        }
        // line 66
        echo "

";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 69
            echo "<section class=\"layout-content-top\" role=\"region\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", []), "html", null, true));
            echo "</div>
    </div>
  </div>
</section>
";
        }
        // line 77
        echo "

";
        // line 79
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", []), "html", null, true));
        echo "
";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", []), "html", null, true));
        echo "
";
        // line 81
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", []), "html", null, true));
        echo "


<div class=\"layout-container container\">
  <main role=\"main\" class=\"row\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 87
        echo "    ";
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 88
($context["page"] ?? null), "sidebar_left", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_right", []))) ? ("col-md-6") : ("")), 1 => ((($this->getAttribute(        // line 89
($context["page"] ?? null), "sidebar_left", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])))) ? ("col-md-9") : ("")), 2 => ((($this->getAttribute(        // line 90
($context["page"] ?? null), "sidebar_right", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])))) ? ("col-md-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 91
($context["page"] ?? null), "sidebar_left", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])))) ? ("col-md-12") : (""))];
        // line 93
        echo "
    ";
        // line 94
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_left", [])) {
            // line 95
            echo "    <aside class=\"layout-sidebar-left col-md-3\" role=\"complementary\">
      ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_left", []), "html", null, true));
            echo "
    </aside>
    ";
        }
        // line 99
        echo "

    ";
        // line 101
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 102
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
            echo "
    <div";
            // line 103
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method"), "html", null, true));
            echo ">
      ";
            // line 104
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "html", null, true));
            echo "
    </div>
    ";
        }
        // line 107
        echo "

    ";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_right", [])) {
            // line 110
            echo "    <aside class=\"layout-sidebar-right col-md-3\" role=\"complementary\">
      ";
            // line 111
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_right", []), "html", null, true));
            echo "
    </aside>
    ";
        }
        // line 114
        echo "

  </main>
</div>


";
        // line 120
        if ($this->getAttribute(($context["page"] ?? null), "content_bottom", [])) {
            // line 121
            echo "<section class=\"layout-content-bottom\" role=\"region\">
  ";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", []), "html", null, true));
            echo "
</section>
";
        }
        // line 125
        echo "

";
        // line 127
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 128
            echo "<footer class=\"layout-footer-content\" role=\"contentinfo\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 131
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", []), "html", null, true));
            echo "</div>
    </div>
  </div>
</footer>
";
        }
        // line 136
        echo "

";
        // line 138
        if ($this->getAttribute(($context["page"] ?? null), "footer_copyright", [])) {
            // line 139
            echo "<section class=\"layout-footer-copyright\" role=\"region\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">";
            // line 142
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_copyright", []), "html", null, true));
            echo "</div>
    </div>
  </div>
</section>
";
        }
        // line 147
        echo "

";
        // line 149
        if ($this->getAttribute(($context["page"] ?? null), "slide_in_navigation", [])) {
            // line 150
            echo "<section class=\"layout-push-navigation\" role=\"region\">
  <div class=\"push-nav-wrapper\">";
            // line 151
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slide_in_navigation", []), "html", null, true));
            echo "</div>
</section>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/kwall/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 151,  241 => 150,  239 => 149,  235 => 147,  227 => 142,  222 => 139,  220 => 138,  216 => 136,  208 => 131,  203 => 128,  201 => 127,  197 => 125,  191 => 122,  188 => 121,  186 => 120,  178 => 114,  172 => 111,  169 => 110,  167 => 109,  163 => 107,  157 => 104,  153 => 103,  148 => 102,  146 => 101,  142 => 99,  136 => 96,  133 => 95,  131 => 94,  128 => 93,  126 => 91,  125 => 90,  124 => 89,  123 => 88,  121 => 87,  113 => 81,  109 => 80,  105 => 79,  101 => 77,  93 => 72,  88 => 69,  86 => 68,  82 => 66,  76 => 63,  73 => 62,  71 => 61,  62 => 55,  58 => 53,  52 => 50,  49 => 49,  47 => 48,  43 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}

<header id=\"site-branding\" role=\"banner\">
  {% if page.alerts %}
  <div class=\"layout-alerts\" role=\"region\">
    {{ page.alerts }}
  </div>
  {% endif %}
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">{{ page.header }}</div>
    </div>
  </div>
</header>


{% if page.hero %}
<section class=\"layout-hero-content\" role=\"region\">
  {{ page.hero }}
</section>
{% endif %}


{% if page.content_top %}
<section class=\"layout-content-top\" role=\"region\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">{{ page.content_top }}</div>
    </div>
  </div>
</section>
{% endif %}


{{ page.breadcrumb }}
{{ page.highlighted }}
{{ page.help }}


<div class=\"layout-container container\">
  <main role=\"main\" class=\"row\">
    <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}
    {% set content_classes = [
        page.sidebar_left and page.sidebar_right ? 'col-md-6',
        page.sidebar_left and page.sidebar_right is empty ? 'col-md-9',
        page.sidebar_right and page.sidebar_left is empty ? 'col-md-9',
        page.sidebar_left is empty and page.sidebar_right is empty ? 'col-md-12'
    ] %}

    {% if page.sidebar_left %}
    <aside class=\"layout-sidebar-left col-md-3\" role=\"complementary\">
      {{ page.sidebar_left }}
    </aside>
    {% endif %}


    {% if page.content %}
    {{ attributes }}
    <div{{ content_attributes.addClass(content_classes) }}>
      {{ page.content }}
    </div>
    {% endif %}


    {% if page.sidebar_right %}
    <aside class=\"layout-sidebar-right col-md-3\" role=\"complementary\">
      {{ page.sidebar_right }}
    </aside>
    {% endif %}


  </main>
</div>


{% if page.content_bottom %}
<section class=\"layout-content-bottom\" role=\"region\">
  {{ page.content_bottom }}
</section>
{% endif %}


{% if page.footer %}
<footer class=\"layout-footer-content\" role=\"contentinfo\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">{{ page.footer }}</div>
    </div>
  </div>
</footer>
{% endif %}


{% if page.footer_copyright %}
<section class=\"layout-footer-copyright\" role=\"region\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">{{ page.footer_copyright }}</div>
    </div>
  </div>
</section>
{% endif %}


{% if page.slide_in_navigation %}
<section class=\"layout-push-navigation\" role=\"region\">
  <div class=\"push-nav-wrapper\">{{ page.slide_in_navigation }}</div>
</section>
{% endif %}
", "themes/custom/kwall/templates/page.html.twig", "/var/www/template/d8/docroot/themes/custom/kwall/templates/page.html.twig");
    }
}
