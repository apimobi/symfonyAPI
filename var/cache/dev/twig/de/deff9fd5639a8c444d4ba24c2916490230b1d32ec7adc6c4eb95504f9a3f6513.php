<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_f8ca48f9bde8ec392a99ed2f798ed62561b06069bddff22266ec6b6ae5e9d1b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f12be81458d63e5cf40fd2ae26f276ded880426fc8f775836fbdb4716847a59 = $this->env->getExtension("native_profiler");
        $__internal_4f12be81458d63e5cf40fd2ae26f276ded880426fc8f775836fbdb4716847a59->enter($__internal_4f12be81458d63e5cf40fd2ae26f276ded880426fc8f775836fbdb4716847a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f12be81458d63e5cf40fd2ae26f276ded880426fc8f775836fbdb4716847a59->leave($__internal_4f12be81458d63e5cf40fd2ae26f276ded880426fc8f775836fbdb4716847a59_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3833bfd38d336744fc603a6f20e8e1e55b0ea0df6f7a7210c567eba6b2648d42 = $this->env->getExtension("native_profiler");
        $__internal_3833bfd38d336744fc603a6f20e8e1e55b0ea0df6f7a7210c567eba6b2648d42->enter($__internal_3833bfd38d336744fc603a6f20e8e1e55b0ea0df6f7a7210c567eba6b2648d42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_3833bfd38d336744fc603a6f20e8e1e55b0ea0df6f7a7210c567eba6b2648d42->leave($__internal_3833bfd38d336744fc603a6f20e8e1e55b0ea0df6f7a7210c567eba6b2648d42_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "NelmioApiDocBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <li class="resource">*/
/*         <ul class="endpoints">*/
/*             <li class="endpoint">*/
/*                 <ul class="operations">*/
/*                     {% include 'NelmioApiDocBundle::method.html.twig' %}*/
/*                 </ul>*/
/*             </li>*/
/*         </ul>*/
/*     </li>*/
/* {% endblock content %}*/
/* */
