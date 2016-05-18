<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_d282e1d4d809ccff1b289e330346e37db60fe539b1e35ec30bc9fb1f35dd960c extends Twig_Template
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
        $__internal_543df5760b37cccccea97749ec1b9fda111553f593c7d71f5582b446496b56a2 = $this->env->getExtension("native_profiler");
        $__internal_543df5760b37cccccea97749ec1b9fda111553f593c7d71f5582b446496b56a2->enter($__internal_543df5760b37cccccea97749ec1b9fda111553f593c7d71f5582b446496b56a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_543df5760b37cccccea97749ec1b9fda111553f593c7d71f5582b446496b56a2->leave($__internal_543df5760b37cccccea97749ec1b9fda111553f593c7d71f5582b446496b56a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
