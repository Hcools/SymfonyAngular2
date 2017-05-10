<?php

/* NotepadBundle:view:layout.html.twig */
class __TwigTemplate_65f064eca5d6138cafa1837de79cc382f44ff6b44c88d416e6139643e8b36673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav' => array($this, 'block_nav'),
            'actions' => array($this, 'block_actions'),
            'pageheader' => array($this, 'block_pageheader'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa833248d8060f46a87c4b45375d563115408246402f0d7818563ce88bcfe5c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa833248d8060f46a87c4b45375d563115408246402f0d7818563ce88bcfe5c9->enter($__internal_fa833248d8060f46a87c4b45375d563115408246402f0d7818563ce88bcfe5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:layout.html.twig"));

        $__internal_ca204c8b6d113a60b0ab5f03286327e3a11ddc9105de2fbd1154389c0b810f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca204c8b6d113a60b0ab5f03286327e3a11ddc9105de2fbd1154389c0b810f30->enter($__internal_ca204c8b6d113a60b0ab5f03286327e3a11ddc9105de2fbd1154389c0b810f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NotepadBundle:view:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "Notepad</title>
    <link rel=\"icon\" type=\"image/x -icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script
         src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\">
    </script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  </head>
  <body>
    <nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">
      <a class=\"navbar-brand\">
    ";
        // line 18
        $this->displayBlock('nav', $context, $blocks);
        // line 20
        echo "  </a>
    <div class=\"container\">

      <div class=\"page-header\">
        <div class=\"btn-toolbar pull-right\">
          ";
        // line 25
        $this->displayBlock('actions', $context, $blocks);
        // line 26
        echo "        </div>
        <h1>
          ";
        // line 28
        $this->displayBlock('pageheader', $context, $blocks);
        // line 29
        echo "        </h1>
      </div>
      </nav>

      ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "
    </div>
    
    <script> function wrapText(elementID, openTag, closeTag) {
      var textArea = \$('#' + elementID);
      var len = textArea.val().length;
      var start = textArea[0].selectionStart;
      var end = textArea[0].selectionEnd;
      var selectedText = textArea.val().substring(start, end);
      var replacement = openTag + selectedText + closeTag;
      textArea.val(textArea.val().substring(0, start) + replacement +
      textArea.val().substring(end, len));
    }
    \$('#tag').click(function() {
      wrapText(\"note_content\", \"<tag>\", \"</tag>\");
    });
</script>
  </body>
</html>
";
        
        $__internal_fa833248d8060f46a87c4b45375d563115408246402f0d7818563ce88bcfe5c9->leave($__internal_fa833248d8060f46a87c4b45375d563115408246402f0d7818563ce88bcfe5c9_prof);

        
        $__internal_ca204c8b6d113a60b0ab5f03286327e3a11ddc9105de2fbd1154389c0b810f30->leave($__internal_ca204c8b6d113a60b0ab5f03286327e3a11ddc9105de2fbd1154389c0b810f30_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_878e73b74163f2749ea67fbdcc8c10bcfa587b4b65d8a57c95bd4c2ca0e00029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878e73b74163f2749ea67fbdcc8c10bcfa587b4b65d8a57c95bd4c2ca0e00029->enter($__internal_878e73b74163f2749ea67fbdcc8c10bcfa587b4b65d8a57c95bd4c2ca0e00029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd25da89cc41063e1ebca6ea135367d6714820ca1a73771ee682983d551236af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd25da89cc41063e1ebca6ea135367d6714820ca1a73771ee682983d551236af->enter($__internal_dd25da89cc41063e1ebca6ea135367d6714820ca1a73771ee682983d551236af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Notepad";
        
        $__internal_dd25da89cc41063e1ebca6ea135367d6714820ca1a73771ee682983d551236af->leave($__internal_dd25da89cc41063e1ebca6ea135367d6714820ca1a73771ee682983d551236af_prof);

        
        $__internal_878e73b74163f2749ea67fbdcc8c10bcfa587b4b65d8a57c95bd4c2ca0e00029->leave($__internal_878e73b74163f2749ea67fbdcc8c10bcfa587b4b65d8a57c95bd4c2ca0e00029_prof);

    }

    // line 18
    public function block_nav($context, array $blocks = array())
    {
        $__internal_496eb8085f072a0773ec5d776d2c89f85fdcb6aeb47a7c8284317f13dae8bb4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496eb8085f072a0773ec5d776d2c89f85fdcb6aeb47a7c8284317f13dae8bb4b->enter($__internal_496eb8085f072a0773ec5d776d2c89f85fdcb6aeb47a7c8284317f13dae8bb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_508a35483160a7fa5e10bb2e54010a598eda34ee01f177e2c24714325a03b6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_508a35483160a7fa5e10bb2e54010a598eda34ee01f177e2c24714325a03b6d4->enter($__internal_508a35483160a7fa5e10bb2e54010a598eda34ee01f177e2c24714325a03b6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 19
        echo "    ";
        
        $__internal_508a35483160a7fa5e10bb2e54010a598eda34ee01f177e2c24714325a03b6d4->leave($__internal_508a35483160a7fa5e10bb2e54010a598eda34ee01f177e2c24714325a03b6d4_prof);

        
        $__internal_496eb8085f072a0773ec5d776d2c89f85fdcb6aeb47a7c8284317f13dae8bb4b->leave($__internal_496eb8085f072a0773ec5d776d2c89f85fdcb6aeb47a7c8284317f13dae8bb4b_prof);

    }

    // line 25
    public function block_actions($context, array $blocks = array())
    {
        $__internal_f04ac1fe7af457010b86d692eea2a9277f531d99da492214429acb38da28d9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04ac1fe7af457010b86d692eea2a9277f531d99da492214429acb38da28d9e5->enter($__internal_f04ac1fe7af457010b86d692eea2a9277f531d99da492214429acb38da28d9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_a90b6751530624e3a9be4cb3e056c3f10fa0dd09395701a53346df98c04b4a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90b6751530624e3a9be4cb3e056c3f10fa0dd09395701a53346df98c04b4a61->enter($__internal_a90b6751530624e3a9be4cb3e056c3f10fa0dd09395701a53346df98c04b4a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_a90b6751530624e3a9be4cb3e056c3f10fa0dd09395701a53346df98c04b4a61->leave($__internal_a90b6751530624e3a9be4cb3e056c3f10fa0dd09395701a53346df98c04b4a61_prof);

        
        $__internal_f04ac1fe7af457010b86d692eea2a9277f531d99da492214429acb38da28d9e5->leave($__internal_f04ac1fe7af457010b86d692eea2a9277f531d99da492214429acb38da28d9e5_prof);

    }

    // line 28
    public function block_pageheader($context, array $blocks = array())
    {
        $__internal_f27980e8a522766f60d01bffee6a1826fac0381c368e2c26fe11a6954245bc78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f27980e8a522766f60d01bffee6a1826fac0381c368e2c26fe11a6954245bc78->enter($__internal_f27980e8a522766f60d01bffee6a1826fac0381c368e2c26fe11a6954245bc78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        $__internal_6677011478f90eea3dc4f18992867f9e65b6bf21d9b57ef0ae139c690d3d1ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6677011478f90eea3dc4f18992867f9e65b6bf21d9b57ef0ae139c690d3d1ba6->enter($__internal_6677011478f90eea3dc4f18992867f9e65b6bf21d9b57ef0ae139c690d3d1ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageheader"));

        
        $__internal_6677011478f90eea3dc4f18992867f9e65b6bf21d9b57ef0ae139c690d3d1ba6->leave($__internal_6677011478f90eea3dc4f18992867f9e65b6bf21d9b57ef0ae139c690d3d1ba6_prof);

        
        $__internal_f27980e8a522766f60d01bffee6a1826fac0381c368e2c26fe11a6954245bc78->leave($__internal_f27980e8a522766f60d01bffee6a1826fac0381c368e2c26fe11a6954245bc78_prof);

    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        $__internal_42af7a5d8d5e74c730ad8cb40fb8ef44b6ba8f452796ead44eadc855c1f96775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42af7a5d8d5e74c730ad8cb40fb8ef44b6ba8f452796ead44eadc855c1f96775->enter($__internal_42af7a5d8d5e74c730ad8cb40fb8ef44b6ba8f452796ead44eadc855c1f96775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0106227a086343bdf715abc2158fc050bf5d88e48066c65640170c95e9d487b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0106227a086343bdf715abc2158fc050bf5d88e48066c65640170c95e9d487b4->enter($__internal_0106227a086343bdf715abc2158fc050bf5d88e48066c65640170c95e9d487b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_0106227a086343bdf715abc2158fc050bf5d88e48066c65640170c95e9d487b4->leave($__internal_0106227a086343bdf715abc2158fc050bf5d88e48066c65640170c95e9d487b4_prof);

        
        $__internal_42af7a5d8d5e74c730ad8cb40fb8ef44b6ba8f452796ead44eadc855c1f96775->leave($__internal_42af7a5d8d5e74c730ad8cb40fb8ef44b6ba8f452796ead44eadc855c1f96775_prof);

    }

    public function getTemplateName()
    {
        return "NotepadBundle:view:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 33,  172 => 28,  155 => 25,  145 => 19,  136 => 18,  118 => 6,  89 => 34,  87 => 33,  81 => 29,  79 => 28,  75 => 26,  73 => 25,  66 => 20,  64 => 18,  56 => 13,  49 => 9,  45 => 8,  41 => 7,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>

<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Notepad{% endblock %}Notepad</title>
    <link rel=\"icon\" type=\"image/x -icon\" href=\"{{ asset('favicon.ico') }}\" />
    <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('css/main.css') }}\" rel=\"stylesheet\">
    <script
         src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\">
    </script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
  </head>
  <body>
    <nav class=\"navbar navbar-light\" style=\"background-color: #e3f2fd;\">
      <a class=\"navbar-brand\">
    {% block nav %}
    {% endblock %}
  </a>
    <div class=\"container\">

      <div class=\"page-header\">
        <div class=\"btn-toolbar pull-right\">
          {% block actions %}{% endblock %}
        </div>
        <h1>
          {% block pageheader %}{% endblock %}
        </h1>
      </div>
      </nav>

      {% block content %}{% endblock %}

    </div>
    
    <script> function wrapText(elementID, openTag, closeTag) {
      var textArea = \$('#' + elementID);
      var len = textArea.val().length;
      var start = textArea[0].selectionStart;
      var end = textArea[0].selectionEnd;
      var selectedText = textArea.val().substring(start, end);
      var replacement = openTag + selectedText + closeTag;
      textArea.val(textArea.val().substring(0, start) + replacement +
      textArea.val().substring(end, len));
    }
    \$('#tag').click(function() {
      wrapText(\"note_content\", \"<tag>\", \"</tag>\");
    });
</script>
  </body>
</html>
", "NotepadBundle:view:layout.html.twig", "C:\\wamp64\\www\\Symfony\\src\\NotepadBundle/Resources/views/view/layout.html.twig");
    }
}
