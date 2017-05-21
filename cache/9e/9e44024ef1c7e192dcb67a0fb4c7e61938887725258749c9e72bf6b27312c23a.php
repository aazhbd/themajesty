<?php

/* /App/views/list_article.twig */
class __TwigTemplate_10445753843443e8a43813e30f05439ba64cd132b6980c9ef1a178a292ae5773 extends Twig_Template
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
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/list_article.twig", 1);
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
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "List of Articles")) : ("List of Articles")), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/markdown.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <script type=\"text/javascript\">
        var url_path = '";
        // line 12
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "';
        function rewriteUrl(url) {
            if(url.indexOf(\"http\") < 0) {
                url = url_path + '/' + url;
            }
            return url;
        }
        \$(document).ready(function(){
            if(\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }

            \$('img').each(function () {
                var url = rewriteUrl(\$(this).attr('src'));
                \$(this).attr(\"src\", url);
            });
            \$('#sortedtable').dataTable({
                \"sPaginationType\": \"full_numbers\",
                \"aLengthMenu\": [[25, 50, -1], [25, 50, \"All\"]],
                \"iDisplayLength\": 25
            });
        });
    </script>
";
    }

    // line 37
    public function block_contentbody($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        $this->displayParentBlock("contentbody", $context, $blocks);
        echo "
    ";
        // line 39
        echo twig_escape_filter($this->env, ($context["body_content"] ?? null), "html", null, true);
        echo "
    ";
        // line 40
        if (($this->getAttribute($this->getAttribute(($context["session"] ?? null), "get", array(0 => "user_info"), "method"), "utype", array()) == 1)) {
            // line 41
            echo "        <div style=\"float: right; padding: 10px;\">
            <a class=\"pure-button pure-button-primary\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/article/add/\">+ Add Article</a>
            &nbsp;
            <a class=\"pure-button pure-button-primary\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/category/list/\">Categories</a>
        </div>
        ";
            // line 46
            if (($context["articles"] ?? null)) {
                // line 47
                echo "            <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%\">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Category Id</td>
                    <td>Url</td>
                    <td>Title</td>
                    <td>Subtitle</td>
                    <td style=\"width: 100px;\">State</td>
                    <td style=\"width: 100px;\">Inserted</td>
                    <td style=\"width: 100px;\">Updated</td>
                    <td style=\"width: 100px;\">Edit</td>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td>ID</td>
                    <td>Category Id</td>
                    <td>Url</td>
                    <td>Title</td>
                    <td>Subtitle</td>
                    <td>State</td>
                    <td>Inserted</td>
                    <td>Updated</td>
                    <td>Edit</td>
                </tr>
                </tfoot>
                <tbody>
                ";
                // line 75
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 76
                    echo "                    <tr>
                        <td><a href=\"";
                    // line 77
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "</a></td>
                        <td><a href=\"";
                    // line 78
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "category_id", array()), "html", null, true);
                    echo "</a></td>
                        <td><a href=\"";
                    // line 79
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "</a></td>
                        <td><a href=\"";
                    // line 80
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "title", array()), "html", null, true);
                    echo "</a></td>
                        <td><a href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_slice($this->env, $this->getAttribute($context["a"], "subtitle", array()), 0, 40);
                    echo "</a></td>
                        <td><a href=\"";
                    // line 82
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    if (($this->getAttribute($context["a"], "state", array()) == 0)) {
                        echo "Enabled";
                    } else {
                        echo "Disabled";
                    }
                    echo "</a></td>
                        <td><a href=\"";
                    // line 83
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_inserted", array()), "html", null, true);
                    echo "</a></td>
                        <td><a href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/a/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "url", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_updated", array()), "html", null, true);
                    echo "</a></td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"";
                    // line 85
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/article/edit/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "/\">Edit</a></td>
                    </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                </tbody>
            </table>
        ";
            }
            // line 91
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "/App/views/list_article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 91,  234 => 88,  223 => 85,  215 => 84,  207 => 83,  195 => 82,  187 => 81,  179 => 80,  171 => 79,  163 => 78,  155 => 77,  152 => 76,  148 => 75,  118 => 47,  116 => 46,  111 => 44,  106 => 42,  103 => 41,  101 => 40,  97 => 39,  92 => 38,  89 => 37,  61 => 12,  55 => 10,  50 => 9,  44 => 8,  41 => 7,  33 => 4,  29 => 3,  20 => 1,);
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
    {{ page_title|default('List of Articles') }}
{% endspaceless %}{% endblock %}

{% block headtags %}
    <script src=\"{{ path_url }}{{ user_var.project_static }}/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <link href=\"{{ path_url }}{{ user_var.project_static }}/jquery.dataTables.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link href=\"{{ path_url }}{{ user_var.project_static }}/markdown.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <script type=\"text/javascript\">
        var url_path = '{{ path_url }}';
        function rewriteUrl(url) {
            if(url.indexOf(\"http\") < 0) {
                url = url_path + '/' + url;
            }
            return url;
        }
        \$(document).ready(function(){
            if(\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }

            \$('img').each(function () {
                var url = rewriteUrl(\$(this).attr('src'));
                \$(this).attr(\"src\", url);
            });
            \$('#sortedtable').dataTable({
                \"sPaginationType\": \"full_numbers\",
                \"aLengthMenu\": [[25, 50, -1], [25, 50, \"All\"]],
                \"iDisplayLength\": 25
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
            <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%\">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Category Id</td>
                    <td>Url</td>
                    <td>Title</td>
                    <td>Subtitle</td>
                    <td style=\"width: 100px;\">State</td>
                    <td style=\"width: 100px;\">Inserted</td>
                    <td style=\"width: 100px;\">Updated</td>
                    <td style=\"width: 100px;\">Edit</td>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td>ID</td>
                    <td>Category Id</td>
                    <td>Url</td>
                    <td>Title</td>
                    <td>Subtitle</td>
                    <td>State</td>
                    <td>Inserted</td>
                    <td>Updated</td>
                    <td>Edit</td>
                </tr>
                </tfoot>
                <tbody>
                {% for a in articles %}
                    <tr>
                        <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.id }}</a></td>
                        <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.category_id }}</a></td>
                        <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.url }}</a></td>
                        <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.title }}</a></td>
                        <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.subtitle|slice(0, 40)|raw }}</a></td>
                        <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{% if a.state == 0 %}Enabled{% else %}Disabled{% endif %}</a></td>
                        <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.date_inserted }}</a></td>
                        <td><a href=\"{{ path_url_postfix }}/a/{{ a.url }}/\">{{ a.date_updated }}</a></td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/article/edit/{{ a.id }}/\">Edit</a></td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endif %}
{% endblock %}

", "/App/views/list_article.twig", "/var/www/html/themajesty/App/views/list_article.twig");
    }
}
