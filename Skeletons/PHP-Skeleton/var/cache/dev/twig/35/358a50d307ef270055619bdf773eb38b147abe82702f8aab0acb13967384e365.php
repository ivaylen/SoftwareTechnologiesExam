<?php

/* :project:create.html.twig */
class __TwigTemplate_554ce2a565e3f40b5aec014ba1dafbebaf1d412fdc82eed325a73c6bf41a5acb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:create.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b074fad546e60450278412b4a4124ed1d9ce2739c5735855d657c71ccc78946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b074fad546e60450278412b4a4124ed1d9ce2739c5735855d657c71ccc78946->enter($__internal_0b074fad546e60450278412b4a4124ed1d9ce2739c5735855d657c71ccc78946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $__internal_be2d2ad946356aed8e29e0d0d4b1c8e56426b5edc4559f2bf38248a0f7f35b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2d2ad946356aed8e29e0d0d4b1c8e56426b5edc4559f2bf38248a0f7f35b7b->enter($__internal_be2d2ad946356aed8e29e0d0d4b1c8e56426b5edc4559f2bf38248a0f7f35b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b074fad546e60450278412b4a4124ed1d9ce2739c5735855d657c71ccc78946->leave($__internal_0b074fad546e60450278412b4a4124ed1d9ce2739c5735855d657c71ccc78946_prof);

        
        $__internal_be2d2ad946356aed8e29e0d0d4b1c8e56426b5edc4559f2bf38248a0f7f35b7b->leave($__internal_be2d2ad946356aed8e29e0d0d4b1c8e56426b5edc4559f2bf38248a0f7f35b7b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_001233e894c9971eddd6732faa149a3d3a50fc921691e453a4a9baf7ac20d33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_001233e894c9971eddd6732faa149a3d3a50fc921691e453a4a9baf7ac20d33a->enter($__internal_001233e894c9971eddd6732faa149a3d3a50fc921691e453a4a9baf7ac20d33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_742203ff816d0756031807a131afa9ffffeb9b77200c09b7ed5f6f888c81ff01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_742203ff816d0756031807a131afa9ffffeb9b77200c09b7ed5f6f888c81ff01->enter($__internal_742203ff816d0756031807a131afa9ffffeb9b77200c09b7ed5f6f888c81ff01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_742203ff816d0756031807a131afa9ffffeb9b77200c09b7ed5f6f888c81ff01->leave($__internal_742203ff816d0756031807a131afa9ffffeb9b77200c09b7ed5f6f888c81ff01_prof);

        
        $__internal_001233e894c9971eddd6732faa149a3d3a50fc921691e453a4a9baf7ac20d33a->leave($__internal_001233e894c9971eddd6732faa149a3d3a50fc921691e453a4a9baf7ac20d33a_prof);

    }

    public function getTemplateName()
    {
        return ":project:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 26,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block main %}
<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Create Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"></textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Create Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", ":project:create.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\app/Resources\\views/project/create.html.twig");
    }
}
