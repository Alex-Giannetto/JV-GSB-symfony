<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_6f83cfefed1ad725ac555d6303d120f38c2394a92ee25820f989b9b3ea283cef extends Twig_Template
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
        $__internal_5f101fccf003bb4ae6e305ec7f186bccee4dbcc2ca17aa1beab0c44875c57c82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f101fccf003bb4ae6e305ec7f186bccee4dbcc2ca17aa1beab0c44875c57c82->enter($__internal_5f101fccf003bb4ae6e305ec7f186bccee4dbcc2ca17aa1beab0c44875c57c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_aabed116b3710ef85fb0c0b6a0f000be13c8f9b806bdd78f4ec3564fb3dc961c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aabed116b3710ef85fb0c0b6a0f000be13c8f9b806bdd78f4ec3564fb3dc961c->enter($__internal_aabed116b3710ef85fb0c0b6a0f000be13c8f9b806bdd78f4ec3564fb3dc961c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5f101fccf003bb4ae6e305ec7f186bccee4dbcc2ca17aa1beab0c44875c57c82->leave($__internal_5f101fccf003bb4ae6e305ec7f186bccee4dbcc2ca17aa1beab0c44875c57c82_prof);

        
        $__internal_aabed116b3710ef85fb0c0b6a0f000be13c8f9b806bdd78f4ec3564fb3dc961c->leave($__internal_aabed116b3710ef85fb0c0b6a0f000be13c8f9b806bdd78f4ec3564fb3dc961c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c96e86f4c05cc210a917092664653fa775ba85a0641c269d270ef1d8b6cc2ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c96e86f4c05cc210a917092664653fa775ba85a0641c269d270ef1d8b6cc2ac6->enter($__internal_c96e86f4c05cc210a917092664653fa775ba85a0641c269d270ef1d8b6cc2ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b9722fbc004edc96fbdeb1297a1daf46eeee588334be14c087473be51755daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9722fbc004edc96fbdeb1297a1daf46eeee588334be14c087473be51755daa->enter($__internal_5b9722fbc004edc96fbdeb1297a1daf46eeee588334be14c087473be51755daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5b9722fbc004edc96fbdeb1297a1daf46eeee588334be14c087473be51755daa->leave($__internal_5b9722fbc004edc96fbdeb1297a1daf46eeee588334be14c087473be51755daa_prof);

        
        $__internal_c96e86f4c05cc210a917092664653fa775ba85a0641c269d270ef1d8b6cc2ac6->leave($__internal_c96e86f4c05cc210a917092664653fa775ba85a0641c269d270ef1d8b6cc2ac6_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_61e02f41ac9f9c15f4ab1c7f85ff619e8b11b01c7d7b963f0493e11619483543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e02f41ac9f9c15f4ab1c7f85ff619e8b11b01c7d7b963f0493e11619483543->enter($__internal_61e02f41ac9f9c15f4ab1c7f85ff619e8b11b01c7d7b963f0493e11619483543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6ae457009e96f048659f77bd5955eb5d4ded02afc419b98045575bebb0f88790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ae457009e96f048659f77bd5955eb5d4ded02afc419b98045575bebb0f88790->enter($__internal_6ae457009e96f048659f77bd5955eb5d4ded02afc419b98045575bebb0f88790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6ae457009e96f048659f77bd5955eb5d4ded02afc419b98045575bebb0f88790->leave($__internal_6ae457009e96f048659f77bd5955eb5d4ded02afc419b98045575bebb0f88790_prof);

        
        $__internal_61e02f41ac9f9c15f4ab1c7f85ff619e8b11b01c7d7b963f0493e11619483543->leave($__internal_61e02f41ac9f9c15f4ab1c7f85ff619e8b11b01c7d7b963f0493e11619483543_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5706df4ca89e81bc356d633d4a27128f8e844c4bef0e55cd5e5672082ab8f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5706df4ca89e81bc356d633d4a27128f8e844c4bef0e55cd5e5672082ab8f16->enter($__internal_c5706df4ca89e81bc356d633d4a27128f8e844c4bef0e55cd5e5672082ab8f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_051bd9059521624242ba612adfb9882e10c16f56c4ce3c1ac228db97baba4009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_051bd9059521624242ba612adfb9882e10c16f56c4ce3c1ac228db97baba4009->enter($__internal_051bd9059521624242ba612adfb9882e10c16f56c4ce3c1ac228db97baba4009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_051bd9059521624242ba612adfb9882e10c16f56c4ce3c1ac228db97baba4009->leave($__internal_051bd9059521624242ba612adfb9882e10c16f56c4ce3c1ac228db97baba4009_prof);

        
        $__internal_c5706df4ca89e81bc356d633d4a27128f8e844c4bef0e55cd5e5672082ab8f16->leave($__internal_c5706df4ca89e81bc356d633d4a27128f8e844c4bef0e55cd5e5672082ab8f16_prof);

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
", "@Twig/layout.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
