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

/* @WebProfiler/Collector/request.html.twig */
class __TwigTemplate_b7ab32e0627dd4c2ac60894cd1cdc25ae160beaf568ebef942846a4abe77a17e extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/request.html.twig", 1);
        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["helper"] = $this;
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 6, $this->source); })()), "controller", []));
        echo "
    ";
        $context["request_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "redirect", [])) {
            // line 10
            echo "        ";
            ob_start();
            // line 11
            echo "            ";
            echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "redirect", []), "controller", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "redirect", []), "route", []), ((("GET" != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "redirect", []), "method", []))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 11, $this->source); })()), "redirect", []), "method", [])) : ("")));
            echo "
        ";
            $context["redirect_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "forwardtoken", [])) {
            // line 16
            echo "        ";
            $context["forward_profile"] = twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 16, $this->source); })()), "childByToken", [0 => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 16, $this->source); })()), "forwardtoken", [])], "method");
            // line 17
            echo "        ";
            ob_start();
            // line 18
            echo "            ";
            echo $context["helper"]->macro_set_handler((((isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 18, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forward_profile"]) || array_key_exists("forward_profile", $context) ? $context["forward_profile"] : (function () { throw new RuntimeError('Variable "forward_profile" does not exist.', 18, $this->source); })()), "collector", [0 => "request"], "method"), "controller", [])) : ("n/a")));
            echo "
        ";
            $context["forward_handler"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 20
            echo "    ";
        }
        // line 21
        echo "
    ";
        // line 22
        $context["request_status_code_color"] = (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "statuscode", []) >= 400)) ? ("red") : ((((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 22, $this->source); })()), "statuscode", []) >= 300)) ? ("yellow") : ("green"))));
        // line 23
        echo "
    ";
        // line 24
        ob_start();
        // line 25
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        echo twig_escape_filter($this->env, (isset($context["request_status_code_color"]) || array_key_exists("request_status_code_color", $context) ? $context["request_status_code_color"] : (function () { throw new RuntimeError('Variable "request_status_code_color" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 25, $this->source); })()), "statuscode", []), "html", null, true);
        echo "</span>
        ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 26, $this->source); })()), "route", [])) {
            // line 27
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "redirect", [])) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/redirect.svg");
            }
            // line 28
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 28, $this->source); })()), "forwardtoken", [])) {
                echo twig_include($this->env, $context, "@WebProfiler/Icon/forward.svg");
            }
            // line 29
            echo "            <span class=\"sf-toolbar-label\">";
            echo twig_escape_filter($this->env, ((("GET" != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "method", []))) ? (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 29, $this->source); })()), "method", [])) : ("")), "html", null, true);
            echo " @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 30, $this->source); })()), "route", []), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
    ";
        // line 34
        ob_start();
        // line 35
        echo "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "statuscode", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "statustext", []), "html", null, true);
        echo "</span>
            </div>

            ";
        // line 41
        if (("GET" != twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "method", []))) {
            // line 42
            echo "<div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 44, $this->source); })()), "method", []), "html", null, true);
            echo "</span>
                </div>";
        }
        // line 47
        echo "
            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["request_handler"]) || array_key_exists("request_handler", $context) ? $context["request_handler"] : (function () { throw new RuntimeError('Variable "request_handler" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>";
        // line 55
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["collector"] ?? null), "route", []), "n/a")) : ("n/a")), "html", null, true);
        echo "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>";
        // line 60
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 60, $this->source); })()), "sessionmetadata", []))) {
            echo "yes";
        } else {
            echo "no";
        }
        echo "</span>
            </div>
        </div>

        ";
        // line 64
        if ((isset($context["redirect_handler"]) || array_key_exists("redirect_handler", $context))) {
            // line 65
            echo "<div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 68, $this->source); })()), "redirect", []), "status_code", []), "html", null, true);
            echo "</span>
                        Redirect from
                    </b>
                    <span>
                        ";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["redirect_handler"]) || array_key_exists("redirect_handler", $context) ? $context["redirect_handler"] : (function () { throw new RuntimeError('Variable "redirect_handler" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "
                        (<a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "redirect", []), "token", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 73, $this->source); })()), "redirect", []), "token", []), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 78
        echo "
        ";
        // line 79
        if ((isset($context["forward_handler"]) || array_key_exists("forward_handler", $context))) {
            // line 80
            echo "            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        ";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["forward_handler"]) || array_key_exists("forward_handler", $context) ? $context["forward_handler"] : (function () { throw new RuntimeError('Variable "forward_handler" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "
                        (<a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 85, $this->source); })()), "forwardtoken", [])]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 85, $this->source); })()), "forwardtoken", []), "html", null, true);
            echo "</a>)
                    </span>
                </div>
            </div>
        ";
        }
        // line 90
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 91
        echo "
    ";
        // line 92
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 92, $this->source); })())]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 96
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 97
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
        <strong>Request / Response</strong>
    </span>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 103
        echo "    ";
        $context["helper"] = $this;
        // line 104
        echo "
    <h2>
        ";
        // line 106
        echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "controller", []));
        echo "
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                ";
        // line 116
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 116, $this->source); })()), "requestquery", []), "all", []))) {
            // line 117
            echo "                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                ";
        } else {
            // line 121
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "requestquery", []), "maxDepth" => 1], false);
            echo "
                ";
        }
        // line 123
        echo "
                <h3>POST Parameters</h3>

                ";
        // line 126
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 126, $this->source); })()), "requestrequest", []), "all", []))) {
            // line 127
            echo "                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                ";
        } else {
            // line 131
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), "requestrequest", []), "maxDepth" => 1], false);
            echo "
                ";
        }
        // line 133
        echo "
                <h3>Request Attributes</h3>

                ";
        // line 136
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "requestattributes", []), "all", []))) {
            // line 137
            echo "                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                ";
        } else {
            // line 141
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 141, $this->source); })()), "requestattributes", [])], false);
            echo "
                ";
        }
        // line 143
        echo "
                <h3>Request Headers</h3>
                ";
        // line 145
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 145, $this->source); })()), "requestheaders", []), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "

                <h3>Request Content</h3>

                ";
        // line 149
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 149, $this->source); })()), "content", []) == false)) {
            // line 150
            echo "                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 153
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 153, $this->source); })()), "content", [])) {
            // line 154
            echo "                    <div class=\"card\">
                        <pre class=\"break-long-words\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 155, $this->source); })()), "content", []), "html", null, true);
            echo "</pre>
                    </div>
                ";
        } else {
            // line 158
            echo "                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                ";
        }
        // line 162
        echo "
                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                ";
        // line 165
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 165, $this->source); })()), "dotenvvars", [])], false);
        echo "

                <h4>Defined as regular env variables</h4>
                ";
        // line 168
        $context["requestserver"] = [];
        // line 169
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 169, $this->source); })()), "requestserver", []));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (!twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 169, $this->source); })()), "dotenvvars", []), "keys", []))) {
                // line 170
                echo "                    ";
                $context["requestserver"] = twig_array_merge((isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 170, $this->source); })()), [$context["key"] => $context["value"]]);
                // line 171
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                ";
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => (isset($context["requestserver"]) || array_key_exists("requestserver", $context) ? $context["requestserver"] : (function () { throw new RuntimeError('Variable "requestserver" does not exist.', 172, $this->source); })())], false);
        echo "
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                ";
        // line 182
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 182, $this->source); })()), "responseheaders", []), "labels" => [0 => "Header", 1 => "Value"], "maxDepth" => 1], false);
        echo "
            </div>
        </div>

        <div class=\"tab ";
        // line 186
        echo (((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "requestcookies", []), "all", [])) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "responsecookies", []), "all", [])))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                ";
        // line 192
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 192, $this->source); })()), "requestcookies", []), "all", []))) {
            // line 193
            echo "                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                ";
        } else {
            // line 197
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 197, $this->source); })()), "requestcookies", [])], false);
            echo "
                ";
        }
        // line 199
        echo "
                <h3>Response Cookies</h3>

                ";
        // line 202
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 202, $this->source); })()), "responsecookies", []), "all", []))) {
            // line 203
            echo "                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                ";
        } else {
            // line 207
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 207, $this->source); })()), "responsecookies", [])], true);
            echo "
                ";
        }
        // line 209
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 212
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 212, $this->source); })()), "sessionmetadata", []))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                ";
        // line 218
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 218, $this->source); })()), "sessionmetadata", []))) {
            // line 219
            echo "                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                ";
        } else {
            // line 223
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 223, $this->source); })()), "sessionmetadata", [])], false);
            echo "
                ";
        }
        // line 225
        echo "
                <h3>Session Attributes</h3>

                ";
        // line 228
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 228, $this->source); })()), "sessionattributes", []))) {
            // line 229
            echo "                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                ";
        } else {
            // line 233
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 233, $this->source); })()), "sessionattributes", []), "labels" => [0 => "Attribute", 1 => "Value"]], false);
            echo "
                ";
        }
        // line 235
        echo "            </div>
        </div>

        <div class=\"tab ";
        // line 238
        echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 238, $this->source); })()), "flashes", []))) ? ("disabled") : (""));
        echo "\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                ";
        // line 244
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 244, $this->source); })()), "flashes", []))) {
            // line 245
            echo "                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                ";
        } else {
            // line 249
            echo "                    ";
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/table.html.twig", ["data" => twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 249, $this->source); })()), "flashes", [])], false);
            echo "
                ";
        }
        // line 251
        echo "            </div>
        </div>

        ";
        // line 254
        if (twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 254, $this->source); })()), "parent", [])) {
            // line 255
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 260, $this->source); })()), "parent", []), "token", [])]), "html", null, true);
            echo "\">Return to parent request</a>
                    <small>(token = ";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 261, $this->source); })()), "parent", []), "token", []), "html", null, true);
            echo ")</small>
                </h3>

                ";
            // line 264
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 264, $this->source); })()), "parent", []), "getcollector", [0 => "request"], "method"), "requestattributes", [])], false);
            echo "
            </div>
        </div>
        ";
        }
        // line 268
        echo "
        ";
        // line 269
        if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 269, $this->source); })()), "children", []))) {
            // line 270
            echo "        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">";
            // line 271
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 271, $this->source); })()), "children", [])), "html", null, true);
            echo "</span></h3>

            <div class=\"tab-content\">
                ";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["profile"]) || array_key_exists("profile", $context) ? $context["profile"] : (function () { throw new RuntimeError('Variable "profile" does not exist.', 274, $this->source); })()), "children", []));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 275
                echo "                    <h3>
                        ";
                // line 276
                echo $context["helper"]->macro_set_handler(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method"), "controller", []));
                echo "
                        <small>(token = <a href=\"";
                // line 277
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler", ["token" => twig_get_attribute($this->env, $this->source, $context["child"], "token", [])]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "token", []), "html", null, true);
                echo "</a>)</small>
                    </h3>

                    ";
                // line 280
                echo twig_include($this->env, $context, "@WebProfiler/Profiler/bag.html.twig", ["bag" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "getcollector", [0 => "request"], "method"), "requestattributes", [])], false);
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 282
            echo "            </div>
        </div>
        ";
        }
        // line 285
        echo "    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 288
    public function macro_set_handler($__controller__ = null, $__route__ = null, $__method__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "controller" => $__controller__,
            "route" => $__route__,
            "method" => $__method__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "set_handler"));

            // line 289
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["controller"] ?? null), "class", [], "any", true, true)) {
                // line 290
                if ((((isset($context["method"]) || array_key_exists("method", $context))) ? (_twig_default_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 290, $this->source); })()), false)) : (false))) {
                    echo "<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">";
                    echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new RuntimeError('Variable "method" does not exist.', 290, $this->source); })()), "html", null, true);
                    echo "</span>";
                }
                // line 291
                $context["link"] = $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 291, $this->source); })()), "file", []), twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 291, $this->source); })()), "line", []));
                // line 292
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 292, $this->source); })())) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, (isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 292, $this->source); })()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 292, $this->source); })()), "class", []), "html", null, true);
                    echo "\">";
                } else {
                    echo "<span title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 292, $this->source); })()), "class", []), "html", null, true);
                    echo "\">";
                }
                // line 294
                if ((((isset($context["route"]) || array_key_exists("route", $context))) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 294, $this->source); })()), false)) : (false))) {
                    // line 295
                    echo "@";
                    echo twig_escape_filter($this->env, (isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 295, $this->source); })()), "html", null, true);
                } else {
                    // line 297
                    echo twig_escape_filter($this->env, strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->abbrClass(twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 297, $this->source); })()), "class", []))), "html", null, true);
                    // line 298
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 298, $this->source); })()), "method", [])) ? ((" :: " . twig_get_attribute($this->env, $this->source, (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 298, $this->source); })()), "method", []))) : ("")), "html", null, true);
                }
                // line 301
                if ((isset($context["link"]) || array_key_exists("link", $context) ? $context["link"] : (function () { throw new RuntimeError('Variable "link" does not exist.', 301, $this->source); })())) {
                    echo "</a>";
                } else {
                    echo "</span>";
                }
            } else {
                // line 303
                echo "<span>";
                echo twig_escape_filter($this->env, (((isset($context["route"]) || array_key_exists("route", $context))) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 303, $this->source); })()), (isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 303, $this->source); })()))) : ((isset($context["controller"]) || array_key_exists("controller", $context) ? $context["controller"] : (function () { throw new RuntimeError('Variable "controller" does not exist.', 303, $this->source); })()))), "html", null, true);
                echo "</span>";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  748 => 303,  741 => 301,  738 => 298,  736 => 297,  732 => 295,  730 => 294,  718 => 292,  716 => 291,  710 => 290,  707 => 289,  687 => 288,  676 => 285,  671 => 282,  663 => 280,  655 => 277,  651 => 276,  648 => 275,  644 => 274,  638 => 271,  635 => 270,  633 => 269,  630 => 268,  623 => 264,  617 => 261,  613 => 260,  606 => 255,  604 => 254,  599 => 251,  593 => 249,  587 => 245,  585 => 244,  576 => 238,  571 => 235,  565 => 233,  559 => 229,  557 => 228,  552 => 225,  546 => 223,  540 => 219,  538 => 218,  529 => 212,  524 => 209,  518 => 207,  512 => 203,  510 => 202,  505 => 199,  499 => 197,  493 => 193,  491 => 192,  482 => 186,  475 => 182,  461 => 172,  454 => 171,  451 => 170,  445 => 169,  443 => 168,  437 => 165,  432 => 162,  426 => 158,  420 => 155,  417 => 154,  415 => 153,  410 => 150,  408 => 149,  401 => 145,  397 => 143,  391 => 141,  385 => 137,  383 => 136,  378 => 133,  372 => 131,  366 => 127,  364 => 126,  359 => 123,  353 => 121,  347 => 117,  345 => 116,  332 => 106,  328 => 104,  325 => 103,  316 => 102,  302 => 97,  299 => 96,  290 => 95,  278 => 92,  275 => 91,  272 => 90,  262 => 85,  258 => 84,  252 => 80,  250 => 79,  247 => 78,  237 => 73,  233 => 72,  226 => 68,  221 => 65,  219 => 64,  208 => 60,  200 => 55,  192 => 50,  187 => 47,  182 => 44,  178 => 42,  176 => 41,  168 => 38,  163 => 35,  161 => 34,  158 => 33,  155 => 32,  150 => 30,  145 => 29,  140 => 28,  135 => 27,  133 => 26,  126 => 25,  124 => 24,  121 => 23,  119 => 22,  116 => 21,  113 => 20,  107 => 18,  104 => 17,  101 => 16,  99 => 15,  96 => 14,  93 => 13,  87 => 11,  84 => 10,  82 => 9,  79 => 8,  73 => 6,  70 => 5,  67 => 4,  58 => 3,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% import _self as helper %}
    {% set request_handler %}
        {{ helper.set_handler(collector.controller) }}
    {% endset %}

    {% if collector.redirect %}
        {% set redirect_handler %}
            {{ helper.set_handler(collector.redirect.controller, collector.redirect.route, 'GET' != collector.redirect.method ? collector.redirect.method) }}
        {% endset %}
    {% endif %}

    {% if collector.forwardtoken %}
        {% set forward_profile = profile.childByToken(collector.forwardtoken) %}
        {% set forward_handler %}
            {{ helper.set_handler(forward_profile ? forward_profile.collector('request').controller : 'n/a') }}
        {% endset %}
    {% endif %}

    {% set request_status_code_color = (collector.statuscode >= 400) ? 'red' : (collector.statuscode >= 300) ? 'yellow' : 'green' %}

    {% set icon %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ request_status_code_color }}\">{{ collector.statuscode }}</span>
        {% if collector.route %}
            {% if collector.redirect %}{{ include('@WebProfiler/Icon/redirect.svg') }}{% endif %}
            {% if collector.forwardtoken %}{{ include('@WebProfiler/Icon/forward.svg') }}{% endif %}
            <span class=\"sf-toolbar-label\">{{ 'GET' != collector.method ? collector.method }} @</span>
            <span class=\"sf-toolbar-value sf-toolbar-info-piece-additional\">{{ collector.route }}</span>
        {% endif %}
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>HTTP status</b>
                <span>{{ collector.statuscode }} {{ collector.statustext }}</span>
            </div>

            {% if 'GET' != collector.method -%}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Method</b>
                    <span>{{ collector.method }}</span>
                </div>
            {%- endif %}

            <div class=\"sf-toolbar-info-piece\">
                <b>Controller</b>
                <span>{{ request_handler }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Route name</b>
                <span>{{ collector.route|default('n/a') }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Has session</b>
                <span>{% if collector.sessionmetadata|length %}yes{% else %}no{% endif %}</span>
            </div>
        </div>

        {% if redirect_handler is defined -%}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>
                        <span class=\"sf-toolbar-redirection-status sf-toolbar-status-yellow\">{{ collector.redirect.status_code }}</span>
                        Redirect from
                    </b>
                    <span>
                        {{ redirect_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.redirect.token }) }}\">{{ collector.redirect.token }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}

        {% if forward_handler is defined %}
            <div class=\"sf-toolbar-info-group\">
                <div class=\"sf-toolbar-info-piece\">
                    <b>Forwarded to</b>
                    <span>
                        {{ forward_handler }}
                        (<a href=\"{{ path('_profiler', { token: collector.forwardtoken }) }}\">{{ collector.forwardtoken }}</a>)
                    </span>
                </div>
            </div>
        {% endif %}
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/request.svg') }}</span>
        <strong>Request / Response</strong>
    </span>
{% endblock %}

{% block panel %}
    {% import _self as helper %}

    <h2>
        {{ helper.set_handler(collector.controller) }}
    </h2>

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Request</h3>

            <div class=\"tab-content\">
                <h3>GET Parameters</h3>

                {% if collector.requestquery.all is empty %}
                    <div class=\"empty\">
                        <p>No GET parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestquery, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>POST Parameters</h3>

                {% if collector.requestrequest.all is empty %}
                    <div class=\"empty\">
                        <p>No POST parameters</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestrequest, maxDepth: 1 }, with_context = false) }}
                {% endif %}

                <h3>Request Attributes</h3>

                {% if collector.requestattributes.all is empty %}
                    <div class=\"empty\">
                        <p>No attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestattributes }, with_context = false) }}
                {% endif %}

                <h3>Request Headers</h3>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}

                <h3>Request Content</h3>

                {% if collector.content == false %}
                    <div class=\"empty\">
                        <p>Request content not available (it was retrieved as a resource).</p>
                    </div>
                {% elseif collector.content %}
                    <div class=\"card\">
                        <pre class=\"break-long-words\">{{ collector.content }}</pre>
                    </div>
                {% else %}
                    <div class=\"empty\">
                        <p>No content</p>
                    </div>
                {% endif %}

                <h3>Server Parameters</h3>
                <h4>Defined in .env</h4>
                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.dotenvvars }, with_context = false) }}

                <h4>Defined as regular env variables</h4>
                {% set requestserver = [] %}
                {% for key, value in collector.requestserver if key not in collector.dotenvvars.keys %}
                    {% set requestserver = requestserver|merge({(key): value}) %}
                {% endfor %}
                {{ include('@WebProfiler/Profiler/table.html.twig', { data: requestserver }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Response</h3>

            <div class=\"tab-content\">
                <h3>Response Headers</h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responseheaders, labels: ['Header', 'Value'], maxDepth: 1 }, with_context = false) }}
            </div>
        </div>

        <div class=\"tab {{ collector.requestcookies.all is empty and collector.responsecookies.all is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Cookies</h3>

            <div class=\"tab-content\">
                <h3>Request Cookies</h3>

                {% if collector.requestcookies.all is empty %}
                    <div class=\"empty\">
                        <p>No request cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.requestcookies }, with_context = false) }}
                {% endif %}

                <h3>Response Cookies</h3>

                {% if collector.responsecookies.all is empty %}
                    <div class=\"empty\">
                        <p>No response cookies</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: collector.responsecookies }, with_context = true) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.sessionmetadata is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Session</h3>

            <div class=\"tab-content\">
                <h3>Session Metadata</h3>

                {% if collector.sessionmetadata is empty %}
                    <div class=\"empty\">
                        <p>No session metadata</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionmetadata }, with_context = false) }}
                {% endif %}

                <h3>Session Attributes</h3>

                {% if collector.sessionattributes is empty %}
                    <div class=\"empty\">
                        <p>No session attributes</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.sessionattributes, labels: ['Attribute', 'Value'] }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        <div class=\"tab {{ collector.flashes is empty ? 'disabled' }}\">
            <h3 class=\"tab-title\">Flashes</h3>

            <div class=\"tab-content\">
                <h3>Flashes</h3>

                {% if collector.flashes is empty %}
                    <div class=\"empty\">
                        <p>No flash messages were created.</p>
                    </div>
                {% else %}
                    {{ include('@WebProfiler/Profiler/table.html.twig', { data: collector.flashes }, with_context = false) }}
                {% endif %}
            </div>
        </div>

        {% if profile.parent %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Parent Request</h3>

            <div class=\"tab-content\">
                <h3>
                    <a href=\"{{ path('_profiler', { token: profile.parent.token }) }}\">Return to parent request</a>
                    <small>(token = {{ profile.parent.token }})</small>
                </h3>

                {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: profile.parent.getcollector('request').requestattributes }, with_context = false) }}
            </div>
        </div>
        {% endif %}

        {% if profile.children|length %}
        <div class=\"tab\">
            <h3 class=\"tab-title\">Sub Requests <span class=\"badge\">{{ profile.children|length }}</span></h3>

            <div class=\"tab-content\">
                {% for child in profile.children %}
                    <h3>
                        {{ helper.set_handler(child.getcollector('request').controller) }}
                        <small>(token = <a href=\"{{ path('_profiler', { token: child.token }) }}\">{{ child.token }}</a>)</small>
                    </h3>

                    {{ include('@WebProfiler/Profiler/bag.html.twig', { bag: child.getcollector('request').requestattributes }, with_context = false) }}
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{% endblock %}

{% macro set_handler(controller, route, method) %}
    {% if controller.class is defined -%}
        {%- if method|default(false) %}<span class=\"sf-toolbar-status sf-toolbar-redirection-method\">{{ method }}</span>{% endif -%}
        {%- set link = controller.file|file_link(controller.line) %}
        {%- if link %}<a href=\"{{ link }}\" title=\"{{ controller.class }}\">{% else %}<span title=\"{{ controller.class }}\">{% endif %}

            {%- if route|default(false) -%}
                @{{ route }}
            {%- else -%}
                {{- controller.class|abbr_class|striptags -}}
                {{- controller.method ? ' :: ' ~ controller.method -}}
            {%- endif -%}

        {%- if link %}</a>{% else %}</span>{% endif %}
    {%- else -%}
        <span>{{ route|default(controller) }}</span>
    {%- endif %}
{% endmacro %}
", "@WebProfiler/Collector/request.html.twig", "/var/www/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Collector/request.html.twig");
    }
}
