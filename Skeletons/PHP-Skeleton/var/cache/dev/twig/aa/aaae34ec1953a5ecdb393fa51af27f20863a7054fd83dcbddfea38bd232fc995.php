<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_e376c751e330419d3f9a1a4b0a70adfbd1d2211ad6355062ee234a1596327f48 extends Twig_Template
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
        $__internal_fb8e105eb8186932702d3b3edc7a32076212836b434c34a4edb2712fbeab2f32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb8e105eb8186932702d3b3edc7a32076212836b434c34a4edb2712fbeab2f32->enter($__internal_fb8e105eb8186932702d3b3edc7a32076212836b434c34a4edb2712fbeab2f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_246cbb5a994fed1c46e3a0524c5a68c7d8a68ef654ca86fe19e89a82c03c00a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246cbb5a994fed1c46e3a0524c5a68c7d8a68ef654ca86fe19e89a82c03c00a8->enter($__internal_246cbb5a994fed1c46e3a0524c5a68c7d8a68ef654ca86fe19e89a82c03c00a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb8e105eb8186932702d3b3edc7a32076212836b434c34a4edb2712fbeab2f32->leave($__internal_fb8e105eb8186932702d3b3edc7a32076212836b434c34a4edb2712fbeab2f32_prof);

        
        $__internal_246cbb5a994fed1c46e3a0524c5a68c7d8a68ef654ca86fe19e89a82c03c00a8->leave($__internal_246cbb5a994fed1c46e3a0524c5a68c7d8a68ef654ca86fe19e89a82c03c00a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_49b477d690d704e612b97f5e441eb4b98bae719811aee3f9de2549c1ee297b22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49b477d690d704e612b97f5e441eb4b98bae719811aee3f9de2549c1ee297b22->enter($__internal_49b477d690d704e612b97f5e441eb4b98bae719811aee3f9de2549c1ee297b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1599ccb178defa6af360032e67a7ad01a2a1929d20f3831a4467a15002f13e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1599ccb178defa6af360032e67a7ad01a2a1929d20f3831a4467a15002f13e1c->enter($__internal_1599ccb178defa6af360032e67a7ad01a2a1929d20f3831a4467a15002f13e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1599ccb178defa6af360032e67a7ad01a2a1929d20f3831a4467a15002f13e1c->leave($__internal_1599ccb178defa6af360032e67a7ad01a2a1929d20f3831a4467a15002f13e1c_prof);

        
        $__internal_49b477d690d704e612b97f5e441eb4b98bae719811aee3f9de2549c1ee297b22->leave($__internal_49b477d690d704e612b97f5e441eb4b98bae719811aee3f9de2549c1ee297b22_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_86fe2518b6b9bcc17f0b28ff57ee056378f7a44e9d9093f233de8547fe4a668f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86fe2518b6b9bcc17f0b28ff57ee056378f7a44e9d9093f233de8547fe4a668f->enter($__internal_86fe2518b6b9bcc17f0b28ff57ee056378f7a44e9d9093f233de8547fe4a668f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d575ba51356d760fd2d257249aa16b022a61063fa1b0a1697570142ab904214e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d575ba51356d760fd2d257249aa16b022a61063fa1b0a1697570142ab904214e->enter($__internal_d575ba51356d760fd2d257249aa16b022a61063fa1b0a1697570142ab904214e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d575ba51356d760fd2d257249aa16b022a61063fa1b0a1697570142ab904214e->leave($__internal_d575ba51356d760fd2d257249aa16b022a61063fa1b0a1697570142ab904214e_prof);

        
        $__internal_86fe2518b6b9bcc17f0b28ff57ee056378f7a44e9d9093f233de8547fe4a668f->leave($__internal_86fe2518b6b9bcc17f0b28ff57ee056378f7a44e9d9093f233de8547fe4a668f_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a4350a1c82709fb90e797f82c419c63f36839ef9bf7c35800b2d2d7167b5b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4350a1c82709fb90e797f82c419c63f36839ef9bf7c35800b2d2d7167b5b71->enter($__internal_9a4350a1c82709fb90e797f82c419c63f36839ef9bf7c35800b2d2d7167b5b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a01ff806bfd47bdcf4c356f6c9e6d56715a6ece552099c137fb12b31f9cf1794 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a01ff806bfd47bdcf4c356f6c9e6d56715a6ece552099c137fb12b31f9cf1794->enter($__internal_a01ff806bfd47bdcf4c356f6c9e6d56715a6ece552099c137fb12b31f9cf1794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a01ff806bfd47bdcf4c356f6c9e6d56715a6ece552099c137fb12b31f9cf1794->leave($__internal_a01ff806bfd47bdcf4c356f6c9e6d56715a6ece552099c137fb12b31f9cf1794_prof);

        
        $__internal_9a4350a1c82709fb90e797f82c419c63f36839ef9bf7c35800b2d2d7167b5b71->leave($__internal_9a4350a1c82709fb90e797f82c419c63f36839ef9bf7c35800b2d2d7167b5b71_prof);

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
", "@Twig/Exception/exception_full.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
