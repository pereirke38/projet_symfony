<?php

/* sil18VitrineBundle::layout.html.twig */
class __TwigTemplate_785114eb720b83279789185d4e012533d73a6e5b3646390c06e1301d39d40da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de063b959cea2df69bc5ddf0b168f4e1ce53be708447080926a7f0c08d26a5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de063b959cea2df69bc5ddf0b168f4e1ce53be708447080926a7f0c08d26a5e0->enter($__internal_de063b959cea2df69bc5ddf0b168f4e1ce53be708447080926a7f0c08d26a5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil18VitrineBundle::layout.html.twig"));

        // line 1
        echo "<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sil18vitrine/bootstrap-3.3.7-dist/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
        <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>
        <nav class=\"btn-group\">
            <ul class=\"nav navbar-default nav-pills\">
                <li><a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("accueil");
        echo "\">Accueil</a></li>
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mentions");
        echo "\">Mentions</a></li>
            </ul>
        </nav>
        <div class=\"row\">
            <div class=\"col-xs-12\" id=\"content\">
                ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "            </div>
        </div>
        
        <footer>
            ";
        // line 24
        $this->displayBlock('footer', $context, $blocks);
        // line 26
        echo "        </footer>
    </body>
</html>";
        
        $__internal_de063b959cea2df69bc5ddf0b168f4e1ce53be708447080926a7f0c08d26a5e0->leave($__internal_de063b959cea2df69bc5ddf0b168f4e1ce53be708447080926a7f0c08d26a5e0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9e8924cf1ff6d5d29c60e05945b7bcec08103a472280ec41219e2b42126c716f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8924cf1ff6d5d29c60e05945b7bcec08103a472280ec41219e2b42126c716f->enter($__internal_9e8924cf1ff6d5d29c60e05945b7bcec08103a472280ec41219e2b42126c716f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet Symfony";
        
        $__internal_9e8924cf1ff6d5d29c60e05945b7bcec08103a472280ec41219e2b42126c716f->leave($__internal_9e8924cf1ff6d5d29c60e05945b7bcec08103a472280ec41219e2b42126c716f_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_77f37a684bc58a223f8e20f23e862c7370f7c52daa4c374156b18d3337767dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77f37a684bc58a223f8e20f23e862c7370f7c52daa4c374156b18d3337767dea->enter($__internal_77f37a684bc58a223f8e20f23e862c7370f7c52daa4c374156b18d3337767dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "                ";
        
        $__internal_77f37a684bc58a223f8e20f23e862c7370f7c52daa4c374156b18d3337767dea->leave($__internal_77f37a684bc58a223f8e20f23e862c7370f7c52daa4c374156b18d3337767dea_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_c8342b68e5defeeea4c38eadb7e389f386f2ac56f458e41a92f18376e091ddbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8342b68e5defeeea4c38eadb7e389f386f2ac56f458e41a92f18376e091ddbf->enter($__internal_c8342b68e5defeeea4c38eadb7e389f386f2ac56f458e41a92f18376e091ddbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "            ";
        
        $__internal_c8342b68e5defeeea4c38eadb7e389f386f2ac56f458e41a92f18376e091ddbf->leave($__internal_c8342b68e5defeeea4c38eadb7e389f386f2ac56f458e41a92f18376e091ddbf_prof);

    }

    public function getTemplateName()
    {
        return "sil18VitrineBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 25,  103 => 24,  96 => 19,  90 => 18,  78 => 5,  69 => 26,  67 => 24,  61 => 20,  59 => 18,  51 => 13,  47 => 12,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>{% block title %}Projet Symfony{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/sil18vitrine/bootstrap-3.3.7-dist/css/bootstrap.css') }}\" type=\"text/css\" />
        <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    </head>
    <body>
        <nav class=\"btn-group\">
            <ul class=\"nav navbar-default nav-pills\">
                <li><a href=\"{{ url('accueil') }}\">Accueil</a></li>
                <li><a href=\"{{ url('mentions') }}\">Mentions</a></li>
            </ul>
        </nav>
        <div class=\"row\">
            <div class=\"col-xs-12\" id=\"content\">
                {% block content %}
                {% endblock %}
            </div>
        </div>
        
        <footer>
            {% block footer %}
            {% endblock %}
        </footer>
    </body>
</html>", "sil18VitrineBundle::layout.html.twig", "/home/pereirke/Documents/si15/projet/src/sil18/VitrineBundle/Resources/views/layout.html.twig");
    }
}
