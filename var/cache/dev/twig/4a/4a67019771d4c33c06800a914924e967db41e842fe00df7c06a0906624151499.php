<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7f43ea1cf818a6d4f0121ef30a7a2c921525d97853eacc3939adbc7e655f5e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f43ea1cf818a6d4f0121ef30a7a2c921525d97853eacc3939adbc7e655f5e3a->enter($__internal_7f43ea1cf818a6d4f0121ef30a7a2c921525d97853eacc3939adbc7e655f5e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_c4ce634e19b8499a21000f50f8c6db13fc47c3bc4beed5831a838abc34833321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ce634e19b8499a21000f50f8c6db13fc47c3bc4beed5831a838abc34833321->enter($__internal_c4ce634e19b8499a21000f50f8c6db13fc47c3bc4beed5831a838abc34833321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f43ea1cf818a6d4f0121ef30a7a2c921525d97853eacc3939adbc7e655f5e3a->leave($__internal_7f43ea1cf818a6d4f0121ef30a7a2c921525d97853eacc3939adbc7e655f5e3a_prof);

        
        $__internal_c4ce634e19b8499a21000f50f8c6db13fc47c3bc4beed5831a838abc34833321->leave($__internal_c4ce634e19b8499a21000f50f8c6db13fc47c3bc4beed5831a838abc34833321_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62f71373210cdc091590582d7b45b94a45e3f3ecfd26685320d035c5e31b4cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62f71373210cdc091590582d7b45b94a45e3f3ecfd26685320d035c5e31b4cde->enter($__internal_62f71373210cdc091590582d7b45b94a45e3f3ecfd26685320d035c5e31b4cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5a4fda35b98dc8408f5d803b87ae3ae42efa650bdd5c16006b3ceda25f388bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a4fda35b98dc8408f5d803b87ae3ae42efa650bdd5c16006b3ceda25f388bf9->enter($__internal_5a4fda35b98dc8408f5d803b87ae3ae42efa650bdd5c16006b3ceda25f388bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_5a4fda35b98dc8408f5d803b87ae3ae42efa650bdd5c16006b3ceda25f388bf9->leave($__internal_5a4fda35b98dc8408f5d803b87ae3ae42efa650bdd5c16006b3ceda25f388bf9_prof);

        
        $__internal_62f71373210cdc091590582d7b45b94a45e3f3ecfd26685320d035c5e31b4cde->leave($__internal_62f71373210cdc091590582d7b45b94a45e3f3ecfd26685320d035c5e31b4cde_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1899fef034d1a146c616fb752cd18b2f4c173f4703608e49cac72ec25223d971 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1899fef034d1a146c616fb752cd18b2f4c173f4703608e49cac72ec25223d971->enter($__internal_1899fef034d1a146c616fb752cd18b2f4c173f4703608e49cac72ec25223d971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fd65316353ea0dcd9722ea854c5ca623517441291e64b81ed0d147de00e56db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd65316353ea0dcd9722ea854c5ca623517441291e64b81ed0d147de00e56db8->enter($__internal_fd65316353ea0dcd9722ea854c5ca623517441291e64b81ed0d147de00e56db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fd65316353ea0dcd9722ea854c5ca623517441291e64b81ed0d147de00e56db8->leave($__internal_fd65316353ea0dcd9722ea854c5ca623517441291e64b81ed0d147de00e56db8_prof);

        
        $__internal_1899fef034d1a146c616fb752cd18b2f4c173f4703608e49cac72ec25223d971->leave($__internal_1899fef034d1a146c616fb752cd18b2f4c173f4703608e49cac72ec25223d971_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5cfbe7d0270cd99681e2e77f02b374a79eb0ce1b76013ec6d604b576448495c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5cfbe7d0270cd99681e2e77f02b374a79eb0ce1b76013ec6d604b576448495c->enter($__internal_e5cfbe7d0270cd99681e2e77f02b374a79eb0ce1b76013ec6d604b576448495c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c74e8ed9dc4a8d957772352cde417b9cd8daebe87548d61437c05a552be4dc93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74e8ed9dc4a8d957772352cde417b9cd8daebe87548d61437c05a552be4dc93->enter($__internal_c74e8ed9dc4a8d957772352cde417b9cd8daebe87548d61437c05a552be4dc93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_c74e8ed9dc4a8d957772352cde417b9cd8daebe87548d61437c05a552be4dc93->leave($__internal_c74e8ed9dc4a8d957772352cde417b9cd8daebe87548d61437c05a552be4dc93_prof);

        
        $__internal_e5cfbe7d0270cd99681e2e77f02b374a79eb0ce1b76013ec6d604b576448495c->leave($__internal_e5cfbe7d0270cd99681e2e77f02b374a79eb0ce1b76013ec6d604b576448495c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/vagrant/code/cv.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
