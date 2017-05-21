<?php

/* /App/views/downloads.twig */
class __TwigTemplate_324a5886e695917ae26e7b4de77ebd51e09e85ef4abfd2b582afdb41324d5534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'headtags' => array($this, 'block_headtags'),
            'contentbody' => array($this, 'block_contentbody'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/downloads.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        ob_start();
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "Downloads")) : ("Downloads")), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 7
    public function block_headtags($context, array $blocks = array())
    {
        // line 8
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function () {
            if (\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }
        });
    </script>
";
    }

    // line 17
    public function block_contentbody($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        $this->displayParentBlock("contentbody", $context, $blocks);
        echo "
    ";
        // line 19
        echo twig_escape_filter($this->env, ($context["body_content"] ?? null), "html", null, true);
        echo "

    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 22
            echo "    <div class=\"productBox\">
        <div  class=\"details-top\">
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/a/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
            echo "</a>
        </div>
        <div class=\"details-left\">
            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/a/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "subtitle", array()), "html", null, true);
            echo "</a>
        </div>
        <div class=\"details-right\">
            <a class=\"pure-button pure-button-primary\" href=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/a/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
            echo "/\">Details</a>
        </div>
        <div class=\"details-none\">
            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/a/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "remarks", array()), "html", null, true);
            echo "</a>
        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/App/views/downloads.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  96 => 30,  86 => 27,  76 => 24,  72 => 22,  68 => 21,  63 => 19,  58 => 18,  55 => 17,  44 => 8,  41 => 7,  33 => 4,  29 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends path_user_template ~ '/home.twig' %}

{% block title %}{% spaceless %}
    {{ page_title|default('Downloads') }}
{% endspaceless %}{% endblock %}

{% block headtags %}
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            if (\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }
        });
    </script>
{% endblock %}

{% block contentbody %}
    {{ parent() }}
    {{ body_content }}

    {% for a in articles %}
    <div class=\"productBox\">
        <div  class=\"details-top\">
            <a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.title }}</a>
        </div>
        <div class=\"details-left\">
            <a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.subtitle }}</a>
        </div>
        <div class=\"details-right\">
            <a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">Details</a>
        </div>
        <div class=\"details-none\">
            <a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.remarks }}</a>
        </div>
    </div>
    {% endfor %}
{% endblock %}

", "/App/views/downloads.twig", "/var/www/html/themajesty/App/views/downloads.twig");
    }
}
