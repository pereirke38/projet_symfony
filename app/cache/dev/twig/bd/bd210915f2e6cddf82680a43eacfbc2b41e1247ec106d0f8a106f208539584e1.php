<?php

/* sil18VitrineBundle:Default:index.html.twig */
class __TwigTemplate_e574cb928675e0aac041077d48a5d0e23e437395a6e19278e4a0405e5b23846e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sil18VitrineBundle::layout.html.twig", "sil18VitrineBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "sil18VitrineBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_445aa81119b8ccf8e08fb17673ec9489fe9dec0c7d121283de704bc8fa48c400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445aa81119b8ccf8e08fb17673ec9489fe9dec0c7d121283de704bc8fa48c400->enter($__internal_445aa81119b8ccf8e08fb17673ec9489fe9dec0c7d121283de704bc8fa48c400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil18VitrineBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445aa81119b8ccf8e08fb17673ec9489fe9dec0c7d121283de704bc8fa48c400->leave($__internal_445aa81119b8ccf8e08fb17673ec9489fe9dec0c7d121283de704bc8fa48c400_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_a2df8a59d02ea74e3a6e27bf720f20c8e687dcd0b535441e85fd4f08544b3972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2df8a59d02ea74e3a6e27bf720f20c8e687dcd0b535441e85fd4f08544b3972->enter($__internal_a2df8a59d02ea74e3a6e27bf720f20c8e687dcd0b535441e85fd4f08544b3972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_a2df8a59d02ea74e3a6e27bf720f20c8e687dcd0b535441e85fd4f08544b3972->leave($__internal_a2df8a59d02ea74e3a6e27bf720f20c8e687dcd0b535441e85fd4f08544b3972_prof);

    }

    public function getTemplateName()
    {
        return "sil18VitrineBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"sil18VitrineBundle::layout.html.twig\" %}
{% block content %}
    Hello {{name}}!
{% endblock %}
", "sil18VitrineBundle:Default:index.html.twig", "/home/pereirke/Documents/si15/projet/src/sil18/VitrineBundle/Resources/views/Default/index.html.twig");
    }
}
