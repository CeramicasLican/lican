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
        $tags = array("if" => 9);
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
        // line 9
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 10
            echo "          <div class=\"col-xs-6 col-md-4\">
            ";
            // line 11
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 14
        echo "        <!-- Navigation -->
        ";
        // line 15
        if ($this->getAttribute(($context["page"] ?? null), "menu", array())) {
            // line 16
            echo "          <div class=\"col-xs-6 col-md-8\">
            ";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()), "html", null, true));
            echo " 
          </div>
        ";
        }
        // line 20
        echo "        <!--End Navigation -->
      </div>
    </div>
  </div>
</div>

  <!--Start: Slider -->
    ";
        // line 27
        if ($this->getAttribute(($context["page"] ?? null), "slider", array())) {
            // line 28
            echo "      <div class=\"slider\">
              ";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slider", array()), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 32
        echo "  <!--End: Slider -->


      <!--- Start Messages -->
      ";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "messages", array())) {
            // line 37
            echo "        <div class=\"container\">
          <div class=\"row\">
              ";
            // line 39
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "messages", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 43
        echo "      <!---End Messages -->

      <!--- Start content -->
      ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 47
            echo "        <div class=\"container\">
          <div class=\"row contenido\">
              ";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 53
        echo "      <!---End content -->

      <!--- Start Biografía -->
      ";
        // line 56
        if ($this->getAttribute(($context["page"] ?? null), "biografia", array())) {
            // line 57
            echo "        <div class=\"container-fluid biografia boxa\">
          <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                ";
            // line 60
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "biografia", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 65
        echo "      <!---End Biografía -->

      <!--- Start Taller -->
      ";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "taller", array())) {
            // line 69
            echo "        <div class=\"container-fluid taller box\">
          <div class=\"row\">
            <div class=\"col-md-9 col-md-offset-2\">
                ";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "taller", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 77
        echo "      <!---End Taller -->

      <!--- Start Clases -->
      ";
        // line 80
        if ($this->getAttribute(($context["page"] ?? null), "clases", array())) {
            // line 81
            echo "        <div class=\"container-fluid clases box\">
          <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "clases", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 89
        echo "      <!---End Clases -->

      <!--- Start Tienda -->
      ";
        // line 92
        if ($this->getAttribute(($context["page"] ?? null), "tienda", array())) {
            // line 93
            echo "        <div class=\"container-fluid tienda box\">
          <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tienda", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 101
        echo "      <!---End Tienda -->

      <!--- Start Galería -->
      ";
        // line 104
        if ($this->getAttribute(($context["page"] ?? null), "galeria", array())) {
            // line 105
            echo "        <div class=\"container-fluid galeria box\">
          <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                ";
            // line 108
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "galeria", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 113
        echo "      <!---End Galería -->

      <!--- Start Enlaces de Interés -->
      ";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "enlacesdeinteres", array())) {
            // line 117
            echo "        <div class=\"container-fluid enlacesdeinteres\">
          <div class=\"row\">
            <div class=\"col-md-8 col-xs-12 col-md-offset-2\">
                ";
            // line 120
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "enlacesdeinteres", array()), "html", null, true));
            echo "
            </div>
              <div class=\"col-md-10 col-xs-12 col-md-offset-1\">
                <div class=\"margenenlaces\">
                 <div class=\"col-md-6\">";
            // line 124
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "enlacesdeinteresa", array()), "html", null, true));
            echo "</div>
                 <div class=\"col-md-6\">";
            // line 125
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "enlacesdeinteresb", array()), "html", null, true));
            echo "</div>
                </div>
              </div>
          </div>
        </div>
      ";
        }
        // line 131
        echo "      <!---End Enlaces de interés -->

<!--Start: Footer -->
  <div class=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 138
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
        return array (  276 => 138,  267 => 131,  258 => 125,  254 => 124,  247 => 120,  242 => 117,  240 => 116,  235 => 113,  227 => 108,  222 => 105,  220 => 104,  215 => 101,  207 => 96,  202 => 93,  200 => 92,  195 => 89,  187 => 84,  182 => 81,  180 => 80,  175 => 77,  167 => 72,  162 => 69,  160 => 68,  155 => 65,  147 => 60,  142 => 57,  140 => 56,  135 => 53,  128 => 49,  124 => 47,  122 => 46,  117 => 43,  110 => 39,  106 => 37,  104 => 36,  98 => 32,  92 => 29,  89 => 28,  87 => 27,  78 => 20,  72 => 17,  69 => 16,  67 => 15,  64 => 14,  58 => 11,  55 => 10,  53 => 9,  43 => 1,);
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
