<?php

/* shop/invoice.html.twig */
class __TwigTemplate_32b944c155bc4f6e097d4feef0ea29fb341d2e968051bd45cfd7d9f57ed98ba2 extends Twig_Template
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
        $__internal_eacf87bd6ca3cce19dbd23c4b05c7ebaece54f77e7fc5c06c556af24546a99a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eacf87bd6ca3cce19dbd23c4b05c7ebaece54f77e7fc5c06c556af24546a99a8->enter($__internal_eacf87bd6ca3cce19dbd23c4b05c7ebaece54f77e7fc5c06c556af24546a99a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/invoice.html.twig"));

        $__internal_612cafcd801a60523dca1c0ed27025d9a1a15be8168be427c45706b7c61276bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612cafcd801a60523dca1c0ed27025d9a1a15be8168be427c45706b7c61276bb->enter($__internal_612cafcd801a60523dca1c0ed27025d9a1a15be8168be427c45706b7c61276bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/invoice.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "layouts/header.html.twig");
        echo "

<h3 style=\"text-align:center\">Invoice Your Cart Before Buying</h3>
<div id=\"shopping-cart-results\"></div>
</div>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function () {


        var routePath = \"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_ajax_invoice_route");
        echo "\";

        \$(\"#shopping-cart-results\").load(routePath);

    });
</script>
";
        
        $__internal_eacf87bd6ca3cce19dbd23c4b05c7ebaece54f77e7fc5c06c556af24546a99a8->leave($__internal_eacf87bd6ca3cce19dbd23c4b05c7ebaece54f77e7fc5c06c556af24546a99a8_prof);

        
        $__internal_612cafcd801a60523dca1c0ed27025d9a1a15be8168be427c45706b7c61276bb->leave($__internal_612cafcd801a60523dca1c0ed27025d9a1a15be8168be427c45706b7c61276bb_prof);

    }

    public function getTemplateName()
    {
        return "shop/invoice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  25 => 1,);
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

<h3 style=\"text-align:center\">Invoice Your Cart Before Buying</h3>
<div id=\"shopping-cart-results\"></div>
</div>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>


<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
<script>
    \$(document).ready(function () {


        var routePath = \"{{ path('cart_ajax_invoice_route') }}\";

        \$(\"#shopping-cart-results\").load(routePath);

    });
</script>
", "shop/invoice.html.twig", "/var/www/html/symfoney/bookstore/app/Resources/views/shop/invoice.html.twig");
    }
}
