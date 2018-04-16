<?php

/* themes/gmx/templates/layout/page--node--12.html.twig */
class __TwigTemplate_06d4f2c31c3a21a51b4383c67daa9fa5eacc20f35dfdc507e31aeab9400176b8 extends Twig_Template
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
        $tags = array("if" => 12);
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
        echo "<!-- PANEL DE CONTROL TEMPLATE -->

<div id=\"page-wrapper\">
  <div id=\"page\">


  <!--Start: Branding and Menu -->
<div id=\"stick\">
  <div class=\"menu\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 12
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 13
            echo "          <div class=\"col-xs-6 col-md-4\">
            ";
            // line 14
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 17
        echo "        <!-- Navigation -->
        ";
        // line 18
        if ($this->getAttribute(($context["page"] ?? null), "menu", array())) {
            // line 19
            echo "          <div class=\"col-xs-6 col-md-8\">
            ";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", array()), "html", null, true));
            echo " 
          </div>
        ";
        }
        // line 23
        echo "        <!--End Navigation -->
      </div>
    </div>
  </div>
</div>

<!-- Header and Navbar -->
";
        // line 62
        echo "<!--End Header & Navbar -->

      <!--- Start Messages -->
      ";
        // line 65
        if ($this->getAttribute(($context["page"] ?? null), "messages", array())) {
            // line 66
            echo "        <div class=\"container\">
          <div class=\"row\">
              ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "messages", array()), "html", null, true));
            echo "
          </div>
        </div>
      ";
        }
        // line 72
        echo "      <!---End Messages -->

      ";
        // line 74
        if ($this->getAttribute(($context["page"] ?? null), "panel", array())) {
            // line 75
            echo "        <div class=\"container box\">
          <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 78
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "panel", array()), "html", null, true));
            echo "
            </div>
          </div>
        </div>
      ";
        }
        // line 83
        echo "
        <div class=\"container box\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "panela", array()), "html", null, true));
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 90
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "panelb", array()), "html", null, true));
        echo "
            </div>
          </div>
        </div>


<!--Start: Footer -->
  <div class=\"footer\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 101
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
        return "themes/gmx/templates/layout/page--node--12.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 101,  139 => 90,  133 => 87,  127 => 83,  119 => 78,  114 => 75,  112 => 74,  108 => 72,  101 => 68,  97 => 66,  95 => 65,  90 => 62,  81 => 23,  75 => 20,  72 => 19,  70 => 18,  67 => 17,  61 => 14,  58 => 13,  56 => 12,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gmx/templates/layout/page--node--12.html.twig", "/Users/macbookpro/Documents/sitios/lican/website/themes/gmx/templates/layout/page--node--12.html.twig");
    }
}
