<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_cb026ba2f8a47af3ea59a1880011130330454ec2453a1a7616123f2ca254aa35 extends Twig_Template
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
        $__internal_16cdcbbf83fb59b18fae17cb86cecb98697e51efc26c2ea26c196f8c54abec54 = $this->env->getExtension("native_profiler");
        $__internal_16cdcbbf83fb59b18fae17cb86cecb98697e51efc26c2ea26c196f8c54abec54->enter($__internal_16cdcbbf83fb59b18fae17cb86cecb98697e51efc26c2ea26c196f8c54abec54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_16cdcbbf83fb59b18fae17cb86cecb98697e51efc26c2ea26c196f8c54abec54->leave($__internal_16cdcbbf83fb59b18fae17cb86cecb98697e51efc26c2ea26c196f8c54abec54_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
