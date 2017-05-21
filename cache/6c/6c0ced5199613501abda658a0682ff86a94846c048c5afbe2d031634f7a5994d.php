<?php

/* /App/views/frm_signup.twig */
class __TwigTemplate_2aef502e331d8df776caf0b15f3565ea5e138017a5bd5b83b6eec38bc381c788 extends Twig_Template
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
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/frm_signup.twig", 1);
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
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "Signup")) : ("Signup")), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_headtags($context, array $blocks = array())
    {
        // line 8
        echo "<link href=\"";
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/components/jqueryui/themes/smoothness/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

<script src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/jquery.validate.min.js\" type=\"text/javascript\"></script>
<script src=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/components/jqueryui/jquery-ui.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src='https://www.google.com/recaptcha/api.js'></script>

<script type=\"text/javascript\">
    \$(document).ready(function()
    {
        \$(\"#errors\").hide();
        var maxYear = new Date('Y');
        \$('#birthdate').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:'+ maxYear,
            minDate: \"-100y\",
            maxDate: \"+0y\",
            showAnim: \"slideDown\"
        });

        \$(\"#signupform\").validate({
            ignore: \".ignore\",
            groups: {
                agree: \"agree\"
            },
            errorPlacement: function(error, element) {
                if (element.attr(\"name\") == \"agree\") {
                    error.insertAfter(\"#agree-label\");
                } else {
                    error.insertAfter(element);
                }
            },
            rules:{
                name:{ required: true , maxlength: 100 },
                email:{ required: true, email: true , maxlength: 50},
                password:{ required: true, maxlength: 20},
                rpass:{ required: true, maxlength: 20, equalTo: \"#password\" },
                gender:{ required: true },
                birthdate:{ required: true },
                agree: { required: true },
                \"hiddenRecaptcha\": {
                    required: function() {
                        if(grecaptcha.getResponse() == '') {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
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
                rpass: {
                    required: \"Enter password again.\",
                    equalTo: \"Password don't match.\"
                },
                gender: \"Please select gender.\",
                birthdate: {
                    required: \"Select birth date.\"
                },
                agree: \"Accept terms and conditions.\",
                \"hiddenRecaptcha\": \"The captcha was not validated.\"
            }
        });
    });
</script>
";
    }

    // line 89
    public function block_contentbody($context, array $blocks = array())
    {
        // line 90
        echo "    ";
        $this->displayParentBlock("contentbody", $context, $blocks);
        echo "
    <form class=\"pure-form pure-form-aligned\" id=\"signupform\" method=\"post\" action=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/login\">
        <fieldset>
            <legend>";
        // line 93
        echo twig_escape_filter($this->env, ((array_key_exists("legend", $context)) ? (_twig_default_filter(($context["legend"] ?? null), "Enter information to signup.")) : ("Enter information to signup.")), "html", null, true);
        echo "</legend>
            <div class=\"pure-control-group\">
                <label for=\"name\">Name</label>
                <input id=\"name\" type=\"text\" placeholder=\"Name\" name=\"name\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" placeholder=\"Email\" name=\"email\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"password\">Password</label>
                <input id=\"password\" type=\"password\" placeholder=\"Password\" name=\"password\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"rpass\">Re-type Password</label>
                <input id=\"rpass\" type=\"password\" placeholder=\"Re-type Password\" name=\"rpass\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"gender\">Gender</label>
                <select id=\"gender\" name=\"gender\">
                    <option value=\"M\">Male</option>
                    <option value=\"F\">Female</option>
                </select>
            </div>

            <div class=\"pure-control-group\">
                <label for=\"birthdate\">Birthdate</label>
                <input id=\"birthdate\" type=\"text\" placeholder=\"Birthdate\" name=\"birthdate\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"g-recaptcha\" style=\"float: left;\">Captcha</label>
                <div class=\"g-recaptcha\" data-sitekey=\"6LfKDw8UAAAAAHb6omMkGKhxXFNuo3SpgtGivhr3\" style=\"float: left; margin: 5px;\"></div>
                <input id=\"hiddenRecaptcha\" type=\"hidden\" class=\"hiddenRecaptcha required\" name=\"hiddenRecaptcha\" />
            </div>

            <div class=\"pure-controls\">
                <label for=\"agree\" class=\"pure-checkbox\" id=\"agree-label\" style=\"display: block;  clear: both;\">
                    <input id=\"agree\" type=\"checkbox\" name=\"agree\" value=\"1\"> I've read the <a href='";
        // line 135
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/a/policies'>Terms Of Use</a>
                </label>

                <input type=\"submit\" class=\"pure-button pure-button-primary\" name=\"submit\" value=\"Signup\" style=\"display: block; clear: both; margin-top: 5px; \" />
            </div>
        </fieldset>
    </form>
";
    }

    public function getTemplateName()
    {
        return "/App/views/frm_signup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 135,  147 => 93,  142 => 91,  137 => 90,  134 => 89,  53 => 11,  48 => 10,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  20 => 1,);
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
    {{ page_title | default('Signup') }}
{% endblock %}

{% block headtags %}
<link href=\"{{ path_url }}/vendor/components/jqueryui/themes/smoothness/jquery-ui.min.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>

<script src=\"{{ path_url }}{{ user_var.project_static }}/jquery.validate.min.js\" type=\"text/javascript\"></script>
<script src=\"{{ path_url }}/vendor/components/jqueryui/jquery-ui.min.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src='https://www.google.com/recaptcha/api.js'></script>

<script type=\"text/javascript\">
    \$(document).ready(function()
    {
        \$(\"#errors\").hide();
        var maxYear = new Date('Y');
        \$('#birthdate').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true,
            yearRange: '1900:'+ maxYear,
            minDate: \"-100y\",
            maxDate: \"+0y\",
            showAnim: \"slideDown\"
        });

        \$(\"#signupform\").validate({
            ignore: \".ignore\",
            groups: {
                agree: \"agree\"
            },
            errorPlacement: function(error, element) {
                if (element.attr(\"name\") == \"agree\") {
                    error.insertAfter(\"#agree-label\");
                } else {
                    error.insertAfter(element);
                }
            },
            rules:{
                name:{ required: true , maxlength: 100 },
                email:{ required: true, email: true , maxlength: 50},
                password:{ required: true, maxlength: 20},
                rpass:{ required: true, maxlength: 20, equalTo: \"#password\" },
                gender:{ required: true },
                birthdate:{ required: true },
                agree: { required: true },
                \"hiddenRecaptcha\": {
                    required: function() {
                        if(grecaptcha.getResponse() == '') {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
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
                rpass: {
                    required: \"Enter password again.\",
                    equalTo: \"Password don't match.\"
                },
                gender: \"Please select gender.\",
                birthdate: {
                    required: \"Select birth date.\"
                },
                agree: \"Accept terms and conditions.\",
                \"hiddenRecaptcha\": \"The captcha was not validated.\"
            }
        });
    });
</script>
{% endblock %}

{% block contentbody %}
    {{ parent() }}
    <form class=\"pure-form pure-form-aligned\" id=\"signupform\" method=\"post\" action=\"{{ path_url_postfix }}/login\">
        <fieldset>
            <legend>{{ legend|default('Enter information to signup.') }}</legend>
            <div class=\"pure-control-group\">
                <label for=\"name\">Name</label>
                <input id=\"name\" type=\"text\" placeholder=\"Name\" name=\"name\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"email\">Email</label>
                <input id=\"email\" type=\"email\" placeholder=\"Email\" name=\"email\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"password\">Password</label>
                <input id=\"password\" type=\"password\" placeholder=\"Password\" name=\"password\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"rpass\">Re-type Password</label>
                <input id=\"rpass\" type=\"password\" placeholder=\"Re-type Password\" name=\"rpass\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"gender\">Gender</label>
                <select id=\"gender\" name=\"gender\">
                    <option value=\"M\">Male</option>
                    <option value=\"F\">Female</option>
                </select>
            </div>

            <div class=\"pure-control-group\">
                <label for=\"birthdate\">Birthdate</label>
                <input id=\"birthdate\" type=\"text\" placeholder=\"Birthdate\" name=\"birthdate\" />
            </div>

            <div class=\"pure-control-group\">
                <label for=\"g-recaptcha\" style=\"float: left;\">Captcha</label>
                <div class=\"g-recaptcha\" data-sitekey=\"6LfKDw8UAAAAAHb6omMkGKhxXFNuo3SpgtGivhr3\" style=\"float: left; margin: 5px;\"></div>
                <input id=\"hiddenRecaptcha\" type=\"hidden\" class=\"hiddenRecaptcha required\" name=\"hiddenRecaptcha\" />
            </div>

            <div class=\"pure-controls\">
                <label for=\"agree\" class=\"pure-checkbox\" id=\"agree-label\" style=\"display: block;  clear: both;\">
                    <input id=\"agree\" type=\"checkbox\" name=\"agree\" value=\"1\"> I've read the <a href='{{ path_url_postfix }}/a/policies'>Terms Of Use</a>
                </label>

                <input type=\"submit\" class=\"pure-button pure-button-primary\" name=\"submit\" value=\"Signup\" style=\"display: block; clear: both; margin-top: 5px; \" />
            </div>
        </fieldset>
    </form>
{% endblock %}
", "/App/views/frm_signup.twig", "/var/www/html/themajesty/App/views/frm_signup.twig");
    }
}
