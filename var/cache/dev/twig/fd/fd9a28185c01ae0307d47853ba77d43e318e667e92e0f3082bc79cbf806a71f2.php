<?php

/* form/fields.html.twig */
class __TwigTemplate_471a8d287757f50dab63069b4ab0ddafc4758dcad2b4ecf45b225bc537f64805 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'date_time_picker_widget' => array($this, 'block_date_time_picker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3ceca2aab6b0a79a76108b2a06e4803f7049404f9e4a47fcb12bbbe76502fa91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ceca2aab6b0a79a76108b2a06e4803f7049404f9e4a47fcb12bbbe76502fa91->enter($__internal_3ceca2aab6b0a79a76108b2a06e4803f7049404f9e4a47fcb12bbbe76502fa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        echo "
";
        // line 10
        $this->displayBlock('date_time_picker_widget', $context, $blocks);
        
        $__internal_3ceca2aab6b0a79a76108b2a06e4803f7049404f9e4a47fcb12bbbe76502fa91->leave($__internal_3ceca2aab6b0a79a76108b2a06e4803f7049404f9e4a47fcb12bbbe76502fa91_prof);

    }

    public function block_date_time_picker_widget($context, array $blocks = array())
    {
        $__internal_7f63d3a87f52d3157b6315b9f16739d78ed4f744ae8121145598895e3bcb35ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f63d3a87f52d3157b6315b9f16739d78ed4f744ae8121145598895e3bcb35ab->enter($__internal_7f63d3a87f52d3157b6315b9f16739d78ed4f744ae8121145598895e3bcb35ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        echo "    ";
        ob_start();
        // line 12
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 13
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7f63d3a87f52d3157b6315b9f16739d78ed4f744ae8121145598895e3bcb35ab->leave($__internal_7f63d3a87f52d3157b6315b9f16739d78ed4f744ae8121145598895e3bcb35ab_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  50 => 16,  48 => 15,  44 => 13,  41 => 12,  38 => 11,  26 => 10,  23 => 9,);
    }

    public function getSource()
    {
        return "{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field
#}

{% block date_time_picker_widget %}
    {% spaceless %}
        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            {{ block('datetime_widget') }}
            {#<span class=\"input-group-addon\">#}
                {#<span class=\"fa fa-calendar\" aria-hidden=\"true\"></span>#}
            {#</span>#}
        </div>
    {% endspaceless %}
{% endblock %}
";
    }
}
