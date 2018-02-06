<?php

/* :project:edit.html.twig */
class __TwigTemplate_472af7ecc306755c4e2c7e7cfa39a6fdd2712b7425ef7a3a903b98a8685897c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":project:edit.html.twig", 1);
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
        $__internal_fb962698b18499ea0fc3084e361b71e6ae55702e9cae2a73026db52b1b7f73a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb962698b18499ea0fc3084e361b71e6ae55702e9cae2a73026db52b1b7f73a7->enter($__internal_fb962698b18499ea0fc3084e361b71e6ae55702e9cae2a73026db52b1b7f73a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $__internal_f04bb028e010a67d6dfe36e9d8030626b0c21371ce186da86517b88590de683b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f04bb028e010a67d6dfe36e9d8030626b0c21371ce186da86517b88590de683b->enter($__internal_f04bb028e010a67d6dfe36e9d8030626b0c21371ce186da86517b88590de683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":project:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb962698b18499ea0fc3084e361b71e6ae55702e9cae2a73026db52b1b7f73a7->leave($__internal_fb962698b18499ea0fc3084e361b71e6ae55702e9cae2a73026db52b1b7f73a7_prof);

        
        $__internal_f04bb028e010a67d6dfe36e9d8030626b0c21371ce186da86517b88590de683b->leave($__internal_f04bb028e010a67d6dfe36e9d8030626b0c21371ce186da86517b88590de683b_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_40dae05d34cc333dea0f5fff465c3a26ed7f5ff66d06a74de8fea480ffe1a165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40dae05d34cc333dea0f5fff465c3a26ed7f5ff66d06a74de8fea480ffe1a165->enter($__internal_40dae05d34cc333dea0f5fff465c3a26ed7f5ff66d06a74de8fea480ffe1a165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_892b0d796f9ae80c045bf5f652da3d16bd323540e66aa1254f1a5a9c961264f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892b0d796f9ae80c045bf5f652da3d16bd323540e66aa1254f1a5a9c961264f4->enter($__internal_892b0d796f9ae80c045bf5f652da3d16bd323540e66aa1254f1a5a9c961264f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <form class=\"project-create\" method=\"post\">
        <div class=\"create-header\">
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "title", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_892b0d796f9ae80c045bf5f652da3d16bd323540e66aa1254f1a5a9c961264f4->leave($__internal_892b0d796f9ae80c045bf5f652da3d16bd323540e66aa1254f1a5a9c961264f4_prof);

        
        $__internal_40dae05d34cc333dea0f5fff465c3a26ed7f5ff66d06a74de8fea480ffe1a165->leave($__internal_40dae05d34cc333dea0f5fff465c3a26ed7f5ff66d06a74de8fea480ffe1a165_prof);

    }

    public function getTemplateName()
    {
        return ":project:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 26,  72 => 19,  65 => 15,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
            Delete Project
        </div>
        <div class=\"create-title\">
            <div class=\"create-title-label\">Title</div>
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" />
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\" />
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Edit Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}

", ":project:edit.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\app/Resources\\views/project/edit.html.twig");
    }
}
