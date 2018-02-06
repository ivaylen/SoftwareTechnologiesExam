<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0ef46ff3e00be850b375145c4de69a72941605b1b30816a42d1a36aa92bc080f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77e362f2f53dc95495f6daa2f260aef0e2de58d9638514e29909e974a7796240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e362f2f53dc95495f6daa2f260aef0e2de58d9638514e29909e974a7796240->enter($__internal_77e362f2f53dc95495f6daa2f260aef0e2de58d9638514e29909e974a7796240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_121931c25bee7984f46f2ae3365a8e7dd131ac80c6acf1fd17fd8bd12e72a0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121931c25bee7984f46f2ae3365a8e7dd131ac80c6acf1fd17fd8bd12e72a0c9->enter($__internal_121931c25bee7984f46f2ae3365a8e7dd131ac80c6acf1fd17fd8bd12e72a0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_77e362f2f53dc95495f6daa2f260aef0e2de58d9638514e29909e974a7796240->leave($__internal_77e362f2f53dc95495f6daa2f260aef0e2de58d9638514e29909e974a7796240_prof);

        
        $__internal_121931c25bee7984f46f2ae3365a8e7dd131ac80c6acf1fd17fd8bd12e72a0c9->leave($__internal_121931c25bee7984f46f2ae3365a8e7dd131ac80c6acf1fd17fd8bd12e72a0c9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1c5ecfd9bb51722da8ffa4f26ce42dbabf952503f9e8e101b3527caf1c6b9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1c5ecfd9bb51722da8ffa4f26ce42dbabf952503f9e8e101b3527caf1c6b9eb->enter($__internal_a1c5ecfd9bb51722da8ffa4f26ce42dbabf952503f9e8e101b3527caf1c6b9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f2e36142e695175a50f9524e4a68fd9eeaa71d9d390d3ba44809268fd870dc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2e36142e695175a50f9524e4a68fd9eeaa71d9d390d3ba44809268fd870dc4->enter($__internal_6f2e36142e695175a50f9524e4a68fd9eeaa71d9d390d3ba44809268fd870dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f2e36142e695175a50f9524e4a68fd9eeaa71d9d390d3ba44809268fd870dc4->leave($__internal_6f2e36142e695175a50f9524e4a68fd9eeaa71d9d390d3ba44809268fd870dc4_prof);

        
        $__internal_a1c5ecfd9bb51722da8ffa4f26ce42dbabf952503f9e8e101b3527caf1c6b9eb->leave($__internal_a1c5ecfd9bb51722da8ffa4f26ce42dbabf952503f9e8e101b3527caf1c6b9eb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad39cd19ba75dd61e059c4ac1221be862030178e4a0e983d748f07ca851395e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad39cd19ba75dd61e059c4ac1221be862030178e4a0e983d748f07ca851395e0->enter($__internal_ad39cd19ba75dd61e059c4ac1221be862030178e4a0e983d748f07ca851395e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bf8c68c83e1db3c172cd1e524d712e1fe6fef225467e0bc10f3c5bb0542908e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8c68c83e1db3c172cd1e524d712e1fe6fef225467e0bc10f3c5bb0542908e1->enter($__internal_bf8c68c83e1db3c172cd1e524d712e1fe6fef225467e0bc10f3c5bb0542908e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bf8c68c83e1db3c172cd1e524d712e1fe6fef225467e0bc10f3c5bb0542908e1->leave($__internal_bf8c68c83e1db3c172cd1e524d712e1fe6fef225467e0bc10f3c5bb0542908e1_prof);

        
        $__internal_ad39cd19ba75dd61e059c4ac1221be862030178e4a0e983d748f07ca851395e0->leave($__internal_ad39cd19ba75dd61e059c4ac1221be862030178e4a0e983d748f07ca851395e0_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a394b4c4ca42a14d5446c1736db35c302bb60138ec3dd5838c5c3ad68a74461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a394b4c4ca42a14d5446c1736db35c302bb60138ec3dd5838c5c3ad68a74461->enter($__internal_8a394b4c4ca42a14d5446c1736db35c302bb60138ec3dd5838c5c3ad68a74461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e72fb2127eeabd676a008c85446a27274c4a2f642f0882b8559f65a6967acca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e72fb2127eeabd676a008c85446a27274c4a2f642f0882b8559f65a6967acca->enter($__internal_0e72fb2127eeabd676a008c85446a27274c4a2f642f0882b8559f65a6967acca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e72fb2127eeabd676a008c85446a27274c4a2f642f0882b8559f65a6967acca->leave($__internal_0e72fb2127eeabd676a008c85446a27274c4a2f642f0882b8559f65a6967acca_prof);

        
        $__internal_8a394b4c4ca42a14d5446c1736db35c302bb60138ec3dd5838c5c3ad68a74461->leave($__internal_8a394b4c4ca42a14d5446c1736db35c302bb60138ec3dd5838c5c3ad68a74461_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\Example\\Project Rider_Ресурси\\Skeletons\\PHP-Skeleton\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
