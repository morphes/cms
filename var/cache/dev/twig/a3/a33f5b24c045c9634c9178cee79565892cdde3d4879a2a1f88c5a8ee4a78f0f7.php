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

/* admin/form/products_tags_items.html.twig */
class __TwigTemplate_35b29d65aeefc4ff06fb0e89c2b9ba626c3d12dbdccd828e70cdac2403063c0e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            '_producttag_products_tags_items_widget' => [$this, 'block__producttag_products_tags_items_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form/products_tags_items.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/form/products_tags_items.html.twig"));

        // line 1
        $this->displayBlock('_producttag_products_tags_items_widget', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block__producttag_products_tags_items_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_producttag_products_tags_items_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_producttag_products_tags_items_widget"));

        // line 2
        echo "
    ";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "parent", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "data", [], "any", false, false, false, 3), "type", [], "any", false, false, false, 3) == "enum")) {
            // line 4
            echo "        <div class=\"row\">
            <a class=\"btn btn-default\" onclick=\"add_option()\">
                <span class=\"glyphicon glyphicon-plus\">+</span>
            </a>
        </div>

        <ul class=\"list-inline ui-sortable\" id=\"options\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "parent", [], "any", false, false, false, 11), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11), "productTagItems", [], "any", false, false, false, 11));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 12
                echo "                <li class=\"col-xs-12 col-sm-6 col-md-3\" eid=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
                    <div class=\"thumbnail\">
                        <a class=\"btn pull-right\" onclick=\"remove_option(this)\">
                            <span class=\"glyphicon glyphicon-remove\">x</span>
                        </a>
                        <div class=\"list-option\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "name", [], "any", false, false, false, 17), "html", null, true);
                echo "</div>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
    ";
        }
        // line 23
        echo "
    <script type=\"text/javascript\">
        function add_option() {
            var value = prompt(\"Новая опция...\");
            \$.post(\"/admin/?\" + \$.param({'entity' : 'ProductTag', 'action' : 'add'}), {
                'option': value,
                'tag_id': ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "parent", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "data", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "
            }, function (data) {
                window.location.reload();
            }, 'json');
        }
        function remove_option(e) {
            if(confirm('Удалить?')) {
                \$.post(\"/admin/?\" + \$.param({'entity' : 'ProductTag', 'action' : 'remove'}), {
                    'tag_id': \$(e).parent().parent().attr('eid')
                }, function (data) {
                    window.location.reload();
                });
            }
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/form/products_tags_items.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  112 => 29,  104 => 23,  100 => 21,  90 => 17,  81 => 12,  77 => 11,  68 => 4,  66 => 3,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block _producttag_products_tags_items_widget %}

    {% if form.parent.vars.data.type == 'enum' %}
        <div class=\"row\">
            <a class=\"btn btn-default\" onclick=\"add_option()\">
                <span class=\"glyphicon glyphicon-plus\">+</span>
            </a>
        </div>

        <ul class=\"list-inline ui-sortable\" id=\"options\">
            {% for row in form.parent.vars.data.productTagItems %}
                <li class=\"col-xs-12 col-sm-6 col-md-3\" eid=\"{{ row.id }}\">
                    <div class=\"thumbnail\">
                        <a class=\"btn pull-right\" onclick=\"remove_option(this)\">
                            <span class=\"glyphicon glyphicon-remove\">x</span>
                        </a>
                        <div class=\"list-option\">{{ row.name }}</div>
                    </div>
                </li>
            {% endfor %}
        </ul>
    {% endif %}

    <script type=\"text/javascript\">
        function add_option() {
            var value = prompt(\"Новая опция...\");
            \$.post(\"/admin/?\" + \$.param({'entity' : 'ProductTag', 'action' : 'add'}), {
                'option': value,
                'tag_id': {{ form.parent.vars.data.id }}
            }, function (data) {
                window.location.reload();
            }, 'json');
        }
        function remove_option(e) {
            if(confirm('Удалить?')) {
                \$.post(\"/admin/?\" + \$.param({'entity' : 'ProductTag', 'action' : 'remove'}), {
                    'tag_id': \$(e).parent().parent().attr('eid')
                }, function (data) {
                    window.location.reload();
                });
            }
        }
    </script>

{% endblock %}
", "admin/form/products_tags_items.html.twig", "/var/www/symfony/templates/admin/form/products_tags_items.html.twig");
    }
}
