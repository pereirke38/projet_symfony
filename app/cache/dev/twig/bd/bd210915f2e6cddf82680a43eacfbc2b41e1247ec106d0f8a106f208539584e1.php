<?php

/* sil18VitrineBundle:Default:index.html.twig */
class __TwigTemplate_e574cb928675e0aac041077d48a5d0e23e437395a6e19278e4a0405e5b23846e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_695c6fd1262a37e9f4a921abe75c42adf90ee4039e1336fdb77ff42ff8ebca6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695c6fd1262a37e9f4a921abe75c42adf90ee4039e1336fdb77ff42ff8ebca6c->enter($__internal_695c6fd1262a37e9f4a921abe75c42adf90ee4039e1336fdb77ff42ff8ebca6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil18VitrineBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_695c6fd1262a37e9f4a921abe75c42adf90ee4039e1336fdb77ff42ff8ebca6c->leave($__internal_695c6fd1262a37e9f4a921abe75c42adf90ee4039e1336fdb77ff42ff8ebca6c_prof);

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
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello {{name}}!
", "sil18VitrineBundle:Default:index.html.twig", "/home/pereirke/Documents/si15/projet/src/sil18/VitrineBundle/Resources/views/Default/index.html.twig");
    }
}
