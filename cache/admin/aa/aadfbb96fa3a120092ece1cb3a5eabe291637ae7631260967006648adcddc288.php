<?php

/* System/index.twig */
class __TwigTemplate_c951c7ac12cab5845eba13e95afa3404c95cc4a16ad570ca679ab314de7bea6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/iframe_common.twig", "System/index.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "Common/iframe_common.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<body class=\"gray-bg\">
    <div class=\"wrapper wrapper-content animated fadeIn\">
        <div class=\"row\">                       
            <div class=\"col-sm-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-success pull-right\">实时</span>
                        <h5>站点</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">865,5</h1>
                        <div class=\"stat-percent font-bold text-success\"><i class=\"fa fa-level-up\"></i> 12
                        </div>
                        <small>站点数量</small>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-primary pull-right\">实时</span>
                        <h5>访问</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">106,120</h1>
                        
                        <small>总访问量</small>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-success pull-right\">实时</span>
                        <h5>用户信息</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">865,5</h1>
                        <div class=\"stat-percent font-bold text-success\"><i class=\"fa fa-level-up\"></i> 12
                        </div>
                        <small>站点数量</small>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-primary pull-right\">实时</span>
                        <h5>访问</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">106,120</h1>
                        
                        <small>总访问量</small>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>服务器信息</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <td>PHP 版本：</td>
                                    <td>";
        // line 78
        echo twig_escape_filter($this->env, ($context["PHP_VERSION"] ?? null), "html", null, true);
        echo " </td>
                                    <td>MySQL 版本：</td>
                                    <td>";
        // line 80
        echo twig_escape_filter($this->env, ($context["mysql_get_server_info"] ?? null), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>服务器操作系统：</td>
                                    <td>";
        // line 84
        echo twig_escape_filter($this->env, ($context["os"] ?? null), "html", null, true);
        echo "</td>
                                    <td>文件上传限制：</td>
                                    <td>";
        // line 86
        echo twig_escape_filter($this->env, ($context["max_filesize"] ?? null), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <td>GD 库支持：</td>
                                    <td>";
        // line 90
        echo twig_escape_filter($this->env, ($context["gd"] ?? null), "html", null, true);
        echo "</td>
                                    <td>Web 服务器：</td>
                                    <td>";
        // line 92
        echo twig_escape_filter($this->env, ($context["web_server"] ?? null), "html", null, true);
        echo "</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>系统开发</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                               <td> 成都邑动有限公司： </td>
                               <td><a target=\"_blank\" href=\"http://www.eptonic.com\">http://www.eptonic.com</a></td>
                              </tr>
                              <tr>
                               <td> 贡献者： </td>
                               <td>kerry，whimsy</td>
                              </tr>
                              <tr>
                               <td> 系统使用协议： </td>
                               <td>企业内部系统，严禁开源</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
";
    }

    public function getTemplateName()
    {
        return "System/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 92,  132 => 90,  125 => 86,  120 => 84,  113 => 80,  108 => 78,  31 => 3,  28 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"Common/iframe_common.twig\" %}
{% block container %}
<body class=\"gray-bg\">
    <div class=\"wrapper wrapper-content animated fadeIn\">
        <div class=\"row\">                       
            <div class=\"col-sm-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-success pull-right\">实时</span>
                        <h5>站点</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">865,5</h1>
                        <div class=\"stat-percent font-bold text-success\"><i class=\"fa fa-level-up\"></i> 12
                        </div>
                        <small>站点数量</small>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-primary pull-right\">实时</span>
                        <h5>访问</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">106,120</h1>
                        
                        <small>总访问量</small>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-success pull-right\">实时</span>
                        <h5>用户信息</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">865,5</h1>
                        <div class=\"stat-percent font-bold text-success\"><i class=\"fa fa-level-up\"></i> 12
                        </div>
                        <small>站点数量</small>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-3\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <span class=\"label label-primary pull-right\">实时</span>
                        <h5>访问</h5>
                    </div>
                    <div class=\"ibox-content\">
                        <h1 class=\"no-margins\">106,120</h1>
                        
                        <small>总访问量</small>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>服务器信息</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                                    <td>PHP 版本：</td>
                                    <td>{{PHP_VERSION}} </td>
                                    <td>MySQL 版本：</td>
                                    <td>{{mysql_get_server_info}}</td>
                                </tr>
                                <tr>
                                    <td>服务器操作系统：</td>
                                    <td>{{os}}</td>
                                    <td>文件上传限制：</td>
                                    <td>{{max_filesize}}</td>
                                </tr>
                                <tr>
                                    <td>GD 库支持：</td>
                                    <td>{{gd}}</td>
                                    <td>Web 服务器：</td>
                                    <td>{{web_server}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-6\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-title\">
                        <h5>系统开发</h5>
                        <div class=\"ibox-tools\">
                            <a class=\"collapse-link\">
                                <i class=\"fa fa-chevron-up\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"ibox-content\">
                        <table class=\"table\">
                            <tbody>
                                <tr>
                               <td> 成都邑动有限公司： </td>
                               <td><a target=\"_blank\" href=\"http://www.eptonic.com\">http://www.eptonic.com</a></td>
                              </tr>
                              <tr>
                               <td> 贡献者： </td>
                               <td>kerry，whimsy</td>
                              </tr>
                              <tr>
                               <td> 系统使用协议： </td>
                               <td>企业内部系统，严禁开源</td>
                              </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
{% endblock %}", "System/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\System\\index.twig");
    }
}
