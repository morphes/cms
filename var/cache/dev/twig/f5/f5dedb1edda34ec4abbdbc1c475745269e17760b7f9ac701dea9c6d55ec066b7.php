<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/form/tags.html.twig */
class __TwigTemplate_eb7c82da61e9fd95c24bb6b5c6fd8391eeb0ca2e632d2603815ba816ec063fd0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_product_products_tags_items_widget' => [$this, 'block__product_products_tags_items_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form/tags.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form/tags.html.twig"));

        // line 1
        $this->displayBlock('_product_products_tags_items_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block__product_products_tags_items_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_product_products_tags_items_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_product_products_tags_items_widget"));

        // line 2
        echo "    ";
        $context["currentTags"] = [];
        echo " 
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "parent", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "data", [], "any", false, false, false, 3), "producttagitem", [], "any", false, false, false, 3));
        foreach ($context['_seq'] as $context["key"] => $context["tag_item"]) {
            // line 4
            echo "        ";
            $context["currentTags"] = twig_array_merge((isset($context["currentTags"]) || array_key_exists("currentTags", $context) ? $context["currentTags"] : (function () { throw new RuntimeError('Variable "currentTags" does not exist.', 4, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["tag_item"], "id", [], "any", false, false, false, 4)]);
            // line 5
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag_item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 6, $this->source); })()), "getTree", [], "method", false, false, false, 6));
        foreach ($context['_seq'] as $context["key"] => $context["tag"]) {
            // line 7
            echo "        <div class=\"form-group row\">
            <label for=\"tag";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"col-sm-2 col-form-label\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</label>
            <div class=\"col-sm-10\">
                <select id=\"tag";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"select2 form-control\">
                    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tag"], "getProductTagItems", [], "method", false, false, false, 11));
            foreach ($context['_seq'] as $context["key_tag_item"] => $context["tag_item"]) {
                // line 12
                echo "                        <option id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag_item"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "\" ";
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["tag_item"], "id", [], "any", false, false, false, 12), (isset($context["currentTags"]) || array_key_exists("currentTags", $context) ? $context["currentTags"] : (function () { throw new RuntimeError('Variable "currentTags" does not exist.', 12, $this->source); })()))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag_item"], "name", [], "any", false, false, false, 12), "html", null, true);
                echo "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key_tag_item'], $context['tag_item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                </select>
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.select2').select2();
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/form/tags.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  128 => 18,  119 => 14,  104 => 12,  100 => 11,  96 => 10,  89 => 8,  86 => 7,  81 => 6,  75 => 5,  72 => 4,  68 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block _product_products_tags_items_widget %}
    {% set currentTags = [] %} 
    {% for key, tag_item in form.parent.vars.data.producttagitem %}
        {% set currentTags = currentTags|merge([tag_item.id]) %}
    {% endfor %}
    {% for key, tag in tags.getTree() %}
        <div class=\"form-group row\">
            <label for=\"tag{{ tag.id }}\" class=\"col-sm-2 col-form-label\">{{ tag.name }}</label>
            <div class=\"col-sm-10\">
                <select id=\"tag{{ tag.id }}\" class=\"select2 form-control\">
                    {% for key_tag_item, tag_item in tag.getProductTagItems() %}
                        <option id=\"{{ tag_item.id }}\" {% if tag_item.id in currentTags %} selected {% endif %}>{{ tag_item.name }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
    {% endfor %}
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('.select2').select2();
        });
    </script>
{% endblock %}", "admin/form/tags.html.twig", "/var/www/symfony/templates/admin/form/tags.html.twig");
    }
}
