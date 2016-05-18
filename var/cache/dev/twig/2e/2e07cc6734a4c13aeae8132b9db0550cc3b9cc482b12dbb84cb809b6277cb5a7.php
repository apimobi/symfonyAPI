<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e5fd7e292ce56debd6e85491cb0ca251036a084b34c63323bdeeb0779007702d extends Twig_Template
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
        $__internal_5344cc52ce422b2af3d14eaba67ef05ae4566334fa85e17613a9c32144f9eccf = $this->env->getExtension("native_profiler");
        $__internal_5344cc52ce422b2af3d14eaba67ef05ae4566334fa85e17613a9c32144f9eccf->enter($__internal_5344cc52ce422b2af3d14eaba67ef05ae4566334fa85e17613a9c32144f9eccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5344cc52ce422b2af3d14eaba67ef05ae4566334fa85e17613a9c32144f9eccf->leave($__internal_5344cc52ce422b2af3d14eaba67ef05ae4566334fa85e17613a9c32144f9eccf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
