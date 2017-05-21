<?php

/* /App/views/list_category.twig */
class __TwigTemplate_4885cb9ab3d65722943eff2fee8f9b988d1fade146fcea96bcb4b1f51f05f731 extends Twig_Template
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
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/list_category.twig", 1);
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
        if ((($context["action"] ?? null) == "edit")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "Edit Category")) : ("Edit Category")), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "List of Categories")) : ("List of Categories")), "html", null, true);
            echo "
    ";
        }
    }

    // line 11
    public function block_headtags($context, array $blocks = array())
    {
        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/jquery.validate.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 14
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
            \"iDisplayLength\": 25
        });
    });
    </script>
";
    }

    // line 30
    public function block_contentbody($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        $this->displayParentBlock("contentbody", $context, $blocks);
        echo "
    ";
        // line 32
        echo twig_escape_filter($this->env, ($context["body_content"] ?? null), "html", null, true);
        echo "
    ";
        // line 33
        if (($this->getAttribute($this->getAttribute(($context["session"] ?? null), "get", array(0 => "user_info"), "method"), "utype", array()) == 1)) {
            // line 34
            echo "        <form class=\"pure-form\" style=\"width: 1024px;\" id=\"publish\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/category/list/\">
            ";
            // line 35
            if ((($context["action"] ?? null) == "edit")) {
                // line 36
                echo "                <legend>Edit Category</legend>
                <input type=\"hidden\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, ($context["cat_id"] ?? null), "html", null, true);
                echo "\" name=\"editval\" />
            ";
            } else {
                // line 39
                echo "                <legend>Add New Category</legend>
            ";
            }
            // line 41
            echo "            <fieldset>
                <input type=\"text\" class=\"pure-input-1-2\" placeholder=\"Category name\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["cat_pre"] ?? null), "catname", array()), "html", null, true);
            echo "\" name=\"catname\" />
            </fieldset>

            <input type=\"submit\" class=\"pure-button pure-input-1-2 pure-button-primary\" id=\"btn_submit\" value=\"Submit\"  />
        </form>

        <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#publish\").validate({
                rules:{
                    catname:{ required: true , maxlength: 50 },
                },
                messages:{
                    catname: {
                        required: \"Enter category name.\",
                        maxlength: \"Can't be longer than 50 characters.\"
                    }
                }
            });
        });
        </script>
        ";
            // line 63
            if (($context["categories"] ?? null)) {
                // line 64
                echo "        <br />
        <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%;\">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td style=\"width: 100px;\">Inserted</td>
                <td style=\"width: 100px;\">Updated</td>
                <td style=\"width: 100px;\">Edit</td>
                <td style=\"width: 100px;\">Change State</td>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Inserted</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Change State</td>
            </tr>
            </tfoot>
            <tbody>
            ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 88
                    echo "                <tr>
                    <td>";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "catname", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 91
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_inserted", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 92
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_updated", array()), "html", null, true);
                    echo "</td>
                    <td><a class=\"pure-button pure-button-primary\" href=\"";
                    // line 93
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/category/edit/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "/\">Edit</a></td>
                    <td><a class=\"pure-button pure-button-primary\" href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/category/";
                    if (($this->getAttribute($context["a"], "state", array()) == 0)) {
                        echo "disable";
                    } else {
                        echo "enable";
                    }
                    echo "/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "/\">";
                    if (($this->getAttribute($context["a"], "state", array()) == 0)) {
                        echo "Disable";
                    } else {
                        echo "Enable";
                    }
                    echo "</a></td>
                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 97
                echo "        </table>
        ";
            }
            // line 99
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "/App/views/list_category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 99,  222 => 97,  199 => 94,  193 => 93,  189 => 92,  185 => 91,  181 => 90,  177 => 89,  174 => 88,  170 => 87,  145 => 64,  143 => 63,  119 => 42,  116 => 41,  112 => 39,  107 => 37,  104 => 36,  102 => 35,  97 => 34,  95 => 33,  91 => 32,  86 => 31,  83 => 30,  63 => 14,  58 => 13,  52 => 12,  49 => 11,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  20 => 1,);
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
    {% if action == \"edit\" %}
        {{ page_title|default('Edit Category') }}
    {% else %}
        {{ page_title|default('List of Categories') }}
    {% endif %}
{% endblock %}

{% block headtags %}
    <script src=\"{{ path_url }}{{ user_var.project_static }}/jquery.validate.min.js\" type=\"text/javascript\"></script>
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
            \"iDisplayLength\": 25
        });
    });
    </script>
{% endblock %}

{% block contentbody %}
    {{ parent() }}
    {{ body_content }}
    {% if session.get('user_info').utype == 1 %}
        <form class=\"pure-form\" style=\"width: 1024px;\" id=\"publish\" method=\"post\" action=\"{{ path_url_postfix }}/category/list/\">
            {% if action == \"edit\" %}
                <legend>Edit Category</legend>
                <input type=\"hidden\" value=\"{{ cat_id }}\" name=\"editval\" />
            {% else %}
                <legend>Add New Category</legend>
            {% endif %}
            <fieldset>
                <input type=\"text\" class=\"pure-input-1-2\" placeholder=\"Category name\" value=\"{{ cat_pre.catname }}\" name=\"catname\" />
            </fieldset>

            <input type=\"submit\" class=\"pure-button pure-input-1-2 pure-button-primary\" id=\"btn_submit\" value=\"Submit\"  />
        </form>

        <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"#publish\").validate({
                rules:{
                    catname:{ required: true , maxlength: 50 },
                },
                messages:{
                    catname: {
                        required: \"Enter category name.\",
                        maxlength: \"Can't be longer than 50 characters.\"
                    }
                }
            });
        });
        </script>
        {% if categories %}
        <br />
        <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%;\">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td style=\"width: 100px;\">Inserted</td>
                <td style=\"width: 100px;\">Updated</td>
                <td style=\"width: 100px;\">Edit</td>
                <td style=\"width: 100px;\">Change State</td>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Inserted</td>
                <td>Updated</td>
                <td>Edit</td>
                <td>Change State</td>
            </tr>
            </tfoot>
            <tbody>
            {% for a in categories %}
                <tr>
                    <td>{{ a.id }}</td>
                    <td>{{ a.catname }}</td>
                    <td>{{ a.date_inserted }}</td>
                    <td>{{ a.date_updated }}</td>
                    <td><a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/category/edit/{{ a.id }}/\">Edit</a></td>
                    <td><a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/category/{% if a.state == 0 %}disable{% else %}enable{% endif %}/{{ a.id }}/\">{% if a.state == 0 %}Disable{% else %}Enable{% endif %}</a></td>
                </tr>
            {% endfor %}
        </table>
        {% endif %}
    {% endif %}
{% endblock %}

", "/App/views/list_category.twig", "/var/www/html/themajesty/App/views/list_category.twig");
    }
}
