<?php

/* default/blog.html.twig */
class __TwigTemplate_91d4c12b87aeea770e31b20232b4aa2e1d1d5a369421c8d2f6a7cf62146275c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/blog.html.twig", 1);
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
        $__internal_4d7fdf1eabe6b4661278db5777c78e892350474d39364667f997131a98f678fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7fdf1eabe6b4661278db5777c78e892350474d39364667f997131a98f678fc->enter($__internal_4d7fdf1eabe6b4661278db5777c78e892350474d39364667f997131a98f678fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/blog.html.twig"));

        $__internal_7ef28772f6c328049eb04f2f42095809d4aecc85c4babb77c975df26521e2fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ef28772f6c328049eb04f2f42095809d4aecc85c4babb77c975df26521e2fe8->enter($__internal_7ef28772f6c328049eb04f2f42095809d4aecc85c4babb77c975df26521e2fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7fdf1eabe6b4661278db5777c78e892350474d39364667f997131a98f678fc->leave($__internal_4d7fdf1eabe6b4661278db5777c78e892350474d39364667f997131a98f678fc_prof);

        
        $__internal_7ef28772f6c328049eb04f2f42095809d4aecc85c4babb77c975df26521e2fe8->leave($__internal_7ef28772f6c328049eb04f2f42095809d4aecc85c4babb77c975df26521e2fe8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1902c52e3ddc11fd26bc05358b013b94c16fc145ab495ee72c6e19e4086690fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1902c52e3ddc11fd26bc05358b013b94c16fc145ab495ee72c6e19e4086690fb->enter($__internal_1902c52e3ddc11fd26bc05358b013b94c16fc145ab495ee72c6e19e4086690fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d1cff6d552d5e492e46b339bd08e0d23905615a276e53b48181e1dff9fdd21b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1cff6d552d5e492e46b339bd08e0d23905615a276e53b48181e1dff9fdd21b3->enter($__internal_d1cff6d552d5e492e46b339bd08e0d23905615a276e53b48181e1dff9fdd21b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
    <div class=\"col-md-1\"></div>
    <div class=\"col-md-6\">
        <div id=\"postlist\">
            <div class=\"panel\">
                <div class=\"panel-heading\">
                    <div class=\"text-center\">
                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                <h3 class=\"pull-left\">Compte-rendu de stage 1</h3>
                            </div>
                            <div class=\"col-sm-3\">
                                <h4 class=\"pull-right\">
                                    <small><em>14 Juin 2017<br>12:30:46</em></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body\">
                    Bonjour à tous !   Voici donc le premier article concernant mon stage à l’étranger dans une entreprise américaine. L’entreprise BMT Translations Inc. est gérée par deux personnes : le CEO Maria Cardoso et le Vice CEO Bruno François. Son siège social... <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("stage1");
        echo "\">Lire Plus</a>
                </div>

                <div class=\"panel-footer\">
                    <span class=\"label label-default\">Stage</span> <span class=\"label label-default\">Compte-Rendu</span> <span class=\"label label-default\">Juin</span>
                </div>
            </div>

            <div class=\"panel\">
                <div class=\"panel-heading\">
                    <div class=\"text-center\">
                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                <h3 class=\"pull-left\">Certification Google Analytics</h3>
                            </div>
                            <div class=\"col-sm-3\">
                                <h4 class=\"pull-right\">
                                    <small><em>20 Mai 2017 18:30:23</em></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img alt=\"Image\" src=\"http://alexandre-doret.com/wp-content/uploads/2017/05/Certification-Google-Analytics.png\">
                    </a>
                    Voici ma Certification Google Analytics IQ... <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("analytics");
        echo "\">Lire Plus</a>
                </div>

                <div class=\"panel-footer\">
                    <span class=\"label label-default\">Certification</span> <span class=\"label label-default\">Google</span> <span class=\"label label-default\">Mai</span>
                </div>
            </div>
        </div>
        <div class=\"text-center\"><a href=\"#\" id=\"loadmore\" class=\"btn btn-primary\">Older Posts...</a></div>
    </div>
    <div class=\"col-md-1\"></div>
    <div class=\"col-md-3\">
    </div>
    <div class=\"col-md-1\">
    </div>
    </div>
    </div>
";
        
        $__internal_d1cff6d552d5e492e46b339bd08e0d23905615a276e53b48181e1dff9fdd21b3->leave($__internal_d1cff6d552d5e492e46b339bd08e0d23905615a276e53b48181e1dff9fdd21b3_prof);

        
        $__internal_1902c52e3ddc11fd26bc05358b013b94c16fc145ab495ee72c6e19e4086690fb->leave($__internal_1902c52e3ddc11fd26bc05358b013b94c16fc145ab495ee72c6e19e4086690fb_prof);

    }

    public function getTemplateName()
    {
        return "default/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 54,  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
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
        <div class=\"row\">
    <div class=\"col-md-1\"></div>
    <div class=\"col-md-6\">
        <div id=\"postlist\">
            <div class=\"panel\">
                <div class=\"panel-heading\">
                    <div class=\"text-center\">
                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                <h3 class=\"pull-left\">Compte-rendu de stage 1</h3>
                            </div>
                            <div class=\"col-sm-3\">
                                <h4 class=\"pull-right\">
                                    <small><em>14 Juin 2017<br>12:30:46</em></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body\">
                    Bonjour à tous !   Voici donc le premier article concernant mon stage à l’étranger dans une entreprise américaine. L’entreprise BMT Translations Inc. est gérée par deux personnes : le CEO Maria Cardoso et le Vice CEO Bruno François. Son siège social... <a href=\"{{ path('stage1') }}\">Lire Plus</a>
                </div>

                <div class=\"panel-footer\">
                    <span class=\"label label-default\">Stage</span> <span class=\"label label-default\">Compte-Rendu</span> <span class=\"label label-default\">Juin</span>
                </div>
            </div>

            <div class=\"panel\">
                <div class=\"panel-heading\">
                    <div class=\"text-center\">
                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                <h3 class=\"pull-left\">Certification Google Analytics</h3>
                            </div>
                            <div class=\"col-sm-3\">
                                <h4 class=\"pull-right\">
                                    <small><em>20 Mai 2017 18:30:23</em></small>
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"panel-body\">
                    <a href=\"#\" class=\"thumbnail\">
                        <img alt=\"Image\" src=\"http://alexandre-doret.com/wp-content/uploads/2017/05/Certification-Google-Analytics.png\">
                    </a>
                    Voici ma Certification Google Analytics IQ... <a href=\"{{ path('analytics') }}\">Lire Plus</a>
                </div>

                <div class=\"panel-footer\">
                    <span class=\"label label-default\">Certification</span> <span class=\"label label-default\">Google</span> <span class=\"label label-default\">Mai</span>
                </div>
            </div>
        </div>
        <div class=\"text-center\"><a href=\"#\" id=\"loadmore\" class=\"btn btn-primary\">Older Posts...</a></div>
    </div>
    <div class=\"col-md-1\"></div>
    <div class=\"col-md-3\">
    </div>
    <div class=\"col-md-1\">
    </div>
    </div>
    </div>
{% endblock body %}", "default/blog.html.twig", "/home/vagrant/code/cv.dev/app/Resources/views/default/blog.html.twig");
    }
}
