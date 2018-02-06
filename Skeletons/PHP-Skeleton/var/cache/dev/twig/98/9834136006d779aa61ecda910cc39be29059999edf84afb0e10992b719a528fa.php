<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_09886c37796d81d574b2448cf2a22ea32da8dad546b69f22c376ce19a869ce97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_cc132da78d920f1f8a8c68c5a5ad05b3196f15d9f6d4b219890f7417d47ba9a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc132da78d920f1f8a8c68c5a5ad05b3196f15d9f6d4b219890f7417d47ba9a2->enter($__internal_cc132da78d920f1f8a8c68c5a5ad05b3196f15d9f6d4b219890f7417d47ba9a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8175672c39a6ec7de5da6e63e1d78ef1144b5f5e8d47778715b47f71199b9343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8175672c39a6ec7de5da6e63e1d78ef1144b5f5e8d47778715b47f71199b9343->enter($__internal_8175672c39a6ec7de5da6e63e1d78ef1144b5f5e8d47778715b47f71199b9343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc132da78d920f1f8a8c68c5a5ad05b3196f15d9f6d4b219890f7417d47ba9a2->leave($__internal_cc132da78d920f1f8a8c68c5a5ad05b3196f15d9f6d4b219890f7417d47ba9a2_prof);

        
        $__internal_8175672c39a6ec7de5da6e63e1d78ef1144b5f5e8d47778715b47f71199b9343->leave($__internal_8175672c39a6ec7de5da6e63e1d78ef1144b5f5e8d47778715b47f71199b9343_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04a296bd004effcee5e1ed471a528170160655cff8b58d0a6d8dc5dd844b7bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04a296bd004effcee5e1ed471a528170160655cff8b58d0a6d8dc5dd844b7bcd->enter($__internal_04a296bd004effcee5e1ed471a528170160655cff8b58d0a6d8dc5dd844b7bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a2f800dcec1786c07d0163c4490b2ffce209212052ddbd21ffe5521d00a727cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f800dcec1786c07d0163c4490b2ffce209212052ddbd21ffe5521d00a727cf->enter($__internal_a2f800dcec1786c07d0163c4490b2ffce209212052ddbd21ffe5521d00a727cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a2f800dcec1786c07d0163c4490b2ffce209212052ddbd21ffe5521d00a727cf->leave($__internal_a2f800dcec1786c07d0163c4490b2ffce209212052ddbd21ffe5521d00a727cf_prof);

        
        $__internal_04a296bd004effcee5e1ed471a528170160655cff8b58d0a6d8dc5dd844b7bcd->leave($__internal_04a296bd004effcee5e1ed471a528170160655cff8b58d0a6d8dc5dd844b7bcd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6db14a3809817b1c1099a4ef92a76c8ea5737d6b0e40e4f4774090d41ad59797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6db14a3809817b1c1099a4ef92a76c8ea5737d6b0e40e4f4774090d41ad59797->enter($__internal_6db14a3809817b1c1099a4ef92a76c8ea5737d6b0e40e4f4774090d41ad59797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_28a1724be5cdc9701ff776ac9ce18f8d0d1280de937f1622994f29413759cd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a1724be5cdc9701ff776ac9ce18f8d0d1280de937f1622994f29413759cd6c->enter($__internal_28a1724be5cdc9701ff776ac9ce18f8d0d1280de937f1622994f29413759cd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_28a1724be5cdc9701ff776ac9ce18f8d0d1280de937f1622994f29413759cd6c->leave($__internal_28a1724be5cdc9701ff776ac9ce18f8d0d1280de937f1622994f29413759cd6c_prof);

        
        $__internal_6db14a3809817b1c1099a4ef92a76c8ea5737d6b0e40e4f4774090d41ad59797->leave($__internal_6db14a3809817b1c1099a4ef92a76c8ea5737d6b0e40e4f4774090d41ad59797_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5b7ba3b7571eae9ecd36830c4e2bebd143c7ad6ea13362b4f1ffaf3d96f1e386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7ba3b7571eae9ecd36830c4e2bebd143c7ad6ea13362b4f1ffaf3d96f1e386->enter($__internal_5b7ba3b7571eae9ecd36830c4e2bebd143c7ad6ea13362b4f1ffaf3d96f1e386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96fc5312353774ff1be7727dc198b1dcca4ecc5ed58c2384bf27fb4cfd48d00a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96fc5312353774ff1be7727dc198b1dcca4ecc5ed58c2384bf27fb4cfd48d00a->enter($__internal_96fc5312353774ff1be7727dc198b1dcca4ecc5ed58c2384bf27fb4cfd48d00a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96fc5312353774ff1be7727dc198b1dcca4ecc5ed58c2384bf27fb4cfd48d00a->leave($__internal_96fc5312353774ff1be7727dc198b1dcca4ecc5ed58c2384bf27fb4cfd48d00a_prof);

        
        $__internal_5b7ba3b7571eae9ecd36830c4e2bebd143c7ad6ea13362b4f1ffaf3d96f1e386->leave($__internal_5b7ba3b7571eae9ecd36830c4e2bebd143c7ad6ea13362b4f1ffaf3d96f1e386_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
