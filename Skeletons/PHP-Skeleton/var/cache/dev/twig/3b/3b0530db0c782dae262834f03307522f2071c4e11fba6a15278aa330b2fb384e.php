<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f32ad73c9bc804e7d7685ce925e27ce9c7daa98efc0b9a8c89227d7076a75563 extends Twig_Template
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
        $__internal_6fdfb45abcb7c476871ddd840f1b8488329aad20daf6721647d8192c6ee8c6b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdfb45abcb7c476871ddd840f1b8488329aad20daf6721647d8192c6ee8c6b7->enter($__internal_6fdfb45abcb7c476871ddd840f1b8488329aad20daf6721647d8192c6ee8c6b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d5bfc5521bc42978e9b39600f18d10df0da2142f301a0162478f0a09ba9cfb41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5bfc5521bc42978e9b39600f18d10df0da2142f301a0162478f0a09ba9cfb41->enter($__internal_d5bfc5521bc42978e9b39600f18d10df0da2142f301a0162478f0a09ba9cfb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fdfb45abcb7c476871ddd840f1b8488329aad20daf6721647d8192c6ee8c6b7->leave($__internal_6fdfb45abcb7c476871ddd840f1b8488329aad20daf6721647d8192c6ee8c6b7_prof);

        
        $__internal_d5bfc5521bc42978e9b39600f18d10df0da2142f301a0162478f0a09ba9cfb41->leave($__internal_d5bfc5521bc42978e9b39600f18d10df0da2142f301a0162478f0a09ba9cfb41_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04e02df4fdd6292759e4e22ad3f489f4475ed3569019855fc65116b70a2d94d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e02df4fdd6292759e4e22ad3f489f4475ed3569019855fc65116b70a2d94d4->enter($__internal_04e02df4fdd6292759e4e22ad3f489f4475ed3569019855fc65116b70a2d94d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d46e156121744e5452e8b9f2b644bc6cd3d1739740678047b6ece7025fdabf81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46e156121744e5452e8b9f2b644bc6cd3d1739740678047b6ece7025fdabf81->enter($__internal_d46e156121744e5452e8b9f2b644bc6cd3d1739740678047b6ece7025fdabf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d46e156121744e5452e8b9f2b644bc6cd3d1739740678047b6ece7025fdabf81->leave($__internal_d46e156121744e5452e8b9f2b644bc6cd3d1739740678047b6ece7025fdabf81_prof);

        
        $__internal_04e02df4fdd6292759e4e22ad3f489f4475ed3569019855fc65116b70a2d94d4->leave($__internal_04e02df4fdd6292759e4e22ad3f489f4475ed3569019855fc65116b70a2d94d4_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ec69f05b342c3b855b43d1002d7813e65016f31e70930396aadab850e02bbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec69f05b342c3b855b43d1002d7813e65016f31e70930396aadab850e02bbf1->enter($__internal_3ec69f05b342c3b855b43d1002d7813e65016f31e70930396aadab850e02bbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cdb229c80d36e19277b554863033916f1ad4f683e3203f7bc4b865e2bb03b471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdb229c80d36e19277b554863033916f1ad4f683e3203f7bc4b865e2bb03b471->enter($__internal_cdb229c80d36e19277b554863033916f1ad4f683e3203f7bc4b865e2bb03b471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_cdb229c80d36e19277b554863033916f1ad4f683e3203f7bc4b865e2bb03b471->leave($__internal_cdb229c80d36e19277b554863033916f1ad4f683e3203f7bc4b865e2bb03b471_prof);

        
        $__internal_3ec69f05b342c3b855b43d1002d7813e65016f31e70930396aadab850e02bbf1->leave($__internal_3ec69f05b342c3b855b43d1002d7813e65016f31e70930396aadab850e02bbf1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8161cd626a4df7d0fa90b8393a2981ea053ad6cd6955c6803aaa888a04e04969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8161cd626a4df7d0fa90b8393a2981ea053ad6cd6955c6803aaa888a04e04969->enter($__internal_8161cd626a4df7d0fa90b8393a2981ea053ad6cd6955c6803aaa888a04e04969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d4514b452987ec7cb4a5b708fe2f1a71930451b5b892deb844edbc31976f752d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4514b452987ec7cb4a5b708fe2f1a71930451b5b892deb844edbc31976f752d->enter($__internal_d4514b452987ec7cb4a5b708fe2f1a71930451b5b892deb844edbc31976f752d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d4514b452987ec7cb4a5b708fe2f1a71930451b5b892deb844edbc31976f752d->leave($__internal_d4514b452987ec7cb4a5b708fe2f1a71930451b5b892deb844edbc31976f752d_prof);

        
        $__internal_8161cd626a4df7d0fa90b8393a2981ea053ad6cd6955c6803aaa888a04e04969->leave($__internal_8161cd626a4df7d0fa90b8393a2981ea053ad6cd6955c6803aaa888a04e04969_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
