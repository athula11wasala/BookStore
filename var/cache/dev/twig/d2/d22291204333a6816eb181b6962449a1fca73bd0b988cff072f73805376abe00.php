<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_993917c48ca918f86b830c3ddef5bb97c92f399305799a1bae14d5ef9da2bdc0 extends Twig_Template
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
        $__internal_d403c5f599bd50b1c8affbd819135afb6be9d09280951895004f9c3b8494a8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d403c5f599bd50b1c8affbd819135afb6be9d09280951895004f9c3b8494a8df->enter($__internal_d403c5f599bd50b1c8affbd819135afb6be9d09280951895004f9c3b8494a8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_26e873abeb8cf691d8f771d26812d4dafff184ba950db83e20a44fe4b202546a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e873abeb8cf691d8f771d26812d4dafff184ba950db83e20a44fe4b202546a->enter($__internal_26e873abeb8cf691d8f771d26812d4dafff184ba950db83e20a44fe4b202546a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d403c5f599bd50b1c8affbd819135afb6be9d09280951895004f9c3b8494a8df->leave($__internal_d403c5f599bd50b1c8affbd819135afb6be9d09280951895004f9c3b8494a8df_prof);

        
        $__internal_26e873abeb8cf691d8f771d26812d4dafff184ba950db83e20a44fe4b202546a->leave($__internal_26e873abeb8cf691d8f771d26812d4dafff184ba950db83e20a44fe4b202546a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_40a62a67ae0019640663e5b2072d39526ed901e1bf39ab7b255481b43636a640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a62a67ae0019640663e5b2072d39526ed901e1bf39ab7b255481b43636a640->enter($__internal_40a62a67ae0019640663e5b2072d39526ed901e1bf39ab7b255481b43636a640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d136280ce0d9211cf2d68632287bab10d8b1a12422434f2ef519fadcc98edda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d136280ce0d9211cf2d68632287bab10d8b1a12422434f2ef519fadcc98edda4->enter($__internal_d136280ce0d9211cf2d68632287bab10d8b1a12422434f2ef519fadcc98edda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d136280ce0d9211cf2d68632287bab10d8b1a12422434f2ef519fadcc98edda4->leave($__internal_d136280ce0d9211cf2d68632287bab10d8b1a12422434f2ef519fadcc98edda4_prof);

        
        $__internal_40a62a67ae0019640663e5b2072d39526ed901e1bf39ab7b255481b43636a640->leave($__internal_40a62a67ae0019640663e5b2072d39526ed901e1bf39ab7b255481b43636a640_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a33527cccb575bdf29aa77f3643a046669b986b7f3cb30252288035bc0704404 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33527cccb575bdf29aa77f3643a046669b986b7f3cb30252288035bc0704404->enter($__internal_a33527cccb575bdf29aa77f3643a046669b986b7f3cb30252288035bc0704404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cfbdfae6bbe19f4c8e15a3e32375e63247610e530b3853f7e54b799b51b2506c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbdfae6bbe19f4c8e15a3e32375e63247610e530b3853f7e54b799b51b2506c->enter($__internal_cfbdfae6bbe19f4c8e15a3e32375e63247610e530b3853f7e54b799b51b2506c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cfbdfae6bbe19f4c8e15a3e32375e63247610e530b3853f7e54b799b51b2506c->leave($__internal_cfbdfae6bbe19f4c8e15a3e32375e63247610e530b3853f7e54b799b51b2506c_prof);

        
        $__internal_a33527cccb575bdf29aa77f3643a046669b986b7f3cb30252288035bc0704404->leave($__internal_a33527cccb575bdf29aa77f3643a046669b986b7f3cb30252288035bc0704404_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3581525f4efa15c6c2fbf1d7d6fbcf78ffaa3af02a476cbe5d0267516020a457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3581525f4efa15c6c2fbf1d7d6fbcf78ffaa3af02a476cbe5d0267516020a457->enter($__internal_3581525f4efa15c6c2fbf1d7d6fbcf78ffaa3af02a476cbe5d0267516020a457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_887933998b19ba5a495ad2379a21487ff2bcd5ea737e2430ad15840d6e438880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_887933998b19ba5a495ad2379a21487ff2bcd5ea737e2430ad15840d6e438880->enter($__internal_887933998b19ba5a495ad2379a21487ff2bcd5ea737e2430ad15840d6e438880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_887933998b19ba5a495ad2379a21487ff2bcd5ea737e2430ad15840d6e438880->leave($__internal_887933998b19ba5a495ad2379a21487ff2bcd5ea737e2430ad15840d6e438880_prof);

        
        $__internal_3581525f4efa15c6c2fbf1d7d6fbcf78ffaa3af02a476cbe5d0267516020a457->leave($__internal_3581525f4efa15c6c2fbf1d7d6fbcf78ffaa3af02a476cbe5d0267516020a457_prof);

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
