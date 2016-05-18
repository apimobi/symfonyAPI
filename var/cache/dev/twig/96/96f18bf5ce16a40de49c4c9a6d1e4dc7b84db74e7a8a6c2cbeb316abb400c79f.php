<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_8990800eb371a858e13418dcd897d96fa6fa3e3a957c6421d7f94debbd4951d5 extends Twig_Template
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
        $__internal_f5b0e989e254d5164b8b05af4d6d8436c96d64d67aa8f94507aabd667f007293 = $this->env->getExtension("native_profiler");
        $__internal_f5b0e989e254d5164b8b05af4d6d8436c96d64d67aa8f94507aabd667f007293->enter($__internal_f5b0e989e254d5164b8b05af4d6d8436c96d64d67aa8f94507aabd667f007293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f5b0e989e254d5164b8b05af4d6d8436c96d64d67aa8f94507aabd667f007293->leave($__internal_f5b0e989e254d5164b8b05af4d6d8436c96d64d67aa8f94507aabd667f007293_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
