<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8883c60a63266bdddf655dc60d724f1ef59ba7ba209b427ea9eb8694df61a506 extends Twig_Template
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
        $__internal_d01b9de459ceadd6d8376853e11d0eb1d6552308ecb8635e77d23f66afd38697 = $this->env->getExtension("native_profiler");
        $__internal_d01b9de459ceadd6d8376853e11d0eb1d6552308ecb8635e77d23f66afd38697->enter($__internal_d01b9de459ceadd6d8376853e11d0eb1d6552308ecb8635e77d23f66afd38697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d01b9de459ceadd6d8376853e11d0eb1d6552308ecb8635e77d23f66afd38697->leave($__internal_d01b9de459ceadd6d8376853e11d0eb1d6552308ecb8635e77d23f66afd38697_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
