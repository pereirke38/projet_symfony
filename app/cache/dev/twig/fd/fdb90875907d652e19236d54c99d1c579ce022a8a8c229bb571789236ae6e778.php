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
        $__internal_996737773fe830fb791f0e8da692c0730c3976d629ea4c66e235bc43cdd36edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996737773fe830fb791f0e8da692c0730c3976d629ea4c66e235bc43cdd36edc->enter($__internal_996737773fe830fb791f0e8da692c0730c3976d629ea4c66e235bc43cdd36edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sil18VitrineBundle::layout.html.twig"));

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
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                  <span class=\"sr-only\">Toggle navigation</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Brand</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                  <li class=\"active\"><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("accueil");
        echo "\">Acceuil <span class=\"sr-only\">(current)</span></a></li>
                  <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("mentions");
        echo "\">Mentions</a></li>
                  <li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("catalogue");
        echo "\">Catalogue</a></li>
                  <li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("client_index");
        echo "\">Client</a></li>
                  <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("commande_index");
        echo "\">Commandes</a></li>
                  <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("client_login");
        echo "\">Login</a></li>
                </ul>
            </div><!-- /.container-fluid -->
        </nav>
        <div class=\"row\">
            <div class=\"col-xs-8\" id=\"content\">
                ";
        // line 37
        $this->displayBlock('content', $context, $blocks);
        // line 39
        echo "            </div>
            <div class=\"col-xs-4\">
                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("sil18VitrineBundle:Panier:contenuPanier"));
        echo "
            </div>
        </div>
        <footer>
            ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 47
        echo "        </footer> 
    </body>
</html>";
        
        $__internal_996737773fe830fb791f0e8da692c0730c3976d629ea4c66e235bc43cdd36edc->leave($__internal_996737773fe830fb791f0e8da692c0730c3976d629ea4c66e235bc43cdd36edc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_910a13d438969201e796ad8465979383b31e383fb29fbfb364f634f2f91d3e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_910a13d438969201e796ad8465979383b31e383fb29fbfb364f634f2f91d3e46->enter($__internal_910a13d438969201e796ad8465979383b31e383fb29fbfb364f634f2f91d3e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Projet Symfony";
        
        $__internal_910a13d438969201e796ad8465979383b31e383fb29fbfb364f634f2f91d3e46->leave($__internal_910a13d438969201e796ad8465979383b31e383fb29fbfb364f634f2f91d3e46_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_bcb7f80a2a2c43a66f1662b07e1432d6fa4a99cd6a22f5bc9466c2512ffa72c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb7f80a2a2c43a66f1662b07e1432d6fa4a99cd6a22f5bc9466c2512ffa72c8->enter($__internal_bcb7f80a2a2c43a66f1662b07e1432d6fa4a99cd6a22f5bc9466c2512ffa72c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "                ";
        
        $__internal_bcb7f80a2a2c43a66f1662b07e1432d6fa4a99cd6a22f5bc9466c2512ffa72c8->leave($__internal_bcb7f80a2a2c43a66f1662b07e1432d6fa4a99cd6a22f5bc9466c2512ffa72c8_prof);

    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        $__internal_178f5d023479cba9d9395c4528c5e397eb1ed10c245960ac6f618e51d0df21a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_178f5d023479cba9d9395c4528c5e397eb1ed10c245960ac6f618e51d0df21a4->enter($__internal_178f5d023479cba9d9395c4528c5e397eb1ed10c245960ac6f618e51d0df21a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 46
        echo "            ";
        
        $__internal_178f5d023479cba9d9395c4528c5e397eb1ed10c245960ac6f618e51d0df21a4->leave($__internal_178f5d023479cba9d9395c4528c5e397eb1ed10c245960ac6f618e51d0df21a4_prof);

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
        return array (  145 => 46,  139 => 45,  132 => 38,  126 => 37,  114 => 5,  105 => 47,  103 => 45,  96 => 41,  92 => 39,  90 => 37,  81 => 31,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  61 => 26,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                  <span class=\"sr-only\">Toggle navigation</span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                  <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">Brand</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                  <li class=\"active\"><a href=\"{{ url('accueil') }}\">Acceuil <span class=\"sr-only\">(current)</span></a></li>
                  <li><a href=\"{{ url('mentions') }}\">Mentions</a></li>
                  <li><a href=\"{{ url('catalogue') }}\">Catalogue</a></li>
                  <li><a href=\"{{ url('client_index') }}\">Client</a></li>
                  <li><a href=\"{{ url('commande_index') }}\">Commandes</a></li>
                  <li><a href=\"{{ url('client_login') }}\">Login</a></li>
                </ul>
            </div><!-- /.container-fluid -->
        </nav>
        <div class=\"row\">
            <div class=\"col-xs-8\" id=\"content\">
                {% block content %}
                {% endblock %}
            </div>
            <div class=\"col-xs-4\">
                {{ render(controller('sil18VitrineBundle:Panier:contenuPanier')) }}
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
