<?php

/* ::layout.html.twig */
class __TwigTemplate_8c8ae4f5724b13cce717f421a397a449b971d93105fd9173e7a803a2b5200f77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b73236a691038d6bdde81f53a74ea16bc4e04bc8806e780ff4d3b966551b7013 = $this->env->getExtension("native_profiler");
        $__internal_b73236a691038d6bdde81f53a74ea16bc4e04bc8806e780ff4d3b966551b7013->enter($__internal_b73236a691038d6bdde81f53a74ea16bc4e04bc8806e780ff4d3b966551b7013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "</head>

<body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony2,
        et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("guigui35_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("guigui35_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("guigui35PlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 46
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 52
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "
</body>
</html>";
        
        $__internal_b73236a691038d6bdde81f53a74ea16bc4e04bc8806e780ff4d3b966551b7013->leave($__internal_b73236a691038d6bdde81f53a74ea16bc4e04bc8806e780ff4d3b966551b7013_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4d2b5aeec1e92c310446c2167ef60f64b7dd8d9f24b5cc90331fd8e339dab7a = $this->env->getExtension("native_profiler");
        $__internal_a4d2b5aeec1e92c310446c2167ef60f64b7dd8d9f24b5cc90331fd8e339dab7a->enter($__internal_a4d2b5aeec1e92c310446c2167ef60f64b7dd8d9f24b5cc90331fd8e339dab7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "guigui35 Plateforme";
        
        $__internal_a4d2b5aeec1e92c310446c2167ef60f64b7dd8d9f24b5cc90331fd8e339dab7a->leave($__internal_a4d2b5aeec1e92c310446c2167ef60f64b7dd8d9f24b5cc90331fd8e339dab7a_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_96496b71351fb409ca1d6e9a8bf3cdc7d7c858bdda89a2382eb0b0abe49012d9 = $this->env->getExtension("native_profiler");
        $__internal_96496b71351fb409ca1d6e9a8bf3cdc7d7c858bdda89a2382eb0b0abe49012d9->enter($__internal_96496b71351fb409ca1d6e9a8bf3cdc7d7c858bdda89a2382eb0b0abe49012d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        // line 13
        echo "    <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
  ";
        
        $__internal_96496b71351fb409ca1d6e9a8bf3cdc7d7c858bdda89a2382eb0b0abe49012d9->leave($__internal_96496b71351fb409ca1d6e9a8bf3cdc7d7c858bdda89a2382eb0b0abe49012d9_prof);

    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        $__internal_281e6d5b6f495801ce65130eb367df686670ef394a5fb00face1e65fa27af4a3 = $this->env->getExtension("native_profiler");
        $__internal_281e6d5b6f495801ce65130eb367df686670ef394a5fb00face1e65fa27af4a3->enter($__internal_281e6d5b6f495801ce65130eb367df686670ef394a5fb00face1e65fa27af4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 45
        echo "        ";
        
        $__internal_281e6d5b6f495801ce65130eb367df686670ef394a5fb00face1e65fa27af4a3->leave($__internal_281e6d5b6f495801ce65130eb367df686670ef394a5fb00face1e65fa27af4a3_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a323f57c83be68381edf15236d51138b94fc7c3b129bb2143ad6c237836e33a = $this->env->getExtension("native_profiler");
        $__internal_2a323f57c83be68381edf15236d51138b94fc7c3b129bb2143ad6c237836e33a->enter($__internal_2a323f57c83be68381edf15236d51138b94fc7c3b129bb2143ad6c237836e33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "    ";
        // line 58
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_2a323f57c83be68381edf15236d51138b94fc7c3b129bb2143ad6c237836e33a->leave($__internal_2a323f57c83be68381edf15236d51138b94fc7c3b129bb2143ad6c237836e33a_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 58,  157 => 57,  151 => 56,  144 => 45,  138 => 44,  130 => 13,  128 => 12,  122 => 11,  110 => 9,  101 => 61,  99 => 56,  92 => 52,  84 => 46,  82 => 44,  76 => 41,  69 => 37,  65 => 36,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# app/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*   <title>{% block title %}guigui35 Plateforme{% endblock %}</title>*/
/* */
/*   {% block stylesheets %}*/
/*     {# On charge le CSS de bootstrap depuis le site directement #}*/
/*     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*   {% endblock %}*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony2,*/
/*         et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="http://fr.openclassrooms.com/informatique/cours/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('guigui35_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('guigui35_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("guigui35PlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/* </body>*/
/* </html>*/
