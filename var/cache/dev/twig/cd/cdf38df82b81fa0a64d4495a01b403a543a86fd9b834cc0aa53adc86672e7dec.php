<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_203ede0ba543d51fd802d1bbcac1ca5b8bc472e68d56e832fb122322533729b3 extends Twig_Template
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
        $__internal_9e01cc57d450b582bd61a1f5d3876cec2a3c7ba55297eca6c88759184647ebf9 = $this->env->getExtension("native_profiler");
        $__internal_9e01cc57d450b582bd61a1f5d3876cec2a3c7ba55297eca6c88759184647ebf9->enter($__internal_9e01cc57d450b582bd61a1f5d3876cec2a3c7ba55297eca6c88759184647ebf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9e01cc57d450b582bd61a1f5d3876cec2a3c7ba55297eca6c88759184647ebf9->leave($__internal_9e01cc57d450b582bd61a1f5d3876cec2a3c7ba55297eca6c88759184647ebf9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
