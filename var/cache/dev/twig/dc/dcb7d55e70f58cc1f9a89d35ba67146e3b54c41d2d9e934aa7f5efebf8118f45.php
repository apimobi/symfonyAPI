<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_71347ea78cc6986cf826458190f412ddebba7abbd3c35c6b691376eac26fb1a4 extends Twig_Template
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
        $__internal_51d0507dbfb6792a7c560c39ea31e84ed16d297caa7f9ac276a2468541ab87c2 = $this->env->getExtension("native_profiler");
        $__internal_51d0507dbfb6792a7c560c39ea31e84ed16d297caa7f9ac276a2468541ab87c2->enter($__internal_51d0507dbfb6792a7c560c39ea31e84ed16d297caa7f9ac276a2468541ab87c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_51d0507dbfb6792a7c560c39ea31e84ed16d297caa7f9ac276a2468541ab87c2->leave($__internal_51d0507dbfb6792a7c560c39ea31e84ed16d297caa7f9ac276a2468541ab87c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
