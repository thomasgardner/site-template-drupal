<?php

/* themes/custom/kwall/templates/paragraphs/paragraph--gridder.html.twig */
class __TwigTemplate_29c00137ae9b04cb6112543d3f2b2f00504b75ca0b37b02a83226685bee80ca4 extends Twig_Template
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
        $tags = ["set" => 42, "block" => 49, "for" => 54, "if" => 57];
        $filters = ["clean_id" => 44, "first" => 54, "raw" => 60];
        $functions = ["file_url" => 58];

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                ['set', 'block', 'for', 'if'],
                ['clean_id', 'first', 'raw'],
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
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getId($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", []))), 2 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getId(($context["view_mode"] ?? null)))) : ("")), 3 => (( !$this->getAttribute(        // line 46
($context["paragraph"] ?? null), "isPublished", [], "method")) ? ("paragraph--unpublished") : (""))];
        // line 49
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 50
        echo "  <div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method"), "html", null, true));
        echo ">
    ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "  </div>
";
    }

    // line 51
    public function block_content($context, array $blocks = [])
    {
        // line 52
        echo "
    <ul class=\"gridder\">
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "field_gridder_items", []));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 55
                echo "      ";
                $context["paragraph_id"] = ("cta-block-" . $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "#paragraph", [], "array"), "id", []), "value", []));
                // line 56
                echo "      <li class=\"gridder-list\" data-griddercontent=\"#";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["paragraph_id"] ?? null), "html", null, true));
                echo "\">
        ";
                // line 57
                if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_gridder_items", []), $context["key"], [], "array"), "#paragraph", [], "array"), "field_image", []), 0, []), "entity", []), "field_media_image_12", []), "entity", []), "uri", []), "value", []) != "")) {
                    // line 58
                    echo "        <div class=\"icon-wrap\"><img src=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_gridder_items", []), $context["key"], [], "array"), "#paragraph", [], "array"), "field_image", []), 0, []), "entity", []), "field_media_image_12", []), "entity", []), "uri", []), "value", [])]), "html", null, true));
                    echo "\" /></div>
        ";
                }
                // line 60
                echo "        <div class=\"title\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "#paragraph", [], "array"), "field_title", []), 0, []), "value", [])));
                echo "</div>
      </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    </ul>

    <div class=\"hidden\">
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["content"] ?? null), "field_gridder_items", []));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            if ((twig_first($this->env, $context["key"]) != "#")) {
                // line 67
                echo "      ";
                $context["paragraph_id"] = ("cta-block-" . $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "#paragraph", [], "array"), "id", []), "value", []));
                // line 68
                echo "      <div id=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["paragraph_id"] ?? null), "html", null, true));
                echo "\" class=\"gridder-content\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "#paragraph", [], "array"), "field_body_formatted", []), 0, []), "value", [])));
                echo "</div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "    </div>

    ";
    }

    public function getTemplateName()
    {
        return "themes/custom/kwall/templates/paragraphs/paragraph--gridder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 70,  120 => 68,  117 => 67,  112 => 66,  107 => 63,  96 => 60,  90 => 58,  88 => 57,  83 => 56,  80 => 55,  75 => 54,  71 => 52,  68 => 51,  63 => 73,  61 => 51,  56 => 50,  50 => 49,  48 => 46,  47 => 45,  46 => 44,  45 => 42,);
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
    'paragraph--type--' ~ paragraph.bundle|clean_id,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_id,
    not paragraph.isPublished() ? 'paragraph--unpublished'
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }}>
    {% block content %}

    <ul class=\"gridder\">
    {% for key, item in content.field_gridder_items if key|first != '#' %}
      {% set paragraph_id = 'cta-block-' ~ item['#paragraph'].id.value %}
      <li class=\"gridder-list\" data-griddercontent=\"#{{ paragraph_id }}\">
        {% if content.field_gridder_items[key]['#paragraph'].field_image.0.entity.field_media_image_12.entity.uri.value != '' %}
        <div class=\"icon-wrap\"><img src=\"{{ file_url(content.field_gridder_items[key]['#paragraph'].field_image.0.entity.field_media_image_12.entity.uri.value) }}\" /></div>
        {% endif %}
        <div class=\"title\">{{ item['#paragraph'].field_title.0.value|raw }}</div>
      </li>
    {% endfor %}
    </ul>

    <div class=\"hidden\">
    {% for key, item in content.field_gridder_items if key|first != '#' %}
      {% set paragraph_id = 'cta-block-' ~ item['#paragraph'].id.value %}
      <div id=\"{{ paragraph_id }}\" class=\"gridder-content\">{{ item['#paragraph'].field_body_formatted.0.value|raw }}</div>
    {% endfor %}
    </div>

    {% endblock %}
  </div>
{% endblock paragraph %}
", "themes/custom/kwall/templates/paragraphs/paragraph--gridder.html.twig", "/var/www/template/d8/docroot/themes/custom/kwall/templates/paragraphs/paragraph--gridder.html.twig");
    }
}
