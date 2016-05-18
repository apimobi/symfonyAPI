<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_20b44d39fd857642c511cffe520b3f1ab3b511f439fe920d50ae0bd5d39ff720 extends Twig_Template
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
        $__internal_8bc5514a8c08e3aa93d8e6aff850f6b8dcd8283618f48cb1b7e54363d213ac1a = $this->env->getExtension("native_profiler");
        $__internal_8bc5514a8c08e3aa93d8e6aff850f6b8dcd8283618f48cb1b7e54363d213ac1a->enter($__internal_8bc5514a8c08e3aa93d8e6aff850f6b8dcd8283618f48cb1b7e54363d213ac1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8bc5514a8c08e3aa93d8e6aff850f6b8dcd8283618f48cb1b7e54363d213ac1a->leave($__internal_8bc5514a8c08e3aa93d8e6aff850f6b8dcd8283618f48cb1b7e54363d213ac1a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
