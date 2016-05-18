<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5bc23773c498112fc02c59d7f3ff3792a7bf8e2d64f6eac9d83e5b43e1423ba1 extends Twig_Template
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
        $__internal_3b76d6e0ed818f0a8d93139a5e77a84d4b67a2285479bac62eaf35de74101f0a = $this->env->getExtension("native_profiler");
        $__internal_3b76d6e0ed818f0a8d93139a5e77a84d4b67a2285479bac62eaf35de74101f0a->enter($__internal_3b76d6e0ed818f0a8d93139a5e77a84d4b67a2285479bac62eaf35de74101f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3b76d6e0ed818f0a8d93139a5e77a84d4b67a2285479bac62eaf35de74101f0a->leave($__internal_3b76d6e0ed818f0a8d93139a5e77a84d4b67a2285479bac62eaf35de74101f0a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
