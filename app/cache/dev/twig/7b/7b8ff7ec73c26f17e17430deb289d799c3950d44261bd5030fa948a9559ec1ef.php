<?php

/* guigui35PlatformBundle:Advert:view.html.twig */
class __TwigTemplate_1d66a3cb64a7b49788d8ca4c5e9099a215824ad8a51e2b52901bf34d36258e5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("guigui35PlatformBundle::layout.html.twig", "guigui35PlatformBundle:Advert:view.html.twig", 1);
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
        $__internal_11e2c8df628b2630fa04cd447fa621177bd468aba719922e80156a486ff8f329 = $this->env->getExtension("native_profiler");
        $__internal_11e2c8df628b2630fa04cd447fa621177bd468aba719922e80156a486ff8f329->enter($__internal_11e2c8df628b2630fa04cd447fa621177bd468aba719922e80156a486ff8f329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11e2c8df628b2630fa04cd447fa621177bd468aba719922e80156a486ff8f329->leave($__internal_11e2c8df628b2630fa04cd447fa621177bd468aba719922e80156a486ff8f329_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_bfad816759ebbe3c2ed4f7fa7547d8149399dee67313111c2b06c60291958a56 = $this->env->getExtension("native_profiler");
        $__internal_bfad816759ebbe3c2ed4f7fa7547d8149399dee67313111c2b06c60291958a56->enter($__internal_bfad816759ebbe3c2ed4f7fa7547d8149399dee67313111c2b06c60291958a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bfad816759ebbe3c2ed4f7fa7547d8149399dee67313111c2b06c60291958a56->leave($__internal_bfad816759ebbe3c2ed4f7fa7547d8149399dee67313111c2b06c60291958a56_prof);

    }

    // line 7
    public function block_guigui35platform_body($context, array $blocks = array())
    {
        $__internal_2303eb433d7bb842e10bf46d52613b290ab4aa01f819add9bad3a3178032bbea = $this->env->getExtension("native_profiler");
        $__internal_2303eb433d7bb842e10bf46d52613b290ab4aa01f819add9bad3a3178032bbea->enter($__internal_2303eb433d7bb842e10bf46d52613b290ab4aa01f819add9bad3a3178032bbea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guigui35platform_body"));

        // line 8
        echo "
  <h2>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("guigui35_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guigui35_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guigui35_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_2303eb433d7bb842e10bf46d52613b290ab4aa01f819add9bad3a3178032bbea->leave($__internal_2303eb433d7bb842e10bf46d52613b290ab4aa01f819add9bad3a3178032bbea_prof);

    }

    public function getTemplateName()
    {
        return "guigui35PlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 25,  86 => 21,  79 => 17,  72 => 13,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "guigui35PlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block guigui35platform_body %}*/
/* */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ advert.content }}*/
/*   </div>*/
/* */
/*   <p>*/
/*     <a href="{{ path('guigui35_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('guigui35_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'annonce*/
/*     </a>*/
/*     <a href="{{ path('guigui35_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
