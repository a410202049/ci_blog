<?php

/* ArticleComment/index.twig */
class __TwigTemplate_c482356931202274f56d8b159da1f1fe7565ff68e976281768fe745c0024afb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/iframe_common.twig", "ArticleComment/index.twig", 1);
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
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>                                     
                                        <th>名称</th>
                                        <th>邮箱</th>
                                        <th>网址</th>
                                        <th>留言内容</th>
                                        <th>文章标题</th>
                                        <th>回复内容</th>
                                        <th>创建时间</th>
                                        <th>状态</th>
                                        <th width=\"10%\">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 25
            echo "                                    
                                    <tr>
                                        <td>
                                            ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "nickname", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "email", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "website", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "title", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "reply", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "createtime", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 49
            if ($this->getAttribute($context["comment"], "is_show", array())) {
                // line 50
                echo "                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary release-btn btn-status\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\">已审核</a>
                                            ";
            } else {
                // line 52
                echo "                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger btn-draft btn-status\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
                echo "\">未审核</a>
                                            ";
            }
            // line 54
            echo "                                        </td>
                                        <td>
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary fa-reply-btn\" data-id=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\" title=\"回复\">回复</a>
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "\" title=\"删除\"><i class=\"fa fa-trash\">                                            
                                        </td>
                                    </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </tbody>
                            </table>
                        </div>
                        <div class=\"fixed-table-pagination col-md-12\">
                            <div class=\"pull-left pagination-detail\">
                                <span class=\"pagination-info\">共<strong>";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "total", array()), "html", null, true);
        echo "</strong>条记录 &nbsp;<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "nowindex", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "totalpage", array()), "html", null, true);
        echo "</strong>页</span>
                            </div>
                            ";
        // line 68
        echo "  
                             ";
        // line 69
        echo $this->getAttribute(($context["pager"] ?? null), "show", array(0 => 1), "method");
        echo "
                            ";
        // line 71
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 78
    public function block_script($context, array $blocks = array())
    {
        // line 79
        echo "<script>
    \$(document).ready(function(){

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
        // line 91
        echo twig_escape_filter($this->env, base_url("admin/Article/editTpl"), "html", null, true);
        echo "?id='+id,
            });
            layer.full(openLayer)

                
        })


        \$('.fa-reply-btn').on('click', function(event) {
          var id = \$(this).data('id');
          layer.prompt({title: '回复内容', formType: 2}, function(text, index){
                \$.ajax({
                    url: '";
        // line 103
        echo twig_escape_filter($this->env, base_url("admin/ArticleComment/reply"), "html", null, true);
        echo "',
                    type: 'POST',
                    dataType: 'json',
                    data: {'id': id,data:text},
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


          });
            /* Act on the event */
        }); 

        \$(document).on('click','.delete-btn',function(e){
            var \$this = \$(this);
            var id = \$this.data(\"id\");
            layer.msg(\"确认删除\",{
                time:0,
                btn:['确认','取消'],
                yes:function(){
                    \$.ajax({
                        url: '";
        // line 144
        echo twig_escape_filter($this->env, base_url("admin/ArticleComment/del"), "html", null, true);
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
        // line 185
        echo twig_escape_filter($this->env, base_url("admin/ArticleComment/status"), "html", null, true);
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
        // line 225
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
        // line 262
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
        return "ArticleComment/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 262,  334 => 225,  291 => 185,  247 => 144,  203 => 103,  188 => 91,  174 => 79,  171 => 78,  161 => 71,  157 => 69,  154 => 68,  145 => 66,  138 => 61,  128 => 57,  124 => 56,  120 => 54,  114 => 52,  108 => 50,  106 => 49,  100 => 46,  94 => 43,  88 => 40,  82 => 37,  76 => 34,  70 => 31,  64 => 28,  59 => 25,  55 => 24,  32 => 3,  29 => 2,  11 => 1,);
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
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>                                     
                                        <th>名称</th>
                                        <th>邮箱</th>
                                        <th>网址</th>
                                        <th>留言内容</th>
                                        <th>文章标题</th>
                                        <th>回复内容</th>
                                        <th>创建时间</th>
                                        <th>状态</th>
                                        <th width=\"10%\">操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for comment in comments %}
                                    
                                    <tr>
                                        <td>
                                            {{comment.nickname}}
                                        </td>
                                        <td>
                                            {{comment.email}}
                                        </td>
                                        <td>
                                            {{comment.website}}
                                        </td>
                                        <td>
                                            {{comment.content}}
                                        </td>
                                        <td>
                                            {{comment.title}}
                                        </td>
                                        <td>
                                            {{comment.reply}}
                                        </td>
                                        <td>
                                            {{comment.createtime}}
                                        </td>
                                        <td>
                                            {% if comment.is_show %}
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary release-btn btn-status\" data-id=\"{{comment.id}}\">已审核</a>
                                            {% else %}
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger btn-draft btn-status\" data-id=\"{{comment.id}}\">未审核</a>
                                            {% endif %}
                                        </td>
                                        <td>
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary fa-reply-btn\" data-id=\"{{comment.id}}\" title=\"回复\">回复</a>
                                            <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"{{comment.id}}\" title=\"删除\"><i class=\"fa fa-trash\">                                            
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


        \$('.fa-reply-btn').on('click', function(event) {
          var id = \$(this).data('id');
          layer.prompt({title: '回复内容', formType: 2}, function(text, index){
                \$.ajax({
                    url: '{{base_url(\"admin/ArticleComment/reply\")}}',
                    type: 'POST',
                    dataType: 'json',
                    data: {'id': id,data:text},
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


          });
            /* Act on the event */
        }); 

        \$(document).on('click','.delete-btn',function(e){
            var \$this = \$(this);
            var id = \$this.data(\"id\");
            layer.msg(\"确认删除\",{
                time:0,
                btn:['确认','取消'],
                yes:function(){
                    \$.ajax({
                        url: '{{base_url(\"admin/ArticleComment/del\")}}',
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
                        url: '{{base_url(\"admin/ArticleComment/status\")}}',
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
{% endblock %}", "ArticleComment/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\ArticleComment\\index.twig");
    }
}
