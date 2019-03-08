<?php

/* modules/contrib/tb_megamenu/templates/tb-megamenu-item.html.twig */
class __TwigTemplate_6094762712dfe2dac96374866ffaf39a8f57dedc67ac8ddba993646d94bb21b5 extends Twig_Template
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
        $tags = ["set" => 1, "if" => 2];
        $filters = ["raw" => 14, "t" => 18];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'if'],
                ['raw', 't'],
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
        $context["linkAttributes"] = $this->getAttribute(($context["link"] ?? null), "attributes", [], "array");
        // line 2
        if (($this->getAttribute(($context["link"] ?? null), "url", [], "array", true, true) &&  !twig_test_empty($this->getAttribute(($context["link"] ?? null), "url", [], "array")))) {
            // line 3
            echo "  ";
            $context["tag"] = "a";
            // line 4
            echo "  ";
            $context["href"] = ((" href='" . $this->getAttribute(($context["link"] ?? null), "url", [], "array")) . "'");
        } else {
            // line 6
            echo "  ";
            $context["tag"] = "span";
            // line 7
            echo "  ";
            $context["href"] = "";
            // line 8
            echo "  ";
            $context["linkAttributes"] = $this->getAttribute(($context["linkAttributes"] ?? null), "addClass", [0 => "tb-megamenu-no-link"], "method");
            // line 9
            echo "  ";
            if (twig_test_empty(($context["submenu"] ?? null))) {
                // line 10
                echo "    ";
                $context["linkAttributes"] = $this->getAttribute(($context["linkAttributes"] ?? null), "addClass", [0 => "tb-megamenu-no-submenu"], "method");
                // line 11
                echo "  ";
            }
        }
        // line 13
        echo "<li ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo " >
  <";
        // line 14
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tag"] ?? null), "html", null, true));
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["href"] ?? null)));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["link"] ?? null), "attributes", [], "array"), "html", null, true));
        echo ">
    ";
        // line 15
        if ($this->getAttribute(($context["item_config"] ?? null), "xicon", [], "array")) {
            // line 16
            echo "      <i class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["item_config"] ?? null), "xicon", [], "array"), "html", null, true));
            echo "\"></i>
    ";
        }
        // line 18
        echo "    ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute(($context["link"] ?? null), "title_translate", []))));
        echo "
    ";
        // line 19
        if ((($context["submenu"] ?? null) && $this->getAttribute(($context["block_config"] ?? null), "auto-arrow", [], "array"))) {
            // line 20
            echo "      <span class=\"caret\"></span>
    ";
        }
        // line 22
        echo "    ";
        if ($this->getAttribute(($context["item_config"] ?? null), "caption", [], "array")) {
            // line 23
            echo "      <span class=\"mega-caption\"> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->getAttribute(($context["item_config"] ?? null), "caption", [], "array"))));
            echo "</span>
    ";
        }
        // line 25
        echo "  </";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tag"] ?? null), "html", null, true));
        echo ">
  ";
        // line 26
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submenu"] ?? null), "html", null, true));
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/tb_megamenu/templates/tb-megamenu-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 26,  113 => 25,  107 => 23,  104 => 22,  100 => 20,  98 => 19,  93 => 18,  87 => 16,  85 => 15,  78 => 14,  73 => 13,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  54 => 6,  50 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set linkAttributes = link['attributes'] %}
{% if ( link['url'] is defined and link['url'] is not empty ) %}
  {% set tag = \"a\" %}
  {% set href = \" href='#{ link['url'] }'\" %}
{% else  %}
  {% set tag = 'span' %}
  {% set href = '' %}
  {% set linkAttributes = linkAttributes.addClass('tb-megamenu-no-link') %}
  {% if submenu is empty %}
    {% set linkAttributes = linkAttributes.addClass('tb-megamenu-no-submenu') %}
  {% endif %}
{% endif %}
<li {{ attributes }} >
  <{{ tag }}{{ href|raw }} {{ link['attributes'] }}>
    {% if  item_config['xicon'] %}
      <i class=\"{{ item_config['xicon'] }}\"></i>
    {% endif %}
    {{ link.title_translate|t }}
    {% if submenu and block_config['auto-arrow'] %}
      <span class=\"caret\"></span>
    {% endif %}
    {% if item_config['caption'] %}
      <span class=\"mega-caption\"> {{ item_config['caption']|t }}</span>
    {% endif %}
  </{{ tag }}>
  {{ submenu }}
</li>
", "modules/contrib/tb_megamenu/templates/tb-megamenu-item.html.twig", "/var/www/template/d8/docroot/modules/contrib/tb_megamenu/templates/tb-megamenu-item.html.twig");
    }
}
