<?php

/* GSBPlatformBundle:Pages:oneVisite.html.twig */
class __TwigTemplate_f6d490ca8616b16c8dfda1c5ee81b1f8ef2765baf40d4906378240e2c94441fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("GSBPlatformBundle::layout.html.twig", "GSBPlatformBundle:Pages:oneVisite.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nomPage' => array($this, 'block_nomPage'),
            'card' => array($this, 'block_card'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "GSBPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d8676bd9fac666936324003eab8f98e16fcae19e007ccd673f1ecd487615ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d8676bd9fac666936324003eab8f98e16fcae19e007ccd673f1ecd487615ff1->enter($__internal_1d8676bd9fac666936324003eab8f98e16fcae19e007ccd673f1ecd487615ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Pages:oneVisite.html.twig"));

        $__internal_dc2adc0c06bf11669fc9c5c40fd1e39f0eb33374a24b16899045dde8490be3d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc2adc0c06bf11669fc9c5c40fd1e39f0eb33374a24b16899045dde8490be3d8->enter($__internal_dc2adc0c06bf11669fc9c5c40fd1e39f0eb33374a24b16899045dde8490be3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Pages:oneVisite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d8676bd9fac666936324003eab8f98e16fcae19e007ccd673f1ecd487615ff1->leave($__internal_1d8676bd9fac666936324003eab8f98e16fcae19e007ccd673f1ecd487615ff1_prof);

        
        $__internal_dc2adc0c06bf11669fc9c5c40fd1e39f0eb33374a24b16899045dde8490be3d8->leave($__internal_dc2adc0c06bf11669fc9c5c40fd1e39f0eb33374a24b16899045dde8490be3d8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2faea7a78fe277244d226f446d66c0f7d666d52515e6221cf74677ff8ef7cd25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2faea7a78fe277244d226f446d66c0f7d666d52515e6221cf74677ff8ef7cd25->enter($__internal_2faea7a78fe277244d226f446d66c0f7d666d52515e6221cf74677ff8ef7cd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88be8afd2b8fd33f118e6a565a9fbaafdcc10c281e123cec8a3488e9e04879e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88be8afd2b8fd33f118e6a565a9fbaafdcc10c281e123cec8a3488e9e04879e9->enter($__internal_88be8afd2b8fd33f118e6a565a9fbaafdcc10c281e123cec8a3488e9e04879e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "- Index
";
        
        $__internal_88be8afd2b8fd33f118e6a565a9fbaafdcc10c281e123cec8a3488e9e04879e9->leave($__internal_88be8afd2b8fd33f118e6a565a9fbaafdcc10c281e123cec8a3488e9e04879e9_prof);

        
        $__internal_2faea7a78fe277244d226f446d66c0f7d666d52515e6221cf74677ff8ef7cd25->leave($__internal_2faea7a78fe277244d226f446d66c0f7d666d52515e6221cf74677ff8ef7cd25_prof);

    }

    // line 7
    public function block_nomPage($context, array $blocks = array())
    {
        $__internal_ad309107fb0ff8370f9b63d97d55b8053089e1d9b8caa6bde1b4db85271d388a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad309107fb0ff8370f9b63d97d55b8053089e1d9b8caa6bde1b4db85271d388a->enter($__internal_ad309107fb0ff8370f9b63d97d55b8053089e1d9b8caa6bde1b4db85271d388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        $__internal_6b7cda9373945d108422459602585871da302a526e668875a295afc74485519a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7cda9373945d108422459602585871da302a526e668875a295afc74485519a->enter($__internal_6b7cda9373945d108422459602585871da302a526e668875a295afc74485519a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        // line 8
        echo "    Visite du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "date", array()), "Y-m-d"), "html", null, true);
        echo "
";
        
        $__internal_6b7cda9373945d108422459602585871da302a526e668875a295afc74485519a->leave($__internal_6b7cda9373945d108422459602585871da302a526e668875a295afc74485519a_prof);

        
        $__internal_ad309107fb0ff8370f9b63d97d55b8053089e1d9b8caa6bde1b4db85271d388a->leave($__internal_ad309107fb0ff8370f9b63d97d55b8053089e1d9b8caa6bde1b4db85271d388a_prof);

    }

    // line 11
    public function block_card($context, array $blocks = array())
    {
        $__internal_0d4edc908e711eb1908c4ac44559086e3dc5d895d0543a43bcabc2b3b41abde3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d4edc908e711eb1908c4ac44559086e3dc5d895d0543a43bcabc2b3b41abde3->enter($__internal_0d4edc908e711eb1908c4ac44559086e3dc5d895d0543a43bcabc2b3b41abde3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        $__internal_87f4aaf86f580aeb0edd8d80e31e2fd60b1017e37e7dd20bf0ea5f6a710f4dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87f4aaf86f580aeb0edd8d80e31e2fd60b1017e37e7dd20bf0ea5f6a710f4dba->enter($__internal_87f4aaf86f580aeb0edd8d80e31e2fd60b1017e37e7dd20bf0ea5f6a710f4dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        // line 12
        echo "
    <div class=\"grid3 grid--btn \">
        <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("gsb_platform_visites_all");
        echo "\" class=\"btn btn--view\">Retour à la liste</a>
        <a href=\"#\" class=\"btn btn--modifier\">Modifier</a>
        <a href=\"#\" class=\"btn btn--delete\">Supprimer</a>
    </div>

    <table class=\"table table--visite\">
        <thead>
        <th width=\"25%\" align=\"right\"></th>
        <th width=\"25%\"></th>
        </thead>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Visiteur :</span></td>
            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "visiteur", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "visiteur", array()), "prenom", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Medecin :</span></td>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "medecin", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "medecin", array()), "prenom", array()), "html", null, true);
        echo " ";
        if (($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "medecinRemplacant", array()) != null)) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "medecin", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "medecin", array()), "prenom", array()), "html", null, true);
            echo " ";
        }
        echo "</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Date :</span></td>
            <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "date", array()), "Y-m-d"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Motif :</span></td>
            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "motif", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Bilan :</span></td>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "bilan", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Documentation : </span></td>
            <td>";
        // line 46
        echo ((($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "documentation", array()) == 1)) ? ("oui") : ("non"));
        echo "</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Medicament";
        // line 49
        echo ((($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "medicament2", array()) != null)) ? ("s") : (""));
        echo "  :</span></td>
            <td>
                <ul>
                    <li>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "medicament1", array()), "libelle", array()), "html", null, true);
        echo "</li>
                    ";
        // line 53
        if (($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "medicament2", array()) != null)) {
            // line 54
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "medicament2", array()), "libelle", array()), "html", null, true);
            echo "</li>
                    ";
        }
        // line 56
        echo "                </ul>
            </td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Echantillons  :</span></td>
            <td>
                <ul>
                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "echantillons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["echantillon"]) {
            // line 64
            echo "                        <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["echantillon"], "medicament", array()), "libelle", array()), "html", null, true);
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['echantillon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                </ul>
            </td>
        </tr>
    </table>

";
        
        $__internal_87f4aaf86f580aeb0edd8d80e31e2fd60b1017e37e7dd20bf0ea5f6a710f4dba->leave($__internal_87f4aaf86f580aeb0edd8d80e31e2fd60b1017e37e7dd20bf0ea5f6a710f4dba_prof);

        
        $__internal_0d4edc908e711eb1908c4ac44559086e3dc5d895d0543a43bcabc2b3b41abde3->leave($__internal_0d4edc908e711eb1908c4ac44559086e3dc5d895d0543a43bcabc2b3b41abde3_prof);

    }

    public function getTemplateName()
    {
        return "GSBPlatformBundle:Pages:oneVisite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 66,  198 => 64,  194 => 63,  185 => 56,  179 => 54,  177 => 53,  173 => 52,  167 => 49,  161 => 46,  154 => 42,  147 => 38,  140 => 34,  123 => 30,  114 => 26,  99 => 14,  95 => 12,  86 => 11,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"GSBPlatformBundle::layout.html.twig\" %}

{% block title %}
    {{ parent() }}- Index
{% endblock %}

{% block nomPage %}
    Visite du {{ rapport.date | date('Y-m-d') }}
{% endblock %}

{% block card %}

    <div class=\"grid3 grid--btn \">
        <a href=\"{{ path('gsb_platform_visites_all') }}\" class=\"btn btn--view\">Retour à la liste</a>
        <a href=\"#\" class=\"btn btn--modifier\">Modifier</a>
        <a href=\"#\" class=\"btn btn--delete\">Supprimer</a>
    </div>

    <table class=\"table table--visite\">
        <thead>
        <th width=\"25%\" align=\"right\"></th>
        <th width=\"25%\"></th>
        </thead>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Visiteur :</span></td>
            <td>{{ rapport.visiteur.nom }} {{ rapport.visiteur.prenom }}</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Medecin :</span></td>
            <td>{{ rapport.medecin.nom }} {{ rapport.medecin.prenom }} {% if(rapport.medecinRemplacant != null) %} - {{ rapport.medecin.nom }} {{ rapport.medecin.prenom }} {% endif %}</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Date :</span></td>
            <td>{{ rapport.date | date('Y-m-d') }}</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Motif :</span></td>
            <td>{{ rapport.motif }}</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Bilan :</span></td>
            <td>{{ rapport.bilan }}</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Documentation : </span></td>
            <td>{{ (rapport.documentation == 1)? 'oui' : 'non' }}</td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Medicament{{ (rapport.medicament2 != null) ? 's' }}  :</span></td>
            <td>
                <ul>
                    <li>{{ rapport.medicament1.libelle }}</li>
                    {% if(rapport.medicament2) != null %}
                        <li>{{ rapport.medicament2.libelle }}</li>
                    {% endif %}
                </ul>
            </td>
        </tr>
        <tr>
            <td align=\"right\"><span class=\"table--visite__libelle\">Echantillons  :</span></td>
            <td>
                <ul>
                    {% for echantillon in rapport.echantillons %}
                        <li>{{ echantillon.medicament.libelle }}</li>
                    {% endfor %}
                </ul>
            </td>
        </tr>
    </table>

{% endblock %}", "GSBPlatformBundle:Pages:oneVisite.html.twig", "/Applications/MAMP/htdocs/BTS/PPE4/GSB_Symfony/GSB_SymfonyAlex/src/GSB/PlatformBundle/Resources/views/Pages/oneVisite.html.twig");
    }
}
