<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_ca1b59a316f065d41138743bde80d6dd021b9fb6e6fe17c3c0c560b2eef3dfef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2014c1f17539c0ee5cd330c095faae305608e294f88807520b9c22ac848ed4c3 = $this->env->getExtension("native_profiler");
        $__internal_2014c1f17539c0ee5cd330c095faae305608e294f88807520b9c22ac848ed4c3->enter($__internal_2014c1f17539c0ee5cd330c095faae305608e294f88807520b9c22ac848ed4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2014c1f17539c0ee5cd330c095faae305608e294f88807520b9c22ac848ed4c3->leave($__internal_2014c1f17539c0ee5cd330c095faae305608e294f88807520b9c22ac848ed4c3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8144f0fd2990f83e1375e96763230b34275dceadd20c65644863be9599f40cbb = $this->env->getExtension("native_profiler");
        $__internal_8144f0fd2990f83e1375e96763230b34275dceadd20c65644863be9599f40cbb->enter($__internal_8144f0fd2990f83e1375e96763230b34275dceadd20c65644863be9599f40cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_8144f0fd2990f83e1375e96763230b34275dceadd20c65644863be9599f40cbb->leave($__internal_8144f0fd2990f83e1375e96763230b34275dceadd20c65644863be9599f40cbb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
