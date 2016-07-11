<?php

/* guigui35PlatformBundle:Advert:index.html.twig */
class __TwigTemplate_f0255f82d907f34761f2649172c4cddbdf30560e0ff1581e638cf88b295e4048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("guigui35PlatformBundle::layout.html.twig", "guigui35PlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_465b70f644037c1f035c1967ed30d62ce42ef07a53170256b1fdf41b6c35715e = $this->env->getExtension("native_profiler");
        $__internal_465b70f644037c1f035c1967ed30d62ce42ef07a53170256b1fdf41b6c35715e->enter($__internal_465b70f644037c1f035c1967ed30d62ce42ef07a53170256b1fdf41b6c35715e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "guigui35PlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_465b70f644037c1f035c1967ed30d62ce42ef07a53170256b1fdf41b6c35715e->leave($__internal_465b70f644037c1f035c1967ed30d62ce42ef07a53170256b1fdf41b6c35715e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64d91a8afe54da20b430dfa31e9565583fba6fbe8154337efa190352d1bc5959 = $this->env->getExtension("native_profiler");
        $__internal_64d91a8afe54da20b430dfa31e9565583fba6fbe8154337efa190352d1bc5959->enter($__internal_64d91a8afe54da20b430dfa31e9565583fba6fbe8154337efa190352d1bc5959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_64d91a8afe54da20b430dfa31e9565583fba6fbe8154337efa190352d1bc5959->leave($__internal_64d91a8afe54da20b430dfa31e9565583fba6fbe8154337efa190352d1bc5959_prof);

    }

    // line 9
    public function block_guigui35platform_body($context, array $blocks = array())
    {
        $__internal_e5887f5c04b06c30ac091da5d23c2fd36d781c6d46902b503175ddfaba3e5a7f = $this->env->getExtension("native_profiler");
        $__internal_e5887f5c04b06c30ac091da5d23c2fd36d781c6d46902b503175ddfaba3e5a7f->enter($__internal_e5887f5c04b06c30ac091da5d23c2fd36d781c6d46902b503175ddfaba3e5a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "guigui35platform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("guigui35_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_e5887f5c04b06c30ac091da5d23c2fd36d781c6d46902b503175ddfaba3e5a7f->leave($__internal_e5887f5c04b06c30ac091da5d23c2fd36d781c6d46902b503175ddfaba3e5a7f_prof);

    }

    public function getTemplateName()
    {
        return "guigui35PlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "guigui35PlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block guigui35platform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('guigui35_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
