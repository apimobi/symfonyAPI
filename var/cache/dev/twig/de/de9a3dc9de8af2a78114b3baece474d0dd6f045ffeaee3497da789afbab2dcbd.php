<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e4af791beff03e7b4744702200c153ec33fe4b290dde6e1c0a8cfb2b44d9b4e3 extends Twig_Template
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
        $__internal_2fcd715436cc2bc6d746c051c5fd4652913805be14bd25d14506c63dbe54d476 = $this->env->getExtension("native_profiler");
        $__internal_2fcd715436cc2bc6d746c051c5fd4652913805be14bd25d14506c63dbe54d476->enter($__internal_2fcd715436cc2bc6d746c051c5fd4652913805be14bd25d14506c63dbe54d476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_2fcd715436cc2bc6d746c051c5fd4652913805be14bd25d14506c63dbe54d476->leave($__internal_2fcd715436cc2bc6d746c051c5fd4652913805be14bd25d14506c63dbe54d476_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
