<?php

/* /App/views/home.twig */
class __TwigTemplate_5ca77b0e492ad85f646023c6828e938b6f177b6881f6f4c5be21c818563d9be9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contentheader' => array($this, 'block_contentheader'),
            'contentbody' => array($this, 'block_contentbody'),
            'footers' => array($this, 'block_footers'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(($context["path_sys_template"] ?? null), "/App/views/home.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "Home")) : ("Home")), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_contentheader($context, array $blocks = array())
    {
        // line 6
        echo "<div id=\"banner\">
    <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/\" class=\"logo\">
        <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
        echo "images/logot.png\" alt=\"www.articulatelogic.com\" class=\"logo\"/>
        The Majesty Traders
    </a>
    <div id=\"navigatemenu\">
        <div class=\"pure-menu pure-menu-horizontal\">
            <ul class=\"pure-menu-list\">
                <li class=\"pure-menu-item\">
                    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/home\" class=\"pure-menu-link\">Home</a>
                </li>
                <li class=\"pure-menu-item\">
                    <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/products\" class=\"pure-menu-link\">Categories and Products</a>
                </li>
                <li class=\"pure-menu-item\">
                    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/about\" class=\"pure-menu-link\">About Us</a>
                </li>
                <li class=\"pure-menu-item\">
                    <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/order\" class=\"pure-menu-link\">Online Order</a>
                </li>
                <li class=\"pure-menu-item\">
                    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
        echo "/contact\" class=\"pure-menu-link\">Contact</a>
                </li>
                ";
        // line 29
        if (($this->getAttribute($this->getAttribute(($context["session"] ?? null), "get", array(0 => "user_info"), "method"), "utype", array()) == 1)) {
            // line 30
            echo "                    <li class=\"pure-menu-item pure-menu-has-children pure-menu-allow-hover\">
                        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/home\" class=\"pure-menu-link\">Admin Menu</a>
                        <ul class=\"pure-menu-children\">
                            <li class=\"pure-menu-item\">
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/user/list\" class=\"pure-menu-link\">Manage Users</a>
                            </li>
                            <li class=\"pure-menu-item\">
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/article/list\" class=\"pure-menu-link\">Manage Articles</a>
                            </li>
                            <li class=\"pure-menu-item\">
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/category/list\" class=\"pure-menu-link\">Manage Categories</a>
                            </li>
                            <li class=\"pure-menu-item\">
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/files/list\" class=\"pure-menu-link\">Manage Files</a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 48
        echo "            </ul>
        </div>
    </div>
</div>
";
    }

    // line 53
    public function block_contentbody($context, array $blocks = array())
    {
        // line 54
        if (($context["content_message"] ?? null)) {
            // line 55
            echo "    <div id=\"reports\">";
            echo twig_escape_filter($this->env, ($context["content_message"] ?? null), "html", null, true);
            echo "</div>
";
        }
        // line 57
        $this->displayParentBlock("contentbody", $context, $blocks);
        echo "
";
        // line 58
        echo twig_escape_filter($this->env, ($context["body_content"] ?? null), "html", null, true);
        echo "
";
        // line 60
        echo "    <!-- Scripts for external api-->
";
    }

    // line 63
    public function block_footers($context, array $blocks = array())
    {
        // line 64
        echo "<p>
    &copy; 2009 - ";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " <a href=\"mailto:aazhbd@yahoo.com\">AAZ H</a>
    ";
        // line 66
        if ($this->getAttribute(($context["session"] ?? null), "get", array(0 => "is_authenticated"), "method")) {
            // line 67
            echo "        | <a href=\"";
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/home\">
            ";
            // line 68
            if ($this->getAttribute($this->getAttribute(($context["session"] ?? null), "get", array(0 => "user_info"), "method"), "firstname", array())) {
                // line 69
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["session"] ?? null), "get", array(0 => "user_info"), "method"), "firstname", array()), "html", null, true);
                echo "'s
            ";
            } else {
                // line 71
                echo "            User
            ";
            }
            // line 73
            echo "            Home
        </a> | 
        <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/logout\">Logout</a>
        ";
        }
        // line 77
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/App/views/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 77,  191 => 75,  187 => 73,  183 => 71,  177 => 69,  175 => 68,  170 => 67,  168 => 66,  164 => 65,  161 => 64,  158 => 63,  153 => 60,  149 => 58,  145 => 57,  139 => 55,  137 => 54,  134 => 53,  126 => 48,  118 => 43,  112 => 40,  106 => 37,  100 => 34,  94 => 31,  91 => 30,  89 => 29,  84 => 27,  78 => 24,  72 => 21,  66 => 18,  60 => 15,  50 => 8,  46 => 7,  43 => 6,  40 => 5,  33 => 3,  30 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends path_sys_template %}
{% block title %}
    {{ page_title|default('Home') }}
{% endblock %}
{% block contentheader %}
<div id=\"banner\">
    <a href=\"{{ path_url_postfix }}/\" class=\"logo\">
        <img src=\"{{ path_static }}images/logot.png\" alt=\"www.articulatelogic.com\" class=\"logo\"/>
        The Majesty Traders
    </a>
    <div id=\"navigatemenu\">
        <div class=\"pure-menu pure-menu-horizontal\">
            <ul class=\"pure-menu-list\">
                <li class=\"pure-menu-item\">
                    <a href=\"{{ path_url_postfix }}/home\" class=\"pure-menu-link\">Home</a>
                </li>
                <li class=\"pure-menu-item\">
                    <a href=\"{{ path_url_postfix }}/products\" class=\"pure-menu-link\">Categories and Products</a>
                </li>
                <li class=\"pure-menu-item\">
                    <a href=\"{{ path_url_postfix }}/about\" class=\"pure-menu-link\">About Us</a>
                </li>
                <li class=\"pure-menu-item\">
                    <a href=\"{{ path_url_postfix }}/order\" class=\"pure-menu-link\">Online Order</a>
                </li>
                <li class=\"pure-menu-item\">
                    <a href=\"{{ path_url_postfix }}/contact\" class=\"pure-menu-link\">Contact</a>
                </li>
                {% if session.get('user_info').utype == 1 %}
                    <li class=\"pure-menu-item pure-menu-has-children pure-menu-allow-hover\">
                        <a href=\"{{ path_url_postfix }}/home\" class=\"pure-menu-link\">Admin Menu</a>
                        <ul class=\"pure-menu-children\">
                            <li class=\"pure-menu-item\">
                                <a href=\"{{ path_url_postfix }}/user/list\" class=\"pure-menu-link\">Manage Users</a>
                            </li>
                            <li class=\"pure-menu-item\">
                                <a href=\"{{ path_url_postfix }}/article/list\" class=\"pure-menu-link\">Manage Articles</a>
                            </li>
                            <li class=\"pure-menu-item\">
                                <a href=\"{{ path_url_postfix }}/category/list\" class=\"pure-menu-link\">Manage Categories</a>
                            </li>
                            <li class=\"pure-menu-item\">
                                <a href=\"{{ path_url_postfix }}/files/list\" class=\"pure-menu-link\">Manage Files</a>
                            </li>
                        </ul>
                    </li>
                {% endif %}
            </ul>
        </div>
    </div>
</div>
{% endblock %}
{% block contentbody %}
{% if content_message %}
    <div id=\"reports\">{{ content_message }}</div>
{% endif %}
{{ parent() }}
{{ body_content }}
{% autoescape false %}
    <!-- Scripts for external api-->
{% endautoescape %}
{% endblock %}
{% block footers %}
<p>
    &copy; 2009 - {{ \"now\"|date(\"Y\") }} <a href=\"mailto:aazhbd@yahoo.com\">AAZ H</a>
    {% if session.get('is_authenticated') %}
        | <a href=\"{{ path_url_postfix }}/home\">
            {% if session.get('user_info').firstname %}
            {{ session.get('user_info').firstname }}'s
            {% else %}
            User
            {% endif %}
            Home
        </a> | 
        <a href=\"{{ path_url_postfix }}/logout\">Logout</a>
        {% endif %}
</p>
{% endblock %}
{#
 * An open source web application development framework for PHP 5.
 * @author        ArticulateLogic Labs
 * @author        Abdullah Al Zakir Hossain, Email: aazhbd@yahoo.com
 * @copyright     Copyright (c)2009-2014 ArticulateLogic Labs
 * @license       MIT License
 #}
", "/App/views/home.twig", "/var/www/html/themajesty/App/views/home.twig");
    }
}
