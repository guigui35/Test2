<?php

/* guigui35PlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_3781be47dc0476eecad40ae0b750570eb9bfcfdce42efce2e957453900959e15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("guigui35PlatformBundle::layout.html.twig", "guigui35PlatformBundle:Advert:delete.html.twig", 1);
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
        $__internal_43211775300437e821dfa02775782a6f47678d3244d2d5da8db22cf0fffbcd5c = $this->env->getExtension("native_profiler");
        $__internal_43211775300437e821dfa02775782a6f47678d3244d2d5da8db22cf0fffbcd5c->enter($__internal_43211775300437e821dfa02775782a6f47678d3244d2d5da8db22cf0fffbcd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43211775300437e821dfa02775782a6f47678d3244d2d5da8db22cf0fffbcd5c->leave($__internal_43211775300437e821dfa02775782a6f47678d3244d2d5da8db22cf0fffbcd5c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6735eeb3765e69db8196be4d9c4ea7fe00448e57fc1eb1145448e62fe80978da = $this->env->getExtension("native_profiler");
        $__internal_6735eeb3765e69db8196be4d9c4ea7fe00448e57fc1eb1145448e62fe80978da->enter($__internal_6735eeb3765e69db8196be4d9c4ea7fe00448e57fc1eb1145448e62fe80978da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6735eeb3765e69db8196be4d9c4ea7fe00448e57fc1eb1145448e62fe80978da->leave($__internal_6735eeb3765e69db8196be4d9c4ea7fe00448e57fc1eb1145448e62fe80978da_prof);

    }

    // line 7
    public function block_guigui35platform_body($context, array $blocks = array())
    {
        $__internal_7997748151110fd1ec57f4e92d59f2c2d06b6762d21d45f424ed928008715c8c = $this->env->getExtension("native_profiler");
        $__internal_7997748151110fd1ec57f4e92d59f2c2d06b6762d21d45f424ed928008715c8c->enter($__internal_7997748151110fd1ec57f4e92d59f2c2d06b6762d21d45f424ed928008715c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guigui35platform_body"));

        // line 8
        echo "
  <h2>Supprimer une annonce</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "guigui35PlatformBundle:Advert:form.html.twig");
        echo "

  <p>
      onglet ou on supprime une annonce
  </p>

  <p>
    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guigui35_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_7997748151110fd1ec57f4e92d59f2c2d06b6762d21d45f424ed928008715c8c->leave($__internal_7997748151110fd1ec57f4e92d59f2c2d06b6762d21d45f424ed928008715c8c_prof);

    }

    public function getTemplateName()
    {
        return "guigui35PlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "guigui35PlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Supprimer une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block guigui35platform_body %}*/
/* */
/*   <h2>Supprimer une annonce</h2>*/
/* */
/*   {{ include("guigui35PlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*       onglet ou on supprime une annonce*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('guigui35_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
