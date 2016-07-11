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
        $__internal_ad77e33bf90dc6a0c41239749f07ca96a84105caeaa840594256a240550ccad8 = $this->env->getExtension("native_profiler");
        $__internal_ad77e33bf90dc6a0c41239749f07ca96a84105caeaa840594256a240550ccad8->enter($__internal_ad77e33bf90dc6a0c41239749f07ca96a84105caeaa840594256a240550ccad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad77e33bf90dc6a0c41239749f07ca96a84105caeaa840594256a240550ccad8->leave($__internal_ad77e33bf90dc6a0c41239749f07ca96a84105caeaa840594256a240550ccad8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_57c53bcae6bbca647980e6ac0e9206a0f811a3db2ae6ba3e432b0d4bc8913687 = $this->env->getExtension("native_profiler");
        $__internal_57c53bcae6bbca647980e6ac0e9206a0f811a3db2ae6ba3e432b0d4bc8913687->enter($__internal_57c53bcae6bbca647980e6ac0e9206a0f811a3db2ae6ba3e432b0d4bc8913687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_57c53bcae6bbca647980e6ac0e9206a0f811a3db2ae6ba3e432b0d4bc8913687->leave($__internal_57c53bcae6bbca647980e6ac0e9206a0f811a3db2ae6ba3e432b0d4bc8913687_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d54d31f6c299f195f6b799a2807aa02966cdf8a7db49ccde48f7bd15e408d69d = $this->env->getExtension("native_profiler");
        $__internal_d54d31f6c299f195f6b799a2807aa02966cdf8a7db49ccde48f7bd15e408d69d->enter($__internal_d54d31f6c299f195f6b799a2807aa02966cdf8a7db49ccde48f7bd15e408d69d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d54d31f6c299f195f6b799a2807aa02966cdf8a7db49ccde48f7bd15e408d69d->leave($__internal_d54d31f6c299f195f6b799a2807aa02966cdf8a7db49ccde48f7bd15e408d69d_prof);

    }

    // line 17
    public function block_guigui35platform_body($context, array $blocks = array())
    {
        $__internal_2477ff6ab4d9f2736b05cadfc7573c5ebd81ead264dfa24c08d120f425fef103 = $this->env->getExtension("native_profiler");
        $__internal_2477ff6ab4d9f2736b05cadfc7573c5ebd81ead264dfa24c08d120f425fef103->enter($__internal_2477ff6ab4d9f2736b05cadfc7573c5ebd81ead264dfa24c08d120f425fef103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guigui35platform_body"));

        // line 18
        echo "  ";
        
        $__internal_2477ff6ab4d9f2736b05cadfc7573c5ebd81ead264dfa24c08d120f425fef103->leave($__internal_2477ff6ab4d9f2736b05cadfc7573c5ebd81ead264dfa24c08d120f425fef103_prof);

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
