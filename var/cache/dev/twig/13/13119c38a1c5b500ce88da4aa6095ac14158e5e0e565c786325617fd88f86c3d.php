<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2220c720bc79533dd46866f34ee8b24d8f9eea604dbec87d2c6df448dd9fdba2 extends Twig_Template
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
        $__internal_c1da959578ac851d8cb6f664553f8477aad13a80fe9cd23fbcaf5a9165e5b04a = $this->env->getExtension("native_profiler");
        $__internal_c1da959578ac851d8cb6f664553f8477aad13a80fe9cd23fbcaf5a9165e5b04a->enter($__internal_c1da959578ac851d8cb6f664553f8477aad13a80fe9cd23fbcaf5a9165e5b04a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c1da959578ac851d8cb6f664553f8477aad13a80fe9cd23fbcaf5a9165e5b04a->leave($__internal_c1da959578ac851d8cb6f664553f8477aad13a80fe9cd23fbcaf5a9165e5b04a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
