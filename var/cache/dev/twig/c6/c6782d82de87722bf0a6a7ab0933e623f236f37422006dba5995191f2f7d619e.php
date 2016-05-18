<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9b536570f9dc0b32462ec35e364cba61aabd285a21cbfc27e1f4c3f0ecc8a3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_1e8c6d896b1f8fc3d99957d8dc01411e8f85d894803914c62f98b24c88b7155f = $this->env->getExtension("native_profiler");
        $__internal_1e8c6d896b1f8fc3d99957d8dc01411e8f85d894803914c62f98b24c88b7155f->enter($__internal_1e8c6d896b1f8fc3d99957d8dc01411e8f85d894803914c62f98b24c88b7155f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e8c6d896b1f8fc3d99957d8dc01411e8f85d894803914c62f98b24c88b7155f->leave($__internal_1e8c6d896b1f8fc3d99957d8dc01411e8f85d894803914c62f98b24c88b7155f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1be2dc0561d10f79fa87a52155fe0f7b65bce4304cd1731cdec598b3d3c11d7f = $this->env->getExtension("native_profiler");
        $__internal_1be2dc0561d10f79fa87a52155fe0f7b65bce4304cd1731cdec598b3d3c11d7f->enter($__internal_1be2dc0561d10f79fa87a52155fe0f7b65bce4304cd1731cdec598b3d3c11d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1be2dc0561d10f79fa87a52155fe0f7b65bce4304cd1731cdec598b3d3c11d7f->leave($__internal_1be2dc0561d10f79fa87a52155fe0f7b65bce4304cd1731cdec598b3d3c11d7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1363e6615dc9b5985d597e68e4aa57c99e62cb4fb6d56235cdb278470d93d11f = $this->env->getExtension("native_profiler");
        $__internal_1363e6615dc9b5985d597e68e4aa57c99e62cb4fb6d56235cdb278470d93d11f->enter($__internal_1363e6615dc9b5985d597e68e4aa57c99e62cb4fb6d56235cdb278470d93d11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1363e6615dc9b5985d597e68e4aa57c99e62cb4fb6d56235cdb278470d93d11f->leave($__internal_1363e6615dc9b5985d597e68e4aa57c99e62cb4fb6d56235cdb278470d93d11f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_617b7b01bc5cf2dbca46ad6f15ff21e60bedb14456e0a8d14791f72415293ca5 = $this->env->getExtension("native_profiler");
        $__internal_617b7b01bc5cf2dbca46ad6f15ff21e60bedb14456e0a8d14791f72415293ca5->enter($__internal_617b7b01bc5cf2dbca46ad6f15ff21e60bedb14456e0a8d14791f72415293ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_617b7b01bc5cf2dbca46ad6f15ff21e60bedb14456e0a8d14791f72415293ca5->leave($__internal_617b7b01bc5cf2dbca46ad6f15ff21e60bedb14456e0a8d14791f72415293ca5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
