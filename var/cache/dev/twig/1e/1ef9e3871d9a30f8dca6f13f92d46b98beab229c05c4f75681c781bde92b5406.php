<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_b08b22f50f8b3538eaad3e73836255985939df2b16d0101834c45caff037c18f extends Twig_Template
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
        $__internal_f0255f66a5ef6e6c53166f2b4d06d7da3c3f19f1c2b6061fdb8275cc20441c76 = $this->env->getExtension("native_profiler");
        $__internal_f0255f66a5ef6e6c53166f2b4d06d7da3c3f19f1c2b6061fdb8275cc20441c76->enter($__internal_f0255f66a5ef6e6c53166f2b4d06d7da3c3f19f1c2b6061fdb8275cc20441c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        // line 1
        if ((twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion"))) && twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion"))))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, (isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty((isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion")))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty((isset($context["sinceVersion"]) ? $context["sinceVersion"] : $this->getContext($context, "sinceVersion")))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, (isset($context["untilVersion"]) ? $context["untilVersion"] : $this->getContext($context, "untilVersion")), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_f0255f66a5ef6e6c53166f2b4d06d7da3c3f19f1c2b6061fdb8275cc20441c76->leave($__internal_f0255f66a5ef6e6c53166f2b4d06d7da3c3f19f1c2b6061fdb8275cc20441c76_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 6,  34 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if sinceVersion is empty and untilVersion is empty %}*/
/* **/
/* {% else %}*/
/*     {% if sinceVersion is not empty %}&gt;={{ sinceVersion }}{% endif %}*/
/*     {% if untilVersion is not empty %}*/
/*         {% if sinceVersion is not empty %},{% endif %}&lt;={{ untilVersion }}*/
/*     {% endif %}*/
/* {% endif %}*/
/* */
