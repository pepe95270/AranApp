<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_e665ae3fa4a5416f80ed324a71bb07f22136534787c8e7212a4a8b5ffdb521fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2959f2bab6cd10493ad713394e189a9d8e9a983bd04b32bdc318ad18a331648b = $this->env->getExtension("native_profiler");
        $__internal_2959f2bab6cd10493ad713394e189a9d8e9a983bd04b32bdc318ad18a331648b->enter($__internal_2959f2bab6cd10493ad713394e189a9d8e9a983bd04b32bdc318ad18a331648b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer votre profil</a>
<div class=\"fos_user_user_show\">
    <div style=\"float: right;\"> <img src=\"http://2.ip-164-132-99.eu/my_project/web/uploads/images/products/";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\" height=\"auto\" width=\"300\"> </div>
    <p><strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p><strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p><strong>Poste:</strong> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "poste", array()), "html", null, true);
        echo "</p>
    <p><strong>Nom:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>
    <p><strong>Nom de jeune fille:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nomjeunefille", array()), "html", null, true);
        echo "</p>
    <p><strong>Prenom:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
    <p><strong>Adresse:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>
    <p><strong>Code Postal:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "codepostal", array()), "html", null, true);
        echo "</p>
    <p><strong>Ville:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville", array()), "html", null, true);
        echo "</p>
    <p><strong>Téléphone fixe:</strong> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telfixe", array()), "html", null, true);
        echo "</p>
    <p><strong>Téléphone portable:</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telport", array()), "html", null, true);
        echo "</p>
    <p><strong>Date de naissance:</strong> ";
        // line 16
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "datenaissance", array()), "d/m/Y"), "html", null, true);
        echo "</p>
    <p><strong>Lieux et département de naissance:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lieunaissance", array()), "html", null, true);
        echo "</p>
    <p><strong>Numéro de sécurité social:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "secu", array()), "html", null, true);
        echo "</p>
    <p><strong>Nationalité:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nationalite", array()), "html", null, true);
        echo "</p>
    <p><strong>Numéro de carte de séjour:</strong> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cartedesejour", array()), "html", null, true);
        echo "</p>
    <p><strong>Délivrée par la préfecture de:</strong> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "delivreepar", array()), "html", null, true);
        echo "</p>
    <p><strong>Date d'expiration:</strong> ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateexpiration", array()), "d/m/Y"), "html", null, true);
        echo "</p>
    <p><strong>Situation Familiale:</strong> ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "situation", array()), "html", null, true);
        echo "</p>
    <p><strong>Bénéficiaire de l’obligation d’emploi selon l’article L. 5212-13 du Code du travail:</strong> ";
        // line 24
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "obligationemploi", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Langues parlées (+niveau entre parenthèse):</strong></p>
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["desc"]) {
            // line 27
            echo "        <p><strong>&nbsp&nbsp&nbsp-</strong> ";
            echo twig_escape_filter($this->env, $context["desc"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['desc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    <p><strong>Niveau d'étude:</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "niveauetude", array()), "html", null, true);
        echo "</p>
    <p><strong>Permis de conduire:</strong> ";
        // line 30
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "permis", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Voiture:</strong> ";
        // line 31
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "voiture", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Date d'obtention:</strong> ";
        // line 32
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateobtention", array()), "d/m/Y"), "html", null, true);
        echo "</p>
    <p><strong>Préfecture:</strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prefecture", array()), "html", null, true);
        echo "</p>
    <p><strong>Taille (cm):</strong> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "taille", array()), "html", null, true);
        echo "</p>
    <p><strong>Taille jupe/pantalon:</strong> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "taillejupe", array()), "html", null, true);
        echo "</p>
    <p><strong> de poitrine:</strong> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tourpoitrine", array()), "html", null, true);
        echo "</p>
    <p><strong>Taille de veste:</strong> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tailleveste", array()), "html", null, true);
        echo "</p>
    <p><strong>Pointure chaussures:</strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pointure", array()), "html", null, true);
        echo "</p>
    <p><strong>Couleur de cheveux:</strong> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "couleurcheveux", array()), "html", null, true);
        echo "</p>
    <p><strong>Couleur des yeux:</strong> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "couleuryeux", array()), "html", null, true);
        echo "</p>
    <p><strong>Expérience d'hôte(sse):</strong> ";
        // line 41
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "experiencehote", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Laquelle:</strong> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "experiencehotedetail", array()), "html", null, true);
        echo "</p>
    <p><strong>Bar:</strong> ";
        // line 43
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bar", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Animation:</strong> ";
        // line 44
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "animation", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Passage de micros:</strong> ";
        // line 45
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "micro", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Vente:</strong> ";
        // line 46
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "vente", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Service assiette / plateau:</strong> ";
        // line 47
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "service", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Distribution prospectus:</strong> ";
        // line 48
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "distribution", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Traduction:</strong> ";
        // line 49
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "traduction", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Saisie informatique:</strong> ";
        // line 50
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "saisie", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Comment avez-vous connu notre agence ?:</strong> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "commentconnuagence", array()), "html", null, true);
        echo "</p>
    <p><strong>Disponibilité:</strong> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "disponibilite", array()), "html", null, true);
        echo "</p>
    <p><strong>En semaine (précisez les jours et horaires):</strong> ";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dispojourshoraires", array()), "html", null, true);
        echo "</p>
    <p><strong>Ville dans lesquelles vous pouvez être hébergée en France:</strong></p>
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "villehebergement", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["desc"]) {
            // line 56
            echo "        <p><strong>&nbsp&nbsp&nbsp-</strong> ";
            echo twig_escape_filter($this->env, $context["desc"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['desc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    <p><strong>Personne à prévenir en cas d'accident:</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "personneaprevenir", array()), "html", null, true);
        echo "</p>
    <p><strong>Adresse et téléphone:</strong> ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adressetelaccident", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2959f2bab6cd10493ad713394e189a9d8e9a983bd04b32bdc318ad18a331648b->leave($__internal_2959f2bab6cd10493ad713394e189a9d8e9a983bd04b32bdc318ad18a331648b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 59,  293 => 58,  284 => 56,  280 => 55,  275 => 53,  271 => 52,  267 => 51,  259 => 50,  251 => 49,  243 => 48,  235 => 47,  227 => 46,  219 => 45,  211 => 44,  203 => 43,  199 => 42,  191 => 41,  187 => 40,  183 => 39,  179 => 38,  175 => 37,  171 => 36,  167 => 35,  163 => 34,  159 => 33,  155 => 32,  147 => 31,  139 => 30,  134 => 29,  125 => 27,  121 => 26,  112 => 24,  108 => 23,  104 => 22,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  38 => 6,  32 => 5,  28 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <a href="{{ path('fos_user_profile_edit') }}">Editer votre profil</a>*/
/* <div class="fos_user_user_show">*/
/*     <div style="float: right;"> <img src="http://2.ip-164-132-99.eu/my_project/web/uploads/images/products/{{ user.image }}" height="auto" width="300"> </div>*/
/*     <p><strong>{{ 'profile.show.username'|trans }}:</strong> {{ user.username }}</p>*/
/*     <p><strong>{{ 'profile.show.email'|trans }}:</strong> {{ user.email }}</p>*/
/*     <p><strong>Poste:</strong> {{ user.poste }}</p>*/
/*     <p><strong>Nom:</strong> {{ user.name }}</p>*/
/*     <p><strong>Nom de jeune fille:</strong> {{ user.nomjeunefille }}</p>*/
/*     <p><strong>Prenom:</strong> {{ user.prenom }}</p>*/
/*     <p><strong>Adresse:</strong> {{ user.adresse }}</p>*/
/*     <p><strong>Code Postal:</strong> {{ user.codepostal }}</p>*/
/*     <p><strong>Ville:</strong> {{ user.ville }}</p>*/
/*     <p><strong>Téléphone fixe:</strong> {{ user.telfixe }}</p>*/
/*     <p><strong>Téléphone portable:</strong> {{ user.telport }}</p>*/
/*     <p><strong>Date de naissance:</strong> {{ user.datenaissance|date("d/m/Y") }}</p>*/
/*     <p><strong>Lieux et département de naissance:</strong> {{ user.lieunaissance }}</p>*/
/*     <p><strong>Numéro de sécurité social:</strong> {{ user.secu }}</p>*/
/*     <p><strong>Nationalité:</strong> {{ user.nationalite }}</p>*/
/*     <p><strong>Numéro de carte de séjour:</strong> {{ user.cartedesejour }}</p>*/
/*     <p><strong>Délivrée par la préfecture de:</strong> {{ user.delivreepar }}</p>*/
/*     <p><strong>Date d'expiration:</strong> {{ user.dateexpiration|date("d/m/Y") }}</p>*/
/*     <p><strong>Situation Familiale:</strong> {{ user.situation }}</p>*/
/*     <p><strong>Bénéficiaire de l’obligation d’emploi selon l’article L. 5212-13 du Code du travail:</strong> {% if user.obligationemploi=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Langues parlées (+niveau entre parenthèse):</strong></p>*/
/*     {% for desc in user.tags %}*/
/*         <p><strong>&nbsp&nbsp&nbsp-</strong> {{ desc }}</p>*/
/*     {% endfor %}*/
/*     <p><strong>Niveau d'étude:</strong> {{ user.niveauetude }}</p>*/
/*     <p><strong>Permis de conduire:</strong> {% if user.permis=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Voiture:</strong> {% if user.voiture=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Date d'obtention:</strong> {{ user.dateobtention|date("d/m/Y") }}</p>*/
/*     <p><strong>Préfecture:</strong> {{ user.prefecture }}</p>*/
/*     <p><strong>Taille (cm):</strong> {{ user.taille }}</p>*/
/*     <p><strong>Taille jupe/pantalon:</strong> {{ user.taillejupe }}</p>*/
/*     <p><strong> de poitrine:</strong> {{ user.tourpoitrine }}</p>*/
/*     <p><strong>Taille de veste:</strong> {{ user.tailleveste }}</p>*/
/*     <p><strong>Pointure chaussures:</strong> {{ user.pointure }}</p>*/
/*     <p><strong>Couleur de cheveux:</strong> {{ user.couleurcheveux }}</p>*/
/*     <p><strong>Couleur des yeux:</strong> {{ user.couleuryeux }}</p>*/
/*     <p><strong>Expérience d'hôte(sse):</strong> {% if user.experiencehote=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Laquelle:</strong> {{ user.experiencehotedetail }}</p>*/
/*     <p><strong>Bar:</strong> {% if user.bar=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Animation:</strong> {% if user.animation=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Passage de micros:</strong> {% if user.micro=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Vente:</strong> {% if user.vente=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Service assiette / plateau:</strong> {% if user.service=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Distribution prospectus:</strong> {% if user.distribution=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Traduction:</strong> {% if user.traduction=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Saisie informatique:</strong> {% if user.saisie=="1" %}Oui{% else %}Non{% endif %}</p>*/
/*     <p><strong>Comment avez-vous connu notre agence ?:</strong> {{ user.commentconnuagence }}</p>*/
/*     <p><strong>Disponibilité:</strong> {{ user.disponibilite }}</p>*/
/*     <p><strong>En semaine (précisez les jours et horaires):</strong> {{ user.dispojourshoraires }}</p>*/
/*     <p><strong>Ville dans lesquelles vous pouvez être hébergée en France:</strong></p>*/
/*     {% for desc in user.villehebergement %}*/
/*         <p><strong>&nbsp&nbsp&nbsp-</strong> {{ desc }}</p>*/
/*     {% endfor %}*/
/*     <p><strong>Personne à prévenir en cas d'accident:</strong> {{ user.personneaprevenir }}</p>*/
/*     <p><strong>Adresse et téléphone:</strong> {{ user.adressetelaccident }}</p>*/
/* </div>*/
/* */
