<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_bd234d7f77ae4c9f28e609a24b049f2010971a6254c38fe04bd4b34c91f9a193 extends Twig_Template
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
        $__internal_f815fd3d5421fc6a824daaaf42d1a58aa78bef0e7d60a2ad495aecff6622ee91 = $this->env->getExtension("native_profiler");
        $__internal_f815fd3d5421fc6a824daaaf42d1a58aa78bef0e7d60a2ad495aecff6622ee91->enter($__internal_f815fd3d5421fc6a824daaaf42d1a58aa78bef0e7d60a2ad495aecff6622ee91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f815fd3d5421fc6a824daaaf42d1a58aa78bef0e7d60a2ad495aecff6622ee91->leave($__internal_f815fd3d5421fc6a824daaaf42d1a58aa78bef0e7d60a2ad495aecff6622ee91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
