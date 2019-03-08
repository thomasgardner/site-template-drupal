<?php

/* {# inline_template_start #}<div class="hero-slide-wrap">
  <div class="hero-media-wrap">
    {{ field_mp4 }} {{ field_webm }}
    <div class="hero-img">{{ field_media_image_2 }}</div>
  </div>
  <div class="hero-content-wrap"> 
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          {{ field_title }}
          {{ field_subtitle }}
          {{ field_body_unformatted }}
          {{ field_links }}
        </div>
      </div>
    </div>
  </div>
</div> */
class __TwigTemplate_70af5cfabf28e0308069bc5286f6b296604d99257d264ac0609bae7a70b040a4 extends Twig_Template
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
        echo "<div class=\"hero-slide-wrap\">
  <div class=\"hero-media-wrap\">
    ";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_mp4"] ?? null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_webm"] ?? null), "html", null, true));
        echo "
    <div class=\"hero-img\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_media_image_2"] ?? null), "html", null, true));
        echo "</div>
  </div>
  <div class=\"hero-content-wrap\"> 
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_title"] ?? null), "html", null, true));
        echo "
          ";
        // line 11
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_subtitle"] ?? null), "html", null, true));
        echo "
          ";
        // line 12
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_body_unformatted"] ?? null), "html", null, true));
        echo "
          ";
        // line 13
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_links"] ?? null), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"hero-slide-wrap\">
  <div class=\"hero-media-wrap\">
    {{ field_mp4 }} {{ field_webm }}
    <div class=\"hero-img\">{{ field_media_image_2 }}</div>
  </div>
  <div class=\"hero-content-wrap\"> 
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ field_title }}
          {{ field_subtitle }}
          {{ field_body_unformatted }}
          {{ field_links }}
        </div>
      </div>
    </div>
  </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 13,  87 => 12,  83 => 11,  79 => 10,  70 => 4,  64 => 3,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# inline_template_start #}<div class=\"hero-slide-wrap\">
  <div class=\"hero-media-wrap\">
    {{ field_mp4 }} {{ field_webm }}
    <div class=\"hero-img\">{{ field_media_image_2 }}</div>
  </div>
  <div class=\"hero-content-wrap\"> 
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ field_title }}
          {{ field_subtitle }}
          {{ field_body_unformatted }}
          {{ field_links }}
        </div>
      </div>
    </div>
  </div>
</div>", "{# inline_template_start #}<div class=\"hero-slide-wrap\">
  <div class=\"hero-media-wrap\">
    {{ field_mp4 }} {{ field_webm }}
    <div class=\"hero-img\">{{ field_media_image_2 }}</div>
  </div>
  <div class=\"hero-content-wrap\"> 
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          {{ field_title }}
          {{ field_subtitle }}
          {{ field_body_unformatted }}
          {{ field_links }}
        </div>
      </div>
    </div>
  </div>
</div>", "");
    }
}
