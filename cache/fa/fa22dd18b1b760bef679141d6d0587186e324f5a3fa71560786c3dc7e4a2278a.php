<?php

/* /Template/base.twig */
class __TwigTemplate_112bf31f4f3f9d93dc9580bf8b09c25d0a4c8577295d853add2e74eebd81f6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contentheader' => array($this, 'block_contentheader'),
            'contentbody' => array($this, 'block_contentbody'),
            'footers' => array($this, 'block_footers'),
            'headtags' => array($this, 'block_headtags'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"author\" content=\"Abdullah Al Zakir Hossain, www.articulatelogic.com, ";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("author", $context)) ? (_twig_default_filter(($context["author"] ?? null), "aazhbd")) : ("aazhbd")), "html", null, true);
        echo "\" />
    <meta name=\"Copyright\" content=\"aazhbd, aazhbd@yahoo.com\" />
    <meta name=\"description\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, strip_tags(($context["description"] ?? null)), "html", null, true);
        echo "\" />
    <meta name=\"keywords\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["keys"] ?? null), "html", null, true);
        echo ", Abdullah Al Zakir Hossain, aazhbd, ArtWeb, ArtWebCMS, conveylive.com, quran.conveylive.com, software, development\" />
    <meta name=\"robots\" content=\"index, follow, I followed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
        echo "images/art_logo.png\" />
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_name", array()), "html", null, true);
        echo "</title>
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
        echo "css/zstyle.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
        echo "css/pure.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
        echo "css/menus.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
        echo "css/forms.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <!--[if lte IE 6]>
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
        echo "css/msie.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
    <![endif]-->
</head>
<body>
<div id=\"contentheader\">
    ";
        // line 23
        $this->displayBlock('contentheader', $context, $blocks);
        // line 28
        echo "</div>
<div id=\"contentbody\">
";
        // line 30
        $this->displayBlock('contentbody', $context, $blocks);
        // line 48
        echo "</div>
<div id=\"footer\">
";
        // line 50
        $this->displayBlock('footers', $context, $blocks);
        // line 56
        echo "</div>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
        echo "css/menus.js\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "/vendor/components/jquery/jquery.min.js\" type=\"text/javascript\"></script>
";
        // line 59
        $this->displayBlock('headtags', $context, $blocks);
        // line 61
        echo "</body>
</html>
";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
    }

    // line 23
    public function block_contentheader($context, array $blocks = array())
    {
        // line 24
        echo "    <div id=\"banner\">
        empty
    </div>
    ";
    }

    // line 30
    public function block_contentbody($context, array $blocks = array())
    {
        // line 31
        echo "    <article>
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 33
            echo "    <div id=\"reports\">";
            echo twig_escape_filter($this->env, $context["error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    ";
        if (($context["title"] ?? null)) {
            // line 36
            echo "    <h2 class=\"title\">";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h2>
    ";
        }
        // line 38
        echo "    ";
        if (($context["subtitle"] ?? null)) {
            // line 39
            echo "    <div class=\"subtitle\">";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
            echo "</div>
    ";
        }
        // line 41
        echo "    ";
        if (($context["body"] ?? null)) {
            // line 42
            echo "    <div class=\"body markdown-body\">
        ";
            // line 43
            echo ($context["body"] ?? null);
            echo "
    </div>
    ";
        }
        // line 46
        echo "    </article>
";
    }

    // line 50
    public function block_footers($context, array $blocks = array())
    {
        // line 51
        echo "    <p>
        &copy; 2015 <a href=\"http://www.articulatelogic.com/\">ArticulateLogic.com</a>
        | Design: <a href=\"mailto:aazhbd@yahoo.com\">aazhbd</a>
    </p>
";
    }

    // line 59
    public function block_headtags($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "/Template/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 59,  185 => 51,  182 => 50,  177 => 46,  171 => 43,  168 => 42,  165 => 41,  159 => 39,  156 => 38,  150 => 36,  147 => 35,  138 => 33,  134 => 32,  131 => 31,  128 => 30,  121 => 24,  118 => 23,  113 => 12,  107 => 61,  105 => 59,  101 => 58,  97 => 57,  94 => 56,  92 => 50,  88 => 48,  86 => 30,  82 => 28,  80 => 23,  72 => 18,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  49 => 12,  45 => 11,  40 => 9,  36 => 8,  31 => 6,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" xml:lang=\"en\" xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
    <meta name=\"author\" content=\"Abdullah Al Zakir Hossain, www.articulatelogic.com, {{ author|default(\"aazhbd\") }}\" />
    <meta name=\"Copyright\" content=\"aazhbd, aazhbd@yahoo.com\" />
    <meta name=\"description\" content=\"{{ description | striptags }}\" />
    <meta name=\"keywords\" content=\"{{ keys }}, Abdullah Al Zakir Hossain, aazhbd, ArtWeb, ArtWebCMS, conveylive.com, quran.conveylive.com, software, development\" />
    <meta name=\"robots\" content=\"index, follow, I followed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ path_static }}images/art_logo.png\" />
    <title>{% block title %}{% endblock %} | {{ user_var.project_name }}</title>
    <link href=\"{{ path_static }}css/zstyle.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link href=\"{{ path_static }}css/pure.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link href=\"{{ path_static }}css/menus.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <link href=\"{{ path_static }}css/forms.css\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <!--[if lte IE 6]>
    <link href=\"{{ path_static }}css/msie.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
    <![endif]-->
</head>
<body>
<div id=\"contentheader\">
    {% block contentheader %}
    <div id=\"banner\">
        empty
    </div>
    {% endblock %}
</div>
<div id=\"contentbody\">
{% block contentbody %}
    <article>
    {% for error in errors %}
    <div id=\"reports\">{{ error }}</div>
    {% endfor %}
    {% if title %}
    <h2 class=\"title\">{{ title }}</h2>
    {% endif %}
    {% if subtitle %}
    <div class=\"subtitle\">{{ subtitle }}</div>
    {% endif %}
    {% if body %}
    <div class=\"body markdown-body\">
        {{ body|raw }}
    </div>
    {% endif %}
    </article>
{% endblock %}
</div>
<div id=\"footer\">
{% block footers %}
    <p>
        &copy; 2015 <a href=\"http://www.articulatelogic.com/\">ArticulateLogic.com</a>
        | Design: <a href=\"mailto:aazhbd@yahoo.com\">aazhbd</a>
    </p>
{% endblock %}
</div>
<script src=\"{{ path_static }}css/menus.js\"></script>
<script src=\"{{ path_url }}/vendor/components/jquery/jquery.min.js\" type=\"text/javascript\"></script>
{% block headtags %}
{% endblock %}
</body>
</html>
{#
 * An open source web application development framework for PHP.
 * @author        ArticulateLogic Labs
 * @author        Abdullah Al Zakir Hossain, Email: aazhbd@yahoo.com
 * @copyright     Copyright (c)2009-2014 ArticulateLogic Labs
 * @license       MIT License
 #}
", "/Template/base.twig", "/var/www/html/themajesty/Template/base.twig");
    }
}
