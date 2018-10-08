<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5d1dfa6169dd8c9035d4d1625ed9d6b92fdb39b7432adbbcbf3f08f0470330d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d1dfa6169dd8c9035d4d1625ed9d6b92fdb39b7432adbbcbf3f08f0470330d0->enter($__internal_5d1dfa6169dd8c9035d4d1625ed9d6b92fdb39b7432adbbcbf3f08f0470330d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_429446150436cc28e9b188d5027b15012b5a9d475ff576e49ae0d7242e00f9ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_429446150436cc28e9b188d5027b15012b5a9d475ff576e49ae0d7242e00f9ce->enter($__internal_429446150436cc28e9b188d5027b15012b5a9d475ff576e49ae0d7242e00f9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d1dfa6169dd8c9035d4d1625ed9d6b92fdb39b7432adbbcbf3f08f0470330d0->leave($__internal_5d1dfa6169dd8c9035d4d1625ed9d6b92fdb39b7432adbbcbf3f08f0470330d0_prof);

        
        $__internal_429446150436cc28e9b188d5027b15012b5a9d475ff576e49ae0d7242e00f9ce->leave($__internal_429446150436cc28e9b188d5027b15012b5a9d475ff576e49ae0d7242e00f9ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a937f1b67e85a2da031ec58ac33a9e92ea881ef134cde2ac81079161b11190b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a937f1b67e85a2da031ec58ac33a9e92ea881ef134cde2ac81079161b11190b7->enter($__internal_a937f1b67e85a2da031ec58ac33a9e92ea881ef134cde2ac81079161b11190b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4134b77b583b0b6f908030abd70cb32adfee3e8135c2866a8d55f0098877ece4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4134b77b583b0b6f908030abd70cb32adfee3e8135c2866a8d55f0098877ece4->enter($__internal_4134b77b583b0b6f908030abd70cb32adfee3e8135c2866a8d55f0098877ece4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_4134b77b583b0b6f908030abd70cb32adfee3e8135c2866a8d55f0098877ece4->leave($__internal_4134b77b583b0b6f908030abd70cb32adfee3e8135c2866a8d55f0098877ece4_prof);

        
        $__internal_a937f1b67e85a2da031ec58ac33a9e92ea881ef134cde2ac81079161b11190b7->leave($__internal_a937f1b67e85a2da031ec58ac33a9e92ea881ef134cde2ac81079161b11190b7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_391ce325475ebb691a1dc765e888b72d67412d69b7035d99b830ab6c57f7d55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_391ce325475ebb691a1dc765e888b72d67412d69b7035d99b830ab6c57f7d55b->enter($__internal_391ce325475ebb691a1dc765e888b72d67412d69b7035d99b830ab6c57f7d55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cfdaef4c4fd716775e58b8f5d3c0e92ef109ba9f19e9e6dff4330a5fb8d1077f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfdaef4c4fd716775e58b8f5d3c0e92ef109ba9f19e9e6dff4330a5fb8d1077f->enter($__internal_cfdaef4c4fd716775e58b8f5d3c0e92ef109ba9f19e9e6dff4330a5fb8d1077f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cfdaef4c4fd716775e58b8f5d3c0e92ef109ba9f19e9e6dff4330a5fb8d1077f->leave($__internal_cfdaef4c4fd716775e58b8f5d3c0e92ef109ba9f19e9e6dff4330a5fb8d1077f_prof);

        
        $__internal_391ce325475ebb691a1dc765e888b72d67412d69b7035d99b830ab6c57f7d55b->leave($__internal_391ce325475ebb691a1dc765e888b72d67412d69b7035d99b830ab6c57f7d55b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_44ed85f85738213769bc2c5f8faf3986e4dbd0c7df2e49d1710cfc7304308d0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ed85f85738213769bc2c5f8faf3986e4dbd0c7df2e49d1710cfc7304308d0c->enter($__internal_44ed85f85738213769bc2c5f8faf3986e4dbd0c7df2e49d1710cfc7304308d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae44bafbd5c467dd1124bc15daa2fd03e768e7e3ca2a0b59f7fa6c90c6800ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae44bafbd5c467dd1124bc15daa2fd03e768e7e3ca2a0b59f7fa6c90c6800ab4->enter($__internal_ae44bafbd5c467dd1124bc15daa2fd03e768e7e3ca2a0b59f7fa6c90c6800ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_ae44bafbd5c467dd1124bc15daa2fd03e768e7e3ca2a0b59f7fa6c90c6800ab4->leave($__internal_ae44bafbd5c467dd1124bc15daa2fd03e768e7e3ca2a0b59f7fa6c90c6800ab4_prof);

        
        $__internal_44ed85f85738213769bc2c5f8faf3986e4dbd0c7df2e49d1710cfc7304308d0c->leave($__internal_44ed85f85738213769bc2c5f8faf3986e4dbd0c7df2e49d1710cfc7304308d0c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/symfoney/bookstore/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
