<?php

/* NotepadBundle:view:newnote.html.twig */
class __TwigTemplate_0faeff9525879f95d6f27c49564e6bcaa38c8f67ceadcf175507148b4e86ab18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NotepadBundle:view:layout.html.twig", "NotepadBundle:view:newnote.html.twig", 1);
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
        $__internal_169a0cfdb636c26f5f166b6aefb8731c97e3ae6ce88fdb2aadbb74957174d52d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_169a0cfdb636c26f5f166b6aefb8731c97e3ae6ce88fdb2aadbb74957174d52d->enter($__internal_169a0cfdb636c26f5f166b6aefb8731c97e3ae6ce88fdb2aadbb74957174d52d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:newnote.html.twig"));

        $__internal_bdf93218eacfa900af8e5355f3f0d7860b999ea446d7f81d448bc14b40139bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf93218eacfa900af8e5355f3f0d7860b999ea446d7f81d448bc14b40139bf3->enter($__internal_bdf93218eacfa900af8e5355f3f0d7860b999ea446d7f81d448bc14b40139bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:newnote.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_169a0cfdb636c26f5f166b6aefb8731c97e3ae6ce88fdb2aadbb74957174d52d->leave($__internal_169a0cfdb636c26f5f166b6aefb8731c97e3ae6ce88fdb2aadbb74957174d52d_prof);

        
        $__internal_bdf93218eacfa900af8e5355f3f0d7860b999ea446d7f81d448bc14b40139bf3->leave($__internal_bdf93218eacfa900af8e5355f3f0d7860b999ea446d7f81d448bc14b40139bf3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8945d5db8e5cf96f8073bf2757211ed2332f51c70f4f8f383c50be4def001a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8945d5db8e5cf96f8073bf2757211ed2332f51c70f4f8f383c50be4def001a21->enter($__internal_8945d5db8e5cf96f8073bf2757211ed2332f51c70f4f8f383c50be4def001a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ba8f6d559676127edaf7771c65a6da48ddbf063790eace7eef1fbbc00d8a862a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8f6d559676127edaf7771c65a6da48ddbf063790eace7eef1fbbc00d8a862a->enter($__internal_ba8f6d559676127edaf7771c65a6da48ddbf063790eace7eef1fbbc00d8a862a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "New Note";
        
        $__internal_ba8f6d559676127edaf7771c65a6da48ddbf063790eace7eef1fbbc00d8a862a->leave($__internal_ba8f6d559676127edaf7771c65a6da48ddbf063790eace7eef1fbbc00d8a862a_prof);

        
        $__internal_8945d5db8e5cf96f8073bf2757211ed2332f51c70f4f8f383c50be4def001a21->leave($__internal_8945d5db8e5cf96f8073bf2757211ed2332f51c70f4f8f383c50be4def001a21_prof);

    }

    // line 5
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_20761f6cb26080bd55e33bb6e922606b1fe7f9635bf6048a266fc3b946fb7580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20761f6cb26080bd55e33bb6e922606b1fe7f9635bf6048a266fc3b946fb7580->enter($__internal_20761f6cb26080bd55e33bb6e922606b1fe7f9635bf6048a266fc3b946fb7580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_525f55d5be71f33f7046326a149655064a14560dad4ae3c91ab427204f446d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525f55d5be71f33f7046326a149655064a14560dad4ae3c91ab427204f446d55->enter($__internal_525f55d5be71f33f7046326a149655064a14560dad4ae3c91ab427204f446d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        echo "New Note";
        
        $__internal_525f55d5be71f33f7046326a149655064a14560dad4ae3c91ab427204f446d55->leave($__internal_525f55d5be71f33f7046326a149655064a14560dad4ae3c91ab427204f446d55_prof);

        
        $__internal_20761f6cb26080bd55e33bb6e922606b1fe7f9635bf6048a266fc3b946fb7580->leave($__internal_20761f6cb26080bd55e33bb6e922606b1fe7f9635bf6048a266fc3b946fb7580_prof);

    }

    // line 7
    public function block_actions($context, array $blocks = array())
    {
        $__internal_7ad0160c60d7c84f431da90ebbe7855e33158f9c75e442edef2f5000a2559573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ad0160c60d7c84f431da90ebbe7855e33158f9c75e442edef2f5000a2559573->enter($__internal_7ad0160c60d7c84f431da90ebbe7855e33158f9c75e442edef2f5000a2559573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_c53193f18506243e5a7e3a7da3e35440aa908396fab47d6055725a217075defe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53193f18506243e5a7e3a7da3e35440aa908396fab47d6055725a217075defe->enter($__internal_c53193f18506243e5a7e3a7da3e35440aa908396fab47d6055725a217075defe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 8
        echo "  <button role=\"button\" id=\"tag\" class=\"btn btn-lg btn-default\">
    <i class=\"glyphicon glyphicon-plus\"></i>
    Add tag
  </button>
  <a href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notepadnotelist");
        echo "\"
     class=\"btn btn-lg btn-default\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
    Back
  </a>
";
        
        $__internal_c53193f18506243e5a7e3a7da3e35440aa908396fab47d6055725a217075defe->leave($__internal_c53193f18506243e5a7e3a7da3e35440aa908396fab47d6055725a217075defe_prof);

        
        $__internal_7ad0160c60d7c84f431da90ebbe7855e33158f9c75e442edef2f5000a2559573->leave($__internal_7ad0160c60d7c84f431da90ebbe7855e33158f9c75e442edef2f5000a2559573_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_b23f5cc3295fabd2198e510b9c0983fe3a6bb037684afa1b382d392288131e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b23f5cc3295fabd2198e510b9c0983fe3a6bb037684afa1b382d392288131e4c->enter($__internal_b23f5cc3295fabd2198e510b9c0983fe3a6bb037684afa1b382d392288131e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0d2674b8c564e4fa8c31dd623eee97117007497ebca0605d60bac6c7d914602d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2674b8c564e4fa8c31dd623eee97117007497ebca0605d60bac6c7d914602d->enter($__internal_0d2674b8c564e4fa8c31dd623eee97117007497ebca0605d60bac6c7d914602d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "
";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
  ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_0d2674b8c564e4fa8c31dd623eee97117007497ebca0605d60bac6c7d914602d->leave($__internal_0d2674b8c564e4fa8c31dd623eee97117007497ebca0605d60bac6c7d914602d_prof);

        
        $__internal_b23f5cc3295fabd2198e510b9c0983fe3a6bb037684afa1b382d392288131e4c->leave($__internal_b23f5cc3295fabd2198e510b9c0983fe3a6bb037684afa1b382d392288131e4c_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:newnote.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  126 => 22,  122 => 21,  119 => 20,  110 => 19,  94 => 12,  88 => 8,  79 => 7,  61 => 5,  43 => 3,  11 => 1,);
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

{% block title %}New Note{% endblock %}

{% block pageheader %}New Note{% endblock %}

{% block actions %}
  <button role=\"button\" id=\"tag\" class=\"btn btn-lg btn-default\">
    <i class=\"glyphicon glyphicon-plus\"></i>
    Add tag
  </button>
  <a href=\"{{ path('notepadnotelist') }}\"
     class=\"btn btn-lg btn-default\">
      <i class=\"glyphicon glyphicon-arrow-left\"></i>
    Back
  </a>
{% endblock %}

{% block content %}

{{ form_start(form) }}
  {{ form_widget(form) }}
{{ form_end(form) }}

{% endblock %}
", "NotepadBundle:view:newnote.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/view/newnote.html.twig");
    }
}
