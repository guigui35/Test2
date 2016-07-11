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
        $__internal_4f68740dac8355c37f6469c374027e2ceda5965e174c1f64f61daa0fef6bb5d5 = $this->env->getExtension("native_profiler");
        $__internal_4f68740dac8355c37f6469c374027e2ceda5965e174c1f64f61daa0fef6bb5d5->enter($__internal_4f68740dac8355c37f6469c374027e2ceda5965e174c1f64f61daa0fef6bb5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f68740dac8355c37f6469c374027e2ceda5965e174c1f64f61daa0fef6bb5d5->leave($__internal_4f68740dac8355c37f6469c374027e2ceda5965e174c1f64f61daa0fef6bb5d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_11106c0892dd09bc85e985e0131bd578ed6974bc28e550f66c69039be7b6bf85 = $this->env->getExtension("native_profiler");
        $__internal_11106c0892dd09bc85e985e0131bd578ed6974bc28e550f66c69039be7b6bf85->enter($__internal_11106c0892dd09bc85e985e0131bd578ed6974bc28e550f66c69039be7b6bf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_11106c0892dd09bc85e985e0131bd578ed6974bc28e550f66c69039be7b6bf85->leave($__internal_11106c0892dd09bc85e985e0131bd578ed6974bc28e550f66c69039be7b6bf85_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_67bd1b5f69b89e0e7cf8cbeb6652bfe68b31c3ca55f84596e5498a4e2d4d5655 = $this->env->getExtension("native_profiler");
        $__internal_67bd1b5f69b89e0e7cf8cbeb6652bfe68b31c3ca55f84596e5498a4e2d4d5655->enter($__internal_67bd1b5f69b89e0e7cf8cbeb6652bfe68b31c3ca55f84596e5498a4e2d4d5655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_67bd1b5f69b89e0e7cf8cbeb6652bfe68b31c3ca55f84596e5498a4e2d4d5655->leave($__internal_67bd1b5f69b89e0e7cf8cbeb6652bfe68b31c3ca55f84596e5498a4e2d4d5655_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ec179b3106b447889d578817518cc8b782f486654e87c7e2b2dd210756d48a1 = $this->env->getExtension("native_profiler");
        $__internal_0ec179b3106b447889d578817518cc8b782f486654e87c7e2b2dd210756d48a1->enter($__internal_0ec179b3106b447889d578817518cc8b782f486654e87c7e2b2dd210756d48a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ec179b3106b447889d578817518cc8b782f486654e87c7e2b2dd210756d48a1->leave($__internal_0ec179b3106b447889d578817518cc8b782f486654e87c7e2b2dd210756d48a1_prof);

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
