<?php

/* modules/contrib/photoswipe/templates/photoswipe-container.html.twig */
class __TwigTemplate_e60c51cfc53ba4f9965739df99ee4b7243b99cb4ebd9de9db542bd43968f1815 extends Twig_Template
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
        $tags = array();
        $filters = array("t" => 37);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array('t'),
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

        // line 2
        echo "<div class=\"pswp\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">

  ";
        // line 8
        echo "  <div class=\"pswp__bg\"></div>

  ";
        // line 11
        echo "  <div class=\"pswp__scroll-wrap\">

    ";
        // line 18
        echo "
    <div class=\"pswp__container\">
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
      <div class=\"pswp__item\"></div>
    </div>

    ";
        // line 29
        echo "    <div class=\"pswp__ui pswp__ui--hidden\">

      <div class=\"pswp__top-bar\">

        ";
        // line 34
        echo "
        <div class=\"pswp__counter\"></div>

        <button class=\"pswp__button pswp__button--close\" title=\"";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Close (Esc)")));
        echo "\"></button>

        <button class=\"pswp__button pswp__button--share\" title=\"";
        // line 39
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Share")));
        echo "\"></button>

        <button class=\"pswp__button pswp__button--fs\" title=\"";
        // line 41
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle fullscreen")));
        echo "\"></button>

        <button class=\"pswp__button pswp__button--zoom\" title=\"";
        // line 43
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Zoom in/out")));
        echo "\"></button>

        ";
        // line 50
        echo "
        <div class=\"pswp__preloader\">
          <div class=\"pswp__preloader__icn\">
            <div class=\"pswp__preloader__cut\">
              <div class=\"pswp__preloader__donut\"></div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"pswp__share-modal pswp__share-modal--hidden pswp__single-tap\">
        <div class=\"pswp__share-tooltip\"></div>
      </div>

      <button class=\"pswp__button pswp__button--arrow--left\" title=\"";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Previous (arrow left)")));
        echo "\">
      </button>

      <button class=\"pswp__button pswp__button--arrow--right\" title=\"";
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Next (arrow right)")));
        echo "\">
      </button>

      <div class=\"pswp__caption\">
        <div class=\"pswp__caption__center\"></div>
      </div>

    </div>

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/photoswipe/templates/photoswipe-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 67,  111 => 64,  95 => 50,  90 => 43,  85 => 41,  80 => 39,  75 => 37,  70 => 34,  64 => 29,  55 => 18,  51 => 11,  47 => 8,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/photoswipe/templates/photoswipe-container.html.twig", "/Users/macbookpro/Documents/sitios/lican/website/modules/contrib/photoswipe/templates/photoswipe-container.html.twig");
    }
}
