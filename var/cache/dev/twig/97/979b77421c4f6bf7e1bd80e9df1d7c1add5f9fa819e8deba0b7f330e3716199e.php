<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cf49f91c47868b0fd0b20d4a82c219ae95c573a5a1680976bb27fb2ff1c9b273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d0a8e9f589ffa54c67e798730c83d0e4edf6507f9a8b87a8819980236a1a0917 = $this->env->getExtension("native_profiler");
        $__internal_d0a8e9f589ffa54c67e798730c83d0e4edf6507f9a8b87a8819980236a1a0917->enter($__internal_d0a8e9f589ffa54c67e798730c83d0e4edf6507f9a8b87a8819980236a1a0917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0a8e9f589ffa54c67e798730c83d0e4edf6507f9a8b87a8819980236a1a0917->leave($__internal_d0a8e9f589ffa54c67e798730c83d0e4edf6507f9a8b87a8819980236a1a0917_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0cc98f4aad8a209badefbf2cfd373bb47d9ece9ca266746070dc3f27beac9db6 = $this->env->getExtension("native_profiler");
        $__internal_0cc98f4aad8a209badefbf2cfd373bb47d9ece9ca266746070dc3f27beac9db6->enter($__internal_0cc98f4aad8a209badefbf2cfd373bb47d9ece9ca266746070dc3f27beac9db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0cc98f4aad8a209badefbf2cfd373bb47d9ece9ca266746070dc3f27beac9db6->leave($__internal_0cc98f4aad8a209badefbf2cfd373bb47d9ece9ca266746070dc3f27beac9db6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6d26313cd8ae40ac039626372df63b19e5d10729cc0ca72cfe3c63b05c4cf59d = $this->env->getExtension("native_profiler");
        $__internal_6d26313cd8ae40ac039626372df63b19e5d10729cc0ca72cfe3c63b05c4cf59d->enter($__internal_6d26313cd8ae40ac039626372df63b19e5d10729cc0ca72cfe3c63b05c4cf59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d26313cd8ae40ac039626372df63b19e5d10729cc0ca72cfe3c63b05c4cf59d->leave($__internal_6d26313cd8ae40ac039626372df63b19e5d10729cc0ca72cfe3c63b05c4cf59d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fd12f5173d3fdc1437793627cd43757707acb8aa6f4610b284cbc419408758e4 = $this->env->getExtension("native_profiler");
        $__internal_fd12f5173d3fdc1437793627cd43757707acb8aa6f4610b284cbc419408758e4->enter($__internal_fd12f5173d3fdc1437793627cd43757707acb8aa6f4610b284cbc419408758e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fd12f5173d3fdc1437793627cd43757707acb8aa6f4610b284cbc419408758e4->leave($__internal_fd12f5173d3fdc1437793627cd43757707acb8aa6f4610b284cbc419408758e4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
