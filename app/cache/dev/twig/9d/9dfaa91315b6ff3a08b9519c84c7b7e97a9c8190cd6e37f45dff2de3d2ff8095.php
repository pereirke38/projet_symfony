<?php

/* base.html.twig */
class __TwigTemplate_50230760b3cc10d7eaaecfc658b43e68504733f165dce124998eefb719d27493 extends Twig_Template
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
        $__internal_6a2df7a106a8c2e54592ce5d1373837ce6dbfa2add46827a7edcac6958c58087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a2df7a106a8c2e54592ce5d1373837ce6dbfa2add46827a7edcac6958c58087->enter($__internal_6a2df7a106a8c2e54592ce5d1373837ce6dbfa2add46827a7edcac6958c58087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_6a2df7a106a8c2e54592ce5d1373837ce6dbfa2add46827a7edcac6958c58087->leave($__internal_6a2df7a106a8c2e54592ce5d1373837ce6dbfa2add46827a7edcac6958c58087_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e2fa5c14f812d31ba92c9a8945ce4e575f04c87eeee9797e70f95e6526ff8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2fa5c14f812d31ba92c9a8945ce4e575f04c87eeee9797e70f95e6526ff8f2->enter($__internal_4e2fa5c14f812d31ba92c9a8945ce4e575f04c87eeee9797e70f95e6526ff8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4e2fa5c14f812d31ba92c9a8945ce4e575f04c87eeee9797e70f95e6526ff8f2->leave($__internal_4e2fa5c14f812d31ba92c9a8945ce4e575f04c87eeee9797e70f95e6526ff8f2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d666e58afc7ecbefc6b3851120a95a40a4ef724059b10a20fbf93ce1dac83ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d666e58afc7ecbefc6b3851120a95a40a4ef724059b10a20fbf93ce1dac83ad->enter($__internal_5d666e58afc7ecbefc6b3851120a95a40a4ef724059b10a20fbf93ce1dac83ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5d666e58afc7ecbefc6b3851120a95a40a4ef724059b10a20fbf93ce1dac83ad->leave($__internal_5d666e58afc7ecbefc6b3851120a95a40a4ef724059b10a20fbf93ce1dac83ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ec7eede816e3a79c2a28f62d170a137f2992a043c0cbd864f32b91d9f6d6206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec7eede816e3a79c2a28f62d170a137f2992a043c0cbd864f32b91d9f6d6206->enter($__internal_3ec7eede816e3a79c2a28f62d170a137f2992a043c0cbd864f32b91d9f6d6206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3ec7eede816e3a79c2a28f62d170a137f2992a043c0cbd864f32b91d9f6d6206->leave($__internal_3ec7eede816e3a79c2a28f62d170a137f2992a043c0cbd864f32b91d9f6d6206_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c1eedcb30457eb11e145f6ff406cc7118f838960daaca9e8149489a3b66e2814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1eedcb30457eb11e145f6ff406cc7118f838960daaca9e8149489a3b66e2814->enter($__internal_c1eedcb30457eb11e145f6ff406cc7118f838960daaca9e8149489a3b66e2814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c1eedcb30457eb11e145f6ff406cc7118f838960daaca9e8149489a3b66e2814->leave($__internal_c1eedcb30457eb11e145f6ff406cc7118f838960daaca9e8149489a3b66e2814_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/pereirke/Documents/si15/projet/app/Resources/views/base.html.twig");
    }
}
