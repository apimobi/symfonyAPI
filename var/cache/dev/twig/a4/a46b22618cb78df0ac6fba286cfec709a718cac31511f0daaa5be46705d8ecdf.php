<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_94ffbd0e9ab8bee294418d23cc8ec78c4affb5f208ab402e710b3d214d1c0d03 extends Twig_Template
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
        $__internal_4fa97995867fb57c52d133056c4cd167ab592dc210d05029265a3e13bd9211e3 = $this->env->getExtension("native_profiler");
        $__internal_4fa97995867fb57c52d133056c4cd167ab592dc210d05029265a3e13bd9211e3->enter($__internal_4fa97995867fb57c52d133056c4cd167ab592dc210d05029265a3e13bd9211e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4fa97995867fb57c52d133056c4cd167ab592dc210d05029265a3e13bd9211e3->leave($__internal_4fa97995867fb57c52d133056c4cd167ab592dc210d05029265a3e13bd9211e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
