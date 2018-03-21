<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0638a19ad3582a4374291c7e61b1d9579cf8dc93f9751f0e3e53e2e297a04d00 extends Twig_Template
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
        $__internal_5623db85fb53755dcae0c4320a4821efb0f1e9dde4d11332fee89e5c146b8c9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5623db85fb53755dcae0c4320a4821efb0f1e9dde4d11332fee89e5c146b8c9a->enter($__internal_5623db85fb53755dcae0c4320a4821efb0f1e9dde4d11332fee89e5c146b8c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1a088b0fa4ee4916cf41ef2a15225027a13b31464b25313ad3f1b44481f52db6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a088b0fa4ee4916cf41ef2a15225027a13b31464b25313ad3f1b44481f52db6->enter($__internal_1a088b0fa4ee4916cf41ef2a15225027a13b31464b25313ad3f1b44481f52db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5623db85fb53755dcae0c4320a4821efb0f1e9dde4d11332fee89e5c146b8c9a->leave($__internal_5623db85fb53755dcae0c4320a4821efb0f1e9dde4d11332fee89e5c146b8c9a_prof);

        
        $__internal_1a088b0fa4ee4916cf41ef2a15225027a13b31464b25313ad3f1b44481f52db6->leave($__internal_1a088b0fa4ee4916cf41ef2a15225027a13b31464b25313ad3f1b44481f52db6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01abc5f0734f391934306d936a6f5c8b0bd720dd290380e258c457f645487484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01abc5f0734f391934306d936a6f5c8b0bd720dd290380e258c457f645487484->enter($__internal_01abc5f0734f391934306d936a6f5c8b0bd720dd290380e258c457f645487484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5a3935bffec1a36418cd85b3e3e2257ecda1dea3fb545d06d121f52ebc9e88d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a3935bffec1a36418cd85b3e3e2257ecda1dea3fb545d06d121f52ebc9e88d->enter($__internal_f5a3935bffec1a36418cd85b3e3e2257ecda1dea3fb545d06d121f52ebc9e88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f5a3935bffec1a36418cd85b3e3e2257ecda1dea3fb545d06d121f52ebc9e88d->leave($__internal_f5a3935bffec1a36418cd85b3e3e2257ecda1dea3fb545d06d121f52ebc9e88d_prof);

        
        $__internal_01abc5f0734f391934306d936a6f5c8b0bd720dd290380e258c457f645487484->leave($__internal_01abc5f0734f391934306d936a6f5c8b0bd720dd290380e258c457f645487484_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fda872f75bf5c70fec1b39a7205936233a94aca4b131a8629a0779319fc879f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fda872f75bf5c70fec1b39a7205936233a94aca4b131a8629a0779319fc879f->enter($__internal_5fda872f75bf5c70fec1b39a7205936233a94aca4b131a8629a0779319fc879f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8b41f5f8d0a81f1e5edaf55a77f2865fa175f8524820fdaa03cb3a23cb9b76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b41f5f8d0a81f1e5edaf55a77f2865fa175f8524820fdaa03cb3a23cb9b76b->enter($__internal_e8b41f5f8d0a81f1e5edaf55a77f2865fa175f8524820fdaa03cb3a23cb9b76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e8b41f5f8d0a81f1e5edaf55a77f2865fa175f8524820fdaa03cb3a23cb9b76b->leave($__internal_e8b41f5f8d0a81f1e5edaf55a77f2865fa175f8524820fdaa03cb3a23cb9b76b_prof);

        
        $__internal_5fda872f75bf5c70fec1b39a7205936233a94aca4b131a8629a0779319fc879f->leave($__internal_5fda872f75bf5c70fec1b39a7205936233a94aca4b131a8629a0779319fc879f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_299403a3034bee3d40c9624933700eb0dc4345251ecafec50810e3f24eff4281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299403a3034bee3d40c9624933700eb0dc4345251ecafec50810e3f24eff4281->enter($__internal_299403a3034bee3d40c9624933700eb0dc4345251ecafec50810e3f24eff4281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_186cbbb55107411411e2ab655c235d526b5434687cbdfd257cae48eee333be77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_186cbbb55107411411e2ab655c235d526b5434687cbdfd257cae48eee333be77->enter($__internal_186cbbb55107411411e2ab655c235d526b5434687cbdfd257cae48eee333be77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_186cbbb55107411411e2ab655c235d526b5434687cbdfd257cae48eee333be77->leave($__internal_186cbbb55107411411e2ab655c235d526b5434687cbdfd257cae48eee333be77_prof);

        
        $__internal_299403a3034bee3d40c9624933700eb0dc4345251ecafec50810e3f24eff4281->leave($__internal_299403a3034bee3d40c9624933700eb0dc4345251ecafec50810e3f24eff4281_prof);

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
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_Symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
