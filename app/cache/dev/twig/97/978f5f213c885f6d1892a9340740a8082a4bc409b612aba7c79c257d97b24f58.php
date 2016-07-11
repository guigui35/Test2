<?php

/* guigui35PlatformBundle:Advert:form.html.twig */
class __TwigTemplate_03fd1c0733cb742417d405481a34255d08a554a913501db61077def6ae88db0b extends Twig_Template
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
        $__internal_91ba3405e10bbdce016f6fb5c38e539c190e539904564c38b37634eb6ff872cf = $this->env->getExtension("native_profiler");
        $__internal_91ba3405e10bbdce016f6fb5c38e539c190e539904564c38b37634eb6ff872cf->enter($__internal_91ba3405e10bbdce016f6fb5c38e539c190e539904564c38b37634eb6ff872cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
";
        // line 6
        echo "
<h3>Formulaire d'annonce</h3>

";
        // line 11
        echo "<div class=\"well\">
  ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
</div>";
        
        $__internal_91ba3405e10bbdce016f6fb5c38e539c190e539904564c38b37634eb6ff872cf->leave($__internal_91ba3405e10bbdce016f6fb5c38e539c190e539904564c38b37634eb6ff872cf_prof);

    }

    public function getTemplateName()
    {
        return "guigui35PlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  30 => 11,  25 => 6,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}*/
/* */
/* {# Cette vue n'hérite de personne, elle sera incluse par d'autres vues qui,*/
/*    elles, hériteront probablement du layout. Je dis « probablement » car,*/
/*    ici pour cette vue, on n'en sait rien et c'est une info qui ne nous concerne pas. #}*/
/* */
/* <h3>Formulaire d'annonce</h3>*/
/* */
/* {# On laisse vide la vue pour l'instant, on la comblera plus tard*/
/*    lorsqu'on saura afficher un formulaire. #}*/
/* <div class="well">*/
/*   {{ form(form) }}*/
/* </div>*/
