<?php

/* NotepadBundle:view:listcategory.html.twig */
class __TwigTemplate_00e07d859496465b7c8112e638ec2d44e551a73cc5a8d34a5323b0a5402d906f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:view:layout.html.twig", "NotepadBundle:view:listcategory.html.twig", 1);
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
        $__internal_4e9700e3afb6c72b6aa43e4fcf1b48405f1cfe8193936b474a284fb9d9f5d17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e9700e3afb6c72b6aa43e4fcf1b48405f1cfe8193936b474a284fb9d9f5d17c->enter($__internal_4e9700e3afb6c72b6aa43e4fcf1b48405f1cfe8193936b474a284fb9d9f5d17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listcategory.html.twig"));

        $__internal_96f0a6b19be2f4a401c7d5914bbca91de32bb24897a48b33ba587b1bfdcf4ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96f0a6b19be2f4a401c7d5914bbca91de32bb24897a48b33ba587b1bfdcf4ed4->enter($__internal_96f0a6b19be2f4a401c7d5914bbca91de32bb24897a48b33ba587b1bfdcf4ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:listcategory.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e9700e3afb6c72b6aa43e4fcf1b48405f1cfe8193936b474a284fb9d9f5d17c->leave($__internal_4e9700e3afb6c72b6aa43e4fcf1b48405f1cfe8193936b474a284fb9d9f5d17c_prof);

        
        $__internal_96f0a6b19be2f4a401c7d5914bbca91de32bb24897a48b33ba587b1bfdcf4ed4->leave($__internal_96f0a6b19be2f4a401c7d5914bbca91de32bb24897a48b33ba587b1bfdcf4ed4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3493e99cc0ee2d26cb3830a41db7e93f046bd1184b745560ebe4972f3d648252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3493e99cc0ee2d26cb3830a41db7e93f046bd1184b745560ebe4972f3d648252->enter($__internal_3493e99cc0ee2d26cb3830a41db7e93f046bd1184b745560ebe4972f3d648252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bc7638c79b75aeb04ac60fe3a0eaf1831e61f9d83bb2ed56a366f0b89365470a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc7638c79b75aeb04ac60fe3a0eaf1831e61f9d83bb2ed56a366f0b89365470a->enter($__internal_bc7638c79b75aeb04ac60fe3a0eaf1831e61f9d83bb2ed56a366f0b89365470a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Category list";
        
        $__internal_bc7638c79b75aeb04ac60fe3a0eaf1831e61f9d83bb2ed56a366f0b89365470a->leave($__internal_bc7638c79b75aeb04ac60fe3a0eaf1831e61f9d83bb2ed56a366f0b89365470a_prof);

        
        $__internal_3493e99cc0ee2d26cb3830a41db7e93f046bd1184b745560ebe4972f3d648252->leave($__internal_3493e99cc0ee2d26cb3830a41db7e93f046bd1184b745560ebe4972f3d648252_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_3d049d00c13f8dd9672e9966ce96d959cd2f10a2f6c52ac30a13cd0c7cdae465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d049d00c13f8dd9672e9966ce96d959cd2f10a2f6c52ac30a13cd0c7cdae465->enter($__internal_3d049d00c13f8dd9672e9966ce96d959cd2f10a2f6c52ac30a13cd0c7cdae465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_30247323b85ca5c41a4bdf06e25d89779765aacf4430b882fc51b9cf8027a64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30247323b85ca5c41a4bdf06e25d89779765aacf4430b882fc51b9cf8027a64c->enter($__internal_30247323b85ca5c41a4bdf06e25d89779765aacf4430b882fc51b9cf8027a64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        // line 6
        echo "Category list
  <p>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "      <div class=\"alert alert-danger\">
        ";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "yolo"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 14
            echo "          <div class=\"alert alert-success\">
            ";
            // line 15
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "  </p>
";
        
        $__internal_30247323b85ca5c41a4bdf06e25d89779765aacf4430b882fc51b9cf8027a64c->leave($__internal_30247323b85ca5c41a4bdf06e25d89779765aacf4430b882fc51b9cf8027a64c_prof);

        
        $__internal_3d049d00c13f8dd9672e9966ce96d959cd2f10a2f6c52ac30a13cd0c7cdae465->leave($__internal_3d049d00c13f8dd9672e9966ce96d959cd2f10a2f6c52ac30a13cd0c7cdae465_prof);

    }

    // line 21
    public function block_actions($context, array $blocks = array())
    {
        $__internal_d2ee8cb94243b1cd3dab9d7f2b192ff494b915edd132b6f95d4ff9a1bdb9b9c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2ee8cb94243b1cd3dab9d7f2b192ff494b915edd132b6f95d4ff9a1bdb9b9c3->enter($__internal_d2ee8cb94243b1cd3dab9d7f2b192ff494b915edd132b6f95d4ff9a1bdb9b9c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_cc9cf13c7602cdeb598c28cf6ef38f0b251685a0e6faf1546e5f2989795e57f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9cf13c7602cdeb598c28cf6ef38f0b251685a0e6faf1546e5f2989795e57f0->enter($__internal_cc9cf13c7602cdeb598c28cf6ef38f0b251685a0e6faf1546e5f2989795e57f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 22
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadcategorynew");
        echo "\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add category
</a>
<a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotelist");
        echo "\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-arrow-left\"></i>
  Back
</a>
";
        
        $__internal_cc9cf13c7602cdeb598c28cf6ef38f0b251685a0e6faf1546e5f2989795e57f0->leave($__internal_cc9cf13c7602cdeb598c28cf6ef38f0b251685a0e6faf1546e5f2989795e57f0_prof);

        
        $__internal_d2ee8cb94243b1cd3dab9d7f2b192ff494b915edd132b6f95d4ff9a1bdb9b9c3->leave($__internal_d2ee8cb94243b1cd3dab9d7f2b192ff494b915edd132b6f95d4ff9a1bdb9b9c3_prof);

    }

    // line 34
    public function block_content($context, array $blocks = array())
    {
        $__internal_aebbbe6ac83c85311610f2e284ca5f16006a2565afd67838124cb7857f35896a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aebbbe6ac83c85311610f2e284ca5f16006a2565afd67838124cb7857f35896a->enter($__internal_aebbbe6ac83c85311610f2e284ca5f16006a2565afd67838124cb7857f35896a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0f648aaff22c29dab30287448f3d43b9ef7bfab0e5ac95214d775348d7b1b25e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f648aaff22c29dab30287448f3d43b9ef7bfab0e5ac95214d775348d7b1b25e->enter($__internal_0f648aaff22c29dab30287448f3d43b9ef7bfab0e5ac95214d775348d7b1b25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 35
        echo "
<table class=\"table table-striped\">
 <div class=\" col-md-offset-2\">
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 39
            echo "  <tr>
    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
    <td class=\"text-right\">
      <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadeditcategory", array("category" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-pencil\"></i>
        Modify
      </a>
      <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepaddeletecategory", array("category" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        Delete
      </a>
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</div>
</table>

";
        
        $__internal_0f648aaff22c29dab30287448f3d43b9ef7bfab0e5ac95214d775348d7b1b25e->leave($__internal_0f648aaff22c29dab30287448f3d43b9ef7bfab0e5ac95214d775348d7b1b25e_prof);

        
        $__internal_aebbbe6ac83c85311610f2e284ca5f16006a2565afd67838124cb7857f35896a->leave($__internal_aebbbe6ac83c85311610f2e284ca5f16006a2565afd67838124cb7857f35896a_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:listcategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 55,  186 => 47,  178 => 42,  173 => 40,  170 => 39,  166 => 38,  161 => 35,  152 => 34,  136 => 27,  127 => 22,  118 => 21,  107 => 18,  98 => 15,  95 => 14,  90 => 13,  81 => 10,  78 => 9,  74 => 8,  70 => 6,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}Category list{% endblock %}

{% block pageheader %}
Category list
  <p>
    {% for flashMessage in app.session.flashbag.get('error') %}
      <div class=\"alert alert-danger\">
        {{ flashMessage }}
      </div>
        {% endfor %}
        {% for flashMessage in app.session.flashbag.get('yolo') %}
          <div class=\"alert alert-success\">
            {{ flashMessage }}
          </div>
        {% endfor %}
  </p>
{% endblock %}

{% block actions %}
<a href=\"{{ path('notepadcategorynew') }}\"
   class=\"btn btn-lg btn-default\">
  <i class=\"glyphicon glyphicon-plus\"></i>
  Add category
</a>
<a href=\"{{ path('notepadnotelist') }}\"
   class=\"btn btn-lg btn-default\">
   <i class=\"glyphicon glyphicon-arrow-left\"></i>
  Back
</a>
{% endblock %}

{% block content %}

<table class=\"table table-striped\">
 <div class=\" col-md-offset-2\">
{% for category in categories %}
  <tr>
    <td>{{ category.name }}</td>
    <td class=\"text-right\">
      <a href=\"{{ path('notepadeditcategory', {'category': category.id}) }}\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-pencil\"></i>
        Modify
      </a>
      <a href=\"{{ path('notepaddeletecategory', {'category': category.id}) }}\"
         class=\"btn btn-sm btn-default\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        Delete
      </a>
    </td>
  </tr>
{% endfor %}
</div>
</table>

{% endblock %}
", "NotepadBundle:view:listcategory.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/view/listcategory.html.twig");
    }
}
