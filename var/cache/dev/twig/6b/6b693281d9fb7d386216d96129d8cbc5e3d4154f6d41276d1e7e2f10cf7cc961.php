<?php

/* default/index.html.twig */
class __TwigTemplate_e685ed4c5a9afa01fadd57a24b9e0c01697ea83a14d199d73fc764e51ec3b70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0705a3e0c2dfe7fc6fe0b6b1cb39084345558c58f54b1ecd70452a4c78346a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0705a3e0c2dfe7fc6fe0b6b1cb39084345558c58f54b1ecd70452a4c78346a9b->enter($__internal_0705a3e0c2dfe7fc6fe0b6b1cb39084345558c58f54b1ecd70452a4c78346a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_975ee8e5fc3fdd072cb8cc3db4f624e68052bcafafe0ec97eb4430b3a7f175ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975ee8e5fc3fdd072cb8cc3db4f624e68052bcafafe0ec97eb4430b3a7f175ea->enter($__internal_975ee8e5fc3fdd072cb8cc3db4f624e68052bcafafe0ec97eb4430b3a7f175ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0705a3e0c2dfe7fc6fe0b6b1cb39084345558c58f54b1ecd70452a4c78346a9b->leave($__internal_0705a3e0c2dfe7fc6fe0b6b1cb39084345558c58f54b1ecd70452a4c78346a9b_prof);

        
        $__internal_975ee8e5fc3fdd072cb8cc3db4f624e68052bcafafe0ec97eb4430b3a7f175ea->leave($__internal_975ee8e5fc3fdd072cb8cc3db4f624e68052bcafafe0ec97eb4430b3a7f175ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f746e2a9d879400b7568247d5227c3465e0a5f085a9f67f1d49418583176ed4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f746e2a9d879400b7568247d5227c3465e0a5f085a9f67f1d49418583176ed4a->enter($__internal_f746e2a9d879400b7568247d5227c3465e0a5f085a9f67f1d49418583176ed4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8464e92289abb4634441f975ed3c155dc5ab6ac7630941faad70e3797b2affd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8464e92289abb4634441f975ed3c155dc5ab6ac7630941faad70e3797b2affd->enter($__internal_c8464e92289abb4634441f975ed3c155dc5ab6ac7630941faad70e3797b2affd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"https://alexandre-doret.com/wp-content/uploads/2017/10/cropped-banner-1686943_1920.jpg\" style=\"width:100%;\">
            </div>
        </div>
    </div>

    <h1>Bienvenue sur mon site web personnel!</h1>

    <p>
        Je suis actuellement étudiant chez Ingésup à Bordeaux (Groupe Ynov) en deuxième année, mais je suis également le dirigeant de ma propre entreprise de Services Informatiques pour clients particuliers autour de Bordeaux.<br>
        Je suis passionné par tout ce qui touche à l’informatique, et j’admire les grandes entreprises de la Silicon Valley comme Apple, Google, Microsoft, Tesla et bien d’autres…
    </p>
    <p>
        Je pratique régulièrement le Golf comme loisir depuis 2007, car j’étais élève au sein de l’école de golf de Bordeaux-Cameyrac de 2007 à 2016.
    </p>
    <p>
        J’apprécie voyager, mais plus particulièrement aux États-Unis car j’aime ce pays que je trouve grand et inépuisable. J’y vais assez régulièrement pour y découvrir les différents États qui le composent, et très récemment, pour y effectuer un stage en entreprise.
    </p>
    <p>
        N’hésitez pas à consulter les différentes pages de ce site pour y découvrir encore plus de choses sur moi!
    </p>
    <p>
        Cordialement,
    </p>
    <p>
        Alexandre DORET
    </p>
";
        
        $__internal_c8464e92289abb4634441f975ed3c155dc5ab6ac7630941faad70e3797b2affd->leave($__internal_c8464e92289abb4634441f975ed3c155dc5ab6ac7630941faad70e3797b2affd_prof);

        
        $__internal_f746e2a9d879400b7568247d5227c3465e0a5f085a9f67f1d49418583176ed4a->leave($__internal_f746e2a9d879400b7568247d5227c3465e0a5f085a9f67f1d49418583176ed4a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
    <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <img src=\"https://alexandre-doret.com/wp-content/uploads/2017/10/cropped-banner-1686943_1920.jpg\" style=\"width:100%;\">
            </div>
        </div>
    </div>

    <h1>Bienvenue sur mon site web personnel!</h1>

    <p>
        Je suis actuellement étudiant chez Ingésup à Bordeaux (Groupe Ynov) en deuxième année, mais je suis également le dirigeant de ma propre entreprise de Services Informatiques pour clients particuliers autour de Bordeaux.<br>
        Je suis passionné par tout ce qui touche à l’informatique, et j’admire les grandes entreprises de la Silicon Valley comme Apple, Google, Microsoft, Tesla et bien d’autres…
    </p>
    <p>
        Je pratique régulièrement le Golf comme loisir depuis 2007, car j’étais élève au sein de l’école de golf de Bordeaux-Cameyrac de 2007 à 2016.
    </p>
    <p>
        J’apprécie voyager, mais plus particulièrement aux États-Unis car j’aime ce pays que je trouve grand et inépuisable. J’y vais assez régulièrement pour y découvrir les différents États qui le composent, et très récemment, pour y effectuer un stage en entreprise.
    </p>
    <p>
        N’hésitez pas à consulter les différentes pages de ce site pour y découvrir encore plus de choses sur moi!
    </p>
    <p>
        Cordialement,
    </p>
    <p>
        Alexandre DORET
    </p>
{% endblock body %}

", "default/index.html.twig", "/home/vagrant/code/cv.dev/app/Resources/views/default/index.html.twig");
    }
}
