<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d21bbb182046d30314b313b8a8dc80b0fc3f8d7d301b245e7b3a0e03ebd3524f extends Twig_Template
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
        $__internal_55f058386ddf11c1e5ba2ed9523dc22bac6180e6dbd8e8483c67d1e67a287b32 = $this->env->getExtension("native_profiler");
        $__internal_55f058386ddf11c1e5ba2ed9523dc22bac6180e6dbd8e8483c67d1e67a287b32->enter($__internal_55f058386ddf11c1e5ba2ed9523dc22bac6180e6dbd8e8483c67d1e67a287b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_55f058386ddf11c1e5ba2ed9523dc22bac6180e6dbd8e8483c67d1e67a287b32->leave($__internal_55f058386ddf11c1e5ba2ed9523dc22bac6180e6dbd8e8483c67d1e67a287b32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
