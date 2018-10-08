<?php

/* product/add.html.twig */
class __TwigTemplate_e7ef2add1a6b4674a4fe09163fa4dfd21da3e5d7b4ad1b09a656e7f2b2e13732 extends Twig_Template
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
        $__internal_33dfd6fe529785f4bf5c2907fce2abb4520928ccdb9438121ddd09deef85ea5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33dfd6fe529785f4bf5c2907fce2abb4520928ccdb9438121ddd09deef85ea5c->enter($__internal_33dfd6fe529785f4bf5c2907fce2abb4520928ccdb9438121ddd09deef85ea5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/add.html.twig"));

        $__internal_10d8c611564a42532d786c31c9cc4df4080952b235e04d7cc5ecba06619523e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10d8c611564a42532d786c31c9cc4df4080952b235e04d7cc5ecba06619523e6->enter($__internal_10d8c611564a42532d786c31c9cc4df4080952b235e04d7cc5ecba06619523e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/add.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "layouts/header.html.twig");
        echo "

<h3> </h3>


<h2 class=\"page-header\"> Add</h2>
    ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
 
</div>
";
        // line 12
        echo twig_include($this->env, $context, "layouts/footer.html.twig");
        echo "



";
        
        $__internal_33dfd6fe529785f4bf5c2907fce2abb4520928ccdb9438121ddd09deef85ea5c->leave($__internal_33dfd6fe529785f4bf5c2907fce2abb4520928ccdb9438121ddd09deef85ea5c_prof);

        
        $__internal_10d8c611564a42532d786c31c9cc4df4080952b235e04d7cc5ecba06619523e6->leave($__internal_10d8c611564a42532d786c31c9cc4df4080952b235e04d7cc5ecba06619523e6_prof);

    }

    public function getTemplateName()
    {
        return "product/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  42 => 9,  38 => 8,  34 => 7,  25 => 1,);
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


<h2 class=\"page-header\"> Add</h2>
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
 
</div>
{{ include(\"layouts/footer.html.twig\") }}



", "product/add.html.twig", "/var/www/html/symfoney/bookstore/app/Resources/views/product/add.html.twig");
    }
}
