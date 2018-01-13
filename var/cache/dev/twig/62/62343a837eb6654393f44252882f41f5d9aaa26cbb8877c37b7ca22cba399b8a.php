<?php

/* default/mon_cv.html.twig */
class __TwigTemplate_db3ff4567d46a98a6df170bf3fc7a1a1d57e8ef68e901533d12485a71ca1558e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/mon_cv.html.twig", 1);
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
        $__internal_650fb4453ed3abc5692dd65a8d350429f9fecbb86184f20236cb1b7d72d0de8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650fb4453ed3abc5692dd65a8d350429f9fecbb86184f20236cb1b7d72d0de8f->enter($__internal_650fb4453ed3abc5692dd65a8d350429f9fecbb86184f20236cb1b7d72d0de8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mon_cv.html.twig"));

        $__internal_9c6d7402ef8b651c9d9ec26cdc63684de4942c00404ddbc0e5a088a0107d62f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6d7402ef8b651c9d9ec26cdc63684de4942c00404ddbc0e5a088a0107d62f5->enter($__internal_9c6d7402ef8b651c9d9ec26cdc63684de4942c00404ddbc0e5a088a0107d62f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/mon_cv.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_650fb4453ed3abc5692dd65a8d350429f9fecbb86184f20236cb1b7d72d0de8f->leave($__internal_650fb4453ed3abc5692dd65a8d350429f9fecbb86184f20236cb1b7d72d0de8f_prof);

        
        $__internal_9c6d7402ef8b651c9d9ec26cdc63684de4942c00404ddbc0e5a088a0107d62f5->leave($__internal_9c6d7402ef8b651c9d9ec26cdc63684de4942c00404ddbc0e5a088a0107d62f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_96d331c874e14f7ed7035221b1d2f35470ad17caab6eb7d04ee9f8980a3b9dc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96d331c874e14f7ed7035221b1d2f35470ad17caab6eb7d04ee9f8980a3b9dc9->enter($__internal_96d331c874e14f7ed7035221b1d2f35470ad17caab6eb7d04ee9f8980a3b9dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcdeaefcb615d9f439f430114557921f487df989154c3df0fbe1e73099dd63be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcdeaefcb615d9f439f430114557921f487df989154c3df0fbe1e73099dd63be->enter($__internal_dcdeaefcb615d9f439f430114557921f487df989154c3df0fbe1e73099dd63be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">

            <div class=\"carousel-inner\">
                <div class=\"item active\">
                    <img src=\"http://alexandre-doret.com/wp-content/uploads/2017/02/CV-alexandre-doret-3-page-001.jpg\" style=\"width:100%;\">
                </div>
            </div>
        </div>

";
        
        $__internal_dcdeaefcb615d9f439f430114557921f487df989154c3df0fbe1e73099dd63be->leave($__internal_dcdeaefcb615d9f439f430114557921f487df989154c3df0fbe1e73099dd63be_prof);

        
        $__internal_96d331c874e14f7ed7035221b1d2f35470ad17caab6eb7d04ee9f8980a3b9dc9->leave($__internal_96d331c874e14f7ed7035221b1d2f35470ad17caab6eb7d04ee9f8980a3b9dc9_prof);

    }

    public function getTemplateName()
    {
        return "default/mon_cv.html.twig";
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
                    <img src=\"http://alexandre-doret.com/wp-content/uploads/2017/02/CV-alexandre-doret-3-page-001.jpg\" style=\"width:100%;\">
                </div>
            </div>
        </div>

{% endblock %}", "default/mon_cv.html.twig", "/home/vagrant/code/cv.dev/app/Resources/views/default/mon_cv.html.twig");
    }
}
