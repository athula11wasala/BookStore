<?php

/* base.html.twig */
class __TwigTemplate_559e907860c46520099dcbde370f6353b32f541dcfcac85bea6c45c73c49bfbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7329da338fc0bc161f5fd4cc0d25f2fb85ee852a3825e0c036c40aebfc57e532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7329da338fc0bc161f5fd4cc0d25f2fb85ee852a3825e0c036c40aebfc57e532->enter($__internal_7329da338fc0bc161f5fd4cc0d25f2fb85ee852a3825e0c036c40aebfc57e532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_eeb37bf5b8e2d4538a5bd07cf23e334fc02cde9b51bcf3cc2881934c84ad41de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb37bf5b8e2d4538a5bd07cf23e334fc02cde9b51bcf3cc2881934c84ad41de->enter($__internal_eeb37bf5b8e2d4538a5bd07cf23e334fc02cde9b51bcf3cc2881934c84ad41de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7329da338fc0bc161f5fd4cc0d25f2fb85ee852a3825e0c036c40aebfc57e532->leave($__internal_7329da338fc0bc161f5fd4cc0d25f2fb85ee852a3825e0c036c40aebfc57e532_prof);

        
        $__internal_eeb37bf5b8e2d4538a5bd07cf23e334fc02cde9b51bcf3cc2881934c84ad41de->leave($__internal_eeb37bf5b8e2d4538a5bd07cf23e334fc02cde9b51bcf3cc2881934c84ad41de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e59500543616b87ab7f78152c8faa2a50c88b1451dc5ef1088e21130d7dcc844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59500543616b87ab7f78152c8faa2a50c88b1451dc5ef1088e21130d7dcc844->enter($__internal_e59500543616b87ab7f78152c8faa2a50c88b1451dc5ef1088e21130d7dcc844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9eebf5ea88e3aaa1ca413dd35b5e7d48a475ed465db149d330434a570c668843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eebf5ea88e3aaa1ca413dd35b5e7d48a475ed465db149d330434a570c668843->enter($__internal_9eebf5ea88e3aaa1ca413dd35b5e7d48a475ed465db149d330434a570c668843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9eebf5ea88e3aaa1ca413dd35b5e7d48a475ed465db149d330434a570c668843->leave($__internal_9eebf5ea88e3aaa1ca413dd35b5e7d48a475ed465db149d330434a570c668843_prof);

        
        $__internal_e59500543616b87ab7f78152c8faa2a50c88b1451dc5ef1088e21130d7dcc844->leave($__internal_e59500543616b87ab7f78152c8faa2a50c88b1451dc5ef1088e21130d7dcc844_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c3549d8edb5f7d810be3cec849119ae07a86fc4ba7ca2db985d564d88347392b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3549d8edb5f7d810be3cec849119ae07a86fc4ba7ca2db985d564d88347392b->enter($__internal_c3549d8edb5f7d810be3cec849119ae07a86fc4ba7ca2db985d564d88347392b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b71ea4f37d20ad5c1f86c8282f02035c8f979d015b211cbebb63bb4f8d32b9a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b71ea4f37d20ad5c1f86c8282f02035c8f979d015b211cbebb63bb4f8d32b9a8->enter($__internal_b71ea4f37d20ad5c1f86c8282f02035c8f979d015b211cbebb63bb4f8d32b9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b71ea4f37d20ad5c1f86c8282f02035c8f979d015b211cbebb63bb4f8d32b9a8->leave($__internal_b71ea4f37d20ad5c1f86c8282f02035c8f979d015b211cbebb63bb4f8d32b9a8_prof);

        
        $__internal_c3549d8edb5f7d810be3cec849119ae07a86fc4ba7ca2db985d564d88347392b->leave($__internal_c3549d8edb5f7d810be3cec849119ae07a86fc4ba7ca2db985d564d88347392b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b41f1f116264dcf74d4890a8eaa01afb3cd23f568e6c27b8e43d328bd37e634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b41f1f116264dcf74d4890a8eaa01afb3cd23f568e6c27b8e43d328bd37e634->enter($__internal_9b41f1f116264dcf74d4890a8eaa01afb3cd23f568e6c27b8e43d328bd37e634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e229a0e9dd98d33a2f51216a44389a3f81bec9d5cb93b2b785c542128b056942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e229a0e9dd98d33a2f51216a44389a3f81bec9d5cb93b2b785c542128b056942->enter($__internal_e229a0e9dd98d33a2f51216a44389a3f81bec9d5cb93b2b785c542128b056942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e229a0e9dd98d33a2f51216a44389a3f81bec9d5cb93b2b785c542128b056942->leave($__internal_e229a0e9dd98d33a2f51216a44389a3f81bec9d5cb93b2b785c542128b056942_prof);

        
        $__internal_9b41f1f116264dcf74d4890a8eaa01afb3cd23f568e6c27b8e43d328bd37e634->leave($__internal_9b41f1f116264dcf74d4890a8eaa01afb3cd23f568e6c27b8e43d328bd37e634_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1874a1ff9d3fae417e6504ad98676f8c28ca27a405ca1a795778c298e1f14827 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1874a1ff9d3fae417e6504ad98676f8c28ca27a405ca1a795778c298e1f14827->enter($__internal_1874a1ff9d3fae417e6504ad98676f8c28ca27a405ca1a795778c298e1f14827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fca0262d804f18a19d5b3dfa39e1f08346b454d3ac23745b1e3672c97bd8ecff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fca0262d804f18a19d5b3dfa39e1f08346b454d3ac23745b1e3672c97bd8ecff->enter($__internal_fca0262d804f18a19d5b3dfa39e1f08346b454d3ac23745b1e3672c97bd8ecff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fca0262d804f18a19d5b3dfa39e1f08346b454d3ac23745b1e3672c97bd8ecff->leave($__internal_fca0262d804f18a19d5b3dfa39e1f08346b454d3ac23745b1e3672c97bd8ecff_prof);

        
        $__internal_1874a1ff9d3fae417e6504ad98676f8c28ca27a405ca1a795778c298e1f14827->leave($__internal_1874a1ff9d3fae417e6504ad98676f8c28ca27a405ca1a795778c298e1f14827_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/symfoney/bookstore/app/Resources/views/base.html.twig");
    }
}
