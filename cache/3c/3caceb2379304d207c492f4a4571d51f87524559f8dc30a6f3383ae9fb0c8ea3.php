<?php

/* /App/views/list_files.twig */
class __TwigTemplate_6fb44b7b86af960b4c69098117d421005798bdbeba521c53adc649834f3c9b39 extends Twig_Template
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
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/list_files.twig", 1);
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
            echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "Edit File")) : ("Edit File")), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "List of Files")) : ("List of Files")), "html", null, true);
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

    // line 29
    public function block_contentbody($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        $this->displayParentBlock("contentbody", $context, $blocks);
        echo "
    ";
        // line 31
        echo twig_escape_filter($this->env, ($context["body_content"] ?? null), "html", null, true);
        echo "
    ";
        // line 32
        if (($this->getAttribute($this->getAttribute(($context["session"] ?? null), "get", array(0 => "user_info"), "method"), "utype", array()) == 1)) {
            // line 33
            echo "        <form class=\"pure-form\" style=\"width: 1024px;\" enctype=\"multipart/form-data\" id=\"publish\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/files/list/\">
            <fieldset>
            ";
            // line 35
            if ((($context["action"] ?? null) == "edit")) {
                // line 36
                echo "                <legend>Edit File</legend>
                <input type=\"hidden\" value=\"";
                // line 37
                echo twig_escape_filter($this->env, ($context["file_id"] ?? null), "html", null, true);
                echo "\" name=\"editval\" />
            ";
            } else {
                // line 39
                echo "                <legend>Add New File</legend>
            ";
            }
            // line 41
            echo "                <input type=\"text\" class=\"pure-input-1-2\" placeholder=\"Unique file name\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["file_pre"] ?? null), "name", array()), "html", null, true);
            echo "\" name=\"filename\" />
            </fieldset>
            <fieldset>
            <div class=\"fileupload\">
                <span>Upload : </span>
                <input type=\"file\" placeholder=\"File content\" name=\"filecontent\" />
            </div>
            </fieldset>
            <fieldset>
                <input type=\"submit\" class=\"pure-button pure-button-primary\" id=\"btn_submit\" value=\"Submit\"  />
            </fieldset>
        </form>
        <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$(\"#publish\").validate({
                    rules:{
                        filecontent:{ required: true , maxlength: 254 }
                    },
                    messages:{
                        filecontent: {
                            required: \"Set file.\",
                            maxlength: \"Can't be longer than 254 characters.\"
                        }
                    }
                });
            });
        </script>
        ";
            // line 68
            if (($context["files"] ?? null)) {
                // line 69
                echo "            <br />
            <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%;\">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Type</td>
                    <td>Media</td>
                    <td>View</td>
                    <td>Download</td>
                    <td style=\"width: 100px;\">Inserted</td>
                    <td style=\"width: 100px;\">Updated</td>
                    <td style=\"width: 100px;\">Change State</td>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Type</td>
                    <td>Media</td>
                    <td>View</td>
                    <td>Download</td>
                    <td>Inserted</td>
                    <td>Updated</td>
                    <td>Change State</td>
                </tr>
                </tfoot>
                <tbody>
                ";
                // line 98
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 99
                    echo "                    <tr>
                        <td>";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "</td>
                        <td><a href=\"";
                    // line 101
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/file/view/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["a"], "name", array()), 0, 40), "html", null, true);
                    echo "</a></td>
                        <td><img src=\"";
                    // line 102
                    echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
                    echo "images/fileicons/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "ftype", array()), "html", null, true);
                    echo ".png\" class=\"rowicon\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "ftype", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "mtype", array()), "html", null, true);
                    echo "</td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"";
                    // line 104
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/file/view/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
                    echo "/\">View</a></td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"";
                    // line 105
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/file/download/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
                    echo "/\">Download</a></td>
                        <td>";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_inserted", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_updated", array()), "html", null, true);
                    echo "</td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/files/";
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
                // line 111
                echo "            </table>
        ";
            }
            // line 113
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "/App/views/list_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 113,  254 => 111,  231 => 108,  227 => 107,  223 => 106,  217 => 105,  211 => 104,  207 => 103,  199 => 102,  191 => 101,  187 => 100,  184 => 99,  180 => 98,  149 => 69,  147 => 68,  116 => 41,  112 => 39,  107 => 37,  104 => 36,  102 => 35,  96 => 33,  94 => 32,  90 => 31,  85 => 30,  82 => 29,  63 => 14,  58 => 13,  52 => 12,  49 => 11,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  20 => 1,);
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
        {{ page_title|default('Edit File') }}
    {% else %}
        {{ page_title|default('List of Files') }}
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
        <form class=\"pure-form\" style=\"width: 1024px;\" enctype=\"multipart/form-data\" id=\"publish\" method=\"post\" action=\"{{ path_url_postfix }}/files/list/\">
            <fieldset>
            {% if action == \"edit\" %}
                <legend>Edit File</legend>
                <input type=\"hidden\" value=\"{{ file_id }}\" name=\"editval\" />
            {% else %}
                <legend>Add New File</legend>
            {% endif %}
                <input type=\"text\" class=\"pure-input-1-2\" placeholder=\"Unique file name\" value=\"{{ file_pre.name }}\" name=\"filename\" />
            </fieldset>
            <fieldset>
            <div class=\"fileupload\">
                <span>Upload : </span>
                <input type=\"file\" placeholder=\"File content\" name=\"filecontent\" />
            </div>
            </fieldset>
            <fieldset>
                <input type=\"submit\" class=\"pure-button pure-button-primary\" id=\"btn_submit\" value=\"Submit\"  />
            </fieldset>
        </form>
        <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$(\"#publish\").validate({
                    rules:{
                        filecontent:{ required: true , maxlength: 254 }
                    },
                    messages:{
                        filecontent: {
                            required: \"Set file.\",
                            maxlength: \"Can't be longer than 254 characters.\"
                        }
                    }
                });
            });
        </script>
        {% if files %}
            <br />
            <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%;\">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Type</td>
                    <td>Media</td>
                    <td>View</td>
                    <td>Download</td>
                    <td style=\"width: 100px;\">Inserted</td>
                    <td style=\"width: 100px;\">Updated</td>
                    <td style=\"width: 100px;\">Change State</td>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Type</td>
                    <td>Media</td>
                    <td>View</td>
                    <td>Download</td>
                    <td>Inserted</td>
                    <td>Updated</td>
                    <td>Change State</td>
                </tr>
                </tfoot>
                <tbody>
                {% for a in files %}
                    <tr>
                        <td>{{ a.id }}</td>
                        <td><a href=\"{{ path_url_postfix }}/file/view/{{ a.name }}/\">{{ a.name|slice(0, 40) }}</a></td>
                        <td><img src=\"{{ path_static }}images/fileicons/{{ a.ftype }}.png\" class=\"rowicon\"> {{ a.ftype }}</td>
                        <td>{{ a.mtype }}</td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/file/view/{{ a.name }}/\">View</a></td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/file/download/{{ a.name }}/\">Download</a></td>
                        <td>{{ a.date_inserted }}</td>
                        <td>{{ a.date_updated }}</td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/files/{% if a.state == 0 %}disable{% else %}enable{% endif %}/{{ a.id }}/\">{% if a.state == 0 %}Disable{% else %}Enable{% endif %}</a></td>
                    </tr>
                {% endfor %}
            </table>
        {% endif %}
    {% endif %}
{% endblock %}

", "/App/views/list_files.twig", "/var/www/html/themajesty/App/views/list_files.twig");
    }
}
