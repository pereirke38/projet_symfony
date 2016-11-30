<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3d9104f8fa816f14f79f51b3928f5ce52f14abf9f3773790858cff88ec9a55fb extends Twig_Template
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
        $__internal_d577d0a2b18803d896c9b88ab3a8c53f63efe0d3c1d0290eaa2c1feeb165b589 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d577d0a2b18803d896c9b88ab3a8c53f63efe0d3c1d0290eaa2c1feeb165b589->enter($__internal_d577d0a2b18803d896c9b88ab3a8c53f63efe0d3c1d0290eaa2c1feeb165b589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d577d0a2b18803d896c9b88ab3a8c53f63efe0d3c1d0290eaa2c1feeb165b589->leave($__internal_d577d0a2b18803d896c9b88ab3a8c53f63efe0d3c1d0290eaa2c1feeb165b589_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5104f127fcad679058202e80f939d3f75065bc1c85671a39eb1201805e2ff101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5104f127fcad679058202e80f939d3f75065bc1c85671a39eb1201805e2ff101->enter($__internal_5104f127fcad679058202e80f939d3f75065bc1c85671a39eb1201805e2ff101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5104f127fcad679058202e80f939d3f75065bc1c85671a39eb1201805e2ff101->leave($__internal_5104f127fcad679058202e80f939d3f75065bc1c85671a39eb1201805e2ff101_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d603804542f892f865e6a5503e050775e95e65b359613884e8a88c396c3413e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d603804542f892f865e6a5503e050775e95e65b359613884e8a88c396c3413e8->enter($__internal_d603804542f892f865e6a5503e050775e95e65b359613884e8a88c396c3413e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d603804542f892f865e6a5503e050775e95e65b359613884e8a88c396c3413e8->leave($__internal_d603804542f892f865e6a5503e050775e95e65b359613884e8a88c396c3413e8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_adb5be2ab336c93354fff8f764a93f3c6fb8f2d087468c22a390df8b2eb89c3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb5be2ab336c93354fff8f764a93f3c6fb8f2d087468c22a390df8b2eb89c3d->enter($__internal_adb5be2ab336c93354fff8f764a93f3c6fb8f2d087468c22a390df8b2eb89c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_adb5be2ab336c93354fff8f764a93f3c6fb8f2d087468c22a390df8b2eb89c3d->leave($__internal_adb5be2ab336c93354fff8f764a93f3c6fb8f2d087468c22a390df8b2eb89c3d_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/pereirke/Documents/si15/projet/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
