<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_edaf73c63603964fb658c57af8131b0c2cdc9036093ba63fa1e26ededaf215dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c542ea304d8545d9f300d1c8f0b74d0bd7e6e7557d975569ae6627dfe6003fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c542ea304d8545d9f300d1c8f0b74d0bd7e6e7557d975569ae6627dfe6003fc3->enter($__internal_c542ea304d8545d9f300d1c8f0b74d0bd7e6e7557d975569ae6627dfe6003fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ab3f155518b26dfe064921327d948038caa0bd12dc768177fad0d7ca194e463e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3f155518b26dfe064921327d948038caa0bd12dc768177fad0d7ca194e463e->enter($__internal_ab3f155518b26dfe064921327d948038caa0bd12dc768177fad0d7ca194e463e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c542ea304d8545d9f300d1c8f0b74d0bd7e6e7557d975569ae6627dfe6003fc3->leave($__internal_c542ea304d8545d9f300d1c8f0b74d0bd7e6e7557d975569ae6627dfe6003fc3_prof);

        
        $__internal_ab3f155518b26dfe064921327d948038caa0bd12dc768177fad0d7ca194e463e->leave($__internal_ab3f155518b26dfe064921327d948038caa0bd12dc768177fad0d7ca194e463e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb24a77ee031c17f2ee39b42b1e94ee7e22539da32f23b87bb49878b4f097364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb24a77ee031c17f2ee39b42b1e94ee7e22539da32f23b87bb49878b4f097364->enter($__internal_bb24a77ee031c17f2ee39b42b1e94ee7e22539da32f23b87bb49878b4f097364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c7e7c91635625c293ddaccddabc6fcd5b265b8e744b964fc64dc2a3dd884886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7e7c91635625c293ddaccddabc6fcd5b265b8e744b964fc64dc2a3dd884886->enter($__internal_7c7e7c91635625c293ddaccddabc6fcd5b265b8e744b964fc64dc2a3dd884886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_7c7e7c91635625c293ddaccddabc6fcd5b265b8e744b964fc64dc2a3dd884886->leave($__internal_7c7e7c91635625c293ddaccddabc6fcd5b265b8e744b964fc64dc2a3dd884886_prof);

        
        $__internal_bb24a77ee031c17f2ee39b42b1e94ee7e22539da32f23b87bb49878b4f097364->leave($__internal_bb24a77ee031c17f2ee39b42b1e94ee7e22539da32f23b87bb49878b4f097364_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/symfoney/bookstore/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
