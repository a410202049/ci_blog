<?php

/* LinkCategory/index.twig */
class __TwigTemplate_f82125f24737873f5f7d1b539e6b498338a02dc04af76afa53162503643cf1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/iframe_common.twig", "LinkCategory/index.twig", 1);
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
        echo twig_escape_filter($this->env, base_url("admin/LinkCategory/index/1"), "html", null, true);
        echo "\">
\t                        <div class=\"row col-md-12\">
\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t    \t\t\t\t\t\t\t";
        // line 12
        if (checkAuth("LinkCategory", "order", ($context["uid"] ?? null))) {
            // line 13
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary add-field\" id=\"rule-order-btn\">排序</span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 15
        echo "\t    \t\t\t\t\t\t\t";
        if (checkAuth("LinkCategory", "add", ($context["uid"] ?? null))) {
            // line 16
            echo "\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-category\"><i class=\"fa fa-plus\"></i>&nbsp;添加分类
\t    \t\t\t\t\t\t\t</button>
\t    \t\t\t\t\t\t\t";
        }
        // line 19
        echo "\t                            </div>
\t                        </div>
                        </form>
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>
                                    \t<th width=\"60px\">排序</th>
                                    \t<th>identityKey</th> 
                                    \t<th>分类名称</th>                                  
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categorys"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            echo "                                    <tr>  
                                    \t<td>
\t                                        <input class=\"form-control order\" name=\"order[";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "sort", array()), "html", null, true);
            echo "\" type=\"text\">
                                        </td>

                                        <td>
\t                                        ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "identity_key", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
\t                                        ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                        \t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 47
            if (checkAuth("LinkCategory", "edit", ($context["uid"] ?? null))) {
                // line 48
                echo "\t\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-btn\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
\t\t                                        ";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 51
            if (checkAuth("LinkCategory", "del", ($context["uid"] ?? null))) {
                // line 52
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" title=\"删除\"><i class=\"fa fa-trash\"></i></a>
\t                                            ";
            }
            // line 54
            echo "                                        \t
                                        </td>
                                    </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                                </tbody>
                            </table>
                        </div>
                        <div class=\"fixed-table-pagination col-md-12\">
                        \t<div class=\"pull-left pagination-detail\">
                        \t\t<span class=\"pagination-info\">共<strong>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "total", array()), "html", null, true);
        echo "</strong>条记录 &nbsp;<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "nowindex", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "totalpage", array()), "html", null, true);
        echo "</strong>页</span>
                    \t\t</div>
                            ";
        // line 65
        echo "  
                             ";
        // line 66
        echo $this->getAttribute(($context["pager"] ?? null), "show", array(0 => 1), "method");
        echo "
                            ";
        // line 68
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 75
    public function block_script($context, array $blocks = array())
    {
        // line 76
        echo "    <script>
        \$(document).ready(function(){
        \t\$('.add-category').click(function(){
\t        \t\tlayer.open({
\t\t\t\t\t  type: 1,
\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t  title:'添加分类',
\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t  content: 
\t\t\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">identityKey:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-identityKey\" placeholder=\"identityKey\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类名称:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-category\" placeholder=\"分类名称\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-category-btn\">添加</span>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t        \t'</form></div>',
\t\t\t\t\t});

        \t})
        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar category = {};
        \t\t\$.ajax({
        \t\t\turl: '";
        // line 113
        echo twig_escape_filter($this->env, base_url("admin/LinkCategory/getCategoryInfo"), "html", null, true);
        echo "',
        \t\t\ttype: 'POST',
        \t\t\tdataType: 'json',
        \t\t\tdata: {cid: \$this.attr('data-id')},
        \t\t\ttimeout:4000,
        \t\t\tasync:false,
        \t\t\tbeforeSend:function(){
                \t\tlayer.load(2);
            \t\t}
        \t\t})
        \t\t.done(function(data) {
\t    \t\t\tif(data.status==1){
        \t\t\t\tcategory = (data.data)
        \t\t\t}else{
        \t\t\t\tcommon.ajaxError(data)
        \t\t\t}
        \t\t})
        \t\t.fail(function() {
        \t\t})
        \t\t.always(function() {
        \t\t\tlayer.closeAll('loading');
        \t\t});

\t        \t\tdomHTML='<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">identityKey:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-identityKey\" placeholder=\"identityKey\" value=\"'+category.identity_key+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类名称:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-category\" placeholder=\"分类名称\" value=\"'+category.name+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

            
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"edit-category-btn\" data-id=\"'+category.id+'\">添加</span>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t        \t'</form></div>',

\t\t\t\t\tlayer.open({
\t\t\t\t\t  type: 1,
\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t  title:'编辑用户',
\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t  content:domHTML,
\t\t\t\t\t  success:function(){
\t\t\t\t\t  \t\t\$('#edit-pid').val(category.pid)

\t\t\t\t\t  }
\t\t\t\t\t});

   \t\t
        \t})
\t    　　\$(\".delete-btn\").click(function(){
\t    　　　　var id = \$(this).data('id');
                layer.confirm('你确定删除此分类？', {icon: 3, title:'确定删除分类'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"";
        // line 179
        echo twig_escape_filter($this->env, base_url("admin/LinkCategory/del"), "html", null, true);
        echo "\",
                    data:{cid:id},
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

        \$('#rule-order-btn').click(function(){
            \$.ajax({
             type: \"POST\",
             url: \"";
        // line 198
        echo twig_escape_filter($this->env, base_url("admin/LinkCategory/order"), "html", null, true);
        echo "\",
             data: \$(\".order\").serialize(),
             dataType: \"json\",
             success: function(data){
                if(data.status=='1'){
                    layer.msg(data.message,{icon: 1});
                    window.location.reload();
                }else{
                    layer.msg(data.message,{icon: 2});
                }
             }})
        })

\t\t\t\$(document).on(\"click\", \"#add-category-btn\", function(){
\t\t\t   var data = {
\t\t\t   \t\tname:\$(\"#add-category\").val(),
\t\t\t   \t\tidentityKey:\$('#add-identityKey').val(),
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 217
        echo twig_escape_filter($this->env, base_url("admin/LinkCategory/add"), "html", null, true);
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
\t\t\t\$(document).on(\"click\", \"#edit-category-btn\", function(){
\t\t\t   var data = {
\t\t\t   \t\tid:\$(this).data('id'),
\t\t\t   \t\tname:\$(\"#edit-category\").val(),
\t\t\t   \t\tidentityKey:\$('#edit-identityKey').val(),
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 252
        echo twig_escape_filter($this->env, base_url("admin/LinkCategory/edit"), "html", null, true);
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

    \t});



    </script>
";
    }

    public function getTemplateName()
    {
        return "LinkCategory/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 252,  322 => 217,  300 => 198,  278 => 179,  209 => 113,  170 => 76,  167 => 75,  157 => 68,  153 => 66,  150 => 65,  141 => 63,  134 => 58,  125 => 54,  119 => 52,  117 => 51,  114 => 50,  108 => 48,  106 => 47,  99 => 43,  93 => 40,  84 => 36,  80 => 34,  76 => 33,  60 => 19,  55 => 16,  52 => 15,  48 => 13,  46 => 12,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
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
                    \t<form action=\"{{base_url('admin/LinkCategory/index/1')}}\">
\t                        <div class=\"row col-md-12\">
\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t    \t\t\t\t\t\t\t{% if checkAuth('LinkCategory','order',uid) %}
\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary add-field\" id=\"rule-order-btn\">排序</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t    \t\t\t\t\t\t\t{% if checkAuth('LinkCategory','add',uid) %}
\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-category\"><i class=\"fa fa-plus\"></i>&nbsp;添加分类
\t    \t\t\t\t\t\t\t</button>
\t    \t\t\t\t\t\t\t{% endif %}
\t                            </div>
\t                        </div>
                        </form>
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>
                                    \t<th width=\"60px\">排序</th>
                                    \t<th>identityKey</th> 
                                    \t<th>分类名称</th>                                  
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for category in categorys %}
                                    <tr>  
                                    \t<td>
\t                                        <input class=\"form-control order\" name=\"order[{{category.id}}]\" value=\"{{category.sort}}\" type=\"text\">
                                        </td>

                                        <td>
\t                                        {{category.identity_key}}
                                        </td>
                                        <td>
\t                                        {{category.name}}
                                        </td>
                                        <td>
                                        \t
\t\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('LinkCategory','edit',uid) %}
\t\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-btn\" data-id=\"{{category.id}}\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
\t\t                                        {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('LinkCategory','del',uid) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"{{category.id}}\" title=\"删除\"><i class=\"fa fa-trash\"></i></a>
\t                                            {% endif %}
                                        \t
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
        \t\$('.add-category').click(function(){
\t        \t\tlayer.open({
\t\t\t\t\t  type: 1,
\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t  title:'添加分类',
\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t  content: 
\t\t\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">identityKey:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-identityKey\" placeholder=\"identityKey\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类名称:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-category\" placeholder=\"分类名称\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-category-btn\">添加</span>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t        \t'</form></div>',
\t\t\t\t\t});

        \t})
        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar category = {};
        \t\t\$.ajax({
        \t\t\turl: '{{base_url(\"admin/LinkCategory/getCategoryInfo\")}}',
        \t\t\ttype: 'POST',
        \t\t\tdataType: 'json',
        \t\t\tdata: {cid: \$this.attr('data-id')},
        \t\t\ttimeout:4000,
        \t\t\tasync:false,
        \t\t\tbeforeSend:function(){
                \t\tlayer.load(2);
            \t\t}
        \t\t})
        \t\t.done(function(data) {
\t    \t\t\tif(data.status==1){
        \t\t\t\tcategory = (data.data)
        \t\t\t}else{
        \t\t\t\tcommon.ajaxError(data)
        \t\t\t}
        \t\t})
        \t\t.fail(function() {
        \t\t})
        \t\t.always(function() {
        \t\t\tlayer.closeAll('loading');
        \t\t});

\t        \t\tdomHTML='<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">identityKey:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-identityKey\" placeholder=\"identityKey\" value=\"'+category.identity_key+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类名称:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-category\" placeholder=\"分类名称\" value=\"'+category.name+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

            
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"edit-category-btn\" data-id=\"'+category.id+'\">添加</span>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t        \t'</form></div>',

\t\t\t\t\tlayer.open({
\t\t\t\t\t  type: 1,
\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t  title:'编辑用户',
\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t  content:domHTML,
\t\t\t\t\t  success:function(){
\t\t\t\t\t  \t\t\$('#edit-pid').val(category.pid)

\t\t\t\t\t  }
\t\t\t\t\t});

   \t\t
        \t})
\t    　　\$(\".delete-btn\").click(function(){
\t    　　　　var id = \$(this).data('id');
                layer.confirm('你确定删除此分类？', {icon: 3, title:'确定删除分类'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"{{base_url('admin/LinkCategory/del')}}\",
                    data:{cid:id},
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

        \$('#rule-order-btn').click(function(){
            \$.ajax({
             type: \"POST\",
             url: \"{{base_url('admin/LinkCategory/order')}}\",
             data: \$(\".order\").serialize(),
             dataType: \"json\",
             success: function(data){
                if(data.status=='1'){
                    layer.msg(data.message,{icon: 1});
                    window.location.reload();
                }else{
                    layer.msg(data.message,{icon: 2});
                }
             }})
        })

\t\t\t\$(document).on(\"click\", \"#add-category-btn\", function(){
\t\t\t   var data = {
\t\t\t   \t\tname:\$(\"#add-category\").val(),
\t\t\t   \t\tidentityKey:\$('#add-identityKey').val(),
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/LinkCategory/add\")}}',
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
\t\t\t\$(document).on(\"click\", \"#edit-category-btn\", function(){
\t\t\t   var data = {
\t\t\t   \t\tid:\$(this).data('id'),
\t\t\t   \t\tname:\$(\"#edit-category\").val(),
\t\t\t   \t\tidentityKey:\$('#edit-identityKey').val(),
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/LinkCategory/edit\")}}',
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

    \t});



    </script>
{% endblock %}", "LinkCategory/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\LinkCategory\\index.twig");
    }
}
