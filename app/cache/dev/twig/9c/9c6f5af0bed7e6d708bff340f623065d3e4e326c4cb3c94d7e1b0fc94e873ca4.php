<?php

/* sil18VitrineBundle:Default:mentions.html.twig */
class __TwigTemplate_15b83946d5c8e1468ccf995afa4842c8f7936d632ac77cba6e7c24250afd1615 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("sil18VitrineBundle::layout.html.twig", "sil18VitrineBundle:Default:mentions.html.twig", 1);
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
        $__internal_6c6aa504f8bf7e17afe6863dd25a1cbc66c121de121476159c83b486c90e5864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6aa504f8bf7e17afe6863dd25a1cbc66c121de121476159c83b486c90e5864->enter($__internal_6c6aa504f8bf7e17afe6863dd25a1cbc66c121de121476159c83b486c90e5864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil18VitrineBundle:Default:mentions.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c6aa504f8bf7e17afe6863dd25a1cbc66c121de121476159c83b486c90e5864->leave($__internal_6c6aa504f8bf7e17afe6863dd25a1cbc66c121de121476159c83b486c90e5864_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_13de84bd26143c8608a0d115572c6ea9d03bf6a2fe5c03a2663cb0fe9d70749a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13de84bd26143c8608a0d115572c6ea9d03bf6a2fe5c03a2663cb0fe9d70749a->enter($__internal_13de84bd26143c8608a0d115572c6ea9d03bf6a2fe5c03a2663cb0fe9d70749a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    Mentions légale !
";
        
        $__internal_13de84bd26143c8608a0d115572c6ea9d03bf6a2fe5c03a2663cb0fe9d70749a->leave($__internal_13de84bd26143c8608a0d115572c6ea9d03bf6a2fe5c03a2663cb0fe9d70749a_prof);

    }

    public function getTemplateName()
    {
        return "sil18VitrineBundle:Default:mentions.html.twig";
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
    Mentions légale !
{% endblock %}", "sil18VitrineBundle:Default:mentions.html.twig", "/home/pereirke/Documents/si15/projet/src/sil18/VitrineBundle/Resources/views/Default/mentions.html.twig");
    }
}
