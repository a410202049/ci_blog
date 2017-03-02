<?php

/* Index/index.twig */
class __TwigTemplate_79da056f4d8c36bcc0fb1665024d5db5acf02e9f6dcd7c00dbe9b0d689a00123 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/common.twig", "Index/index.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Common/common.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "    <div id=\"wrapper\">
        <!--左侧导航开始-->
        <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
            <div class=\"nav-close\"><i class=\"fa fa-times-circle\"></i>
            </div>
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"side-menu\">
                    <li class=\"nav-header\">
                        <div class=\"dropdown profile-element\">
                            <span><img alt=\"image\" style=\"max-width: 140px;\" class=\"\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, base_url("public/admin/img/logo.png"), "html", null, true);
        echo "\" /></span>

                        </div>
                        <div class=\"logo-element\">
                            E
                        </div>
                    </li>

                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["userMenu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                        <li>
                            <a title=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\" href=\"";
            if ($this->getAttribute($context["item"], "class", array())) {
                echo twig_escape_filter($this->env, base_url(("admin/" . $this->getAttribute($context["item"], "class", array()))), "html", null, true);
            } else {
                echo "javascript:void(0);";
            }
            echo "\" ";
            if ( !$this->getAttribute($context["item"], "child", array(), "array")) {
                echo "class=\"J_menuItem\"";
            }
            echo "><i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo "\"></i> <span class=\"nav-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</span> <span class=\"fa ";
            if ($this->getAttribute($context["item"], "child", array(), "array")) {
                echo "arrow ";
            } else {
                echo " circle ";
            }
            echo "\"></span></a>
                            ";
            // line 23
            if ($this->getAttribute($context["item"], "child", array(), "array")) {
                // line 24
                echo "                                <ul class=\"nav nav-second-level collapse\">
                                    ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "child", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["sub"]) {
                    // line 26
                    echo "                                        <li >
                                            <a title=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "name", array()), "html", null, true);
                    echo "\"  class=\"J_menuItem\" href=\"";
                    echo twig_escape_filter($this->env, base_url(("admin/" . $this->getAttribute($context["sub"], "class", array()))), "html", null, true);
                    echo "\">
                                                ";
                    // line 28
                    if ($this->getAttribute($context["sub"], "icon", array())) {
                        // line 29
                        echo "                                                    <i class=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "icon", array()), "html", null, true);
                        echo "\"></i>
                                                ";
                    }
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["sub"], "name", array()), "html", null, true);
                    echo "
                                            </a>
                                            ";
                    // line 32
                    if ($this->getAttribute($context["sub"], "child", array())) {
                        // line 33
                        echo "                                                <ul class=\"nav nav-third-level collapse\">
                                                    ";
                        // line 34
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["sub"], "child", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                            // line 35
                            echo "                                                        <li >
                                                            <a title=\"";
                            // line 36
                            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                            echo "\"  class=\"J_menuItem\" href=\"";
                            echo twig_escape_filter($this->env, base_url(("admin/" . $this->getAttribute($context["s"], "class", array()))), "html", null, true);
                            echo "\">
                                                                ";
                            // line 37
                            if ($this->getAttribute($context["s"], "icon", array())) {
                                // line 38
                                echo "                                                                    <i class=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "icon", array()), "html", null, true);
                                echo "\"></i>
                                                                ";
                            }
                            // line 39
                            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "name", array()), "html", null, true);
                            echo "
                                                            </a>
                                                        </li>
                                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 42
                        echo "                    
                                                </ul>
                                            ";
                    }
                    // line 45
                    echo "                                        </li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "                    
                                </ul>
                            ";
            }
            // line 49
            echo "                        </li>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id=\"page-wrapper\" class=\"gray-bg dashbard-1\">
            <div class=\"row border-bottom\">
                <nav class=\"navbar navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                    <div class=\"navbar-header row\">
                        <a class=\"navbar-minimalize minimalize-styl-2 btn btn-primary \" href=\"#\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                        <h2 class=\"text-success\" style=\"display: inline-block;\"></h2>  
                        
                        <a class=\"minimalize-styl-2 btn btn-success\" target=\"_blank\" title=\"主页\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, base_url(), "html", null, true);
        echo "\">
                            <i class=\"fa fa-home\"></i>&nbsp;
                            ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "sitename", array()), "html", null, true);
        echo "
                        </a> 
                        <a class=\"minimalize-styl-2 btn btn-info\" title=\"\" href=\"#\">
                            <i class=\"fa fa-users\"></i>&nbsp;
                            ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? null), "group_name", array()), "html", null, true);
        echo "
                        </a>                                                
                    </div>
                    <ul class=\"nav navbar-top-links navbar-right\">
                        <li class=\"dropdown\">
                                <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"true\">
                                    <i class=\"fa fa-bell\"></i> <span class=\"label label-primary\">8</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-alerts\">
                                    <li>
                                        <a href=\"mailbox.html\">
                                            <div>
                                                <i class=\"fa fa-envelope fa-fw\"></i> 您有16条未读消息
                                                <span class=\"pull-right text-muted small\">4分钟前</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"profile.html\">
                                            <div>
                                                <i class=\"fa fa-qq fa-fw\"></i> 3条新回复
                                                <span class=\"pull-right text-muted small\">12分钟钱</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div class=\"text-center link-block\">
                                            <a class=\"J_menuItem\" href=\"notifications.html\" data-index=\"89\">
                                                <strong>查看所有 </strong>
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                        </li>                             
                   
                        <li  class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"\">
                                <span class=\"hidden-xs\">";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute(($context["userInfo"] ?? null), "username", array()), "html", null, true);
        echo "<b class=\"caret\"></b></span>
                                <span class=\"visible-xs\"><i class=\"fa fa-user\"></i></span>
                                
                            </a>
                            <ul class=\"dropdown-menu m-t-xs\">
                                <li><a title=\"站点设置\" class=\"J_menuItem\" href=\"";
        // line 116
        echo twig_escape_filter($this->env, base_url("admin/SiteSeting"), "html", null, true);
        echo "/#tab-contact\">设置</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
        // line 119
        echo twig_escape_filter($this->env, base_url("admin/Login/logout"), "html", null, true);
        echo "\">退出</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class=\"row content-tabs\">
                <button class=\"roll-nav roll-left J_tabLeft\"><i class=\"fa fa-backward\"></i>
                </button>
                <nav class=\"page-tabs J_menuTabs\">
                    <div class=\"page-tabs-content\">
                        <a href=\"javascript:;\" class=\"active J_menuTab\" data-type=\"home\" data-id=\"";
        // line 131
        echo twig_escape_filter($this->env, base_url("admin/System"), "html", null, true);
        echo "\">系统主页</a>
                    </div>
                </nav>
                <button class=\"roll-nav roll-right J_tabRight\"><i class=\"fa fa-forward\"></i>
                </button>
                <div class=\"btn-group roll-nav roll-right\">
                    <button class=\"dropdown J_tabClose\" data-toggle=\"dropdown\">关闭选项<span class=\"caret\"></span>
                    </button>
                    <ul role=\"menu\" class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"J_tabCloseAll\"><a>关闭所有</a>
                        </li>
                        <li class=\"J_tabCloseOther\"><a>关闭其它</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"row J_mainContent\" id=\"content-main\">
                <iframe class=\"J_iframe\" name=\"iframe0\" width=\"100%\" height=\"100%\" src=\"";
        // line 148
        echo twig_escape_filter($this->env, base_url("admin/System"), "html", null, true);
        echo "\" frameborder=\"0\" data-id=\"";
        echo twig_escape_filter($this->env, base_url("admin/System"), "html", null, true);
        echo "\"></iframe>
            </div>
            <div class=\"footer\">
                <div class=\"pull-right\">&copy; 2014-2016 <a href=\"http://www.eptonic.com/\" target=\"_blank\">Eptonic</a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>

";
    }

    // line 159
    public function block_script($context, array $blocks = array())
    {
        // line 160
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, base_url("public/admin/js/index.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "Index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 160,  313 => 159,  296 => 148,  276 => 131,  261 => 119,  255 => 116,  247 => 111,  204 => 71,  197 => 67,  192 => 65,  176 => 51,  169 => 49,  164 => 46,  157 => 45,  152 => 42,  142 => 39,  136 => 38,  134 => 37,  128 => 36,  125 => 35,  121 => 34,  118 => 33,  116 => 32,  111 => 30,  105 => 29,  103 => 28,  97 => 27,  94 => 26,  90 => 25,  87 => 24,  85 => 23,  61 => 22,  58 => 21,  54 => 20,  43 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Common/common.twig\" %}
{% block container %}
    <div id=\"wrapper\">
        <!--左侧导航开始-->
        <nav class=\"navbar-default navbar-static-side\" role=\"navigation\">
            <div class=\"nav-close\"><i class=\"fa fa-times-circle\"></i>
            </div>
            <div class=\"sidebar-collapse\">
                <ul class=\"nav\" id=\"side-menu\">
                    <li class=\"nav-header\">
                        <div class=\"dropdown profile-element\">
                            <span><img alt=\"image\" style=\"max-width: 140px;\" class=\"\" src=\"{{base_url('public/admin/img/logo.png')}}\" /></span>

                        </div>
                        <div class=\"logo-element\">
                            E
                        </div>
                    </li>

                    {% for item in userMenu %}
                        <li>
                            <a title=\"{{item.name}}\" href=\"{% if item.class %}{{base_url('admin/'~item.class)}}{% else %}javascript:void(0);{% endif %}\" {% if not item['child'] %}class=\"J_menuItem\"{% endif %}><i class=\"{{item.icon}}\"></i> <span class=\"nav-label\">{{item.name}}</span> <span class=\"fa {% if item['child'] %}arrow {% else %} circle {% endif %}\"></span></a>
                            {% if item['child'] %}
                                <ul class=\"nav nav-second-level collapse\">
                                    {% for sub in item.child %}
                                        <li >
                                            <a title=\"{{sub.name}}\"  class=\"J_menuItem\" href=\"{{base_url('admin/'~sub.class)}}\">
                                                {% if sub.icon %}
                                                    <i class=\"{{sub.icon}}\"></i>
                                                {% endif %}{{sub.name}}
                                            </a>
                                            {% if sub.child %}
                                                <ul class=\"nav nav-third-level collapse\">
                                                    {% for s in sub.child %}
                                                        <li >
                                                            <a title=\"{{s.name}}\"  class=\"J_menuItem\" href=\"{{base_url('admin/'~s.class)}}\">
                                                                {% if s.icon %}
                                                                    <i class=\"{{s.icon}}\"></i>
                                                                {% endif %}{{s.name}}
                                                            </a>
                                                        </li>
                                                    {% endfor %}                    
                                                </ul>
                                            {% endif %}
                                        </li>
                                    {% endfor %}                    
                                </ul>
                            {% endif %}
                        </li>
                     {% endfor %}
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id=\"page-wrapper\" class=\"gray-bg dashbard-1\">
            <div class=\"row border-bottom\">
                <nav class=\"navbar navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                    <div class=\"navbar-header row\">
                        <a class=\"navbar-minimalize minimalize-styl-2 btn btn-primary \" href=\"#\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                        <h2 class=\"text-success\" style=\"display: inline-block;\"></h2>  
                        
                        <a class=\"minimalize-styl-2 btn btn-success\" target=\"_blank\" title=\"主页\" href=\"{{base_url()}}\">
                            <i class=\"fa fa-home\"></i>&nbsp;
                            {{site.sitename}}
                        </a> 
                        <a class=\"minimalize-styl-2 btn btn-info\" title=\"\" href=\"#\">
                            <i class=\"fa fa-users\"></i>&nbsp;
                            {{userInfo.group_name}}
                        </a>                                                
                    </div>
                    <ul class=\"nav navbar-top-links navbar-right\">
                        <li class=\"dropdown\">
                                <a class=\"dropdown-toggle count-info\" data-toggle=\"dropdown\" href=\"#\" aria-expanded=\"true\">
                                    <i class=\"fa fa-bell\"></i> <span class=\"label label-primary\">8</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-alerts\">
                                    <li>
                                        <a href=\"mailbox.html\">
                                            <div>
                                                <i class=\"fa fa-envelope fa-fw\"></i> 您有16条未读消息
                                                <span class=\"pull-right text-muted small\">4分钟前</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <a href=\"profile.html\">
                                            <div>
                                                <i class=\"fa fa-qq fa-fw\"></i> 3条新回复
                                                <span class=\"pull-right text-muted small\">12分钟钱</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div class=\"text-center link-block\">
                                            <a class=\"J_menuItem\" href=\"notifications.html\" data-index=\"89\">
                                                <strong>查看所有 </strong>
                                                <i class=\"fa fa-angle-right\"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                        </li>                             
                   
                        <li  class=\"dropdown\">
                            <a data-toggle=\"dropdown\" class=\"\">
                                <span class=\"hidden-xs\">{{userInfo.username}}<b class=\"caret\"></b></span>
                                <span class=\"visible-xs\"><i class=\"fa fa-user\"></i></span>
                                
                            </a>
                            <ul class=\"dropdown-menu m-t-xs\">
                                <li><a title=\"站点设置\" class=\"J_menuItem\" href=\"{{base_url('admin/SiteSeting')}}/#tab-contact\">设置</a>
                                </li>
                                <li class=\"divider\"></li>
                                <li><a href=\"{{base_url('admin/Login/logout')}}\">退出</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class=\"row content-tabs\">
                <button class=\"roll-nav roll-left J_tabLeft\"><i class=\"fa fa-backward\"></i>
                </button>
                <nav class=\"page-tabs J_menuTabs\">
                    <div class=\"page-tabs-content\">
                        <a href=\"javascript:;\" class=\"active J_menuTab\" data-type=\"home\" data-id=\"{{base_url('admin/System')}}\">系统主页</a>
                    </div>
                </nav>
                <button class=\"roll-nav roll-right J_tabRight\"><i class=\"fa fa-forward\"></i>
                </button>
                <div class=\"btn-group roll-nav roll-right\">
                    <button class=\"dropdown J_tabClose\" data-toggle=\"dropdown\">关闭选项<span class=\"caret\"></span>
                    </button>
                    <ul role=\"menu\" class=\"dropdown-menu dropdown-menu-right\">
                        <li class=\"J_tabCloseAll\"><a>关闭所有</a>
                        </li>
                        <li class=\"J_tabCloseOther\"><a>关闭其它</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=\"row J_mainContent\" id=\"content-main\">
                <iframe class=\"J_iframe\" name=\"iframe0\" width=\"100%\" height=\"100%\" src=\"{{base_url('admin/System')}}\" frameborder=\"0\" data-id=\"{{base_url('admin/System')}}\"></iframe>
            </div>
            <div class=\"footer\">
                <div class=\"pull-right\">&copy; 2014-2016 <a href=\"http://www.eptonic.com/\" target=\"_blank\">Eptonic</a>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>

{% endblock %}
{% block script %}
    <script src=\"{{base_url('public/admin/js/index.js')}}\"></script>
{% endblock %}", "Index/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\Index\\index.twig");
    }
}
