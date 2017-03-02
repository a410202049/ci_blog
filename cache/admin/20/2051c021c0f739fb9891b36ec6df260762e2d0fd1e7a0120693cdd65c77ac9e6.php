<?php

/* ArticleCategory/index.twig */
class __TwigTemplate_d1fe9287c120e67eed43460cf8907eb387ca3c65dd2bbb3496bb836b659038de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/iframe_common.twig", "ArticleCategory/index.twig", 1);
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
        echo twig_escape_filter($this->env, base_url("admin/ArticleCategory/index/1"), "html", null, true);
        echo "\">
\t                        <div class=\"row col-md-12\">
\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t    \t\t\t\t\t\t\t";
        // line 12
        if (checkAuth("ArticleCategory", "order", ($context["uid"] ?? null))) {
            // line 13
            echo "\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary add-field\" id=\"rule-order-btn\">排序</span>
\t\t\t\t\t\t\t\t\t";
        }
        // line 15
        echo "\t    \t\t\t\t\t\t\t";
        if (checkAuth("ArticleCategory", "add", ($context["uid"] ?? null))) {
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
                                    \t<th>id</th>  
                                    \t<th>分类名称</th>                                  
                                        <th>分类描述</th>
                                        <th>父级分类</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 35
        echo "  
                                        ";
        // line 36
        echo ($context["tr"] ?? null);
        echo "
                                    ";
        // line 38
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 47
    public function block_script($context, array $blocks = array())
    {
        // line 48
        echo "    <script>
        \$(document).ready(function(){
        \t\$('.add-category').click(function(){
        \t\t\$.get('";
        // line 51
        echo twig_escape_filter($this->env, base_url("admin/ArticleCategory/getCategorys"), "html", null, true);
        echo "',function(data) {

        \t\t},'json')
        \t\t.then(function(data){
\t        \t\tvar \$options = '';
\t\t\t\t\tfor(var i in data.data){ 
\t\t\t\t\t\t\$options += '<option value=\"'+data.data[i].id+'\">'+data.data[i].name+'</option>'
\t\t\t\t\t}
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
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类名称:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-category\" placeholder=\"分类名称\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类描述:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-description\" placeholder=\"分类描述\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<label class=\"col-sm-3 control-label\">父级分类:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-pid\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"0\">顶级菜单</option>'+
\t\t\t\t\t\t\t\t\t\t\$options+
\t\t\t\t\t\t\t\t\t'</select>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+\t            
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-category-btn\">添加</span>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t        \t'</form></div>',
\t\t\t\t\t});
        \t\t})

        \t})
        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar category = {};
        \t\t\$.ajax({
        \t\t\turl: '";
        // line 105
        echo twig_escape_filter($this->env, base_url("admin/ArticleCategory/getCategoryInfo"), "html", null, true);
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

        \t\t});
        \t\t\$.ajax({
        \t\t\turl: '";
        // line 128
        echo twig_escape_filter($this->env, base_url("admin/ArticleCategory/getCurrentCategorys"), "html", null, true);
        echo "',
        \t\t\ttype: 'POST',
        \t\t\tdataType: 'json',
        \t\t\tdata: {cid: \$this.attr('data-id')},
        \t\t\ttimeout:4000,
        \t\t\tasync:false
        \t\t})
        \t\t.then(function(role){
\t        \t\tvar domHTML = '';
\t        \t\tvar \$options = '';
\t        \t\tfor(var i in role.data){ 
\t\t\t\t\t\t\$options += '<option value=\"'+role.data[i].id+'\">'+role.data[i].name+'</option>'
\t\t\t\t\t}
\t        \t\tdomHTML='<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类名称:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-category\" placeholder=\"分类名称\" value=\"'+category.name+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类描述:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-description\" placeholder=\"分类描述\" value=\"'+category.description+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<label class=\"col-sm-3 control-label\">父级分类:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-pid\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"0\">顶级菜单</option>'+
\t\t\t\t\t\t\t\t\t\t\$options+
\t\t\t\t\t\t\t\t\t'</select>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+\t            
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

        \t\t\t
        \t\t}).always(function() {
        \t\t\tlayer.closeAll('loading');
        \t\t});      \t\t
        \t})
\t    　　\$(\".delete-btn\").click(function(){
\t    　　　　var id = \$(this).data('val');
                layer.confirm('你确定删除此分类？', {icon: 3, title:'确定删除分类'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"";
        // line 196
        echo twig_escape_filter($this->env, base_url("admin/ArticleCategory/del"), "html", null, true);
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
        // line 215
        echo twig_escape_filter($this->env, base_url("admin/ArticleCategory/order"), "html", null, true);
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
\t\t\t   \t\tdescription:\$('#add-description').val(),
\t\t\t   \t\tpid:\$('#add-pid').val()
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 235
        echo twig_escape_filter($this->env, base_url("admin/ArticleCategory/add"), "html", null, true);
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
\t\t\t   \t\tdescription:\$('#edit-description').val(),
\t\t\t   \t\tpid:\$('#edit-pid').val()
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 271
        echo twig_escape_filter($this->env, base_url("admin/ArticleCategory/edit"), "html", null, true);
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
        return "ArticleCategory/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 271,  304 => 235,  281 => 215,  259 => 196,  188 => 128,  162 => 105,  105 => 51,  100 => 48,  97 => 47,  85 => 38,  81 => 36,  78 => 35,  60 => 19,  55 => 16,  52 => 15,  48 => 13,  46 => 12,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
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
                    \t<form action=\"{{base_url('admin/ArticleCategory/index/1')}}\">
\t                        <div class=\"row col-md-12\">
\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t    \t\t\t\t\t\t\t{% if checkAuth('ArticleCategory','order',uid) %}
\t\t\t\t\t\t\t\t\t\t<span class=\"btn btn-primary add-field\" id=\"rule-order-btn\">排序</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t    \t\t\t\t\t\t\t{% if checkAuth('ArticleCategory','add',uid) %}
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
                                    \t<th>id</th>  
                                    \t<th>分类名称</th>                                  
                                        <th>分类描述</th>
                                        <th>父级分类</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% autoescape true %}  
                                        {{tr|raw}}
                                    {% endautoescape %}
                                </tbody>
                            </table>
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
        \t\t\$.get('{{base_url(\"admin/ArticleCategory/getCategorys\")}}',function(data) {

        \t\t},'json')
        \t\t.then(function(data){
\t        \t\tvar \$options = '';
\t\t\t\t\tfor(var i in data.data){ 
\t\t\t\t\t\t\$options += '<option value=\"'+data.data[i].id+'\">'+data.data[i].name+'</option>'
\t\t\t\t\t}
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
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类名称:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-category\" placeholder=\"分类名称\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类描述:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-description\" placeholder=\"分类描述\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<label class=\"col-sm-3 control-label\">父级分类:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-pid\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"0\">顶级菜单</option>'+
\t\t\t\t\t\t\t\t\t\t\$options+
\t\t\t\t\t\t\t\t\t'</select>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+\t            
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-category-btn\">添加</span>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t        \t'</form></div>',
\t\t\t\t\t});
        \t\t})

        \t})
        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar category = {};
        \t\t\$.ajax({
        \t\t\turl: '{{base_url(\"admin/ArticleCategory/getCategoryInfo\")}}',
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

        \t\t});
        \t\t\$.ajax({
        \t\t\turl: '{{base_url(\"admin/ArticleCategory/getCurrentCategorys\")}}',
        \t\t\ttype: 'POST',
        \t\t\tdataType: 'json',
        \t\t\tdata: {cid: \$this.attr('data-id')},
        \t\t\ttimeout:4000,
        \t\t\tasync:false
        \t\t})
        \t\t.then(function(role){
\t        \t\tvar domHTML = '';
\t        \t\tvar \$options = '';
\t        \t\tfor(var i in role.data){ 
\t\t\t\t\t\t\$options += '<option value=\"'+role.data[i].id+'\">'+role.data[i].name+'</option>'
\t\t\t\t\t}
\t        \t\tdomHTML='<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类名称:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-category\" placeholder=\"分类名称\" value=\"'+category.name+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">分类描述:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-description\" placeholder=\"分类描述\" value=\"'+category.description+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<label class=\"col-sm-3 control-label\">父级分类:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-pid\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"0\">顶级菜单</option>'+
\t\t\t\t\t\t\t\t\t\t\$options+
\t\t\t\t\t\t\t\t\t'</select>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+\t            
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

        \t\t\t
        \t\t}).always(function() {
        \t\t\tlayer.closeAll('loading');
        \t\t});      \t\t
        \t})
\t    　　\$(\".delete-btn\").click(function(){
\t    　　　　var id = \$(this).data('val');
                layer.confirm('你确定删除此分类？', {icon: 3, title:'确定删除分类'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"{{base_url('admin/ArticleCategory/del')}}\",
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
             url: \"{{base_url('admin/ArticleCategory/order')}}\",
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
\t\t\t   \t\tdescription:\$('#add-description').val(),
\t\t\t   \t\tpid:\$('#add-pid').val()
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/ArticleCategory/add\")}}',
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
\t\t\t   \t\tdescription:\$('#edit-description').val(),
\t\t\t   \t\tpid:\$('#edit-pid').val()
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/ArticleCategory/edit\")}}',
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
{% endblock %}", "ArticleCategory/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\ArticleCategory\\index.twig");
    }
}
