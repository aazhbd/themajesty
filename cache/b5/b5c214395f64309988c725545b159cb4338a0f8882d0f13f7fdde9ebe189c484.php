<?php

/* /App/views/list_users.twig */
class __TwigTemplate_13293dc3d92916a036e2dd364f85f2380896ce58a46ab2f64b74d23c25578af1 extends Twig_Template
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
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/list_users.twig", 1);
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
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "List of Users")) : ("List of Users")), "html", null, true);
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
        echo "/jquery.validate.min.js\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/jquery.dataTables.min.js\" type=\"text/javascript\"></script>
    <link href=\"";
        // line 10
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
        <form class=\"pure-form pure-form-aligned\" id=\"signupform\" method=\"post\" action=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/user/list\">
            <fieldset>
                ";
            // line 34
            if ((($context["action"] ?? null) == "edit")) {
                // line 35
                echo "                    <legend>Edit User</legend>
                    <input type=\"hidden\" value=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute(($context["update_user"] ?? null), "id", array()), "html", null, true);
                echo "\" name=\"editval\" />
                ";
            } else {
                // line 38
                echo "                    <legend>Add New User</legend>
                ";
            }
            // line 40
            echo "                <div class=\"pure-control-group\">
                    <label for=\"name\">Name</label>
                    <input id=\"name\" type=\"text\" placeholder=\"Name\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute(($context["update_user"] ?? null), "firstname", array()), "html", null, true);
            echo "\" name=\"name\" />
                </div>

                <div class=\"pure-control-group\">
                    <label for=\"email\">Email</label>
                    <input id=\"email\" type=\"email\" placeholder=\"Email\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute(($context["update_user"] ?? null), "email", array()), "html", null, true);
            echo "\" name=\"email\" />
                </div>

                <div class=\"pure-control-group\">
                    <label for=\"password\">Password</label>
                    <input id=\"password\" type=\"password\" placeholder=\"Password\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute(($context["update_user"] ?? null), "pass", array()), "html", null, true);
            echo "\" name=\"password\" />
                </div>

                <div class=\"pure-control-group\">
                    <label for=\"gender\">Gender</label>
                    <select id=\"gender\" name=\"gender\">
                        <option ";
            // line 58
            if ((($this->getAttribute(($context["update_user"] ?? null), "gender", array()) == "m") || ($this->getAttribute(($context["update_user"] ?? null), "gender", array()) == "M"))) {
                echo "selected";
            }
            echo " value=\"M\">Male</option>
                        <option ";
            // line 59
            if ((($this->getAttribute(($context["update_user"] ?? null), "gender", array()) == "f") || ($this->getAttribute(($context["update_user"] ?? null), "gender", array()) == "F"))) {
                echo "selected";
            }
            echo " value=\"F\">Female</option>
                    </select>
                </div>

                <div class=\"pure-controls\">
                    <input type=\"submit\" class=\"pure-button pure-button-primary\" name=\"submit\" value=\"";
            // line 64
            if ((($context["action"] ?? null) == "edit")) {
                echo "Edit User";
            } else {
                echo "Add User";
            }
            echo "\" style=\"display: block; clear: both; margin-top: 5px; \" />
                </div>
            </fieldset>
        </form>

        <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$(\"#signupform\").validate({
                    rules:{
                        name:{ required: true , maxlength: 100 },
                        email:{ required: true, email: true , maxlength: 50},
                        password:{ required: true, maxlength: 20},
                        gender:{ required: true }
                    },
                    messages:{
                        name: {
                            required: \"Enter full name.\",
                            maxlength: \"Name can't be longer than 100 characters.\"
                        },
                        email: {
                            required: \"Enter valid email.\",
                            email: \"Please enter a valid email.\",
                            maxlength: \"Email can't be longer than 50 characters.\"
                        },
                        password: {
                            required: \"Password minimum 5 characters.\",
                            maxlength: \"Password can't be longer than 20 characters.\"
                        },
                        gender: \"Please select gender.\"
                    }
                });
            });
        </script>

        ";
            // line 98
            if (($context["users"] ?? null)) {
                // line 99
                echo "            <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%\">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Email</td>
                    <td>First Name</td>
                    <td>Gender</td>
                    <td>Status</td>
                    <td>Type</td>
                    <td style=\"width: 100px;\">Inserted</td>
                    <td style=\"width: 100px;\">Updated</td>
                    <td style=\"width: 100px;\">Last Login</td>
                    <td style=\"width: 100px;\">Edit</td>
                    <td style=\"width: 100px;\">Change Status</td>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td>ID</td>
                    <td>Email</td>
                    <td>First Name</td>
                    <td>Gender</td>
                    <td>Status</td>
                    <td>Type</td>
                    <td>Inserted</td>
                    <td>Updated</td>
                    <td>Last Login</td>
                    <td>Edit</td>
                    <td>Change Status</td>
                </tr>
                </tfoot>
                <tbody>
                ";
                // line 131
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 132
                    echo "                    <tr>
                        <td>";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 134
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "email", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 135
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "firstname", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 136
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["a"], "gender", array())), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 137
                    if (($this->getAttribute($context["a"], "ustatus", array()) == 1)) {
                        echo "Active";
                    } else {
                        echo "Inactive";
                    }
                    echo "</td>
                        <td>";
                    // line 138
                    if (($this->getAttribute($context["a"], "utype", array()) == 1)) {
                        echo "Admin";
                    } else {
                        echo "Normal";
                    }
                    echo "</td>
                        <td>";
                    // line 139
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_inserted", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 140
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_updated", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "date_lastlogin", array()), "html", null, true);
                    echo "</td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"";
                    // line 142
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/user/edit/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", array()), "html", null, true);
                    echo "/\">Edit</a></td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"";
                    // line 143
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/user/";
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
                // line 146
                echo "            </table>
        ";
            }
            // line 148
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "/App/views/list_users.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 148,  312 => 146,  289 => 143,  283 => 142,  279 => 141,  275 => 140,  271 => 139,  263 => 138,  255 => 137,  251 => 136,  247 => 135,  243 => 134,  239 => 133,  236 => 132,  232 => 131,  198 => 99,  196 => 98,  155 => 64,  145 => 59,  139 => 58,  130 => 52,  122 => 47,  114 => 42,  110 => 40,  106 => 38,  101 => 36,  98 => 35,  96 => 34,  91 => 32,  88 => 31,  86 => 30,  81 => 28,  76 => 27,  73 => 26,  53 => 10,  48 => 9,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  20 => 1,);
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
    {{ page_title|default('List of Users') }}
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

        <form class=\"pure-form pure-form-aligned\" id=\"signupform\" method=\"post\" action=\"{{ path_url_postfix }}/user/list\">
            <fieldset>
                {% if action == \"edit\" %}
                    <legend>Edit User</legend>
                    <input type=\"hidden\" value=\"{{ update_user.id }}\" name=\"editval\" />
                {% else %}
                    <legend>Add New User</legend>
                {% endif %}
                <div class=\"pure-control-group\">
                    <label for=\"name\">Name</label>
                    <input id=\"name\" type=\"text\" placeholder=\"Name\" value=\"{{ update_user.firstname }}\" name=\"name\" />
                </div>

                <div class=\"pure-control-group\">
                    <label for=\"email\">Email</label>
                    <input id=\"email\" type=\"email\" placeholder=\"Email\" value=\"{{ update_user.email }}\" name=\"email\" />
                </div>

                <div class=\"pure-control-group\">
                    <label for=\"password\">Password</label>
                    <input id=\"password\" type=\"password\" placeholder=\"Password\" value=\"{{ update_user.pass }}\" name=\"password\" />
                </div>

                <div class=\"pure-control-group\">
                    <label for=\"gender\">Gender</label>
                    <select id=\"gender\" name=\"gender\">
                        <option {% if update_user.gender == \"m\" or update_user.gender == \"M\" %}selected{% endif %} value=\"M\">Male</option>
                        <option {% if update_user.gender == \"f\" or update_user.gender == \"F\" %}selected{% endif %} value=\"F\">Female</option>
                    </select>
                </div>

                <div class=\"pure-controls\">
                    <input type=\"submit\" class=\"pure-button pure-button-primary\" name=\"submit\" value=\"{% if action == \"edit\" %}Edit User{% else  %}Add User{% endif %}\" style=\"display: block; clear: both; margin-top: 5px; \" />
                </div>
            </fieldset>
        </form>

        <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$(\"#signupform\").validate({
                    rules:{
                        name:{ required: true , maxlength: 100 },
                        email:{ required: true, email: true , maxlength: 50},
                        password:{ required: true, maxlength: 20},
                        gender:{ required: true }
                    },
                    messages:{
                        name: {
                            required: \"Enter full name.\",
                            maxlength: \"Name can't be longer than 100 characters.\"
                        },
                        email: {
                            required: \"Enter valid email.\",
                            email: \"Please enter a valid email.\",
                            maxlength: \"Email can't be longer than 50 characters.\"
                        },
                        password: {
                            required: \"Password minimum 5 characters.\",
                            maxlength: \"Password can't be longer than 20 characters.\"
                        },
                        gender: \"Please select gender.\"
                    }
                });
            });
        </script>

        {% if users %}
            <table class=\"pure-table-horizontal\" id=\"sortedtable\" style=\"width: 100%\">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Email</td>
                    <td>First Name</td>
                    <td>Gender</td>
                    <td>Status</td>
                    <td>Type</td>
                    <td style=\"width: 100px;\">Inserted</td>
                    <td style=\"width: 100px;\">Updated</td>
                    <td style=\"width: 100px;\">Last Login</td>
                    <td style=\"width: 100px;\">Edit</td>
                    <td style=\"width: 100px;\">Change Status</td>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td>ID</td>
                    <td>Email</td>
                    <td>First Name</td>
                    <td>Gender</td>
                    <td>Status</td>
                    <td>Type</td>
                    <td>Inserted</td>
                    <td>Updated</td>
                    <td>Last Login</td>
                    <td>Edit</td>
                    <td>Change Status</td>
                </tr>
                </tfoot>
                <tbody>
                {% for a in users %}
                    <tr>
                        <td>{{ a.id }}</td>
                        <td>{{ a.email }}</td>
                        <td>{{ a.firstname }}</td>
                        <td>{{ a.gender|upper  }}</td>
                        <td>{% if a.ustatus == 1 %}Active{% else %}Inactive{% endif %}</td>
                        <td>{% if a.utype == 1 %}Admin{% else %}Normal{% endif %}</td>
                        <td>{{ a.date_inserted }}</td>
                        <td>{{ a.date_updated }}</td>
                        <td>{{ a.date_lastlogin }}</td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/user/edit/{{ a.id }}/\">Edit</a></td>
                        <td><a class=\"pure-button pure-button-primary\" href=\"{{ path_url_postfix }}/user/{% if a.state == 0 %}disable{% else %}enable{% endif %}/{{ a.id }}/\">{% if a.state == 0 %}Disable{% else %}Enable{% endif %}</a></td>
                    </tr>
                {% endfor %}
            </table>
        {% endif %}
    {% endif %}
{% endblock %}

", "/App/views/list_users.twig", "/var/www/html/themajesty/App/views/list_users.twig");
    }
}
