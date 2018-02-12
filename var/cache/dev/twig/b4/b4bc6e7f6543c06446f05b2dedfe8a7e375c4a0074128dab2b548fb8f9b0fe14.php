<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10c655f3109ad76fadc16109c8d51996220afd5b182e8327ed819e323ad88e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40f4f6a3984349d16ad468acdd580d2af15dd69eeee5cc5836b5d9d9d92c7e57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f4f6a3984349d16ad468acdd580d2af15dd69eeee5cc5836b5d9d9d92c7e57->enter($__internal_40f4f6a3984349d16ad468acdd580d2af15dd69eeee5cc5836b5d9d9d92c7e57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a924e5492da8f7468fea3f49d4aa63df1bbaa3aaa2d0eb7724693958af3f1e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a924e5492da8f7468fea3f49d4aa63df1bbaa3aaa2d0eb7724693958af3f1e05->enter($__internal_a924e5492da8f7468fea3f49d4aa63df1bbaa3aaa2d0eb7724693958af3f1e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40f4f6a3984349d16ad468acdd580d2af15dd69eeee5cc5836b5d9d9d92c7e57->leave($__internal_40f4f6a3984349d16ad468acdd580d2af15dd69eeee5cc5836b5d9d9d92c7e57_prof);

        
        $__internal_a924e5492da8f7468fea3f49d4aa63df1bbaa3aaa2d0eb7724693958af3f1e05->leave($__internal_a924e5492da8f7468fea3f49d4aa63df1bbaa3aaa2d0eb7724693958af3f1e05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_47253017baa866c142c555795f89110289014edfd79a11d633f8ff1ca608cdce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47253017baa866c142c555795f89110289014edfd79a11d633f8ff1ca608cdce->enter($__internal_47253017baa866c142c555795f89110289014edfd79a11d633f8ff1ca608cdce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c24ec6d3afbfc073742f168dcebe39a9de16b8d10da5baf3cbe218022b603cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c24ec6d3afbfc073742f168dcebe39a9de16b8d10da5baf3cbe218022b603cab->enter($__internal_c24ec6d3afbfc073742f168dcebe39a9de16b8d10da5baf3cbe218022b603cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_c24ec6d3afbfc073742f168dcebe39a9de16b8d10da5baf3cbe218022b603cab->leave($__internal_c24ec6d3afbfc073742f168dcebe39a9de16b8d10da5baf3cbe218022b603cab_prof);

        
        $__internal_47253017baa866c142c555795f89110289014edfd79a11d633f8ff1ca608cdce->leave($__internal_47253017baa866c142c555795f89110289014edfd79a11d633f8ff1ca608cdce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
