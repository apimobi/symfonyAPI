<?php

/* App:front/User:post.html.twig */
class __TwigTemplate_32028d499f6d393e90e167a622b7a0e6c98a9228a8e534862ea9fe771019595d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "App:front/User:post.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77da34334ca79d8bb89dfd4516abb5e664a9364510429ba9f9de72078e8426d5 = $this->env->getExtension("native_profiler");
        $__internal_77da34334ca79d8bb89dfd4516abb5e664a9364510429ba9f9de72078e8426d5->enter($__internal_77da34334ca79d8bb89dfd4516abb5e664a9364510429ba9f9de72078e8426d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "App:front/User:post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77da34334ca79d8bb89dfd4516abb5e664a9364510429ba9f9de72078e8426d5->leave($__internal_77da34334ca79d8bb89dfd4516abb5e664a9364510429ba9f9de72078e8426d5_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_38820030e31d3a2947fbd8828698a8ad382101b8a1d0032abe3a327cf187992f = $this->env->getExtension("native_profiler");
        $__internal_38820030e31d3a2947fbd8828698a8ad382101b8a1d0032abe3a327cf187992f->enter($__internal_38820030e31d3a2947fbd8828698a8ad382101b8a1d0032abe3a327cf187992f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "<div class=\"row\">

  <div class=\"col s12 m4 l3\"> <!-- Note that \"m4 l3\" was added -->
    <!-- Grey navigation panel

          This content will be:
      3-columns-wide on large screens,
      4-columns-wide on medium screens,
      12-columns-wide on small screens  -->

      ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

  </div>

</div>
<!-- Modal Structure -->
<div id=\"modal1\" class=\"modal\">
  <div class=\"modal-content\">
    <h4>Elément enregstré</h4>
    <p>YES!</p>
  </div>
  <div class=\"modal-footer\">
    <a href=\"#!\" class=\" modal-action modal-close waves-effect waves-green btn-flat\">OK</a>
  </div>
</div>

";
        
        $__internal_38820030e31d3a2947fbd8828698a8ad382101b8a1d0032abe3a327cf187992f->leave($__internal_38820030e31d3a2947fbd8828698a8ad382101b8a1d0032abe3a327cf187992f_prof);

    }

    public function getTemplateName()
    {
        return "App:front/User:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block content %}*/
/* <div class="row">*/
/* */
/*   <div class="col s12 m4 l3"> <!-- Note that "m4 l3" was added -->*/
/*     <!-- Grey navigation panel*/
/* */
/*           This content will be:*/
/*       3-columns-wide on large screens,*/
/*       4-columns-wide on medium screens,*/
/*       12-columns-wide on small screens  -->*/
/* */
/*       {{ form(form) }}*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* <!-- Modal Structure -->*/
/* <div id="modal1" class="modal">*/
/*   <div class="modal-content">*/
/*     <h4>Elément enregstré</h4>*/
/*     <p>YES!</p>*/
/*   </div>*/
/*   <div class="modal-footer">*/
/*     <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">OK</a>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
