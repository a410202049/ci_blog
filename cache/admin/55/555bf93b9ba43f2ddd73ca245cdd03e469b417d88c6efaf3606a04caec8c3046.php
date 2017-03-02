<?php

/* Tags/index.twig */
class __TwigTemplate_9e651e6d1030de13eb46159646d493512fd1bea43bad75a69bb9b82e563b2d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/iframe_common.twig", "Tags/index.twig", 1);
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
                    \t<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, base_url("admin/Tags/index/1"), "html", null, true);
        echo "\">
\t                        <div class=\"row col-md-12\">
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">标签名称</label>
\t                        \t\t<input type=\"text\" class=\"form-control\" name=\"tagname\" id=\"search-username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["getArr"] ?? null), "tagname", array()), "html", null, true);
        echo "\">
\t                        \t</div>

\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t                            \t<button type=\"submit\" class=\"btn btn-primary\" id=\"search-btn\"><i class=\"fa fa-search\"></i>搜索</button>
\t    \t\t\t\t\t\t\t";
        // line 18
        if (checkAuth("Tags", "add", ($context["uid"] ?? null))) {
            // line 19
            echo "\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-tag\"><i class=\"fa fa-plus\"></i>&nbsp;添加标签
\t    \t\t\t\t\t\t\t</button>
\t    \t\t\t\t\t\t\t";
        }
        // line 22
        echo "
\t                            </div>
\t                        </div>
                        </form>
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>
                                    \t<th>id</th>  
                                    \t<th>标签名称</th>                                  
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 37
            echo "                                    <tr>  
                                    \t<td>
\t                                        ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm\" style=\"background:";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "color", array()), "html", null, true);
            echo ";color:";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "fontcolor", array()), "html", null, true);
            echo ";border:1px solid ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "bordercolor", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</a>
\t                                        
                                        </td>

                                        <td>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 47
            if (checkAuth("Tags", "edit", ($context["uid"] ?? null))) {
                // line 48
                echo "\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-btn\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                echo "\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
\t                                        ";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (checkAuth("Tags", "del", ($context["uid"] ?? null))) {
                // line 51
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
                echo "\" title=\"删除\"><i class=\"fa fa-trash\"></i></a>
                                            ";
            }
            // line 53
            echo "                                        </td>
                                    </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                                </tbody>
                            </table>
                        </div>
                        <div class=\"fixed-table-pagination col-md-12\">
                        \t<div class=\"pull-left pagination-detail\">
                        \t\t<span class=\"pagination-info\">共<strong>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "total", array()), "html", null, true);
        echo "</strong>条记录 &nbsp;<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "nowindex", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "totalpage", array()), "html", null, true);
        echo "</strong>页</span>
                    \t\t</div>
                            ";
        // line 63
        echo "  
                             ";
        // line 64
        echo $this->getAttribute(($context["pager"] ?? null), "show", array(0 => 1), "method");
        echo "
                            ";
        // line 66
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 73
    public function block_script($context, array $blocks = array())
    {
        // line 74
        echo "    <script>
        \$(document).ready(function(){
        \t\$('.add-tag').click(function(){
        \t\tlayer.open({
\t\t\t\t  type: 1,
\t\t\t\t  closeBtn:2,
\t\t\t\t  title:'添加标签',
\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t  content: 
\t\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">标签名称:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-tagname\" placeholder=\"标签名称\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">标签颜色:</label>'+
\t\t\t             \t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-tagcolor\" class=\"form-control\" placeholder=\"标签颜色\" value=\"#1ab394\">'+
\t\t\t                '</div>'+

\t                \t\t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-fontcolor\" class=\"form-control\" placeholder=\"字体颜色\" value=\"#ffffff\">'+
\t\t\t                '</div>'+

\t                \t\t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-bordercolor\" class=\"form-control\" placeholder=\"边框颜色\" value=\"#1ab394\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
            
\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-tag-btn\">添加</span>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t        \t'</form></div>',
\t\t\t\t});

        \t})
        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar id = \$(this).data('id');

\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 121
        echo twig_escape_filter($this->env, base_url("admin/Tags/getTagInfo"), "html", null, true);
        echo "',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \ttimeout:4000,
\t\t\t\t   \tdata:{id:id},
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t}
\t\t\t   })
        \t\t.then(function(data){
        \t\t\tdata= data.data;
\t        \t\tdomHTML='<div class=\"ibox-content\">'+
\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">标签名称:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-tagname\" placeholder=\"标签名称\" value=\"'+data.name+'\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">标签颜色:</label>'+
\t\t\t             \t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-tagcolor\" class=\"form-control\" placeholder=\"标签颜色\" value=\"'+data.color+'\">'+
\t\t\t                '</div>'+

\t                \t    '<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-fontcolor\" class=\"form-control\" placeholder=\"字体颜色\" value=\"'+data.fontcolor+'\">'+
\t\t\t                '</div>'+

\t                \t\t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-bordercolor\" class=\"form-control\" placeholder=\"边框颜色\" value=\"'+data.bordercolor+'\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
            
\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t                    '<span class=\"btn btn-primary\" id=\"edit-tag-btn\" data-id=\"'+data.id+'\">编辑</span>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t        \t'</form></div>',

\t\t\t\t\t\t\tlayer.open({
\t\t\t\t\t\t\t  type: 1,
\t\t\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t\t\t  title:'编辑用户',
\t\t\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t\t\t  content:domHTML,
\t\t\t\t\t\t\t  success:function(){
\t\t\t\t\t\t\t  \tlayer.closeAll('loading');
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t});

        \t\t\t
        \t\t})        \t\t
        \t})
\t    　　\$(\".delete-btn\").click(function(){
\t    　　　　var id = \$(this).data('id');
                layer.confirm('你确定删除此标签？', {icon: 3, title:'确定删除标签'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"";
        // line 182
        echo twig_escape_filter($this->env, base_url("admin/Tags/del"), "html", null, true);
        echo "\",
                    data:{id:id},
                    dataType:\"json\",
                    success:function(data){
                        if(data.status=='1'){
                            layer.msg(data.message,{icon: 1});
                            window.location.reload(true);
                            layer.close(index);
                        }else{
                            layer.msg(data.message,{icon: 2});
                        }
                    }
                })
             })
\t    　　});

\t\t\t\$(document).on(\"click\", \"#add-tag-btn\", function(){
\t\t\t   var data = {
\t\t\t   \t\tname:\$(\"#add-tagname\").val(),
\t\t\t   \t\tcolor:\$('#add-tagcolor').val(),
\t   \t\t\t\tfontcolor:\$('#add-fontcolor').val(),
\t\t\t   \t\tbordercolor:\$('#add-bordercolor').val()
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 206
        echo twig_escape_filter($this->env, base_url("admin/Tags/add"), "html", null, true);
        echo "',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \ttimeout:4000,
\t\t\t\t   \tdata:data,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t}
\t\t\t   })
\t\t\t   .done(function(e) {
\t\t\t   \t\tif (e.status!=1) {
\t\t\t   \t\t\tcommon.ajaxError(e);
\t\t\t   \t\t\treturn false;
\t\t\t   \t\t}
\t\t\t   \t\tlayer.closeAll();
\t\t\t   \t\twindow.location.href = window.location.href;
\t\t\t   \t\tparent.layer.msg(e.message,{
\t\t\t   \t\t\ticon:1
\t\t\t   \t\t});
\t\t\t   })
\t\t\t   .fail(function(e) {
\t\t\t   \t\tcommon.ajaxError(e)
\t\t\t   })
\t\t\t   .always(function() {
\t\t\t\t   \tlayer.closeAll('loading');
\t\t\t   });
\t\t\t   
\t\t\t});


\t\t\t\$(document).on('click','#edit-tag-btn',function(){
\t\t\t\tvar data = {
\t\t\t\t\tid:\$(this).data('id'),
\t\t\t   \t\tname:\$(\"#edit-tagname\").val(),
\t\t\t   \t\tcolor:\$('#edit-tagcolor').val(),
\t\t\t   \t\tfontcolor:\$('#edit-fontcolor').val(),
\t\t\t   \t\tbordercolor:\$('#edit-bordercolor').val()
\t\t\t   }

\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 246
        echo twig_escape_filter($this->env, base_url("admin/Tags/edit"), "html", null, true);
        echo "',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \ttimeout:4000,
\t\t\t\t   \tdata:data,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t}
\t\t\t   })
\t\t\t   .done(function(e) {
\t\t\t   \t\tif (e.status!=1) {
\t\t\t   \t\t\tcommon.ajaxError(e);
\t\t\t   \t\t\treturn false;
\t\t\t   \t\t}
\t\t\t   \t\tlayer.closeAll();
\t\t\t   \t\twindow.location.reload();
\t\t\t   \t\t
\t\t\t   \t\tparent.layer.msg(e.message,{
\t\t\t   \t\t\ticon:1
\t\t\t   \t\t});
\t\t\t   })
\t\t\t   .fail(function(e) {
\t\t\t   \t\tcommon.ajaxError(e)
\t\t\t   })
\t\t\t   .always(function() {
\t\t\t\t   \tlayer.closeAll('loading');
\t\t\t   });
\t\t\t})

    \t});



    </script>
";
    }

    public function getTemplateName()
    {
        return "Tags/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 246,  307 => 206,  280 => 182,  216 => 121,  167 => 74,  164 => 73,  154 => 66,  150 => 64,  147 => 63,  138 => 61,  131 => 56,  123 => 53,  117 => 51,  114 => 50,  108 => 48,  106 => 47,  92 => 42,  86 => 39,  82 => 37,  78 => 36,  62 => 22,  57 => 19,  55 => 18,  46 => 12,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
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
                    \t<form action=\"{{base_url('admin/Tags/index/1')}}\">
\t                        <div class=\"row col-md-12\">
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">标签名称</label>
\t                        \t\t<input type=\"text\" class=\"form-control\" name=\"tagname\" id=\"search-username\" value=\"{{getArr.tagname}}\">
\t                        \t</div>

\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t                            \t<button type=\"submit\" class=\"btn btn-primary\" id=\"search-btn\"><i class=\"fa fa-search\"></i>搜索</button>
\t    \t\t\t\t\t\t\t{% if checkAuth('Tags','add',uid) %}
\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-tag\"><i class=\"fa fa-plus\"></i>&nbsp;添加标签
\t    \t\t\t\t\t\t\t</button>
\t    \t\t\t\t\t\t\t{% endif %}

\t                            </div>
\t                        </div>
                        </form>
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>
                                    \t<th>id</th>  
                                    \t<th>标签名称</th>                                  
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for tag in tags %}
                                    <tr>  
                                    \t<td>
\t                                        {{tag.id}}
                                        </td>
                                        <td>
                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm\" style=\"background:{{tag.color}};color:{{tag.fontcolor}};border:1px solid {{tag.bordercolor}}\">{{tag.name}}</a>
\t                                        
                                        </td>

                                        <td>
\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('Tags','edit',uid) %}
\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-btn\" data-id=\"{{tag.id}}\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
\t                                        {% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('Tags','del',uid) %}
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"{{tag.id}}\" title=\"删除\"><i class=\"fa fa-trash\"></i></a>
                                            {% endif %}
                                        </td>
                                    </tr>
                                 {% endfor %}
                                </tbody>
                            </table>
                        </div>
                        <div class=\"fixed-table-pagination col-md-12\">
                        \t<div class=\"pull-left pagination-detail\">
                        \t\t<span class=\"pagination-info\">共<strong>{{pager.total}}</strong>条记录 &nbsp;<strong>{{pager.nowindex}}/{{pager.totalpage}}</strong>页</span>
                    \t\t</div>
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
        \t\$('.add-tag').click(function(){
        \t\tlayer.open({
\t\t\t\t  type: 1,
\t\t\t\t  closeBtn:2,
\t\t\t\t  title:'添加标签',
\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t  content: 
\t\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">标签名称:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-tagname\" placeholder=\"标签名称\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">标签颜色:</label>'+
\t\t\t             \t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-tagcolor\" class=\"form-control\" placeholder=\"标签颜色\" value=\"#1ab394\">'+
\t\t\t                '</div>'+

\t                \t\t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-fontcolor\" class=\"form-control\" placeholder=\"字体颜色\" value=\"#ffffff\">'+
\t\t\t                '</div>'+

\t                \t\t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-bordercolor\" class=\"form-control\" placeholder=\"边框颜色\" value=\"#1ab394\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
            
\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-tag-btn\">添加</span>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t        \t'</form></div>',
\t\t\t\t});

        \t})
        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar id = \$(this).data('id');

\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/Tags/getTagInfo\")}}',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \ttimeout:4000,
\t\t\t\t   \tdata:{id:id},
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t}
\t\t\t   })
        \t\t.then(function(data){
        \t\t\tdata= data.data;
\t        \t\tdomHTML='<div class=\"ibox-content\">'+
\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">标签名称:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-tagname\" placeholder=\"标签名称\" value=\"'+data.name+'\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">标签颜色:</label>'+
\t\t\t             \t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-tagcolor\" class=\"form-control\" placeholder=\"标签颜色\" value=\"'+data.color+'\">'+
\t\t\t                '</div>'+

\t                \t    '<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-fontcolor\" class=\"form-control\" placeholder=\"字体颜色\" value=\"'+data.fontcolor+'\">'+
\t\t\t                '</div>'+

\t                \t\t'<div class=\"col-sm-3\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-bordercolor\" class=\"form-control\" placeholder=\"边框颜色\" value=\"'+data.bordercolor+'\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
            
\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t                    '<span class=\"btn btn-primary\" id=\"edit-tag-btn\" data-id=\"'+data.id+'\">编辑</span>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t        \t'</form></div>',

\t\t\t\t\t\t\tlayer.open({
\t\t\t\t\t\t\t  type: 1,
\t\t\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t\t\t  title:'编辑用户',
\t\t\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t\t\t  content:domHTML,
\t\t\t\t\t\t\t  success:function(){
\t\t\t\t\t\t\t  \tlayer.closeAll('loading');
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t});

        \t\t\t
        \t\t})        \t\t
        \t})
\t    　　\$(\".delete-btn\").click(function(){
\t    　　　　var id = \$(this).data('id');
                layer.confirm('你确定删除此标签？', {icon: 3, title:'确定删除标签'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"{{base_url('admin/Tags/del')}}\",
                    data:{id:id},
                    dataType:\"json\",
                    success:function(data){
                        if(data.status=='1'){
                            layer.msg(data.message,{icon: 1});
                            window.location.reload(true);
                            layer.close(index);
                        }else{
                            layer.msg(data.message,{icon: 2});
                        }
                    }
                })
             })
\t    　　});

\t\t\t\$(document).on(\"click\", \"#add-tag-btn\", function(){
\t\t\t   var data = {
\t\t\t   \t\tname:\$(\"#add-tagname\").val(),
\t\t\t   \t\tcolor:\$('#add-tagcolor').val(),
\t   \t\t\t\tfontcolor:\$('#add-fontcolor').val(),
\t\t\t   \t\tbordercolor:\$('#add-bordercolor').val()
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/Tags/add\")}}',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \ttimeout:4000,
\t\t\t\t   \tdata:data,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t}
\t\t\t   })
\t\t\t   .done(function(e) {
\t\t\t   \t\tif (e.status!=1) {
\t\t\t   \t\t\tcommon.ajaxError(e);
\t\t\t   \t\t\treturn false;
\t\t\t   \t\t}
\t\t\t   \t\tlayer.closeAll();
\t\t\t   \t\twindow.location.href = window.location.href;
\t\t\t   \t\tparent.layer.msg(e.message,{
\t\t\t   \t\t\ticon:1
\t\t\t   \t\t});
\t\t\t   })
\t\t\t   .fail(function(e) {
\t\t\t   \t\tcommon.ajaxError(e)
\t\t\t   })
\t\t\t   .always(function() {
\t\t\t\t   \tlayer.closeAll('loading');
\t\t\t   });
\t\t\t   
\t\t\t});


\t\t\t\$(document).on('click','#edit-tag-btn',function(){
\t\t\t\tvar data = {
\t\t\t\t\tid:\$(this).data('id'),
\t\t\t   \t\tname:\$(\"#edit-tagname\").val(),
\t\t\t   \t\tcolor:\$('#edit-tagcolor').val(),
\t\t\t   \t\tfontcolor:\$('#edit-fontcolor').val(),
\t\t\t   \t\tbordercolor:\$('#edit-bordercolor').val()
\t\t\t   }

\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/Tags/edit\")}}',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \ttimeout:4000,
\t\t\t\t   \tdata:data,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t}
\t\t\t   })
\t\t\t   .done(function(e) {
\t\t\t   \t\tif (e.status!=1) {
\t\t\t   \t\t\tcommon.ajaxError(e);
\t\t\t   \t\t\treturn false;
\t\t\t   \t\t}
\t\t\t   \t\tlayer.closeAll();
\t\t\t   \t\twindow.location.reload();
\t\t\t   \t\t
\t\t\t   \t\tparent.layer.msg(e.message,{
\t\t\t   \t\t\ticon:1
\t\t\t   \t\t});
\t\t\t   })
\t\t\t   .fail(function(e) {
\t\t\t   \t\tcommon.ajaxError(e)
\t\t\t   })
\t\t\t   .always(function() {
\t\t\t\t   \tlayer.closeAll('loading');
\t\t\t   });
\t\t\t})

    \t});



    </script>
{% endblock %}", "Tags/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\Tags\\index.twig");
    }
}
