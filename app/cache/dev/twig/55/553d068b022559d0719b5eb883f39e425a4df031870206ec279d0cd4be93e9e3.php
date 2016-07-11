<?php

/* guigui35PlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_268702d490b79c72cc347afd7ef16cf45ed7587d2299c5f794f92539d3e45912 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("guigui35PlatformBundle::layout.html.twig", "guigui35PlatformBundle:Advert:edit.html.twig", 1);
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
        $__internal_a66b73122ef61fb2cbccbe862e15700abe9f6eb6fa806ebf011f00161b4d143e = $this->env->getExtension("native_profiler");
        $__internal_a66b73122ef61fb2cbccbe862e15700abe9f6eb6fa806ebf011f00161b4d143e->enter($__internal_a66b73122ef61fb2cbccbe862e15700abe9f6eb6fa806ebf011f00161b4d143e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a66b73122ef61fb2cbccbe862e15700abe9f6eb6fa806ebf011f00161b4d143e->leave($__internal_a66b73122ef61fb2cbccbe862e15700abe9f6eb6fa806ebf011f00161b4d143e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8fc1885906ac3c5bc115049520c4fff54d82f550e560181fece364aebb78c2f3 = $this->env->getExtension("native_profiler");
        $__internal_8fc1885906ac3c5bc115049520c4fff54d82f550e560181fece364aebb78c2f3->enter($__internal_8fc1885906ac3c5bc115049520c4fff54d82f550e560181fece364aebb78c2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_8fc1885906ac3c5bc115049520c4fff54d82f550e560181fece364aebb78c2f3->leave($__internal_8fc1885906ac3c5bc115049520c4fff54d82f550e560181fece364aebb78c2f3_prof);

    }

    // line 7
    public function block_guigui35platform_body($context, array $blocks = array())
    {
        $__internal_20bdd4c5f89b845e008d7afd45d19c7a85e19a85b59da2c424d468448ae07229 = $this->env->getExtension("native_profiler");
        $__internal_20bdd4c5f89b845e008d7afd45d19c7a85e19a85b59da2c424d468448ae07229->enter($__internal_20bdd4c5f89b845e008d7afd45d19c7a85e19a85b59da2c424d468448ae07229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guigui35platform_body"));

        // line 8
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 11
        echo twig_include($this->env, $context, "guigui35PlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guigui35_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_20bdd4c5f89b845e008d7afd45d19c7a85e19a85b59da2c424d468448ae07229->leave($__internal_20bdd4c5f89b845e008d7afd45d19c7a85e19a85b59da2c424d468448ae07229_prof);

    }

    public function getTemplateName()
    {
        return "guigui35PlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "guigui35PlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block guigui35platform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("guigui35PlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
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
