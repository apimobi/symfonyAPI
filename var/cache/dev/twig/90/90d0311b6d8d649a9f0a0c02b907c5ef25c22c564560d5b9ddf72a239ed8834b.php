<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_891dde50e82f523d864087cd5c663a8a9de7bf3d882244182f8f51dca0da1215 extends Twig_Template
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
        $__internal_f228ee305f5f9ec738b9f34a1562a2472e5f314d15700d80736e3e8d0a59c91b = $this->env->getExtension("native_profiler");
        $__internal_f228ee305f5f9ec738b9f34a1562a2472e5f314d15700d80736e3e8d0a59c91b->enter($__internal_f228ee305f5f9ec738b9f34a1562a2472e5f314d15700d80736e3e8d0a59c91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f228ee305f5f9ec738b9f34a1562a2472e5f314d15700d80736e3e8d0a59c91b->leave($__internal_f228ee305f5f9ec738b9f34a1562a2472e5f314d15700d80736e3e8d0a59c91b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
