<?php

/* {# inline_template_start #}        <div class="container">
          <div class="row">
            <div class="col-md-5">{{ field_imagen }}</div>
            <div class="col-md-6">{{ field_biografia }}</div>
          </div>
        </div> */
class __TwigTemplate_7bea213f6c9c0f5bc63a85e01acac659958c2724327ad1f6f95e422f3e7e1915 extends Twig_Template
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
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-5\">";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_imagen"] ?? null), "html", null, true));
        echo "</div>
            <div class=\"col-md-6\">";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_biografia"] ?? null), "html", null, true));
        echo "</div>
          </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-5\">{{ field_imagen }}</div>
            <div class=\"col-md-6\">{{ field_biografia }}</div>
          </div>
        </div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 4,  52 => 3,  48 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-md-5\">{{ field_imagen }}</div>
            <div class=\"col-md-6\">{{ field_biografia }}</div>
          </div>
        </div>", "");
    }
}
