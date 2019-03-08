<?php

/* themes/custom/kwall/templates/paragraphs/paragraph--interior-slideshow.html.twig */
class __TwigTemplate_1c953e75a01f3a60ca5a65e480ec67dc691f7055c9289766f3b2f2fab475e9a0 extends Twig_Template
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
        $tags = ["set" => 42, "block" => 51];
        $filters = ["clean_id" => 46, "without" => 55];
        $functions = [];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'block'],
                ['clean_id', 'without'],
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

        // line 42
        $context["classes"] = [0 => "list-unstyled", 1 => "slides", 2 => "paragraph", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getId($this->getAttribute(        // line 46
($context["paragraph"] ?? null), "bundle", []))), 4 => ((        // line 47
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getId(($context["view_mode"] ?? null)))) : ("")), 5 => (( !$this->getAttribute(        // line 48
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 51
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 52
        echo "  <div class=\"flexslider interior-slideshow\" data-autoplay=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_boolean", []), 0, []), "value", []), "html", null, true));
        echo "\">
    <ul";
        // line 53
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">
      ";
        // line 54
        $this->displayBlock('content', $context, $blocks);
        // line 57
        echo "    </ul>
    <div class=\"controls\">
      <div class=\"custom-controls-container\">
        <div class=\"pause fa fa-pause\"></div>
        <div class=\"play fa fa-play d-none\"></div>
      </div>
      <a href=\"#\" class=\"flex-prev fa fa-chevron-left\"></a>
      <a href=\"#\" class=\"flex-next fa fa-chevron-right\"></a>
    </div>
  </div>
";
    }

    // line 54
    public function block_content($context, array $blocks = [])
    {
        // line 55
        echo "        ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_boolean"), "html", null, true));
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/kwall/templates/paragraphs/paragraph--interior-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 55,  81 => 54,  67 => 57,  65 => 54,  61 => 53,  56 => 52,  50 => 51,  48 => 48,  47 => 47,  46 => 46,  45 => 42,);
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
    'list-unstyled',
    'slides',
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_id,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_id,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
  <div class=\"flexslider interior-slideshow\" data-autoplay=\"{{ paragraph.field_boolean.0.value }}\">
    <ul{{ attributes.addClass(classes) }}>
      {% block content %}
        {{ content|without('field_boolean') }}
      {% endblock %}
    </ul>
    <div class=\"controls\">
      <div class=\"custom-controls-container\">
        <div class=\"pause fa fa-pause\"></div>
        <div class=\"play fa fa-play d-none\"></div>
      </div>
      <a href=\"#\" class=\"flex-prev fa fa-chevron-left\"></a>
      <a href=\"#\" class=\"flex-next fa fa-chevron-right\"></a>
    </div>
  </div>
{% endblock paragraph %}
", "themes/custom/kwall/templates/paragraphs/paragraph--interior-slideshow.html.twig", "/var/www/template/d8/docroot/themes/custom/kwall/templates/paragraphs/paragraph--interior-slideshow.html.twig");
    }
}
