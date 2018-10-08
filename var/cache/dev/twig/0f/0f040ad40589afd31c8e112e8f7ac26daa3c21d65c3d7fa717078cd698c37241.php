<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_5c217278e871a10b4b0beabeefd419f492d49784d38033c0e9f7b237acfd1e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0df323f6b434944570d674849e91e781a5527ce649207d0bc70c22002f0b7f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0df323f6b434944570d674849e91e781a5527ce649207d0bc70c22002f0b7f2->enter($__internal_b0df323f6b434944570d674849e91e781a5527ce649207d0bc70c22002f0b7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_662837dcfda200f97d327127da66d64f56b418353517e691af34c49b7bcd9e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662837dcfda200f97d327127da66d64f56b418353517e691af34c49b7bcd9e0f->enter($__internal_662837dcfda200f97d327127da66d64f56b418353517e691af34c49b7bcd9e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0df323f6b434944570d674849e91e781a5527ce649207d0bc70c22002f0b7f2->leave($__internal_b0df323f6b434944570d674849e91e781a5527ce649207d0bc70c22002f0b7f2_prof);

        
        $__internal_662837dcfda200f97d327127da66d64f56b418353517e691af34c49b7bcd9e0f->leave($__internal_662837dcfda200f97d327127da66d64f56b418353517e691af34c49b7bcd9e0f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_469e721c95e4956c88af6adaefd6427d9e7aad0c03671ecb903eca98518a8085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_469e721c95e4956c88af6adaefd6427d9e7aad0c03671ecb903eca98518a8085->enter($__internal_469e721c95e4956c88af6adaefd6427d9e7aad0c03671ecb903eca98518a8085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_55c0e1dd30d59dfd1def3ccda5e8d6d4a6fc01770eec79fe9f33f5f60545b98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55c0e1dd30d59dfd1def3ccda5e8d6d4a6fc01770eec79fe9f33f5f60545b98d->enter($__internal_55c0e1dd30d59dfd1def3ccda5e8d6d4a6fc01770eec79fe9f33f5f60545b98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_55c0e1dd30d59dfd1def3ccda5e8d6d4a6fc01770eec79fe9f33f5f60545b98d->leave($__internal_55c0e1dd30d59dfd1def3ccda5e8d6d4a6fc01770eec79fe9f33f5f60545b98d_prof);

        
        $__internal_469e721c95e4956c88af6adaefd6427d9e7aad0c03671ecb903eca98518a8085->leave($__internal_469e721c95e4956c88af6adaefd6427d9e7aad0c03671ecb903eca98518a8085_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6c41a5a2119dfb7841be3ffdbd519a12eb957c33495f5b3a8f9b7a8d7c991cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6c41a5a2119dfb7841be3ffdbd519a12eb957c33495f5b3a8f9b7a8d7c991cd->enter($__internal_f6c41a5a2119dfb7841be3ffdbd519a12eb957c33495f5b3a8f9b7a8d7c991cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64932b87b4855bf2c7230f35bb620e3fab2271f33bf05d1b467c08912617b2f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64932b87b4855bf2c7230f35bb620e3fab2271f33bf05d1b467c08912617b2f8->enter($__internal_64932b87b4855bf2c7230f35bb620e3fab2271f33bf05d1b467c08912617b2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_64932b87b4855bf2c7230f35bb620e3fab2271f33bf05d1b467c08912617b2f8->leave($__internal_64932b87b4855bf2c7230f35bb620e3fab2271f33bf05d1b467c08912617b2f8_prof);

        
        $__internal_f6c41a5a2119dfb7841be3ffdbd519a12eb957c33495f5b3a8f9b7a8d7c991cd->leave($__internal_f6c41a5a2119dfb7841be3ffdbd519a12eb957c33495f5b3a8f9b7a8d7c991cd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/html/symfoney/bookstore/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
