<?php

/* project/create.html.twig */
class __TwigTemplate_2a1b5d707aa72104692b6ffa1a05c4fb1e74d1bf350d67ef9d0e176233c33cfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "project/create.html.twig", 1);
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
        $__internal_5a3001a6ce767b55b8eec1ef26b0842f91fd683e5860eb6982098cb0dfb95898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3001a6ce767b55b8eec1ef26b0842f91fd683e5860eb6982098cb0dfb95898->enter($__internal_5a3001a6ce767b55b8eec1ef26b0842f91fd683e5860eb6982098cb0dfb95898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $__internal_44845227c8c5815ea7dd2c3961fcb9c4a2ea8bf2ca2a7836e1d763a2f3b0d0ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44845227c8c5815ea7dd2c3961fcb9c4a2ea8bf2ca2a7836e1d763a2f3b0d0ee->enter($__internal_44845227c8c5815ea7dd2c3961fcb9c4a2ea8bf2ca2a7836e1d763a2f3b0d0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a3001a6ce767b55b8eec1ef26b0842f91fd683e5860eb6982098cb0dfb95898->leave($__internal_5a3001a6ce767b55b8eec1ef26b0842f91fd683e5860eb6982098cb0dfb95898_prof);

        
        $__internal_44845227c8c5815ea7dd2c3961fcb9c4a2ea8bf2ca2a7836e1d763a2f3b0d0ee->leave($__internal_44845227c8c5815ea7dd2c3961fcb9c4a2ea8bf2ca2a7836e1d763a2f3b0d0ee_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_6a6245259ffc82af51ed58be58f8a1849d6bf4ddbde041ba68cab41c47636ed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a6245259ffc82af51ed58be58f8a1849d6bf4ddbde041ba68cab41c47636ed0->enter($__internal_6a6245259ffc82af51ed58be58f8a1849d6bf4ddbde041ba68cab41c47636ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_88c7753362f8c179791ce71e3d9db5dbf52fe99aec8ba56e7ac0742ad162cb00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c7753362f8c179791ce71e3d9db5dbf52fe99aec8ba56e7ac0742ad162cb00->enter($__internal_88c7753362f8c179791ce71e3d9db5dbf52fe99aec8ba56e7ac0742ad162cb00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_88c7753362f8c179791ce71e3d9db5dbf52fe99aec8ba56e7ac0742ad162cb00->leave($__internal_88c7753362f8c179791ce71e3d9db5dbf52fe99aec8ba56e7ac0742ad162cb00_prof);

        
        $__internal_6a6245259ffc82af51ed58be58f8a1849d6bf4ddbde041ba68cab41c47636ed0->leave($__internal_6a6245259ffc82af51ed58be58f8a1849d6bf4ddbde041ba68cab41c47636ed0_prof);

    }

    public function getTemplateName()
    {
        return "project/create.html.twig";
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
{% endblock %}", "project/create.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\app\\Resources\\views\\project\\create.html.twig");
    }
}
