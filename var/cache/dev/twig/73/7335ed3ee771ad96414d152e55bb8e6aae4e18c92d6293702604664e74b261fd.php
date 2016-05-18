<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_17e6a05a72ce9788edb17b9c11561be07d0ba40354a2eec72cf04b7fb245c6ba extends Twig_Template
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
        $__internal_5d42a2d05934d275faa3516f19a17d4c1c0cef170781b7c5f499cf69212cdc7f = $this->env->getExtension("native_profiler");
        $__internal_5d42a2d05934d275faa3516f19a17d4c1c0cef170781b7c5f499cf69212cdc7f->enter($__internal_5d42a2d05934d275faa3516f19a17d4c1c0cef170781b7c5f499cf69212cdc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5d42a2d05934d275faa3516f19a17d4c1c0cef170781b7c5f499cf69212cdc7f->leave($__internal_5d42a2d05934d275faa3516f19a17d4c1c0cef170781b7c5f499cf69212cdc7f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
