<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fef19dbf359ac40d71a16bc1c16fe4329923679e40b45129295675fb8c7cab89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef19dbf359ac40d71a16bc1c16fe4329923679e40b45129295675fb8c7cab89->enter($__internal_fef19dbf359ac40d71a16bc1c16fe4329923679e40b45129295675fb8c7cab89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_427d754d9ed0b03e28b6835f800104c1796ea76f517b9d06f5049fad586cc916 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427d754d9ed0b03e28b6835f800104c1796ea76f517b9d06f5049fad586cc916->enter($__internal_427d754d9ed0b03e28b6835f800104c1796ea76f517b9d06f5049fad586cc916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fef19dbf359ac40d71a16bc1c16fe4329923679e40b45129295675fb8c7cab89->leave($__internal_fef19dbf359ac40d71a16bc1c16fe4329923679e40b45129295675fb8c7cab89_prof);

        
        $__internal_427d754d9ed0b03e28b6835f800104c1796ea76f517b9d06f5049fad586cc916->leave($__internal_427d754d9ed0b03e28b6835f800104c1796ea76f517b9d06f5049fad586cc916_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fa7f18adc3d42c78490bc27067ac27f4c14cbe2d47d62f7fdcec149d4ac0bcfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa7f18adc3d42c78490bc27067ac27f4c14cbe2d47d62f7fdcec149d4ac0bcfc->enter($__internal_fa7f18adc3d42c78490bc27067ac27f4c14cbe2d47d62f7fdcec149d4ac0bcfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_186b153e8b0d7a57c986820742d4a9d82012d905d0663aad55d0dd6794bbc731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186b153e8b0d7a57c986820742d4a9d82012d905d0663aad55d0dd6794bbc731->enter($__internal_186b153e8b0d7a57c986820742d4a9d82012d905d0663aad55d0dd6794bbc731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_186b153e8b0d7a57c986820742d4a9d82012d905d0663aad55d0dd6794bbc731->leave($__internal_186b153e8b0d7a57c986820742d4a9d82012d905d0663aad55d0dd6794bbc731_prof);

        
        $__internal_fa7f18adc3d42c78490bc27067ac27f4c14cbe2d47d62f7fdcec149d4ac0bcfc->leave($__internal_fa7f18adc3d42c78490bc27067ac27f4c14cbe2d47d62f7fdcec149d4ac0bcfc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3acbc4d32a8145af4351953c0c0ab0910d8260ad72627d3766aa3dbe2da4c6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3acbc4d32a8145af4351953c0c0ab0910d8260ad72627d3766aa3dbe2da4c6f4->enter($__internal_3acbc4d32a8145af4351953c0c0ab0910d8260ad72627d3766aa3dbe2da4c6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ebb062ad114375e6b302fee12054459af927202a7120f5a6666fd15fb2c39082 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebb062ad114375e6b302fee12054459af927202a7120f5a6666fd15fb2c39082->enter($__internal_ebb062ad114375e6b302fee12054459af927202a7120f5a6666fd15fb2c39082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ebb062ad114375e6b302fee12054459af927202a7120f5a6666fd15fb2c39082->leave($__internal_ebb062ad114375e6b302fee12054459af927202a7120f5a6666fd15fb2c39082_prof);

        
        $__internal_3acbc4d32a8145af4351953c0c0ab0910d8260ad72627d3766aa3dbe2da4c6f4->leave($__internal_3acbc4d32a8145af4351953c0c0ab0910d8260ad72627d3766aa3dbe2da4c6f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98aeeb3c558e973a6cf0c3a6c33d3d2375884f011ace6f49ed51a8a3fb1c5e30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98aeeb3c558e973a6cf0c3a6c33d3d2375884f011ace6f49ed51a8a3fb1c5e30->enter($__internal_98aeeb3c558e973a6cf0c3a6c33d3d2375884f011ace6f49ed51a8a3fb1c5e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7027417265f0f87feae7fedd2643e5ee99dd689b5f2ffc6d64ddb65ed8651abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7027417265f0f87feae7fedd2643e5ee99dd689b5f2ffc6d64ddb65ed8651abd->enter($__internal_7027417265f0f87feae7fedd2643e5ee99dd689b5f2ffc6d64ddb65ed8651abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7027417265f0f87feae7fedd2643e5ee99dd689b5f2ffc6d64ddb65ed8651abd->leave($__internal_7027417265f0f87feae7fedd2643e5ee99dd689b5f2ffc6d64ddb65ed8651abd_prof);

        
        $__internal_98aeeb3c558e973a6cf0c3a6c33d3d2375884f011ace6f49ed51a8a3fb1c5e30->leave($__internal_98aeeb3c558e973a6cf0c3a6c33d3d2375884f011ace6f49ed51a8a3fb1c5e30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/vagrant/code/cv.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
