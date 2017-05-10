<?php

/* NotepadBundle:view:listnote.html.twig */
class __TwigTemplate_a55992e323131ad5e45955f7b7959c565420e1ed9ba4ea19540791dbf6b6f9b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:view:layout.html.twig", "NotepadBundle:view:listnote.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageheader' => array($this, 'block_pageheader'),
            'actions' => array($this, 'block_actions'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NotepadBundle:view:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c04adbe8ca8ae78056a8e2ed5dd3b842649bd0dddf2badc0dd568ce5cc14d6c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04adbe8ca8ae78056a8e2ed5dd3b842649bd0dddf2badc0dd568ce5cc14d6c6->enter($__internal_c04adbe8ca8ae78056a8e2ed5dd3b842649bd0dddf2badc0dd568ce5cc14d6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listnote.html.twig"));

        $__internal_4b3ffb17d2ad13cd25d2d662415245c18dd76c07df92ef4b77a2e40b06ab0fef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3ffb17d2ad13cd25d2d662415245c18dd76c07df92ef4b77a2e40b06ab0fef->enter($__internal_4b3ffb17d2ad13cd25d2d662415245c18dd76c07df92ef4b77a2e40b06ab0fef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listnote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c04adbe8ca8ae78056a8e2ed5dd3b842649bd0dddf2badc0dd568ce5cc14d6c6->leave($__internal_c04adbe8ca8ae78056a8e2ed5dd3b842649bd0dddf2badc0dd568ce5cc14d6c6_prof);

        
        $__internal_4b3ffb17d2ad13cd25d2d662415245c18dd76c07df92ef4b77a2e40b06ab0fef->leave($__internal_4b3ffb17d2ad13cd25d2d662415245c18dd76c07df92ef4b77a2e40b06ab0fef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_30ae8ef0971910c6ba154d90ba2383389a15cc0069e0cdf62d1cf2c7abd76dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30ae8ef0971910c6ba154d90ba2383389a15cc0069e0cdf62d1cf2c7abd76dbf->enter($__internal_30ae8ef0971910c6ba154d90ba2383389a15cc0069e0cdf62d1cf2c7abd76dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5cb60604934b216c59f54674d8535b1fba9abd0a0e67d1029833b8e52a8a1c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb60604934b216c59f54674d8535b1fba9abd0a0e67d1029833b8e52a8a1c6f->enter($__internal_5cb60604934b216c59f54674d8535b1fba9abd0a0e67d1029833b8e52a8a1c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Note list";
        
        $__internal_5cb60604934b216c59f54674d8535b1fba9abd0a0e67d1029833b8e52a8a1c6f->leave($__internal_5cb60604934b216c59f54674d8535b1fba9abd0a0e67d1029833b8e52a8a1c6f_prof);

        
        $__internal_30ae8ef0971910c6ba154d90ba2383389a15cc0069e0cdf62d1cf2c7abd76dbf->leave($__internal_30ae8ef0971910c6ba154d90ba2383389a15cc0069e0cdf62d1cf2c7abd76dbf_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_6052c97a57b3488003be0ff117792b3bfd823a477ec7e8136a00b51a156815e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6052c97a57b3488003be0ff117792b3bfd823a477ec7e8136a00b51a156815e1->enter($__internal_6052c97a57b3488003be0ff117792b3bfd823a477ec7e8136a00b51a156815e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_0e348f1ce3464ffcacae33b2e60c7898e3523690a9ba043922d869e4cbaf7e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e348f1ce3464ffcacae33b2e60c7898e3523690a9ba043922d869e4cbaf7e9e->enter($__internal_0e348f1ce3464ffcacae33b2e60c7898e3523690a9ba043922d869e4cbaf7e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "Note list";
        
        $__internal_0e348f1ce3464ffcacae33b2e60c7898e3523690a9ba043922d869e4cbaf7e9e->leave($__internal_0e348f1ce3464ffcacae33b2e60c7898e3523690a9ba043922d869e4cbaf7e9e_prof);

        
        $__internal_6052c97a57b3488003be0ff117792b3bfd823a477ec7e8136a00b51a156815e1->leave($__internal_6052c97a57b3488003be0ff117792b3bfd823a477ec7e8136a00b51a156815e1_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7b1bdad6bcae0eca1fc6e8b56b35a5f4111abc348180d26f3e1e81bb9a0ea877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b1bdad6bcae0eca1fc6e8b56b35a5f4111abc348180d26f3e1e81bb9a0ea877->enter($__internal_7b1bdad6bcae0eca1fc6e8b56b35a5f4111abc348180d26f3e1e81bb9a0ea877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_d5ab7e00aadc32de1b98e08dbae5d28f92091fab4efa1d2a6c74c5199933881d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ab7e00aadc32de1b98e08dbae5d28f92091fab4efa1d2a6c74c5199933881d->enter($__internal_d5ab7e00aadc32de1b98e08dbae5d28f92091fab4efa1d2a6c74c5199933881d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "<form class=\"pull-right\" role=\"search\" method=\"POST\">
  <div class=\"input-group input-group-lg\">
    <input type=\"text\"
           class=\"form-control mr-sm-2\"
           placeholder=\"Search tags\"
           name=\"srch\"
           id=\"srch\"
           ";
        // line 15
        if (($context["search"] ?? $this->getContext($context, "search"))) {
            echo " value=\"";
            echo twig_escape_filter($this->env, ($context["search"] ?? $this->getContext($context, "search")), "html", null, true);
            echo "\" ";
        }
        echo " />
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\">
        <i class=\"glyphicon glyphicon-search\"></i>
      </button>
    </div>
  </div>
</form>

<a href=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotenew");
        echo "\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add note
</a>

<a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadCategorylist");
        echo "\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-menu-hamburger\"></i>
  Categories
</a>
";
        
        $__internal_d5ab7e00aadc32de1b98e08dbae5d28f92091fab4efa1d2a6c74c5199933881d->leave($__internal_d5ab7e00aadc32de1b98e08dbae5d28f92091fab4efa1d2a6c74c5199933881d_prof);

        
        $__internal_7b1bdad6bcae0eca1fc6e8b56b35a5f4111abc348180d26f3e1e81bb9a0ea877->leave($__internal_7b1bdad6bcae0eca1fc6e8b56b35a5f4111abc348180d26f3e1e81bb9a0ea877_prof);

    }

    // line 37
    public function block_content($context, array $blocks = array())
    {
        $__internal_67505ca8b6990177ec222e3174f5a6abb4cd58c25af13ef6ee579477d77b9ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67505ca8b6990177ec222e3174f5a6abb4cd58c25af13ef6ee579477d77b9ab8->enter($__internal_67505ca8b6990177ec222e3174f5a6abb4cd58c25af13ef6ee579477d77b9ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b129ad1f1564b4d30089d4df072d28c72de57bafab487e53c1bd4d12b7a29987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b129ad1f1564b4d30089d4df072d28c72de57bafab487e53c1bd4d12b7a29987->enter($__internal_b129ad1f1564b4d30089d4df072d28c72de57bafab487e53c1bd4d12b7a29987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "
  ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? $this->getContext($context, "notes")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 40
            echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <div class=\"btn-toolbar pull-right\">
          <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadeditnote", array("note" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-pencil\"></i>
            Modify
          </a>
          <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepaddeletenote", array("note" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Delete
          </a>
        </div>
        <span class=\"h2>\">
          ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "title", array()), "html", null, true);
            echo " <small> ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["note"], "date", array()), "d/m/Y"), "html", null, true);
            echo " </small>
        </span>
        ";
            // line 57
            if ($this->getAttribute($this->getAttribute($context["note"], "category", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 58
                echo "          <span class=\"label label-default\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["note"], "category", array()), "name", array()), "html", null, true);
                echo "</span>
        ";
            }
            // line 60
            echo "      </div>
      <div class=\"panel-body\">
        ";
            // line 62
            echo $this->getAttribute($context["note"], "content", array());
            echo "
      </div>
    </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 66
            echo "      <p>
          ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error2"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 68
                echo "            <div class=\"alert alert-danger\">
              ";
                // line 69
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "      </p>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
";
        
        $__internal_b129ad1f1564b4d30089d4df072d28c72de57bafab487e53c1bd4d12b7a29987->leave($__internal_b129ad1f1564b4d30089d4df072d28c72de57bafab487e53c1bd4d12b7a29987_prof);

        
        $__internal_67505ca8b6990177ec222e3174f5a6abb4cd58c25af13ef6ee579477d77b9ab8->leave($__internal_67505ca8b6990177ec222e3174f5a6abb4cd58c25af13ef6ee579477d77b9ab8_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:listnote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 74,  225 => 72,  216 => 69,  213 => 68,  209 => 67,  206 => 66,  197 => 62,  193 => 60,  187 => 58,  185 => 57,  178 => 55,  168 => 48,  160 => 43,  155 => 40,  150 => 39,  147 => 38,  138 => 37,  122 => 30,  113 => 24,  97 => 15,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NotepadBundle:view:layout.html.twig' %}

{% block title %}Note list{% endblock %}

{% block pageheader %}Note list{% endblock %}

{% block actions %}
<form class=\"pull-right\" role=\"search\" method=\"POST\">
  <div class=\"input-group input-group-lg\">
    <input type=\"text\"
           class=\"form-control mr-sm-2\"
           placeholder=\"Search tags\"
           name=\"srch\"
           id=\"srch\"
           {% if search %} value=\"{{ search }}\" {% endif %} />
    <div class=\"input-group-btn\">
      <button class=\"btn btn-default\" type=\"submit\">
        <i class=\"glyphicon glyphicon-search\"></i>
      </button>
    </div>
  </div>
</form>

<a href=\"{{ path('notepadnotenew') }}\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add note
</a>

<a href=\"{{ path('notepadCategorylist') }}\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-menu-hamburger\"></i>
  Categories
</a>
{% endblock %}

{% block content %}

  {% for note in notes %}
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <div class=\"btn-toolbar pull-right\">
          <a href=\"{{ path('notepadeditnote', {'note': note.id}) }}\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-pencil\"></i>
            Modify
          </a>
          <a href=\"{{ path('notepaddeletenote', {'note': note.id}) }}\"
             class=\"btn btn-sm btn-default\">
            <i class=\"glyphicon glyphicon-trash\"></i>
            Delete
          </a>
        </div>
        <span class=\"h2>\">
          {{ note.title }} <small> {{ note.date|date(\"d/m/Y\") }} </small>
        </span>
        {% if note.category.name is defined %}
          <span class=\"label label-default\">{{ note.category.name }}</span>
        {% endif %}
      </div>
      <div class=\"panel-body\">
        {{ note.content|raw }}
      </div>
    </div>
  {% else %}
      <p>
          {% for flashMessage in app.session.flashbag.get('error2') %}
            <div class=\"alert alert-danger\">
              {{ flashMessage }}
            </div>
          {% endfor %}
      </p>
  {% endfor %}

{% endblock %}
", "NotepadBundle:view:listnote.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/view/listnote.html.twig");
    }
}
