<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bf44db6e2daf5aac4ed5a17b8485b11ed40620be1682f3efda775e9939d6b1b9 extends Twig_Template
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
        $__internal_0c21b8461aa5d2fe52bc0506159426be0c06d1498560a97fb8181db94610f097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c21b8461aa5d2fe52bc0506159426be0c06d1498560a97fb8181db94610f097->enter($__internal_0c21b8461aa5d2fe52bc0506159426be0c06d1498560a97fb8181db94610f097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c21b8461aa5d2fe52bc0506159426be0c06d1498560a97fb8181db94610f097->leave($__internal_0c21b8461aa5d2fe52bc0506159426be0c06d1498560a97fb8181db94610f097_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5bdbd26db65a823f0e94b5da3c6e9d3392a133e50f274aa6fd62e471b3b15e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bdbd26db65a823f0e94b5da3c6e9d3392a133e50f274aa6fd62e471b3b15e67->enter($__internal_5bdbd26db65a823f0e94b5da3c6e9d3392a133e50f274aa6fd62e471b3b15e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5bdbd26db65a823f0e94b5da3c6e9d3392a133e50f274aa6fd62e471b3b15e67->leave($__internal_5bdbd26db65a823f0e94b5da3c6e9d3392a133e50f274aa6fd62e471b3b15e67_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9bacfa527797f748998a616f055fdb7804746eb3cd626008165a913d996e5295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bacfa527797f748998a616f055fdb7804746eb3cd626008165a913d996e5295->enter($__internal_9bacfa527797f748998a616f055fdb7804746eb3cd626008165a913d996e5295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9bacfa527797f748998a616f055fdb7804746eb3cd626008165a913d996e5295->leave($__internal_9bacfa527797f748998a616f055fdb7804746eb3cd626008165a913d996e5295_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_59052a9863d572af1b1754b7b5eb3b79936a0b9905e6077a810df88cf99904ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59052a9863d572af1b1754b7b5eb3b79936a0b9905e6077a810df88cf99904ca->enter($__internal_59052a9863d572af1b1754b7b5eb3b79936a0b9905e6077a810df88cf99904ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_59052a9863d572af1b1754b7b5eb3b79936a0b9905e6077a810df88cf99904ca->leave($__internal_59052a9863d572af1b1754b7b5eb3b79936a0b9905e6077a810df88cf99904ca_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
