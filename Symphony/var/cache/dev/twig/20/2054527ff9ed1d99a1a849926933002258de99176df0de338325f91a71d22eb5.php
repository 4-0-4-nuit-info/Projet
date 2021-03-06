<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_5526634d00e1b3c0fe3d49e51a5d49e6c66d009014c14d98275452aad1d77274 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
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
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b106a9b5b7df002071ad0506c6bf2608817d997708799168042a5cc32b4558a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b106a9b5b7df002071ad0506c6bf2608817d997708799168042a5cc32b4558a9->enter($__internal_b106a9b5b7df002071ad0506c6bf2608817d997708799168042a5cc32b4558a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_572937fcebe2dcd37e136c1dff6087d2709fc3fb7ac50a125f97d45d7fc32038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_572937fcebe2dcd37e136c1dff6087d2709fc3fb7ac50a125f97d45d7fc32038->enter($__internal_572937fcebe2dcd37e136c1dff6087d2709fc3fb7ac50a125f97d45d7fc32038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 193
        echo "
";
        // line 194
        $this->displayBlock('radio_label', $context, $blocks);
        // line 199
        echo "
";
        // line 200
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('form_row', $context, $blocks);
        // line 234
        echo "
";
        // line 235
        $this->displayBlock('button_row', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('choice_row', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('date_row', $context, $blocks);
        // line 250
        echo "
";
        // line 251
        $this->displayBlock('time_row', $context, $blocks);
        // line 255
        echo "
";
        // line 256
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 260
        echo "
";
        // line 261
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 267
        echo "
";
        // line 268
        $this->displayBlock('radio_row', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        echo "
";
        // line 277
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_b106a9b5b7df002071ad0506c6bf2608817d997708799168042a5cc32b4558a9->leave($__internal_b106a9b5b7df002071ad0506c6bf2608817d997708799168042a5cc32b4558a9_prof);

        
        $__internal_572937fcebe2dcd37e136c1dff6087d2709fc3fb7ac50a125f97d45d7fc32038->leave($__internal_572937fcebe2dcd37e136c1dff6087d2709fc3fb7ac50a125f97d45d7fc32038_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c615498c77fccab7eab3a386686a8890ec287bbdde3031dabc90f5c63e446037 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c615498c77fccab7eab3a386686a8890ec287bbdde3031dabc90f5c63e446037->enter($__internal_c615498c77fccab7eab3a386686a8890ec287bbdde3031dabc90f5c63e446037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0f937ec40aff454f9216694c6dfc5781a805fe6b01bb5ea98e4a6285fee4e7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f937ec40aff454f9216694c6dfc5781a805fe6b01bb5ea98e4a6285fee4e7d6->enter($__internal_0f937ec40aff454f9216694c6dfc5781a805fe6b01bb5ea98e4a6285fee4e7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0f937ec40aff454f9216694c6dfc5781a805fe6b01bb5ea98e4a6285fee4e7d6->leave($__internal_0f937ec40aff454f9216694c6dfc5781a805fe6b01bb5ea98e4a6285fee4e7d6_prof);

        
        $__internal_c615498c77fccab7eab3a386686a8890ec287bbdde3031dabc90f5c63e446037->leave($__internal_c615498c77fccab7eab3a386686a8890ec287bbdde3031dabc90f5c63e446037_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_0baf70a1a55daaa2a558e77af4c8755eacbc54c5432fe3f1f82fbf631561b8c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0baf70a1a55daaa2a558e77af4c8755eacbc54c5432fe3f1f82fbf631561b8c4->enter($__internal_0baf70a1a55daaa2a558e77af4c8755eacbc54c5432fe3f1f82fbf631561b8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e3285244920f7d321f4fb6850778bb7dd0469e588bb23852afbf2f4a073d73c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3285244920f7d321f4fb6850778bb7dd0469e588bb23852afbf2f4a073d73c7->enter($__internal_e3285244920f7d321f4fb6850778bb7dd0469e588bb23852afbf2f4a073d73c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e3285244920f7d321f4fb6850778bb7dd0469e588bb23852afbf2f4a073d73c7->leave($__internal_e3285244920f7d321f4fb6850778bb7dd0469e588bb23852afbf2f4a073d73c7_prof);

        
        $__internal_0baf70a1a55daaa2a558e77af4c8755eacbc54c5432fe3f1f82fbf631561b8c4->leave($__internal_0baf70a1a55daaa2a558e77af4c8755eacbc54c5432fe3f1f82fbf631561b8c4_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_622fa73bcf7e151fe6e586e7790b86d1f4f36baf9a3df4a5473f83e962f1f2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622fa73bcf7e151fe6e586e7790b86d1f4f36baf9a3df4a5473f83e962f1f2ae->enter($__internal_622fa73bcf7e151fe6e586e7790b86d1f4f36baf9a3df4a5473f83e962f1f2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_e2ba0044e67ecf080e42baeee2927d89492ba2264bc0fe7e6514749d0d2159d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ba0044e67ecf080e42baeee2927d89492ba2264bc0fe7e6514749d0d2159d0->enter($__internal_e2ba0044e67ecf080e42baeee2927d89492ba2264bc0fe7e6514749d0d2159d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_e2ba0044e67ecf080e42baeee2927d89492ba2264bc0fe7e6514749d0d2159d0->leave($__internal_e2ba0044e67ecf080e42baeee2927d89492ba2264bc0fe7e6514749d0d2159d0_prof);

        
        $__internal_622fa73bcf7e151fe6e586e7790b86d1f4f36baf9a3df4a5473f83e962f1f2ae->leave($__internal_622fa73bcf7e151fe6e586e7790b86d1f4f36baf9a3df4a5473f83e962f1f2ae_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_aca90cef8dc60adce545efb0e61564877287efc94faf9434b6939a48a7c5866a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca90cef8dc60adce545efb0e61564877287efc94faf9434b6939a48a7c5866a->enter($__internal_aca90cef8dc60adce545efb0e61564877287efc94faf9434b6939a48a7c5866a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_38041a58c47609193af64cc729dc7bcf09cf796c7af8155c5b7a0c50563ee511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38041a58c47609193af64cc729dc7bcf09cf796c7af8155c5b7a0c50563ee511->enter($__internal_38041a58c47609193af64cc729dc7bcf09cf796c7af8155c5b7a0c50563ee511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_119be851992239d3d23da362a707dc25dc091cdc98a97c0943cf98b574ee4663 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_e68e7c6e548063a7f2e5012d1cf9d3e86c09a9be55cdd0d59cc80ef0ae2cc077 = "{{") && ('' === $__internal_e68e7c6e548063a7f2e5012d1cf9d3e86c09a9be55cdd0d59cc80ef0ae2cc077 || 0 === strpos($__internal_119be851992239d3d23da362a707dc25dc091cdc98a97c0943cf98b574ee4663, $__internal_e68e7c6e548063a7f2e5012d1cf9d3e86c09a9be55cdd0d59cc80ef0ae2cc077)));
        // line 25
        echo "        ";
        if ( !($context["append"] ?? $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if (($context["append"] ?? $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_38041a58c47609193af64cc729dc7bcf09cf796c7af8155c5b7a0c50563ee511->leave($__internal_38041a58c47609193af64cc729dc7bcf09cf796c7af8155c5b7a0c50563ee511_prof);

        
        $__internal_aca90cef8dc60adce545efb0e61564877287efc94faf9434b6939a48a7c5866a->leave($__internal_aca90cef8dc60adce545efb0e61564877287efc94faf9434b6939a48a7c5866a_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d11940970df69c2f3219a2291c196758c424e22434dfde15485964d7a46efe46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d11940970df69c2f3219a2291c196758c424e22434dfde15485964d7a46efe46->enter($__internal_d11940970df69c2f3219a2291c196758c424e22434dfde15485964d7a46efe46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_c6e57fc7aea394adebe792d179b94c9f81cd8087b3a89351a7cedb8cf0f8fed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e57fc7aea394adebe792d179b94c9f81cd8087b3a89351a7cedb8cf0f8fed6->enter($__internal_c6e57fc7aea394adebe792d179b94c9f81cd8087b3a89351a7cedb8cf0f8fed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_c6e57fc7aea394adebe792d179b94c9f81cd8087b3a89351a7cedb8cf0f8fed6->leave($__internal_c6e57fc7aea394adebe792d179b94c9f81cd8087b3a89351a7cedb8cf0f8fed6_prof);

        
        $__internal_d11940970df69c2f3219a2291c196758c424e22434dfde15485964d7a46efe46->leave($__internal_d11940970df69c2f3219a2291c196758c424e22434dfde15485964d7a46efe46_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_955dc109f13ada5f47f3c0a8666a56ce16e0c3cf2af277834aa920dc24e151d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_955dc109f13ada5f47f3c0a8666a56ce16e0c3cf2af277834aa920dc24e151d7->enter($__internal_955dc109f13ada5f47f3c0a8666a56ce16e0c3cf2af277834aa920dc24e151d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_1b1f2c907d810f0de29c9366d0ae5b10117854a1601558b6c219064466365fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b1f2c907d810f0de29c9366d0ae5b10117854a1601558b6c219064466365fea->enter($__internal_1b1f2c907d810f0de29c9366d0ae5b10117854a1601558b6c219064466365fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_1b1f2c907d810f0de29c9366d0ae5b10117854a1601558b6c219064466365fea->leave($__internal_1b1f2c907d810f0de29c9366d0ae5b10117854a1601558b6c219064466365fea_prof);

        
        $__internal_955dc109f13ada5f47f3c0a8666a56ce16e0c3cf2af277834aa920dc24e151d7->leave($__internal_955dc109f13ada5f47f3c0a8666a56ce16e0c3cf2af277834aa920dc24e151d7_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_41c8c57968244911937dc3bb9452308501de684d6685d60b7a88f0010f1a4b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c8c57968244911937dc3bb9452308501de684d6685d60b7a88f0010f1a4b47->enter($__internal_41c8c57968244911937dc3bb9452308501de684d6685d60b7a88f0010f1a4b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d231336321cfcd69a6d29f22d243542e52894302984281cb83a71f761c44af0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d231336321cfcd69a6d29f22d243542e52894302984281cb83a71f761c44af0f->enter($__internal_d231336321cfcd69a6d29f22d243542e52894302984281cb83a71f761c44af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_d231336321cfcd69a6d29f22d243542e52894302984281cb83a71f761c44af0f->leave($__internal_d231336321cfcd69a6d29f22d243542e52894302984281cb83a71f761c44af0f_prof);

        
        $__internal_41c8c57968244911937dc3bb9452308501de684d6685d60b7a88f0010f1a4b47->leave($__internal_41c8c57968244911937dc3bb9452308501de684d6685d60b7a88f0010f1a4b47_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_fa303b3067a18b86bb700978b562bba7a5aeb88cd39a569c79413208caeea593 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa303b3067a18b86bb700978b562bba7a5aeb88cd39a569c79413208caeea593->enter($__internal_fa303b3067a18b86bb700978b562bba7a5aeb88cd39a569c79413208caeea593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_004e1e4b5793a4619cb86da8c8435e1e01093e08f78d6575587f553c0b750098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004e1e4b5793a4619cb86da8c8435e1e01093e08f78d6575587f553c0b750098->enter($__internal_004e1e4b5793a4619cb86da8c8435e1e01093e08f78d6575587f553c0b750098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_004e1e4b5793a4619cb86da8c8435e1e01093e08f78d6575587f553c0b750098->leave($__internal_004e1e4b5793a4619cb86da8c8435e1e01093e08f78d6575587f553c0b750098_prof);

        
        $__internal_fa303b3067a18b86bb700978b562bba7a5aeb88cd39a569c79413208caeea593->leave($__internal_fa303b3067a18b86bb700978b562bba7a5aeb88cd39a569c79413208caeea593_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_99cea3269eb0cffc182f000b4212ef5f5126191ff40baba72b720c2a09dddf3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99cea3269eb0cffc182f000b4212ef5f5126191ff40baba72b720c2a09dddf3c->enter($__internal_99cea3269eb0cffc182f000b4212ef5f5126191ff40baba72b720c2a09dddf3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_45fe3961a91d6a39f7208a44c9012cf828ab19e705ae9772f9ad42d8190faa67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45fe3961a91d6a39f7208a44c9012cf828ab19e705ae9772f9ad42d8190faa67->enter($__internal_45fe3961a91d6a39f7208a44c9012cf828ab19e705ae9772f9ad42d8190faa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_45fe3961a91d6a39f7208a44c9012cf828ab19e705ae9772f9ad42d8190faa67->leave($__internal_45fe3961a91d6a39f7208a44c9012cf828ab19e705ae9772f9ad42d8190faa67_prof);

        
        $__internal_99cea3269eb0cffc182f000b4212ef5f5126191ff40baba72b720c2a09dddf3c->leave($__internal_99cea3269eb0cffc182f000b4212ef5f5126191ff40baba72b720c2a09dddf3c_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_70871143c73d34142f713b826fd78dfa229f0a2c4a3fd3daa3d56371f9cce0f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70871143c73d34142f713b826fd78dfa229f0a2c4a3fd3daa3d56371f9cce0f3->enter($__internal_70871143c73d34142f713b826fd78dfa229f0a2c4a3fd3daa3d56371f9cce0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_5fe5b97d3b808407c1a000dad288bbb30c682fd5f44b84aa96d02283c2874fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe5b97d3b808407c1a000dad288bbb30c682fd5f44b84aa96d02283c2874fb4->enter($__internal_5fe5b97d3b808407c1a000dad288bbb30c682fd5f44b84aa96d02283c2874fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_5fe5b97d3b808407c1a000dad288bbb30c682fd5f44b84aa96d02283c2874fb4->leave($__internal_5fe5b97d3b808407c1a000dad288bbb30c682fd5f44b84aa96d02283c2874fb4_prof);

        
        $__internal_70871143c73d34142f713b826fd78dfa229f0a2c4a3fd3daa3d56371f9cce0f3->leave($__internal_70871143c73d34142f713b826fd78dfa229f0a2c4a3fd3daa3d56371f9cce0f3_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_703fa1b173ccb0ff776dd9e929a4178a02ac39f078d7a762031da410899ff898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_703fa1b173ccb0ff776dd9e929a4178a02ac39f078d7a762031da410899ff898->enter($__internal_703fa1b173ccb0ff776dd9e929a4178a02ac39f078d7a762031da410899ff898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_b306c032fefd1856205b6583d2f8a3611b85fe78d18ee245acda74a4aa54472b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b306c032fefd1856205b6583d2f8a3611b85fe78d18ee245acda74a4aa54472b->enter($__internal_b306c032fefd1856205b6583d2f8a3611b85fe78d18ee245acda74a4aa54472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_b306c032fefd1856205b6583d2f8a3611b85fe78d18ee245acda74a4aa54472b->leave($__internal_b306c032fefd1856205b6583d2f8a3611b85fe78d18ee245acda74a4aa54472b_prof);

        
        $__internal_703fa1b173ccb0ff776dd9e929a4178a02ac39f078d7a762031da410899ff898->leave($__internal_703fa1b173ccb0ff776dd9e929a4178a02ac39f078d7a762031da410899ff898_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_81e8193087e5c8438d63f77ccaf7cc2b8257a0a8980b5366b211133c6b2cdf7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81e8193087e5c8438d63f77ccaf7cc2b8257a0a8980b5366b211133c6b2cdf7d->enter($__internal_81e8193087e5c8438d63f77ccaf7cc2b8257a0a8980b5366b211133c6b2cdf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_e4622cd5106bc87d2b44adc4509d448f6b7cb618e85f628b2964eb6ae8948c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4622cd5106bc87d2b44adc4509d448f6b7cb618e85f628b2964eb6ae8948c6c->enter($__internal_e4622cd5106bc87d2b44adc4509d448f6b7cb618e85f628b2964eb6ae8948c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_e4622cd5106bc87d2b44adc4509d448f6b7cb618e85f628b2964eb6ae8948c6c->leave($__internal_e4622cd5106bc87d2b44adc4509d448f6b7cb618e85f628b2964eb6ae8948c6c_prof);

        
        $__internal_81e8193087e5c8438d63f77ccaf7cc2b8257a0a8980b5366b211133c6b2cdf7d->leave($__internal_81e8193087e5c8438d63f77ccaf7cc2b8257a0a8980b5366b211133c6b2cdf7d_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_0c1d4e09088d0d4a1947921152e0aeb61f6b849bc61e9ef0a366c71828d3afd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1d4e09088d0d4a1947921152e0aeb61f6b849bc61e9ef0a366c71828d3afd3->enter($__internal_0c1d4e09088d0d4a1947921152e0aeb61f6b849bc61e9ef0a366c71828d3afd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_805b5ca1adedf8ae38fc8f94954c6d3c0034b14dc0ab23a528c2fa8641c84ced = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805b5ca1adedf8ae38fc8f94954c6d3c0034b14dc0ab23a528c2fa8641c84ced->enter($__internal_805b5ca1adedf8ae38fc8f94954c6d3c0034b14dc0ab23a528c2fa8641c84ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_805b5ca1adedf8ae38fc8f94954c6d3c0034b14dc0ab23a528c2fa8641c84ced->leave($__internal_805b5ca1adedf8ae38fc8f94954c6d3c0034b14dc0ab23a528c2fa8641c84ced_prof);

        
        $__internal_0c1d4e09088d0d4a1947921152e0aeb61f6b849bc61e9ef0a366c71828d3afd3->leave($__internal_0c1d4e09088d0d4a1947921152e0aeb61f6b849bc61e9ef0a366c71828d3afd3_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c18d9c9fdfcf8b750325f01c2d1c739c5ec546623d42843f3511090c12bd6e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c18d9c9fdfcf8b750325f01c2d1c739c5ec546623d42843f3511090c12bd6e2e->enter($__internal_c18d9c9fdfcf8b750325f01c2d1c739c5ec546623d42843f3511090c12bd6e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_b9e3993e74973f4a379ba7eb9ac71a8f3fb9e3872337f469e24f24bad6761605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e3993e74973f4a379ba7eb9ac71a8f3fb9e3872337f469e24f24bad6761605->enter($__internal_b9e3993e74973f4a379ba7eb9ac71a8f3fb9e3872337f469e24f24bad6761605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_b9e3993e74973f4a379ba7eb9ac71a8f3fb9e3872337f469e24f24bad6761605->leave($__internal_b9e3993e74973f4a379ba7eb9ac71a8f3fb9e3872337f469e24f24bad6761605_prof);

        
        $__internal_c18d9c9fdfcf8b750325f01c2d1c739c5ec546623d42843f3511090c12bd6e2e->leave($__internal_c18d9c9fdfcf8b750325f01c2d1c739c5ec546623d42843f3511090c12bd6e2e_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_077bd6edf6140720936593ff8f286c181c81318da79887263147c2c3325496bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077bd6edf6140720936593ff8f286c181c81318da79887263147c2c3325496bd->enter($__internal_077bd6edf6140720936593ff8f286c181c81318da79887263147c2c3325496bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_07e8879162040291b38da5c61ae2d3ddf76ec102bdaf27b29c3e5400d8eb664f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e8879162040291b38da5c61ae2d3ddf76ec102bdaf27b29c3e5400d8eb664f->enter($__internal_07e8879162040291b38da5c61ae2d3ddf76ec102bdaf27b29c3e5400d8eb664f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_07e8879162040291b38da5c61ae2d3ddf76ec102bdaf27b29c3e5400d8eb664f->leave($__internal_07e8879162040291b38da5c61ae2d3ddf76ec102bdaf27b29c3e5400d8eb664f_prof);

        
        $__internal_077bd6edf6140720936593ff8f286c181c81318da79887263147c2c3325496bd->leave($__internal_077bd6edf6140720936593ff8f286c181c81318da79887263147c2c3325496bd_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_52a568a28d34469e3b5b8ce2ec1087646442952a52b80f94429f74492c263e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52a568a28d34469e3b5b8ce2ec1087646442952a52b80f94429f74492c263e3b->enter($__internal_52a568a28d34469e3b5b8ce2ec1087646442952a52b80f94429f74492c263e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_c6f8218f9be351b4f6385ef858db1894b3bd4629dc658d9f170ea0f699c1dd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f8218f9be351b4f6385ef858db1894b3bd4629dc658d9f170ea0f699c1dd02->enter($__internal_c6f8218f9be351b4f6385ef858db1894b3bd4629dc658d9f170ea0f699c1dd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 191
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_c6f8218f9be351b4f6385ef858db1894b3bd4629dc658d9f170ea0f699c1dd02->leave($__internal_c6f8218f9be351b4f6385ef858db1894b3bd4629dc658d9f170ea0f699c1dd02_prof);

        
        $__internal_52a568a28d34469e3b5b8ce2ec1087646442952a52b80f94429f74492c263e3b->leave($__internal_52a568a28d34469e3b5b8ce2ec1087646442952a52b80f94429f74492c263e3b_prof);

    }

    // line 194
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_af40a2b149d94ac0af623cae06a321ba69b87c91758f0e8919e83577bbad809e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af40a2b149d94ac0af623cae06a321ba69b87c91758f0e8919e83577bbad809e->enter($__internal_af40a2b149d94ac0af623cae06a321ba69b87c91758f0e8919e83577bbad809e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_03b7a48b10699b06bf963166fa67f3ded16dfb86ed356352948f0273bbab177c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b7a48b10699b06bf963166fa67f3ded16dfb86ed356352948f0273bbab177c->enter($__internal_03b7a48b10699b06bf963166fa67f3ded16dfb86ed356352948f0273bbab177c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 195
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 197
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_03b7a48b10699b06bf963166fa67f3ded16dfb86ed356352948f0273bbab177c->leave($__internal_03b7a48b10699b06bf963166fa67f3ded16dfb86ed356352948f0273bbab177c_prof);

        
        $__internal_af40a2b149d94ac0af623cae06a321ba69b87c91758f0e8919e83577bbad809e->leave($__internal_af40a2b149d94ac0af623cae06a321ba69b87c91758f0e8919e83577bbad809e_prof);

    }

    // line 200
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_e48064c295b1c30069a70ff49d776f9cafff80260da04f3fb297df939883962a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48064c295b1c30069a70ff49d776f9cafff80260da04f3fb297df939883962a->enter($__internal_e48064c295b1c30069a70ff49d776f9cafff80260da04f3fb297df939883962a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f18d22822f7b2b811cac51380f3f2476b9e63ca42cdc2228dcb6df0e796f0833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18d22822f7b2b811cac51380f3f2476b9e63ca42cdc2228dcb6df0e796f0833->enter($__internal_f18d22822f7b2b811cac51380f3f2476b9e63ca42cdc2228dcb6df0e796f0833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 201
        echo "    ";
        // line 202
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 203
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 204
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 205
                echo "        ";
            }
            // line 206
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 207
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 210
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 211
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 212
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 213
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 216
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 219
            echo "        <label";
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
            echo ">";
            // line 220
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 221
            echo "</label>
    ";
        }
        
        $__internal_f18d22822f7b2b811cac51380f3f2476b9e63ca42cdc2228dcb6df0e796f0833->leave($__internal_f18d22822f7b2b811cac51380f3f2476b9e63ca42cdc2228dcb6df0e796f0833_prof);

        
        $__internal_e48064c295b1c30069a70ff49d776f9cafff80260da04f3fb297df939883962a->leave($__internal_e48064c295b1c30069a70ff49d776f9cafff80260da04f3fb297df939883962a_prof);

    }

    // line 227
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_80eec5f42c0c47848639cda5d21b339d26bc804fb04ce14cb7cb226e05a12d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80eec5f42c0c47848639cda5d21b339d26bc804fb04ce14cb7cb226e05a12d41->enter($__internal_80eec5f42c0c47848639cda5d21b339d26bc804fb04ce14cb7cb226e05a12d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ebd84a8cb18498adc64e0f56efba970626c360e99543d0f4164d1b6765ddd6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd84a8cb18498adc64e0f56efba970626c360e99543d0f4164d1b6765ddd6c6->enter($__internal_ebd84a8cb18498adc64e0f56efba970626c360e99543d0f4164d1b6765ddd6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 228
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 231
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 232
        echo "</div>";
        
        $__internal_ebd84a8cb18498adc64e0f56efba970626c360e99543d0f4164d1b6765ddd6c6->leave($__internal_ebd84a8cb18498adc64e0f56efba970626c360e99543d0f4164d1b6765ddd6c6_prof);

        
        $__internal_80eec5f42c0c47848639cda5d21b339d26bc804fb04ce14cb7cb226e05a12d41->leave($__internal_80eec5f42c0c47848639cda5d21b339d26bc804fb04ce14cb7cb226e05a12d41_prof);

    }

    // line 235
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d7eb282a2d3bacb7cd92d4251c1815d026d6cfd379795ad0672007fa2f6ada92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7eb282a2d3bacb7cd92d4251c1815d026d6cfd379795ad0672007fa2f6ada92->enter($__internal_d7eb282a2d3bacb7cd92d4251c1815d026d6cfd379795ad0672007fa2f6ada92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_a0911650c20e62855d40269f6ddb45c8e6addf33d77a994d4cd5c144804ef3ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0911650c20e62855d40269f6ddb45c8e6addf33d77a994d4cd5c144804ef3ed->enter($__internal_a0911650c20e62855d40269f6ddb45c8e6addf33d77a994d4cd5c144804ef3ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 236
        echo "<div class=\"form-group\">";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 238
        echo "</div>";
        
        $__internal_a0911650c20e62855d40269f6ddb45c8e6addf33d77a994d4cd5c144804ef3ed->leave($__internal_a0911650c20e62855d40269f6ddb45c8e6addf33d77a994d4cd5c144804ef3ed_prof);

        
        $__internal_d7eb282a2d3bacb7cd92d4251c1815d026d6cfd379795ad0672007fa2f6ada92->leave($__internal_d7eb282a2d3bacb7cd92d4251c1815d026d6cfd379795ad0672007fa2f6ada92_prof);

    }

    // line 241
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_6946bf7dcccb33a290b7c3dd6a89c55755775bf5d2af1ccf53801f5067dca536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6946bf7dcccb33a290b7c3dd6a89c55755775bf5d2af1ccf53801f5067dca536->enter($__internal_6946bf7dcccb33a290b7c3dd6a89c55755775bf5d2af1ccf53801f5067dca536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_18c935c5288819b8196e9ad7d5a1fc6cb463ee05e1edec2b458e9026aaaabaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c935c5288819b8196e9ad7d5a1fc6cb463ee05e1edec2b458e9026aaaabaa8->enter($__internal_18c935c5288819b8196e9ad7d5a1fc6cb463ee05e1edec2b458e9026aaaabaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 242
        $context["force_error"] = true;
        // line 243
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_18c935c5288819b8196e9ad7d5a1fc6cb463ee05e1edec2b458e9026aaaabaa8->leave($__internal_18c935c5288819b8196e9ad7d5a1fc6cb463ee05e1edec2b458e9026aaaabaa8_prof);

        
        $__internal_6946bf7dcccb33a290b7c3dd6a89c55755775bf5d2af1ccf53801f5067dca536->leave($__internal_6946bf7dcccb33a290b7c3dd6a89c55755775bf5d2af1ccf53801f5067dca536_prof);

    }

    // line 246
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_4781b58f328a150bc8ce6daa75557d088d571ded97fe398427d3c698e24ca3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4781b58f328a150bc8ce6daa75557d088d571ded97fe398427d3c698e24ca3c2->enter($__internal_4781b58f328a150bc8ce6daa75557d088d571ded97fe398427d3c698e24ca3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ad040b9e471f3d95b1523a01c5b1f3008c3f9751e16e46b7ebf3105188851e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad040b9e471f3d95b1523a01c5b1f3008c3f9751e16e46b7ebf3105188851e87->enter($__internal_ad040b9e471f3d95b1523a01c5b1f3008c3f9751e16e46b7ebf3105188851e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 247
        $context["force_error"] = true;
        // line 248
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ad040b9e471f3d95b1523a01c5b1f3008c3f9751e16e46b7ebf3105188851e87->leave($__internal_ad040b9e471f3d95b1523a01c5b1f3008c3f9751e16e46b7ebf3105188851e87_prof);

        
        $__internal_4781b58f328a150bc8ce6daa75557d088d571ded97fe398427d3c698e24ca3c2->leave($__internal_4781b58f328a150bc8ce6daa75557d088d571ded97fe398427d3c698e24ca3c2_prof);

    }

    // line 251
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_a2e9fe4f3255cb99484ab818180fe8f1dbf587061bca5927585d16f809b535f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2e9fe4f3255cb99484ab818180fe8f1dbf587061bca5927585d16f809b535f0->enter($__internal_a2e9fe4f3255cb99484ab818180fe8f1dbf587061bca5927585d16f809b535f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_d5ec57f9b6fcc19c14835bd9fdd1efa73005ac229e6ceb38dbb5ef57677a4e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5ec57f9b6fcc19c14835bd9fdd1efa73005ac229e6ceb38dbb5ef57677a4e58->enter($__internal_d5ec57f9b6fcc19c14835bd9fdd1efa73005ac229e6ceb38dbb5ef57677a4e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 252
        $context["force_error"] = true;
        // line 253
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_d5ec57f9b6fcc19c14835bd9fdd1efa73005ac229e6ceb38dbb5ef57677a4e58->leave($__internal_d5ec57f9b6fcc19c14835bd9fdd1efa73005ac229e6ceb38dbb5ef57677a4e58_prof);

        
        $__internal_a2e9fe4f3255cb99484ab818180fe8f1dbf587061bca5927585d16f809b535f0->leave($__internal_a2e9fe4f3255cb99484ab818180fe8f1dbf587061bca5927585d16f809b535f0_prof);

    }

    // line 256
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d0586391c51900c7703191e1e55bb18980b2d35aa97939aca96725d8a3f14ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0586391c51900c7703191e1e55bb18980b2d35aa97939aca96725d8a3f14ae5->enter($__internal_d0586391c51900c7703191e1e55bb18980b2d35aa97939aca96725d8a3f14ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_74972e59fa1c3f2608ce1b2b73ff2e78a7decc2c336bd003e8f0bb93186eade7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74972e59fa1c3f2608ce1b2b73ff2e78a7decc2c336bd003e8f0bb93186eade7->enter($__internal_74972e59fa1c3f2608ce1b2b73ff2e78a7decc2c336bd003e8f0bb93186eade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 257
        $context["force_error"] = true;
        // line 258
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_74972e59fa1c3f2608ce1b2b73ff2e78a7decc2c336bd003e8f0bb93186eade7->leave($__internal_74972e59fa1c3f2608ce1b2b73ff2e78a7decc2c336bd003e8f0bb93186eade7_prof);

        
        $__internal_d0586391c51900c7703191e1e55bb18980b2d35aa97939aca96725d8a3f14ae5->leave($__internal_d0586391c51900c7703191e1e55bb18980b2d35aa97939aca96725d8a3f14ae5_prof);

    }

    // line 261
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_4e5001305fc4fa86ba8c67752476643a00383ce93551db1fbe1f1cf51a62f9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5001305fc4fa86ba8c67752476643a00383ce93551db1fbe1f1cf51a62f9c5->enter($__internal_4e5001305fc4fa86ba8c67752476643a00383ce93551db1fbe1f1cf51a62f9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_711d59db04274ce3963e52df4a1d77e4f7cb61bbbbc14bf53d3aabaaf00f9ac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711d59db04274ce3963e52df4a1d77e4f7cb61bbbbc14bf53d3aabaaf00f9ac3->enter($__internal_711d59db04274ce3963e52df4a1d77e4f7cb61bbbbc14bf53d3aabaaf00f9ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 262
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 264
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 265
        echo "</div>";
        
        $__internal_711d59db04274ce3963e52df4a1d77e4f7cb61bbbbc14bf53d3aabaaf00f9ac3->leave($__internal_711d59db04274ce3963e52df4a1d77e4f7cb61bbbbc14bf53d3aabaaf00f9ac3_prof);

        
        $__internal_4e5001305fc4fa86ba8c67752476643a00383ce93551db1fbe1f1cf51a62f9c5->leave($__internal_4e5001305fc4fa86ba8c67752476643a00383ce93551db1fbe1f1cf51a62f9c5_prof);

    }

    // line 268
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_9a3195c9fbd3bb808c51288ab6cdc93afa1ef74516dc46daf6eb98c3f1b597f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3195c9fbd3bb808c51288ab6cdc93afa1ef74516dc46daf6eb98c3f1b597f6->enter($__internal_9a3195c9fbd3bb808c51288ab6cdc93afa1ef74516dc46daf6eb98c3f1b597f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_29eee5effd5b2d7d2378eb82c2f23839e9e0bfe4ed3b6b1fb3c5cd099466af8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29eee5effd5b2d7d2378eb82c2f23839e9e0bfe4ed3b6b1fb3c5cd099466af8c->enter($__internal_29eee5effd5b2d7d2378eb82c2f23839e9e0bfe4ed3b6b1fb3c5cd099466af8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 269
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 272
        echo "</div>";
        
        $__internal_29eee5effd5b2d7d2378eb82c2f23839e9e0bfe4ed3b6b1fb3c5cd099466af8c->leave($__internal_29eee5effd5b2d7d2378eb82c2f23839e9e0bfe4ed3b6b1fb3c5cd099466af8c_prof);

        
        $__internal_9a3195c9fbd3bb808c51288ab6cdc93afa1ef74516dc46daf6eb98c3f1b597f6->leave($__internal_9a3195c9fbd3bb808c51288ab6cdc93afa1ef74516dc46daf6eb98c3f1b597f6_prof);

    }

    // line 277
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_878f637fdc22f653237f35ead9a680ea43821bfcc7f16e3489d36201f78f3121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_878f637fdc22f653237f35ead9a680ea43821bfcc7f16e3489d36201f78f3121->enter($__internal_878f637fdc22f653237f35ead9a680ea43821bfcc7f16e3489d36201f78f3121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_98343212153dac5aed329d0c2646f4d9d68c5a2a0614562712e59ad2c2cd7c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98343212153dac5aed329d0c2646f4d9d68c5a2a0614562712e59ad2c2cd7c8a->enter($__internal_98343212153dac5aed329d0c2646f4d9d68c5a2a0614562712e59ad2c2cd7c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 278
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 279
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 280
            echo "    <ul class=\"list-unstyled\">";
            // line 281
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 282
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "</ul>
    ";
            // line 285
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_98343212153dac5aed329d0c2646f4d9d68c5a2a0614562712e59ad2c2cd7c8a->leave($__internal_98343212153dac5aed329d0c2646f4d9d68c5a2a0614562712e59ad2c2cd7c8a_prof);

        
        $__internal_878f637fdc22f653237f35ead9a680ea43821bfcc7f16e3489d36201f78f3121->leave($__internal_878f637fdc22f653237f35ead9a680ea43821bfcc7f16e3489d36201f78f3121_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1139 => 285,  1136 => 284,  1128 => 282,  1124 => 281,  1122 => 280,  1116 => 279,  1114 => 278,  1105 => 277,  1095 => 272,  1093 => 271,  1091 => 270,  1085 => 269,  1076 => 268,  1066 => 265,  1064 => 264,  1062 => 263,  1056 => 262,  1047 => 261,  1037 => 258,  1035 => 257,  1026 => 256,  1016 => 253,  1014 => 252,  1005 => 251,  995 => 248,  993 => 247,  984 => 246,  974 => 243,  972 => 242,  963 => 241,  953 => 238,  951 => 237,  949 => 236,  940 => 235,  930 => 232,  928 => 231,  926 => 230,  924 => 229,  918 => 228,  909 => 227,  897 => 221,  893 => 220,  878 => 219,  874 => 216,  871 => 213,  870 => 212,  869 => 211,  867 => 210,  864 => 209,  861 => 208,  858 => 207,  855 => 206,  852 => 205,  849 => 204,  846 => 203,  843 => 202,  841 => 201,  832 => 200,  822 => 197,  820 => 195,  811 => 194,  801 => 191,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 277,  200 => 276,  197 => 274,  195 => 268,  192 => 267,  190 => 261,  187 => 260,  185 => 256,  182 => 255,  180 => 251,  177 => 250,  175 => 246,  172 => 245,  170 => 241,  167 => 240,  165 => 235,  162 => 234,  160 => 227,  157 => 226,  154 => 224,  152 => 200,  149 => 199,  147 => 194,  144 => 193,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
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
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
