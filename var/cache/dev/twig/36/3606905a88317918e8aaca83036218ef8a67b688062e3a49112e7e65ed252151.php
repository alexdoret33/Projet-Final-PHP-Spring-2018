<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_327dc44997367526cc26f12a72f0239c01ec210ca3b5e39f1385516208bcdbd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_327dc44997367526cc26f12a72f0239c01ec210ca3b5e39f1385516208bcdbd9->enter($__internal_327dc44997367526cc26f12a72f0239c01ec210ca3b5e39f1385516208bcdbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a479c4a15f0bf4814fedb506005aea2dff2deec5739ef6a2081c6cdd72ecbc35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a479c4a15f0bf4814fedb506005aea2dff2deec5739ef6a2081c6cdd72ecbc35->enter($__internal_a479c4a15f0bf4814fedb506005aea2dff2deec5739ef6a2081c6cdd72ecbc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_327dc44997367526cc26f12a72f0239c01ec210ca3b5e39f1385516208bcdbd9->leave($__internal_327dc44997367526cc26f12a72f0239c01ec210ca3b5e39f1385516208bcdbd9_prof);

        
        $__internal_a479c4a15f0bf4814fedb506005aea2dff2deec5739ef6a2081c6cdd72ecbc35->leave($__internal_a479c4a15f0bf4814fedb506005aea2dff2deec5739ef6a2081c6cdd72ecbc35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b1cd87b3a0280a6086a2409fb2a99ee31cee420d2517ef988900422b1c7c3ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b1cd87b3a0280a6086a2409fb2a99ee31cee420d2517ef988900422b1c7c3ec->enter($__internal_8b1cd87b3a0280a6086a2409fb2a99ee31cee420d2517ef988900422b1c7c3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_25df7cd56b6effd1b8b79e4dc47b7681b9466c6e0cd8e9c71a709425e245e673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25df7cd56b6effd1b8b79e4dc47b7681b9466c6e0cd8e9c71a709425e245e673->enter($__internal_25df7cd56b6effd1b8b79e4dc47b7681b9466c6e0cd8e9c71a709425e245e673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_25df7cd56b6effd1b8b79e4dc47b7681b9466c6e0cd8e9c71a709425e245e673->leave($__internal_25df7cd56b6effd1b8b79e4dc47b7681b9466c6e0cd8e9c71a709425e245e673_prof);

        
        $__internal_8b1cd87b3a0280a6086a2409fb2a99ee31cee420d2517ef988900422b1c7c3ec->leave($__internal_8b1cd87b3a0280a6086a2409fb2a99ee31cee420d2517ef988900422b1c7c3ec_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_480e58bd33f3d8801ff9975e63205173843f4438ed5954dd2211395c6fbe78e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_480e58bd33f3d8801ff9975e63205173843f4438ed5954dd2211395c6fbe78e8->enter($__internal_480e58bd33f3d8801ff9975e63205173843f4438ed5954dd2211395c6fbe78e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_71ef5b743042c8b991260507c5942a2527fa9bf7f2677da382cccc992b2e285c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71ef5b743042c8b991260507c5942a2527fa9bf7f2677da382cccc992b2e285c->enter($__internal_71ef5b743042c8b991260507c5942a2527fa9bf7f2677da382cccc992b2e285c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_71ef5b743042c8b991260507c5942a2527fa9bf7f2677da382cccc992b2e285c->leave($__internal_71ef5b743042c8b991260507c5942a2527fa9bf7f2677da382cccc992b2e285c_prof);

        
        $__internal_480e58bd33f3d8801ff9975e63205173843f4438ed5954dd2211395c6fbe78e8->leave($__internal_480e58bd33f3d8801ff9975e63205173843f4438ed5954dd2211395c6fbe78e8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60b497f65d4ebfa735605f47775ef25db5f82897cf71bf3955c49f6c84b5ef2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b497f65d4ebfa735605f47775ef25db5f82897cf71bf3955c49f6c84b5ef2b->enter($__internal_60b497f65d4ebfa735605f47775ef25db5f82897cf71bf3955c49f6c84b5ef2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c5412ec5b87c45cae86ec1f932e0f8362d06e6adffcb9b1a74d6f2aef910b237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5412ec5b87c45cae86ec1f932e0f8362d06e6adffcb9b1a74d6f2aef910b237->enter($__internal_c5412ec5b87c45cae86ec1f932e0f8362d06e6adffcb9b1a74d6f2aef910b237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_c5412ec5b87c45cae86ec1f932e0f8362d06e6adffcb9b1a74d6f2aef910b237->leave($__internal_c5412ec5b87c45cae86ec1f932e0f8362d06e6adffcb9b1a74d6f2aef910b237_prof);

        
        $__internal_60b497f65d4ebfa735605f47775ef25db5f82897cf71bf3955c49f6c84b5ef2b->leave($__internal_60b497f65d4ebfa735605f47775ef25db5f82897cf71bf3955c49f6c84b5ef2b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/vagrant/code/cv.dev/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
