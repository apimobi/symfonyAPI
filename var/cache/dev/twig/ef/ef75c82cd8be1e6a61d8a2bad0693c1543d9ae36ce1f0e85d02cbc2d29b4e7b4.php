<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a197888edd8085e86c08398cff5162c1c28946fef7b9d4d42954380060cdf0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff7f159457ffb96b9c771e356037d03a27e2abade42ebb6a9f4e2db6a0150cc0 = $this->env->getExtension("native_profiler");
        $__internal_ff7f159457ffb96b9c771e356037d03a27e2abade42ebb6a9f4e2db6a0150cc0->enter($__internal_ff7f159457ffb96b9c771e356037d03a27e2abade42ebb6a9f4e2db6a0150cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff7f159457ffb96b9c771e356037d03a27e2abade42ebb6a9f4e2db6a0150cc0->leave($__internal_ff7f159457ffb96b9c771e356037d03a27e2abade42ebb6a9f4e2db6a0150cc0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_79b0b49a631e9d92bd3f8b6417fd35c853a6ad3a74b9a69b4aeaca07e4b4c3b9 = $this->env->getExtension("native_profiler");
        $__internal_79b0b49a631e9d92bd3f8b6417fd35c853a6ad3a74b9a69b4aeaca07e4b4c3b9->enter($__internal_79b0b49a631e9d92bd3f8b6417fd35c853a6ad3a74b9a69b4aeaca07e4b4c3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_79b0b49a631e9d92bd3f8b6417fd35c853a6ad3a74b9a69b4aeaca07e4b4c3b9->leave($__internal_79b0b49a631e9d92bd3f8b6417fd35c853a6ad3a74b9a69b4aeaca07e4b4c3b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6132e01aae5e13121f17fc79a6b8eb486e146a334d5841f862b3b1625c518740 = $this->env->getExtension("native_profiler");
        $__internal_6132e01aae5e13121f17fc79a6b8eb486e146a334d5841f862b3b1625c518740->enter($__internal_6132e01aae5e13121f17fc79a6b8eb486e146a334d5841f862b3b1625c518740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6132e01aae5e13121f17fc79a6b8eb486e146a334d5841f862b3b1625c518740->leave($__internal_6132e01aae5e13121f17fc79a6b8eb486e146a334d5841f862b3b1625c518740_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
