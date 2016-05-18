<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_f0637f4e00503d08760ced1ee1790918b33ff3eade0c2358e54f4126d39f3b61 extends Twig_Template
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
        $__internal_e9b1709d6f4bef5153d9b0eff8ba1c5cb141d78f3f66ce2a71081d9671205f53 = $this->env->getExtension("native_profiler");
        $__internal_e9b1709d6f4bef5153d9b0eff8ba1c5cb141d78f3f66ce2a71081d9671205f53->enter($__internal_e9b1709d6f4bef5153d9b0eff8ba1c5cb141d78f3f66ce2a71081d9671205f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_e9b1709d6f4bef5153d9b0eff8ba1c5cb141d78f3f66ce2a71081d9671205f53->leave($__internal_e9b1709d6f4bef5153d9b0eff8ba1c5cb141d78f3f66ce2a71081d9671205f53_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
