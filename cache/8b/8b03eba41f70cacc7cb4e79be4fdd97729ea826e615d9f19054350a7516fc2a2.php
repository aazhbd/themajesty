<?php

/* /App/views/frm_login.twig */
class __TwigTemplate_78a8e84dea44b555764b24c533c4422c82bc5152d00c0e03c45a168678f0e1ca extends Twig_Template
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
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/frm_login.twig", 1);
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
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "Login")) : ("Login")), "html", null, true);
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
        echo "/jquery.validate.min.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function(){
        if(\$(\"#errors\").html() == '') {
            \$(\"#errors\").hide();
        }
    });
    </script>
";
    }

    // line 18
    public function block_contentbody($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $this->displayParentBlock("contentbody", $context, $blocks);
        echo "
    ";
        // line 20
        echo twig_escape_filter($this->env, ($context["body_content"] ?? null), "html", null, true);
        echo "

    <form class=\"pure-form pure-form-aligned\" id=\"art-form\" method=\"post\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/home\">
        <fieldset>
            <legend>";
        // line 24
        echo twig_escape_filter($this->env, ((array_key_exists("legend", $context)) ? (_twig_default_filter(($context["legend"] ?? null), "Enter email and password to login.")) : ("Enter email and password to login.")), "html", null, true);
        echo "</legend>
            <div class=\"pure-control-group\">
                <label for=\"email\">Email</label>
                <input id=\"email\" type=\"text\" placeholder=\"Your email address\" name=\"email\">
            </div>

            <div class=\"pure-control-group\">
                <label for=\"password\">Password</label>
                <input id=\"password\" type=\"password\" placeholder=\"Your password\" name=\"password\">
            </div>

            <div class=\"pure-controls\">
                <button type=\"submit\" class=\"pure-button pure-button-primary\" name=\"submit\" style=\"display: block; clear: both; margin-top: 5px; \">Login</button>
                <div>
                    Not a member yet? <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/signup\">Sign Up</a>
                </div>
            </div>
        </fieldset>
    </form>
    <script type=\"text/javascript\">
    \$(document).ready ( function() {
        \$(\"#art-form\").validate ( {
            rules:{
                email:{ required: true },
                password:{ required: true }
            },
            messages: {
                email: { required: \"Enter email.\" },
                password: { required: \"Enter password.\" }
            }
        });
    });
    </script>
";
    }

    public function getTemplateName()
    {
        return "/App/views/frm_login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  77 => 24,  72 => 22,  67 => 20,  62 => 19,  59 => 18,  44 => 8,  41 => 7,  33 => 4,  29 => 3,  20 => 1,);
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
    {{ page_title|default('Login') }}
{% endspaceless %}{% endblock %}

{% block headtags %}
    <script src=\"{{ path_url }}{{ user_var.project_static }}/jquery.validate.min.js\" type=\"text/javascript\"></script>
    <script type=\"text/javascript\">
    \$(document).ready(function(){
        if(\$(\"#errors\").html() == '') {
            \$(\"#errors\").hide();
        }
    });
    </script>
{% endblock %}

{% block contentbody %}
    {{ parent() }}
    {{ body_content }}

    <form class=\"pure-form pure-form-aligned\" id=\"art-form\" method=\"post\" action=\"{{ path_url_postfix }}/home\">
        <fieldset>
            <legend>{{ legend | default('Enter email and password to login.') }}</legend>
            <div class=\"pure-control-group\">
                <label for=\"email\">Email</label>
                <input id=\"email\" type=\"text\" placeholder=\"Your email address\" name=\"email\">
            </div>

            <div class=\"pure-control-group\">
                <label for=\"password\">Password</label>
                <input id=\"password\" type=\"password\" placeholder=\"Your password\" name=\"password\">
            </div>

            <div class=\"pure-controls\">
                <button type=\"submit\" class=\"pure-button pure-button-primary\" name=\"submit\" style=\"display: block; clear: both; margin-top: 5px; \">Login</button>
                <div>
                    Not a member yet? <a href=\"{{ path_url_postfix }}/signup\">Sign Up</a>
                </div>
            </div>
        </fieldset>
    </form>
    <script type=\"text/javascript\">
    \$(document).ready ( function() {
        \$(\"#art-form\").validate ( {
            rules:{
                email:{ required: true },
                password:{ required: true }
            },
            messages: {
                email: { required: \"Enter email.\" },
                password: { required: \"Enter password.\" }
            }
        });
    });
    </script>
{% endblock %}

", "/App/views/frm_login.twig", "/var/www/html/themajesty/App/views/frm_login.twig");
    }
}
