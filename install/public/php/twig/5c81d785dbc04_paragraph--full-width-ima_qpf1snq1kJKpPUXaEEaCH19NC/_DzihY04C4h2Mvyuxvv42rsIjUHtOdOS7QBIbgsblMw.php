<?php

/* themes/custom/kwall/templates/paragraphs/paragraph--full-width-image-section.html.twig */
class __TwigTemplate_2767fc2c7ac1133ce2722da10dc07c3d577020de96ebd74f64834205c4004b04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $tags = ["set" => 42, "block" => 52, "if" => 53];
        $filters = ["clean_id" => 45, "without" => 57];
        $functions = ["file_url" => 50];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_id', 'without'],
                ['file_url']
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

        // line 42
        $context["classes"] = [0 => "paragraph", 1 => "container", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getId($this->getAttribute(        // line 45
($context["paragraph"] ?? null), "bundle", []))), 3 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getId(($context["view_mode"] ?? null)))) : ("")), 4 => (( !$this->getAttribute(        // line 47
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 50
        $context["image_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, [], "array"), "#media", [], "array"), "field_media_image_5", []), "entity", []), "uri", []), "value", [])]);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 53
        echo "<div id=\"paragraph-";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["paragraph"] ?? null), "id", [], "method"), "html", null, true));
        echo "\" class=\"full-width-img-section";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_boolean", []), 0, []), "#markup", [], "array") == "On")) {
            echo " init";
        }
        echo "\" style=\"background-image:url('";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["image_url"] ?? null), "html", null, true));
        echo "');background-size:cover;\" data-parallax-speed=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_parallax_speed", []), 0, []), "#markup", [], "array"), "html", null, true));
        echo "\">
  <div";
        // line 54
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">
    ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "  </div>
</div>
";
    }

    // line 55
    public function block_content($context, array $blocks = [])
    {
        // line 56
        echo "      <div class=\"row\">
        <div class=\"col-md-12\">";
        // line 57
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_image", "field_boolean", "field_parallax_speed"), "html", null, true));
        echo "</div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/kwall/templates/paragraphs/paragraph--full-width-image-section.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 57,  89 => 56,  86 => 55,  80 => 60,  78 => 55,  74 => 54,  61 => 53,  55 => 52,  52 => 51,  50 => 50,  48 => 47,  47 => 46,  46 => 45,  45 => 42,);
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
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'paragraph',
    'container',
    'paragraph--type--' ~ paragraph.bundle|clean_id,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_id,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% set image_url = file_url(content.field_image[0]['#media'].field_media_image_5.entity.uri.value) %}

{% block paragraph %}
<div id=\"paragraph-{{ paragraph.id() }}\" class=\"full-width-img-section{% if content.field_boolean.0['#markup'] == 'On' %} init{% endif %}\" style=\"background-image:url('{{ image_url }}');background-size:cover;\" data-parallax-speed=\"{{ content.field_parallax_speed.0['#markup'] }}\">
  <div{{ attributes.addClass(classes) }}>
    {% block content %}
      <div class=\"row\">
        <div class=\"col-md-12\">{{ content|without('field_image','field_boolean','field_parallax_speed') }}</div>
      </div>
    {% endblock %}
  </div>
</div>
{% endblock paragraph %}", "themes/custom/kwall/templates/paragraphs/paragraph--full-width-image-section.html.twig", "/var/www/template/d8/docroot/themes/custom/kwall/templates/paragraphs/paragraph--full-width-image-section.html.twig");
    }
}
