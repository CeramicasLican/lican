<?php

/* themes/gmx/templates/layout/page--front.html.twig */
class __TwigTemplate_c746c4f5cf0ccaaa3bf8e52ff557e6148912f097714ab7860161bb69f2819ef3 extends Twig_Template
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
        $tags = array("if" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">


  <!--Start: Branding and Menu -->
<div id=\"stick\">
  <div class=\"menu\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 11
            echo "          <div class=\"col-xs-6 col-md-4\">
            ";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 15
        echo "        <!-- Navigation -->
        ";
        // line 16
        if ($this->getAttribute(($context["page"] ?? null), "menu", array())) {
            // line 17
            echo "          <div class=\"col-xs-6 col-md-8\">
            ";
            // line 18
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()), "html", null, true));
            echo " 
          </div>
        ";
        }
        // line 21
        echo "        <!--End Navigation -->
      </div>
    </div>
  </div>
</div>

  <!--Start: Slider -->
    ";
        // line 28
        if ($this->getAttribute(($context["page"] ?? null), "slider", array())) {
            // line 29
            echo "      <div class=\"slider\">
              ";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 33
        echo "  <!--End: Slider -->

<!-- Header and Navbar -->
";
        // line 70
        echo "<!--End Header & Navbar -->



      <!--- Start Profesionalismo y Eficiencia -->
      ";
        // line 75
        if ($this->getAttribute(($context["page"] ?? null), "profesionalismoyeficiencia", array())) {
            // line 76
            echo "        <div class=\"container-fluid profesionalismo-y-eficiencia box\">
          <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "profesionalismoyeficiencia", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 84
        echo "      <!---End Profesionalismo y Eficiencia -->

      <!--- Start About -->
";
        // line 102
        echo "      <!---End About -->

      <!--- Start Nuestra empresa -->
      ";
        // line 105
        if ($this->getAttribute(($context["page"] ?? null), "nuestraempresa", array())) {
            // line 106
            echo "        <div class=\"container-fluid nuestraempresa box\">
          <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                ";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "nuestraempresa", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 114
        echo "      <!---End Nuestra empresa -->

      <!--- Start Nuestros profesionales -->
";
        // line 126
        echo "      <!---End Nuestros profesionales -->

      <!--- Start Áreas de Actuación -->
";
        // line 138
        echo "      <!---End Áreas de Actuación -->

      <!--- Start Clientes -->
";
        // line 150
        echo "      <!---End Clientes -->

      <!--- Start Contacto -->
";
        // line 162
        echo "      <!---End Contacto -->



            <!--- Start Contacto -->
      ";
        // line 167
        if ($this->getAttribute(($context["page"] ?? null), "enlacesdeinteres", array())) {
            // line 168
            echo "        <div class=\"container-fluid enlacesdeinteres\">
          <div class=\"row\">
            <div class=\"col-md-8 col-xs-12 col-md-offset-2\">
                ";
            // line 171
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "enlacesdeinteres", array()), "html", null, true));
            echo "
            </div>
              <div class=\"col-md-10 col-xs-12 col-md-offset-1\">
                <div class=\"margenenlaces\">
                 <div class=\"col-md-6\">";
            // line 175
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "enlacesdeinteresa", array()), "html", null, true));
            echo "</div>
                 <div class=\"col-md-6\">";
            // line 176
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "enlacesdeinteresb", array()), "html", null, true));
            echo "</div>
                </div>
              </div>
          </div>
        </div>
      ";
        }
        // line 182
        echo "      <!---End Contacto -->



<!--Start: Social -->
    <div class=\"container-fluid rs\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"redsocial\">
            <div class=\"sociales\">
\t\t\t\t\t\t\t\t<ul class=\"social\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-facebook\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-twitter\"></a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"icon fa-linkedin\"></a></li>
\t\t\t\t\t\t\t\t</ul>
              </div>
          </div>
        </div>
      </div>
    </div>
<!--End: Social -->

<!--Start: Footer -->
  <div class=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 209
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footera", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  </div>
<!--End: Footer -->

  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/gmx/templates/layout/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 209,  205 => 182,  196 => 176,  192 => 175,  185 => 171,  180 => 168,  178 => 167,  171 => 162,  166 => 150,  161 => 138,  156 => 126,  151 => 114,  143 => 109,  138 => 106,  136 => 105,  131 => 102,  126 => 84,  118 => 79,  113 => 76,  111 => 75,  104 => 70,  99 => 33,  93 => 30,  90 => 29,  88 => 28,  79 => 21,  73 => 18,  70 => 17,  68 => 16,  65 => 15,  59 => 12,  56 => 11,  54 => 10,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gmx/templates/layout/page--front.html.twig", "/Users/macbookpro/Documents/sitios/lican/website/themes/gmx/templates/layout/page--front.html.twig");
    }
}
