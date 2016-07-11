<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0947c6056604fe5331daf11168c5941aa24a79c95ae1c132e9c133348b8cd94b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f26c72445caec48d58a6a566517f3021117d2fd88f2b137d9b7e66a0db9d38ff = $this->env->getExtension("native_profiler");
        $__internal_f26c72445caec48d58a6a566517f3021117d2fd88f2b137d9b7e66a0db9d38ff->enter($__internal_f26c72445caec48d58a6a566517f3021117d2fd88f2b137d9b7e66a0db9d38ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f26c72445caec48d58a6a566517f3021117d2fd88f2b137d9b7e66a0db9d38ff->leave($__internal_f26c72445caec48d58a6a566517f3021117d2fd88f2b137d9b7e66a0db9d38ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dc49838d23711c942b253115ffe2cb7c7c64a2391c409b97ba36a67caafc0923 = $this->env->getExtension("native_profiler");
        $__internal_dc49838d23711c942b253115ffe2cb7c7c64a2391c409b97ba36a67caafc0923->enter($__internal_dc49838d23711c942b253115ffe2cb7c7c64a2391c409b97ba36a67caafc0923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dc49838d23711c942b253115ffe2cb7c7c64a2391c409b97ba36a67caafc0923->leave($__internal_dc49838d23711c942b253115ffe2cb7c7c64a2391c409b97ba36a67caafc0923_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aea4d4988d7ebee05f63c4262b0566fb3816e50ecb4c00950f7e5cbc1380a631 = $this->env->getExtension("native_profiler");
        $__internal_aea4d4988d7ebee05f63c4262b0566fb3816e50ecb4c00950f7e5cbc1380a631->enter($__internal_aea4d4988d7ebee05f63c4262b0566fb3816e50ecb4c00950f7e5cbc1380a631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aea4d4988d7ebee05f63c4262b0566fb3816e50ecb4c00950f7e5cbc1380a631->leave($__internal_aea4d4988d7ebee05f63c4262b0566fb3816e50ecb4c00950f7e5cbc1380a631_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8fc7c77eef7f4eec55a59eec4e73835fa67e3a01a9dc05df64a5937d5aa052d0 = $this->env->getExtension("native_profiler");
        $__internal_8fc7c77eef7f4eec55a59eec4e73835fa67e3a01a9dc05df64a5937d5aa052d0->enter($__internal_8fc7c77eef7f4eec55a59eec4e73835fa67e3a01a9dc05df64a5937d5aa052d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8fc7c77eef7f4eec55a59eec4e73835fa67e3a01a9dc05df64a5937d5aa052d0->leave($__internal_8fc7c77eef7f4eec55a59eec4e73835fa67e3a01a9dc05df64a5937d5aa052d0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
