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
        $__internal_eaff8cfe2afb4d368b29deba3b810c6ec232882ee8aaac680025bcf14e6782e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaff8cfe2afb4d368b29deba3b810c6ec232882ee8aaac680025bcf14e6782e9->enter($__internal_eaff8cfe2afb4d368b29deba3b810c6ec232882ee8aaac680025bcf14e6782e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Pages:oneVisite.html.twig"));

        $__internal_64270c04b7f8325a6d3113ccae4942019d3258f7a1a8ea7fb50dd13ce7af581b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64270c04b7f8325a6d3113ccae4942019d3258f7a1a8ea7fb50dd13ce7af581b->enter($__internal_64270c04b7f8325a6d3113ccae4942019d3258f7a1a8ea7fb50dd13ce7af581b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GSBPlatformBundle:Pages:oneVisite.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaff8cfe2afb4d368b29deba3b810c6ec232882ee8aaac680025bcf14e6782e9->leave($__internal_eaff8cfe2afb4d368b29deba3b810c6ec232882ee8aaac680025bcf14e6782e9_prof);

        
        $__internal_64270c04b7f8325a6d3113ccae4942019d3258f7a1a8ea7fb50dd13ce7af581b->leave($__internal_64270c04b7f8325a6d3113ccae4942019d3258f7a1a8ea7fb50dd13ce7af581b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b27a0754de2e0abad680044933abfed1030995195a214c87a5c321c7ccc4ddd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27a0754de2e0abad680044933abfed1030995195a214c87a5c321c7ccc4ddd9->enter($__internal_b27a0754de2e0abad680044933abfed1030995195a214c87a5c321c7ccc4ddd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_884ac4ef473f7c9ef2ef8c0f37051f1d5488898137fb544b314bbebd829f7e02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884ac4ef473f7c9ef2ef8c0f37051f1d5488898137fb544b314bbebd829f7e02->enter($__internal_884ac4ef473f7c9ef2ef8c0f37051f1d5488898137fb544b314bbebd829f7e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "- Index
";
        
        $__internal_884ac4ef473f7c9ef2ef8c0f37051f1d5488898137fb544b314bbebd829f7e02->leave($__internal_884ac4ef473f7c9ef2ef8c0f37051f1d5488898137fb544b314bbebd829f7e02_prof);

        
        $__internal_b27a0754de2e0abad680044933abfed1030995195a214c87a5c321c7ccc4ddd9->leave($__internal_b27a0754de2e0abad680044933abfed1030995195a214c87a5c321c7ccc4ddd9_prof);

    }

    // line 7
    public function block_nomPage($context, array $blocks = array())
    {
        $__internal_555a4c51692422aacc22d2530cc5d678abe282f4ab50bc3b39f72601013bf14b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_555a4c51692422aacc22d2530cc5d678abe282f4ab50bc3b39f72601013bf14b->enter($__internal_555a4c51692422aacc22d2530cc5d678abe282f4ab50bc3b39f72601013bf14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        $__internal_58e0339d236f8057f158964f01414194766eb0bef5adf6ef6871cf63633a8e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58e0339d236f8057f158964f01414194766eb0bef5adf6ef6871cf63633a8e53->enter($__internal_58e0339d236f8057f158964f01414194766eb0bef5adf6ef6871cf63633a8e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nomPage"));

        // line 8
        echo "    Visite du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["rapport"] ?? $this->getContext($context, "rapport")), "date", array()), "Y-m-d"), "html", null, true);
        echo "
";
        
        $__internal_58e0339d236f8057f158964f01414194766eb0bef5adf6ef6871cf63633a8e53->leave($__internal_58e0339d236f8057f158964f01414194766eb0bef5adf6ef6871cf63633a8e53_prof);

        
        $__internal_555a4c51692422aacc22d2530cc5d678abe282f4ab50bc3b39f72601013bf14b->leave($__internal_555a4c51692422aacc22d2530cc5d678abe282f4ab50bc3b39f72601013bf14b_prof);

    }

    // line 11
    public function block_card($context, array $blocks = array())
    {
        $__internal_7ed22bf8332c8c3026ffa1b2eaad552bf57308ed8bbd889a10b7095d2310d81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed22bf8332c8c3026ffa1b2eaad552bf57308ed8bbd889a10b7095d2310d81c->enter($__internal_7ed22bf8332c8c3026ffa1b2eaad552bf57308ed8bbd889a10b7095d2310d81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

        $__internal_39def11099e9ab828db0b6f1024d7870d56da68a1b47652cb5a9a8943d064c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39def11099e9ab828db0b6f1024d7870d56da68a1b47652cb5a9a8943d064c18->enter($__internal_39def11099e9ab828db0b6f1024d7870d56da68a1b47652cb5a9a8943d064c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "card"));

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
        
        $__internal_39def11099e9ab828db0b6f1024d7870d56da68a1b47652cb5a9a8943d064c18->leave($__internal_39def11099e9ab828db0b6f1024d7870d56da68a1b47652cb5a9a8943d064c18_prof);

        
        $__internal_7ed22bf8332c8c3026ffa1b2eaad552bf57308ed8bbd889a10b7095d2310d81c->leave($__internal_7ed22bf8332c8c3026ffa1b2eaad552bf57308ed8bbd889a10b7095d2310d81c_prof);

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
