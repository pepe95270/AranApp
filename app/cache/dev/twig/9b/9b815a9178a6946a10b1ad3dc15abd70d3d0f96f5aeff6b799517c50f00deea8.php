<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_dd4f45705093dfabea3cbca777dd46f04090d8e50aff56cb087369fe2248ff1c extends Twig_Template
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
        $__internal_41aa3f26ec9426cd7f893ff6d561d4574a8f717bc0fd4ec7534955db406c2919 = $this->env->getExtension("native_profiler");
        $__internal_41aa3f26ec9426cd7f893ff6d561d4574a8f717bc0fd4ec7534955db406c2919->enter($__internal_41aa3f26ec9426cd7f893ff6d561d4574a8f717bc0fd4ec7534955db406c2919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "<div class=\"fos_user_user_show col-md-10\">
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-default\">Editer votre profil</a>
    <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("calendar_index");
        echo "\" class=\"btn btn-default\">Voir/Editer mes disponibilités</a>
    <div style=\"float: right;\"> <img src=\"http://2.ip-164-132-99.eu/my_project/web/uploads/images/products/";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "image", array()), "html", null, true);
        echo "\" height=\"auto\" width=\"300\"> </div>
    <p><strong>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p><strong>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ":</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
    <p><strong>Poste:</strong> ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "poste", array()), "html", null, true);
        echo "</p>
    <p><strong>Nom:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "name", array()), "html", null, true);
        echo "</p>
    <p><strong>Nom de jeune fille:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nomjeunefille", array()), "html", null, true);
        echo "</p>
    <p><strong>Prenom:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</p>
    <p><strong>Adresse:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</p>
    <p><strong>Code Postal:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "codepostal", array()), "html", null, true);
        echo "</p>
    <p><strong>Ville:</strong> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville", array()), "html", null, true);
        echo "</p>
    <p><strong>Téléphone fixe:</strong> ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telfixe", array()), "html", null, true);
        echo "</p>
    <p><strong>Téléphone portable:</strong> ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telport", array()), "html", null, true);
        echo "</p>
    <p><strong>Date de naissance:</strong> ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "datenaissance", array()), "d/m/Y"), "html", null, true);
        echo "</p>
    <p><strong>Lieux et département de naissance:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lieunaissance", array()), "html", null, true);
        echo "</p>
    <p><strong>Numéro de sécurité social:</strong> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "secu", array()), "html", null, true);
        echo "</p>
    <p><strong>Nationalité:</strong> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nationalite", array()), "html", null, true);
        echo "</p>
    <p><strong>Numéro de carte de séjour:</strong> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "cartedesejour", array()), "html", null, true);
        echo "</p>
    <p><strong>Délivrée par la préfecture de:</strong> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "delivreepar", array()), "html", null, true);
        echo "</p>
    <p><strong>Date d'expiration:</strong> ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateexpiration", array()), "d/m/Y"), "html", null, true);
        echo "</p>
    <p><strong>Situation Familiale:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "situation", array()), "html", null, true);
        echo "</p>
    <p><strong>Bénéficiaire de l’obligation d’emploi selon l’article L. 5212-13 du Code du travail:</strong> ";
        // line 25
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "obligationemploi", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Langues parlées (+niveau entre parenthèse):</strong></p>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tags", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["desc"]) {
            // line 28
            echo "        <p><strong>&nbsp&nbsp&nbsp-</strong> ";
            echo twig_escape_filter($this->env, $context["desc"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['desc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    <p><strong>Niveau d'étude:</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "niveauetude", array()), "html", null, true);
        echo "</p>
    <p><strong>Permis de conduire:</strong> ";
        // line 31
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "permis", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Voiture:</strong> ";
        // line 32
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "voiture", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Date d'obtention:</strong> ";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "dateobtention", array()), "d/m/Y"), "html", null, true);
        echo "</p>
    <p><strong>Préfecture:</strong> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prefecture", array()), "html", null, true);
        echo "</p>
    <p><strong>Taille (cm):</strong> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "taille", array()), "html", null, true);
        echo "</p>
    <p><strong>Taille jupe/pantalon:</strong> ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "taillejupe", array()), "html", null, true);
        echo "</p>
    <p><strong> de poitrine:</strong> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tourpoitrine", array()), "html", null, true);
        echo "</p>
    <p><strong>Taille de veste:</strong> ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "tailleveste", array()), "html", null, true);
        echo "</p>
    <p><strong>Pointure chaussures:</strong> ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pointure", array()), "html", null, true);
        echo "</p>
    <p><strong>Couleur de cheveux:</strong> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "couleurcheveux", array()), "html", null, true);
        echo "</p>
    <p><strong>Couleur des yeux:</strong> ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "couleuryeux", array()), "html", null, true);
        echo "</p>
    <p><strong>Expérience d'hôte(sse):</strong> ";
        // line 42
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "experiencehote", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Laquelle:</strong> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "experiencehotedetail", array()), "html", null, true);
        echo "</p>
    <p><strong>Bar:</strong> ";
        // line 44
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "bar", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Animation:</strong> ";
        // line 45
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "animation", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Passage de micros:</strong> ";
        // line 46
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "micro", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Vente:</strong> ";
        // line 47
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "vente", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Service assiette / plateau:</strong> ";
        // line 48
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "service", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Distribution prospectus:</strong> ";
        // line 49
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "distribution", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Traduction:</strong> ";
        // line 50
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "traduction", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Saisie informatique:</strong> ";
        // line 51
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "saisie", array()) == "1")) {
            echo "Oui";
        } else {
            echo "Non";
        }
        echo "</p>
    <p><strong>Comment avez-vous connu notre agence ?:</strong> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "commentconnuagence", array()), "html", null, true);
        echo "</p>
    <p><strong>Ville dans lesquelles vous pouvez être hébergée en France:</strong></p>
    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "villehebergement", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["desc"]) {
            // line 55
            echo "        <p><strong>&nbsp&nbsp&nbsp-</strong> ";
            echo twig_escape_filter($this->env, $context["desc"], "html", null, true);
            echo "</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['desc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    <p><strong>Personne à prévenir en cas d'accident:</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "personneaprevenir", array()), "html", null, true);
        echo "</p>
    <p><strong>Adresse et téléphone:</strong> ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adressetelaccident", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_41aa3f26ec9426cd7f893ff6d561d4574a8f717bc0fd4ec7534955db406c2919->leave($__internal_41aa3f26ec9426cd7f893ff6d561d4574a8f717bc0fd4ec7534955db406c2919_prof);

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
        return array (  295 => 58,  290 => 57,  281 => 55,  277 => 54,  272 => 52,  264 => 51,  256 => 50,  248 => 49,  240 => 48,  232 => 47,  224 => 46,  216 => 45,  208 => 44,  204 => 43,  196 => 42,  192 => 41,  188 => 40,  184 => 39,  180 => 38,  176 => 37,  172 => 36,  168 => 35,  164 => 34,  160 => 33,  152 => 32,  144 => 31,  139 => 30,  130 => 28,  126 => 27,  117 => 25,  113 => 24,  109 => 23,  105 => 22,  101 => 21,  97 => 20,  93 => 19,  89 => 18,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  43 => 7,  37 => 6,  33 => 5,  29 => 4,  25 => 3,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* <div class="fos_user_user_show col-md-10">*/
/*     <a href="{{ path('fos_user_profile_edit') }}" class="btn btn-default">Editer votre profil</a>*/
/*     <a href="{{ path('calendar_index') }}" class="btn btn-default">Voir/Editer mes disponibilités</a>*/
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
/*     <p><strong>Ville dans lesquelles vous pouvez être hébergée en France:</strong></p>*/
/*     {% for desc in user.villehebergement %}*/
/*         <p><strong>&nbsp&nbsp&nbsp-</strong> {{ desc }}</p>*/
/*     {% endfor %}*/
/*     <p><strong>Personne à prévenir en cas d'accident:</strong> {{ user.personneaprevenir }}</p>*/
/*     <p><strong>Adresse et téléphone:</strong> {{ user.adressetelaccident }}</p>*/
/* </div>*/
/* */
