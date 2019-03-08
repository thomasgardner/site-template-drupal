<?php

/* themes/custom/kwall/templates/menu/menu--push-nav-menu.html.twig */
class __TwigTemplate_b53ce126fdc1ddd11c0b56b891c8fff4959dde95f05fe9fa5dcc92d9825e3b81 extends Twig_Template
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
        $tags = ["import" => 18, "macro" => 26, "if" => 28, "for" => 39, "set" => 41];
        $filters = ["trim" => 50, "striptags" => 50, "render" => 50, "link_attributes" => 53];
        $functions = ["link" => 53];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['trim', 'striptags', 'render', 'link_attributes'],
                ['link']
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

        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links(($context["items"] ?? null), ($context["attributes"] ?? null), 0)));
        echo "

";
    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 29
                echo "
    ";
                // line 30
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 31
                    echo "      <ul";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ("menu nav menu-level-" . ($context["menu_level"] ?? null))], "method"), "html", null, true));
                    echo ">
    ";
                }
                // line 33
                echo "  ";
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 34
                    echo "    <div class=\"dropdown-menu-list menu-level-";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true));
                    echo "\">
    <ul class=\"menu-list-";
                    // line 35
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["menu_level"] ?? null), "html", null, true));
                    echo "\">

  ";
                }
                // line 38
                echo "
    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    // line 41
                    $context["item_classes"] = [0 => (($this->getAttribute(                    // line 42
$context["item"], "is_expanded", [])) ? ("expanded") : ("")), 1 => ((($this->getAttribute(                    // line 43
$context["item"], "is_expanded", []) && (($context["menu_level"] ?? null) == 0))) ? ("dropdown-item") : ("")), 2 => (($this->getAttribute(                    // line 44
$context["item"], "in_active_trail", [])) ? ("active") : (""))];
                    // line 47
                    echo "
      ";
                    // line 48
                    if ($this->getAttribute($context["item"], "is_expanded", [])) {
                        // line 49
                        echo "      <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null), 1 => "menu__item"], "method"), "html", null, true));
                        echo ">
        ";
                        // line 50
                        if (twig_test_empty(twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($context["item"], "url", [])))))) {
                            // line 51
                            echo "          <span class=\"dropdown-toggle menu__link nolink\" tabindex=\"0\">";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true));
                            echo "</span>
        ";
                        } else {
                            // line 53
                            echo "          ";
                            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", []), $this->env->getExtension('Drupal\twig_link_attributes\Twig\Extension\TwigLinkAttributes')->setLinkAttributes($this->getAttribute($context["item"], "url", []), ["class" => [0 => "dropdown-toggle menu__link"]])), "html", null, true));
                            echo "
        ";
                        }
                        // line 55
                        echo "        <span class=\"fa fa-angle-right\" data-toggle=\".";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ("menu-level-" . (($context["menu_level"] ?? null) + 1)), "html", null, true));
                        echo "\" tabindex=\"0\" title=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", []), "html", null, true));
                        echo "\"></span>
      ";
                    } else {
                        // line 57
                        echo "        <li";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null), 1 => "menu__item"], "method"), "html", null, true));
                        echo ">
        ";
                        // line 58
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getLink($this->getAttribute($context["item"], "title", []), $this->getAttribute($context["item"], "url", []), $this->getAttribute($this->getAttribute($context["item"], "attributes", []), "removeClass", [0 => "menu__item"], "method"), $this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "menu__link"], "method")), "html", null, true));
                        echo "
      ";
                    }
                    // line 60
                    echo "
      ";
                    // line 61
                    if ($this->getAttribute($context["item"], "below", [])) {
                        // line 62
                        echo "        ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", []), $this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => "nav", 1 => "navbar-nav"], "method"), (($context["menu_level"] ?? null) + 1))));
                        echo "
      ";
                    }
                    // line 64
                    echo "
      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "  ";
                if ((($context["menu_level"] ?? null) > 0)) {
                    // line 68
                    echo "    </ul>
    </div>
  ";
                }
                // line 71
                echo "
    ";
                // line 72
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 73
                    echo "      </ul>
    ";
                }
                // line 75
                echo "
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/custom/kwall/templates/menu/menu--push-nav-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 75,  188 => 73,  186 => 72,  183 => 71,  178 => 68,  175 => 67,  167 => 64,  161 => 62,  159 => 61,  156 => 60,  151 => 58,  146 => 57,  138 => 55,  132 => 53,  126 => 51,  124 => 50,  119 => 49,  117 => 48,  114 => 47,  112 => 44,  111 => 43,  110 => 42,  109 => 41,  107 => 40,  103 => 39,  100 => 38,  94 => 35,  89 => 34,  86 => 33,  80 => 31,  78 => 30,  75 => 29,  72 => 28,  69 => 27,  55 => 26,  48 => 24,  45 => 19,  43 => 18,);
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
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}

    {% if menu_level == 0 %}
      <ul{{ attributes.addClass('menu nav menu-level-' ~ menu_level) }}>
    {% endif %}
  {% if menu_level > 0 %}
    <div class=\"dropdown-menu-list menu-level-{{ menu_level }}\">
    <ul class=\"menu-list-{{ menu_level }}\">

  {% endif %}

    {% for item in items %}
      {%
        set item_classes = [
        item.is_expanded? 'expanded',
        item.is_expanded and menu_level == 0 ? 'dropdown-item',
        item.in_active_trail ? 'active',
      ]
      %}

      {% if item.is_expanded %}
      <li{{ item.attributes.addClass(item_classes,'menu__item' ) }}>
        {% if item.url|render|striptags|trim is empty %}
          <span class=\"dropdown-toggle menu__link nolink\" tabindex=\"0\">{{ item.title }}</span>
        {% else  %}
          {{ link(item.title, item.url|link_attributes({'class' : ['dropdown-toggle menu__link']})) }}
        {% endif %}
        <span class=\"fa fa-angle-right\" data-toggle=\".{{ 'menu-level-' ~ ( menu_level + 1 ) }}\" tabindex=\"0\" title=\"{{ item.title }}\"></span>
      {% else %}
        <li{{ item.attributes.addClass(item_classes,'menu__item') }}>
        {{ link(item.title, item.url, item.attributes.removeClass( 'menu__item' ), item.attributes.addClass( 'menu__link' ) ) }}
      {% endif %}

      {% if item.below %}
        {{ menus.menu_links(item.below, attributes.removeClass('nav', 'navbar-nav'), menu_level + 1) }}
      {% endif %}

      </li>
    {% endfor %}
  {% if menu_level > 0 %}
    </ul>
    </div>
  {% endif %}

    {% if menu_level == 0 %}
      </ul>
    {% endif %}

  {% endif %}
{% endmacro %}
", "themes/custom/kwall/templates/menu/menu--push-nav-menu.html.twig", "/var/www/template/d8/docroot/themes/custom/kwall/templates/menu/menu--push-nav-menu.html.twig");
    }
}
