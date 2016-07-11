<?php

/* guigui35PlatformBundle:Advert:add.html.twig */
class __TwigTemplate_ec6cc62c931a1319c79f65315791a1a7d61ca135bc1b691607267b2ce0a901f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 30
        $this->parent = $this->loadTemplate("guigui35PlatformBundle::layout.html.twig", "guigui35PlatformBundle:Advert:add.html.twig", 30);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'guigui35platform_body' => array($this, 'block_guigui35platform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "guigui35PlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94dbc1de751e7f9059dc57853b8a8a28093a2cc501c267c08901224a2423feb5 = $this->env->getExtension("native_profiler");
        $__internal_94dbc1de751e7f9059dc57853b8a8a28093a2cc501c267c08901224a2423feb5->enter($__internal_94dbc1de751e7f9059dc57853b8a8a28093a2cc501c267c08901224a2423feb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94dbc1de751e7f9059dc57853b8a8a28093a2cc501c267c08901224a2423feb5->leave($__internal_94dbc1de751e7f9059dc57853b8a8a28093a2cc501c267c08901224a2423feb5_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf61f76792b20cdb6e95020fb692cea639d91ad33035290050fc8584d491369a = $this->env->getExtension("native_profiler");
        $__internal_bf61f76792b20cdb6e95020fb692cea639d91ad33035290050fc8584d491369a->enter($__internal_bf61f76792b20cdb6e95020fb692cea639d91ad33035290050fc8584d491369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 33
        echo "  Ajouter un article - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bf61f76792b20cdb6e95020fb692cea639d91ad33035290050fc8584d491369a->leave($__internal_bf61f76792b20cdb6e95020fb692cea639d91ad33035290050fc8584d491369a_prof);

    }

    // line 36
    public function block_guigui35platform_body($context, array $blocks = array())
    {
        $__internal_baab61166a11c27bc3d3982c02c32bfbe365285ca580d4d6021b0ab00be8157b = $this->env->getExtension("native_profiler");
        $__internal_baab61166a11c27bc3d3982c02c32bfbe365285ca580d4d6021b0ab00be8157b->enter($__internal_baab61166a11c27bc3d3982c02c32bfbe365285ca580d4d6021b0ab00be8157b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guigui35platform_body"));

        // line 37
        echo "
  <h2>Ajouter un article</h2>

  ";
        // line 40
        echo twig_include($this->env, $context, "guigui35PlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous ajoutez un nouvel article.
  </p>

";
        
        $__internal_baab61166a11c27bc3d3982c02c32bfbe365285ca580d4d6021b0ab00be8157b->leave($__internal_baab61166a11c27bc3d3982c02c32bfbe365285ca580d4d6021b0ab00be8157b_prof);

    }

    public function getTemplateName()
    {
        return "guigui35PlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 40,  57 => 37,  51 => 36,  41 => 33,  35 => 32,  11 => 30,);
    }
}
/* {#{% extends "guigui35PlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*     Ajouter une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block guigui35platform_body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("guigui35PlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*       Vous ajouter une annonce*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('guigui35_platform_add', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
/* #}*/
/* */
/* {# src/Sdz/BlogBundle/Resources/views/Blog/modifier.html.twig #}*/
/* */
/* {% extends "guigui35PlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter un article - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block guigui35platform_body %}*/
/* */
/*   <h2>Ajouter un article</h2>*/
/* */
/*   {{ include("guigui35PlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous ajoutez un nouvel article.*/
/*   </p>*/
/* */
/* {% endblock %}*/
