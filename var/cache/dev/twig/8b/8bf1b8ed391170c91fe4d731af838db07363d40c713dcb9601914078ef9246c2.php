<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_381ced67c3d55aa6b360a1967e544dc92e1db956f219a001c64e8999b817ee26 extends Twig_Template
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
        $__internal_927f8b751ba401bb922bd461aa0b20cc3d8f66a61c468b545da73ab8f7d8f55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927f8b751ba401bb922bd461aa0b20cc3d8f66a61c468b545da73ab8f7d8f55b->enter($__internal_927f8b751ba401bb922bd461aa0b20cc3d8f66a61c468b545da73ab8f7d8f55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_927f8b751ba401bb922bd461aa0b20cc3d8f66a61c468b545da73ab8f7d8f55b->leave($__internal_927f8b751ba401bb922bd461aa0b20cc3d8f66a61c468b545da73ab8f7d8f55b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5087a359813ecea37c34e66ad1c6e2d53719aa9a50be592469c28d26b818b62d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5087a359813ecea37c34e66ad1c6e2d53719aa9a50be592469c28d26b818b62d->enter($__internal_5087a359813ecea37c34e66ad1c6e2d53719aa9a50be592469c28d26b818b62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5087a359813ecea37c34e66ad1c6e2d53719aa9a50be592469c28d26b818b62d->leave($__internal_5087a359813ecea37c34e66ad1c6e2d53719aa9a50be592469c28d26b818b62d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb672445c52a8f51cd9042a310f7402a0eb55db0b534c9b4af0d3b20bca91962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb672445c52a8f51cd9042a310f7402a0eb55db0b534c9b4af0d3b20bca91962->enter($__internal_bb672445c52a8f51cd9042a310f7402a0eb55db0b534c9b4af0d3b20bca91962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bb672445c52a8f51cd9042a310f7402a0eb55db0b534c9b4af0d3b20bca91962->leave($__internal_bb672445c52a8f51cd9042a310f7402a0eb55db0b534c9b4af0d3b20bca91962_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e723474c89d54e7f6d313976c117a05def3371adc41539314a2837b070a01175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e723474c89d54e7f6d313976c117a05def3371adc41539314a2837b070a01175->enter($__internal_e723474c89d54e7f6d313976c117a05def3371adc41539314a2837b070a01175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e723474c89d54e7f6d313976c117a05def3371adc41539314a2837b070a01175->leave($__internal_e723474c89d54e7f6d313976c117a05def3371adc41539314a2837b070a01175_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
