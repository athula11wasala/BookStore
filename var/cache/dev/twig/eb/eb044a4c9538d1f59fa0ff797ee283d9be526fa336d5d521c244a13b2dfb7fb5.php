<?php

/* layouts/footer.html.twig */
class __TwigTemplate_128ceee84b12914d0601bbd4c185b9fa8af81588d3b4d9193be5a203927e5f15 extends Twig_Template
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
        $__internal_f9cadf95e3000217e781c05ac0b8e685fb273f3191ca886b1cd477c391bf40c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9cadf95e3000217e781c05ac0b8e685fb273f3191ca886b1cd477c391bf40c2->enter($__internal_f9cadf95e3000217e781c05ac0b8e685fb273f3191ca886b1cd477c391bf40c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/footer.html.twig"));

        $__internal_9b663a1d1cea212ce50395262a0bd4d8da6f0c633fc02474ed347df6356593fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b663a1d1cea212ce50395262a0bd4d8da6f0c633fc02474ed347df6356593fa->enter($__internal_9b663a1d1cea212ce50395262a0bd4d8da6f0c633fc02474ed347df6356593fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/footer.html.twig"));

        // line 1
        echo "</div>
</body>
<script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js")), "html", null, true);
        echo "\"></script>
<!-- jQuery library -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<!-- Latest compiled JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</html>

";
        
        $__internal_f9cadf95e3000217e781c05ac0b8e685fb273f3191ca886b1cd477c391bf40c2->leave($__internal_f9cadf95e3000217e781c05ac0b8e685fb273f3191ca886b1cd477c391bf40c2_prof);

        
        $__internal_9b663a1d1cea212ce50395262a0bd4d8da6f0c633fc02474ed347df6356593fa->leave($__internal_9b663a1d1cea212ce50395262a0bd4d8da6f0c633fc02474ed347df6356593fa_prof);

    }

    public function getTemplateName()
    {
        return "layouts/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("</div>
</body>
<script src=\"{{ absolute_url(asset('js/bootstrap.min.js')) }}\"></script>
<!-- jQuery library -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>

<!-- Latest compiled JavaScript -->
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
</html>

", "layouts/footer.html.twig", "/var/www/html/symfoney/bookstore/app/Resources/views/layouts/footer.html.twig");
    }
}
