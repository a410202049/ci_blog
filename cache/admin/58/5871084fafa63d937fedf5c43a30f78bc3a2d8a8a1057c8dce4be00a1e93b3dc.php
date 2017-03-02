<?php

/* GroupManage/index.twig */
class __TwigTemplate_80dd3310e22924938b2e054659def86f89f19dcb63039038bbdf38326a1f9335 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/iframe_common.twig", "GroupManage/index.twig", 1);
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
        echo "<style src=\"base_url('public/admin/css/plugins/treeview/bootstrap-treeview.css')\">
</style>
<style>
\t .treeview .list-group-item{cursor:pointer}.treeview span.indent{margin-left:10px;margin-right:10px}.treeview span.icon{width:12px;margin-right:5px}.treeview .node-disabled{color:silver;cursor:not-allowed}.node-treeview-checkable{}.node-treeview-checkable:not(.node-disabled):hover{background-color:#F5F5F5;} 
</style>
    <div class=\"wrapper wrapper-content\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"ibox float-e-margins\">

                    <div class=\"ibox-content container-fluid\">
                    \t<form action=\"";
        // line 14
        echo twig_escape_filter($this->env, base_url("admin/GroupManage/index/1"), "html", null, true);
        echo "\">
\t                        <div class=\"row col-md-12\">
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">角色名称</label>
\t                        \t\t<input type=\"text\" class=\"form-control\" name=\"role_keywords\" id=\"role_keywords\" value=\"\">
\t                        \t</div>
\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t                            \t<button type=\"submit\" class=\"btn btn-primary\" id=\"search-btn\"><i class=\"fa fa-search\"></i>&nbsp;搜索</button>
\t\t\t\t\t\t\t\t\t";
        // line 23
        if (checkAuth("GroupManage", "add", ($context["uid"] ?? null))) {
            // line 24
            echo "\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-role\"><i class=\"fa fa-plus\"></i>&nbsp;添加
\t    \t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t";
        }
        // line 27
        echo "\t                            </div>
\t                        </div>
                        </form>
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>                                     
                                        <th>角色名称</th>
                                        <th>角色描述</th>
                                        <th>状态</th>
                                        <th>创建时间</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
\t\t\t\t\t\t\t\t";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groupData"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 43
            echo "\t                                <tr>
\t                                \t<td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "name", array()), "html", null, true);
            echo "</td>
\t                                \t<td>
\t                                \t\t
\t                                \t\t<span class=\"tooltip-content\" data-toggle=\"tooltip\" data-original-title=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "description", array()), "html", null, true);
            echo "\" data-placement=\"bottom\">";
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["group"], "description", array()), 0, 15), "html", null, true);
            echo "</span>
\t                                \t</td>
\t                                \t<td>
\t                                \t\t";
            // line 50
            if (($this->getAttribute($context["group"], "status", array()) == 1)) {
                // line 51
                echo "\t                                \t\t<label class=\"label label-primary\">激活</label>
\t                                \t\t";
            } elseif (($this->getAttribute(            // line 52
$context["group"], "status", array()) == 0)) {
                // line 53
                echo "\t                                \t\t<label class=\"label label-danger\">禁用</label>
\t                                \t\t";
            }
            // line 55
            echo "\t                            \t\t</td>\t
\t                                \t<td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "create_time", array()), "html", null, true);
            echo "</td>\t
\t                                \t<td>
\t                                \t\t";
            // line 58
            if (checkAuth("GroupManage", "isEnable", ($context["uid"] ?? null))) {
                // line 59
                echo "\t\t                                \t\t";
                if (($this->getAttribute($context["group"], "status", array()) == 1)) {
                    // line 60
                    echo "\t\t\t                                \t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger status-btn\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                    echo "\" title=\"禁用\">
\t\t\t                                \t\t\t<i class=\"fa fa-times\"></i>\t
\t\t                                \t\t\t</a>
\t\t                                \t\t";
                } elseif (($this->getAttribute(                // line 63
$context["group"], "status", array()) == 0)) {
                    // line 64
                    echo "\t\t\t                                \t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary status-btn\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                    echo "\" title=\"激活\">
\t\t\t                                \t\t\t<i class=\"fa fa-check\"></i>\t
\t\t                                \t\t\t</a>
\t\t                                \t\t";
                }
                // line 68
                echo "\t                                \t\t";
            }
            // line 69
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 70
            if (checkAuth("GroupManage", "grant", ($context["uid"] ?? null))) {
                // line 71
                echo "\t                                \t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-success auth-list\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" title=\"权限列表\"><i class=\"fa fa-list\"></i></a>
\t                                \t\t";
            }
            // line 73
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 74
            if (checkAuth("GroupManage", "edit", ($context["uid"] ?? null))) {
                // line 75
                echo "\t                                \t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-role\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 78
            if (checkAuth("GroupManage", "del", ($context["uid"] ?? null))) {
                // line 79
                echo "\t                                \t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "id", array()), "html", null, true);
                echo "\"><i class=\"fa fa-trash\"></i></a>
\t                                \t\t";
            }
            // line 81
            echo "
\t                                \t</td>
\t                                </tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "                                </tbody>
                            </table>
                        </div>
                        <div class=\"fixed-table-pagination col-md-12\">
                        \t<div class=\"pull-left pagination-detail\">
                        \t\t<span class=\"pagination-info\">共<strong>";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "total", array()), "html", null, true);
        echo "</strong>条记录 &nbsp;<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "nowindex", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "totalpage", array()), "html", null, true);
        echo "</strong>页</span>
                    \t\t</div>
                            ";
        // line 92
        echo "  
                             ";
        // line 93
        echo $this->getAttribute(($context["pager"] ?? null), "show", array(0 => 1), "method");
        echo "
                            ";
        // line 95
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 102
    public function block_script($context, array $blocks = array())
    {
        // line 103
        echo "<script src=\"";
        echo twig_escape_filter($this->env, base_url("public/admin/js/plugins/treeview/bootstrap-treeview.js"), "html", null, true);
        echo "\"></script>
<script>
\t\$(document).on('click', '.message-check-all', function(event) {
        \$(\".message-check-one\").prop(\"checked\", \$(this).prop(\"checked\"));
\t})

\tjQuery(document).ready(function(\$) {
\t\t\$('.tooltip-content').tooltip();
\t\t\$('.add-role').click(function(){
    \t\tlayer.open({
\t\t\t  type: 1,
\t\t\t  closeBtn:2,
\t\t\t  title:'添加角色',
\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t  area: ['600px', 'auto'],
\t\t\t  content: 
\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t  '<form class=\"form-horizontal\">'+
\t\t            '<div class=\"form-group must\">'+
\t\t            '<label class=\"col-sm-3 control-label\">角色名称:</label>'+
\t\t             \t'<div class=\"col-sm-8\">'+
\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-rolename\" placeholder=\"\">'+
\t\t                '</div>'+
\t\t            '</div>'+
\t\t            '<div class=\"form-group must\">'+
\t\t            '<label class=\"col-sm-3 control-label\">角色描述:</label>'+
\t\t             \t'<div class=\"col-sm-8\">'+
\t\t                    '<textarea type=\"text\" rows=\"4\" autocomplete=\"off\" id=\"add-description\" class=\"form-control\" placeholder=\"\"></textarea>'+
\t\t                '</div>'+
\t\t            '</div>'+           
\t\t            '<div class=\"form-group\">'+
\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t                    '<span class=\"btn btn-primary\" id=\"add-role\">添加</span>'+
\t\t                '</div>'+
\t\t            '</div>'+
\t        \t'</form></div>',
\t        \tsuccess:function(){
\t\t\t\t\t\t\t\t
\t        \t}
\t\t\t});

    \t});
    \t\$('.edit-role').click(function(){
    \t\tvar \$this = \$(this);
    \t\tvar role;
    \t\t\$.ajax({
    \t\t\turl: '";
        // line 149
        echo twig_escape_filter($this->env, base_url("admin/GroupManage/getRoleInfo"), "html", null, true);
        echo "',
    \t\t\ttype: 'POST',
    \t\t\tdataType: 'json',
    \t\t\tdata: {rid: \$this.data('id')},
    \t\t\ttimeout:4000,
    \t\t\tasync:false
    \t\t})
    \t\t.done(function(data) {
    \t\t\tif(data.status==1){
    \t\t\t\trole = (data.data)
    \t\t\t}else{
    \t\t\t\tcommon.ajaxError(data)
    \t\t\t}

    \t\t})
    \t\t.fail(function(e) {
    \t\t\tcommon.ajaxError(e);
    \t\t})
\t\t\tlayer.open({
\t\t\t  type: 1,
\t\t\t  closeBtn:2,
\t\t\t  title:'编辑角色',
\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t  area: ['600px', 'auto'],
\t\t\t  content:'<div class=\"ibox-content\">'+
\t\t\t  '<form class=\"form-horizontal\">'+
\t\t            '<div class=\"form-group must\">'+
\t\t            '<label class=\"col-sm-3 control-label\">角色名称:</label>'+
\t\t             \t'<div class=\"col-sm-8\">'+
\t\t                    '<input type=\"text\" value=\"'+role.name+'\" autocomplete=\"off\" class=\"form-control\" id=\"edit-rolename\" placeholder=\"\">'+
\t\t                '</div>'+
\t\t            '</div>'+
\t\t            '<div class=\"form-group must\">'+
\t\t            '<label class=\"col-sm-3 control-label\">角色描述:</label>'+
\t\t             \t'<div class=\"col-sm-8\">'+
\t\t                    '<textarea type=\"text\" rows=\"4\" autocomplete=\"off\" id=\"edit-description\" class=\"form-control\" placeholder=\"\">'+role.description+'</textarea>'+
\t\t                '</div>'+
\t\t            '</div>'+           
\t\t            '<div class=\"form-group\">'+
\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t                    '<span class=\"btn btn-primary\" data-id=\"'+role.id+'\" id=\"edit-role\">编辑</span>'+
\t\t                '</div>'+
\t\t            '</div>'+
\t        \t'</form></div>',
\t\t\t});
    \t});

\t \tvar nbsp = \"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\";
\t\tfunction role_tree(table,icon_str = '') {\t
\t\t    tree = '';
\t\t    var number=1;
\t\t    for (key in table){
\t\t    \tchecked = table[key]['active'] == '1' ? 'checked=\"checked\"':' ' ;
\t\t    \ttree+='<tr><td><input name=\"checked['+table[key]['id']+']\" value=\"'+table[key]['id']+'\" type=\"checkbox\" class=\"message-check-one\" '+checked+' /></td>';
\t\t    \ttree+='<td>'+icon_str+table[key]['name']+'</td>';
\t\t    \ttree+='<td>';
\t\t    \tfor(k in table[key]['method']){
\t\t    \t\tchildChecked = table[key]['method'][k]['active'] == '1' ? 'checked=\"checked\"':' ' ;
\t\t    \t\ttree+='<input name=\"checked['+table[key]['id']+'][]\" value=\"'+table[key]['method'][k]['name']+'\" type=\"checkbox\" class=\"message-check-method\" '+childChecked+'/> '+table[key]['method'][k]['name']+'&nbsp;&nbsp;&nbsp;&nbsp;';
\t\t    \t}
\t\t    \ttree+='</td></tr>';
\t\t    \tif(table[key]['child']){
\t\t    \t\tk = '';
\t\t\t\t\tif(number==table[key]['child'].length){
\t\t\t\t\t\ticon_str= icon_str ? nbsp : '';
\t\t\t\t\t}
\t\t    \t\ttree+=role_tree(table[key]['child'],icon_str+nbsp);
\t\t    \t\tnumber++;
\t\t    \t}
\t\t    }
\t\t    return tree;        
\t\t}

    \t\$(document).on('click', '.auth-list', function(event) {
    \t\tevent.preventDefault();
    \t\tvar id = \$(this).attr('data-id');
    \t\tvar defaultData;
    \t\t\$.ajax({
    \t\t\turl: '";
        // line 227
        echo twig_escape_filter($this->env, base_url("admin/GroupManage/getAuthList"), "html", null, true);
        echo "',
    \t\t\ttype: 'POST',
    \t\t\tdataType: 'json',
    \t\t\tasync:false,
    \t\t\tdata: {rid:id },
    \t\t\ttimeout:4000,
    \t\t\tbeforeSend:function(){
    \t\t\t\tlayer.load(2);
    \t\t\t}
    \t\t})
    \t\t.done(function(e) {
    \t\t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
    \t\t\tdefaultData = e.data;
    \t\t})
\t\t\t.fail(function(e) {
\t\t\t\tcommon.ajaxError(e)
\t\t\t})
\t\t\t.always(function() {
\t\t\t\tlayer.closeAll('loading');
\t\t\t});
    \t\t

    \t\tvar tableStr = '<table class=\"table table-striped table-hover\">';
    \t\ttableStr+='<thead><tr><th width=\"14%\">';
    \t\ttableStr+='<input type=\"checkbox\" class=\"message-check-all\" />';
    \t\ttableStr+=' 全选</th><th>方法</th><th>功能</th></tr></thead>';
    \t\ttableStr+='<tbody>';

    \t\ttableStr+= role_tree(defaultData);



    \t\ttableStr+='</tbody></table><div class=\"form-group text-center fixed-bottom\"><button class=\"btn btn-primary\" data-id=\"'+id+'\" id=\"edit-auth\">提交</button></div>';

    \t\t
          
\t\t\tlayer.open({
\t\t\t  type: 1,
\t\t\t  closeBtn:2,
\t\t\t  title:'授权',
\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t  area: ['700px', '85%'],
\t\t\t  content:tableStr,
\t\t\t  success:function(){



\t\t\t  }
\t\t\t})
    \t});



\t\t\$(document).on('click', '#edit-auth', function(event) {
\t\t\tevent.preventDefault();
\t\t\t
\t\t\tvar id = \$(this).data('id')
\t\t\tvar auth = [];
\t\t\tvar data = [];
\t\t\t// var check_boxes = \$(\"input[type=checkbox][class!=message-check-all]\").prop(\"checked\",true).serialize();
\t\t\tvar check_boxes = \$('input[type=checkbox]:checked').serialize();
\t\t\t\$.ajax({
\t\t\t\turl: '";
        // line 292
        echo twig_escape_filter($this->env, base_url("admin/GroupManage/grant"), "html", null, true);
        echo "',
\t\t\t\ttype: 'POST',
\t\t\t\tdataType: 'json',
\t\t\t\tdata:check_boxes+'&groupid='+id,
\t\t\t\tbeforeSend:function(){
\t\t\t\t\tlayer.load(2)
\t\t\t\t}
\t\t\t})
    \t\t.done(function(e) {
    \t\t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
\t\t   \t\tlayer.closeAll();
\t\t   \t\tlayer.msg(e.message,{icon:1,time:1500})
\t\t   \t\t
    \t\t})
\t\t\t.fail(function(e) {
\t\t\t\tcommon.ajaxError(e)
\t\t\t})
\t\t\t.always(function() {
\t\t\t\tlayer.closeAll('loading');
\t\t\t});
\t\t\t
\t\t});
\t\t\$(document).on(\"click\", \"#add-role\", function(){
\t\t   var data = {
\t\t   \t\trolename:\$(\"#add-rolename\").val(),
\t\t   \t\tdescription:\$('#add-description').val(),
\t\t   }
\t\t   \$.ajax({
\t\t\t   \turl: '";
        // line 323
        echo twig_escape_filter($this->env, base_url("admin/GroupManage/add"), "html", null, true);
        echo "',
\t\t\t   \ttype: 'POST',
\t\t\t   \tdataType: 'json',
\t\t\t   \ttimeout:4000,
\t\t\t   \tdata: data,
\t\t\t   \tbeforeSend:function(){
\t\t\t   \t\tlayer.load(2);
\t\t\t   \t}
\t\t   })
\t\t   .done(function(e) {
\t\t   \t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
\t\t   \t\tlayer.closeAll();
\t\t   \t\twindow.location.reload();
\t\t   \t\tparent.layer.msg(e.message,{
\t\t   \t\t\ticon:1
\t\t   \t\t});
\t\t   })
\t\t   .fail(function(e) {
\t\t   \t\tcommon.ajaxError(e)
\t\t   })
\t\t   .always(function() {
\t\t\t   \tlayer.closeAll('loading');
\t\t   });
\t\t   
\t\t});
\t\t\$(document).on(\"click\", \"#edit-role\", function(){
\t\t\tvar id = \$(this).data('id')
\t\t   var data = {
\t\t   \t\tgroupid:id,
\t\t   \t\trolename:\$(\"#edit-rolename\").val(),
\t\t   \t\tdescription:\$('#edit-description').val(),
\t\t   }
\t\t   \$.ajax({
\t\t\t   \turl: '";
        // line 359
        echo twig_escape_filter($this->env, base_url("admin/GroupManage/edit"), "html", null, true);
        echo "',
\t\t\t   \ttype: 'POST',
\t\t\t   \tdataType: 'json',
\t\t\t   \ttimeout:4000,
\t\t\t   \tdata: data,
\t\t\t   \tbeforeSend:function(){
\t\t\t   \t\tlayer.load(2);
\t\t\t   \t}
\t\t   })
\t\t   .done(function(e) {
\t\t   \t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
\t\t   \t\tlayer.closeAll();
\t\t   \t\twindow.location.reload();
\t\t   \t\tparent.layer.msg(e.message,{
\t\t   \t\t\ticon:1
\t\t   \t\t});
\t\t   })
\t\t   .fail(function(e) {
\t\t   \t\tcommon.ajaxError(e)
\t\t   })
\t\t   .always(function() {
\t\t\t   \tlayer.closeAll('loading');
\t\t   });
\t\t   
\t\t});
\t\t\$(document).on('click','.delete-btn',function(e){
\t\t var id = \$(this).attr(\"data-id\");
         layer.confirm('你确定删除此用户组？', {icon: 3, title:'确定删除用户组'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"";
        // line 392
        echo twig_escape_filter($this->env, base_url("admin/GroupManage/del"), "html", null, true);
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
             })\t
     \t})\t
    \t\$(document).on('click','.status-btn',function(e){
    \t\tvar \$this = \$(this);
    \t\tvar id = \$(this).attr(\"data-id\");
    \t\tvar index = \$(this).parent().index()-2
    \t\tif(id==\"\"||id==null)return false;
    \t\t\$.ajax({
    \t\t\turl: '";
        // line 413
        echo twig_escape_filter($this->env, base_url("admin/GroupManage/isEnable"), "html", null, true);
        echo "',
    \t\t\ttype: 'POST',
    \t\t\tdataType: 'json',
    \t\t\tdata: {'rid': id},
    \t\t\ttimeout:4000,
\t\t\t   \tbeforeSend:function(){
\t\t\t   \t\t\$this.loading();
\t\t\t   \t}
    \t\t})
    \t\t.done(function(e) {
\t\t   \t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
\t\t   \t\t\$this.loaded();
\t\t   \t\tlayer.closeAll();
\t\t   \t\t\$this.parent().parent().find('td').eq(index).html('<span for=\"\" class=\"label label-'+{\"1\":\"primary\",\"0\":\"danger\"}[e.data]+'\">'+{\"1\":\"激活\",\"0\":\"禁用\"}[e.data]+'</span>')
\t\t   \t\t\$this.removeClass('btn-danger btn-primary').addClass({\"1\":\"btn-danger\",\"0\":\"btn-primary\"}[e.data])
\t\t   \t\t\$this.attr('title',{\"1\":\"禁用\",\"0\":\"激活\"}[e.data]).html('<i class=\"fa fa-'+{\"1\":\"times\",\"0\":\"check\"}[e.data]+'\"></i>');
\t\t   \t\tlayer.tips(e.message,\$this,{
\t\t   \t\t\ttips:[4,\"#1ab394\"]
\t\t   \t\t})

    \t\t})
\t\t\t.fail(function(e) {
\t\t\t\tcommon.ajaxError(e)
\t\t\t})
\t\t\t.always(function() {
\t\t\t   \tlayer.closeAll('loading');
\t\t\t});
    \t})
\t});
</script>
";
    }

    public function getTemplateName()
    {
        return "GroupManage/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  556 => 413,  532 => 392,  496 => 359,  457 => 323,  423 => 292,  355 => 227,  274 => 149,  224 => 103,  221 => 102,  211 => 95,  207 => 93,  204 => 92,  195 => 90,  188 => 85,  179 => 81,  173 => 79,  171 => 78,  168 => 77,  162 => 75,  160 => 74,  157 => 73,  151 => 71,  149 => 70,  146 => 69,  143 => 68,  135 => 64,  133 => 63,  126 => 60,  123 => 59,  121 => 58,  116 => 56,  113 => 55,  109 => 53,  107 => 52,  104 => 51,  102 => 50,  94 => 47,  88 => 44,  85 => 43,  81 => 42,  64 => 27,  59 => 24,  57 => 23,  45 => 14,  32 => 3,  29 => 2,  11 => 1,);
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
<style src=\"base_url('public/admin/css/plugins/treeview/bootstrap-treeview.css')\">
</style>
<style>
\t .treeview .list-group-item{cursor:pointer}.treeview span.indent{margin-left:10px;margin-right:10px}.treeview span.icon{width:12px;margin-right:5px}.treeview .node-disabled{color:silver;cursor:not-allowed}.node-treeview-checkable{}.node-treeview-checkable:not(.node-disabled):hover{background-color:#F5F5F5;} 
</style>
    <div class=\"wrapper wrapper-content\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"ibox float-e-margins\">

                    <div class=\"ibox-content container-fluid\">
                    \t<form action=\"{{base_url('admin/GroupManage/index/1')}}\">
\t                        <div class=\"row col-md-12\">
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">角色名称</label>
\t                        \t\t<input type=\"text\" class=\"form-control\" name=\"role_keywords\" id=\"role_keywords\" value=\"\">
\t                        \t</div>
\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t                            \t<button type=\"submit\" class=\"btn btn-primary\" id=\"search-btn\"><i class=\"fa fa-search\"></i>&nbsp;搜索</button>
\t\t\t\t\t\t\t\t\t{% if checkAuth('GroupManage','add',uid) %}
\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-role\"><i class=\"fa fa-plus\"></i>&nbsp;添加
\t    \t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t{% endif %}
\t                            </div>
\t                        </div>
                        </form>
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>                                     
                                        <th>角色名称</th>
                                        <th>角色描述</th>
                                        <th>状态</th>
                                        <th>创建时间</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
\t\t\t\t\t\t\t\t{% for group in groupData %}
\t                                <tr>
\t                                \t<td>{{group.name}}</td>
\t                                \t<td>
\t                                \t\t
\t                                \t\t<span class=\"tooltip-content\" data-toggle=\"tooltip\" data-original-title=\"{{group.description}}\" data-placement=\"bottom\">{{group.description|slice(0,15)}}</span>
\t                                \t</td>
\t                                \t<td>
\t                                \t\t{% if group.status == 1 %}
\t                                \t\t<label class=\"label label-primary\">激活</label>
\t                                \t\t{% elseif group.status == 0  %}
\t                                \t\t<label class=\"label label-danger\">禁用</label>
\t                                \t\t{% endif %}
\t                            \t\t</td>\t
\t                                \t<td>{{group.create_time}}</td>\t
\t                                \t<td>
\t                                \t\t{% if checkAuth('GroupManage','isEnable',uid) %}
\t\t                                \t\t{% if group.status == 1 %}
\t\t\t                                \t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger status-btn\" data-id=\"{{group.id}}\" title=\"禁用\">
\t\t\t                                \t\t\t<i class=\"fa fa-times\"></i>\t
\t\t                                \t\t\t</a>
\t\t                                \t\t{% elseif group.status == 0  %}
\t\t\t                                \t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary status-btn\" data-id=\"{{group.id}}\" title=\"激活\">
\t\t\t                                \t\t\t<i class=\"fa fa-check\"></i>\t
\t\t                                \t\t\t</a>
\t\t                                \t\t{% endif %}
\t                                \t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('GroupManage','grant',uid) %}
\t                                \t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-success auth-list\" data-id=\"{{group.id}}\" title=\"权限列表\"><i class=\"fa fa-list\"></i></a>
\t                                \t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('GroupManage','edit',uid) %}
\t                                \t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-role\" data-id=\"{{group.id}}\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('GroupManage','del',uid) %}
\t                                \t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"{{group.id}}\"><i class=\"fa fa-trash\"></i></a>
\t                                \t\t{% endif %}

\t                                \t</td>
\t                                </tr>
\t\t\t\t\t\t\t\t{% endfor %}
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
<script src=\"{{base_url('public/admin/js/plugins/treeview/bootstrap-treeview.js')}}\"></script>
<script>
\t\$(document).on('click', '.message-check-all', function(event) {
        \$(\".message-check-one\").prop(\"checked\", \$(this).prop(\"checked\"));
\t})

\tjQuery(document).ready(function(\$) {
\t\t\$('.tooltip-content').tooltip();
\t\t\$('.add-role').click(function(){
    \t\tlayer.open({
\t\t\t  type: 1,
\t\t\t  closeBtn:2,
\t\t\t  title:'添加角色',
\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t  area: ['600px', 'auto'],
\t\t\t  content: 
\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t  '<form class=\"form-horizontal\">'+
\t\t            '<div class=\"form-group must\">'+
\t\t            '<label class=\"col-sm-3 control-label\">角色名称:</label>'+
\t\t             \t'<div class=\"col-sm-8\">'+
\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-rolename\" placeholder=\"\">'+
\t\t                '</div>'+
\t\t            '</div>'+
\t\t            '<div class=\"form-group must\">'+
\t\t            '<label class=\"col-sm-3 control-label\">角色描述:</label>'+
\t\t             \t'<div class=\"col-sm-8\">'+
\t\t                    '<textarea type=\"text\" rows=\"4\" autocomplete=\"off\" id=\"add-description\" class=\"form-control\" placeholder=\"\"></textarea>'+
\t\t                '</div>'+
\t\t            '</div>'+           
\t\t            '<div class=\"form-group\">'+
\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t                    '<span class=\"btn btn-primary\" id=\"add-role\">添加</span>'+
\t\t                '</div>'+
\t\t            '</div>'+
\t        \t'</form></div>',
\t        \tsuccess:function(){
\t\t\t\t\t\t\t\t
\t        \t}
\t\t\t});

    \t});
    \t\$('.edit-role').click(function(){
    \t\tvar \$this = \$(this);
    \t\tvar role;
    \t\t\$.ajax({
    \t\t\turl: '{{base_url(\"admin/GroupManage/getRoleInfo\")}}',
    \t\t\ttype: 'POST',
    \t\t\tdataType: 'json',
    \t\t\tdata: {rid: \$this.data('id')},
    \t\t\ttimeout:4000,
    \t\t\tasync:false
    \t\t})
    \t\t.done(function(data) {
    \t\t\tif(data.status==1){
    \t\t\t\trole = (data.data)
    \t\t\t}else{
    \t\t\t\tcommon.ajaxError(data)
    \t\t\t}

    \t\t})
    \t\t.fail(function(e) {
    \t\t\tcommon.ajaxError(e);
    \t\t})
\t\t\tlayer.open({
\t\t\t  type: 1,
\t\t\t  closeBtn:2,
\t\t\t  title:'编辑角色',
\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t  area: ['600px', 'auto'],
\t\t\t  content:'<div class=\"ibox-content\">'+
\t\t\t  '<form class=\"form-horizontal\">'+
\t\t            '<div class=\"form-group must\">'+
\t\t            '<label class=\"col-sm-3 control-label\">角色名称:</label>'+
\t\t             \t'<div class=\"col-sm-8\">'+
\t\t                    '<input type=\"text\" value=\"'+role.name+'\" autocomplete=\"off\" class=\"form-control\" id=\"edit-rolename\" placeholder=\"\">'+
\t\t                '</div>'+
\t\t            '</div>'+
\t\t            '<div class=\"form-group must\">'+
\t\t            '<label class=\"col-sm-3 control-label\">角色描述:</label>'+
\t\t             \t'<div class=\"col-sm-8\">'+
\t\t                    '<textarea type=\"text\" rows=\"4\" autocomplete=\"off\" id=\"edit-description\" class=\"form-control\" placeholder=\"\">'+role.description+'</textarea>'+
\t\t                '</div>'+
\t\t            '</div>'+           
\t\t            '<div class=\"form-group\">'+
\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t                    '<span class=\"btn btn-primary\" data-id=\"'+role.id+'\" id=\"edit-role\">编辑</span>'+
\t\t                '</div>'+
\t\t            '</div>'+
\t        \t'</form></div>',
\t\t\t});
    \t});

\t \tvar nbsp = \"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\";
\t\tfunction role_tree(table,icon_str = '') {\t
\t\t    tree = '';
\t\t    var number=1;
\t\t    for (key in table){
\t\t    \tchecked = table[key]['active'] == '1' ? 'checked=\"checked\"':' ' ;
\t\t    \ttree+='<tr><td><input name=\"checked['+table[key]['id']+']\" value=\"'+table[key]['id']+'\" type=\"checkbox\" class=\"message-check-one\" '+checked+' /></td>';
\t\t    \ttree+='<td>'+icon_str+table[key]['name']+'</td>';
\t\t    \ttree+='<td>';
\t\t    \tfor(k in table[key]['method']){
\t\t    \t\tchildChecked = table[key]['method'][k]['active'] == '1' ? 'checked=\"checked\"':' ' ;
\t\t    \t\ttree+='<input name=\"checked['+table[key]['id']+'][]\" value=\"'+table[key]['method'][k]['name']+'\" type=\"checkbox\" class=\"message-check-method\" '+childChecked+'/> '+table[key]['method'][k]['name']+'&nbsp;&nbsp;&nbsp;&nbsp;';
\t\t    \t}
\t\t    \ttree+='</td></tr>';
\t\t    \tif(table[key]['child']){
\t\t    \t\tk = '';
\t\t\t\t\tif(number==table[key]['child'].length){
\t\t\t\t\t\ticon_str= icon_str ? nbsp : '';
\t\t\t\t\t}
\t\t    \t\ttree+=role_tree(table[key]['child'],icon_str+nbsp);
\t\t    \t\tnumber++;
\t\t    \t}
\t\t    }
\t\t    return tree;        
\t\t}

    \t\$(document).on('click', '.auth-list', function(event) {
    \t\tevent.preventDefault();
    \t\tvar id = \$(this).attr('data-id');
    \t\tvar defaultData;
    \t\t\$.ajax({
    \t\t\turl: '{{base_url(\"admin/GroupManage/getAuthList\")}}',
    \t\t\ttype: 'POST',
    \t\t\tdataType: 'json',
    \t\t\tasync:false,
    \t\t\tdata: {rid:id },
    \t\t\ttimeout:4000,
    \t\t\tbeforeSend:function(){
    \t\t\t\tlayer.load(2);
    \t\t\t}
    \t\t})
    \t\t.done(function(e) {
    \t\t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
    \t\t\tdefaultData = e.data;
    \t\t})
\t\t\t.fail(function(e) {
\t\t\t\tcommon.ajaxError(e)
\t\t\t})
\t\t\t.always(function() {
\t\t\t\tlayer.closeAll('loading');
\t\t\t});
    \t\t

    \t\tvar tableStr = '<table class=\"table table-striped table-hover\">';
    \t\ttableStr+='<thead><tr><th width=\"14%\">';
    \t\ttableStr+='<input type=\"checkbox\" class=\"message-check-all\" />';
    \t\ttableStr+=' 全选</th><th>方法</th><th>功能</th></tr></thead>';
    \t\ttableStr+='<tbody>';

    \t\ttableStr+= role_tree(defaultData);



    \t\ttableStr+='</tbody></table><div class=\"form-group text-center fixed-bottom\"><button class=\"btn btn-primary\" data-id=\"'+id+'\" id=\"edit-auth\">提交</button></div>';

    \t\t
          
\t\t\tlayer.open({
\t\t\t  type: 1,
\t\t\t  closeBtn:2,
\t\t\t  title:'授权',
\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t  area: ['700px', '85%'],
\t\t\t  content:tableStr,
\t\t\t  success:function(){



\t\t\t  }
\t\t\t})
    \t});



\t\t\$(document).on('click', '#edit-auth', function(event) {
\t\t\tevent.preventDefault();
\t\t\t
\t\t\tvar id = \$(this).data('id')
\t\t\tvar auth = [];
\t\t\tvar data = [];
\t\t\t// var check_boxes = \$(\"input[type=checkbox][class!=message-check-all]\").prop(\"checked\",true).serialize();
\t\t\tvar check_boxes = \$('input[type=checkbox]:checked').serialize();
\t\t\t\$.ajax({
\t\t\t\turl: '{{base_url(\"admin/GroupManage/grant\")}}',
\t\t\t\ttype: 'POST',
\t\t\t\tdataType: 'json',
\t\t\t\tdata:check_boxes+'&groupid='+id,
\t\t\t\tbeforeSend:function(){
\t\t\t\t\tlayer.load(2)
\t\t\t\t}
\t\t\t})
    \t\t.done(function(e) {
    \t\t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
\t\t   \t\tlayer.closeAll();
\t\t   \t\tlayer.msg(e.message,{icon:1,time:1500})
\t\t   \t\t
    \t\t})
\t\t\t.fail(function(e) {
\t\t\t\tcommon.ajaxError(e)
\t\t\t})
\t\t\t.always(function() {
\t\t\t\tlayer.closeAll('loading');
\t\t\t});
\t\t\t
\t\t});
\t\t\$(document).on(\"click\", \"#add-role\", function(){
\t\t   var data = {
\t\t   \t\trolename:\$(\"#add-rolename\").val(),
\t\t   \t\tdescription:\$('#add-description').val(),
\t\t   }
\t\t   \$.ajax({
\t\t\t   \turl: '{{base_url(\"admin/GroupManage/add\")}}',
\t\t\t   \ttype: 'POST',
\t\t\t   \tdataType: 'json',
\t\t\t   \ttimeout:4000,
\t\t\t   \tdata: data,
\t\t\t   \tbeforeSend:function(){
\t\t\t   \t\tlayer.load(2);
\t\t\t   \t}
\t\t   })
\t\t   .done(function(e) {
\t\t   \t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
\t\t   \t\tlayer.closeAll();
\t\t   \t\twindow.location.reload();
\t\t   \t\tparent.layer.msg(e.message,{
\t\t   \t\t\ticon:1
\t\t   \t\t});
\t\t   })
\t\t   .fail(function(e) {
\t\t   \t\tcommon.ajaxError(e)
\t\t   })
\t\t   .always(function() {
\t\t\t   \tlayer.closeAll('loading');
\t\t   });
\t\t   
\t\t});
\t\t\$(document).on(\"click\", \"#edit-role\", function(){
\t\t\tvar id = \$(this).data('id')
\t\t   var data = {
\t\t   \t\tgroupid:id,
\t\t   \t\trolename:\$(\"#edit-rolename\").val(),
\t\t   \t\tdescription:\$('#edit-description').val(),
\t\t   }
\t\t   \$.ajax({
\t\t\t   \turl: '{{base_url(\"admin/GroupManage/edit\")}}',
\t\t\t   \ttype: 'POST',
\t\t\t   \tdataType: 'json',
\t\t\t   \ttimeout:4000,
\t\t\t   \tdata: data,
\t\t\t   \tbeforeSend:function(){
\t\t\t   \t\tlayer.load(2);
\t\t\t   \t}
\t\t   })
\t\t   .done(function(e) {
\t\t   \t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
\t\t   \t\tlayer.closeAll();
\t\t   \t\twindow.location.reload();
\t\t   \t\tparent.layer.msg(e.message,{
\t\t   \t\t\ticon:1
\t\t   \t\t});
\t\t   })
\t\t   .fail(function(e) {
\t\t   \t\tcommon.ajaxError(e)
\t\t   })
\t\t   .always(function() {
\t\t\t   \tlayer.closeAll('loading');
\t\t   });
\t\t   
\t\t});
\t\t\$(document).on('click','.delete-btn',function(e){
\t\t var id = \$(this).attr(\"data-id\");
         layer.confirm('你确定删除此用户组？', {icon: 3, title:'确定删除用户组'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"{{base_url('admin/GroupManage/del')}}\",
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
             })\t
     \t})\t
    \t\$(document).on('click','.status-btn',function(e){
    \t\tvar \$this = \$(this);
    \t\tvar id = \$(this).attr(\"data-id\");
    \t\tvar index = \$(this).parent().index()-2
    \t\tif(id==\"\"||id==null)return false;
    \t\t\$.ajax({
    \t\t\turl: '{{base_url(\"admin/GroupManage/isEnable\")}}',
    \t\t\ttype: 'POST',
    \t\t\tdataType: 'json',
    \t\t\tdata: {'rid': id},
    \t\t\ttimeout:4000,
\t\t\t   \tbeforeSend:function(){
\t\t\t   \t\t\$this.loading();
\t\t\t   \t}
    \t\t})
    \t\t.done(function(e) {
\t\t   \t\tif (e.status!=1) {
\t\t   \t\t\tcommon.ajaxError(e);
\t\t   \t\t\treturn false;
\t\t   \t\t}
\t\t   \t\t\$this.loaded();
\t\t   \t\tlayer.closeAll();
\t\t   \t\t\$this.parent().parent().find('td').eq(index).html('<span for=\"\" class=\"label label-'+{\"1\":\"primary\",\"0\":\"danger\"}[e.data]+'\">'+{\"1\":\"激活\",\"0\":\"禁用\"}[e.data]+'</span>')
\t\t   \t\t\$this.removeClass('btn-danger btn-primary').addClass({\"1\":\"btn-danger\",\"0\":\"btn-primary\"}[e.data])
\t\t   \t\t\$this.attr('title',{\"1\":\"禁用\",\"0\":\"激活\"}[e.data]).html('<i class=\"fa fa-'+{\"1\":\"times\",\"0\":\"check\"}[e.data]+'\"></i>');
\t\t   \t\tlayer.tips(e.message,\$this,{
\t\t   \t\t\ttips:[4,\"#1ab394\"]
\t\t   \t\t})

    \t\t})
\t\t\t.fail(function(e) {
\t\t\t\tcommon.ajaxError(e)
\t\t\t})
\t\t\t.always(function() {
\t\t\t   \tlayer.closeAll('loading');
\t\t\t});
    \t})
\t});
</script>
{% endblock %}", "GroupManage/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\GroupManage\\index.twig");
    }
}
