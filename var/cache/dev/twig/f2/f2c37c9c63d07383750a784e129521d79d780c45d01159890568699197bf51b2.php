<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_650fedcf4ce545413cc7315b3ff89393155d9bb002ac7ac70df21c9fb3d99c5d extends Twig_Template
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
        $__internal_8073d70a783e407be3076bab5bde4e7f2d3f9bd7101060d49494be34dfa0f46b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8073d70a783e407be3076bab5bde4e7f2d3f9bd7101060d49494be34dfa0f46b->enter($__internal_8073d70a783e407be3076bab5bde4e7f2d3f9bd7101060d49494be34dfa0f46b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_99dc5b2bfa82d4d70a89a9e6b2a99abf84840bd1736c56dbc2d49e35b3694a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99dc5b2bfa82d4d70a89a9e6b2a99abf84840bd1736c56dbc2d49e35b3694a50->enter($__internal_99dc5b2bfa82d4d70a89a9e6b2a99abf84840bd1736c56dbc2d49e35b3694a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8073d70a783e407be3076bab5bde4e7f2d3f9bd7101060d49494be34dfa0f46b->leave($__internal_8073d70a783e407be3076bab5bde4e7f2d3f9bd7101060d49494be34dfa0f46b_prof);

        
        $__internal_99dc5b2bfa82d4d70a89a9e6b2a99abf84840bd1736c56dbc2d49e35b3694a50->leave($__internal_99dc5b2bfa82d4d70a89a9e6b2a99abf84840bd1736c56dbc2d49e35b3694a50_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e86d39aa3ad4051f6499d92fba052152908337414c4a4f2f0aa706edbcda0bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e86d39aa3ad4051f6499d92fba052152908337414c4a4f2f0aa706edbcda0bd5->enter($__internal_e86d39aa3ad4051f6499d92fba052152908337414c4a4f2f0aa706edbcda0bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_399501b22a26a285986019f17e3e854608e1742b99afca7b29b6534ea4f277ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_399501b22a26a285986019f17e3e854608e1742b99afca7b29b6534ea4f277ba->enter($__internal_399501b22a26a285986019f17e3e854608e1742b99afca7b29b6534ea4f277ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_399501b22a26a285986019f17e3e854608e1742b99afca7b29b6534ea4f277ba->leave($__internal_399501b22a26a285986019f17e3e854608e1742b99afca7b29b6534ea4f277ba_prof);

        
        $__internal_e86d39aa3ad4051f6499d92fba052152908337414c4a4f2f0aa706edbcda0bd5->leave($__internal_e86d39aa3ad4051f6499d92fba052152908337414c4a4f2f0aa706edbcda0bd5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6be9a5765fd01d06205c8e8665c01148d5cc785ac17a8e46875e1179d303ca85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be9a5765fd01d06205c8e8665c01148d5cc785ac17a8e46875e1179d303ca85->enter($__internal_6be9a5765fd01d06205c8e8665c01148d5cc785ac17a8e46875e1179d303ca85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1c527d926412bbaf8a0af17c594ecad934b6222d54f5c120694b56cd4f964c73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c527d926412bbaf8a0af17c594ecad934b6222d54f5c120694b56cd4f964c73->enter($__internal_1c527d926412bbaf8a0af17c594ecad934b6222d54f5c120694b56cd4f964c73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1c527d926412bbaf8a0af17c594ecad934b6222d54f5c120694b56cd4f964c73->leave($__internal_1c527d926412bbaf8a0af17c594ecad934b6222d54f5c120694b56cd4f964c73_prof);

        
        $__internal_6be9a5765fd01d06205c8e8665c01148d5cc785ac17a8e46875e1179d303ca85->leave($__internal_6be9a5765fd01d06205c8e8665c01148d5cc785ac17a8e46875e1179d303ca85_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_309153fbcfa9ffeb931294a215db7e1a64e650c9d5c43eed12313ebb9acea27d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309153fbcfa9ffeb931294a215db7e1a64e650c9d5c43eed12313ebb9acea27d->enter($__internal_309153fbcfa9ffeb931294a215db7e1a64e650c9d5c43eed12313ebb9acea27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_600b4378f89ce59ba193bd7852debb6f7f096d7bf547db6bd42de801c0f518a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600b4378f89ce59ba193bd7852debb6f7f096d7bf547db6bd42de801c0f518a6->enter($__internal_600b4378f89ce59ba193bd7852debb6f7f096d7bf547db6bd42de801c0f518a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_600b4378f89ce59ba193bd7852debb6f7f096d7bf547db6bd42de801c0f518a6->leave($__internal_600b4378f89ce59ba193bd7852debb6f7f096d7bf547db6bd42de801c0f518a6_prof);

        
        $__internal_309153fbcfa9ffeb931294a215db7e1a64e650c9d5c43eed12313ebb9acea27d->leave($__internal_309153fbcfa9ffeb931294a215db7e1a64e650c9d5c43eed12313ebb9acea27d_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
