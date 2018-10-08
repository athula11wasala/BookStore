<?php

/* layouts/header.html.twig */
class __TwigTemplate_0d6d5fbc583f2cbb34b31c2e12acb539f6814b58705a409017a2458fcdc890e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86c8b21d8f183a2050fb45a668c8baf29f8f2edb342034932cd9fc8dba814c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c8b21d8f183a2050fb45a668c8baf29f8f2edb342034932cd9fc8dba814c74->enter($__internal_86c8b21d8f183a2050fb45a668c8baf29f8f2edb342034932cd9fc8dba814c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/header.html.twig"));

        $__internal_a2ccd805577d19033e54fd6ad5049a5930fe83d033995f769e8abad47007434e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ccd805577d19033e54fd6ad5049a5930fe83d033995f769e8abad47007434e->enter($__internal_a2ccd805577d19033e54fd6ad5049a5930fe83d033995f769e8abad47007434e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/header.html.twig"));

        // line 1
        echo "<html>
    <head>
        <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css")), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css")), "html", null, true);
        echo "\">
    </head>
    <body>
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_route");
        echo "\">BookStore</a>
                </div>
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_route");
        echo "\">Product</a></li>
                    <li><a  href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_invoice_route");
        echo "\">View Invoice</a></li>
                </ul>
            </div>
        </nav>

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["success_message"]) {
            // line 20
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["success_message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error_message"]) {
            // line 24
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["error_message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        <div class=\"container\">



";
        
        $__internal_86c8b21d8f183a2050fb45a668c8baf29f8f2edb342034932cd9fc8dba814c74->leave($__internal_86c8b21d8f183a2050fb45a668c8baf29f8f2edb342034932cd9fc8dba814c74_prof);

        
        $__internal_a2ccd805577d19033e54fd6ad5049a5930fe83d033995f769e8abad47007434e->leave($__internal_a2ccd805577d19033e54fd6ad5049a5930fe83d033995f769e8abad47007434e_prof);

    }

    public function getTemplateName()
    {
        return "layouts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  80 => 24,  76 => 23,  73 => 22,  64 => 20,  60 => 19,  52 => 14,  48 => 13,  42 => 10,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<html>
    <head>
        <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('css/bootstrap.min.css')) }}\">
        <link rel=\"stylesheet\" href=\"{{ absolute_url(asset('css/style.css')) }}\">
    </head>
    <body>
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <a class=\"navbar-brand\" href=\"{{ path(\"home_route\") }}\">BookStore</a>
                </div>
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"{{ path(\"home_route\") }}\">Product</a></li>
                    <li><a  href=\"{{ path(\"cart_invoice_route\") }}\">View Invoice</a></li>
                </ul>
            </div>
        </nav>

        {% for success_message in app.session.flashbag.get('message') %}
            <div class=\"alert alert-success\">{{ success_message }}</div>
        {% endfor %}

        {% for error_message in app.session.flashbag.get('error') %}
            <div class=\"alert alert-danger\">{{ error_message }}</div>
        {% endfor %}
        <div class=\"container\">



", "layouts/header.html.twig", "/var/www/html/symfoney/bookstore/app/Resources/views/layouts/header.html.twig");
    }
}
