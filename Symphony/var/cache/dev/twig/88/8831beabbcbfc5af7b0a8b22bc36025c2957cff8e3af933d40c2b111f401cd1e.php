<?php

/* TwigBundle:Exception:traces.html.twig */
class __TwigTemplate_e399d0ab53eacf5f17e7dc97cd4b394f2087fe3d607a7eb22cf2563c408a8c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa13277225cd375ad507e1c9bc67e30b5beef3c6c65da630e7993cf1431f6ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa13277225cd375ad507e1c9bc67e30b5beef3c6c65da630e7993cf1431f6ea7->enter($__internal_fa13277225cd375ad507e1c9bc67e30b5beef3c6c65da630e7993cf1431f6ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.html.twig"));

        $__internal_1826423c028871003a3b30b5955ef7f87780eabd3952351bb4d40df2c2b04e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1826423c028871003a3b30b5955ef7f87780eabd3952351bb4d40df2c2b04e9d->enter($__internal_1826423c028871003a3b30b5955ef7f87780eabd3952351bb4d40df2c2b04e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.html.twig"));

        // line 1
        echo "<div class=\"trace trace-as-html\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-";
        // line 4
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\" data-toggle-initial=\"";
        echo ((($context["expand"] ?? $this->getContext($context, "expand"))) ? ("display") : (""));
        echo "\">
                <h3 class=\"trace-class\">
                    <span class=\"trace-namespace\">
                        ";
        // line 7
        echo twig_escape_filter($this->env, twig_join_filter(twig_slice($this->env, twig_split_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()), "\\"), 0,  -1), "\\"), "html", null, true);
        // line 8
        echo (((twig_length_filter($this->env, twig_split_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()), "\\")) > 1)) ? ("\\") : (""));
        echo "
                    </span>
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "class", array()), "\\")), "html", null, true);
        echo "

                    <span class=\"icon icon-close\">";
        // line 12
        echo twig_include($this->env, $context, "@Twig/images/icon-minus-square-o.svg");
        echo "</span>
                    <span class=\"icon icon-open\">";
        // line 13
        echo twig_include($this->env, $context, "@Twig/images/icon-plus-square-o.svg");
        echo "</span>
                </h3>

                ";
        // line 16
        if (( !twig_test_empty($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array())) && (($context["index"] ?? $this->getContext($context, "index")) > 1))) {
            // line 17
            echo "                    <p class=\"break-long-words trace-message\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
            echo "</p>
                ";
        }
        // line 19
        echo "            </span>
        </div>

        <div id=\"trace-html-";
        // line 22
        echo twig_escape_filter($this->env, ($context["index"] ?? $this->getContext($context, "index")), "html", null, true);
        echo "\" class=\"sf-toggle-content\">
        ";
        // line 23
        $context["_is_first_user_code"] = true;
        // line 24
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["i"] => $context["trace"]) {
            // line 25
            echo "            ";
            $context["_display_code_snippet"] = (((($context["_is_first_user_code"] ?? $this->getContext($context, "_is_first_user_code")) && !twig_in_filter("/vendor/", $this->getAttribute($context["trace"], "file", array()))) && !twig_in_filter("/var/cache/", $this->getAttribute($context["trace"], "file", array()))) &&  !twig_test_empty($this->getAttribute($context["trace"], "file", array())));
            // line 26
            echo "            ";
            if (($context["_display_code_snippet"] ?? $this->getContext($context, "_display_code_snippet"))) {
                $context["_is_first_user_code"] = false;
            }
            // line 27
            echo "            <div class=\"trace-line\">
                ";
            // line 28
            echo twig_include($this->env, $context, "@Twig/Exception/trace.html.twig", array("prefix" => ($context["index"] ?? $this->getContext($context, "index")), "i" => $context["i"], "trace" => $context["trace"], "_display_code_snippet" => ($context["_display_code_snippet"] ?? $this->getContext($context, "_display_code_snippet"))), false);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </div>
    </div>
</div>
";
        
        $__internal_fa13277225cd375ad507e1c9bc67e30b5beef3c6c65da630e7993cf1431f6ea7->leave($__internal_fa13277225cd375ad507e1c9bc67e30b5beef3c6c65da630e7993cf1431f6ea7_prof);

        
        $__internal_1826423c028871003a3b30b5955ef7f87780eabd3952351bb4d40df2c2b04e9d->leave($__internal_1826423c028871003a3b30b5955ef7f87780eabd3952351bb4d40df2c2b04e9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  95 => 28,  92 => 27,  87 => 26,  84 => 25,  79 => 24,  77 => 23,  73 => 22,  68 => 19,  62 => 17,  60 => 16,  54 => 13,  50 => 12,  45 => 10,  40 => 8,  38 => 7,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"trace trace-as-html\">
    <div class=\"trace-details\">
        <div class=\"trace-head\">
            <span class=\"sf-toggle\" data-toggle-selector=\"#trace-html-{{ index }}\" data-toggle-initial=\"{{ expand ? 'display' }}\">
                <h3 class=\"trace-class\">
                    <span class=\"trace-namespace\">
                        {{ exception.class|split('\\\\')|slice(0, -1)|join('\\\\') }}
                        {{- exception.class|split('\\\\')|length > 1 ? '\\\\' }}
                    </span>
                    {{ exception.class|split('\\\\')|last }}

                    <span class=\"icon icon-close\">{{ include('@Twig/images/icon-minus-square-o.svg') }}</span>
                    <span class=\"icon icon-open\">{{ include('@Twig/images/icon-plus-square-o.svg') }}</span>
                </h3>

                {% if exception.message is not empty and index > 1 %}
                    <p class=\"break-long-words trace-message\">{{ exception.message }}</p>
                {% endif %}
            </span>
        </div>

        <div id=\"trace-html-{{ index }}\" class=\"sf-toggle-content\">
        {% set _is_first_user_code = true %}
        {% for i, trace in exception.trace %}
            {% set _display_code_snippet = _is_first_user_code and ('/vendor/' not in trace.file) and ('/var/cache/' not in trace.file) and (trace.file is not empty) %}
            {% if _display_code_snippet %}{% set _is_first_user_code = false %}{% endif %}
            <div class=\"trace-line\">
                {{ include('@Twig/Exception/trace.html.twig', { prefix: index, i: i, trace: trace, _display_code_snippet: _display_code_snippet }, with_context = false) }}
            </div>
        {% endfor %}
        </div>
    </div>
</div>
", "TwigBundle:Exception:traces.html.twig", "D:\\UwAmp\\www\\Projet\\Symphony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.html.twig");
    }
}