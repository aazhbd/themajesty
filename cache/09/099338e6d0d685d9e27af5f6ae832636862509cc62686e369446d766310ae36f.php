<?php

/* /App/views/frm_article.twig */
class __TwigTemplate_a62e06d231d3184e371964ef4fb2569a31f5e8712b02e543c8b2f2e10f53db57 extends Twig_Template
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
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/frm_article.twig", 1);
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
        if ((($context["action"] ?? null) == "edit")) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "Edit Article")) : ("Edit Article")), "html", null, true);
            echo "
    ";
        } else {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "Add Article")) : ("Add Article")), "html", null, true);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 11
    public function block_headtags($context, array $blocks = array())
    {
        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/jquery.validate.min.js\" type=\"text/javascript\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/simplemde.min.css\">
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/simplemde.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            if (\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }

            var simplemde = new SimpleMDE({ element: \$(\"#editorbody\")[0] });

            \$('.mediaitem a').click(function () {
                var str = \$(this).attr(\"href\");
                if (\$(this).attr(\"data-download\") == 'false') {
                    simplemde.value(simplemde.value() + \"![image](\" + str + \")\");
                }
                else {
                    simplemde.value(simplemde.value() + \"[\" + str + \"](\" + str + \")\");
                }
                return false;
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
        if (($this->getAttribute($this->getAttribute(($context["session"] ?? null), "get", array(0 => "user_info"), "method"), "utype", array()) == 1)) {
            // line 39
            echo "    ";
            $this->displayParentBlock("contentbody", $context, $blocks);
            echo "
    ";
            // line 40
            echo twig_escape_filter($this->env, ($context["body_content"] ?? null), "html", null, true);
            echo "
    <form class=\"pure-form pure-form-stacked\" id=\"publish\" method=\"post\"
          action=\"";
            // line 42
            echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
            echo "/article/list\">
        <fieldset class=\"pure-group\">
            ";
            // line 44
            if ((($context["action"] ?? null) == "edit")) {
                // line 45
                echo "                <legend>Edit Article</legend>
                <input type=\"hidden\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "id", array()), "html", null, true);
                echo "\" name=\"editval\"/>
            ";
            } else {
                // line 48
                echo "                <legend>Add New Article</legend>
            ";
            }
            // line 50
            echo "            <input type=\"text\" class=\"pure-input-1\" placeholder=\"Title\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "title", array()), "html", null, true);
            echo "\" name=\"title\"/>
            <input type=\"text\" class=\"pure-input-1\" placeholder=\"Subtitle\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "subtitle", array()), "html", null, true);
            echo "\"
                   name=\"subtitle\"/>
        </fieldset>
        <fieldset class=\"pure-group\">
            <input type=\"text\" class=\"pure-input-1\" placeholder=\"Url\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "url", array()), "html", null, true);
            echo "\" name=\"aurl\"/>
            <select class=\"pure-input-1\" name=\"category\">
                ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 58
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute(($context["article"] ?? null), "category_id", array()) == $this->getAttribute($context["cat"], "id", array()))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cat"], "catname", array()), "html", null, true);
                echo "</option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            </select>
        </fieldset>
        <fieldset class=\"pure-group\">
            <textarea class=\"pure-input-1\" placeholder=\"Content\" id=\"editorbody\" rows=\"40\" name=\"abody\">";
            // line 63
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["article"] ?? null), "body", array())), "html", null, true);
            echo "</textarea>
        </fieldset>
        <fieldset class=\"pure-group\">
            <input type=\"text\" class=\"pure-input-1\" placeholder=\"state 0/1\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "state", array()), "html", null, true);
            echo "\"
                   name=\"state\"/>
        </fieldset>
        <input type=\"submit\" class=\"pure-button pure-input-1 pure-button-primary\" id=\"btn_submit\" value=\"Submit\"/>
    </form>
    <script type=\"text/javascript\">
    \$(document).ready(function () {
        \$(\"#publish\").validate({
            rules: {
                title: {required: true, maxlength: 100},
                aurl: {required: true, maxlength: 50},
                category: {required: true},
                abody: {required: true, maxlength: 65000}
            },
            messages: {
                title: {
                    required: \"Enter title.\",
                    maxlength: \"Can't be longer than 100 characters.\"
                },
                aurl: {
                    required: \"Enter url.\",
                    maxlength: \"Can't be longer than 50 characters.\"
                },
                category: {
                    required: \"Category required.\"
                },
                abody: {
                    required: \"Enter article body.\",
                    maxlength: \"Article can't be longer than 65000 characters.\"
                }
            }
        });
    });
    </script>

    ";
            // line 101
            if (($context["files"] ?? null)) {
                // line 102
                echo "    <p>List of available files</p>
    <div id=\"medialist\">
        ";
                // line 104
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                    // line 105
                    echo "        <table class=\"mediaitem\">
            <tr>
                <td align=\"center\">
                    <img src=\"";
                    // line 108
                    echo twig_escape_filter($this->env, ($context["path_static"] ?? null), "html", null, true);
                    echo "images/fileicons/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "ftype", array()), "html", null, true);
                    echo ".png\">
                </td>
            </tr>
            <tr>
                <td>
                    <a href=\"";
                    // line 113
                    echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                    echo "/file/view/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
                    echo "/\">";
                    echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["a"], "name", array()), 0, 20), "html", null, true);
                    echo "</a>
                </td>
            </tr>
            <tr>
                <td align=\"center\">
                    ";
                    // line 118
                    if (((($this->getAttribute($context["a"], "ftype", array()) == "png") || ($this->getAttribute($context["a"], "ftype", array()) == "jpg")) || ($this->getAttribute($context["a"], "ftype", array()) == "gif"))) {
                        // line 119
                        echo "                        <a class=\"pure-button pure-button-primary\" data-download=\"false\"
                           href=\"";
                        // line 120
                        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                        echo "/file/view/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
                        echo "/\">Add to article</a>
                    ";
                    } else {
                        // line 122
                        echo "                        <a class=\"pure-button pure-button-primary\" data-download=\"true\"
                           href=\"";
                        // line 123
                        echo twig_escape_filter($this->env, ($context["path_url_postfix"] ?? null), "html", null, true);
                        echo "/file/download/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "name", array()), "html", null, true);
                        echo "/\">Add to article</a>
                    ";
                    }
                    // line 125
                    echo "                </td>
            </tr>
        </table>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "    </div>
    ";
            }
            // line 131
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "/App/views/frm_article.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  284 => 131,  280 => 129,  271 => 125,  264 => 123,  261 => 122,  254 => 120,  251 => 119,  249 => 118,  237 => 113,  227 => 108,  222 => 105,  218 => 104,  214 => 102,  212 => 101,  174 => 66,  168 => 63,  163 => 60,  148 => 58,  144 => 57,  139 => 55,  132 => 51,  127 => 50,  123 => 48,  118 => 46,  115 => 45,  113 => 44,  108 => 42,  103 => 40,  98 => 39,  95 => 38,  92 => 37,  65 => 14,  60 => 13,  54 => 12,  51 => 11,  42 => 7,  36 => 5,  33 => 4,  29 => 3,  20 => 1,);
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
    {% if action == \"edit\" %}
        {{ page_title|default('Edit Article') }}
    {% else %}
        {{ page_title|default('Add Article') }}
    {% endif %}
{% endspaceless %}{% endblock %}

{% block headtags %}
    <script src=\"{{ path_url }}{{ user_var.project_static }}/jquery.validate.min.js\" type=\"text/javascript\"></script>
    <link rel=\"stylesheet\" href=\"{{ path_url }}{{ user_var.project_static }}/simplemde.min.css\">
    <script src=\"{{ path_url }}{{ user_var.project_static }}/simplemde.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            if (\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }

            var simplemde = new SimpleMDE({ element: \$(\"#editorbody\")[0] });

            \$('.mediaitem a').click(function () {
                var str = \$(this).attr(\"href\");
                if (\$(this).attr(\"data-download\") == 'false') {
                    simplemde.value(simplemde.value() + \"![image](\" + str + \")\");
                }
                else {
                    simplemde.value(simplemde.value() + \"[\" + str + \"](\" + str + \")\");
                }
                return false;
            });
        });
    </script>
{% endblock %}

{% block contentbody %}
    {% if session.get('user_info').utype == 1 %}
    {{ parent() }}
    {{ body_content }}
    <form class=\"pure-form pure-form-stacked\" id=\"publish\" method=\"post\"
          action=\"{{ path_url_postfix }}/article/list\">
        <fieldset class=\"pure-group\">
            {% if action == \"edit\" %}
                <legend>Edit Article</legend>
                <input type=\"hidden\" value=\"{{ article.id }}\" name=\"editval\"/>
            {% else %}
                <legend>Add New Article</legend>
            {% endif %}
            <input type=\"text\" class=\"pure-input-1\" placeholder=\"Title\" value=\"{{ article.title }}\" name=\"title\"/>
            <input type=\"text\" class=\"pure-input-1\" placeholder=\"Subtitle\" value=\"{{ article.subtitle }}\"
                   name=\"subtitle\"/>
        </fieldset>
        <fieldset class=\"pure-group\">
            <input type=\"text\" class=\"pure-input-1\" placeholder=\"Url\" value=\"{{ article.url }}\" name=\"aurl\"/>
            <select class=\"pure-input-1\" name=\"category\">
                {% for cat in categories %}
                    <option value=\"{{ cat.id }}\" {% if article.category_id == cat.id %}selected{% endif %}>{{ cat.catname }}</option>
                {% endfor %}
            </select>
        </fieldset>
        <fieldset class=\"pure-group\">
            <textarea class=\"pure-input-1\" placeholder=\"Content\" id=\"editorbody\" rows=\"40\" name=\"abody\">{{ article.body |trim }}</textarea>
        </fieldset>
        <fieldset class=\"pure-group\">
            <input type=\"text\" class=\"pure-input-1\" placeholder=\"state 0/1\" value=\"{{ article.state }}\"
                   name=\"state\"/>
        </fieldset>
        <input type=\"submit\" class=\"pure-button pure-input-1 pure-button-primary\" id=\"btn_submit\" value=\"Submit\"/>
    </form>
    <script type=\"text/javascript\">
    \$(document).ready(function () {
        \$(\"#publish\").validate({
            rules: {
                title: {required: true, maxlength: 100},
                aurl: {required: true, maxlength: 50},
                category: {required: true},
                abody: {required: true, maxlength: 65000}
            },
            messages: {
                title: {
                    required: \"Enter title.\",
                    maxlength: \"Can't be longer than 100 characters.\"
                },
                aurl: {
                    required: \"Enter url.\",
                    maxlength: \"Can't be longer than 50 characters.\"
                },
                category: {
                    required: \"Category required.\"
                },
                abody: {
                    required: \"Enter article body.\",
                    maxlength: \"Article can't be longer than 65000 characters.\"
                }
            }
        });
    });
    </script>

    {% if files %}
    <p>List of available files</p>
    <div id=\"medialist\">
        {% for a in files %}
        <table class=\"mediaitem\">
            <tr>
                <td align=\"center\">
                    <img src=\"{{ path_static }}images/fileicons/{{ a.ftype }}.png\">
                </td>
            </tr>
            <tr>
                <td>
                    <a href=\"{{ path_url_postfix }}/file/view/{{ a.name }}/\">{{ a.name|slice(0, 20) }}</a>
                </td>
            </tr>
            <tr>
                <td align=\"center\">
                    {% if a.ftype == 'png' or a.ftype == 'jpg' or a.ftype == 'gif' %}
                        <a class=\"pure-button pure-button-primary\" data-download=\"false\"
                           href=\"{{ path_url_postfix }}/file/view/{{ a.name }}/\">Add to article</a>
                    {% else %}
                        <a class=\"pure-button pure-button-primary\" data-download=\"true\"
                           href=\"{{ path_url_postfix }}/file/download/{{ a.name }}/\">Add to article</a>
                    {% endif %}
                </td>
            </tr>
        </table>
        {% endfor %}
    </div>
    {% endif %}
    {% endif %}
{% endblock %}

", "/App/views/frm_article.twig", "/var/www/html/themajesty/App/views/frm_article.twig");
    }
}
