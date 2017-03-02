<?php

/* UserManage/index.twig */
class __TwigTemplate_6ed119acc2ab8b4460ec59b2d9f11a98400af4b56f89292e8566eccd345f2d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/iframe_common.twig", "UserManage/index.twig", 1);
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
        echo twig_escape_filter($this->env, base_url("admin/UserManage/index/1"), "html", null, true);
        echo "\">
\t                        <div class=\"row col-md-12\">
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">邮箱/真实姓名</label>
\t                        \t\t<input type=\"text\" class=\"form-control\" name=\"account\" id=\"search-username\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["getArr"] ?? null), "account", array()), "html", null, true);
        echo "\">
\t                        \t</div>
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">用户角色</label>
\t                        \t\t<select class=\"form-control\" name=\"roleType\">
\t                        \t\t\t<option value=\"-1\">全部</option>
\t                        \t\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["roles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 19
            echo "\t                        \t\t\t    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute(($context["getArr"] ?? null), "roleType", array()) == $this->getAttribute($context["role"], "id", array()))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t                        \t\t</select>
\t                        \t</div>
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">用户状态</label>
\t                        \t\t<select class=\"form-control\" name=\"status\">
\t                        \t\t\t<option value=\"-1\" ";
        // line 26
        if (($this->getAttribute(($context["getArr"] ?? null), "status", array()) == "-1")) {
            echo "selected=selected";
        }
        echo ">全部</option>
\t                        \t\t\t<option value=\"1\" ";
        // line 27
        if (($this->getAttribute(($context["getArr"] ?? null), "status", array()) == "1")) {
            echo "selected=selected";
        }
        echo ">激活</option>
\t                        \t\t\t<option value=\"0\" ";
        // line 28
        if (($this->getAttribute(($context["getArr"] ?? null), "status", array()) == "0")) {
            echo "selected=selected";
        }
        echo ">禁用</option>
\t                        \t\t\t
\t                        \t\t</select>
\t                        \t</div>
\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t                            \t<button type=\"submit\" class=\"btn btn-primary\" id=\"search-btn\"><i class=\"fa fa-search\"></i>搜索</button>
\t    \t\t\t\t\t\t\t";
        // line 35
        if (checkAuth("UserManage", "add", ($context["uid"] ?? null))) {
            // line 36
            echo "\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-user\"><i class=\"fa fa-plus\"></i>&nbsp;添加用户
\t    \t\t\t\t\t\t\t</button>
\t    \t\t\t\t\t\t\t";
        }
        // line 39
        echo "
\t                            </div>
\t                        </div>
                        </form>
                        <div class=\"table-responsive col-md-12\">
                            <table class=\"table table-striped table-hover\">
                                <thead>
                                    <tr>
                                    \t<th>id</th>  
                                    \t<th>账号</th>                                  
                                        <th>真实名字</th>
                                        <th>邮件</th>
                                        <th>用户角色</th>
                                        <th>用户状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 58
            echo "                                    <tr>  
                                    \t<td>
\t                                        ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
\t                                        ";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
\t                                        ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "realname", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                        \t";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "group_name", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                        \t";
            // line 75
            if (($this->getAttribute($context["user"], "status", array()) == 1)) {
                // line 76
                echo "\t                                        \t<span for=\"\" class=\"label label-primary\">
\t                                        \t\t激活
\t                                        \t</span>
                                            ";
            } elseif (($this->getAttribute(            // line 79
$context["user"], "status", array()) == 0)) {
                // line 80
                echo "\t                                        \t<span for=\"\" class=\"label label-danger\">
\t                                        \t\t禁用
\t                                        \t</span>      
                                            ";
            }
            // line 84
            echo "
                                        </td>
                                        <td>
                                        \t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 88
            if (checkAuth("UserManage", "edit", ($context["uid"] ?? null))) {
                // line 89
                echo "\t\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-btn\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
\t\t                                        ";
            }
            // line 91
            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 92
            if (checkAuth("UserManage", "isEnable", ($context["uid"] ?? null))) {
                // line 93
                echo "\t\t\t                                        ";
                if (($this->getAttribute($context["user"], "status", array()) == 1)) {
                    // line 94
                    echo "\t\t\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger status-btn\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                    echo "\" title=\"禁用\"><i class=\"fa fa-times\"></i></a>
\t\t                                            ";
                } else {
                    // line 96
                    echo "\t\t\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary status-btn\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                    echo "\" title=\"激活\"><i class=\"fa fa-check\"></i></a>                                 \t      
\t\t                                            ";
                }
                // line 98
                echo "\t                                            ";
            }
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 100
            if (checkAuth("UserManage", "del", ($context["uid"] ?? null))) {
                // line 101
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\" title=\"删除\"><i class=\"fa fa-trash\"></i></a>
\t                                            ";
            }
            // line 103
            echo "                                        \t
                                        </td>
                                    </tr>
                                 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 107
        echo "                                </tbody>
                            </table>
                        </div>
                        <div class=\"fixed-table-pagination col-md-12\">
                        \t<div class=\"pull-left pagination-detail\">
                        \t\t<span class=\"pagination-info\">共<strong>";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "total", array()), "html", null, true);
        echo "</strong>条记录 &nbsp;<strong>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "nowindex", array()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? null), "totalpage", array()), "html", null, true);
        echo "</strong>页</span>
                    \t\t</div>
                            ";
        // line 114
        echo "  
                             ";
        // line 115
        echo $this->getAttribute(($context["pager"] ?? null), "show", array(0 => 1), "method");
        echo "
                            ";
        // line 117
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 124
    public function block_script($context, array $blocks = array())
    {
        // line 125
        echo "    <script>
        \$(document).ready(function(){
        \t\$('.add-user').click(function(){
        \t\t\$.get('";
        // line 128
        echo twig_escape_filter($this->env, base_url("admin/UserManage/getUserRoles"), "html", null, true);
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
\t\t\t\t\t  title:'添加用户',
\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t  content: 
\t\t\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">用户名:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-username\" placeholder=\"用户名\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">密码:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"password\" autocomplete=\"off\" class=\"form-control\" id=\"add-password\" placeholder=\"密码\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">真实名字:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-realname\" class=\"form-control\" placeholder=\"真实名字\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

    \t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">邮箱:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"email\" autocomplete=\"off\" id=\"add-email\" class=\"form-control\" placeholder=\"邮箱\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<label class=\"col-sm-3 control-label\">用户组:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-role\">'+
\t\t\t\t\t\t\t\t\t\t\$options+
\t\t\t\t\t\t\t\t\t'</select>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+\t            
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-user\">添加</span>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t        \t'</form></div>',
\t\t\t\t\t});
        \t\t})

        \t})
        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar user = {};
        \t\t\$.ajax({
        \t\t\turl: '";
        // line 194
        echo twig_escape_filter($this->env, base_url("admin/UserManage/getUserInfo"), "html", null, true);
        echo "',
        \t\t\ttype: 'POST',
        \t\t\tdataType: 'json',
        \t\t\tdata: {uid: \$this.attr('data-id')},
        \t\t\ttimeout:4000,
        \t\t\tasync:false
        \t\t})
        \t\t.done(function(data) {
\t    \t\t\tif(data.status==1){
        \t\t\t\tuser = (data.data)
        \t\t\t}else{
        \t\t\t\tcommon.ajaxError(data)
        \t\t\t}
        \t\t})
        \t\t.fail(function() {
        \t\t})
        \t\t.always(function() {

        \t\t});
        \t\t\$.get('";
        // line 213
        echo twig_escape_filter($this->env, base_url("admin/UserManage/getUserRoles"), "html", null, true);
        echo "',function(data) {

        \t\t},'json')
        \t\t.then(function(role){
\t        \t\tvar domHTML = '';
\t        \t\tvar \$options = '';
\t        \t\tfor(var i in role.data){ 
\t\t\t\t\t\t\$options += '<option value=\"'+role.data[i].id+'\">'+role.data[i].name+'</option>'
\t\t\t\t\t}
\t        \t\tdomHTML='<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">用户名:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" disabled=\"disabled readonly=\"readonly id=\"edit-username\" placeholder=\"用户名\" value=\"'+(user.username||'')+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">密码:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-password\" class=\"form-control\" placeholder=\"请输入密码\" value=\"\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">真实名字:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-realname\" class=\"form-control\" placeholder=\"真实名字\" value=\"'+user.realname+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<label class=\"col-sm-3 control-label\">用户组:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-role\">'+\$options;

\t\t            \t\t\tdomHTML+='</select>'+
\t\t\t\t\t\t                '</div>'+
\t\t\t\t\t\t            '</div>'+
\t\t\t\t\t\t\t\t\t'<div class=\"form-group\">'+
\t\t\t\t\t\t\t\t\t'<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"edit-user\" data-id=\"'+user.id+'\">修改</span>'+
\t\t\t\t\t                '</div>'+
\t\t\t\t\t\t            '</div>'+
\t\t\t\t\t\t        \t'</form></div>',

\t\t\t\t\tlayer.open({
\t\t\t\t\t  type: 1,
\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t  title:'编辑用户',
\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t  content:domHTML,
\t\t\t\t\t  success:function(){
\t\t\t\t\t  \t\t\$('#edit-role').val(user.group_id)

\t\t\t\t\t  }
\t\t\t\t\t});

        \t\t\t
        \t\t})        \t\t
        \t})
\t    　　\$(\".delete-btn\").click(function(){
\t    　　　　var id = \$(this).data('id');
                layer.confirm('你确定删除此用户？', {icon: 3, title:'确定删除用户'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"";
        // line 278
        echo twig_escape_filter($this->env, base_url("admin/UserManage/del"), "html", null, true);
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

\t    \t\$(document).on('click','.status-btn',function(e){
\t    \t\tvar \$this = \$(this);
\t    \t\tvar id = \$(this).attr(\"data-id\");
\t    \t\tvar index = \$(this).parent().index()-1
\t    \t\tif(id==\"\"||id==null)return false;
\t    \t\t\$.ajax({
\t    \t\t\turl: '";
        // line 300
        echo twig_escape_filter($this->env, base_url("admin/UserManage/isEnable"), "html", null, true);
        echo "',
\t    \t\t\ttype: 'POST',
\t    \t\t\tdataType: 'json',
\t    \t\t\tdata: {'uid': id},
\t    \t\t\ttimeout:4000,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t}
\t    \t\t})
\t    \t\t.done(function(e) {
\t\t\t   \t\tif (e.status!=1) {
\t\t\t   \t\t\tcommon.ajaxError(e);
\t\t\t   \t\t\treturn false;
\t\t\t   \t\t}
\t\t\t   \t\tlayer.closeAll();
\t\t\t   \t\t\$this.parent().parent().find('td').eq(index).html('<span for=\"\" class=\"label label-'+{\"1\":\"primary\",\"0\":\"danger\"}[e.data]+'\">'+{\"1\":\"激活\",\"0\":\"禁用\"}[e.data]+'</span>')
\t\t\t   \t\t\$this.removeClass('btn-danger btn-primary').addClass({\"1\":\"btn-danger\",\"0\":\"btn-primary\"}[e.data])
\t\t\t   \t\t\$this.attr('title',{\"1\":\"禁用\",\"0\":\"激活\"}[e.data]).html('<i class=\"fa fa-'+{\"1\":\"times\",\"0\":\"check\"}[e.data]+'\"></i>');
\t\t\t   \t\tlayer.tips(e.message,\$this,{
\t\t\t   \t\t\ttips:[2,\"#1ab394\"]
\t\t\t   \t\t})

\t    \t\t})
\t\t\t\t.fail(function(e) {
\t\t\t\t\tcommon.ajaxError(e)
\t\t\t\t})
\t\t\t\t.always(function() {
\t\t\t\t   \tlayer.closeAll('loading');
\t\t\t\t});
\t    \t})
\t\t\t\$(document).on(\"click\", \"#add-user\", function(){
\t\t\t   var data = {
\t\t\t   \t\trealname:\$(\"#add-realname\").val(),
\t\t\t   \t\tusername:\$('#add-username').val(),
\t\t\t   \t\tpassword:\$('#add-password').val(),
\t\t\t   \t\tuser_role:\$('#add-role').val(),
\t\t\t   \t\temail:\$('#add-email').val()
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 339
        echo twig_escape_filter($this->env, base_url("admin/UserManage/add"), "html", null, true);
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
\t\t\t\$(document).on('click','#edit-user',function(){
\t\t\t\tvar data = {
\t\t\t\t\tuid:\$(this).data('id'),
\t\t\t   \t\trealname:\$(\"#edit-realname\").val(),
\t\t\t   \t\temail:\$('#edit-email').val(),
\t\t\t   \t\tuser_role:\$('#edit-role').val(),
\t\t\t   }
\t\t\t   if(\$('#edit-password').val()!=\"\"){
\t\t\t\t   \tdata.password = \$('#edit-password').val();
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 378
        echo twig_escape_filter($this->env, base_url("admin/UserManage/edit"), "html", null, true);
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
        return "UserManage/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  551 => 378,  509 => 339,  467 => 300,  442 => 278,  374 => 213,  352 => 194,  283 => 128,  278 => 125,  275 => 124,  265 => 117,  261 => 115,  258 => 114,  249 => 112,  242 => 107,  233 => 103,  227 => 101,  225 => 100,  222 => 99,  219 => 98,  213 => 96,  207 => 94,  204 => 93,  202 => 92,  199 => 91,  193 => 89,  191 => 88,  185 => 84,  179 => 80,  177 => 79,  172 => 76,  170 => 75,  164 => 72,  158 => 69,  152 => 66,  146 => 63,  140 => 60,  136 => 58,  132 => 57,  112 => 39,  107 => 36,  105 => 35,  93 => 28,  87 => 27,  81 => 26,  74 => 21,  59 => 19,  55 => 18,  46 => 12,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
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
                    \t<form action=\"{{base_url('admin/UserManage/index/1')}}\">
\t                        <div class=\"row col-md-12\">
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">邮箱/真实姓名</label>
\t                        \t\t<input type=\"text\" class=\"form-control\" name=\"account\" id=\"search-username\" value=\"{{getArr.account}}\">
\t                        \t</div>
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">用户角色</label>
\t                        \t\t<select class=\"form-control\" name=\"roleType\">
\t                        \t\t\t<option value=\"-1\">全部</option>
\t                        \t\t\t{% for role in roles %}
\t                        \t\t\t    <option value=\"{{ role.id }}\" {% if getArr.roleType == role.id %}selected=\"selected\"{% endif %}>{{ role.name }}</option>
                                        {% endfor %}
\t                        \t\t</select>
\t                        \t</div>
\t                        \t<div class=\"col-md-3 form-group\">
\t                        \t\t<label for=\"search-username\">用户状态</label>
\t                        \t\t<select class=\"form-control\" name=\"status\">
\t                        \t\t\t<option value=\"-1\" {% if getArr.status == '-1' %}selected=selected{% endif %}>全部</option>
\t                        \t\t\t<option value=\"1\" {% if getArr.status == '1' %}selected=selected{% endif %}>激活</option>
\t                        \t\t\t<option value=\"0\" {% if getArr.status == '0' %}selected=selected{% endif %}>禁用</option>
\t                        \t\t\t
\t                        \t\t</select>
\t                        \t</div>
\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t                            \t<button type=\"submit\" class=\"btn btn-primary\" id=\"search-btn\"><i class=\"fa fa-search\"></i>搜索</button>
\t    \t\t\t\t\t\t\t{% if checkAuth('UserManage','add',uid) %}
\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-user\"><i class=\"fa fa-plus\"></i>&nbsp;添加用户
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
                                    \t<th>账号</th>                                  
                                        <th>真实名字</th>
                                        <th>邮件</th>
                                        <th>用户角色</th>
                                        <th>用户状态</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for user in users %}
                                    <tr>  
                                    \t<td>
\t                                        {{user.id}}
                                        </td>
                                        <td>
\t                                        {{user.username}}
                                        </td>
                                        <td>
\t                                        {{user.realname}}
                                        </td>
                                        <td>
                                        \t{{user.email}}
                                        </td>
                                        <td>
                                            {{user.group_name}}
                                        </td>
                                        <td>
                                        \t{% if user.status==1 %}
\t                                        \t<span for=\"\" class=\"label label-primary\">
\t                                        \t\t激活
\t                                        \t</span>
                                            {% elseif user.status==0 %}
\t                                        \t<span for=\"\" class=\"label label-danger\">
\t                                        \t\t禁用
\t                                        \t</span>      
                                            {% endif %}

                                        </td>
                                        <td>
                                        \t
\t\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('UserManage','edit',uid) %}
\t\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary edit-btn\" data-id=\"{{user.id}}\" title=\"编辑\"><i class=\"fa fa-edit\"></i></a>
\t\t                                        {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('UserManage','isEnable',uid) %}
\t\t\t                                        {% if user.status==1 %}
\t\t\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger status-btn\" data-id=\"{{user.id}}\" title=\"禁用\"><i class=\"fa fa-times\"></i></a>
\t\t                                            {% else %}
\t\t\t                                        \t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-primary status-btn\" data-id=\"{{user.id}}\" title=\"激活\"><i class=\"fa fa-check\"></i></a>                                 \t      
\t\t                                            {% endif %}
\t                                            {% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% if checkAuth('UserManage','del',uid) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"btn btn-sm btn-danger delete-btn\" data-id=\"{{user.id}}\" title=\"删除\"><i class=\"fa fa-trash\"></i></a>
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
        \t\$('.add-user').click(function(){
        \t\t\$.get('{{base_url(\"admin/UserManage/getUserRoles\")}}',function(data) {

        \t\t},'json')
        \t\t.then(function(data){
\t        \t\tvar \$options = '';
\t\t\t\t\tfor(var i in data.data){ 
\t\t\t\t\t\t\$options += '<option value=\"'+data.data[i].id+'\">'+data.data[i].name+'</option>'
\t\t\t\t\t}
\t        \t\tlayer.open({
\t\t\t\t\t  type: 1,
\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t  title:'添加用户',
\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t  content: 
\t\t\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">用户名:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-username\" placeholder=\"用户名\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">密码:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"password\" autocomplete=\"off\" class=\"form-control\" id=\"add-password\" placeholder=\"密码\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">真实名字:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-realname\" class=\"form-control\" placeholder=\"真实名字\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+

    \t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">邮箱:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"email\" autocomplete=\"off\" id=\"add-email\" class=\"form-control\" placeholder=\"邮箱\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<label class=\"col-sm-3 control-label\">用户组:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-role\">'+
\t\t\t\t\t\t\t\t\t\t\$options+
\t\t\t\t\t\t\t\t\t'</select>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+\t            
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-user\">添加</span>'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t        \t'</form></div>',
\t\t\t\t\t});
        \t\t})

        \t})
        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar user = {};
        \t\t\$.ajax({
        \t\t\turl: '{{base_url(\"admin/UserManage/getUserInfo\")}}',
        \t\t\ttype: 'POST',
        \t\t\tdataType: 'json',
        \t\t\tdata: {uid: \$this.attr('data-id')},
        \t\t\ttimeout:4000,
        \t\t\tasync:false
        \t\t})
        \t\t.done(function(data) {
\t    \t\t\tif(data.status==1){
        \t\t\t\tuser = (data.data)
        \t\t\t}else{
        \t\t\t\tcommon.ajaxError(data)
        \t\t\t}
        \t\t})
        \t\t.fail(function() {
        \t\t})
        \t\t.always(function() {

        \t\t});
        \t\t\$.get('{{base_url(\"admin/UserManage/getUserRoles\")}}',function(data) {

        \t\t},'json')
        \t\t.then(function(role){
\t        \t\tvar domHTML = '';
\t        \t\tvar \$options = '';
\t        \t\tfor(var i in role.data){ 
\t\t\t\t\t\t\$options += '<option value=\"'+role.data[i].id+'\">'+role.data[i].name+'</option>'
\t\t\t\t\t}
\t        \t\tdomHTML='<div class=\"ibox-content\">'+
\t\t\t\t\t  '<form class=\"form-horizontal\">'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">用户名:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" disabled=\"disabled readonly=\"readonly id=\"edit-username\" placeholder=\"用户名\" value=\"'+(user.username||'')+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">密码:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-password\" class=\"form-control\" placeholder=\"请输入密码\" value=\"\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group must\">'+
\t\t\t\t            '<label class=\"col-sm-3 control-label\">真实名字:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-realname\" class=\"form-control\" placeholder=\"真实名字\" value=\"'+user.realname+'\">'+
\t\t\t\t                '</div>'+
\t\t\t\t            '</div>'+
\t\t\t\t            '<div class=\"form-group\">'+
\t\t\t\t                '<label class=\"col-sm-3 control-label\">用户组:</label>'+
\t\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-role\">'+\$options;

\t\t            \t\t\tdomHTML+='</select>'+
\t\t\t\t\t\t                '</div>'+
\t\t\t\t\t\t            '</div>'+
\t\t\t\t\t\t\t\t\t'<div class=\"form-group\">'+
\t\t\t\t\t\t\t\t\t'<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t\t                    '<span class=\"btn btn-primary\" id=\"edit-user\" data-id=\"'+user.id+'\">修改</span>'+
\t\t\t\t\t                '</div>'+
\t\t\t\t\t\t            '</div>'+
\t\t\t\t\t\t        \t'</form></div>',

\t\t\t\t\tlayer.open({
\t\t\t\t\t  type: 1,
\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t  title:'编辑用户',
\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t  content:domHTML,
\t\t\t\t\t  success:function(){
\t\t\t\t\t  \t\t\$('#edit-role').val(user.group_id)

\t\t\t\t\t  }
\t\t\t\t\t});

        \t\t\t
        \t\t})        \t\t
        \t})
\t    　　\$(\".delete-btn\").click(function(){
\t    　　　　var id = \$(this).data('id');
                layer.confirm('你确定删除此用户？', {icon: 3, title:'确定删除用户'}, function(index){
                \$.ajax({
                    type:\"POST\",
                    url:\"{{base_url('admin/UserManage/del')}}\",
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

\t    \t\$(document).on('click','.status-btn',function(e){
\t    \t\tvar \$this = \$(this);
\t    \t\tvar id = \$(this).attr(\"data-id\");
\t    \t\tvar index = \$(this).parent().index()-1
\t    \t\tif(id==\"\"||id==null)return false;
\t    \t\t\$.ajax({
\t    \t\t\turl: '{{base_url(\"admin/UserManage/isEnable\")}}',
\t    \t\t\ttype: 'POST',
\t    \t\t\tdataType: 'json',
\t    \t\t\tdata: {'uid': id},
\t    \t\t\ttimeout:4000,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t}
\t    \t\t})
\t    \t\t.done(function(e) {
\t\t\t   \t\tif (e.status!=1) {
\t\t\t   \t\t\tcommon.ajaxError(e);
\t\t\t   \t\t\treturn false;
\t\t\t   \t\t}
\t\t\t   \t\tlayer.closeAll();
\t\t\t   \t\t\$this.parent().parent().find('td').eq(index).html('<span for=\"\" class=\"label label-'+{\"1\":\"primary\",\"0\":\"danger\"}[e.data]+'\">'+{\"1\":\"激活\",\"0\":\"禁用\"}[e.data]+'</span>')
\t\t\t   \t\t\$this.removeClass('btn-danger btn-primary').addClass({\"1\":\"btn-danger\",\"0\":\"btn-primary\"}[e.data])
\t\t\t   \t\t\$this.attr('title',{\"1\":\"禁用\",\"0\":\"激活\"}[e.data]).html('<i class=\"fa fa-'+{\"1\":\"times\",\"0\":\"check\"}[e.data]+'\"></i>');
\t\t\t   \t\tlayer.tips(e.message,\$this,{
\t\t\t   \t\t\ttips:[2,\"#1ab394\"]
\t\t\t   \t\t})

\t    \t\t})
\t\t\t\t.fail(function(e) {
\t\t\t\t\tcommon.ajaxError(e)
\t\t\t\t})
\t\t\t\t.always(function() {
\t\t\t\t   \tlayer.closeAll('loading');
\t\t\t\t});
\t    \t})
\t\t\t\$(document).on(\"click\", \"#add-user\", function(){
\t\t\t   var data = {
\t\t\t   \t\trealname:\$(\"#add-realname\").val(),
\t\t\t   \t\tusername:\$('#add-username').val(),
\t\t\t   \t\tpassword:\$('#add-password').val(),
\t\t\t   \t\tuser_role:\$('#add-role').val(),
\t\t\t   \t\temail:\$('#add-email').val()
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/UserManage/add\")}}',
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
\t\t\t\$(document).on('click','#edit-user',function(){
\t\t\t\tvar data = {
\t\t\t\t\tuid:\$(this).data('id'),
\t\t\t   \t\trealname:\$(\"#edit-realname\").val(),
\t\t\t   \t\temail:\$('#edit-email').val(),
\t\t\t   \t\tuser_role:\$('#edit-role').val(),
\t\t\t   }
\t\t\t   if(\$('#edit-password').val()!=\"\"){
\t\t\t\t   \tdata.password = \$('#edit-password').val();
\t\t\t   }
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/UserManage/edit\")}}',
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
{% endblock %}", "UserManage/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\UserManage\\index.twig");
    }
}
