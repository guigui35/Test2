<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_a062788d3e017f904c42015cf23dad20e6f744631a3b0dbd01ede0a68ce589ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d237fb08579e909d362af419465c51225da36ab5ba0daffebe9f1865bffe708 = $this->env->getExtension("native_profiler");
        $__internal_9d237fb08579e909d362af419465c51225da36ab5ba0daffebe9f1865bffe708->enter($__internal_9d237fb08579e909d362af419465c51225da36ab5ba0daffebe9f1865bffe708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d237fb08579e909d362af419465c51225da36ab5ba0daffebe9f1865bffe708->leave($__internal_9d237fb08579e909d362af419465c51225da36ab5ba0daffebe9f1865bffe708_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6c0448684238fe10332e73c583a8fbfb71c5916ffa36180cc806f081e7875e4c = $this->env->getExtension("native_profiler");
        $__internal_6c0448684238fe10332e73c583a8fbfb71c5916ffa36180cc806f081e7875e4c->enter($__internal_6c0448684238fe10332e73c583a8fbfb71c5916ffa36180cc806f081e7875e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6c0448684238fe10332e73c583a8fbfb71c5916ffa36180cc806f081e7875e4c->leave($__internal_6c0448684238fe10332e73c583a8fbfb71c5916ffa36180cc806f081e7875e4c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0fddddf9b2da3cda2d3e7db0e305bb64ccc33c7fb5b38c063cfad2511f00f35 = $this->env->getExtension("native_profiler");
        $__internal_e0fddddf9b2da3cda2d3e7db0e305bb64ccc33c7fb5b38c063cfad2511f00f35->enter($__internal_e0fddddf9b2da3cda2d3e7db0e305bb64ccc33c7fb5b38c063cfad2511f00f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e0fddddf9b2da3cda2d3e7db0e305bb64ccc33c7fb5b38c063cfad2511f00f35->leave($__internal_e0fddddf9b2da3cda2d3e7db0e305bb64ccc33c7fb5b38c063cfad2511f00f35_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7045f902437fa6e596b02bef5842e35f3e7c9261fc032c4b9a47ffe175bed8da = $this->env->getExtension("native_profiler");
        $__internal_7045f902437fa6e596b02bef5842e35f3e7c9261fc032c4b9a47ffe175bed8da->enter($__internal_7045f902437fa6e596b02bef5842e35f3e7c9261fc032c4b9a47ffe175bed8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7045f902437fa6e596b02bef5842e35f3e7c9261fc032c4b9a47ffe175bed8da->leave($__internal_7045f902437fa6e596b02bef5842e35f3e7c9261fc032c4b9a47ffe175bed8da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
