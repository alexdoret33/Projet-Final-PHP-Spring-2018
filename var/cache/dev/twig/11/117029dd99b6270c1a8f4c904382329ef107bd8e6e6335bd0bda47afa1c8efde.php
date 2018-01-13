<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_3433c28c6cac637fd71963105578c31278264eef042c20e758b6a9de83b5a312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81a808a7c9676ea4424c759f8160dcabf88a6af2955fd56c47affea1d9f6b37d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a808a7c9676ea4424c759f8160dcabf88a6af2955fd56c47affea1d9f6b37d->enter($__internal_81a808a7c9676ea4424c759f8160dcabf88a6af2955fd56c47affea1d9f6b37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_aa93af0d64ffa98d3b5a52754461e0c7f95b6733e08ae5a94a8da4e5f0e646da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa93af0d64ffa98d3b5a52754461e0c7f95b6733e08ae5a94a8da4e5f0e646da->enter($__internal_aa93af0d64ffa98d3b5a52754461e0c7f95b6733e08ae5a94a8da4e5f0e646da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81a808a7c9676ea4424c759f8160dcabf88a6af2955fd56c47affea1d9f6b37d->leave($__internal_81a808a7c9676ea4424c759f8160dcabf88a6af2955fd56c47affea1d9f6b37d_prof);

        
        $__internal_aa93af0d64ffa98d3b5a52754461e0c7f95b6733e08ae5a94a8da4e5f0e646da->leave($__internal_aa93af0d64ffa98d3b5a52754461e0c7f95b6733e08ae5a94a8da4e5f0e646da_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9aa1b7f05caa647c5f9307e1620b0ce55777b22eb16dde7356c2cfbb86d8fd5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa1b7f05caa647c5f9307e1620b0ce55777b22eb16dde7356c2cfbb86d8fd5c->enter($__internal_9aa1b7f05caa647c5f9307e1620b0ce55777b22eb16dde7356c2cfbb86d8fd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_376a099c2942f8c2da664abec649d82638fe195991cee20af67240fca04cb51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_376a099c2942f8c2da664abec649d82638fe195991cee20af67240fca04cb51a->enter($__internal_376a099c2942f8c2da664abec649d82638fe195991cee20af67240fca04cb51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_376a099c2942f8c2da664abec649d82638fe195991cee20af67240fca04cb51a->leave($__internal_376a099c2942f8c2da664abec649d82638fe195991cee20af67240fca04cb51a_prof);

        
        $__internal_9aa1b7f05caa647c5f9307e1620b0ce55777b22eb16dde7356c2cfbb86d8fd5c->leave($__internal_9aa1b7f05caa647c5f9307e1620b0ce55777b22eb16dde7356c2cfbb86d8fd5c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/vagrant/code/cv.dev/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
