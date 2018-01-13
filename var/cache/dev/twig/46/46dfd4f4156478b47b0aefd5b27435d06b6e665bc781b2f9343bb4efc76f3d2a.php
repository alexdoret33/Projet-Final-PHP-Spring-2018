<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30949c9de93d86afb15269d43a0325aad923092d01a7a54a408d9485313d9881 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30949c9de93d86afb15269d43a0325aad923092d01a7a54a408d9485313d9881->enter($__internal_30949c9de93d86afb15269d43a0325aad923092d01a7a54a408d9485313d9881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9799f9ca507d8318108fa1ac98c42217d6211cb2f88c177abf7ff0084846c150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9799f9ca507d8318108fa1ac98c42217d6211cb2f88c177abf7ff0084846c150->enter($__internal_9799f9ca507d8318108fa1ac98c42217d6211cb2f88c177abf7ff0084846c150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_30949c9de93d86afb15269d43a0325aad923092d01a7a54a408d9485313d9881->leave($__internal_30949c9de93d86afb15269d43a0325aad923092d01a7a54a408d9485313d9881_prof);

        
        $__internal_9799f9ca507d8318108fa1ac98c42217d6211cb2f88c177abf7ff0084846c150->leave($__internal_9799f9ca507d8318108fa1ac98c42217d6211cb2f88c177abf7ff0084846c150_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0f0a314adc39edcb963a454cc47bca201b1538f7d905e415cb4509087647af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0f0a314adc39edcb963a454cc47bca201b1538f7d905e415cb4509087647af0->enter($__internal_d0f0a314adc39edcb963a454cc47bca201b1538f7d905e415cb4509087647af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_83dbb69f737e3a5220c62151caf4a57d396fad9136f8fc8b37c5149f89cd5654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83dbb69f737e3a5220c62151caf4a57d396fad9136f8fc8b37c5149f89cd5654->enter($__internal_83dbb69f737e3a5220c62151caf4a57d396fad9136f8fc8b37c5149f89cd5654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_83dbb69f737e3a5220c62151caf4a57d396fad9136f8fc8b37c5149f89cd5654->leave($__internal_83dbb69f737e3a5220c62151caf4a57d396fad9136f8fc8b37c5149f89cd5654_prof);

        
        $__internal_d0f0a314adc39edcb963a454cc47bca201b1538f7d905e415cb4509087647af0->leave($__internal_d0f0a314adc39edcb963a454cc47bca201b1538f7d905e415cb4509087647af0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_c99fb383f96cb8130c51869beb6574ad5eb892020af9b05b8d272d68817e2bd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c99fb383f96cb8130c51869beb6574ad5eb892020af9b05b8d272d68817e2bd2->enter($__internal_c99fb383f96cb8130c51869beb6574ad5eb892020af9b05b8d272d68817e2bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9ac1f66e34dbeed10b6f58dab471c7015ebde02f19485053f94d894fb736d3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac1f66e34dbeed10b6f58dab471c7015ebde02f19485053f94d894fb736d3ba->enter($__internal_9ac1f66e34dbeed10b6f58dab471c7015ebde02f19485053f94d894fb736d3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_9ac1f66e34dbeed10b6f58dab471c7015ebde02f19485053f94d894fb736d3ba->leave($__internal_9ac1f66e34dbeed10b6f58dab471c7015ebde02f19485053f94d894fb736d3ba_prof);

        
        $__internal_c99fb383f96cb8130c51869beb6574ad5eb892020af9b05b8d272d68817e2bd2->leave($__internal_c99fb383f96cb8130c51869beb6574ad5eb892020af9b05b8d272d68817e2bd2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec1d3a21a0cc5db95dff2b7846aa376fc9bbd01c2a8599ff550571aaf6e13867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1d3a21a0cc5db95dff2b7846aa376fc9bbd01c2a8599ff550571aaf6e13867->enter($__internal_ec1d3a21a0cc5db95dff2b7846aa376fc9bbd01c2a8599ff550571aaf6e13867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b6f20137cf5da7fc62617155f90240534f7577f39b8f65a704e81d00d2080b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b6f20137cf5da7fc62617155f90240534f7577f39b8f65a704e81d00d2080b2->enter($__internal_2b6f20137cf5da7fc62617155f90240534f7577f39b8f65a704e81d00d2080b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b6f20137cf5da7fc62617155f90240534f7577f39b8f65a704e81d00d2080b2->leave($__internal_2b6f20137cf5da7fc62617155f90240534f7577f39b8f65a704e81d00d2080b2_prof);

        
        $__internal_ec1d3a21a0cc5db95dff2b7846aa376fc9bbd01c2a8599ff550571aaf6e13867->leave($__internal_ec1d3a21a0cc5db95dff2b7846aa376fc9bbd01c2a8599ff550571aaf6e13867_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/vagrant/code/cv.dev/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
