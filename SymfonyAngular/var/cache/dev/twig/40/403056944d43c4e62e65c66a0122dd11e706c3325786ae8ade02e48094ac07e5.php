<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e18ca36ddec65d0fe713325dac8561ad200cabf331e6420a06be872f4086e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e18ca36ddec65d0fe713325dac8561ad200cabf331e6420a06be872f4086e63->enter($__internal_7e18ca36ddec65d0fe713325dac8561ad200cabf331e6420a06be872f4086e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_89eeeb261e8c21d85b372747824bd074cb0a0eb25a375bd8de49431694aae205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eeeb261e8c21d85b372747824bd074cb0a0eb25a375bd8de49431694aae205->enter($__internal_89eeeb261e8c21d85b372747824bd074cb0a0eb25a375bd8de49431694aae205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e18ca36ddec65d0fe713325dac8561ad200cabf331e6420a06be872f4086e63->leave($__internal_7e18ca36ddec65d0fe713325dac8561ad200cabf331e6420a06be872f4086e63_prof);

        
        $__internal_89eeeb261e8c21d85b372747824bd074cb0a0eb25a375bd8de49431694aae205->leave($__internal_89eeeb261e8c21d85b372747824bd074cb0a0eb25a375bd8de49431694aae205_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08996efc5258fde1d8ae9d1b0f27dbc9a745c88b2e3bb433faa6bc439d324a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08996efc5258fde1d8ae9d1b0f27dbc9a745c88b2e3bb433faa6bc439d324a26->enter($__internal_08996efc5258fde1d8ae9d1b0f27dbc9a745c88b2e3bb433faa6bc439d324a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_342a3a9a5e21116d7c7961fcd67847eb5a5e0163c1cefd82cada618cf6320762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_342a3a9a5e21116d7c7961fcd67847eb5a5e0163c1cefd82cada618cf6320762->enter($__internal_342a3a9a5e21116d7c7961fcd67847eb5a5e0163c1cefd82cada618cf6320762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_342a3a9a5e21116d7c7961fcd67847eb5a5e0163c1cefd82cada618cf6320762->leave($__internal_342a3a9a5e21116d7c7961fcd67847eb5a5e0163c1cefd82cada618cf6320762_prof);

        
        $__internal_08996efc5258fde1d8ae9d1b0f27dbc9a745c88b2e3bb433faa6bc439d324a26->leave($__internal_08996efc5258fde1d8ae9d1b0f27dbc9a745c88b2e3bb433faa6bc439d324a26_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24a5f76796f4194799f123e34b3c9a8c149abfe3d19ce10e0d605877bde621f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a5f76796f4194799f123e34b3c9a8c149abfe3d19ce10e0d605877bde621f5->enter($__internal_24a5f76796f4194799f123e34b3c9a8c149abfe3d19ce10e0d605877bde621f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_3e44d14f4fda3e9f7e9277c8b8ea9e3daa0172e8d4e771d8ec676599d6378ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e44d14f4fda3e9f7e9277c8b8ea9e3daa0172e8d4e771d8ec676599d6378ca3->enter($__internal_3e44d14f4fda3e9f7e9277c8b8ea9e3daa0172e8d4e771d8ec676599d6378ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3e44d14f4fda3e9f7e9277c8b8ea9e3daa0172e8d4e771d8ec676599d6378ca3->leave($__internal_3e44d14f4fda3e9f7e9277c8b8ea9e3daa0172e8d4e771d8ec676599d6378ca3_prof);

        
        $__internal_24a5f76796f4194799f123e34b3c9a8c149abfe3d19ce10e0d605877bde621f5->leave($__internal_24a5f76796f4194799f123e34b3c9a8c149abfe3d19ce10e0d605877bde621f5_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_49ad8f10b9db54f73eb26a47053e55b2005182134d769cc70486eec70e43dccc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ad8f10b9db54f73eb26a47053e55b2005182134d769cc70486eec70e43dccc->enter($__internal_49ad8f10b9db54f73eb26a47053e55b2005182134d769cc70486eec70e43dccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_de330afcd9f55e4013b79b3e0c62da935faf89ca544407b0ec35b19479de40b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de330afcd9f55e4013b79b3e0c62da935faf89ca544407b0ec35b19479de40b0->enter($__internal_de330afcd9f55e4013b79b3e0c62da935faf89ca544407b0ec35b19479de40b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_de330afcd9f55e4013b79b3e0c62da935faf89ca544407b0ec35b19479de40b0->leave($__internal_de330afcd9f55e4013b79b3e0c62da935faf89ca544407b0ec35b19479de40b0_prof);

        
        $__internal_49ad8f10b9db54f73eb26a47053e55b2005182134d769cc70486eec70e43dccc->leave($__internal_49ad8f10b9db54f73eb26a47053e55b2005182134d769cc70486eec70e43dccc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
