<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bdd538c0f3c623824b7b7e19b2fd78684b3c956ab11f309be933b407b96bd6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdd538c0f3c623824b7b7e19b2fd78684b3c956ab11f309be933b407b96bd6c->enter($__internal_9bdd538c0f3c623824b7b7e19b2fd78684b3c956ab11f309be933b407b96bd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4b17bf33a93812511a0df30ce718d491389e9ecc276d064977eb47cfeb7cda7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b17bf33a93812511a0df30ce718d491389e9ecc276d064977eb47cfeb7cda7d->enter($__internal_4b17bf33a93812511a0df30ce718d491389e9ecc276d064977eb47cfeb7cda7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- import de BootStrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>

<!-- Partie NavBar BootStrap -->
<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">
                <img alt=\"Brand\" src=\"http://www.admagazine.fr/uploads/images/thumbs/201716/13/ad_logo_noir_3581_north_188x131_white.png\" height=\"20\" width=\"30\">
            </a>
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"http://cv.dev\">Alexandre Doret</a>
        </div>

        <!-- Partie des liens -->

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("moi");
        echo "\">A propos de moi<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cv");
        echo "\">Mon CV</a></li>
                <li><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("competences");
        echo "\">Mes Compétences</a></li>
                <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog");
        echo "\">Mon Blog</a></li>
            </ul>
            <!-- Barre de Recherche -->
            <form class=\"navbar-form navbar-left\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher sur le site...\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Rechercher</button>
            </form>
            <button type=\"button\" class=\"btn btn-default navbar-btn\">Administration du Site</button>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
<body style=\"background-color: rgba(255,250,179,0.99)\">

</body>


";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
<footer>
    <div class=\"panel panel-body\">
        <p>Plan du Site</p>
    </div>
</footer>";
        
        $__internal_9bdd538c0f3c623824b7b7e19b2fd78684b3c956ab11f309be933b407b96bd6c->leave($__internal_9bdd538c0f3c623824b7b7e19b2fd78684b3c956ab11f309be933b407b96bd6c_prof);

        
        $__internal_4b17bf33a93812511a0df30ce718d491389e9ecc276d064977eb47cfeb7cda7d->leave($__internal_4b17bf33a93812511a0df30ce718d491389e9ecc276d064977eb47cfeb7cda7d_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3259f4d2810b65c2dfdb718294859167e3517f40ac7e04e6b3f4fc55e44967a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3259f4d2810b65c2dfdb718294859167e3517f40ac7e04e6b3f4fc55e44967a->enter($__internal_c3259f4d2810b65c2dfdb718294859167e3517f40ac7e04e6b3f4fc55e44967a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0210f37a0fd9d2255b0602362ccefbf1bb140c5a6c299c3a7746fc594504ffac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0210f37a0fd9d2255b0602362ccefbf1bb140c5a6c299c3a7746fc594504ffac->enter($__internal_0210f37a0fd9d2255b0602362ccefbf1bb140c5a6c299c3a7746fc594504ffac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "
";
        
        $__internal_0210f37a0fd9d2255b0602362ccefbf1bb140c5a6c299c3a7746fc594504ffac->leave($__internal_0210f37a0fd9d2255b0602362ccefbf1bb140c5a6c299c3a7746fc594504ffac_prof);

        
        $__internal_c3259f4d2810b65c2dfdb718294859167e3517f40ac7e04e6b3f4fc55e44967a->leave($__internal_c3259f4d2810b65c2dfdb718294859167e3517f40ac7e04e6b3f4fc55e44967a_prof);

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
        return array (  117 => 53,  108 => 52,  93 => 55,  91 => 52,  69 => 33,  65 => 32,  61 => 31,  57 => 30,  26 => 1,);
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
<html lang=\"fr\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- import de BootStrap -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
</head>

<!-- Partie NavBar BootStrap -->
<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"#\">
                <img alt=\"Brand\" src=\"http://www.admagazine.fr/uploads/images/thumbs/201716/13/ad_logo_noir_3581_north_188x131_white.png\" height=\"20\" width=\"30\">
            </a>
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"http://cv.dev\">Alexandre Doret</a>
        </div>

        <!-- Partie des liens -->

        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"{{ path('moi') }}\">A propos de moi<span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"{{ path('cv') }}\">Mon CV</a></li>
                <li><a href=\"{{ path('competences') }}\">Mes Compétences</a></li>
                <li><a href=\"{{ path('blog') }}\">Mon Blog</a></li>
            </ul>
            <!-- Barre de Recherche -->
            <form class=\"navbar-form navbar-left\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher sur le site...\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Rechercher</button>
            </form>
            <button type=\"button\" class=\"btn btn-default navbar-btn\">Administration du Site</button>
        </div><!-- /.navbar-collapse -->

    </div><!-- /.container-fluid -->
</nav>
<body style=\"background-color: rgba(255,250,179,0.99)\">

</body>


{% block body %}

{% endblock body %}

<footer>
    <div class=\"panel panel-body\">
        <p>Plan du Site</p>
    </div>
</footer>", "base.html.twig", "/home/vagrant/code/cv.dev/app/Resources/views/base.html.twig");
    }
}
