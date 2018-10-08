<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7a56631aec9ecc9a55b7dfb35d6581121066a4fb4cae0634e626cb86147c0ba2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca73f0039348b1aa2e50ff71dad39e6052947a17056c06fdaf7a208983d448ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca73f0039348b1aa2e50ff71dad39e6052947a17056c06fdaf7a208983d448ed->enter($__internal_ca73f0039348b1aa2e50ff71dad39e6052947a17056c06fdaf7a208983d448ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_1f231721e463768d05a1d3f957820bd602a6302a24b3619ff27cabbcdbe420dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f231721e463768d05a1d3f957820bd602a6302a24b3619ff27cabbcdbe420dc->enter($__internal_1f231721e463768d05a1d3f957820bd602a6302a24b3619ff27cabbcdbe420dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca73f0039348b1aa2e50ff71dad39e6052947a17056c06fdaf7a208983d448ed->leave($__internal_ca73f0039348b1aa2e50ff71dad39e6052947a17056c06fdaf7a208983d448ed_prof);

        
        $__internal_1f231721e463768d05a1d3f957820bd602a6302a24b3619ff27cabbcdbe420dc->leave($__internal_1f231721e463768d05a1d3f957820bd602a6302a24b3619ff27cabbcdbe420dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e206a43c6562f85586f3e36b25d67086e0305611ca7bda2df0c723f8b38ee859 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e206a43c6562f85586f3e36b25d67086e0305611ca7bda2df0c723f8b38ee859->enter($__internal_e206a43c6562f85586f3e36b25d67086e0305611ca7bda2df0c723f8b38ee859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e749d955f5cf9d11214f128fe90a45010fd2947b848ee29c5f372fdd7eb5c30c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e749d955f5cf9d11214f128fe90a45010fd2947b848ee29c5f372fdd7eb5c30c->enter($__internal_e749d955f5cf9d11214f128fe90a45010fd2947b848ee29c5f372fdd7eb5c30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e749d955f5cf9d11214f128fe90a45010fd2947b848ee29c5f372fdd7eb5c30c->leave($__internal_e749d955f5cf9d11214f128fe90a45010fd2947b848ee29c5f372fdd7eb5c30c_prof);

        
        $__internal_e206a43c6562f85586f3e36b25d67086e0305611ca7bda2df0c723f8b38ee859->leave($__internal_e206a43c6562f85586f3e36b25d67086e0305611ca7bda2df0c723f8b38ee859_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5bcb2bc1a587604c46450f720687b28e98352cf1bd473fc01b57765796a20e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bcb2bc1a587604c46450f720687b28e98352cf1bd473fc01b57765796a20e5f->enter($__internal_5bcb2bc1a587604c46450f720687b28e98352cf1bd473fc01b57765796a20e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0bcb3c8be8fcaebf1e4039c74a6aec88b0b90bb89d04e5216240aa77a5a1c13f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcb3c8be8fcaebf1e4039c74a6aec88b0b90bb89d04e5216240aa77a5a1c13f->enter($__internal_0bcb3c8be8fcaebf1e4039c74a6aec88b0b90bb89d04e5216240aa77a5a1c13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_0bcb3c8be8fcaebf1e4039c74a6aec88b0b90bb89d04e5216240aa77a5a1c13f->leave($__internal_0bcb3c8be8fcaebf1e4039c74a6aec88b0b90bb89d04e5216240aa77a5a1c13f_prof);

        
        $__internal_5bcb2bc1a587604c46450f720687b28e98352cf1bd473fc01b57765796a20e5f->leave($__internal_5bcb2bc1a587604c46450f720687b28e98352cf1bd473fc01b57765796a20e5f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af42c07b4dee928cb623ab2a5ceab2b3b484c2686fde1f9ef5f7942cc54dbfbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af42c07b4dee928cb623ab2a5ceab2b3b484c2686fde1f9ef5f7942cc54dbfbf->enter($__internal_af42c07b4dee928cb623ab2a5ceab2b3b484c2686fde1f9ef5f7942cc54dbfbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0202c2ad4ed4a644cada9ecf9a5cac748e1a5b0f2603403b993a19f13c0394c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0202c2ad4ed4a644cada9ecf9a5cac748e1a5b0f2603403b993a19f13c0394c3->enter($__internal_0202c2ad4ed4a644cada9ecf9a5cac748e1a5b0f2603403b993a19f13c0394c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_0202c2ad4ed4a644cada9ecf9a5cac748e1a5b0f2603403b993a19f13c0394c3->leave($__internal_0202c2ad4ed4a644cada9ecf9a5cac748e1a5b0f2603403b993a19f13c0394c3_prof);

        
        $__internal_af42c07b4dee928cb623ab2a5ceab2b3b484c2686fde1f9ef5f7942cc54dbfbf->leave($__internal_af42c07b4dee928cb623ab2a5ceab2b3b484c2686fde1f9ef5f7942cc54dbfbf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/symfoney/bookstore/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
