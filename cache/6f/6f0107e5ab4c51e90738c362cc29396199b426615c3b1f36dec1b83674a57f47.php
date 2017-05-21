<?php

/* /App/views/gallery.twig */
class __TwigTemplate_4b0b594b8e3df2885ab289bfb59bf9f7ecbc3b082bdc092a85a34ff3f98af3f3 extends Twig_Template
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
        return $this->loadTemplate((($context["path_user_template"] ?? null) . "/home.twig"), "/App/views/gallery.twig", 1);
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
        echo twig_escape_filter($this->env, ((array_key_exists("page_title", $context)) ? (_twig_default_filter(($context["page_title"] ?? null), "Start")) : ("Start")), "html", null, true);
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
        echo "/bxslider/jquery.bxslider.min.js\"
            type=\"text/javascript\"></script>
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user_var"] ?? null), "project_static", array()), "html", null, true);
        echo "/bxslider/jquery.bxslider.css\" rel=\"stylesheet\"
          type=\"text/css\" media=\"screen\"/>

    <script type=\"text/javascript\">
        var url_path = '";
        // line 14
        echo twig_escape_filter($this->env, ($context["path_url"] ?? null), "html", null, true);
        echo "';

        function rewriteUrl(url) {
            if (url.indexOf(\"http\") < 0) {
                url = url_path + '/' + url;
            }
            return url;
        }
        \$(document).ready(function () {
            if (\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }
            \$('img').each(function () {
                var url = rewriteUrl(\$(this).attr('src'));
                \$(this).attr(\"src\", url);
            });
            \$('.product_gallery').bxSlider({
                mode: 'fade',
                adaptiveHeight: true,
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
        if (($context["articles"] ?? null)) {
            // line 39
            echo "    <div class=\"product_gallery\">
        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
                // line 41
                echo "        <div class=\"row collapse slide-pane\">
            <div class=\"body\">";
                // line 42
                echo $this->getAttribute($context["a"], "body", array());
                echo "</div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </div>
    ";
        }
        // line 47
        echo "    <div style=\"clear: both;padding: 2px;\">
        <div style=\"float: right;\"><span id=\"slider-next\"></span></div>
        <div style=\"float: left;\"><span id=\"slider-prev\"></span></div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/App/views/gallery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 47,  111 => 45,  102 => 42,  99 => 41,  95 => 40,  92 => 39,  89 => 38,  86 => 37,  59 => 14,  51 => 10,  44 => 8,  41 => 7,  33 => 4,  29 => 3,  20 => 1,);
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
    {{ page_title|default('Start') }}
{% endspaceless %}{% endblock %}

{% block headtags %}
    <script src=\"{{ path_url }}{{ user_var.project_static }}/bxslider/jquery.bxslider.min.js\"
            type=\"text/javascript\"></script>
    <link href=\"{{ path_url }}{{ user_var.project_static }}/bxslider/jquery.bxslider.css\" rel=\"stylesheet\"
          type=\"text/css\" media=\"screen\"/>

    <script type=\"text/javascript\">
        var url_path = '{{ path_url }}';

        function rewriteUrl(url) {
            if (url.indexOf(\"http\") < 0) {
                url = url_path + '/' + url;
            }
            return url;
        }
        \$(document).ready(function () {
            if (\$(\"#errors\").html() == '') {
                \$(\"#errors\").hide();
            }
            \$('img').each(function () {
                var url = rewriteUrl(\$(this).attr('src'));
                \$(this).attr(\"src\", url);
            });
            \$('.product_gallery').bxSlider({
                mode: 'fade',
                adaptiveHeight: true,
            });
        });
    </script>
{% endblock %}
{% block contentbody %}
    {% if articles %}
    <div class=\"product_gallery\">
        {% for a in articles %}
        <div class=\"row collapse slide-pane\">
            <div class=\"body\">{{ a.body|raw }}</div>
        </div>
        {% endfor %}
    </div>
    {% endif %}
    <div style=\"clear: both;padding: 2px;\">
        <div style=\"float: right;\"><span id=\"slider-next\"></span></div>
        <div style=\"float: left;\"><span id=\"slider-prev\"></span></div>
    </div>
{% endblock %}
", "/App/views/gallery.twig", "/var/www/html/themajesty/App/views/gallery.twig");
    }
}
