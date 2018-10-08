<?php

/* product/index.html.twig */
class __TwigTemplate_52a6fced0ebdb83df23cd29ef8c0f51acac35e18d5cdf84b292f41e4a0361f9f extends Twig_Template
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
        $__internal_f782e01bebf1716fabbb4dd7ab3c45f73fc83313c84677200c6190639b4feadc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f782e01bebf1716fabbb4dd7ab3c45f73fc83313c84677200c6190639b4feadc->enter($__internal_f782e01bebf1716fabbb4dd7ab3c45f73fc83313c84677200c6190639b4feadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_be48abb2baec26418d1e102868c3027a7f3f3484a69f4bfe0e61ab80070d44b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be48abb2baec26418d1e102868c3027a7f3f3484a69f4bfe0e61ab80070d44b4->enter($__internal_be48abb2baec26418d1e102868c3027a7f3f3484a69f4bfe0e61ab80070d44b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "layouts/header.html.twig");
        echo "

<h3> </h3>


<h2 class=\"page-header\">Product: List</h2>

<table class=\"table\">
    <thead> 
        <tr> 
            <th>#</th> 
            <th>Product</th> 
            <th>Description</th> 
            <th></th> 
        </tr> 
    </thead> 
    <tbody> 
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 19
            echo "            <tr> 
                <th scope=\"row\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</th> 
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "prdocutName", array()), "html", null, true);
            echo "</td> 
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "productDesc", array()), "html", null, true);
            echo "</td> 
                <td>
                    <a href=\"/product/add\" class=\"btn btn-success\">Add</a>
                </td> 
                <td>
                    <a href=\"/product/edit/";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                </td> 
                <td>
                    <a href=\"/product/delete/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
                </td> 
            </tr> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </tbody> 
</table>



</div>
";
        // line 40
        echo twig_include($this->env, $context, "layouts/footer.html.twig");
        echo "



";
        
        $__internal_f782e01bebf1716fabbb4dd7ab3c45f73fc83313c84677200c6190639b4feadc->leave($__internal_f782e01bebf1716fabbb4dd7ab3c45f73fc83313c84677200c6190639b4feadc_prof);

        
        $__internal_be48abb2baec26418d1e102868c3027a7f3f3484a69f4bfe0e61ab80070d44b4->leave($__internal_be48abb2baec26418d1e102868c3027a7f3f3484a69f4bfe0e61ab80070d44b4_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 40,  84 => 34,  74 => 30,  68 => 27,  60 => 22,  56 => 21,  52 => 20,  49 => 19,  45 => 18,  25 => 1,);
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


<h2 class=\"page-header\">Product: List</h2>

<table class=\"table\">
    <thead> 
        <tr> 
            <th>#</th> 
            <th>Product</th> 
            <th>Description</th> 
            <th></th> 
        </tr> 
    </thead> 
    <tbody> 
        {% for product in products %}
            <tr> 
                <th scope=\"row\">{{ product.id }}</th> 
                <td>{{ product.prdocutName }}</td> 
                <td>{{ product.productDesc }}</td> 
                <td>
                    <a href=\"/product/add\" class=\"btn btn-success\">Add</a>
                </td> 
                <td>
                    <a href=\"/product/edit/{{ product.id }}\" class=\"btn btn-default\">Edit</a>
                </td> 
                <td>
                    <a href=\"/product/delete/{{ product.id }}\" class=\"btn btn-danger\">Delete</a>
                </td> 
            </tr> 
        {% endfor %}
    </tbody> 
</table>



</div>
{{ include(\"layouts/footer.html.twig\") }}



", "product/index.html.twig", "/var/www/html/symfoney/bookstore/app/Resources/views/product/index.html.twig");
    }
}
