<?php

/* project/index.html.twig */
class __TwigTemplate_9dd928d8e8464e06dc542ea53f6838e6a8896e0ce25a52ee4992d67c2de7888c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/index.html.twig", 1);
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
        $__internal_57ac02d6f8d2ff519caa4b389540986c0575e6d19bf64b2c8f027fb37cc21496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ac02d6f8d2ff519caa4b389540986c0575e6d19bf64b2c8f027fb37cc21496->enter($__internal_57ac02d6f8d2ff519caa4b389540986c0575e6d19bf64b2c8f027fb37cc21496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $__internal_8ba97d2b3401628a3f64b7409df46662bd2ac4b83713f580cce0fb8b4aff72d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ba97d2b3401628a3f64b7409df46662bd2ac4b83713f580cce0fb8b4aff72d3->enter($__internal_8ba97d2b3401628a3f64b7409df46662bd2ac4b83713f580cce0fb8b4aff72d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57ac02d6f8d2ff519caa4b389540986c0575e6d19bf64b2c8f027fb37cc21496->leave($__internal_57ac02d6f8d2ff519caa4b389540986c0575e6d19bf64b2c8f027fb37cc21496_prof);

        
        $__internal_8ba97d2b3401628a3f64b7409df46662bd2ac4b83713f580cce0fb8b4aff72d3->leave($__internal_8ba97d2b3401628a3f64b7409df46662bd2ac4b83713f580cce0fb8b4aff72d3_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7a1f32f320d2bb4d905f18d85bfb875e4fe0edf9e0f2aee3a388bd96da403c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1f32f320d2bb4d905f18d85bfb875e4fe0edf9e0f2aee3a388bd96da403c8b->enter($__internal_7a1f32f320d2bb4d905f18d85bfb875e4fe0edf9e0f2aee3a388bd96da403c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_fdffed5c2463c8f3d116c06f1785370a92d5e6441ed851ba42da6265cf18c18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdffed5c2463c8f3d116c06f1785370a92d5e6441ed851ba42da6265cf18c18a->enter($__internal_fdffed5c2463c8f3d116c06f1785370a92d5e6441ed851ba42da6265cf18c18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "<div class=\"wrapper\">
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["projects"] ?? $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 16
            echo "                <div class=\"project\">
                    <div class=\"project-title\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-budget\">
                        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "budget", array()), "html", null, true);
            echo "
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
</div>
";
        
        $__internal_fdffed5c2463c8f3d116c06f1785370a92d5e6441ed851ba42da6265cf18c18a->leave($__internal_fdffed5c2463c8f3d116c06f1785370a92d5e6441ed851ba42da6265cf18c18a_prof);

        
        $__internal_7a1f32f320d2bb4d905f18d85bfb875e4fe0edf9e0f2aee3a388bd96da403c8b->leave($__internal_7a1f32f320d2bb4d905f18d85bfb875e4fe0edf9e0f2aee3a388bd96da403c8b_prof);

    }

    public function getTemplateName()
    {
        return "project/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 29,  86 => 25,  82 => 24,  76 => 21,  70 => 18,  66 => 16,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"button-holder\">
        <a type=\"button\" href=\"/create\" class=\"log-button\">Create New Project</a>
    </div>
    <div class=\"content\">
        <div class=\"header\">
            <div class=\"project-label\">Project</div>
            <div class=\"budget-label\">Budget</div>
            <div class=\"actions-label\">Actions</div>
        </div>
        <div class=\"main\">
            {% for project in projects %}
                <div class=\"project\">
                    <div class=\"project-title\">
                        {{ project.title }}
                    </div>
                    <div class=\"project-budget\">
                        {{ project.budget }}
                    </div>
                    <div class=\"project-actions\">
                        <a type=\"button\" href=\"{{ path('edit', {id: project.id}) }}\" class=\"edit-button\">Edit</a>
                        <a type=\"button\" href=\"{{ path('delete', {id: project.id}) }}\" class=\"delete-button\">Delete</a>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
{% endblock %}", "project/index.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\project\\index.html.twig");
    }
}
