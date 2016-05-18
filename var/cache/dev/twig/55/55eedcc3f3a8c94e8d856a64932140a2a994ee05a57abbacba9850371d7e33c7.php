<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dd76186975742a1cbbe47c87c920afc0df2d3d949a8af5725ec69b70566d756f extends Twig_Template
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
        $__internal_eaa3dbb01a2c856be35309bded007ad2c924baadbe8089dc839016da7a5fb592 = $this->env->getExtension("native_profiler");
        $__internal_eaa3dbb01a2c856be35309bded007ad2c924baadbe8089dc839016da7a5fb592->enter($__internal_eaa3dbb01a2c856be35309bded007ad2c924baadbe8089dc839016da7a5fb592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_eaa3dbb01a2c856be35309bded007ad2c924baadbe8089dc839016da7a5fb592->leave($__internal_eaa3dbb01a2c856be35309bded007ad2c924baadbe8089dc839016da7a5fb592_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
