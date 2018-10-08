<?php

/* layouts/header.html.twig */
class __TwigTemplate_6d7a83948b188ced5354dbcc4c87f8fb7ac9ac614bf624fd120b6241d1cde597 extends Twig_Template
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
        $__internal_777bc4a950c8a3756813f86a7d8fc02c429b8b94e4e1e69caa80a5fd7d733f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_777bc4a950c8a3756813f86a7d8fc02c429b8b94e4e1e69caa80a5fd7d733f4c->enter($__internal_777bc4a950c8a3756813f86a7d8fc02c429b8b94e4e1e69caa80a5fd7d733f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/header.html.twig"));

        $__internal_ca31717f415ed3bf983d985855b76f0dfaa517b092b224f7088c2710c3c60484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca31717f415ed3bf983d985855b76f0dfaa517b092b224f7088c2710c3c60484->enter($__internal_ca31717f415ed3bf983d985855b76f0dfaa517b092b224f7088c2710c3c60484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/header.html.twig"));

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
        echo "\">Home</a></li>
                    <li><a  href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_invoice_route");
        echo "\">View Invoice</a></li>
                      <li><a  href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("product_view");
        echo "\">Product</a></li>
                </ul>
            </div>
        </nav>

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["success_message"]) {
            // line 21
            echo "            <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["success_message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['success_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error_message"]) {
            // line 25
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["error_message"], "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        <div class=\"container\">



";
        
        $__internal_777bc4a950c8a3756813f86a7d8fc02c429b8b94e4e1e69caa80a5fd7d733f4c->leave($__internal_777bc4a950c8a3756813f86a7d8fc02c429b8b94e4e1e69caa80a5fd7d733f4c_prof);

        
        $__internal_ca31717f415ed3bf983d985855b76f0dfaa517b092b224f7088c2710c3c60484->leave($__internal_ca31717f415ed3bf983d985855b76f0dfaa517b092b224f7088c2710c3c60484_prof);

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
        return array (  93 => 27,  84 => 25,  80 => 24,  77 => 23,  68 => 21,  64 => 20,  56 => 15,  52 => 14,  48 => 13,  42 => 10,  33 => 4,  29 => 3,  25 => 1,);
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
                    <li class=\"active\"><a href=\"{{ path(\"home_route\") }}\">Home</a></li>
                    <li><a  href=\"{{ path(\"cart_invoice_route\") }}\">View Invoice</a></li>
                      <li><a  href=\"{{ path(\"product_view\") }}\">Product</a></li>
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
