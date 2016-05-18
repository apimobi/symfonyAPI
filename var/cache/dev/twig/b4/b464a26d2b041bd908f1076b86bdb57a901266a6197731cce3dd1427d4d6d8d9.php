<?php

/* App:front/Product:post.html.twig */
class __TwigTemplate_e8ee747ddea98e27b3e46f1a250053d7bc04785d6fb7483ee346445dbae84ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "App:front/Product:post.html.twig", 1);
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
        $__internal_665943c8fff2423a37cd581c506da7508c7146d1f8584067214507a9d462bdc5 = $this->env->getExtension("native_profiler");
        $__internal_665943c8fff2423a37cd581c506da7508c7146d1f8584067214507a9d462bdc5->enter($__internal_665943c8fff2423a37cd581c506da7508c7146d1f8584067214507a9d462bdc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "App:front/Product:post.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665943c8fff2423a37cd581c506da7508c7146d1f8584067214507a9d462bdc5->leave($__internal_665943c8fff2423a37cd581c506da7508c7146d1f8584067214507a9d462bdc5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_40a56ae024254b841d39e062487d4af2d28b6d7334824787491b868755407abf = $this->env->getExtension("native_profiler");
        $__internal_40a56ae024254b841d39e062487d4af2d28b6d7334824787491b868755407abf->enter($__internal_40a56ae024254b841d39e062487d4af2d28b6d7334824787491b868755407abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        if ((isset($context["showModal"]) ? $context["showModal"] : $this->getContext($context, "showModal"))) {
            // line 5
            echo "  <script>var showModal = true; </script>
";
        }
        // line 7
        echo "<div class=\"row\">

  <div class=\"col s12 m4 l3\"> <!-- Note that \"m4 l3\" was added -->
    <!-- Grey navigation panel

          This content will be:
      3-columns-wide on large screens,
      4-columns-wide on medium screens,
      12-columns-wide on small screens  -->

      ";
        // line 17
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
        
        $__internal_40a56ae024254b841d39e062487d4af2d28b6d7334824787491b868755407abf->leave($__internal_40a56ae024254b841d39e062487d4af2d28b6d7334824787491b868755407abf_prof);

    }

    public function getTemplateName()
    {
        return "App:front/Product:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 17,  46 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/* {% if showModal %}*/
/*   <script>var showModal = true; </script>*/
/* {% endif %}*/
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
/* */
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
/* */
/* {% endblock %}*/
/* */
