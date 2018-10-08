<?php

/* layouts/footer.html.twig */
class __TwigTemplate_278438cf311ede98a7000fd464ebc389f880ff9cf5cbebb540073292228cecf0 extends Twig_Template
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
        $__internal_f74b9d9f99f65dba6df1acdcaeef9130b36f66c1332ecab852443f5f5908b8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f74b9d9f99f65dba6df1acdcaeef9130b36f66c1332ecab852443f5f5908b8af->enter($__internal_f74b9d9f99f65dba6df1acdcaeef9130b36f66c1332ecab852443f5f5908b8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/footer.html.twig"));

        $__internal_5a313c483ce9f38aa64186a54a1c829cceba12d6e42bf53bce1d08141dcb7c2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a313c483ce9f38aa64186a54a1c829cceba12d6e42bf53bce1d08141dcb7c2d->enter($__internal_5a313c483ce9f38aa64186a54a1c829cceba12d6e42bf53bce1d08141dcb7c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layouts/footer.html.twig"));

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
        
        $__internal_f74b9d9f99f65dba6df1acdcaeef9130b36f66c1332ecab852443f5f5908b8af->leave($__internal_f74b9d9f99f65dba6df1acdcaeef9130b36f66c1332ecab852443f5f5908b8af_prof);

        
        $__internal_5a313c483ce9f38aa64186a54a1c829cceba12d6e42bf53bce1d08141dcb7c2d->leave($__internal_5a313c483ce9f38aa64186a54a1c829cceba12d6e42bf53bce1d08141dcb7c2d_prof);

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
