<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_27e53fd7eafba63655b7c0a9a20333d65af9535d04cd27c50a29bb4f6bd507d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e53fd7eafba63655b7c0a9a20333d65af9535d04cd27c50a29bb4f6bd507d3->enter($__internal_27e53fd7eafba63655b7c0a9a20333d65af9535d04cd27c50a29bb4f6bd507d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7bde13014b01ccb97589ae2d977e754b913de8261d1552b0115f7a532503336e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bde13014b01ccb97589ae2d977e754b913de8261d1552b0115f7a532503336e->enter($__internal_7bde13014b01ccb97589ae2d977e754b913de8261d1552b0115f7a532503336e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e53fd7eafba63655b7c0a9a20333d65af9535d04cd27c50a29bb4f6bd507d3->leave($__internal_27e53fd7eafba63655b7c0a9a20333d65af9535d04cd27c50a29bb4f6bd507d3_prof);

        
        $__internal_7bde13014b01ccb97589ae2d977e754b913de8261d1552b0115f7a532503336e->leave($__internal_7bde13014b01ccb97589ae2d977e754b913de8261d1552b0115f7a532503336e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d427a4c001ad72c4356479b24a8522e0ee20336c695d1768bed4833d131c59b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d427a4c001ad72c4356479b24a8522e0ee20336c695d1768bed4833d131c59b6->enter($__internal_d427a4c001ad72c4356479b24a8522e0ee20336c695d1768bed4833d131c59b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c9f73b36df2945929aef548d2e9ea50ba90501e402e25dfb03d779e471cde2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9f73b36df2945929aef548d2e9ea50ba90501e402e25dfb03d779e471cde2f7->enter($__internal_c9f73b36df2945929aef548d2e9ea50ba90501e402e25dfb03d779e471cde2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9f73b36df2945929aef548d2e9ea50ba90501e402e25dfb03d779e471cde2f7->leave($__internal_c9f73b36df2945929aef548d2e9ea50ba90501e402e25dfb03d779e471cde2f7_prof);

        
        $__internal_d427a4c001ad72c4356479b24a8522e0ee20336c695d1768bed4833d131c59b6->leave($__internal_d427a4c001ad72c4356479b24a8522e0ee20336c695d1768bed4833d131c59b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e5e206ad2c84a982a51fa3eb90e75a5c0fd42468d3157bf3c93fd6d0f9ceb503 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e206ad2c84a982a51fa3eb90e75a5c0fd42468d3157bf3c93fd6d0f9ceb503->enter($__internal_e5e206ad2c84a982a51fa3eb90e75a5c0fd42468d3157bf3c93fd6d0f9ceb503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_98c42e2a03f39843538f10d4fd06b7a2509d34269c352cb8f4a8fcef15c5f116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c42e2a03f39843538f10d4fd06b7a2509d34269c352cb8f4a8fcef15c5f116->enter($__internal_98c42e2a03f39843538f10d4fd06b7a2509d34269c352cb8f4a8fcef15c5f116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_98c42e2a03f39843538f10d4fd06b7a2509d34269c352cb8f4a8fcef15c5f116->leave($__internal_98c42e2a03f39843538f10d4fd06b7a2509d34269c352cb8f4a8fcef15c5f116_prof);

        
        $__internal_e5e206ad2c84a982a51fa3eb90e75a5c0fd42468d3157bf3c93fd6d0f9ceb503->leave($__internal_e5e206ad2c84a982a51fa3eb90e75a5c0fd42468d3157bf3c93fd6d0f9ceb503_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_751b4de31c03cac7b6cf404d38378a5626fbb3c2a9f578312c7c9e9937711884 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751b4de31c03cac7b6cf404d38378a5626fbb3c2a9f578312c7c9e9937711884->enter($__internal_751b4de31c03cac7b6cf404d38378a5626fbb3c2a9f578312c7c9e9937711884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1f4b4181410cb1fdebe7773f963c980f6dc400d07ca7142bc1b7ae16205ae914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f4b4181410cb1fdebe7773f963c980f6dc400d07ca7142bc1b7ae16205ae914->enter($__internal_1f4b4181410cb1fdebe7773f963c980f6dc400d07ca7142bc1b7ae16205ae914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1f4b4181410cb1fdebe7773f963c980f6dc400d07ca7142bc1b7ae16205ae914->leave($__internal_1f4b4181410cb1fdebe7773f963c980f6dc400d07ca7142bc1b7ae16205ae914_prof);

        
        $__internal_751b4de31c03cac7b6cf404d38378a5626fbb3c2a9f578312c7c9e9937711884->leave($__internal_751b4de31c03cac7b6cf404d38378a5626fbb3c2a9f578312c7c9e9937711884_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/symfoney/bookstore/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
