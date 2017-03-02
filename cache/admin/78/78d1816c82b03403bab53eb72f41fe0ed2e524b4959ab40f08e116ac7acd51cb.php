<?php

/* Common/iframe_common.twig */
class __TwigTemplate_d0be3ea98f81c434a187f9af2d53f7c6ce24e3c6a4067c29dfe21a4a9555e0be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'container' => array($this, 'block_container'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"renderer\" content=\"webkit\">
        <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
        <title>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "sitename", array()), "html", null, true);
        echo "--后台管理中心</title>
        <meta name=\"keywords\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "keywords", array()), "html", null, true);
        echo "\">
        <meta name=\"description\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "description", array()), "html", null, true);
        echo "\">
        <!--[if lt IE 9]>
        <meta http-equiv=\"refresh\" content=\"0;ie.html\" />
        <![endif]-->
        <link rel=\"shortcut icon\" href=\"favicon.ico?v=2\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, base_url("public/admin/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, base_url("public/admin/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, base_url("public/admin/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, base_url("public/admin/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, base_url("public/admin/css/style.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, base_url("public/admin/css/plugins/iCheck/custom.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, base_url("public/admin/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        
        ";
        // line 23
        $this->displayBlock('style', $context, $blocks);
        // line 24
        echo "    </head>
    <body class=\"gray-bg\">
    ";
        // line 26
        $this->displayBlock('container', $context, $blocks);
        // line 27
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, base_url("public/admin/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, base_url("public/admin/js/plugins/metisMenu/jquery.metisMenu.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, base_url("public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, base_url("public/admin/js/select2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, base_url("public/admin/js/hplus.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, base_url("public/admin/js/contabs.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, base_url("public/admin/js/plugins/layer/layer.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, base_url("public/admin/js/sticky.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, base_url("public/admin/js/common.js?v=1478169103975"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, base_url("public/admin/js/plugins/layer/laydate/laydate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, base_url("public/admin/js/plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 38
        $this->displayBlock('script', $context, $blocks);
        // line 39
        echo "    </body>
</html>";
    }

    // line 23
    public function block_style($context, array $blocks = array())
    {
    }

    // line 26
    public function block_container($context, array $blocks = array())
    {
    }

    // line 38
    public function block_script($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "Common/iframe_common.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 38,  141 => 26,  136 => 23,  131 => 39,  129 => 38,  125 => 37,  121 => 36,  117 => 35,  113 => 34,  109 => 33,  105 => 32,  101 => 31,  97 => 30,  93 => 29,  89 => 28,  84 => 27,  82 => 26,  78 => 24,  76 => 23,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
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
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"renderer\" content=\"webkit\">
        <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
        <title>{{site.sitename}}--后台管理中心</title>
        <meta name=\"keywords\" content=\"{{site.keywords}}\">
        <meta name=\"description\" content=\"{{site.description}}\">
        <!--[if lt IE 9]>
        <meta http-equiv=\"refresh\" content=\"0;ie.html\" />
        <![endif]-->
        <link rel=\"shortcut icon\" href=\"favicon.ico?v=2\">
        <link href=\"{{base_url('public/admin/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{base_url('public/admin/css/font-awesome.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{base_url('public/admin/css/animate.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{base_url('public/admin/css/select2.min.css')}}\" rel=\"stylesheet\">
        <link href=\"{{base_url('public/admin/css/style.min.css')}}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{base_url('public/admin/css/plugins/iCheck/custom.css')}}\">
        <script src=\"{{base_url('public/admin/js/jquery.min.js')}}\"></script>
        
        {% block style %}{% endblock %}
    </head>
    <body class=\"gray-bg\">
    {% block container %}{% endblock %}
    <script src=\"{{base_url('public/admin/js/bootstrap.min.js')}}\"></script>
    <script src=\"{{base_url('public/admin/js/plugins/metisMenu/jquery.metisMenu.js')}}\"></script>
    <script src=\"{{base_url('public/admin/js/plugins/slimscroll/jquery.slimscroll.min.js')}}\"></script>
    <script src=\"{{base_url('public/admin/js/select2.min.js')}}\"></script>
    <script src=\"{{base_url('public/admin/js/hplus.min.js')}}\"></script>
    <script src=\"{{base_url('public/admin/js/contabs.min.js')}}\"></script>
    <script src=\"{{base_url('public/admin/js/plugins/layer/layer.js')}}\"></script>
    <script src=\"{{base_url('public/admin/js/sticky.min.js')}}\"></script>
    <script src=\"{{base_url('public/admin/js/common.js?v=1478169103975')}}\"></script>
    <script src=\"{{base_url('public/admin/js/plugins/layer/laydate/laydate.js')}}\"></script>
    <script src=\"{{base_url('public/admin/js/plugins/iCheck/icheck.min.js')}}\"></script>
    {% block script %}{% endblock %}
    </body>
</html>", "Common/iframe_common.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\Common\\iframe_common.twig");
    }
}
