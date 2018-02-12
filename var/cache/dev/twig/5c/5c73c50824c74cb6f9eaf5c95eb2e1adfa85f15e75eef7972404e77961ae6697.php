<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d17d9f74bb44414a8016e89eaee98a747aee1e0a180bfc21c56513057fc5606d extends Twig_Template
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
        $__internal_1cdee76da7e99c9a7a2c4caca9f32be72cddfaa921ec8593b1dec714dde90272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cdee76da7e99c9a7a2c4caca9f32be72cddfaa921ec8593b1dec714dde90272->enter($__internal_1cdee76da7e99c9a7a2c4caca9f32be72cddfaa921ec8593b1dec714dde90272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ad90112ef4bbb920d42bf8c599ae2b768a3d247177f5f569f6e326028274bc72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad90112ef4bbb920d42bf8c599ae2b768a3d247177f5f569f6e326028274bc72->enter($__internal_ad90112ef4bbb920d42bf8c599ae2b768a3d247177f5f569f6e326028274bc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cdee76da7e99c9a7a2c4caca9f32be72cddfaa921ec8593b1dec714dde90272->leave($__internal_1cdee76da7e99c9a7a2c4caca9f32be72cddfaa921ec8593b1dec714dde90272_prof);

        
        $__internal_ad90112ef4bbb920d42bf8c599ae2b768a3d247177f5f569f6e326028274bc72->leave($__internal_ad90112ef4bbb920d42bf8c599ae2b768a3d247177f5f569f6e326028274bc72_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_186d6888c9c7fe2c3ade20876d9f1886a5087f96e60ff38582ab5fbb1adf5954 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_186d6888c9c7fe2c3ade20876d9f1886a5087f96e60ff38582ab5fbb1adf5954->enter($__internal_186d6888c9c7fe2c3ade20876d9f1886a5087f96e60ff38582ab5fbb1adf5954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6e71458bd9db3643569a3ae3d53f6e7620abc60c16fcd76e29fb7d4b441e7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e71458bd9db3643569a3ae3d53f6e7620abc60c16fcd76e29fb7d4b441e7e1->enter($__internal_c6e71458bd9db3643569a3ae3d53f6e7620abc60c16fcd76e29fb7d4b441e7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c6e71458bd9db3643569a3ae3d53f6e7620abc60c16fcd76e29fb7d4b441e7e1->leave($__internal_c6e71458bd9db3643569a3ae3d53f6e7620abc60c16fcd76e29fb7d4b441e7e1_prof);

        
        $__internal_186d6888c9c7fe2c3ade20876d9f1886a5087f96e60ff38582ab5fbb1adf5954->leave($__internal_186d6888c9c7fe2c3ade20876d9f1886a5087f96e60ff38582ab5fbb1adf5954_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c7c72a8a0b562eae44fbb1a4464f16ed38cf558bfa94e85a2967e4dfffa72a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7c72a8a0b562eae44fbb1a4464f16ed38cf558bfa94e85a2967e4dfffa72a35->enter($__internal_c7c72a8a0b562eae44fbb1a4464f16ed38cf558bfa94e85a2967e4dfffa72a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_39da0c65d96beb7efe0227ce9e06074c6c85c1fe0944b38b7968fed5ceea239e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39da0c65d96beb7efe0227ce9e06074c6c85c1fe0944b38b7968fed5ceea239e->enter($__internal_39da0c65d96beb7efe0227ce9e06074c6c85c1fe0944b38b7968fed5ceea239e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_39da0c65d96beb7efe0227ce9e06074c6c85c1fe0944b38b7968fed5ceea239e->leave($__internal_39da0c65d96beb7efe0227ce9e06074c6c85c1fe0944b38b7968fed5ceea239e_prof);

        
        $__internal_c7c72a8a0b562eae44fbb1a4464f16ed38cf558bfa94e85a2967e4dfffa72a35->leave($__internal_c7c72a8a0b562eae44fbb1a4464f16ed38cf558bfa94e85a2967e4dfffa72a35_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b39b36f7b22ef7a35a6773b77b99fc3f1725b3af731294775a7178ae4596311e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b39b36f7b22ef7a35a6773b77b99fc3f1725b3af731294775a7178ae4596311e->enter($__internal_b39b36f7b22ef7a35a6773b77b99fc3f1725b3af731294775a7178ae4596311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4237b8abe6d788139304eff1ee98c9783f7fa5f6e1cfba36c596dd0b624132b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4237b8abe6d788139304eff1ee98c9783f7fa5f6e1cfba36c596dd0b624132b2->enter($__internal_4237b8abe6d788139304eff1ee98c9783f7fa5f6e1cfba36c596dd0b624132b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4237b8abe6d788139304eff1ee98c9783f7fa5f6e1cfba36c596dd0b624132b2->leave($__internal_4237b8abe6d788139304eff1ee98c9783f7fa5f6e1cfba36c596dd0b624132b2_prof);

        
        $__internal_b39b36f7b22ef7a35a6773b77b99fc3f1725b3af731294775a7178ae4596311e->leave($__internal_b39b36f7b22ef7a35a6773b77b99fc3f1725b3af731294775a7178ae4596311e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
