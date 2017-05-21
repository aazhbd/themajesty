<?php

/* /App/views/uhome.twig */
class __TwigTemplate_d97024b4e1a210b7b7348a6fcbd8e8d29b9b1ddc35fdca74aed36632fd71d398 extends Twig_Template
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
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/uhome.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "User home")) : ("User home")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_headtags($context, array $blocks = array())
    {
        // line 8
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/jquery.dataTables.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            if(\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }

            \$('#sortedtable').dataTable({
                \"sPaginationType\": \"full_numbers\",
                \"aLengthMenu\": [[25, 50, -1], [25, 50, \"All\"]],
                \"iDisplayLength\": 25,
            });
        });
    </script>
";
    }

    // line 26
    public function block_contentbody($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->displayParentBlock("contentbody", $context, $blocks);
        echo "
    ";
        // line 28
        echo twig_escape_filter($this->env, ($context["body_content"] ?? null), "html", null, true);
        echo "

    ";
        // line 30
        if (($this->getAttribute($this->getAttribute(($context["session"] ?? null), "get", array(0 => "user_info"), "method"), "utype", array()) == 1)) {
            // line 31
            echo "
        <div style=\"float: right; padding: 10px;\">
            <a class=\"pure-button pure-button-primary\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/article/add/\">+ Add Article</a>
            &nbsp;
            <a class=\"pure-button pure-button-primary\" href=\"";
            // line 35
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/category/list/\">Categories</a>
        </div>

        ";
            // line 38
            if (($context["articles"] ?? null)) {
                // line 39
                echo "        <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%%\">
            <thead>
            <tr>
                <td>ID</td>
                <td>Category Id</td>
                <td>Url</td>
                <td>Title</td>
                <td>Subtitle</td>
                <td>Date inserted</td>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td>ID</td>
                <td>Category Id</td>
                <td>Url</td>
                <td>Title</td>
                <td>Subtitle</td>
                <td>Date inserted</td>
            </tr>
            </tfoot>
            <tbody>
            ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 62
                    echo "                <tr>
                    <td><a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "</a></td>
                    <td><a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "category_id", array()), "html", null, true);
                    echo "</a></td>
                    <td><a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "</a></td>
                    <td><a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
                    echo "</a></td>
                    <td><a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_slice($this->env, $this->getAttribute($context["a"], "subtitle", array()), 0, 25);
                    echo "</a></td>
                    <td><a href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_inserted", array()), "html", null, true);
                    echo "</a></td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </table>
        ";
            }
            // line 73
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "/App/views/uhome.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 73,  185 => 71,  172 => 68,  164 => 67,  156 => 66,  148 => 65,  140 => 64,  132 => 63,  129 => 62,  125 => 61,  101 => 39,  99 => 38,  93 => 35,  88 => 33,  84 => 31,  82 => 30,  77 => 28,  72 => 27,  69 => 26,  48 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  20 => 1,);
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

{% block title %}
    {{ page_title|default('User home') }}
{% endblock %}

{% block headtags %}
    <script src=\"{{ path_url }}{{ user_var.project_static }}/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <link href=\"{{ path_url }}{{ user_var.project_static }}/jquery.dataTables.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

    <script type=\"text/javascript\">
        \$(document).ready(function(){
            if(\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }

            \$('#sortedtable').dataTable({
                \"sPaginationType\": \"full_numbers\",
                \"aLengthMenu\": [[25, 50, -1], [25, 50, \"All\"]],
                \"iDisplayLength\": 25,
            });
        });
    </script>
{% endblock %}

{% block contentbody %}
    {{ parent() }}
    {{ body_content }}

    {% if session.get('user_info').utype == 1 %}

        <div style=\"float: right; padding: 10px;\">
            <a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/article/add/\">+ Add Article</a>
            &nbsp;
            <a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/category/list/\">Categories</a>
        </div>

        {% if articles %}
        <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%%\">
            <thead>
            <tr>
                <td>ID</td>
                <td>Category Id</td>
                <td>Url</td>
                <td>Title</td>
                <td>Subtitle</td>
                <td>Date inserted</td>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td>ID</td>
                <td>Category Id</td>
                <td>Url</td>
                <td>Title</td>
                <td>Subtitle</td>
                <td>Date inserted</td>
            </tr>
            </tfoot>
            <tbody>
            {% for a in articles %}
                <tr>
                    <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.id }}</a></td>
                    <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.category_id }}</a></td>
                    <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.url }}</a></td>
                    <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.title }}</a></td>
                    <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.subtitle|slice(0, 25)|raw }}</a></td>
                    <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.date_inserted }}</a></td>
                </tr>
            {% endfor %}
        </table>
        {% endif %}
    {% endif %}
{% endblock %}

", "/App/views/uhome.twig", "/var/www/html/themajesty/App/views/uhome.twig");
    }
}
