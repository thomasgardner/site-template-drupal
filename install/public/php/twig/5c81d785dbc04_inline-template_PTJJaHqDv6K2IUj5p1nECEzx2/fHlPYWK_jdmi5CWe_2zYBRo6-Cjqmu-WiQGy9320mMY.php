<?php

/* {# inline_template_start #}    <div class="controls" data-autoplay="{{ field_boolean|render|striptags|trim }}">
      <div class="custom-controls-container">
        <div class="pause fa fa-pause"></div>
        <div class="play fa fa-play d-none"></div>
      </div>
      <a href="#" class="flex-prev fa fa-chevron-left"></a>
      <a href="#" class="flex-next fa fa-chevron-right"></a>
    </div>
 */
class __TwigTemplate_22ed8d1438d7763d46933a231cc9a3031986b49ca9a75aa8c0417d22f93f3ce9 extends Twig_Template
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
        $filters = ["trim" => 1, "striptags" => 1, "render" => 1];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                [],
                ['trim', 'striptags', 'render'],
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
        echo "    <div class=\"controls\" data-autoplay=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["field_boolean"] ?? null)))), "html", null, true));
        echo "\">
      <div class=\"custom-controls-container\">
        <div class=\"pause fa fa-pause\"></div>
        <div class=\"play fa fa-play d-none\"></div>
      </div>
      <a href=\"#\" class=\"flex-prev fa fa-chevron-left\"></a>
      <a href=\"#\" class=\"flex-next fa fa-chevron-right\"></a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}    <div class=\"controls\" data-autoplay=\"{{ field_boolean|render|striptags|trim }}\">
      <div class=\"custom-controls-container\">
        <div class=\"pause fa fa-pause\"></div>
        <div class=\"play fa fa-play d-none\"></div>
      </div>
      <a href=\"#\" class=\"flex-prev fa fa-chevron-left\"></a>
      <a href=\"#\" class=\"flex-next fa fa-chevron-right\"></a>
    </div>
";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}    <div class=\"controls\" data-autoplay=\"{{ field_boolean|render|striptags|trim }}\">
      <div class=\"custom-controls-container\">
        <div class=\"pause fa fa-pause\"></div>
        <div class=\"play fa fa-play d-none\"></div>
      </div>
      <a href=\"#\" class=\"flex-prev fa fa-chevron-left\"></a>
      <a href=\"#\" class=\"flex-next fa fa-chevron-right\"></a>
    </div>
", "{# inline_template_start #}    <div class=\"controls\" data-autoplay=\"{{ field_boolean|render|striptags|trim }}\">
      <div class=\"custom-controls-container\">
        <div class=\"pause fa fa-pause\"></div>
        <div class=\"play fa fa-play d-none\"></div>
      </div>
      <a href=\"#\" class=\"flex-prev fa fa-chevron-left\"></a>
      <a href=\"#\" class=\"flex-next fa fa-chevron-right\"></a>
    </div>
", "");
    }
}
