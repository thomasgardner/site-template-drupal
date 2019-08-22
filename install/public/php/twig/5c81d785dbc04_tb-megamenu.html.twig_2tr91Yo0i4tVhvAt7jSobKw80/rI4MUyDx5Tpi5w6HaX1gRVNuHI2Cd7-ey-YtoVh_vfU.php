<?php

/* modules/contrib/tb_megamenu/templates/tb-megamenu.html.twig */
class __TwigTemplate_24ea73b82f8487d1dd77c0e7ba2e70aef83b02d87d8dd86f4daac9e1f7869ba5 extends Twig_Template
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
        $tags = ["if" => 1];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['if'],
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

        // line 1
        if ((isset($context["css_style"]) || array_key_exists("css_style", $context))) {
            // line 2
            echo "<style type=\"text/css\">
  .tb-megamenu.animate .mega > .mega-dropdown-menu, .tb-megamenu.animate.slide .mega > .mega-dropdown-menu > div {
  ";
            // line 4
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["css_style"] ?? null), "html", null, true));
            echo "
  }
</style>
";
        }
        // line 8
        echo "<div ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 9
        if ((($context["section"] ?? null) == "frontend")) {
            // line 10
            echo "    <button data-target=\".nav-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar tb-megamenu-button\" type=\"button\">
      <i class=\"fa fa-reorder\"></i>
    </button>
    <div class=\"nav-collapse ";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((($this->getAttribute(($context["block_config"] ?? null), "always-show-submenu", [], "array")) ? (" always-show") : (""))));
            echo "\">
  ";
        }
        // line 15
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
  ";
        // line 16
        if ((($context["section"] ?? null) == "frontend")) {
            // line 17
            echo "    </div>
  ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/tb_megamenu/templates/tb-megamenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  80 => 17,  78 => 16,  73 => 15,  68 => 13,  63 => 10,  61 => 9,  56 => 8,  49 => 4,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if css_style is defined %}
<style type=\"text/css\">
  .tb-megamenu.animate .mega > .mega-dropdown-menu, .tb-megamenu.animate.slide .mega > .mega-dropdown-menu > div {
  {{ css_style }}
  }
</style>
{% endif %}
<div {{ attributes }}>
  {% if section == 'frontend' %}
    <button data-target=\".nav-collapse\" data-toggle=\"collapse\" class=\"btn btn-navbar tb-megamenu-button\" type=\"button\">
      <i class=\"fa fa-reorder\"></i>
    </button>
    <div class=\"nav-collapse {{ block_config['always-show-submenu'] ? ' always-show' : '' }}\">
  {% endif %}
  {{ content }}
  {% if section == 'frontend' %}
    </div>
  {% endif %}
</div>
", "modules/contrib/tb_megamenu/templates/tb-megamenu.html.twig", "/var/www/template/d8/docroot/modules/contrib/tb_megamenu/templates/tb-megamenu.html.twig");
    }
}
