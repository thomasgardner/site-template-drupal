<?php

/* {# inline_template_start #}<a href="{{ view_node }}"><img class="img-fluid" src="http://via.placeholder.com/175x225" /></a> */
class __TwigTemplate_4f2de2f2e570517cb5884419f478061ad0a25f5a5fd4bc1eaa1e6bfb1cb600b6 extends Twig_Template
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
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
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
        echo "<a href=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\"><img class=\"img-fluid\" src=\"http://via.placeholder.com/175x225\" /></a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"{{ view_node }}\"><img class=\"img-fluid\" src=\"http://via.placeholder.com/175x225\" /></a>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<a href=\"{{ view_node }}\"><img class=\"img-fluid\" src=\"http://via.placeholder.com/175x225\" /></a>", "{# inline_template_start #}<a href=\"{{ view_node }}\"><img class=\"img-fluid\" src=\"http://via.placeholder.com/175x225\" /></a>", "");
    }
}
