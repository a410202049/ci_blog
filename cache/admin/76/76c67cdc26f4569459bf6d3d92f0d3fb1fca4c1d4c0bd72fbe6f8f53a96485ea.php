<?php

/* Article/index.twig */
class __TwigTemplate_c8cc500ae61dc5163273b989f1e15c92c094a0c91078d53027a688deb6fdbabd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/iframe_common.twig", "Article/index.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'script' => array($this, 'block_script'),
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
        echo "    <div class=\"wrapper wrapper-content\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-content container-fluid\">
                        <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("admin/Article/index/1"), "html", null, true);
        echo "\">
                            <div class=\"row col-md-12\">
                                <div class=\"col-md-3 form-group\">
                                    <label for=\"search\">文章标题</label>
                                    <input type=\"text\" class=\"form-control\" name=\"title\" id=\"search\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["getArr"] ?? null), "title", array()), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"col-md-3 form-group\">
                                    <label for=\"search-username\">文章分类</label>
                                    <select class=\"form-control\" name=\"cid\">
                                            <option value=\"-1\">全部</option>
                                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cate"]) {
            // line 19
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["getArr"] ?? null), "cid", array()) == $this->getAttribute($context["cate"], "id", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cate"], "name", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                                    </select>
                                </div>
                                <div class=\"col-md-3 form-group\">
                                    <label for=\"null\" class=\"center-block\">&nbsp;</label>
                                    <button type=\"submit\" class=\"btn btn-primary\" id=\"search-btn\"><i class=\"fa fa-search\"></i>搜索</button>
                                    <button type=\"button\" class=\"btn btn-primary add-article\"><i class=\"fa fa-plus\"></i>&nbsp;添加文章
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>                                     
                                        <th>id</th>
                                        <th>文章标题</th>
                                        <th>文章分类</th>
                                        <th>标签</th>
                                        <th>创建时间</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 46
            echo "                                    
                                    <tr>
                                        <td>
                                            ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "cname", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["article"], "tags", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 59
                echo "                                                <span  class=\"btn btn-xs\" style=\"background:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "color", array()), "html", null, true);
                echo ";color:";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "fontcolor", array()), "html", null, true);
                echo ";border:1px solid ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "bordercolor", array()), "html", null, true);
                echo "\">
                                                    ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "
                                                </span>
                                                
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                                        </td>                                        
                                        <td>
                                            ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "createtime", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 69
            if ($this->getAttribute($context["article"], "is_show", array())) {
                // line 70
                echo "                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary release-btn btn-status\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\">已发布</a>
                                            ";
            } else {
                // line 72
                echo "                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger btn-draft btn-status\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "\">草稿</a>
                                            ";
            }
            // line 74
            echo "                                        </td>
                                        <td>
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-btn\" data-id=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
            echo "\" title=\"删除\"><i class=\"fa fa-trash\">                                            
                                        </td>
                                    </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                                </tbody>
                            </table>
                        </div>
                        <div class=\"fixed-table-pagination col-md-12\">
                            <div class=\"pull-left pagination-detail\">
                                <span class=\"pagination-info\">共<strong>";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "total", array()), "html", null, true);
        echo "</strong>条记录 &nbsp;<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "nowindex", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "totalpage", array()), "html", null, true);
        echo "</strong>页</span>
                            </div>
                            ";
        // line 88
        echo "  
                             ";
        // line 89
        echo $this->getAttribute(($context["pager"] ?? null), "show", array(0 => 1), "method");
        echo "
                            ";
        // line 91
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 98
    public function block_script($context, array $blocks = array())
    {
        // line 99
        echo "<script>
    \$(document).ready(function(){
        \$(document).on('click','.add-article',function(){
            var openLayer = layer.open({
              type: 2,
              closeBtn:1,
              title:'添加文章',
              shadeClose: false, //开启遮罩关闭
              area: ['70%', '90%'],
              maxmin: true,
              content:'";
        // line 109
        echo twig_escape_filter($this->env, base_url("admin/Article/addTpl"), "html", null, true);
        echo "'
            });
            layer.full(openLayer)
        })
        \$(document).on('click','.edit-btn',function(){
            var id = \$(this).data('id')
            var openLayer = layer.open({
              type: 2,
              closeBtn:1,
              title:'编辑',
              shadeClose: false, //开启遮罩关闭
              area: ['600px', 'auto'],
              maxmin:true,
              content:'";
        // line 122
        echo twig_escape_filter($this->env, base_url("admin/Article/editTpl"), "html", null, true);
        echo "?id='+id,
            });
            layer.full(openLayer)

                
        })

        \$(document).on('click','.delete-btn',function(e){
            var \$this = \$(this);
            var id = \$this.data(\"id\");
            layer.msg(\"确认删除\",{
                time:0,
                btn:['确认','取消'],
                yes:function(){
                    \$.ajax({
                        url: '";
        // line 137
        echo twig_escape_filter($this->env, base_url("admin/Article/del"), "html", null, true);
        echo "',
                        type: 'POST',
                        dataType: 'json',
                        data: {'id': id},
                        timeout:4000,
                        beforeSend:function(){
                            layer.load(2);
                        }
                    })
                    .done(function(e) {
                        if (e.status!=1) {
                            common.ajaxError(e);
                            return false;
                        }
                        layer.closeAll();
                        window.location.reload();
                        parent.layer.msg(e.message,{
                            icon:1
                        });                

                    })
                    .fail(function(e) {
                        common.ajaxError(e)
                    })
                    .always(function() {
                        layer.closeAll('loading');
                    });
                    
                }
            })
        })


        \$(document).on('click','.btn-status',function(e){
            var \$this = \$(this);
            var id = \$this.data(\"id\");
            layer.msg(\"改变发布状态\",{
                time:0,
                btn:['确认','取消'],
                yes:function(){
                    \$.ajax({
                        url: '";
        // line 178
        echo twig_escape_filter($this->env, base_url("admin/Article/status"), "html", null, true);
        echo "',
                        type: 'POST',
                        dataType: 'json',
                        data: {'id': id},
                        timeout:4000,
                        beforeSend:function(){
                            layer.load(2);
                        }
                    })
                    .done(function(e) {
                        if (e.status!=1) {
                            common.ajaxError(e);
                            return false;
                        }
                        layer.closeAll();
                        window.location.reload();
                        parent.layer.msg(e.message,{
                            icon:1
                        });                

                    })
                    .fail(function(e) {
                        common.ajaxError(e)
                    })
                    .always(function() {
                        layer.closeAll('loading');
                    });
                    
                }
            })
        })

        \$(document).on(\"click\", \"#add-user\", function(){
           var data = {
                realname:\$(\"#add-realname\").val(),
                email:\$('#add-email').val(),
                user_role:\$('#add-role').val(),
                type:'add'
           }
           \$.ajax({
                url: '";
        // line 218
        echo twig_escape_filter($this->env, base_url("admin/Article/editUser"), "html", null, true);
        echo "',
                type: 'POST',
                dataType: 'json',
                timeout:4000,
                data:data,
                beforeSend:function(){
                    layer.load(2);
                }
           })
           .done(function(e) {
                if (e.status!=1) {
                    common.ajaxError(e);
                    return false;
                }
                layer.closeAll();
                window.location.href = window.location.href;
                parent.layer.msg(e.message,{
                    icon:1
                });
           })
           .fail(function(e) {
                common.ajaxError(e)
           })
           .always(function() {
                layer.closeAll('loading');
           });
           
        });
        \$(document).on('click','#edit-user',function(){
            var data = {
                uid:\$(this).data('id'),
                realname:\$(\"#edit-realname\").val(),
                email:\$('#edit-email').val(),
                user_role:\$('#edit-role').val(),
                type:'edit'
           }
           \$.ajax({
                url: '";
        // line 255
        echo twig_escape_filter($this->env, base_url("admin/Article/editUser"), "html", null, true);
        echo "',
                type: 'POST',
                dataType: 'json',
                timeout:4000,
                data:data,
                beforeSend:function(){
                    layer.load(2);
                }
           })
           .done(function(e) {
                if (e.status!=1) {
                    common.ajaxError(e);
                    return false;
                }
                layer.closeAll();
                window.location.reload();
                
                parent.layer.msg(e.message,{
                    icon:1
                });
           })
           .fail(function(e) {
                common.ajaxError(e)
           })
           .always(function() {
                layer.closeAll('loading');
           });
        })

    });

</script>
";
    }

    public function getTemplateName()
    {
        return "Article/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  401 => 255,  361 => 218,  318 => 178,  274 => 137,  256 => 122,  240 => 109,  228 => 99,  225 => 98,  215 => 91,  211 => 89,  208 => 88,  199 => 86,  192 => 81,  182 => 77,  178 => 76,  174 => 74,  168 => 72,  162 => 70,  160 => 69,  154 => 66,  150 => 64,  140 => 60,  131 => 59,  127 => 58,  121 => 55,  115 => 52,  109 => 49,  104 => 46,  100 => 45,  74 => 21,  59 => 19,  55 => 18,  46 => 12,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
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
    <div class=\"wrapper wrapper-content\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"ibox float-e-margins\">
                    <div class=\"ibox-content container-fluid\">
                        <form action=\"{{base_url('admin/Article/index/1')}}\">
                            <div class=\"row col-md-12\">
                                <div class=\"col-md-3 form-group\">
                                    <label for=\"search\">文章标题</label>
                                    <input type=\"text\" class=\"form-control\" name=\"title\" id=\"search\" value=\"{{getArr.title}}\">
                                </div>
                                <div class=\"col-md-3 form-group\">
                                    <label for=\"search-username\">文章分类</label>
                                    <select class=\"form-control\" name=\"cid\">
                                            <option value=\"-1\">全部</option>
                                        {% for cate in categorys %}
                                            <option value=\"{{ cate.id }}\" {% if getArr.cid == cate.id %}selected=\"selected\"{% endif %}>{{ cate.name }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div class=\"col-md-3 form-group\">
                                    <label for=\"null\" class=\"center-block\">&nbsp;</label>
                                    <button type=\"submit\" class=\"btn btn-primary\" id=\"search-btn\"><i class=\"fa fa-search\"></i>搜索</button>
                                    <button type=\"button\" class=\"btn btn-primary add-article\"><i class=\"fa fa-plus\"></i>&nbsp;添加文章
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>                                     
                                        <th>id</th>
                                        <th>文章标题</th>
                                        <th>文章分类</th>
                                        <th>标签</th>
                                        <th>创建时间</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for article in articles %}
                                    
                                    <tr>
                                        <td>
                                            {{article.id}}
                                        </td>
                                        <td>
                                            {{article.title}}
                                        </td>
                                        <td>
                                            {{article.cname}}
                                        </td>
                                        <td>
                                            {% for item in article.tags %}
                                                <span  class=\"btn btn-xs\" style=\"background:{{item.color}};color:{{item.fontcolor}};border:1px solid {{item.bordercolor}}\">
                                                    {{item.name}}
                                                </span>
                                                
                                            {% endfor %}
                                        </td>                                        
                                        <td>
                                            {{article.createtime}}
                                        </td>
                                        <td>
                                            {% if article.is_show %}
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary release-btn btn-status\" data-id=\"{{article.id}}\">已发布</a>
                                            {% else %}
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger btn-draft btn-status\" data-id=\"{{article.id}}\">草稿</a>
                                            {% endif %}
                                        </td>
                                        <td>
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-btn\" data-id=\"{{article.id}}\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"{{article.id}}\" title=\"删除\"><i class=\"fa fa-trash\">                                            
                                        </td>
                                    </tr>
                                 {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        <div class=\"fixed-table-pagination col-md-12\">
                            <div class=\"pull-left pagination-detail\">
                                <span class=\"pagination-info\">共<strong>{{pager.total}}</strong>条记录 &nbsp;<strong>{{pager.nowindex}}/{{pager.totalpage}}</strong>页</span>
                            </div>
                            {% autoescape true %}  
                             {{pager.show(1)|raw }}
                            {% endautoescape %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block script %}
<script>
    \$(document).ready(function(){
        \$(document).on('click','.add-article',function(){
            var openLayer = layer.open({
              type: 2,
              closeBtn:1,
              title:'添加文章',
              shadeClose: false, //开启遮罩关闭
              area: ['70%', '90%'],
              maxmin: true,
              content:'{{base_url(\"admin/Article/addTpl\")}}'
            });
            layer.full(openLayer)
        })
        \$(document).on('click','.edit-btn',function(){
            var id = \$(this).data('id')
            var openLayer = layer.open({
              type: 2,
              closeBtn:1,
              title:'编辑',
              shadeClose: false, //开启遮罩关闭
              area: ['600px', 'auto'],
              maxmin:true,
              content:'{{base_url(\"admin/Article/editTpl\")}}?id='+id,
            });
            layer.full(openLayer)

                
        })

        \$(document).on('click','.delete-btn',function(e){
            var \$this = \$(this);
            var id = \$this.data(\"id\");
            layer.msg(\"确认删除\",{
                time:0,
                btn:['确认','取消'],
                yes:function(){
                    \$.ajax({
                        url: '{{base_url(\"admin/Article/del\")}}',
                        type: 'POST',
                        dataType: 'json',
                        data: {'id': id},
                        timeout:4000,
                        beforeSend:function(){
                            layer.load(2);
                        }
                    })
                    .done(function(e) {
                        if (e.status!=1) {
                            common.ajaxError(e);
                            return false;
                        }
                        layer.closeAll();
                        window.location.reload();
                        parent.layer.msg(e.message,{
                            icon:1
                        });                

                    })
                    .fail(function(e) {
                        common.ajaxError(e)
                    })
                    .always(function() {
                        layer.closeAll('loading');
                    });
                    
                }
            })
        })


        \$(document).on('click','.btn-status',function(e){
            var \$this = \$(this);
            var id = \$this.data(\"id\");
            layer.msg(\"改变发布状态\",{
                time:0,
                btn:['确认','取消'],
                yes:function(){
                    \$.ajax({
                        url: '{{base_url(\"admin/Article/status\")}}',
                        type: 'POST',
                        dataType: 'json',
                        data: {'id': id},
                        timeout:4000,
                        beforeSend:function(){
                            layer.load(2);
                        }
                    })
                    .done(function(e) {
                        if (e.status!=1) {
                            common.ajaxError(e);
                            return false;
                        }
                        layer.closeAll();
                        window.location.reload();
                        parent.layer.msg(e.message,{
                            icon:1
                        });                

                    })
                    .fail(function(e) {
                        common.ajaxError(e)
                    })
                    .always(function() {
                        layer.closeAll('loading');
                    });
                    
                }
            })
        })

        \$(document).on(\"click\", \"#add-user\", function(){
           var data = {
                realname:\$(\"#add-realname\").val(),
                email:\$('#add-email').val(),
                user_role:\$('#add-role').val(),
                type:'add'
           }
           \$.ajax({
                url: '{{base_url(\"admin/Article/editUser\")}}',
                type: 'POST',
                dataType: 'json',
                timeout:4000,
                data:data,
                beforeSend:function(){
                    layer.load(2);
                }
           })
           .done(function(e) {
                if (e.status!=1) {
                    common.ajaxError(e);
                    return false;
                }
                layer.closeAll();
                window.location.href = window.location.href;
                parent.layer.msg(e.message,{
                    icon:1
                });
           })
           .fail(function(e) {
                common.ajaxError(e)
           })
           .always(function() {
                layer.closeAll('loading');
           });
           
        });
        \$(document).on('click','#edit-user',function(){
            var data = {
                uid:\$(this).data('id'),
                realname:\$(\"#edit-realname\").val(),
                email:\$('#edit-email').val(),
                user_role:\$('#edit-role').val(),
                type:'edit'
           }
           \$.ajax({
                url: '{{base_url(\"admin/Article/editUser\")}}',
                type: 'POST',
                dataType: 'json',
                timeout:4000,
                data:data,
                beforeSend:function(){
                    layer.load(2);
                }
           })
           .done(function(e) {
                if (e.status!=1) {
                    common.ajaxError(e);
                    return false;
                }
                layer.closeAll();
                window.location.reload();
                
                parent.layer.msg(e.message,{
                    icon:1
                });
           })
           .fail(function(e) {
                common.ajaxError(e)
           })
           .always(function() {
                layer.closeAll('loading');
           });
        })

    });

</script>
{% endblock %}", "Article/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\Article\\index.twig");
    }
}
