<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cf9a45506fd56dae9b30ab5bb30dd603a0f54531f55b348c3c114d4607e4c9e2 extends Twig_Template
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
        $__internal_b150743538b4826d1022852a01e8c39b964cda034185c72df2252150808f92d6 = $this->env->getExtension("native_profiler");
        $__internal_b150743538b4826d1022852a01e8c39b964cda034185c72df2252150808f92d6->enter($__internal_b150743538b4826d1022852a01e8c39b964cda034185c72df2252150808f92d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b150743538b4826d1022852a01e8c39b964cda034185c72df2252150808f92d6->leave($__internal_b150743538b4826d1022852a01e8c39b964cda034185c72df2252150808f92d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
