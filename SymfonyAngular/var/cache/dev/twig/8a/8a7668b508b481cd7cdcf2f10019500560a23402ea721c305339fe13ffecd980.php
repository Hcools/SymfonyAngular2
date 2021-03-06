<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eead566be21e5a1f4cf6fef4744ff7e2341152406359e9ebc9763e34ca91c81b extends Twig_Template
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
        $__internal_2b2d2b644f31417239d01e99ba7e3a1d0d9309769fd9ff4853f943954d64f06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2d2b644f31417239d01e99ba7e3a1d0d9309769fd9ff4853f943954d64f06c->enter($__internal_2b2d2b644f31417239d01e99ba7e3a1d0d9309769fd9ff4853f943954d64f06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_02336e8b7ae1b40614e81f3db81d4e0072213e91e82db5af1c08ead041a88101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02336e8b7ae1b40614e81f3db81d4e0072213e91e82db5af1c08ead041a88101->enter($__internal_02336e8b7ae1b40614e81f3db81d4e0072213e91e82db5af1c08ead041a88101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b2d2b644f31417239d01e99ba7e3a1d0d9309769fd9ff4853f943954d64f06c->leave($__internal_2b2d2b644f31417239d01e99ba7e3a1d0d9309769fd9ff4853f943954d64f06c_prof);

        
        $__internal_02336e8b7ae1b40614e81f3db81d4e0072213e91e82db5af1c08ead041a88101->leave($__internal_02336e8b7ae1b40614e81f3db81d4e0072213e91e82db5af1c08ead041a88101_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9525f571aa6694690c780e59863040da6c2c49467b354284a730d6e84d1b31d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9525f571aa6694690c780e59863040da6c2c49467b354284a730d6e84d1b31d7->enter($__internal_9525f571aa6694690c780e59863040da6c2c49467b354284a730d6e84d1b31d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8ff7ea3999d835527fdc945505d998e5d37d6e274089315849604ece8504dd61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff7ea3999d835527fdc945505d998e5d37d6e274089315849604ece8504dd61->enter($__internal_8ff7ea3999d835527fdc945505d998e5d37d6e274089315849604ece8504dd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8ff7ea3999d835527fdc945505d998e5d37d6e274089315849604ece8504dd61->leave($__internal_8ff7ea3999d835527fdc945505d998e5d37d6e274089315849604ece8504dd61_prof);

        
        $__internal_9525f571aa6694690c780e59863040da6c2c49467b354284a730d6e84d1b31d7->leave($__internal_9525f571aa6694690c780e59863040da6c2c49467b354284a730d6e84d1b31d7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c63c236d2ce927f14adf36cba6f9a3014955157cbe27c628f0a35160d9f0ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c63c236d2ce927f14adf36cba6f9a3014955157cbe27c628f0a35160d9f0ed2->enter($__internal_4c63c236d2ce927f14adf36cba6f9a3014955157cbe27c628f0a35160d9f0ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bacfacdc18c6fb917cf44750bddf8eed682cfbe0566e179b8e73f5d2eece93ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacfacdc18c6fb917cf44750bddf8eed682cfbe0566e179b8e73f5d2eece93ef->enter($__internal_bacfacdc18c6fb917cf44750bddf8eed682cfbe0566e179b8e73f5d2eece93ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bacfacdc18c6fb917cf44750bddf8eed682cfbe0566e179b8e73f5d2eece93ef->leave($__internal_bacfacdc18c6fb917cf44750bddf8eed682cfbe0566e179b8e73f5d2eece93ef_prof);

        
        $__internal_4c63c236d2ce927f14adf36cba6f9a3014955157cbe27c628f0a35160d9f0ed2->leave($__internal_4c63c236d2ce927f14adf36cba6f9a3014955157cbe27c628f0a35160d9f0ed2_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_81da381750c13ea167d3d8438ce39d4669c8b2f7c9f408bb1fbc46066573379a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81da381750c13ea167d3d8438ce39d4669c8b2f7c9f408bb1fbc46066573379a->enter($__internal_81da381750c13ea167d3d8438ce39d4669c8b2f7c9f408bb1fbc46066573379a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93737fcc851f6c5e3f5a41ead3524bc1f1d8f69b72af1abf3e0c9fdf49723b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93737fcc851f6c5e3f5a41ead3524bc1f1d8f69b72af1abf3e0c9fdf49723b8f->enter($__internal_93737fcc851f6c5e3f5a41ead3524bc1f1d8f69b72af1abf3e0c9fdf49723b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_93737fcc851f6c5e3f5a41ead3524bc1f1d8f69b72af1abf3e0c9fdf49723b8f->leave($__internal_93737fcc851f6c5e3f5a41ead3524bc1f1d8f69b72af1abf3e0c9fdf49723b8f_prof);

        
        $__internal_81da381750c13ea167d3d8438ce39d4669c8b2f7c9f408bb1fbc46066573379a->leave($__internal_81da381750c13ea167d3d8438ce39d4669c8b2f7c9f408bb1fbc46066573379a_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
