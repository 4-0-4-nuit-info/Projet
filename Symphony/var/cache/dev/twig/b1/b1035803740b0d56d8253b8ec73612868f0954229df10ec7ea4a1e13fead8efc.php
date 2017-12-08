<?php

/* form_table_layout.html.twig */
class __TwigTemplate_40c922390da733fd34c5fb79fcf193d3a7f351a8b0a0a930fb5c106b58b30cda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc6f2675d92e46f0284eb947aeab67452eaa19ba73753ff114efb193d3c6048f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6f2675d92e46f0284eb947aeab67452eaa19ba73753ff114efb193d3c6048f->enter($__internal_fc6f2675d92e46f0284eb947aeab67452eaa19ba73753ff114efb193d3c6048f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_cb11af38bb4d9aac3fed3ec170e3209596504075b7102b1cde81e3e5607d218c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb11af38bb4d9aac3fed3ec170e3209596504075b7102b1cde81e3e5607d218c->enter($__internal_cb11af38bb4d9aac3fed3ec170e3209596504075b7102b1cde81e3e5607d218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_fc6f2675d92e46f0284eb947aeab67452eaa19ba73753ff114efb193d3c6048f->leave($__internal_fc6f2675d92e46f0284eb947aeab67452eaa19ba73753ff114efb193d3c6048f_prof);

        
        $__internal_cb11af38bb4d9aac3fed3ec170e3209596504075b7102b1cde81e3e5607d218c->leave($__internal_cb11af38bb4d9aac3fed3ec170e3209596504075b7102b1cde81e3e5607d218c_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_eeed6b6b810cfab126a003c3b762039d5663b7503bb8852a89b3fffe7846a7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeed6b6b810cfab126a003c3b762039d5663b7503bb8852a89b3fffe7846a7ca->enter($__internal_eeed6b6b810cfab126a003c3b762039d5663b7503bb8852a89b3fffe7846a7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_f81129c9e144a7903e9011826d2ae9b0480ce6b3536505cd01910283921ea90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81129c9e144a7903e9011826d2ae9b0480ce6b3536505cd01910283921ea90d->enter($__internal_f81129c9e144a7903e9011826d2ae9b0480ce6b3536505cd01910283921ea90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_f81129c9e144a7903e9011826d2ae9b0480ce6b3536505cd01910283921ea90d->leave($__internal_f81129c9e144a7903e9011826d2ae9b0480ce6b3536505cd01910283921ea90d_prof);

        
        $__internal_eeed6b6b810cfab126a003c3b762039d5663b7503bb8852a89b3fffe7846a7ca->leave($__internal_eeed6b6b810cfab126a003c3b762039d5663b7503bb8852a89b3fffe7846a7ca_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_ef4cb38e996edd1609f15dff17205c2265637e4eecd2e25b7bb5b7a92bba3a55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef4cb38e996edd1609f15dff17205c2265637e4eecd2e25b7bb5b7a92bba3a55->enter($__internal_ef4cb38e996edd1609f15dff17205c2265637e4eecd2e25b7bb5b7a92bba3a55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_8a02838438606d707ef8ac0d5491d2ed15b1b3379ac20b9b3fbaf6a8effa5fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a02838438606d707ef8ac0d5491d2ed15b1b3379ac20b9b3fbaf6a8effa5fb4->enter($__internal_8a02838438606d707ef8ac0d5491d2ed15b1b3379ac20b9b3fbaf6a8effa5fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_8a02838438606d707ef8ac0d5491d2ed15b1b3379ac20b9b3fbaf6a8effa5fb4->leave($__internal_8a02838438606d707ef8ac0d5491d2ed15b1b3379ac20b9b3fbaf6a8effa5fb4_prof);

        
        $__internal_ef4cb38e996edd1609f15dff17205c2265637e4eecd2e25b7bb5b7a92bba3a55->leave($__internal_ef4cb38e996edd1609f15dff17205c2265637e4eecd2e25b7bb5b7a92bba3a55_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_18b937ce4d2fbf16a3327bf6b314daef96f5a996a25fb1a040b09e6c9285775c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b937ce4d2fbf16a3327bf6b314daef96f5a996a25fb1a040b09e6c9285775c->enter($__internal_18b937ce4d2fbf16a3327bf6b314daef96f5a996a25fb1a040b09e6c9285775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_7721d275e532090961386c1bee6f56db15b994f8cdaa9206ff9cea3bb4317db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7721d275e532090961386c1bee6f56db15b994f8cdaa9206ff9cea3bb4317db9->enter($__internal_7721d275e532090961386c1bee6f56db15b994f8cdaa9206ff9cea3bb4317db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_7721d275e532090961386c1bee6f56db15b994f8cdaa9206ff9cea3bb4317db9->leave($__internal_7721d275e532090961386c1bee6f56db15b994f8cdaa9206ff9cea3bb4317db9_prof);

        
        $__internal_18b937ce4d2fbf16a3327bf6b314daef96f5a996a25fb1a040b09e6c9285775c->leave($__internal_18b937ce4d2fbf16a3327bf6b314daef96f5a996a25fb1a040b09e6c9285775c_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_ec5944cf30b8679981c5d7aa0c83a6d08f76075f98795d858fc7b8f498a45c38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5944cf30b8679981c5d7aa0c83a6d08f76075f98795d858fc7b8f498a45c38->enter($__internal_ec5944cf30b8679981c5d7aa0c83a6d08f76075f98795d858fc7b8f498a45c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_787aca4aa04d83ff56722695b1191162c680f730bdfb1cb62f78a81802bb80dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787aca4aa04d83ff56722695b1191162c680f730bdfb1cb62f78a81802bb80dd->enter($__internal_787aca4aa04d83ff56722695b1191162c680f730bdfb1cb62f78a81802bb80dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_787aca4aa04d83ff56722695b1191162c680f730bdfb1cb62f78a81802bb80dd->leave($__internal_787aca4aa04d83ff56722695b1191162c680f730bdfb1cb62f78a81802bb80dd_prof);

        
        $__internal_ec5944cf30b8679981c5d7aa0c83a6d08f76075f98795d858fc7b8f498a45c38->leave($__internal_ec5944cf30b8679981c5d7aa0c83a6d08f76075f98795d858fc7b8f498a45c38_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
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

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}
