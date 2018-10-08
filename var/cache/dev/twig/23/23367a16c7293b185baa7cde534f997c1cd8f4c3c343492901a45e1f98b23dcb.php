<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_825ca2aa137a9515ebe275341b175c9009faae5483283b9a68051a94da6769f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04944dfcecc12eee40ab0e54aa98d5208f2585f9834f851e0b184de8f9148d68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04944dfcecc12eee40ab0e54aa98d5208f2585f9834f851e0b184de8f9148d68->enter($__internal_04944dfcecc12eee40ab0e54aa98d5208f2585f9834f851e0b184de8f9148d68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d66953a329c3c69e981927a1af1c52c309a7fe6de3c4c637cba727fcb662a651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66953a329c3c69e981927a1af1c52c309a7fe6de3c4c637cba727fcb662a651->enter($__internal_d66953a329c3c69e981927a1af1c52c309a7fe6de3c4c637cba727fcb662a651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_04944dfcecc12eee40ab0e54aa98d5208f2585f9834f851e0b184de8f9148d68->leave($__internal_04944dfcecc12eee40ab0e54aa98d5208f2585f9834f851e0b184de8f9148d68_prof);

        
        $__internal_d66953a329c3c69e981927a1af1c52c309a7fe6de3c4c637cba727fcb662a651->leave($__internal_d66953a329c3c69e981927a1af1c52c309a7fe6de3c4c637cba727fcb662a651_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e538f23682e983b4545fc07f1ceb5f3b41cfff1c8386680502e5956cef3c826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e538f23682e983b4545fc07f1ceb5f3b41cfff1c8386680502e5956cef3c826->enter($__internal_5e538f23682e983b4545fc07f1ceb5f3b41cfff1c8386680502e5956cef3c826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f4fbb8d217d2587fee04b07a021c79ffb2d4b930d28428c97b1d793d89e1310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f4fbb8d217d2587fee04b07a021c79ffb2d4b930d28428c97b1d793d89e1310->enter($__internal_6f4fbb8d217d2587fee04b07a021c79ffb2d4b930d28428c97b1d793d89e1310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f4fbb8d217d2587fee04b07a021c79ffb2d4b930d28428c97b1d793d89e1310->leave($__internal_6f4fbb8d217d2587fee04b07a021c79ffb2d4b930d28428c97b1d793d89e1310_prof);

        
        $__internal_5e538f23682e983b4545fc07f1ceb5f3b41cfff1c8386680502e5956cef3c826->leave($__internal_5e538f23682e983b4545fc07f1ceb5f3b41cfff1c8386680502e5956cef3c826_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_466c8d8bd66bea6341396970ec19032bb0debd326c334e898f4b0b07b2ddb3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466c8d8bd66bea6341396970ec19032bb0debd326c334e898f4b0b07b2ddb3c3->enter($__internal_466c8d8bd66bea6341396970ec19032bb0debd326c334e898f4b0b07b2ddb3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_94cde65e3d0311d689d195c8ec59a2cb2d45cec32424018d56762d318231cf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94cde65e3d0311d689d195c8ec59a2cb2d45cec32424018d56762d318231cf48->enter($__internal_94cde65e3d0311d689d195c8ec59a2cb2d45cec32424018d56762d318231cf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_94cde65e3d0311d689d195c8ec59a2cb2d45cec32424018d56762d318231cf48->leave($__internal_94cde65e3d0311d689d195c8ec59a2cb2d45cec32424018d56762d318231cf48_prof);

        
        $__internal_466c8d8bd66bea6341396970ec19032bb0debd326c334e898f4b0b07b2ddb3c3->leave($__internal_466c8d8bd66bea6341396970ec19032bb0debd326c334e898f4b0b07b2ddb3c3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e7c0e65b3fbae5e45bd9aa0e916e612ea32ccdbf01d6a822c49816ddf84d596e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7c0e65b3fbae5e45bd9aa0e916e612ea32ccdbf01d6a822c49816ddf84d596e->enter($__internal_e7c0e65b3fbae5e45bd9aa0e916e612ea32ccdbf01d6a822c49816ddf84d596e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a56c9ae9f5e0683b7035b9474cbf5d501bb1cd6162428329ce61596aed7d0526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56c9ae9f5e0683b7035b9474cbf5d501bb1cd6162428329ce61596aed7d0526->enter($__internal_a56c9ae9f5e0683b7035b9474cbf5d501bb1cd6162428329ce61596aed7d0526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a56c9ae9f5e0683b7035b9474cbf5d501bb1cd6162428329ce61596aed7d0526->leave($__internal_a56c9ae9f5e0683b7035b9474cbf5d501bb1cd6162428329ce61596aed7d0526_prof);

        
        $__internal_e7c0e65b3fbae5e45bd9aa0e916e612ea32ccdbf01d6a822c49816ddf84d596e->leave($__internal_e7c0e65b3fbae5e45bd9aa0e916e612ea32ccdbf01d6a822c49816ddf84d596e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/symfoney/bookstore/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
