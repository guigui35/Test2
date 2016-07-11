<?php

/* guigui35PlatformBundle:Advert:view.html.twig */
class __TwigTemplate_1d66a3cb64a7b49788d8ca4c5e9099a215824ad8a51e2b52901bf34d36258e5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("guigui35PlatformBundle::layout.html.twig", "guigui35PlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_a4c066b49e83376736879dd6f43a323a30c95efea1202ab882ccaa5f048cdc56 = $this->env->getExtension("native_profiler");
        $__internal_a4c066b49e83376736879dd6f43a323a30c95efea1202ab882ccaa5f048cdc56->enter($__internal_a4c066b49e83376736879dd6f43a323a30c95efea1202ab882ccaa5f048cdc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4c066b49e83376736879dd6f43a323a30c95efea1202ab882ccaa5f048cdc56->leave($__internal_a4c066b49e83376736879dd6f43a323a30c95efea1202ab882ccaa5f048cdc56_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_39824aa606f150d278d670a243d07a77c567f84452ba84f27b8c0de110fccdeb = $this->env->getExtension("native_profiler");
        $__internal_39824aa606f150d278d670a243d07a77c567f84452ba84f27b8c0de110fccdeb->enter($__internal_39824aa606f150d278d670a243d07a77c567f84452ba84f27b8c0de110fccdeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_39824aa606f150d278d670a243d07a77c567f84452ba84f27b8c0de110fccdeb->leave($__internal_39824aa606f150d278d670a243d07a77c567f84452ba84f27b8c0de110fccdeb_prof);

    }

    // line 9
    public function block_guigui35platform_body($context, array $blocks = array())
    {
        $__internal_a8b6c375bc300c4b3a8e06599dad28c078622f8e780e7be3e762f701b6f029ed = $this->env->getExtension("native_profiler");
        $__internal_a8b6c375bc300c4b3a8e06599dad28c078622f8e780e7be3e762f701b6f029ed->enter($__internal_a8b6c375bc300c4b3a8e06599dad28c078622f8e780e7be3e762f701b6f029ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guigui35platform_body"));

        // line 10
        echo "
    ";
        // line 12
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 13
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\">
    ";
        }
        // line 14
        echo "  
  <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  <p>
    <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("guigui35_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guigui35_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guigui35_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_a8b6c375bc300c4b3a8e06599dad28c078622f8e780e7be3e762f701b6f029ed->leave($__internal_a8b6c375bc300c4b3a8e06599dad28c078622f8e780e7be3e762f701b6f029ed_prof);

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
        return array (  107 => 31,  100 => 27,  93 => 23,  86 => 19,  78 => 16,  74 => 15,  71 => 14,  63 => 13,  60 => 12,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "guigui35PlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block guigui35platform_body %}*/
/* */
/*     {# On vérifie qu'une image soit bien associée à l'annonce #}*/
/*     {% if advert.image is not null %}*/
/*         <img src="{{ advert.image.url }}" alt="{{ advert.image.alt }}">*/
/*     {% endif %}  */
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
