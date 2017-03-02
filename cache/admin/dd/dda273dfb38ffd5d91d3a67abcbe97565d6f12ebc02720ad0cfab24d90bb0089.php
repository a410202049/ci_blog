<?php

/* Link/index.twig */
class __TwigTemplate_81ecc3cab59770a9f1bf14ab3998fc99e4202b1e6587d298689d813a10368ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("Common/iframe_common.twig", "Link/index.twig", 1);
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
\t                        \t\t<label for=\"search-username\">链接类型</label>
\t                        \t\t<select id=\"linkType\" class=\"form-control\" name=\"linkType\">
\t                                    ";
        // line 13
        if (($context["categorys"] ?? null)) {
            // line 14
            echo "\t\t                        \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorys"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "\t\t                        \t\t\t    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["category"], "id", array()) == ($context["tid"] ?? null))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>
\t                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 18
            echo "\t\t\t\t\t\t\t\t\t\t\t'<option value=\"0\">请选择一个类型</option>'+
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 20
        echo "\t                        \t\t</select>
\t                        \t</div>

\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t    \t\t\t\t\t\t\t";
        // line 25
        if (checkAuth("Link", "add", ($context["uid"] ?? null))) {
            // line 26
            echo "\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-link\"><i class=\"fa fa-plus\"></i>&nbsp;添加链接
\t    \t\t\t\t\t\t\t</button>
\t    \t\t\t\t\t\t\t";
        }
        // line 29
        echo "
\t                            </div>
\t                        </div>
\t                        ";
        // line 32
        if (checkAuth("Link", "order", ($context["uid"] ?? null))) {
            // line 33
            echo "\t                        <div class=\"row col-md-12\">
                                <div class=\"col-md-2 form-group\">
                                    <span class=\"btn btn-primary add-field\" id=\"order-btn\">排序</span>
                                </div>
                            </div>
                            ";
        }
        // line 39
        echo "                        </form>
                        <div class=\"table-responsive col-md-12\">
                        \t<form id=\"order-form\" name=\"order-form\">
\t                            <table class=\"table table-striped table-hover\">
\t                                <thead>
\t                                    <tr>     
\t                                    \t<th width=\"7%\">                                       
\t                                            <label class=\"checkbox-inline i-checks\">
\t                                                <div class=\"icheckbox_square-green\">
\t                                                    <input type=\"checkbox\" class=\"message-check-all\" />
\t                                                </div> 全选
\t                                            </label>
\t                                        </th> 
\t                                        <th>排序</th>
\t                                    \t<th>链接类型</th>                                  
\t                                        <th>链接名称</th>
\t                                        <th>链接状态</th>
\t                                        <th>操作</th>
\t                                    </tr>
\t                                </thead>
\t                                <tbody>
\t                                    ";
        // line 60
        echo "  
\t                                        ";
        // line 61
        echo ($context["tr"] ?? null);
        echo "
\t                                    ";
        // line 63
        echo "\t                                </tbody>
\t                            </table>
                        \t</form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 74
    public function block_script($context, array $blocks = array())
    {
        // line 75
        echo "    <script>
        \$(document).ready(function(){
        \tinitCheckbox();
        \t\$('.add-link').click(function(){
        \t\tlayer.open({
\t\t\t\t  type: 1,
\t\t\t\t  closeBtn:2,
\t\t\t\t  title:'添加用户',
\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t  content: 
\t\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t\t  '<form class=\"form-horizontal\">'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">链接类型:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-linkType\">'+
                                    ";
        // line 93
        if (($context["categorys"] ?? null)) {
            // line 94
            echo "\t                        \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorys"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 95
                echo "\t                        \t\t\t    '<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>'+
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 98
            echo "\t\t\t\t\t\t\t\t\t\t'<option value=\"0\">请选择一个类型</option>'+
\t\t\t\t\t\t\t\t\t";
        }
        // line 100
        echo "\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+\t

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">父级链接:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-parent-link\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"0\">顶级链接</option>'+
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">链接名称:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-linkName\" placeholder=\"链接名称\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">url:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-url\" placeholder=\"url\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">路由地址:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-router\" class=\"form-control\" placeholder=\"路由地址\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">关键词:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-keywords\" class=\"form-control\" placeholder=\"关键词\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
   \t\t\t            
   \t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">描述:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-description\" class=\"form-control\" placeholder=\"描述\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">打开方式:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-openType\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"_self\">当前窗口</option>'+
\t\t\t\t\t\t\t\t\t'<option value=\"_blank\">新窗口</option>'+
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-link-btn\">添加</span>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t        \t'</form></div>',
\t\t\t\t});
        \t\tif(\$('#add-linkType').val()){
\t\t\t\t   \$.ajax({
\t\t\t\t\t   \turl: '";
        // line 167
        echo twig_escape_filter($this->env, base_url("admin/Link/getLinks"), "html", null, true);
        echo "',
\t\t\t\t\t   \ttype: 'POST',
\t\t\t\t\t   \tdataType: 'json',
\t\t\t\t\t   \tdata:{typeId:\$('#add-linkType').val()},
\t\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t\t   \t},
\t\t\t\t\t   \tsuccess:function(data){
\t
\t\t\t\t\t   \t\t\$('#add-parent-link').html(data.data);
\t\t\t\t\t   \t\tlayer.closeAll('loading');
\t\t\t\t\t   \t}
\t\t\t   \t\t})
        \t\t}
        \t})
\t

        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar id = \$(this).data('val');

\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 189
        echo twig_escape_filter($this->env, base_url("admin/Link/getLink"), "html", null, true);
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

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">链接类型:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-linkType\">'+
                                    ";
        // line 207
        if (($context["categorys"] ?? null)) {
            // line 208
            echo "\t                        \t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categorys"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 209
                echo "\t                        \t\t\t    '<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</option>'+
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
            echo "\t\t\t\t\t\t\t\t\t";
        } else {
            // line 212
            echo "\t\t\t\t\t\t\t\t\t\t'<option value=\"0\">请选择一个类型</option>'+
\t\t\t\t\t\t\t\t\t";
        }
        // line 214
        echo "\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+\t

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">父级链接:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-parent-link\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"0\">顶级链接</option>'+
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">链接名称:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-linkName\" placeholder=\"链接名称\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">url:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-url\" placeholder=\"url\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">路由地址:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-router\" class=\"form-control\" placeholder=\"路由地址\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">关键词:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-keywords\" class=\"form-control\" placeholder=\"关键词\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
   \t\t\t            
   \t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">描述:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-description\" class=\"form-control\" placeholder=\"描述\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">打开方式:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-openType\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"_self\">当前窗口</option>'+
\t\t\t\t\t\t\t\t\t'<option value=\"_blank\">新窗口</option>'+
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t                    '<span class=\"btn btn-primary\" id=\"edit-link-btn\">编辑</span>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t        \t'</form></div>',

\t\t\t\t\t\t\tlayer.open({
\t\t\t\t\t\t\t  type: 1,
\t\t\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t\t\t  title:'编辑链接',
\t\t\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t\t\t  content:domHTML,
\t\t\t\t\t\t\t  success:function(){
\t\t\t\t\t\t\t  \tlayer.closeAll('loading');
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t});

\t\t\t\t\t\t   \$.ajax({
\t\t\t\t\t\t\t   \turl: '";
        // line 292
        echo twig_escape_filter($this->env, base_url("admin/Link/getLinks"), "html", null, true);
        echo "',
\t\t\t\t\t\t\t   \ttype: 'POST',
\t\t\t\t\t\t\t   \tdataType: 'json',
\t\t\t\t\t\t\t   \tasync: false,
\t\t\t\t\t\t\t   \tdata:{typeId:data.tid,id:data.id},
\t\t\t\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t\t\t\t   \t},
\t\t\t\t\t\t\t   \tsuccess:function(data){
\t\t\t\t\t\t\t   \t\t\$('#edit-parent-link').html(data.data);
\t\t\t\t\t\t\t   \t\tlayer.closeAll('loading');
\t\t\t\t\t\t\t   \t}
\t\t\t\t\t   \t\t})

\t\t\t\t\t\t\t\$(\"#edit-linkType\").val(data.tid).trigger('change');
\t\t\t\t\t\t\t\$(\"#edit-parent-link\").val(data.pid);
\t\t\t\t\t\t\t\$('#edit-linkName').val(data.name);
\t\t\t\t\t\t\t\$('#edit-openType').val(data.target);
\t\t\t\t\t\t\t\$('#edit-url').val(data.url);
\t\t\t\t\t\t\t\$('#edit-router').val(data.router_url);
\t\t\t\t\t\t\t\$('#edit-keywords').val(data.keywords);
\t\t\t\t\t\t\t\$('#edit-description').val(data.description);
\t\t\t\t\t\t\t\$('#edit-link-btn').attr(\"data-id\",id);
\t\t
        \t\t\t
        \t\t})        \t\t
        \t})
\t\t\t
\t\t\t\$('#linkType').on(\"change\",function(){
\t\t\t\t\$v = \$(this).val();
\t\t\t\twindow.location.href = \"?tid=\"+\$v;
\t\t\t})

\t\t\t// \$(document).on(\"change\" ,\"#edit-linkType\",function(){
\t\t\t//    \$.ajax({
\t\t\t// \t   \turl: '";
        // line 327
        echo twig_escape_filter($this->env, base_url("admin/Link/getLinks"), "html", null, true);
        echo "',
\t\t\t// \t   \ttype: 'POST',
\t\t\t// \t   \tdataType: 'json',
\t\t\t// \t   \tasync: false,
\t\t\t// \t   \tdata:{typeId:\$(this).val()},
\t\t\t// \t   \tbeforeSend:function(){
\t\t\t// \t   \t\tlayer.load(2);
\t\t\t// \t   \t},
\t\t\t// \t   \tsuccess:function(data){
\t\t\t// \t   \t\t\$('#edit-parent-link').html(data.data);
\t\t\t// \t   \t\tlayer.closeAll('loading');
\t\t\t// \t   \t}
\t\t //   \t\t})
\t\t\t// })

\t\t\t\$(document).on(\"change\" ,\"#add-linkType\",function(){
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 344
        echo twig_escape_filter($this->env, base_url("admin/Link/getLinks"), "html", null, true);
        echo "',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \tdata:{typeId:\$(this).val()},
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t},
\t\t\t\t   \tsuccess:function(data){
\t\t\t\t   \t\t\$('#add-parent-link').html(data.data);
\t\t\t\t   \t\tlayer.closeAll('loading');
\t\t\t\t   \t}
\t\t   \t\t})
\t\t\t})


\t\t\t\$(document).on(\"click\" ,\"#add-link-btn\",function(){
\t\t\t\tdata = {
\t\t\t\t\t'name':\$('#add-linkName').val(),
\t\t\t\t\t'tid':\$('#add-linkType').val(),
\t\t\t\t\t'pid':\$('#add-parent-link').val(),
\t\t\t\t\t'target':\$('#add-openType').val(),
\t\t\t\t\t'url':\$('#add-url').val(),
\t\t\t\t\t'router_url':\$('#add-router').val(),
\t\t\t\t\t'keywords':\$('#add-keywords').val(),
\t\t\t\t\t'description':\$('#add-description').val()
\t\t\t\t}
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 371
        echo twig_escape_filter($this->env, base_url("admin/Link/add"), "html", null, true);
        echo "',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \tdata:data,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t},
\t\t\t\t   \tsuccess:function(data){
                        if(data.status=='1'){
                            layer.msg(data.message,{icon: 1});
                            window.location.reload(true);
                        }else{
                            layer.msg(data.message,{icon: 2});
                            layer.closeAll('loading');
                        }
\t\t\t\t   \t}
\t\t   \t\t})
\t\t\t})

\t\t\t\$(document).on(\"click\" ,\"#edit-link-btn\",function(){
\t\t\t\tdata = {
\t\t\t\t\t'id':\$(this).data('id'),
\t\t\t\t\t'name':\$('#edit-linkName').val(),
\t\t\t\t\t'tid':\$('#edit-linkType').val(),
\t\t\t\t\t'pid':\$('#edit-parent-link').val(),
\t\t\t\t\t'target':\$('#edit-openType').val(),
\t\t\t\t\t'url':\$('#edit-url').val(),
\t\t\t\t\t'router_url':\$('#edit-router').val(),
\t\t\t\t\t'keywords':\$('#edit-keywords').val(),
\t\t\t\t\t'description':\$('#edit-description').val()
\t\t\t\t}
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '";
        // line 403
        echo twig_escape_filter($this->env, base_url("admin/Link/edit"), "html", null, true);
        echo "',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \tdata:data,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t},
\t\t\t\t   \tsuccess:function(data){
                        if(data.status=='1'){
                            layer.msg(data.message,{icon: 1});
                            window.location.reload(true);
                        }else{
                            layer.msg(data.message,{icon: 2});
                            layer.closeAll('loading');
                        }
\t\t\t\t   \t}
\t\t   \t\t})
\t\t\t})

\t
        \$('#order-btn').click(function(){
            \$.ajax({
             type: \"POST\",
             url: \"";
        // line 426
        echo twig_escape_filter($this->env, base_url("admin/Link/order"), "html", null, true);
        echo "\",
             data: \$('#order-form').serialize(),
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

    　　\$(\".delete-btn\").click(function(){
    　　　　var id = \$(this).data('val');
            layer.confirm('你确定删除此链接？', {icon: 3, title:'确定删除链接'}, function(index){
            \$.ajax({
                type:\"POST\",
                url:\"";
        // line 444
        echo twig_escape_filter($this->env, base_url("admin/Link/del"), "html", null, true);
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
    　　});

        function initCheckbox(){
            \$(\".i-checks\").iCheck({
                checkboxClass:\"icheckbox_square-green\",
                radioClass:\"iradio_square-green\",
            });
            \$('.message-check-all').on('ifChanged', function(event) {
                if(\$(this).prop('checked')){
                    \$('.message-check-one').iCheck('check')
                }else{
                    \$('.message-check-one').iCheck('uncheck');
                }   
                
            });  
            \$('.message-check-one').on('ifChanged', function(event) {
                if (\$('.message-check-one:checked').length>1) {
                    \$('.delete-checked').removeClass('hide')
                } else {
                    \$('.delete-checked').addClass('hide')

                }
            });                                 
        } \t\t


    \t});



    </script>
";
    }

    public function getTemplateName()
    {
        return "Link/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  587 => 444,  566 => 426,  540 => 403,  505 => 371,  475 => 344,  455 => 327,  417 => 292,  337 => 214,  333 => 212,  330 => 211,  319 => 209,  314 => 208,  312 => 207,  291 => 189,  266 => 167,  197 => 100,  193 => 98,  190 => 97,  179 => 95,  174 => 94,  172 => 93,  152 => 75,  149 => 74,  135 => 63,  131 => 61,  128 => 60,  105 => 39,  97 => 33,  95 => 32,  90 => 29,  85 => 26,  83 => 25,  76 => 20,  72 => 18,  69 => 17,  54 => 15,  49 => 14,  47 => 13,  39 => 8,  32 => 3,  29 => 2,  11 => 1,);
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
\t                        \t\t<label for=\"search-username\">链接类型</label>
\t                        \t\t<select id=\"linkType\" class=\"form-control\" name=\"linkType\">
\t                                    {% if categorys %}
\t\t                        \t\t\t{% for category in categorys %}
\t\t                        \t\t\t    <option value=\"{{category.id}}\" {% if category.id == tid %}selected{% endif %}>{{category.name}}</option>
\t                                        {% endfor %}
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t'<option value=\"0\">请选择一个类型</option>'+
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t                        \t\t</select>
\t                        \t</div>

\t                            <div class=\"col-md-3 form-group\">
\t                            \t<label for=\"null\" class=\"center-block\">&nbsp;</label>
\t    \t\t\t\t\t\t\t{% if checkAuth('Link','add',uid) %}
\t    \t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary add-link\"><i class=\"fa fa-plus\"></i>&nbsp;添加链接
\t    \t\t\t\t\t\t\t</button>
\t    \t\t\t\t\t\t\t{% endif %}

\t                            </div>
\t                        </div>
\t                        {% if checkAuth('Link','order',uid) %}
\t                        <div class=\"row col-md-12\">
                                <div class=\"col-md-2 form-group\">
                                    <span class=\"btn btn-primary add-field\" id=\"order-btn\">排序</span>
                                </div>
                            </div>
                            {% endif %}
                        </form>
                        <div class=\"table-responsive col-md-12\">
                        \t<form id=\"order-form\" name=\"order-form\">
\t                            <table class=\"table table-striped table-hover\">
\t                                <thead>
\t                                    <tr>     
\t                                    \t<th width=\"7%\">                                       
\t                                            <label class=\"checkbox-inline i-checks\">
\t                                                <div class=\"icheckbox_square-green\">
\t                                                    <input type=\"checkbox\" class=\"message-check-all\" />
\t                                                </div> 全选
\t                                            </label>
\t                                        </th> 
\t                                        <th>排序</th>
\t                                    \t<th>链接类型</th>                                  
\t                                        <th>链接名称</th>
\t                                        <th>链接状态</th>
\t                                        <th>操作</th>
\t                                    </tr>
\t                                </thead>
\t                                <tbody>
\t                                    {% autoescape true %}  
\t                                        {{tr|raw}}
\t                                    {% endautoescape %}
\t                                </tbody>
\t                            </table>
                        \t</form>
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
        \tinitCheckbox();
        \t\$('.add-link').click(function(){
        \t\tlayer.open({
\t\t\t\t  type: 1,
\t\t\t\t  closeBtn:2,
\t\t\t\t  title:'添加用户',
\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t  content: 
\t\t\t\t  '<div class=\"ibox-content\">'+
\t\t\t\t  '<form class=\"form-horizontal\">'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">链接类型:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-linkType\">'+
                                    {% if categorys %}
\t                        \t\t\t{% for category in categorys %}
\t                        \t\t\t    '<option value=\"{{category.id}}\">{{category.name}}</option>'+
                                        {% endfor %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t'<option value=\"0\">请选择一个类型</option>'+
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+\t

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">父级链接:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-parent-link\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"0\">顶级链接</option>'+
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">链接名称:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-linkName\" placeholder=\"链接名称\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">url:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"add-url\" placeholder=\"url\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">路由地址:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-router\" class=\"form-control\" placeholder=\"路由地址\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">关键词:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-keywords\" class=\"form-control\" placeholder=\"关键词\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
   \t\t\t            
   \t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">描述:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"add-description\" class=\"form-control\" placeholder=\"描述\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">打开方式:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"add-openType\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"_self\">当前窗口</option>'+
\t\t\t\t\t\t\t\t\t'<option value=\"_blank\">新窗口</option>'+
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t                    '<span class=\"btn btn-primary\" id=\"add-link-btn\">添加</span>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t        \t'</form></div>',
\t\t\t\t});
        \t\tif(\$('#add-linkType').val()){
\t\t\t\t   \$.ajax({
\t\t\t\t\t   \turl: '{{base_url(\"admin/Link/getLinks\")}}',
\t\t\t\t\t   \ttype: 'POST',
\t\t\t\t\t   \tdataType: 'json',
\t\t\t\t\t   \tdata:{typeId:\$('#add-linkType').val()},
\t\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t\t   \t},
\t\t\t\t\t   \tsuccess:function(data){
\t
\t\t\t\t\t   \t\t\$('#add-parent-link').html(data.data);
\t\t\t\t\t   \t\tlayer.closeAll('loading');
\t\t\t\t\t   \t}
\t\t\t   \t\t})
        \t\t}
        \t})
\t

        \t\$(document).on('click','.edit-btn',function(){
        \t\tvar \$this = \$(this);
        \t\tvar id = \$(this).data('val');

\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/Link/getLink\")}}',
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

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">链接类型:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-linkType\">'+
                                    {% if categorys %}
\t                        \t\t\t{% for category in categorys %}
\t                        \t\t\t    '<option value=\"{{category.id}}\">{{category.name}}</option>'+
                                        {% endfor %}
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t'<option value=\"0\">请选择一个类型</option>'+
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+\t

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">父级链接:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-parent-link\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"0\">顶级链接</option>'+
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">链接名称:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-linkName\" placeholder=\"链接名称\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">url:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" class=\"form-control\" id=\"edit-url\" placeholder=\"url\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">路由地址:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-router\" class=\"form-control\" placeholder=\"路由地址\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">关键词:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-keywords\" class=\"form-control\" placeholder=\"关键词\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
   \t\t\t            
   \t\t\t            '<div class=\"form-group must\">'+
\t\t\t            '<label class=\"col-sm-3 control-label\">描述:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t                    '<input type=\"text\" autocomplete=\"off\" id=\"edit-description\" class=\"form-control\" placeholder=\"描述\">'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<label class=\"col-sm-3 control-label\">打开方式:</label>'+
\t\t\t             \t'<div class=\"col-sm-8\">'+
\t\t\t\t\t\t\t\t'<select class=\"form-control\" id=\"edit-openType\">'+
\t\t\t\t\t\t\t\t\t'<option value=\"_self\">当前窗口</option>'+
\t\t\t\t\t\t\t\t\t'<option value=\"_blank\">新窗口</option>'+
\t\t\t\t\t\t\t\t'</select>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+

\t\t\t            '<div class=\"form-group\">'+
\t\t\t                '<div class=\"col-sm-offset-3 col-sm-8\">'+
\t\t\t                    '<span class=\"btn btn-primary\" id=\"edit-link-btn\">编辑</span>'+
\t\t\t                '</div>'+
\t\t\t            '</div>'+
\t\t        \t'</form></div>',

\t\t\t\t\t\t\tlayer.open({
\t\t\t\t\t\t\t  type: 1,
\t\t\t\t\t\t\t  closeBtn:2,
\t\t\t\t\t\t\t  title:'编辑链接',
\t\t\t\t\t\t\t  shadeClose: true, //开启遮罩关闭
\t\t\t\t\t\t\t  area: ['600px', 'auto'],
\t\t\t\t\t\t\t  content:domHTML,
\t\t\t\t\t\t\t  success:function(){
\t\t\t\t\t\t\t  \tlayer.closeAll('loading');
\t\t\t\t\t\t\t  }
\t\t\t\t\t\t\t});

\t\t\t\t\t\t   \$.ajax({
\t\t\t\t\t\t\t   \turl: '{{base_url(\"admin/Link/getLinks\")}}',
\t\t\t\t\t\t\t   \ttype: 'POST',
\t\t\t\t\t\t\t   \tdataType: 'json',
\t\t\t\t\t\t\t   \tasync: false,
\t\t\t\t\t\t\t   \tdata:{typeId:data.tid,id:data.id},
\t\t\t\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t\t\t\t   \t},
\t\t\t\t\t\t\t   \tsuccess:function(data){
\t\t\t\t\t\t\t   \t\t\$('#edit-parent-link').html(data.data);
\t\t\t\t\t\t\t   \t\tlayer.closeAll('loading');
\t\t\t\t\t\t\t   \t}
\t\t\t\t\t   \t\t})

\t\t\t\t\t\t\t\$(\"#edit-linkType\").val(data.tid).trigger('change');
\t\t\t\t\t\t\t\$(\"#edit-parent-link\").val(data.pid);
\t\t\t\t\t\t\t\$('#edit-linkName').val(data.name);
\t\t\t\t\t\t\t\$('#edit-openType').val(data.target);
\t\t\t\t\t\t\t\$('#edit-url').val(data.url);
\t\t\t\t\t\t\t\$('#edit-router').val(data.router_url);
\t\t\t\t\t\t\t\$('#edit-keywords').val(data.keywords);
\t\t\t\t\t\t\t\$('#edit-description').val(data.description);
\t\t\t\t\t\t\t\$('#edit-link-btn').attr(\"data-id\",id);
\t\t
        \t\t\t
        \t\t})        \t\t
        \t})
\t\t\t
\t\t\t\$('#linkType').on(\"change\",function(){
\t\t\t\t\$v = \$(this).val();
\t\t\t\twindow.location.href = \"?tid=\"+\$v;
\t\t\t})

\t\t\t// \$(document).on(\"change\" ,\"#edit-linkType\",function(){
\t\t\t//    \$.ajax({
\t\t\t// \t   \turl: '{{base_url(\"admin/Link/getLinks\")}}',
\t\t\t// \t   \ttype: 'POST',
\t\t\t// \t   \tdataType: 'json',
\t\t\t// \t   \tasync: false,
\t\t\t// \t   \tdata:{typeId:\$(this).val()},
\t\t\t// \t   \tbeforeSend:function(){
\t\t\t// \t   \t\tlayer.load(2);
\t\t\t// \t   \t},
\t\t\t// \t   \tsuccess:function(data){
\t\t\t// \t   \t\t\$('#edit-parent-link').html(data.data);
\t\t\t// \t   \t\tlayer.closeAll('loading');
\t\t\t// \t   \t}
\t\t //   \t\t})
\t\t\t// })

\t\t\t\$(document).on(\"change\" ,\"#add-linkType\",function(){
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/Link/getLinks\")}}',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \tdata:{typeId:\$(this).val()},
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t},
\t\t\t\t   \tsuccess:function(data){
\t\t\t\t   \t\t\$('#add-parent-link').html(data.data);
\t\t\t\t   \t\tlayer.closeAll('loading');
\t\t\t\t   \t}
\t\t   \t\t})
\t\t\t})


\t\t\t\$(document).on(\"click\" ,\"#add-link-btn\",function(){
\t\t\t\tdata = {
\t\t\t\t\t'name':\$('#add-linkName').val(),
\t\t\t\t\t'tid':\$('#add-linkType').val(),
\t\t\t\t\t'pid':\$('#add-parent-link').val(),
\t\t\t\t\t'target':\$('#add-openType').val(),
\t\t\t\t\t'url':\$('#add-url').val(),
\t\t\t\t\t'router_url':\$('#add-router').val(),
\t\t\t\t\t'keywords':\$('#add-keywords').val(),
\t\t\t\t\t'description':\$('#add-description').val()
\t\t\t\t}
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/Link/add\")}}',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \tdata:data,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t},
\t\t\t\t   \tsuccess:function(data){
                        if(data.status=='1'){
                            layer.msg(data.message,{icon: 1});
                            window.location.reload(true);
                        }else{
                            layer.msg(data.message,{icon: 2});
                            layer.closeAll('loading');
                        }
\t\t\t\t   \t}
\t\t   \t\t})
\t\t\t})

\t\t\t\$(document).on(\"click\" ,\"#edit-link-btn\",function(){
\t\t\t\tdata = {
\t\t\t\t\t'id':\$(this).data('id'),
\t\t\t\t\t'name':\$('#edit-linkName').val(),
\t\t\t\t\t'tid':\$('#edit-linkType').val(),
\t\t\t\t\t'pid':\$('#edit-parent-link').val(),
\t\t\t\t\t'target':\$('#edit-openType').val(),
\t\t\t\t\t'url':\$('#edit-url').val(),
\t\t\t\t\t'router_url':\$('#edit-router').val(),
\t\t\t\t\t'keywords':\$('#edit-keywords').val(),
\t\t\t\t\t'description':\$('#edit-description').val()
\t\t\t\t}
\t\t\t   \$.ajax({
\t\t\t\t   \turl: '{{base_url(\"admin/Link/edit\")}}',
\t\t\t\t   \ttype: 'POST',
\t\t\t\t   \tdataType: 'json',
\t\t\t\t   \tdata:data,
\t\t\t\t   \tbeforeSend:function(){
\t\t\t\t   \t\tlayer.load(2);
\t\t\t\t   \t},
\t\t\t\t   \tsuccess:function(data){
                        if(data.status=='1'){
                            layer.msg(data.message,{icon: 1});
                            window.location.reload(true);
                        }else{
                            layer.msg(data.message,{icon: 2});
                            layer.closeAll('loading');
                        }
\t\t\t\t   \t}
\t\t   \t\t})
\t\t\t})

\t
        \$('#order-btn').click(function(){
            \$.ajax({
             type: \"POST\",
             url: \"{{base_url('admin/Link/order')}}\",
             data: \$('#order-form').serialize(),
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

    　　\$(\".delete-btn\").click(function(){
    　　　　var id = \$(this).data('val');
            layer.confirm('你确定删除此链接？', {icon: 3, title:'确定删除链接'}, function(index){
            \$.ajax({
                type:\"POST\",
                url:\"{{base_url('admin/Link/del')}}\",
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
    　　});

        function initCheckbox(){
            \$(\".i-checks\").iCheck({
                checkboxClass:\"icheckbox_square-green\",
                radioClass:\"iradio_square-green\",
            });
            \$('.message-check-all').on('ifChanged', function(event) {
                if(\$(this).prop('checked')){
                    \$('.message-check-one').iCheck('check')
                }else{
                    \$('.message-check-one').iCheck('uncheck');
                }   
                
            });  
            \$('.message-check-one').on('ifChanged', function(event) {
                if (\$('.message-check-one:checked').length>1) {
                    \$('.delete-checked').removeClass('hide')
                } else {
                    \$('.delete-checked').addClass('hide')

                }
            });                                 
        } \t\t


    \t});



    </script>
{% endblock %}", "Link/index.twig", "D:\\phpStudy\\WWW\\blog\\templates\\admin\\default\\Link\\index.twig");
    }
}
