<?php

/* shop/home.html.twig */
class __TwigTemplate_56c10349990a2d90097b90e491059711e285c24c4296325b0662d74a07c34076 extends Twig_Template
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
        $__internal_bf81396d722cd026af50e63301ba21b20ab057e5670ff0c553270845eaa16305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf81396d722cd026af50e63301ba21b20ab057e5670ff0c553270845eaa16305->enter($__internal_bf81396d722cd026af50e63301ba21b20ab057e5670ff0c553270845eaa16305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/home.html.twig"));

        $__internal_96c1a40a337da231b280a88a79175094606cb59637a4a19e550e76c2def9cbe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96c1a40a337da231b280a88a79175094606cb59637a4a19e550e76c2def9cbe0->enter($__internal_96c1a40a337da231b280a88a79175094606cb59637a4a19e550e76c2def9cbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/home.html.twig"));

        // line 1
        echo twig_include($this->env, $context, "layouts/header.html.twig");
        echo "

<h3> </h3>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<a href=\"#\" class=\"cart-box\" id=\"cart-info\" title=\"View Cart\">
    ";
        // line 9
        echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
        echo "
</a>

<div class=\"shopping-cart-box\">
    <a href=\"#\" class=\"close-shopping-cart-box\" >Close</a>
    <h3> BookStore </h3>
    <div id=\"shopping-cart-results\">
    </div>
</div>
<ul class=\"products-wrp\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_list"] ?? $this->getContext($context, "product_list")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "        <li>
            <form  class=\"form-item index\">
                <h4>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "PrdocutName", array()), "html", null, true);
            echo "</h4>

                <div><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["product"], "ProductImage", array()))), "html", null, true);
            echo "\"></div>
                <div>Price : ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ProductPrice", array()), "html", null, true);
            echo "
                    <div>
                        <div class=\"item-box\">
                            <div>
                                Qty :
                                <select name=\"product_qty\">
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"3\">3</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"6\">6</option>
                                    <option value=\"7\">7</option>
                                    <option value=\"8\">8</option>
                                    <option value=\"9\">9</option>
                                    <option value=\"10\">10</option>
                                    <option value=\"11\">11</option>
                                </select>
                            </div>
                            <input name=\"product_code\" type=\"hidden\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "ProductCode", array()), "html", null, true);
            echo "\">
                            <button type=\"submit\">Add to Cart</button>
                        </div>
                        </form>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                    </ul>

                </div>
                ";
        // line 53
        echo twig_include($this->env, $context, "layouts/footer.html.twig");
        echo "
                <script>

                    function formsubmit(elem) {
                        \$(\"form[name='form']\").submit();
                    }
                    \$(document).ready(function () {
                        var routePath = \"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_add_route");
        echo "\";
                        var removecart = \"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cart_remove_route");
        echo "\";

                        \$(\".form-item\").submit(function (e) {
                            var form_data = \$(this).serialize();
                            var button_content = \$(this).find('button[type=submit]');
                            button_content.html('Adding...'); //Loading button text

                            \$.ajax({
                                url: routePath,
                                type: \"POST\",
                                dataType: \"json\",
                                data: form_data
                            }).done(function (data) {
                                \$(\"#cart-info\").html(data.items);
                                button_content.html('Add to Cart');
                                alert(\"Item added to Cart!\");
                                if (\$(\".shopping-cart-box\").css(\"display\") == \"block\") {
                                    \$(\".cart-box\").trigger(\"click\"); //trigger click to update the cart box.
                                }
                            })
                            e.preventDefault();
                        });

                        //Show Items in Cart
                        \$(\".cart-box\").click(function (e) { //when user clicks on cart box
                            e.preventDefault();
                            \$(\".shopping-cart-box\").fadeIn(); //display cart box
                            \$(\"#shopping-cart-results\").html('<img src=\"../images/ajax-loader.gif\">');
                            \$(\"#shopping-cart-results\").load(routePath, {\"load_cart\": \"1\"});
                        });

                        //Close Cart
                        \$(\".close-shopping-cart-box\").click(function (e) { //user click on cart box close link
                            e.preventDefault();
                            \$(\".shopping-cart-box\").fadeOut(); //close cart-box
                        });

                        //Remove items from cart
                        \$(\"#shopping-cart-results\").on('click', 'a.remove-item', function (e) {
                            e.preventDefault();
                            var pcode = \$(this).attr(\"data-code\");
                            \$(this).parent().fadeOut();
                            \$.getJSON(removecart, {\"remove_code\": pcode}, function (data) {
                                \$(\"#cart-info\").html(data.items);
                                \$(\".cart-box\").trigger(\"click\");
                            });
                        });

                    });
                </script>


";
        
        $__internal_bf81396d722cd026af50e63301ba21b20ab057e5670ff0c553270845eaa16305->leave($__internal_bf81396d722cd026af50e63301ba21b20ab057e5670ff0c553270845eaa16305_prof);

        
        $__internal_96c1a40a337da231b280a88a79175094606cb59637a4a19e550e76c2def9cbe0->leave($__internal_96c1a40a337da231b280a88a79175094606cb59637a4a19e550e76c2def9cbe0_prof);

    }

    public function getTemplateName()
    {
        return "shop/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 61,  124 => 60,  114 => 53,  109 => 50,  97 => 44,  75 => 25,  71 => 24,  66 => 22,  62 => 20,  58 => 19,  45 => 9,  39 => 6,  35 => 5,  31 => 4,  25 => 1,);
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
{{ form_start(form) }}
{{ form_widget(form) }}
{{ form_end(form) }}

<a href=\"#\" class=\"cart-box\" id=\"cart-info\" title=\"View Cart\">
    {{ count }}
</a>

<div class=\"shopping-cart-box\">
    <a href=\"#\" class=\"close-shopping-cart-box\" >Close</a>
    <h3> BookStore </h3>
    <div id=\"shopping-cart-results\">
    </div>
</div>
<ul class=\"products-wrp\">
    {% for product in product_list %}
        <li>
            <form  class=\"form-item index\">
                <h4>{{ product.PrdocutName }}</h4>

                <div><img src=\"{{ absolute_url(asset( product.ProductImage )) }}\"></div>
                <div>Price : {{ product.ProductPrice }}
                    <div>
                        <div class=\"item-box\">
                            <div>
                                Qty :
                                <select name=\"product_qty\">
                                    <option value=\"1\">1</option>
                                    <option value=\"2\">2</option>
                                    <option value=\"3\">3</option>
                                    <option value=\"4\">4</option>
                                    <option value=\"5\">5</option>
                                    <option value=\"6\">6</option>
                                    <option value=\"7\">7</option>
                                    <option value=\"8\">8</option>
                                    <option value=\"9\">9</option>
                                    <option value=\"10\">10</option>
                                    <option value=\"11\">11</option>
                                </select>
                            </div>
                            <input name=\"product_code\" type=\"hidden\" value=\"{{ product.ProductCode }}\">
                            <button type=\"submit\">Add to Cart</button>
                        </div>
                        </form>
                        </li>
                    {% endfor %}
                    </ul>

                </div>
                {{ include(\"layouts/footer.html.twig\") }}
                <script>

                    function formsubmit(elem) {
                        \$(\"form[name='form']\").submit();
                    }
                    \$(document).ready(function () {
                        var routePath = \"{{ path('cart_add_route') }}\";
                        var removecart = \"{{ path('cart_remove_route') }}\";

                        \$(\".form-item\").submit(function (e) {
                            var form_data = \$(this).serialize();
                            var button_content = \$(this).find('button[type=submit]');
                            button_content.html('Adding...'); //Loading button text

                            \$.ajax({
                                url: routePath,
                                type: \"POST\",
                                dataType: \"json\",
                                data: form_data
                            }).done(function (data) {
                                \$(\"#cart-info\").html(data.items);
                                button_content.html('Add to Cart');
                                alert(\"Item added to Cart!\");
                                if (\$(\".shopping-cart-box\").css(\"display\") == \"block\") {
                                    \$(\".cart-box\").trigger(\"click\"); //trigger click to update the cart box.
                                }
                            })
                            e.preventDefault();
                        });

                        //Show Items in Cart
                        \$(\".cart-box\").click(function (e) { //when user clicks on cart box
                            e.preventDefault();
                            \$(\".shopping-cart-box\").fadeIn(); //display cart box
                            \$(\"#shopping-cart-results\").html('<img src=\"../images/ajax-loader.gif\">');
                            \$(\"#shopping-cart-results\").load(routePath, {\"load_cart\": \"1\"});
                        });

                        //Close Cart
                        \$(\".close-shopping-cart-box\").click(function (e) { //user click on cart box close link
                            e.preventDefault();
                            \$(\".shopping-cart-box\").fadeOut(); //close cart-box
                        });

                        //Remove items from cart
                        \$(\"#shopping-cart-results\").on('click', 'a.remove-item', function (e) {
                            e.preventDefault();
                            var pcode = \$(this).attr(\"data-code\");
                            \$(this).parent().fadeOut();
                            \$.getJSON(removecart, {\"remove_code\": pcode}, function (data) {
                                \$(\"#cart-info\").html(data.items);
                                \$(\".cart-box\").trigger(\"click\");
                            });
                        });

                    });
                </script>


", "shop/home.html.twig", "/var/www/html/symfoney/bookstore/app/Resources/views/shop/home.html.twig");
    }
}
