<?php

/* product/edit.html.twig */
class __TwigTemplate_c65c725c51079d0fe6e6ab96a3202940e74eaac6c406315256f5951db3034a27 extends Twig_Template
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
        $__internal_276c0085b4cd9dbbcef3d5903e40fd38d77d0abf6744aebf48f8985d25a0cc31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276c0085b4cd9dbbcef3d5903e40fd38d77d0abf6744aebf48f8985d25a0cc31->enter($__internal_276c0085b4cd9dbbcef3d5903e40fd38d77d0abf6744aebf48f8985d25a0cc31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        $__internal_e2b7c8658e540d7b2132f1db3361b6f61def395d6c5cf61953f0663d30300a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b7c8658e540d7b2132f1db3361b6f61def395d6c5cf61953f0663d30300a09->enter($__internal_e2b7c8658e540d7b2132f1db3361b6f61def395d6c5cf61953f0663d30300a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/edit.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "layouts/header.html.twig");
        echo "

<h3> </h3>


<h2 class=\"page-header\"> Edit</h2>

    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(($context["product_img"] ?? $this->getContext($context, "product_img")))), "html", null, true);
        echo "\">
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
 
</div>
";
        // line 14
        echo twig_include($this->env, $context, "layouts/footer.html.twig");
        echo "



";
        
        $__internal_276c0085b4cd9dbbcef3d5903e40fd38d77d0abf6744aebf48f8985d25a0cc31->leave($__internal_276c0085b4cd9dbbcef3d5903e40fd38d77d0abf6744aebf48f8985d25a0cc31_prof);

        
        $__internal_e2b7c8658e540d7b2132f1db3361b6f61def395d6c5cf61953f0663d30300a09->leave($__internal_e2b7c8658e540d7b2132f1db3361b6f61def395d6c5cf61953f0663d30300a09_prof);

    }

    public function getTemplateName()
    {
        return "product/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include(\"layouts/header.html.twig\") }}

<h3> </h3>


<h2 class=\"page-header\"> Edit</h2>

    <img src=\"{{ absolute_url(asset( product_img)) }}\">
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
 
</div>
{{ include(\"layouts/footer.html.twig\") }}



", "product/edit.html.twig", "/var/www/html/symfoney/bookstore/app/Resources/views/product/edit.html.twig");
    }
}
