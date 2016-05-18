<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_c619c05daa7d0b5b943241407d7c847467f7849bf0309aba638450b3c473b7ea extends Twig_Template
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
        $__internal_72d34d4246afd1a56cc932131f33343d061483b8f48a469eaf9cdc2f21c05acd = $this->env->getExtension("native_profiler");
        $__internal_72d34d4246afd1a56cc932131f33343d061483b8f48a469eaf9cdc2f21c05acd->enter($__internal_72d34d4246afd1a56cc932131f33343d061483b8f48a469eaf9cdc2f21c05acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_72d34d4246afd1a56cc932131f33343d061483b8f48a469eaf9cdc2f21c05acd->leave($__internal_72d34d4246afd1a56cc932131f33343d061483b8f48a469eaf9cdc2f21c05acd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
