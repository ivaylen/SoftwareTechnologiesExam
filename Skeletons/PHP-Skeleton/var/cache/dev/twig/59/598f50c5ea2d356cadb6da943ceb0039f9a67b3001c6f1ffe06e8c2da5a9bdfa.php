<?php

/* project/delete.html.twig */
class __TwigTemplate_e96ae7270a11341b1876afd5543a20b46b73c0030e5df66a9382e05bce8babd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/delete.html.twig", 1);
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
        $__internal_23bc10d9194d6333a8135853042e3c8fe2eb0e0610ce9f89cbd55723e90e6454 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23bc10d9194d6333a8135853042e3c8fe2eb0e0610ce9f89cbd55723e90e6454->enter($__internal_23bc10d9194d6333a8135853042e3c8fe2eb0e0610ce9f89cbd55723e90e6454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/delete.html.twig"));

        $__internal_924d38fbbccbb80f723a3b72c78979fca5d31abdd04e4b37d9d52c2c107dddc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_924d38fbbccbb80f723a3b72c78979fca5d31abdd04e4b37d9d52c2c107dddc2->enter($__internal_924d38fbbccbb80f723a3b72c78979fca5d31abdd04e4b37d9d52c2c107dddc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23bc10d9194d6333a8135853042e3c8fe2eb0e0610ce9f89cbd55723e90e6454->leave($__internal_23bc10d9194d6333a8135853042e3c8fe2eb0e0610ce9f89cbd55723e90e6454_prof);

        
        $__internal_924d38fbbccbb80f723a3b72c78979fca5d31abdd04e4b37d9d52c2c107dddc2->leave($__internal_924d38fbbccbb80f723a3b72c78979fca5d31abdd04e4b37d9d52c2c107dddc2_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_9f7c93120ca3b85009efdbb0d0fe7c6da69eccf2401cd9e39f3f2cba9cc2589a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7c93120ca3b85009efdbb0d0fe7c6da69eccf2401cd9e39f3f2cba9cc2589a->enter($__internal_9f7c93120ca3b85009efdbb0d0fe7c6da69eccf2401cd9e39f3f2cba9cc2589a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_7de6f408a939a3985ffcd04c961036568e6fc40987a1e51721a914bedec6008c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7de6f408a939a3985ffcd04c961036568e6fc40987a1e51721a914bedec6008c->enter($__internal_7de6f408a939a3985ffcd04c961036568e6fc40987a1e51721a914bedec6008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        echo "\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["project"] ?? $this->getContext($context, "project")), "budget", array()), "html", null, true);
        echo "\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'row');
        echo "
    </form>
</div>
";
        
        $__internal_7de6f408a939a3985ffcd04c961036568e6fc40987a1e51721a914bedec6008c->leave($__internal_7de6f408a939a3985ffcd04c961036568e6fc40987a1e51721a914bedec6008c_prof);

        
        $__internal_9f7c93120ca3b85009efdbb0d0fe7c6da69eccf2401cd9e39f3f2cba9cc2589a->leave($__internal_9f7c93120ca3b85009efdbb0d0fe7c6da69eccf2401cd9e39f3f2cba9cc2589a_prof);

    }

    public function getTemplateName()
    {
        return "project/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  73 => 20,  66 => 16,  58 => 11,  49 => 4,  40 => 3,  11 => 1,);
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
            <input class=\"create-title-content\" name=\"project[title]\" value=\"{{ project.title }}\" disabled=\"disabled\"/>
        </div>
        <div class=\"create-description\">
            <div class=\"create-description-label\">Description</div>
            <textarea rows=\"3\" class=\"create-description-content\" name=\"project[description]\"
                      disabled=\"disabled\">{{ project.description }}</textarea>
        </div>
        <div class=\"create-budget\">
            <div class=\"create-budget-label\">Budget</div>
            <input type=\"number\" min=\"0\" class=\"create-budget-content\" name=\"project[budget]\" value=\"{{ project.budget }}\"
                   disabled=\"disabled\"/>
        </div>
        <div class=\"create-button-holder\">
            <button type=\"submit\" class=\"submit-button\">Delete Project</button>
            <a type=\"button\" href=\"/\" class=\"back-button\">Back</a>
        </div>

        {{ form_row(form._token) }}
    </form>
</div>
{% endblock %}", "project/delete.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\project\\delete.html.twig");
    }
}
