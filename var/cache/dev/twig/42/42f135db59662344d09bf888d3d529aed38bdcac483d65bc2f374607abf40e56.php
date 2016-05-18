<?php

/* base.html.twig */
class __TwigTemplate_42e0dcd3d2db6f708223d971ace3db097c0ceff7a0531ed73645e27bba1a5d24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2216341f7efa97356d0acb869ea88bf5bbd3e1f0bc95abf5233f337a3fd3872b = $this->env->getExtension("native_profiler");
        $__internal_2216341f7efa97356d0acb869ea88bf5bbd3e1f0bc95abf5233f337a3fd3872b->enter($__internal_2216341f7efa97356d0acb869ea88bf5bbd3e1f0bc95abf5233f337a3fd3872b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo " -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <!--Import Google Icon Font-->
        <link href=\"http://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">

        ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "859e361_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_859e361_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_materialize_1.css");
            // line 17
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen,projection\" />
        ";
            // asset "859e361_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_859e361_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app_main_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen,projection\" />
        ";
        } else {
            // asset "859e361"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_859e361") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/app.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" media=\"screen,projection\" />
        ";
        }
        unset($context["asset_url"]);
        // line 19
        echo "
        <!-- <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app_main_2.css"), "html", null, true);
        echo "\"/> -->

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    </head>
    ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "


    <footer class=\"page-footer orange\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col l6 s12\">
          <h5 class=\"white-text\">API</h5>
          <p class=\"grey-text text-lighten-4\">We are a team appreciated.</p>


        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Settings</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
        <div class=\"col l3 s12\">
          <h5 class=\"white-text\">Connect</h5>
          <ul>
            <li><a class=\"white-text\" href=\"#!\">Link 1</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 2</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 3</a></li>
            <li><a class=\"white-text\" href=\"#!\">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class=\"footer-copyright\">
      <div class=\"container\">
      Made by <a class=\"orange-text text-lighten-3\" href=\"#\">Materialize</a>
      </div>
    </div>
  </footer>
</html>
";
        
        $__internal_2216341f7efa97356d0acb869ea88bf5bbd3e1f0bc95abf5233f337a3fd3872b->leave($__internal_2216341f7efa97356d0acb869ea88bf5bbd3e1f0bc95abf5233f337a3fd3872b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7cbe39b39ced70a8105b8561a2d5dddd037b81e9a975ad3dce84f1787f1c1487 = $this->env->getExtension("native_profiler");
        $__internal_7cbe39b39ced70a8105b8561a2d5dddd037b81e9a975ad3dce84f1787f1c1487->enter($__internal_7cbe39b39ced70a8105b8561a2d5dddd037b81e9a975ad3dce84f1787f1c1487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7cbe39b39ced70a8105b8561a2d5dddd037b81e9a975ad3dce84f1787f1c1487->leave($__internal_7cbe39b39ced70a8105b8561a2d5dddd037b81e9a975ad3dce84f1787f1c1487_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b86a092012311bb26d43419c247a761304f3f5b96caed426bdef111683295cca = $this->env->getExtension("native_profiler");
        $__internal_b86a092012311bb26d43419c247a761304f3f5b96caed426bdef111683295cca->enter($__internal_b86a092012311bb26d43419c247a761304f3f5b96caed426bdef111683295cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_b86a092012311bb26d43419c247a761304f3f5b96caed426bdef111683295cca->leave($__internal_b86a092012311bb26d43419c247a761304f3f5b96caed426bdef111683295cca_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6f454a0dbd5b34aad00548a34b5ccffd5c1bb77d154b29ef9a3750f9d253ae7 = $this->env->getExtension("native_profiler");
        $__internal_e6f454a0dbd5b34aad00548a34b5ccffd5c1bb77d154b29ef9a3750f9d253ae7->enter($__internal_e6f454a0dbd5b34aad00548a34b5ccffd5c1bb77d154b29ef9a3750f9d253ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "        <nav>
           <div class=\"nav-wrapper\">
             <a href=\"#!\" class=\"brand-logo\">Logo</a>
             <a href=\"#\" data-activates=\"mobile-demo\" class=\"button-collapse\"><i class=\"material-icons\">menu</i></a>
             <ul class=\"right hide-on-med-and-down\">
               <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("app_front_user_post");
        echo "\">User</a></li>
               <li><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("app_front_product_post");
        echo "\">Product</a></li>
             </ul>
             <ul class=\"side-nav\" id=\"mobile-demo\">
               <li><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("app_front_user_post");
        echo "\">User</a></li>
               <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("app_front_product_post");
        echo "\">Product</a></li>
             </ul>
           </div>
       </nav>


      <div class=\"container\" >
            ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "      </div>

      

      ";
        // line 47
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "2bafce5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bafce5_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_jquery.min_1.js");
            // line 52
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "2bafce5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bafce5_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_materialize.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "2bafce5_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bafce5_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app_main_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "2bafce5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_2bafce5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/app.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 54
        echo "
    ";
        
        $__internal_e6f454a0dbd5b34aad00548a34b5ccffd5c1bb77d154b29ef9a3750f9d253ae7->leave($__internal_e6f454a0dbd5b34aad00548a34b5ccffd5c1bb77d154b29ef9a3750f9d253ae7_prof);

    }

    // line 42
    public function block_content($context, array $blocks = array())
    {
        $__internal_3034c430da4a361ba4d4f416fbaa26de941e3a173fcdc43150952f02c65b56c9 = $this->env->getExtension("native_profiler");
        $__internal_3034c430da4a361ba4d4f416fbaa26de941e3a173fcdc43150952f02c65b56c9->enter($__internal_3034c430da4a361ba4d4f416fbaa26de941e3a173fcdc43150952f02c65b56c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_3034c430da4a361ba4d4f416fbaa26de941e3a173fcdc43150952f02c65b56c9->leave($__internal_3034c430da4a361ba4d4f416fbaa26de941e3a173fcdc43150952f02c65b56c9_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 42,  233 => 54,  207 => 52,  203 => 47,  197 => 43,  195 => 42,  185 => 35,  181 => 34,  175 => 31,  171 => 30,  164 => 25,  158 => 24,  148 => 7,  142 => 6,  130 => 5,  84 => 56,  82 => 24,  75 => 20,  72 => 19,  52 => 17,  48 => 13,  41 => 9,  38 => 8,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <!-- {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}"/>*/
/*         {% endblock %} -->*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <!--Import Google Icon Font-->*/
/*         <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/* */
/*         {% stylesheets filter="scssphp" output="css/app.css"*/
/*               "assets/vendor/materialize-src/sass/materialize.scss"*/
/*               "assets/css/main.css"*/
/*         %}*/
/*             <link rel="stylesheet" href="{{ asset_url }}" media="screen,projection" />*/
/*         {% endstylesheets %}*/
/* */
/*         <!-- <link rel="stylesheet" href="{{ asset('css/app_main_2.css') }}"/> -->*/
/* */
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     </head>*/
/*     {% block body %}*/
/*         <nav>*/
/*            <div class="nav-wrapper">*/
/*              <a href="#!" class="brand-logo">Logo</a>*/
/*              <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>*/
/*              <ul class="right hide-on-med-and-down">*/
/*                <li><a href="{{ path('app_front_user_post') }}">User</a></li>*/
/*                <li><a href="{{ path('app_front_product_post') }}">Product</a></li>*/
/*              </ul>*/
/*              <ul class="side-nav" id="mobile-demo">*/
/*                <li><a href="{{ path('app_front_user_post') }}">User</a></li>*/
/*                <li><a href="{{ path('app_front_product_post') }}">Product</a></li>*/
/*              </ul>*/
/*            </div>*/
/*        </nav>*/
/* */
/* */
/*       <div class="container" >*/
/*             {% block content %}{% endblock %}*/
/*       </div>*/
/* */
/*       */
/* */
/*       {% javascripts filter="?jsqueeze" output="js/app.js"*/
/*         "assets/vendor/jquery/dist/jquery.min.js"*/
/*         "assets/vendor/materialize-src/js/bin/materialize.min.js"*/
/*         "assets/js/main.js"*/
/*         %}*/
/*             <script src="{{ asset_url }}"></script>*/
/*       {% endjavascripts %}*/
/* */
/*     {% endblock %}*/
/* */
/* */
/* */
/*     <footer class="page-footer orange">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="col l6 s12">*/
/*           <h5 class="white-text">API</h5>*/
/*           <p class="grey-text text-lighten-4">We are a team appreciated.</p>*/
/* */
/* */
/*         </div>*/
/*         <div class="col l3 s12">*/
/*           <h5 class="white-text">Settings</h5>*/
/*           <ul>*/
/*             <li><a class="white-text" href="#!">Link 1</a></li>*/
/*             <li><a class="white-text" href="#!">Link 2</a></li>*/
/*             <li><a class="white-text" href="#!">Link 3</a></li>*/
/*             <li><a class="white-text" href="#!">Link 4</a></li>*/
/*           </ul>*/
/*         </div>*/
/*         <div class="col l3 s12">*/
/*           <h5 class="white-text">Connect</h5>*/
/*           <ul>*/
/*             <li><a class="white-text" href="#!">Link 1</a></li>*/
/*             <li><a class="white-text" href="#!">Link 2</a></li>*/
/*             <li><a class="white-text" href="#!">Link 3</a></li>*/
/*             <li><a class="white-text" href="#!">Link 4</a></li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="footer-copyright">*/
/*       <div class="container">*/
/*       Made by <a class="orange-text text-lighten-3" href="#">Materialize</a>*/
/*       </div>*/
/*     </div>*/
/*   </footer>*/
/* </html>*/
/* */
