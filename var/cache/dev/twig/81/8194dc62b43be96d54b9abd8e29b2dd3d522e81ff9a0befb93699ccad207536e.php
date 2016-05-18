<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_123a78bc5407391fa98856842f4467bb5d8bc06de2e984521792c1bcde2c500e extends Twig_Template
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
        $__internal_0feee9f3a8ac56cb553ff09c648f854975c6d769e1fcc683fe333dfb71a979bc = $this->env->getExtension("native_profiler");
        $__internal_0feee9f3a8ac56cb553ff09c648f854975c6d769e1fcc683fe333dfb71a979bc->enter($__internal_0feee9f3a8ac56cb553ff09c648f854975c6d769e1fcc683fe333dfb71a979bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0feee9f3a8ac56cb553ff09c648f854975c6d769e1fcc683fe333dfb71a979bc->leave($__internal_0feee9f3a8ac56cb553ff09c648f854975c6d769e1fcc683fe333dfb71a979bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
