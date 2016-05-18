<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_a8033487a599debebd6e7648d2381d5a23494b9bacd664ce18dccfe48c51af2e extends Twig_Template
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
        $__internal_ad88a48a4381c0cc4fcdd2c8732e324be011ac3e2c8936a5beeede975eee97c1 = $this->env->getExtension("native_profiler");
        $__internal_ad88a48a4381c0cc4fcdd2c8732e324be011ac3e2c8936a5beeede975eee97c1->enter($__internal_ad88a48a4381c0cc4fcdd2c8732e324be011ac3e2c8936a5beeede975eee97c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ad88a48a4381c0cc4fcdd2c8732e324be011ac3e2c8936a5beeede975eee97c1->leave($__internal_ad88a48a4381c0cc4fcdd2c8732e324be011ac3e2c8936a5beeede975eee97c1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
