<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_91dbc3321693230917e97bf55971fb937058d95715e8fe6e9c1156f0664691ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da76beb8498284d8d33e9a5b263f62f4f71410fb79b1e9ca5022612c3cd903e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da76beb8498284d8d33e9a5b263f62f4f71410fb79b1e9ca5022612c3cd903e1->enter($__internal_da76beb8498284d8d33e9a5b263f62f4f71410fb79b1e9ca5022612c3cd903e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_1e859967addbe73f6cea2621f2556385626bc666870520d4bb67dea257519be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e859967addbe73f6cea2621f2556385626bc666870520d4bb67dea257519be5->enter($__internal_1e859967addbe73f6cea2621f2556385626bc666870520d4bb67dea257519be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da76beb8498284d8d33e9a5b263f62f4f71410fb79b1e9ca5022612c3cd903e1->leave($__internal_da76beb8498284d8d33e9a5b263f62f4f71410fb79b1e9ca5022612c3cd903e1_prof);

        
        $__internal_1e859967addbe73f6cea2621f2556385626bc666870520d4bb67dea257519be5->leave($__internal_1e859967addbe73f6cea2621f2556385626bc666870520d4bb67dea257519be5_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_75ea7b251f767513f2aa8f1dfeb7e52aa7f8438fe7d92044fed6d9766d5b8c67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75ea7b251f767513f2aa8f1dfeb7e52aa7f8438fe7d92044fed6d9766d5b8c67->enter($__internal_75ea7b251f767513f2aa8f1dfeb7e52aa7f8438fe7d92044fed6d9766d5b8c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f16a6f7124537f36f06f41d709ce22c9fb9552cd7b2b95fd41fd98e3f68686b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16a6f7124537f36f06f41d709ce22c9fb9552cd7b2b95fd41fd98e3f68686b3->enter($__internal_f16a6f7124537f36f06f41d709ce22c9fb9552cd7b2b95fd41fd98e3f68686b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f16a6f7124537f36f06f41d709ce22c9fb9552cd7b2b95fd41fd98e3f68686b3->leave($__internal_f16a6f7124537f36f06f41d709ce22c9fb9552cd7b2b95fd41fd98e3f68686b3_prof);

        
        $__internal_75ea7b251f767513f2aa8f1dfeb7e52aa7f8438fe7d92044fed6d9766d5b8c67->leave($__internal_75ea7b251f767513f2aa8f1dfeb7e52aa7f8438fe7d92044fed6d9766d5b8c67_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b238e5eac95f2c7016d828ee44d9fece13a4110d7c3005048c5de2087268e02d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b238e5eac95f2c7016d828ee44d9fece13a4110d7c3005048c5de2087268e02d->enter($__internal_b238e5eac95f2c7016d828ee44d9fece13a4110d7c3005048c5de2087268e02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_9f5fdd5dc317f07bf95b37303bdcf5c13cd0b3a1b50d3f6121c3a505e240c9a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5fdd5dc317f07bf95b37303bdcf5c13cd0b3a1b50d3f6121c3a505e240c9a5->enter($__internal_9f5fdd5dc317f07bf95b37303bdcf5c13cd0b3a1b50d3f6121c3a505e240c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_9f5fdd5dc317f07bf95b37303bdcf5c13cd0b3a1b50d3f6121c3a505e240c9a5->leave($__internal_9f5fdd5dc317f07bf95b37303bdcf5c13cd0b3a1b50d3f6121c3a505e240c9a5_prof);

        
        $__internal_b238e5eac95f2c7016d828ee44d9fece13a4110d7c3005048c5de2087268e02d->leave($__internal_b238e5eac95f2c7016d828ee44d9fece13a4110d7c3005048c5de2087268e02d_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ab291330ddf5181640e192afb28175ea1a1a06365230e161b5712a8a46c1c52c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab291330ddf5181640e192afb28175ea1a1a06365230e161b5712a8a46c1c52c->enter($__internal_ab291330ddf5181640e192afb28175ea1a1a06365230e161b5712a8a46c1c52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_1df69f62839e4406faedbdb026d7292d05b2777901b398a3f8d7ef2cbb90c937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1df69f62839e4406faedbdb026d7292d05b2777901b398a3f8d7ef2cbb90c937->enter($__internal_1df69f62839e4406faedbdb026d7292d05b2777901b398a3f8d7ef2cbb90c937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_1df69f62839e4406faedbdb026d7292d05b2777901b398a3f8d7ef2cbb90c937->leave($__internal_1df69f62839e4406faedbdb026d7292d05b2777901b398a3f8d7ef2cbb90c937_prof);

        
        $__internal_ab291330ddf5181640e192afb28175ea1a1a06365230e161b5712a8a46c1c52c->leave($__internal_ab291330ddf5181640e192afb28175ea1a1a06365230e161b5712a8a46c1c52c_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a6b699562fcf77789cb9b496832a55079febce1267a1452dc636a1fff357b649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b699562fcf77789cb9b496832a55079febce1267a1452dc636a1fff357b649->enter($__internal_a6b699562fcf77789cb9b496832a55079febce1267a1452dc636a1fff357b649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ff6ee8895b0609bb9f222cb517772396260c24ff597155321f4174064e5083ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff6ee8895b0609bb9f222cb517772396260c24ff597155321f4174064e5083ea->enter($__internal_ff6ee8895b0609bb9f222cb517772396260c24ff597155321f4174064e5083ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_ff6ee8895b0609bb9f222cb517772396260c24ff597155321f4174064e5083ea->leave($__internal_ff6ee8895b0609bb9f222cb517772396260c24ff597155321f4174064e5083ea_prof);

        
        $__internal_a6b699562fcf77789cb9b496832a55079febce1267a1452dc636a1fff357b649->leave($__internal_a6b699562fcf77789cb9b496832a55079febce1267a1452dc636a1fff357b649_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_339e730de0af3e7a37c1a3079926cc940079a082b58b95707718e8c27b47045f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339e730de0af3e7a37c1a3079926cc940079a082b58b95707718e8c27b47045f->enter($__internal_339e730de0af3e7a37c1a3079926cc940079a082b58b95707718e8c27b47045f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ede80eb11e3dabcabb4e2f49b1055cb7ade825f3c72dd738af6ad6fc2b44d97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede80eb11e3dabcabb4e2f49b1055cb7ade825f3c72dd738af6ad6fc2b44d97e->enter($__internal_ede80eb11e3dabcabb4e2f49b1055cb7ade825f3c72dd738af6ad6fc2b44d97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_ede80eb11e3dabcabb4e2f49b1055cb7ade825f3c72dd738af6ad6fc2b44d97e->leave($__internal_ede80eb11e3dabcabb4e2f49b1055cb7ade825f3c72dd738af6ad6fc2b44d97e_prof);

        
        $__internal_339e730de0af3e7a37c1a3079926cc940079a082b58b95707718e8c27b47045f->leave($__internal_339e730de0af3e7a37c1a3079926cc940079a082b58b95707718e8c27b47045f_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_51cfdcbd53b9dfe4e72437d20c01f253a89f73b61d13978d4711af276ec9bb14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51cfdcbd53b9dfe4e72437d20c01f253a89f73b61d13978d4711af276ec9bb14->enter($__internal_51cfdcbd53b9dfe4e72437d20c01f253a89f73b61d13978d4711af276ec9bb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_469520be0f480894efa6768049970d4e038b2924644eb8784de822b8adecdca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_469520be0f480894efa6768049970d4e038b2924644eb8784de822b8adecdca8->enter($__internal_469520be0f480894efa6768049970d4e038b2924644eb8784de822b8adecdca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_469520be0f480894efa6768049970d4e038b2924644eb8784de822b8adecdca8->leave($__internal_469520be0f480894efa6768049970d4e038b2924644eb8784de822b8adecdca8_prof);

        
        $__internal_51cfdcbd53b9dfe4e72437d20c01f253a89f73b61d13978d4711af276ec9bb14->leave($__internal_51cfdcbd53b9dfe4e72437d20c01f253a89f73b61d13978d4711af276ec9bb14_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_3639973ebcba107e6b4f925ade38e7dea082a5247607b48fd98c2e6c37a37f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3639973ebcba107e6b4f925ade38e7dea082a5247607b48fd98c2e6c37a37f2c->enter($__internal_3639973ebcba107e6b4f925ade38e7dea082a5247607b48fd98c2e6c37a37f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ff48174746ab0b2faa965f7e6dd2dc08e40c0b9adf075e52e91552bf2cf05358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff48174746ab0b2faa965f7e6dd2dc08e40c0b9adf075e52e91552bf2cf05358->enter($__internal_ff48174746ab0b2faa965f7e6dd2dc08e40c0b9adf075e52e91552bf2cf05358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_ff48174746ab0b2faa965f7e6dd2dc08e40c0b9adf075e52e91552bf2cf05358->leave($__internal_ff48174746ab0b2faa965f7e6dd2dc08e40c0b9adf075e52e91552bf2cf05358_prof);

        
        $__internal_3639973ebcba107e6b4f925ade38e7dea082a5247607b48fd98c2e6c37a37f2c->leave($__internal_3639973ebcba107e6b4f925ade38e7dea082a5247607b48fd98c2e6c37a37f2c_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_3b8b7bb3b81446eb50b94b75506b47be24298028651d2792e6285326e4cc078c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8b7bb3b81446eb50b94b75506b47be24298028651d2792e6285326e4cc078c->enter($__internal_3b8b7bb3b81446eb50b94b75506b47be24298028651d2792e6285326e4cc078c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_9aacefdebc3cdb4099540100367e1ee320a492ff60b85773e0cb2164ef6223af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aacefdebc3cdb4099540100367e1ee320a492ff60b85773e0cb2164ef6223af->enter($__internal_9aacefdebc3cdb4099540100367e1ee320a492ff60b85773e0cb2164ef6223af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_9aacefdebc3cdb4099540100367e1ee320a492ff60b85773e0cb2164ef6223af->leave($__internal_9aacefdebc3cdb4099540100367e1ee320a492ff60b85773e0cb2164ef6223af_prof);

        
        $__internal_3b8b7bb3b81446eb50b94b75506b47be24298028651d2792e6285326e4cc078c->leave($__internal_3b8b7bb3b81446eb50b94b75506b47be24298028651d2792e6285326e4cc078c_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_20f4d355d229e9e06f2c39a6c6436a3c06be14a186753c394a007fb67e3b5547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f4d355d229e9e06f2c39a6c6436a3c06be14a186753c394a007fb67e3b5547->enter($__internal_20f4d355d229e9e06f2c39a6c6436a3c06be14a186753c394a007fb67e3b5547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_c56092ae36d9f3ee1e01ed19fda91d82983dcc142b14345b672630c66060d185 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56092ae36d9f3ee1e01ed19fda91d82983dcc142b14345b672630c66060d185->enter($__internal_c56092ae36d9f3ee1e01ed19fda91d82983dcc142b14345b672630c66060d185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_c56092ae36d9f3ee1e01ed19fda91d82983dcc142b14345b672630c66060d185->leave($__internal_c56092ae36d9f3ee1e01ed19fda91d82983dcc142b14345b672630c66060d185_prof);

        
        $__internal_20f4d355d229e9e06f2c39a6c6436a3c06be14a186753c394a007fb67e3b5547->leave($__internal_20f4d355d229e9e06f2c39a6c6436a3c06be14a186753c394a007fb67e3b5547_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b606c4d91f6007a5bf2887a085315944b1db4d16d1094e538196ff3dfa985f20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b606c4d91f6007a5bf2887a085315944b1db4d16d1094e538196ff3dfa985f20->enter($__internal_b606c4d91f6007a5bf2887a085315944b1db4d16d1094e538196ff3dfa985f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_bf6034d1be02dd0af080698de3ff003c899baa6c13b981b719273ac9ea67a137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6034d1be02dd0af080698de3ff003c899baa6c13b981b719273ac9ea67a137->enter($__internal_bf6034d1be02dd0af080698de3ff003c899baa6c13b981b719273ac9ea67a137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_bf6034d1be02dd0af080698de3ff003c899baa6c13b981b719273ac9ea67a137->leave($__internal_bf6034d1be02dd0af080698de3ff003c899baa6c13b981b719273ac9ea67a137_prof);

        
        $__internal_b606c4d91f6007a5bf2887a085315944b1db4d16d1094e538196ff3dfa985f20->leave($__internal_b606c4d91f6007a5bf2887a085315944b1db4d16d1094e538196ff3dfa985f20_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_63e992fc7a0ea5eb1c6d0941991c8d22539b64f4f3107bd6b7afb7c701bbca90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e992fc7a0ea5eb1c6d0941991c8d22539b64f4f3107bd6b7afb7c701bbca90->enter($__internal_63e992fc7a0ea5eb1c6d0941991c8d22539b64f4f3107bd6b7afb7c701bbca90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b24e365ea48faa2583f72d934d9224e4b66fe3b5152b188a382bc2e9bfdfbbef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b24e365ea48faa2583f72d934d9224e4b66fe3b5152b188a382bc2e9bfdfbbef->enter($__internal_b24e365ea48faa2583f72d934d9224e4b66fe3b5152b188a382bc2e9bfdfbbef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_b24e365ea48faa2583f72d934d9224e4b66fe3b5152b188a382bc2e9bfdfbbef->leave($__internal_b24e365ea48faa2583f72d934d9224e4b66fe3b5152b188a382bc2e9bfdfbbef_prof);

        
        $__internal_63e992fc7a0ea5eb1c6d0941991c8d22539b64f4f3107bd6b7afb7c701bbca90->leave($__internal_63e992fc7a0ea5eb1c6d0941991c8d22539b64f4f3107bd6b7afb7c701bbca90_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_3a26b02617120a661a4e54cabd7e1412ed31de1d4d061532b942b8f1e87d29eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a26b02617120a661a4e54cabd7e1412ed31de1d4d061532b942b8f1e87d29eb->enter($__internal_3a26b02617120a661a4e54cabd7e1412ed31de1d4d061532b942b8f1e87d29eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_fa395d2c2e2dc7ee51ec540d2663b0d6d7ebed575ece8081279c3780a5e8b8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa395d2c2e2dc7ee51ec540d2663b0d6d7ebed575ece8081279c3780a5e8b8c9->enter($__internal_fa395d2c2e2dc7ee51ec540d2663b0d6d7ebed575ece8081279c3780a5e8b8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_fa395d2c2e2dc7ee51ec540d2663b0d6d7ebed575ece8081279c3780a5e8b8c9->leave($__internal_fa395d2c2e2dc7ee51ec540d2663b0d6d7ebed575ece8081279c3780a5e8b8c9_prof);

        
        $__internal_3a26b02617120a661a4e54cabd7e1412ed31de1d4d061532b942b8f1e87d29eb->leave($__internal_3a26b02617120a661a4e54cabd7e1412ed31de1d4d061532b942b8f1e87d29eb_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_25b29d3fea6f485734b05ca021be81199e919d0c8b7bc16bc7c2462ba1c9139b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25b29d3fea6f485734b05ca021be81199e919d0c8b7bc16bc7c2462ba1c9139b->enter($__internal_25b29d3fea6f485734b05ca021be81199e919d0c8b7bc16bc7c2462ba1c9139b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_02cf0216df48a2d1c37c96932d161f17a1681e941da4ea62b04c45e9042d7624 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cf0216df48a2d1c37c96932d161f17a1681e941da4ea62b04c45e9042d7624->enter($__internal_02cf0216df48a2d1c37c96932d161f17a1681e941da4ea62b04c45e9042d7624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_02cf0216df48a2d1c37c96932d161f17a1681e941da4ea62b04c45e9042d7624->leave($__internal_02cf0216df48a2d1c37c96932d161f17a1681e941da4ea62b04c45e9042d7624_prof);

        
        $__internal_25b29d3fea6f485734b05ca021be81199e919d0c8b7bc16bc7c2462ba1c9139b->leave($__internal_25b29d3fea6f485734b05ca021be81199e919d0c8b7bc16bc7c2462ba1c9139b_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a6d88398a4e1a038bd0c29177de857f5d8a104177844b62841717997ca52b8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d88398a4e1a038bd0c29177de857f5d8a104177844b62841717997ca52b8cb->enter($__internal_a6d88398a4e1a038bd0c29177de857f5d8a104177844b62841717997ca52b8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_2ea73732b1396a694e73d85fa05767811203c3643ca56aff2c1716325a99ce50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea73732b1396a694e73d85fa05767811203c3643ca56aff2c1716325a99ce50->enter($__internal_2ea73732b1396a694e73d85fa05767811203c3643ca56aff2c1716325a99ce50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_2ea73732b1396a694e73d85fa05767811203c3643ca56aff2c1716325a99ce50->leave($__internal_2ea73732b1396a694e73d85fa05767811203c3643ca56aff2c1716325a99ce50_prof);

        
        $__internal_a6d88398a4e1a038bd0c29177de857f5d8a104177844b62841717997ca52b8cb->leave($__internal_a6d88398a4e1a038bd0c29177de857f5d8a104177844b62841717997ca52b8cb_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_9705f0cd34fe980faa0befad875ae1af792bf6f92acd8372a1dd10d0f8926c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9705f0cd34fe980faa0befad875ae1af792bf6f92acd8372a1dd10d0f8926c99->enter($__internal_9705f0cd34fe980faa0befad875ae1af792bf6f92acd8372a1dd10d0f8926c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_935e7a5077e35d841ea6f37d8580e04093d987d5a47a1e53ef495c5978357aef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935e7a5077e35d841ea6f37d8580e04093d987d5a47a1e53ef495c5978357aef->enter($__internal_935e7a5077e35d841ea6f37d8580e04093d987d5a47a1e53ef495c5978357aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_935e7a5077e35d841ea6f37d8580e04093d987d5a47a1e53ef495c5978357aef->leave($__internal_935e7a5077e35d841ea6f37d8580e04093d987d5a47a1e53ef495c5978357aef_prof);

        
        $__internal_9705f0cd34fe980faa0befad875ae1af792bf6f92acd8372a1dd10d0f8926c99->leave($__internal_9705f0cd34fe980faa0befad875ae1af792bf6f92acd8372a1dd10d0f8926c99_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_842d483c3d1c93576640a8c7a13ca77a73a92fb86567db6dd1182ba54ae67a64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842d483c3d1c93576640a8c7a13ca77a73a92fb86567db6dd1182ba54ae67a64->enter($__internal_842d483c3d1c93576640a8c7a13ca77a73a92fb86567db6dd1182ba54ae67a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_85a7c0c51ebde2663558135395122e4bd4c9fbd8c481b43728c0be14754a898d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a7c0c51ebde2663558135395122e4bd4c9fbd8c481b43728c0be14754a898d->enter($__internal_85a7c0c51ebde2663558135395122e4bd4c9fbd8c481b43728c0be14754a898d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_85a7c0c51ebde2663558135395122e4bd4c9fbd8c481b43728c0be14754a898d->leave($__internal_85a7c0c51ebde2663558135395122e4bd4c9fbd8c481b43728c0be14754a898d_prof);

        
        $__internal_842d483c3d1c93576640a8c7a13ca77a73a92fb86567db6dd1182ba54ae67a64->leave($__internal_842d483c3d1c93576640a8c7a13ca77a73a92fb86567db6dd1182ba54ae67a64_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_6fa80d6475995fe63d99d5d277bfcd5cd20055d83781b2a7d257fdebc7e1924a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fa80d6475995fe63d99d5d277bfcd5cd20055d83781b2a7d257fdebc7e1924a->enter($__internal_6fa80d6475995fe63d99d5d277bfcd5cd20055d83781b2a7d257fdebc7e1924a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_812b757f288fdafe17c659e4dee46996822e781f1f5171e3ae11f1043532ed5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_812b757f288fdafe17c659e4dee46996822e781f1f5171e3ae11f1043532ed5f->enter($__internal_812b757f288fdafe17c659e4dee46996822e781f1f5171e3ae11f1043532ed5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_812b757f288fdafe17c659e4dee46996822e781f1f5171e3ae11f1043532ed5f->leave($__internal_812b757f288fdafe17c659e4dee46996822e781f1f5171e3ae11f1043532ed5f_prof);

        
        $__internal_6fa80d6475995fe63d99d5d277bfcd5cd20055d83781b2a7d257fdebc7e1924a->leave($__internal_6fa80d6475995fe63d99d5d277bfcd5cd20055d83781b2a7d257fdebc7e1924a_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c5374883fbfbbd87f4c8868400b0a1747903ff0b97829c5780b3a5a43f358e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5374883fbfbbd87f4c8868400b0a1747903ff0b97829c5780b3a5a43f358e60->enter($__internal_c5374883fbfbbd87f4c8868400b0a1747903ff0b97829c5780b3a5a43f358e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_35df1d72500910e5c33c12bc9d0a3ccc62b8f847a8cefb138f820f05732a8153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35df1d72500910e5c33c12bc9d0a3ccc62b8f847a8cefb138f820f05732a8153->enter($__internal_35df1d72500910e5c33c12bc9d0a3ccc62b8f847a8cefb138f820f05732a8153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_35df1d72500910e5c33c12bc9d0a3ccc62b8f847a8cefb138f820f05732a8153->leave($__internal_35df1d72500910e5c33c12bc9d0a3ccc62b8f847a8cefb138f820f05732a8153_prof);

        
        $__internal_c5374883fbfbbd87f4c8868400b0a1747903ff0b97829c5780b3a5a43f358e60->leave($__internal_c5374883fbfbbd87f4c8868400b0a1747903ff0b97829c5780b3a5a43f358e60_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_3f8a690685502c36dc026bffb24c2c23c8b5e4328fd4bc0fb9031cebaf751a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f8a690685502c36dc026bffb24c2c23c8b5e4328fd4bc0fb9031cebaf751a6c->enter($__internal_3f8a690685502c36dc026bffb24c2c23c8b5e4328fd4bc0fb9031cebaf751a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_557dd152659e229359ad69e0a361d1097ab1a68a2803883648ce0a9cbcb256da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557dd152659e229359ad69e0a361d1097ab1a68a2803883648ce0a9cbcb256da->enter($__internal_557dd152659e229359ad69e0a361d1097ab1a68a2803883648ce0a9cbcb256da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_557dd152659e229359ad69e0a361d1097ab1a68a2803883648ce0a9cbcb256da->leave($__internal_557dd152659e229359ad69e0a361d1097ab1a68a2803883648ce0a9cbcb256da_prof);

        
        $__internal_3f8a690685502c36dc026bffb24c2c23c8b5e4328fd4bc0fb9031cebaf751a6c->leave($__internal_3f8a690685502c36dc026bffb24c2c23c8b5e4328fd4bc0fb9031cebaf751a6c_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ade6b8de8c3230878b202a4e6ccc787e7f63a7cfc10365f36ea9e137f400de2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade6b8de8c3230878b202a4e6ccc787e7f63a7cfc10365f36ea9e137f400de2b->enter($__internal_ade6b8de8c3230878b202a4e6ccc787e7f63a7cfc10365f36ea9e137f400de2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_2a2fbd05f961149d1f2038d363c25319b1b8f798984e6cc263e404c22e365de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a2fbd05f961149d1f2038d363c25319b1b8f798984e6cc263e404c22e365de0->enter($__internal_2a2fbd05f961149d1f2038d363c25319b1b8f798984e6cc263e404c22e365de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2a2fbd05f961149d1f2038d363c25319b1b8f798984e6cc263e404c22e365de0->leave($__internal_2a2fbd05f961149d1f2038d363c25319b1b8f798984e6cc263e404c22e365de0_prof);

        
        $__internal_ade6b8de8c3230878b202a4e6ccc787e7f63a7cfc10365f36ea9e137f400de2b->leave($__internal_ade6b8de8c3230878b202a4e6ccc787e7f63a7cfc10365f36ea9e137f400de2b_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_69505f3e391678f35ca22cd3d5e0b871066cda24562f0777278460651a985dac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69505f3e391678f35ca22cd3d5e0b871066cda24562f0777278460651a985dac->enter($__internal_69505f3e391678f35ca22cd3d5e0b871066cda24562f0777278460651a985dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_7b22760fcb53faf3807072853e13f014a84ab1ead39ff07aff5f631dc835abcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b22760fcb53faf3807072853e13f014a84ab1ead39ff07aff5f631dc835abcc->enter($__internal_7b22760fcb53faf3807072853e13f014a84ab1ead39ff07aff5f631dc835abcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_7b22760fcb53faf3807072853e13f014a84ab1ead39ff07aff5f631dc835abcc->leave($__internal_7b22760fcb53faf3807072853e13f014a84ab1ead39ff07aff5f631dc835abcc_prof);

        
        $__internal_69505f3e391678f35ca22cd3d5e0b871066cda24562f0777278460651a985dac->leave($__internal_69505f3e391678f35ca22cd3d5e0b871066cda24562f0777278460651a985dac_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_04b3c6f15479b6d9d5cc1306d4c053280cd60928bde72108c8cfb5498bbffd91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04b3c6f15479b6d9d5cc1306d4c053280cd60928bde72108c8cfb5498bbffd91->enter($__internal_04b3c6f15479b6d9d5cc1306d4c053280cd60928bde72108c8cfb5498bbffd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_011ff501e27342a8562f52dfeaacc3c78f82b9f7092047aaed0d88cbd313f394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_011ff501e27342a8562f52dfeaacc3c78f82b9f7092047aaed0d88cbd313f394->enter($__internal_011ff501e27342a8562f52dfeaacc3c78f82b9f7092047aaed0d88cbd313f394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_011ff501e27342a8562f52dfeaacc3c78f82b9f7092047aaed0d88cbd313f394->leave($__internal_011ff501e27342a8562f52dfeaacc3c78f82b9f7092047aaed0d88cbd313f394_prof);

        
        $__internal_04b3c6f15479b6d9d5cc1306d4c053280cd60928bde72108c8cfb5498bbffd91->leave($__internal_04b3c6f15479b6d9d5cc1306d4c053280cd60928bde72108c8cfb5498bbffd91_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ac87be19a5ab3a5baf9048d14e984ca3190e12a6962100ea06475726ad818bbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac87be19a5ab3a5baf9048d14e984ca3190e12a6962100ea06475726ad818bbe->enter($__internal_ac87be19a5ab3a5baf9048d14e984ca3190e12a6962100ea06475726ad818bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_157dc91cc7b0a65e475a3897b077a13eeef6c6b8f4729f86e06d8c5040a4a719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157dc91cc7b0a65e475a3897b077a13eeef6c6b8f4729f86e06d8c5040a4a719->enter($__internal_157dc91cc7b0a65e475a3897b077a13eeef6c6b8f4729f86e06d8c5040a4a719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_157dc91cc7b0a65e475a3897b077a13eeef6c6b8f4729f86e06d8c5040a4a719->leave($__internal_157dc91cc7b0a65e475a3897b077a13eeef6c6b8f4729f86e06d8c5040a4a719_prof);

        
        $__internal_ac87be19a5ab3a5baf9048d14e984ca3190e12a6962100ea06475726ad818bbe->leave($__internal_ac87be19a5ab3a5baf9048d14e984ca3190e12a6962100ea06475726ad818bbe_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_56096211500099fbd382cbe19d715986e72db662fc243ba4ce873b46500f61bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56096211500099fbd382cbe19d715986e72db662fc243ba4ce873b46500f61bd->enter($__internal_56096211500099fbd382cbe19d715986e72db662fc243ba4ce873b46500f61bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_11a047ab20e7ab601c77a09e2929f414624b2294b76d86bc392e9e0f9a19dc2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a047ab20e7ab601c77a09e2929f414624b2294b76d86bc392e9e0f9a19dc2a->enter($__internal_11a047ab20e7ab601c77a09e2929f414624b2294b76d86bc392e9e0f9a19dc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_11a047ab20e7ab601c77a09e2929f414624b2294b76d86bc392e9e0f9a19dc2a->leave($__internal_11a047ab20e7ab601c77a09e2929f414624b2294b76d86bc392e9e0f9a19dc2a_prof);

        
        $__internal_56096211500099fbd382cbe19d715986e72db662fc243ba4ce873b46500f61bd->leave($__internal_56096211500099fbd382cbe19d715986e72db662fc243ba4ce873b46500f61bd_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d65240ca6d2f28595ddc943a400821d45f43427093a3db1fd65d8bca2215820d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d65240ca6d2f28595ddc943a400821d45f43427093a3db1fd65d8bca2215820d->enter($__internal_d65240ca6d2f28595ddc943a400821d45f43427093a3db1fd65d8bca2215820d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ebd3b5b064110f621faf44ce410031508ecbcede48502b6e63fc7e945585008f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd3b5b064110f621faf44ce410031508ecbcede48502b6e63fc7e945585008f->enter($__internal_ebd3b5b064110f621faf44ce410031508ecbcede48502b6e63fc7e945585008f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_ebd3b5b064110f621faf44ce410031508ecbcede48502b6e63fc7e945585008f->leave($__internal_ebd3b5b064110f621faf44ce410031508ecbcede48502b6e63fc7e945585008f_prof);

        
        $__internal_d65240ca6d2f28595ddc943a400821d45f43427093a3db1fd65d8bca2215820d->leave($__internal_d65240ca6d2f28595ddc943a400821d45f43427093a3db1fd65d8bca2215820d_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
