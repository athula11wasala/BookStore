<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_5cf7f5f7a9341b476c5a26bb488adf88dc03032b6ca7df8b1378e7eeab7fa8b4 extends Twig_Template
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
        $__internal_0e8de77c8554753448159cb00ec4bd0651ac6d424e181ceff493a48180be1676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8de77c8554753448159cb00ec4bd0651ac6d424e181ceff493a48180be1676->enter($__internal_0e8de77c8554753448159cb00ec4bd0651ac6d424e181ceff493a48180be1676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_2395792af377f96a27780b3796beb3d90737e5685941da6f4904e03c15ef022a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2395792af377f96a27780b3796beb3d90737e5685941da6f4904e03c15ef022a->enter($__internal_2395792af377f96a27780b3796beb3d90737e5685941da6f4904e03c15ef022a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e8de77c8554753448159cb00ec4bd0651ac6d424e181ceff493a48180be1676->leave($__internal_0e8de77c8554753448159cb00ec4bd0651ac6d424e181ceff493a48180be1676_prof);

        
        $__internal_2395792af377f96a27780b3796beb3d90737e5685941da6f4904e03c15ef022a->leave($__internal_2395792af377f96a27780b3796beb3d90737e5685941da6f4904e03c15ef022a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_82bec29c5116b51b3c7351fdd52c88a782c05148de298aec2b60ec2d56fb57d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bec29c5116b51b3c7351fdd52c88a782c05148de298aec2b60ec2d56fb57d9->enter($__internal_82bec29c5116b51b3c7351fdd52c88a782c05148de298aec2b60ec2d56fb57d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_32dcc5b5b4dc3e5e2d4a18d8a77c6c955549fcde5049f331707c340666debcbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32dcc5b5b4dc3e5e2d4a18d8a77c6c955549fcde5049f331707c340666debcbc->enter($__internal_32dcc5b5b4dc3e5e2d4a18d8a77c6c955549fcde5049f331707c340666debcbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_32dcc5b5b4dc3e5e2d4a18d8a77c6c955549fcde5049f331707c340666debcbc->leave($__internal_32dcc5b5b4dc3e5e2d4a18d8a77c6c955549fcde5049f331707c340666debcbc_prof);

        
        $__internal_82bec29c5116b51b3c7351fdd52c88a782c05148de298aec2b60ec2d56fb57d9->leave($__internal_82bec29c5116b51b3c7351fdd52c88a782c05148de298aec2b60ec2d56fb57d9_prof);

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
