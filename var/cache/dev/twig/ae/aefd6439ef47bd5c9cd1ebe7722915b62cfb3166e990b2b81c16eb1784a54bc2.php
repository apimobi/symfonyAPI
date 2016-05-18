<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a71f1cd8ecd80f43ad13c28a865e7ca96ad69340ff41acc8205afc8da7216429 extends Twig_Template
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
        $__internal_44708fdb3156f48eee593ba5a37de74f96afe68f8e48258bd5c0423798f770cc = $this->env->getExtension("native_profiler");
        $__internal_44708fdb3156f48eee593ba5a37de74f96afe68f8e48258bd5c0423798f770cc->enter($__internal_44708fdb3156f48eee593ba5a37de74f96afe68f8e48258bd5c0423798f770cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_44708fdb3156f48eee593ba5a37de74f96afe68f8e48258bd5c0423798f770cc->leave($__internal_44708fdb3156f48eee593ba5a37de74f96afe68f8e48258bd5c0423798f770cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
