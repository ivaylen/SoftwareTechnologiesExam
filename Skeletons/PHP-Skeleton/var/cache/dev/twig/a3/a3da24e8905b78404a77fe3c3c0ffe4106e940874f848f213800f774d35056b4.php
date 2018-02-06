<?php

/* base.html.twig */
class __TwigTemplate_93e2499d03c6402ea1e3906495568257ed0120721f7f5badb0e11600e82927c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c95ef2d235b00e7413f7a1d81c5c8264cfdbe24a17a30412fc5dc8631855a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c95ef2d235b00e7413f7a1d81c5c8264cfdbe24a17a30412fc5dc8631855a3e->enter($__internal_5c95ef2d235b00e7413f7a1d81c5c8264cfdbe24a17a30412fc5dc8631855a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e7a93f84c8bc46c15819dcb1b8c1f35315a6fd477c9fab50882ccd545ac6aa86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a93f84c8bc46c15819dcb1b8c1f35315a6fd477c9fab50882ccd545ac6aa86->enter($__internal_e7a93f84c8bc46c15819dcb1b8c1f35315a6fd477c9fab50882ccd545ac6aa86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_5c95ef2d235b00e7413f7a1d81c5c8264cfdbe24a17a30412fc5dc8631855a3e->leave($__internal_5c95ef2d235b00e7413f7a1d81c5c8264cfdbe24a17a30412fc5dc8631855a3e_prof);

        
        $__internal_e7a93f84c8bc46c15819dcb1b8c1f35315a6fd477c9fab50882ccd545ac6aa86->leave($__internal_e7a93f84c8bc46c15819dcb1b8c1f35315a6fd477c9fab50882ccd545ac6aa86_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_a03cafb209f2146466f8bbcd5482fd37cb899b0e5f5e1d30f866d57af9d2aaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a03cafb209f2146466f8bbcd5482fd37cb899b0e5f5e1d30f866d57af9d2aaee->enter($__internal_a03cafb209f2146466f8bbcd5482fd37cb899b0e5f5e1d30f866d57af9d2aaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_72ddec5c2a3f2fef755a3f8def6121f889334eea192af6cfe874d50202d3dfed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72ddec5c2a3f2fef755a3f8def6121f889334eea192af6cfe874d50202d3dfed->enter($__internal_72ddec5c2a3f2fef755a3f8def6121f889334eea192af6cfe874d50202d3dfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Rider";
        
        $__internal_72ddec5c2a3f2fef755a3f8def6121f889334eea192af6cfe874d50202d3dfed->leave($__internal_72ddec5c2a3f2fef755a3f8def6121f889334eea192af6cfe874d50202d3dfed_prof);

        
        $__internal_a03cafb209f2146466f8bbcd5482fd37cb899b0e5f5e1d30f866d57af9d2aaee->leave($__internal_a03cafb209f2146466f8bbcd5482fd37cb899b0e5f5e1d30f866d57af9d2aaee_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7af49fe21a9262d32d8fad7849e73d0b11b38dc1b389251d9303f7770a9e63c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af49fe21a9262d32d8fad7849e73d0b11b38dc1b389251d9303f7770a9e63c3->enter($__internal_7af49fe21a9262d32d8fad7849e73d0b11b38dc1b389251d9303f7770a9e63c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c60bec353d40efebd194c7130710215660d6fbf024f1e12274e64f09f2bf3189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60bec353d40efebd194c7130710215660d6fbf024f1e12274e64f09f2bf3189->enter($__internal_c60bec353d40efebd194c7130710215660d6fbf024f1e12274e64f09f2bf3189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/create-style.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_c60bec353d40efebd194c7130710215660d6fbf024f1e12274e64f09f2bf3189->leave($__internal_c60bec353d40efebd194c7130710215660d6fbf024f1e12274e64f09f2bf3189_prof);

        
        $__internal_7af49fe21a9262d32d8fad7849e73d0b11b38dc1b389251d9303f7770a9e63c3->leave($__internal_7af49fe21a9262d32d8fad7849e73d0b11b38dc1b389251d9303f7770a9e63c3_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_c879779d4a5066600eaa635c2ebb2ac8ec7ff4667e673b1d9ac1a7b311b79d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c879779d4a5066600eaa635c2ebb2ac8ec7ff4667e673b1d9ac1a7b311b79d33->enter($__internal_c879779d4a5066600eaa635c2ebb2ac8ec7ff4667e673b1d9ac1a7b311b79d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_db5a77f0375231882da95829409195312195810c2e5747fd1fabce0fdb07aed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5a77f0375231882da95829409195312195810c2e5747fd1fabce0fdb07aed8->enter($__internal_db5a77f0375231882da95829409195312195810c2e5747fd1fabce0fdb07aed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_db5a77f0375231882da95829409195312195810c2e5747fd1fabce0fdb07aed8->leave($__internal_db5a77f0375231882da95829409195312195810c2e5747fd1fabce0fdb07aed8_prof);

        
        $__internal_c879779d4a5066600eaa635c2ebb2ac8ec7ff4667e673b1d9ac1a7b311b79d33->leave($__internal_c879779d4a5066600eaa635c2ebb2ac8ec7ff4667e673b1d9ac1a7b311b79d33_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e830782edead5381ee8849544d31f733083772aa266d2f4c64644e8f0baf226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e830782edead5381ee8849544d31f733083772aa266d2f4c64644e8f0baf226->enter($__internal_2e830782edead5381ee8849544d31f733083772aa266d2f4c64644e8f0baf226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7a0300f8bb2e177f06444a15ce05f2ba0564fed1bb2d82be34dede15ba15878e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a0300f8bb2e177f06444a15ce05f2ba0564fed1bb2d82be34dede15ba15878e->enter($__internal_7a0300f8bb2e177f06444a15ce05f2ba0564fed1bb2d82be34dede15ba15878e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_7a0300f8bb2e177f06444a15ce05f2ba0564fed1bb2d82be34dede15ba15878e->leave($__internal_7a0300f8bb2e177f06444a15ce05f2ba0564fed1bb2d82be34dede15ba15878e_prof);

        
        $__internal_2e830782edead5381ee8849544d31f733083772aa266d2f4c64644e8f0baf226->leave($__internal_2e830782edead5381ee8849544d31f733083772aa266d2f4c64644e8f0baf226_prof);

    }

    public function block_main($context, array $blocks = array())
    {
        $__internal_e35680ca68fa0c3e2e3372566aa6297da9f64e59ccf5347ede8f3381038a4b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35680ca68fa0c3e2e3372566aa6297da9f64e59ccf5347ede8f3381038a4b03->enter($__internal_e35680ca68fa0c3e2e3372566aa6297da9f64e59ccf5347ede8f3381038a4b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_b61f51e6711569ce458a49c5c1c81dd17c155820e59d498adc831f7b85b81cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61f51e6711569ce458a49c5c1c81dd17c155820e59d498adc831f7b85b81cbc->enter($__internal_b61f51e6711569ce458a49c5c1c81dd17c155820e59d498adc831f7b85b81cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_b61f51e6711569ce458a49c5c1c81dd17c155820e59d498adc831f7b85b81cbc->leave($__internal_b61f51e6711569ce458a49c5c1c81dd17c155820e59d498adc831f7b85b81cbc_prof);

        
        $__internal_e35680ca68fa0c3e2e3372566aa6297da9f64e59ccf5347ede8f3381038a4b03->leave($__internal_e35680ca68fa0c3e2e3372566aa6297da9f64e59ccf5347ede8f3381038a4b03_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 21,  132 => 20,  115 => 19,  103 => 14,  99 => 13,  94 => 12,  85 => 11,  67 => 10,  55 => 23,  53 => 20,  49 => 19,  42 => 16,  40 => 11,  36 => 10,  30 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Project Rider{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/reset.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/create-style.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">
{% block body %}
    {% block main %}{% endblock %}
{% endblock %}
</body>
</html>
", "base.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\base.html.twig");
    }
}
