<?php

/* base.html.twig */
class __TwigTemplate_a1dc085d88dee3d2a43f788abf6f11321832881330201e5ead10dd6208169043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'main' => array($this, 'block_main'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c3eb966a0004f8ec23aca2516b10b8cc26f68aca3e382fb5eedf136140706cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3eb966a0004f8ec23aca2516b10b8cc26f68aca3e382fb5eedf136140706cb->enter($__internal_2c3eb966a0004f8ec23aca2516b10b8cc26f68aca3e382fb5eedf136140706cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 6
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>
</head>

<body id=\"";
        // line 19
        $this->displayBlock('body_id', $context, $blocks);
        echo "\">

";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 39
        echo "
<div class=\"container body-container\">
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "</div>


";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 57
        echo "
</body>
</html>
";
        
        $__internal_2c3eb966a0004f8ec23aca2516b10b8cc26f68aca3e382fb5eedf136140706cb->leave($__internal_2c3eb966a0004f8ec23aca2516b10b8cc26f68aca3e382fb5eedf136140706cb_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_95846d309db094c7efcf2302a2ceeeac45ee77c84e19fbf64b2f1037f82e1e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95846d309db094c7efcf2302a2ceeeac45ee77c84e19fbf64b2f1037f82e1e17->enter($__internal_95846d309db094c7efcf2302a2ceeeac45ee77c84e19fbf64b2f1037f82e1e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Calculator";
        
        $__internal_95846d309db094c7efcf2302a2ceeeac45ee77c84e19fbf64b2f1037f82e1e17->leave($__internal_95846d309db094c7efcf2302a2ceeeac45ee77c84e19fbf64b2f1037f82e1e17_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1c8671313507737cb31daa4a51bd33f8448bb632c44ee10b082eaa3f7bbbc004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c8671313507737cb31daa4a51bd33f8448bb632c44ee10b082eaa3f7bbbc004->enter($__internal_1c8671313507737cb31daa4a51bd33f8448bb632c44ee10b082eaa3f7bbbc004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_1c8671313507737cb31daa4a51bd33f8448bb632c44ee10b082eaa3f7bbbc004->leave($__internal_1c8671313507737cb31daa4a51bd33f8448bb632c44ee10b082eaa3f7bbbc004_prof);

    }

    // line 19
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8922dc9a868fb1cee617d071fe9833691eaf2515e93befcc3e35b0d6433a21d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8922dc9a868fb1cee617d071fe9833691eaf2515e93befcc3e35b0d6433a21d0->enter($__internal_8922dc9a868fb1cee617d071fe9833691eaf2515e93befcc3e35b0d6433a21d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_8922dc9a868fb1cee617d071fe9833691eaf2515e93befcc3e35b0d6433a21d0->leave($__internal_8922dc9a868fb1cee617d071fe9833691eaf2515e93befcc3e35b0d6433a21d0_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_cf2ef362bca7649efba17a2a12288ccb1e112247a0bb422a10c431e85de0746a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2ef362bca7649efba17a2a12288ccb1e112247a0bb422a10c431e85de0746a->enter($__internal_cf2ef362bca7649efba17a2a12288ccb1e112247a0bb422a10c431e85de0746a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 22
        echo "    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("index");
        echo "\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
";
        
        $__internal_cf2ef362bca7649efba17a2a12288ccb1e112247a0bb422a10c431e85de0746a->leave($__internal_cf2ef362bca7649efba17a2a12288ccb1e112247a0bb422a10c431e85de0746a_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6550ea6d3467ea04b029c0aac9dd6aebf94ad0a19a0dc4b19ce8f16b38f24f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6550ea6d3467ea04b029c0aac9dd6aebf94ad0a19a0dc4b19ce8f16b38f24f0->enter($__internal_f6550ea6d3467ea04b029c0aac9dd6aebf94ad0a19a0dc4b19ce8f16b38f24f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                ";
        // line 44
        $this->displayBlock('main', $context, $blocks);
        // line 45
        echo "            </div>
        </div>
    ";
        
        $__internal_f6550ea6d3467ea04b029c0aac9dd6aebf94ad0a19a0dc4b19ce8f16b38f24f0->leave($__internal_f6550ea6d3467ea04b029c0aac9dd6aebf94ad0a19a0dc4b19ce8f16b38f24f0_prof);

    }

    // line 44
    public function block_main($context, array $blocks = array())
    {
        $__internal_7e0e31efca6399817a0a1c0f3e1a4f805538218058eb490b5c9d13d0636bf329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0e31efca6399817a0a1c0f3e1a4f805538218058eb490b5c9d13d0636bf329->enter($__internal_7e0e31efca6399817a0a1c0f3e1a4f805538218058eb490b5c9d13d0636bf329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_7e0e31efca6399817a0a1c0f3e1a4f805538218058eb490b5c9d13d0636bf329->leave($__internal_7e0e31efca6399817a0a1c0f3e1a4f805538218058eb490b5c9d13d0636bf329_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bc26961cb01b3662c5b5612d2ce0d06703be2ddd6eddde1a4cddb95748cf9542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc26961cb01b3662c5b5612d2ce0d06703be2ddd6eddde1a4cddb95748cf9542->enter($__internal_bc26961cb01b3662c5b5612d2ce0d06703be2ddd6eddde1a4cddb95748cf9542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-2.2.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_bc26961cb01b3662c5b5612d2ce0d06703be2ddd6eddde1a4cddb95748cf9542->leave($__internal_bc26961cb01b3662c5b5612d2ce0d06703be2ddd6eddde1a4cddb95748cf9542_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 55,  201 => 54,  197 => 53,  192 => 52,  186 => 51,  175 => 44,  166 => 45,  164 => 44,  160 => 42,  154 => 41,  134 => 26,  128 => 22,  122 => 21,  111 => 19,  102 => 14,  97 => 13,  91 => 12,  79 => 11,  69 => 57,  67 => 51,  62 => 48,  60 => 41,  56 => 39,  54 => 21,  49 => 19,  42 => 16,  40 => 12,  36 => 11,  29 => 6,);
    }

    public function getSource()
    {
        return "{#
   This is the base template used as the application layout which contains the
   common elements and decorates all the other templates.
   See http://symfony.com/doc/current/book/templating.html#template-inheritance-and-layouts
#}
<!DOCTYPE html>
<html lang=\"en-US\">
<head>
    <meta charset=\"UTF-8\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <title>{% block title %}Calculator{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>
</head>

<body id=\"{% block body_id %}{% endblock %}\">

{% block header %}
    <header>
        <div class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <a href=\"{{ path('index') }}\" class=\"navbar-brand\">CALCULATOR</a>

                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

            </div>
        </div>
    </header>
{% endblock %}

<div class=\"container body-container\">
    {% block body %}
        <div class=\"row\">
            <div id=\"main\" class=\"col-sm-9\">
                {% block main %}{% endblock %}
            </div>
        </div>
    {% endblock %}
</div>


{% block javascripts %}
    <script src=\"{{ asset('js/jquery-2.2.4.min.js') }}\"></script>
    <script src=\"{{ asset('js/moment.min.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.min.js') }}\"></script>
{% endblock %}

</body>
</html>
";
    }
}
