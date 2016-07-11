<?php

/* guigui35PlatformBundle::layout.html.twig */
class __TwigTemplate_56d074130ef67b3d1438eb45717af97ce2c2496552772399c1426edfc1a1302d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "guigui35PlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'guigui35platform_body' => array($this, 'block_guigui35platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8a7412f33396643a417a22019c9b9881ab4f9848de61bba120c75fe6fd307b1 = $this->env->getExtension("native_profiler");
        $__internal_e8a7412f33396643a417a22019c9b9881ab4f9848de61bba120c75fe6fd307b1->enter($__internal_e8a7412f33396643a417a22019c9b9881ab4f9848de61bba120c75fe6fd307b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8a7412f33396643a417a22019c9b9881ab4f9848de61bba120c75fe6fd307b1->leave($__internal_e8a7412f33396643a417a22019c9b9881ab4f9848de61bba120c75fe6fd307b1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_10a479ac7c0364deccd1bee17e975f765904519e648c329508373314af4558bf = $this->env->getExtension("native_profiler");
        $__internal_10a479ac7c0364deccd1bee17e975f765904519e648c329508373314af4558bf->enter($__internal_10a479ac7c0364deccd1bee17e975f765904519e648c329508373314af4558bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_10a479ac7c0364deccd1bee17e975f765904519e648c329508373314af4558bf->leave($__internal_10a479ac7c0364deccd1bee17e975f765904519e648c329508373314af4558bf_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa8dafe6665f5daa5c944207e95edd09ad5c13d83bc02a59c3838bceb94663f5 = $this->env->getExtension("native_profiler");
        $__internal_fa8dafe6665f5daa5c944207e95edd09ad5c13d83bc02a59c3838bceb94663f5->enter($__internal_fa8dafe6665f5daa5c944207e95edd09ad5c13d83bc02a59c3838bceb94663f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('guigui35platform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_fa8dafe6665f5daa5c944207e95edd09ad5c13d83bc02a59c3838bceb94663f5->leave($__internal_fa8dafe6665f5daa5c944207e95edd09ad5c13d83bc02a59c3838bceb94663f5_prof);

    }

    // line 17
    public function block_guigui35platform_body($context, array $blocks = array())
    {
        $__internal_31cbcd1f3e44404e57f14ab316752ed5dc270d3090f171f8f79daea596189799 = $this->env->getExtension("native_profiler");
        $__internal_31cbcd1f3e44404e57f14ab316752ed5dc270d3090f171f8f79daea596189799->enter($__internal_31cbcd1f3e44404e57f14ab316752ed5dc270d3090f171f8f79daea596189799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guigui35platform_body"));

        // line 18
        echo "  ";
        
        $__internal_31cbcd1f3e44404e57f14ab316752ed5dc270d3090f171f8f79daea596189799->leave($__internal_31cbcd1f3e44404e57f14ab316752ed5dc270d3090f171f8f79daea596189799_prof);

    }

    public function getTemplateName()
    {
        return "guigui35PlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block guigui35platform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
