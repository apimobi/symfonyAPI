<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9dd288fcb70f2b4e7cf1eb1bfd5d93d123b5ec9362bab398e4fa9c7676ba586f extends Twig_Template
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
        $__internal_5393ab85bc6ae2da4dcebaf4d1e88e47b2b3398d7f4e12400ae6a83af704833f = $this->env->getExtension("native_profiler");
        $__internal_5393ab85bc6ae2da4dcebaf4d1e88e47b2b3398d7f4e12400ae6a83af704833f->enter($__internal_5393ab85bc6ae2da4dcebaf4d1e88e47b2b3398d7f4e12400ae6a83af704833f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5393ab85bc6ae2da4dcebaf4d1e88e47b2b3398d7f4e12400ae6a83af704833f->leave($__internal_5393ab85bc6ae2da4dcebaf4d1e88e47b2b3398d7f4e12400ae6a83af704833f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
