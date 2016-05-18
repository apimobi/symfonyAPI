<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b67ac1d87386625f50ec11a3001477c584fbdaa6cf22210862de81da2510cc43 extends Twig_Template
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
        $__internal_de802636a4de27df1aad7bbe8f0c086208d509f5e1727469be20177257069876 = $this->env->getExtension("native_profiler");
        $__internal_de802636a4de27df1aad7bbe8f0c086208d509f5e1727469be20177257069876->enter($__internal_de802636a4de27df1aad7bbe8f0c086208d509f5e1727469be20177257069876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_de802636a4de27df1aad7bbe8f0c086208d509f5e1727469be20177257069876->leave($__internal_de802636a4de27df1aad7bbe8f0c086208d509f5e1727469be20177257069876_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
