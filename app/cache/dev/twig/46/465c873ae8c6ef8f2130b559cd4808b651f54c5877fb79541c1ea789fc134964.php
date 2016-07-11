<?php

/* guigui35PlatformBundle:Advert:add.html.twig */
class __TwigTemplate_ec6cc62c931a1319c79f65315791a1a7d61ca135bc1b691607267b2ce0a901f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("guigui35PlatformBundle::layout.html.twig", "guigui35PlatformBundle:Advert:add.html.twig", 1);
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
        $__internal_e77f47b22f7d202638925695b8eaf0244507a1a0baff721acb89fe960438c81d = $this->env->getExtension("native_profiler");
        $__internal_e77f47b22f7d202638925695b8eaf0244507a1a0baff721acb89fe960438c81d->enter($__internal_e77f47b22f7d202638925695b8eaf0244507a1a0baff721acb89fe960438c81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e77f47b22f7d202638925695b8eaf0244507a1a0baff721acb89fe960438c81d->leave($__internal_e77f47b22f7d202638925695b8eaf0244507a1a0baff721acb89fe960438c81d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_418f3f0bb961f6225c8983dfa10e42eb71f03749372ef3758dad3499aa1bf65b = $this->env->getExtension("native_profiler");
        $__internal_418f3f0bb961f6225c8983dfa10e42eb71f03749372ef3758dad3499aa1bf65b->enter($__internal_418f3f0bb961f6225c8983dfa10e42eb71f03749372ef3758dad3499aa1bf65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Ajouter une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_418f3f0bb961f6225c8983dfa10e42eb71f03749372ef3758dad3499aa1bf65b->leave($__internal_418f3f0bb961f6225c8983dfa10e42eb71f03749372ef3758dad3499aa1bf65b_prof);

    }

    // line 7
    public function block_guigui35platform_body($context, array $blocks = array())
    {
        $__internal_e9a4fcba38fef544e28ea20844f0ba6c0db4c8e6b0109b28bfce46ce46c6cd3f = $this->env->getExtension("native_profiler");
        $__internal_e9a4fcba38fef544e28ea20844f0ba6c0db4c8e6b0109b28bfce46ce46c6cd3f->enter($__internal_e9a4fcba38fef544e28ea20844f0ba6c0db4c8e6b0109b28bfce46ce46c6cd3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guigui35platform_body"));

        // line 8
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "guigui35PlatformBundle:Advert:form.html.twig");
        echo "

  <p>
      Ajouter une annonce
  </p>

";
        // line 23
        echo "
";
        
        $__internal_e9a4fcba38fef544e28ea20844f0ba6c0db4c8e6b0109b28bfce46ce46c6cd3f->leave($__internal_e9a4fcba38fef544e28ea20844f0ba6c0db4c8e6b0109b28bfce46ce46c6cd3f_prof);

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
        return array (  71 => 23,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "guigui35PlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Ajouter une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block guigui35platform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("guigui35PlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*       Ajouter une annonce*/
/*   </p>*/
/* */
/* {#  <p>*/
/*     <a href="{{ path('guigui35_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>#}*/
/* */
/* {% endblock %}*/
