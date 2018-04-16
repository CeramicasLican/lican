<?php

/* themes/gmx/templates/layout/page.html.twig */
class __TwigTemplate_764af4b5467909a2107811121f60cec65c1c439c063b9a7b9dd18b6b396db727 extends Twig_Template
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

<!-- Header and Navbar -->
<header class=\"main-header\">

  <!-- Start: Banner -->
    ";
        // line 31
        if ($this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array())) {
            // line 32
            echo "      <div class=\"container\">
        <div class=\"banner\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "welcome_banner_text", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 42
        echo "  <!-- End: Banner -->


  <!--Start: Highlighted -->
    ";
        // line 46
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 47
            echo "      <div class=\"highlighted\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 57
        echo "  <!--End: Highlighted -->

</header>
<!--End Header & Navbar -->

      <!--- Start Messages -->
      ";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "messages", array())) {
            // line 64
            echo "        <div class=\"container\">
          <div class=\"row\">
              ";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "messages", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 70
        echo "      <!---End Messages -->


      <!--- Start content -->
      ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 75
            echo "        <div class=\"container\">
          <div class=\"row contenido\">
              ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 81
        echo "      <!---End content -->

            <!--- Start Contacto -->
      ";
        // line 84
        if ($this->getAttribute(($context["page"] ?? null), "enlacesdeinteres", array())) {
            // line 85
            echo "        <div class=\"container-fluid enlacesdeinteres\">
          <div class=\"row\">
            <div class=\"col-md-8 col-xs-12 col-md-offset-2\">
                ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "enlacesdeinteres", array()), "html", null, true));
            echo "
            </div>
              <div class=\"col-md-10 col-xs-12 col-md-offset-1\">
                <div class=\"margenenlaces\">
                 <div class=\"col-md-6\">";
            // line 92
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "enlacesdeinteresa", array()), "html", null, true));
            echo "</div>
                 <div class=\"col-md-6\">";
            // line 93
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "enlacesdeinteresb", array()), "html", null, true));
            echo "</div>
                </div>
              </div>
          </div>
        </div>
      ";
        }
        // line 99
        echo "      <!---End Contacto -->

<!--Start: Footer -->
  <div class=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 106
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footera", array()), "html", null, true));
        echo "
        </div>
      </div>
    </div>
  </div>
<!--End: Footer -->

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gmx/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 106,  203 => 99,  194 => 93,  190 => 92,  183 => 88,  178 => 85,  176 => 84,  171 => 81,  164 => 77,  160 => 75,  158 => 74,  152 => 70,  145 => 66,  141 => 64,  139 => 63,  131 => 57,  122 => 51,  116 => 47,  114 => 46,  108 => 42,  99 => 36,  93 => 32,  91 => 31,  79 => 21,  73 => 18,  70 => 17,  68 => 16,  65 => 15,  59 => 12,  56 => 11,  54 => 10,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gmx/templates/layout/page.html.twig", "/Users/macbookpro/Documents/sitios/lican/website/themes/gmx/templates/layout/page.html.twig");
    }
}
