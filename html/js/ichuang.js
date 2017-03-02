
//小提示
;(function($) {

    /** just tip **/
    function justTools(elem, options){
        this.elem = elem;
        this.set = options;
        //this.obj = null;
    }
    justTools.prototype = {
        addAnimation: function(){
            switch(this.set.animation){
                case 'none':
                    break;
                case 'fadeIn':
                    this.obj.addClass('animated fadeIn');
                    break;
                case 'flipIn':
                    switch(this.set.gravity){
                        case 'top':
                            this.obj.addClass('animated flipInTop');
                            break;
                        case 'bottom':
                            this.obj.addClass('animated flipInBottom');
                            break;
                        case 'left':
                            this.obj.addClass('animated flipInLeft');
                            break;
                        case 'right':
                            this.obj.addClass('animated flipInRight');
                            break;
                    }
                    break;
                case 'moveInLeft':
                    this.obj.addClass('animated moveLeft');
                    break;
                case 'moveInTop':
                    this.obj.addClass('animated moveTop');
                    break;
                case 'moveInBottom':
                    this.obj.addClass('animated moveBottom');
                    break;
                case 'moveInRight':
                    this.obj.addClass('animated moveRight');
                    break;
            }
        },
        close:function(){
            this.obj.remove();
        },
        setPosition:function(){
            var setPos = {};
            var pos = { x: this.elem.offset().left, y: this.elem.offset().top };
            var wh = { w: this.elem.outerWidth(), h: this.elem.outerHeight() };
            var rightTmp = ( pos.x + wh.w / 2 ) + this.obj.outerWidth() / 2 ;
            var leftTmp = ( pos.x + wh.w / 2 ) - this.obj.outerWidth() / 2 ;
            //console.log(leftTmp)
            switch(this.set.gravity){
                case 'top':
                    if(rightTmp > $(window).width() ){
                        setPos = {
                            x: pos.x + wh.w - this.obj.outerWidth(),
                            y: pos.y - this.obj.outerHeight() - this.set.distance
                        };
                        this.obj.find(".just-" + this.set.gravity).css("left", this.obj.outerWidth() - wh.w/2 + "px")
                    }else if( leftTmp < 0 ){
                        setPos = {
                            x: pos.x,
                            y: pos.y - this.obj.outerHeight() - this.set.distance
                        };
                        this.obj.find(".just-" + this.set.gravity).css("left", wh.w/2 + "px")
                    }else{
                        setPos = {
                            x: pos.x - (this.obj.outerWidth() - wh.w)/2,
                            y: pos.y - this.obj.outerHeight() - this.set.distance
                        };
                    }
                    break;
                case 'bottom':
                    if(rightTmp > $(window).width() ){
                        setPos = {
                            x: pos.x + wh.w - this.obj.outerWidth(),
                            y: pos.y + wh.h + this.set.distance
                        };
                        this.obj.find(".just-" + this.set.gravity).css("left", this.obj.outerWidth() - wh.w/2 + "px")
                    }else if( leftTmp < 0 ){
                        setPos = {
                            x: pos.x,
                            y: pos.y + wh.h + this.set.distance
                        };
                        this.obj.find(".just-" + this.set.gravity).css("left", wh.w/2 + "px")
                    }else{
                        setPos = {
                            x: pos.x - (this.obj.outerWidth() - wh.w)/2,
                            y: pos.y + wh.h + this.set.distance
                        };
                    }
                    break;
                case 'left':
                    setPos = {
                        x: pos.x - this.obj.outerWidth() - this.set.distance,
                        y: pos.y - (this.obj.outerHeight() - wh.h)/2
                    };
                    break;
                case 'right':
                    setPos = {
                        x: pos.x + wh.w + this.set.distance,
                        y: pos.y - (this.obj.outerHeight() - wh.h)/2
                    };
                    break;
            }
            this.obj.css({"left": setPos.x + "px", "top": setPos.y + "px"});
        },
        setEvent:function(){
            var self = this;
            //console.log(self.set.events)
            if(self.set.events =="click" || self.set.events =="onclick"){
                self.obj.on("click", function(e){
                    e.stopPropagation();
                });
                $(document).click(function(){
                    //$(".just-tooltip").remove();
                    self.obj.remove();
                });
            }
            // console.log(self.set.events)
            if(self.set.events =="mouseover" || self.set.events =="onmouseover" || self.set.events =="mouseenter"){
                this.elem.on("mouseout, mouseleave",function(){
                    self.close();
                });
                // console.log(1)
            }
        },
        setConfirmEvents:function(){
            var self = this;
            var yes = this.obj.find(".just-yes");
            var no = this.obj.find(".just-no");
            yes.click(function(){
                if(self.set.onYes(self)==true){
                    self.close();
                }
            });
            no.click(function(){
                self.close();
                self.set.onNo(self);
            })
        },
        addConfirm:function(){
            this.obj.append("<div class='just-confirm'><button type='button' class='just-yes'>"
                + this.set.yes +"</button><button type='button' class='just-no'>" + this.set.no +"</button></div>");
            this.setConfirmEvents();
        },
        setContent:function(){
            this.obj = $("<div id=" + this.set.id + " class='just-tooltip " + this.set.theme + "'" +
                "style='width:" + this.set.width + "'><div class='just-con'>" + this.set.contents + "</div>" + "<span class='just-" + this.set.gravity + "'></span></div>");
            $("body").append(this.obj);
            //this.elem.append(this.obj);
            this.setEvent();
            this.addAnimation();
            if(this.set.confirm==true){
                this.addConfirm();
            }
        },
        init:function(){
            //var evt = window.event || arguments.callee.caller.arguments[0];
            //var evt = $.event.fix(event || window.event);
            var e = arguments.callee.caller.caller.caller.caller.caller.arguments[0] || $.event.fix(event || window.event)
            this.set.events = e.type;
            //this.elem.on(this.set.events, function(e){
            var justToolObj = $(".just-tooltip");
            if(justToolObj){
                justToolObj.remove();
            }
            e.stopPropagation();
            this.setContent();
            this.setPosition();
            //});
            var self = this;
            $(window).resize(function(){
                self.setPosition();
            })
        }
    };
    $.fn.justToolsTip = function(options){
        var defaults = {
            //opacity: 0.5,
            height:"auto",
            width:"auto",
            contents:'',
            gravity: 'top',  //top, left, bottom, right
            theme: '',//className
            distance:10,
            //events: 'mouseover',
            animation: 'none', //none, fadeIn, flipIn, moveInLeft, moveInTop, moveInBottom, moveInRight
            confirm: false,
            yes: '确定',
            no: '取消',
            //delay: 1000,
            onYes: function(){}, //返回ture，关闭tools
            onNo: function(){}
        };
        this.each(function(){
            options = $.extend(defaults, options);
            options.id = new Date().getTime();
            var tooltip = new justTools($(this), options);
            tooltip.init();
        });
    }

})(jQuery);

// 分页
;(function($,window,document,undefined){

    //配置参数
    var defaults = {
        totalData:0,			//数据总条数
        showData:0,				//每页显示的条数
        pageCount:9,			//总页数,默认为9
        current:1,				//当前第几页
        prevCls:'prev',			//上一页class
        nextCls:'next',			//下一页class
        prevContent:'<',		//上一页内容
        nextContent:'>',		//下一页内容
        activeCls:'active',		//当前页选中状态
        coping:false,			//首页和尾页
        homePage:'',			//首页节点内容
        endPage:'',				//尾页节点内容
        count:3,				//当前页前后分页个数
        jump:false,				//跳转到指定页数
        jumpIptCls:'jump-ipt',	//文本框内容
        jumpBtnCls:'jump-btn',	//跳转按钮
        jumpBtn:'跳转',			//跳转按钮文本
        callback:function(){}	//回调
    };

    var Pagination = function(element,options){
        //全局变量
        var opts = options,//配置
            current,//当前页
            $document = $(document),
            $obj = $(element);//容器

        /**
         * 设置总页数
         * @param int page 页码
         * @return opts.pageCount 总页数配置
         */
        this.setTotalPage = function(page){
            return opts.pageCount = page;
        };

        /**
         * 获取总页数
         * @return int p 总页数
         */
        this.getTotalPage = function(){
            var p = opts.totalData || opts.showData ? Math.ceil(parseInt(opts.totalData) / opts.showData) : opts.pageCount;
            return p;
        };

        //获取当前页
        this.getCurrent = function(){
            return current;
        };

        /**
         * 填充数据
         * @param int index 页码
         */
        this.filling = function(index){
            var html = '';
            current = index || opts.current;//当前页码

            var pageCount = this.getTotalPage();


            if (opts.totalData<=opts.showData){
                html+='';
            }else {
                if(current > 1){//上一页
                    html += '<a href="javascript:;" class="'+opts.prevCls+'">'+opts.prevContent+'</a>';
                }else{
                    $obj.find('.'+opts.prevCls) && $obj.find('.'+opts.prevCls).remove();
                }
                if(current >= opts.count * 2 && current != 1 && pageCount != opts.count){
                    var home = opts.coping && opts.homePage ? opts.homePage : '1';
                    html += opts.coping ? '<a href="javascript:;" data-page="1">'+home+'</a><span>...</span>' : '';
                }
                var start = current - opts.count,
                    end = current + opts.count;
                ((start > 1 && current < opts.count) || current == 1) && end++;
                (current > pageCount - opts.count && current >= pageCount) && start++;
                for (;start <= end; start++) {
                    if(start <= pageCount && start >= 1){
                        if(start != current){
                            html += '<a href="javascript:;" data-page="'+start+'">'+ start +'</a>';
                        }else{
                            html += '<span class="'+opts.activeCls+'">'+ start +'</span>';
                        }
                    }
                }
                if(current + opts.count < pageCount && current >= 1 && pageCount > opts.count){
                    var end = opts.coping && opts.endPage ? opts.endPage : pageCount;
                    html += opts.coping ? '<span>...</span><a href="javascript:;" data-page="'+pageCount+'">'+end+'</a>' : '';
                }
                if(current < pageCount){//下一页
                    html += '<a href="javascript:;" class="'+opts.nextCls+'">'+opts.nextContent+'</a>'
                }else{
                    $obj.find('.'+opts.nextCls) && $obj.find('.'+opts.nextCls).remove();
                }

                html += opts.jump ? '<input type="text" class="'+opts.jumpIptCls+'"><a href="javascript:;" class="'+opts.jumpBtnCls+'">'+opts.jumpBtn+'</a>' : '';
            }
            
            $obj.empty().html(html);
        };

        //绑定事件
        this.eventBind = function(){
            var self = this;
            var pageCount = this.getTotalPage();//总页数
            $obj.off().on('click','a',function(){
                if($(this).hasClass(opts.nextCls)){
                    var index = parseInt($obj.find('.'+opts.activeCls).text()) + 1;
                }else if($(this).hasClass(opts.prevCls)){
                    var index = parseInt($obj.find('.'+opts.activeCls).text()) - 1;
                }else if($(this).hasClass(opts.jumpBtnCls)){
                    if($obj.find('.'+opts.jumpIptCls).val() !== ''){
                        var index = parseInt($obj.find('.'+opts.jumpIptCls).val());
                    }else{
                        return;
                    }
                }else{
                    var index = parseInt($(this).data('page'));
                }
                self.filling(index);
                typeof opts.callback === 'function' && opts.callback(self);
            });
            //输入跳转的页码
            $obj.on('input propertychange','.'+opts.jumpIptCls,function(){
                var $this = $(this);
                var val = $this.val();
                var reg = /[^\d]/g;
                if (reg.test(val)) {
                    $this.val(val.replace(reg, ''));
                }
                (parseInt(val) > pageCount) && $this.val(pageCount);
                if(parseInt(val) === 0){//最小值为1
                    $this.val(1);
                }
            });
            //回车跳转指定页码
            $document.keydown(function(e){
                var self = this;
                if(e.keyCode == 13 && $obj.find('.'+opts.jumpIptCls).val()){
                    var index = parseInt($obj.find('.'+opts.jumpIptCls).val());
                    self.filling(index);
                    typeof opts.callback === 'function' && opts.callback(self);
                }
            });
        };

        //初始化
        this.init = function(){
            this.filling(opts.current);
            this.eventBind();
        };
        this.init();
    };

    $.fn.pagination = function(parameter,callback){
        if(typeof parameter == 'function'){//重载
            callback = parameter;
            parameter = {};
        }else{
            parameter = parameter || {};
            callback = callback || function(){};
        }
        var options = $.extend({},defaults,parameter);
        return this.each(function(){
            var pagination = new Pagination(this, options);
            callback(pagination);
        });
    };

})(jQuery,window,document);


//点赞
;(function($) {
    $.extend({
        tipsBox: function (options) {
            options = $.extend({
                obj: null,  //jq对象，要在哪个html标签上显示
                str: "+1",  //字符串，要显示的内容;也可以传一段html，如: "<b style='font-family:Microsoft YaHei;'>+1</b>"
                startSize: "12px",  //动画开始的文字大小
                endSize: "30px",    //动画结束的文字大小
                interval: 600,  //动画时间间隔
                color: "#00A1F2",    //文字颜色
                callback: function () { }    //回调函数
            }, options);
            $("body").append("<span class='num'>" + options.str + "</span>");
            var box = $(".num");
            var left = options.obj.offset().left + options.obj.width() / 2;
            var top = options.obj.offset().top;
            box.css({
                "position": "absolute",
                "left": left + "px",
                "top": top + "px",
                "z-index": 9999,
                "font-size": options.startSize,
                "line-height": options.endSize,
                "color": options.color
            });
            box.animate({
                "font-size": options.endSize,
                "opacity": "0",
                "top": top - parseInt(options.endSize) + "px"
            }, options.interval, function () {
                box.remove();
                options.callback();
            });
        }
    });

})(jQuery);

//自动补全
;(function($){
    var bigAutocomplete = new function(){
        this.currentInputText = null;//目前获得光标的输入框（解决一个页面多个输入框绑定自动补全功能）
        this.functionalKeyArray = [9,20,13,16,17,18,91,92,93,45,36,33,34,35,37,39,112,113,114,115,116,117,118,119,120,121,122,123,144,19,145,40,38,27];//键盘上功能键键值数组
        this.holdText = null;//输入框中原始输入的内容

        //初始化插入自动补全div，并在document注册mousedown，点击非div区域隐藏div
        this.init = function(){
            $("body").append("<div id='bigAutocompleteContent' class='bigautocomplete-layout'></div>");
            $(document).bind('mousedown',function(event){
                var $target = $(event.target);
                if((!($target.parents().andSelf().is('#bigAutocompleteContent'))) && (!$target.is(bigAutocomplete.currentInputText))){
                    bigAutocomplete.hideAutocomplete();
                }
            });

            //鼠标悬停时选中当前行
            $("#bigAutocompleteContent").delegate("tr", "mouseover", function() {
                $("#bigAutocompleteContent tr").removeClass("ct");
                $(this).addClass("ct");
            }).delegate("tr", "mouseout", function() {
                $("#bigAutocompleteContent tr").removeClass("ct");
            });


            //单击选中行后，选中行内容设置到输入框中，并执行callback函数
            $("#bigAutocompleteContent").delegate("tr", "click", function() {
                bigAutocomplete.currentInputText.val( $(this).find("div:last").find('span').text());
                var callback_ = bigAutocomplete.currentInputText.data("config").callback;
                if($("#bigAutocompleteContent").css("display") != "none" && callback_ && $.isFunction(callback_)){
                    callback_($(this).data("jsonData"));

                }
                bigAutocomplete.hideAutocomplete();
            })

        };

        this.autocomplete = function(param){

            if($("body").length > 0 && $("#bigAutocompleteContent").length <= 0){
                bigAutocomplete.init();//初始化信息
            }

            var $this = $(this);//为绑定自动补全功能的输入框jquery对象

            var $bigAutocompleteContent = $("#bigAutocompleteContent");

            this.config = {
                //width:下拉框的宽度，默认使用输入框宽度
                width:$this.outerWidth(),
                //url：格式url:""用来ajax后台获取数据，返回的数据格式为data参数一样
                val:null,   //当前input的参数
                url:null,
                /*data：格式{data:[{tag_name:null,result:{},url:1},{tag_name:null,result:{},url:1}]}
                 url和data参数只有一个生效，data优先*/
                data:null,
                //callback：选中行后按回车或单击时回调的函数
                callback:null};
            $.extend(this.config,param);

            $this.data("config",this.config);

            //输入框keydown事件
            $this.keydown(function(event) {
                switch (event.keyCode) {
                    case 40://向下键

                        if($bigAutocompleteContent.css("display") == "none")return;

                        var $nextSiblingTr = $bigAutocompleteContent.find(".ct");
                        if($nextSiblingTr.length <= 0){//没有选中行时，选中第一行
                            $nextSiblingTr = $bigAutocompleteContent.find("tr:first");
                        }else{
                            $nextSiblingTr = $nextSiblingTr.next();
                        }
                        $bigAutocompleteContent.find("tr").removeClass("ct");

                        if($nextSiblingTr.length > 0){//有下一行时（不是最后一行）
                            $nextSiblingTr.addClass("ct");//选中的行加背景
                            $this.val($nextSiblingTr.find("div:last").find('span').text());//选中行内容设置到输入框中

                            //div滚动到选中的行,jquery-1.6.1 $nextSiblingTr.offset().top 有bug，数值有问题
                            $bigAutocompleteContent.scrollTop($nextSiblingTr[0].offsetTop - $bigAutocompleteContent.height() + $nextSiblingTr.height() );

                        }else{
                            $this.val(bigAutocomplete.holdText);//输入框显示用户原始输入的值
                        }


                        break;
                    case 38://向上键
                        if($bigAutocompleteContent.css("display") == "none")return;

                        var $previousSiblingTr = $bigAutocompleteContent.find(".ct");
                        if($previousSiblingTr.length <= 0){//没有选中行时，选中最后一行行
                            $previousSiblingTr = $bigAutocompleteContent.find("tr:last");
                        }else{
                            $previousSiblingTr = $previousSiblingTr.prev();
                        }
                        $bigAutocompleteContent.find("tr").removeClass("ct");

                        if($previousSiblingTr.length > 0){//有上一行时（不是第一行）
                            $previousSiblingTr.addClass("ct");//选中的行加背景
                            $this.val($previousSiblingTr.find("div:last").find('span').text());//选中行内容设置到输入框中

                            //div滚动到选中的行,jquery-1.6.1 $$previousSiblingTr.offset().top 有bug，数值有问题
                            $bigAutocompleteContent.scrollTop($previousSiblingTr[0].offsetTop - $bigAutocompleteContent.height() + $previousSiblingTr.height());
                        }else{
                            $this.val(bigAutocomplete.holdText);//输入框显示用户原始输入的值
                        }

                        break;
                    case 27://ESC键隐藏下拉框

                        bigAutocomplete.hideAutocomplete();
                        break;
                }
            });

            //输入框keyup事件
            $this.keyup(function(event) {
                var k = event.keyCode;
                var ctrl = event.ctrlKey;
                var isFunctionalKey = false;//按下的键是否是功能键
                for(var i=0;i<bigAutocomplete.functionalKeyArray.length;i++){
                    if(k == bigAutocomplete.functionalKeyArray[i]){
                        isFunctionalKey = true;
                        break;
                    }
                }
                //k键值不是功能键或是ctrl+c、ctrl+x时才触发自动补全功能
                if(!isFunctionalKey && (!ctrl || (ctrl && k == 67) || (ctrl && k == 88)) ){
                    var config = $this.data("config");

                    var offset = $this.offset();
                    $bigAutocompleteContent.width(config.width);
                    var h = $this.outerHeight() - 1;
                    $bigAutocompleteContent.css({"top":offset.top + h,"left":offset.left});
                    $(window).resize(function () {
                        $bigAutocompleteContent.css({"top":offset.top + h,"left":offset.left});
                    });
                    var data = config.data;
                    var url = config.url;
                    var val = config.val;
                    var keyword_ = $.trim($this.val());
                    if(keyword_ == null || keyword_ == ""){
                        bigAutocomplete.hideAutocomplete();
                        return;
                    }
                    if(data != null && $.isArray(data) ){
                        var data_ = new Array();
                        for(var i=0;i<data.length;i++){
                            if(data[i].tag_name.indexOf(keyword_) > -1){
                                data_.push(data[i]);
                            }
                        }

                        makeContAndShow(data_);
                    }else if(url != null && url != ""){//ajax请求数据
                        $.post(url+$this.val(),{keyword:keyword_},function(result){
                            makeContAndShow(result)
                        },"json")
                    }


                    bigAutocomplete.holdText = $this.val();
                }
                //回车键
                if(k == 13){
                    var callback_ = $this.data("config").callback;
                    if($bigAutocompleteContent.css("display") != "none"){
                        if(callback_ && $.isFunction(callback_)){
                            callback_($bigAutocompleteContent.find(".ct").data("jsonData"));
                        }
                        $bigAutocompleteContent.hide();
                    }
                }

            });


            //组装下拉框html内容并显示
            function makeContAndShow(data_){
                if(data_ == null || data_.length <=0 ){
                    return;
                }

                var cont = "<table><tbody>";
                for(var i=0;i<data_.length;i++){
                    cont += "<tr><td><div><span>" + data_[i].tag_name+"</span>";
                    // cont += data_[i].id==null?"</tr>":"<td><a href=''>去认领</a></td></tr>";
                    cont +=data_[i].url==null?"</div></td></tr>":"<a href='"+data_[i].url+"'>去认领</a></div></td></tr>"
                }
                cont += "</tbody></table>";
                $bigAutocompleteContent.html(cont);
                $bigAutocompleteContent.show();

                //每行tr绑定数据，返回给回调函数
                $bigAutocompleteContent.find("tr").each(function(index){
                    $(this).data("jsonData",data_[index]);
                })
            }


            //输入框focus事件
            $this.focus(function(){
                bigAutocomplete.currentInputText = $this;
            });

        };
        //隐藏下拉框
        this.hideAutocomplete = function(){
            var $bigAutocompleteContent = $("#bigAutocompleteContent");
            if($bigAutocompleteContent.css("display") != "none"){
                $bigAutocompleteContent.find("tr").removeClass("ct");
                $bigAutocompleteContent.hide();
            }
        }

    };

    $.fn.bigAutocomplete = bigAutocomplete.autocomplete;

})(jQuery);


///年月日
(function($){
    $.extend({
        ms_DatePicker: function (options) {
            var defaults = {
                YearSelector: "#sel_year",
                MonthSelector: "#sel_month",
                DaySelector: "#sel_day",
                FirstText: "请选择日期",
                FirstValue: ''
            };
            var opts = $.extend({}, defaults, options);
            var $YearSelector = $(opts.YearSelector);
            var $MonthSelector = $(opts.MonthSelector);
            var $DaySelector = $(opts.DaySelector);
            var FirstText = opts.FirstText;
            var FirstValue = opts.FirstValue;

            // 初始化
            var str = "<option value=\"" + FirstValue + "\">" + FirstText + "</option>";
            $YearSelector.html(str);
            $MonthSelector.html(str);
            $DaySelector.html(str);

            // 年份列表
            var yearNow = new Date().getFullYear();
            var yearSel = $YearSelector.attr("rel");
            for (var i = yearNow; i >= 1980; i--) {
                var sed = yearSel==i?"selected":"";
                var yearStr = "<option value=\"" + i + "\" " + sed+">" + i + "</option>";
                $YearSelector.append(yearStr);
            }

            // 月份列表
            var monthSel = $MonthSelector.attr("rel");
            for (var i = 1; i <= 12; i++) {
                var sed = monthSel==i?"selected":"";
                var monthStr = "<option value=\"" + i + "\" "+sed+">" + i + "</option>";
                $MonthSelector.append(monthStr);
            }

            // 日列表(仅当选择了年月)
            function BuildDay() {
                if ($YearSelector.val() == 0 || $MonthSelector.val() == 0) {
                    // 未选择年份或者月份
                    $DaySelector.html(str);
                } else {
                    $DaySelector.html(str);
                    var year = parseInt($YearSelector.val());
                    var month = parseInt($MonthSelector.val());
                    var dayCount = 0;
                    switch (month) {
                        case 1:
                        case 3:
                        case 5:
                        case 7:
                        case 8:
                        case 10:
                        case 12:
                            dayCount = 31;
                            break;
                        case 4:
                        case 6:
                        case 9:
                        case 11:
                            dayCount = 30;
                            break;
                        case 2:
                            dayCount = 28;
                            if ((year % 4 == 0) && (year % 100 != 0) || (year % 400 == 0)) {
                                dayCount = 29;
                            }
                            break;
                        default:
                            break;
                    }

                    var daySel = $DaySelector.attr("rel");
                    for (var i = 1; i <= dayCount; i++) {
                        var sed = daySel==i?"selected":"";
                        var dayStr = "<option value=\"" + i + "\" "+sed+">" + i + "</option>";
                        $DaySelector.append(dayStr);
                    }
                }
            }
            $MonthSelector.change(function () {
                BuildDay();
            });
            $YearSelector.change(function () {
                BuildDay();
            });
            if($DaySelector.attr("rel")!=""){
                BuildDay();
            }
        } // End ms_DatePicker
    });
})(jQuery);

//图片上传

var fileArr=[];
var fileObj=[];
var uploadPreview = function(setting) {
    var _self = this;
    _self.IsNull = function(value) {
        if (typeof (value) == "function") { return false; }
        if (value == undefined || value == null || value == "" || value.length == 0) {
            return true;
        }
        return false;
    };
    _self.DefautlSetting = {
        UpBtn: "",
        DivShow: "",
        ImgShow: "",
        ImgLength:"",
        Width: 100,
        Height: 100,
        Size:3*1024,
        ImgType: ["jpeg", "jpg", "png"],
        ErrMsg: "选择文件错误,图片类型必须是(gif,jpeg,jpg,bmp,png)中的一种",
        callback: function() { }
    };
    _self.Setting = {
        UpBtn: _self.IsNull(setting.UpBtn) ? _self.DefautlSetting.UpBtn : setting.UpBtn,
        DivShow: _self.IsNull(setting.DivShow) ? _self.DefautlSetting.DivShow : setting.DivShow,
        ImgShow: _self.IsNull(setting.ImgShow) ? _self.DefautlSetting.ImgShow : setting.ImgShow,
        ImgLength: _self.IsNull(setting.ImgLength) ? _self.DefautlSetting.ImgLength : setting.ImgLength,
        Width: _self.IsNull(setting.Width) ? _self.DefautlSetting.Width : setting.Width,
        Height: _self.IsNull(setting.Height) ? _self.DefautlSetting.Height : setting.Height,
        Size: _self.IsNull(setting.Size) ? _self.DefautlSetting.Size : setting.Size,
        ImgType: _self.IsNull(setting.ImgType) ? _self.DefautlSetting.ImgType : setting.ImgType,
        ErrMsg: _self.IsNull(setting.ErrMsg) ? _self.DefautlSetting.ErrMsg : setting.ErrMsg,
        callback: _self.IsNull(setting.callback) ? _self.DefautlSetting.callback : setting.callback
    };
    _self.getObjectURL = function(file) {
        var url = null;
        if (window.createObjectURL != undefined) {
            url = window.createObjectURL(file);
        } else if (window.URL != undefined) {
            url = window.URL.createObjectURL(file);
        } else if (window.webkitURL != undefined) {
            url = window.webkitURL.createObjectURL(file);
        }
        return url;
    };
    _self.isInArray = function (arr,value) {
        for (var i = 0; i < arr.length; i++) {
            if (arr[i] == value) {
                return true;
            }
        }
        return false;
    };
    _self.isInArrayIndex = function (arr,value) {
        for (var i = 0; i < arr.length; i++) {
            if (arr[i] == value) {
                return i;
            }
        }
        return false;
    };
    _self.deleteImg = function(obj){
        var removeNode=obj.parentNode;
        document.getElementById(_self.Setting.ImgShow).removeChild(removeNode);
    };
    _self.Bind = function() {
        document.getElementById(_self.Setting.UpBtn).onchange = function() {
            var $this=this;
            var imgBox=document.getElementsByClassName('oldImgBox');
            var imgBoxArr=[];
            for (var i=0;i<imgBox.length;i++){
                imgBoxArr.push(imgBox[i].id);
            }
            if (this.value) {
                if (!RegExp("\.(" + _self.Setting.ImgType.join("|") + ")$", "i").test(this.value.toLowerCase())) {
                    alert(_self.Setting.ErrMsg);
                    this.value = "";
                    return false;
                }
                for(var i=0;i<this.files.length;i++){
                    if ((this.files[i].size/1024)>_self.Setting.Size){
                        alert('文件超过限制大小');
                        this.value = "";
                        return false;
                    }
                }

                var parentRoot=document.getElementById(_self.Setting.ImgShow);
                if (_self.Setting.ImgLength==1){
                    document.getElementById(_self.Setting.DivShow).style.display='block';
                    document.getElementById(_self.Setting.DivShow).src = _self.getObjectURL(this.files[0]);
                    _self.Setting.callback();
                }else {

                    for(var i=0;i<this.files.length;i++){
                        if (_self.isInArray(fileArr,this.files[i].name)){
                            alert("不能选择相同的图片");
                            this.value = "";
                            return false;
                        }
                        if (_self.isInArray(imgBoxArr,this.files[i].name)){
                            alert("不能选择相同的图片");
                            this.value = "";
                            return false;
                        }

                    }

                    if ((this.files.length+fileArr.length+document.getElementsByClassName('image_id').length-document.getElementsByClassName('image_id2').length)>_self.Setting.ImgLength){
                        alert("不能超过"+ _self.Setting.ImgLength +"张图片");
                        this.value = "";
                        return false;
                    }else {
                        for(var i=0;i<this.files.length;i++){
                            var imgBox=document.createElement("div");
                            imgBox.setAttribute("class","imgBox");
                            imgBox.setAttribute("id",this.files[i].name);

                            var imgBoxDel=document.createElement("div");
                            imgBoxDel.setAttribute("class","del");
                            imgBoxDel.innerHTML="删除";
                            var img=document.createElement("img");
                            img.src = _self.getObjectURL(this.files[i]);
                            imgBox.appendChild(imgBoxDel);
                            imgBox.appendChild(img);
                            parentRoot.appendChild(imgBox);
                            fileArr.push(this.files[i].name);
                            fileObj.push(this.files[i]);
                            _self.Setting.callback();
                            // document.getElementById('saveImg').value = fileObj;
                        }
                    }
                }

            }
        };


    };
    _self.Bind();

};

//固定侧边栏
;(function ($) {
    $.fn.stickySidebar = function (options) {
        // headerSelector：定义页面的header。默认值为<header>。
        // navSelector：定义页面的导航。默认为<nav>。
        // contentSelector：定义页面的内容区域。默认为选择器#content。
        // footerSelector：定义页面的脚部区域。默认为<footer>。
        // sidebarTopMargin：定义侧边栏菜单与顶部导航菜单之间的margin值。默认为20px。
        // footerThreshold：定义页面内容区域距离页面脚部的距离。默认值为40px。
        var config = $.extend({
            headerSelector: 'header',
            beforeSelector: 'nav',
            contentSelector: '#content',
            footerSelector: 'footer',
            sidebarTopMargin: 20,
            footerThreshold: 40,
            top:0
        }, options);

        var fixSidebr = function () {
            var sidebarSelector = $(this);
            var viewportHeight = $(window).height();
            var viewportWidth = $(window).width();
            var documentHeight = $(document).height();
            var headerHeight = $(config.headerSelector).outerHeight();
            var beforeHeight = $(config.beforeSelector).outerHeight();
            var sidebarHeight = sidebarSelector.outerHeight();
            var contentHeight = $(config.contentSelector).outerHeight();
            var footerHeight = $(config.footerSelector).outerHeight();
            var scroll_top = $(window).scrollTop();
            var top=config.top;
            var fixPosition = contentHeight - sidebarHeight;
            // var breakingPoint1 = headerHeight + navHeight;
            var breakingPoint1 = headerHeight+beforeHeight+top;
            var breakingPoint2 = documentHeight - (sidebarHeight + footerHeight + config.footerThreshold);
            // calculate
            if ((contentHeight > sidebarHeight) && (viewportHeight > sidebarHeight)) {
                if (scroll_top < breakingPoint1) {
                    sidebarSelector.removeClass('sticky').css('top','');
                } else if ((scroll_top >= breakingPoint1) && (scroll_top < breakingPoint2)) {
                    sidebarSelector.addClass('sticky').css('top', config.sidebarTopMargin);
                } else {
                    var negative = breakingPoint2 - scroll_top;
                    sidebarSelector.addClass('sticky').css('top', negative);
                }
            }
        };
        return this.each(function () {
            $(window).on('scroll', $.proxy(fixSidebr, this));
            $(window).on('resize', $.proxy(fixSidebr, this));
            $.proxy(fixSidebr, this)();
        });

    };
}(jQuery));




//限制字数
;(function ($) {

    $.fn.limitTextarea = function(opts) {
        var defaults = {
            maxNumber: 200, //允许输入的最大字数
            position: 'top', //提示文字的位置，top：文本框上方，bottom：文本框下方
            onOk: function() {}, //输入后，字数未超出时调用的函数
            onOver: function() {}, //输入后，字数超出时调用的函数
            iNum:5   //输入后，字数超出时背景变换的频率
        };
        var option = $.extend(defaults, opts);
        function getLength(str){
            return String(str).length;
        }
        this.each(function() {
            var _this = $(this);
            var info = '<div class="infor">还可以输入<b style="color: #0476BF">' + (option.maxNumber - getLength(_this.val())) + '</b>个字</div>';
            var fn = function() {
                var $info =_this.next();
                var extraNumber = option.maxNumber - getLength(_this.val());

                if (extraNumber >= 0) {
                    $info.html('还可以输入<b style="color: #0476BF">' + extraNumber + '</b>个字');
                    option.onOk();
                } else {
                    $info.html('已经超出<b style="color:red;">' + (-extraNumber) + '</b>个字');
                    option.onOver();
                }
            };
            switch (option.position) {
                case 'top':
                    _this.before(info);
                    break;
                case 'bottom':
                default:
                    _this.after(info);
            }
            //绑定输入事件监听器

//                if (window.addEventListener) { //先执行W3C
//                    _this.get(0).addEventListener("input", fn, false);
//                } else {
//                    _this.get(0).attachEvent("onpropertychange", fn);
//                }
//                if (window.VBArray && window.addEventListener) { //IE9
//                    _this.get(0).attachEvent("onkeydown", function() {
//                        var key = window.event.keyCode;
//                        (key == 8 || key == 46) && fn(); //处理回退与删除
//                    });
//                    _this.get(0).attachEvent("oncut", fn); //处理粘贴
//                }

            _this.keydown(function () {
                if (window.addEventListener) { //先执行W3C
                    _this.get(0).addEventListener("input", fn, false);
                } else {
                    _this.get(0).attachEvent("onpropertychange", fn);
                }
            });
        });
    };
})(jQuery);


/*
 * zyUpload.js 基于HTML5 文件上传的血肉脚本 http://www.52doit.com
 * by zhangyan 2014-06-26   QQ : 623585268
 */

;(function($,undefined){
    //多图上传
    /**
     * zyupload.basic.js   -- HTML5多文件上传的基本功能性js代码, 不包含拖拽上传、裁剪图片等功能
     * 当前包含2个具体部分
     * 1. zyFile.js         -- zyupload调用的数据处理层
     * 2. zyUpload.js       -- zyupload调用的业务层
     */


    /*
     * zyFile.js 基于HTML5 文件上传的核心脚本 http://www.52doit.com
     * by zhangyan 2014-06-21   QQ : 623585268
     */

    var ZYFILE = {
        fileInput : null,             // 选择文件按钮dom对象
        uploadInput : null,           // 上传文件按钮dom对象
        dragDrop: null,				  // 拖拽敏感区域
        url : "",  					  // 上传action路径
        uploadFile : [],  			  // 需要上传的文件数组
        lastUploadFile : [],          // 上一次选择的文件数组，方便继续上传使用
        perUploadFile : [],           // 存放永久的文件数组，方便删除使用
        fileNum : 0,                  // 代表文件总个数，因为涉及到继续添加，所以下一次添加需要在它的基础上添加索引
        /* 提供给外部的接口 */
        filterFile : function(files){ // 提供给外部的过滤文件格式等的接口，外部需要把过滤后的文件返回
            return files;
        },
        onSelect : function(selectFile, files){      // 提供给外部获取选中的文件，供外部实现预览等功能  selectFile:当前选中的文件  allFiles:还没上传的全部文件

        },
        onDelete : function(file, files){            // 提供给外部获取删除的单个文件，供外部实现删除效果  file:当前删除的文件  files:删除之后的文件

        },
        onProgress : function(file, loaded, total){  // 提供给外部获取单个文件的上传进度，供外部实现上传进度效果

        },
        onSuccess : function(file, responseInfo){    // 提供给外部获取单个文件上传成功，供外部实现成功效果

        },
        onFailure : function(file, responseInfo){    // 提供给外部获取单个文件上传失败，供外部实现失败效果

        },
        onComplete : function(responseInfo){         // 提供给外部获取全部文件上传完成，供外部实现完成效果

        },
        /* 内部实现功能方法 */
        // 获得选中的文件
        //文件拖放
        funDragHover: function(e) {
            e.stopPropagation();
            e.preventDefault();
            this[e.type === "dragover"? "onDragOver": "onDragLeave"].call(e.target);
            return this;
        },
        // 获取文件
        funGetFiles : function(e){
            var self = this;
            // 取消鼠标经过样式
            this.funDragHover(e);
            // 从事件中获取选中的所有文件
            var files = e.target.files || e.dataTransfer.files;
            self.lastUploadFile = this.uploadFile;
            this.uploadFile = this.uploadFile.concat(this.filterFile(files));
            var tmpFiles = [];

            // 因为jquery的inArray方法无法对object数组进行判断是否存在于，所以只能提取名称进行判断
            var lArr = [];  // 之前文件的名称数组
            var uArr = [];  // 现在文件的名称数组
            $.each(self.lastUploadFile, function(k, v){
                lArr.push(v.name);
            });
            $.each(self.uploadFile, function(k, v){
                uArr.push(v.name);
            });

            $.each(uArr, function(k, v){
                // 获得当前选择的每一个文件   判断当前这一个文件是否存在于之前的文件当中
                if($.inArray(v, lArr) < 0){  // 不存在
                    tmpFiles.push(self.uploadFile[k]);
                }
            });

            // 如果tmpFiles进行过过滤上一次选择的文件的操作，需要把过滤后的文件赋值
            //if(tmpFiles.length!=0){
            this.uploadFile = tmpFiles;
            //}

            // 调用对文件处理的方法
            this.funDealtFiles();

            return true;
        },
        // 处理过滤后的文件，给每个文件设置下标
        funDealtFiles : function(){
            var self = this;
            // 目前是遍历所有的文件，给每个文件增加唯一索引值
            $.each(this.uploadFile, function(k, v){
                // 因为涉及到继续添加，所以下一次添加需要在总个数的基础上添加
                v.index = self.fileNum;
                // 添加一个之后自增
                self.fileNum++;
            });
            // 先把当前选中的文件保存备份
            var selectFile = this.uploadFile;
            // 要把全部的文件都保存下来，因为删除所使用的下标是全局的变量
            this.perUploadFile = this.perUploadFile.concat(this.uploadFile);
            // 合并下上传的文件
            this.uploadFile = this.lastUploadFile.concat(this.uploadFile);

            // 执行选择回调
            this.onSelect(selectFile, this.uploadFile);
            console.info("继续选择");
            console.info(this.uploadFile);
            return this;
        },
        // 处理需要删除的文件  isCb代表是否回调onDelete方法
        // 因为上传完成并不希望在页面上删除div，但是单独点击删除的时候需要删除div   所以用isCb做判断
        funDeleteFile : function(delFileIndex, isCb){
            var self = this;  // 在each中this指向没个v  所以先将this保留

            var tmpFile = [];  // 用来替换的文件数组
            // 合并下上传的文件
            var delFile = this.perUploadFile[delFileIndex];
            //console.info(delFile);
            // 目前是遍历所有的文件，对比每个文件  删除
            $.each(this.uploadFile, function(k, v){
                if(delFile != v){
                    // 如果不是删除的那个文件 就放到临时数组中
                    tmpFile.push(v);
                }
            });
            this.uploadFile = tmpFile;
            if(isCb){  // 执行回调
                // 回调删除方法，供外部进行删除效果的实现
                self.onDelete(delFile, this.uploadFile);
            }

            console.info("还剩这些文件没有上传:");
            console.info(this.uploadFile);
            return true;
        },
        // 上传多个文件
        funUploadFiles : function(){
            var self = this;  // 在each中this指向没个v  所以先将this保留
            // 遍历所有文件  ，在调用单个文件上传的方法
            $.each(this.uploadFile, function(k, v){
                self.funUploadFile(v);
            });
        },
        // 上传单个个文件
        funUploadFile : function(file){
            var self = this;  // 在each中this指向没个v  所以先将this保留
            var formdata = new FormData();
            formdata.append("file", file);
            // 添加裁剪的坐标和宽高发送给后台
            if($("#uploadTailor_"+file.index).length>0){
                // 除了这样获取不到zyUpload的值啊啊啊啊啊啊啊啊啊啊啊
                formdata.append("tailor", $("#uploadTailor_"+file.index).attr("tailor"));
            }
            var xhr = new XMLHttpRequest();
            // 绑定上传事件
            // 进度
            xhr.upload.addEventListener("progress",	 function(e){
                // 回调到外部
                self.onProgress(file, e.loaded, e.total);
            }, false);
            // 完成
            xhr.addEventListener("load", function(e){
                // 从文件中删除上传成功的文件  false是不执行onDelete回调方法
                self.funDeleteFile(file.index, false);
                // 回调到外部
                self.onSuccess(file, xhr.responseText);
                if(self.uploadFile.length==0){
                    // 回调全部完成方法
                    self.onComplete("全部完成");
                }
            }, false);
            // 错误
            xhr.addEventListener("error", function(e){
                // 回调到外部
                self.onFailure(file, xhr.responseText);
            }, false);

            xhr.open("POST",self.url, true);
            xhr.send(formdata);
        },
        // 返回需要上传的文件
        funReturnNeedFiles : function(){
            return this.uploadFile;
        },

        // 初始化
        init : function(){  // 初始化方法，在此给选择、上传按钮绑定事件
            var self = this;  // 克隆一个自身

            if (this.dragDrop) {
                this.dragDrop.addEventListener("dragover", function(e) { self.funDragHover(e); }, false);
                this.dragDrop.addEventListener("dragleave", function(e) { self.funDragHover(e); }, false);
                this.dragDrop.addEventListener("drop", function(e) { self.funGetFiles(e); }, false);
            }

            // 如果选择按钮存在
            if(self.fileInput){
                // 绑定change事件
                this.fileInput.addEventListener("change", function(e) {
                    self.funGetFiles(e);
                }, false);
            }

            // 如果上传按钮存在
            if(self.uploadInput){
                // 绑定click事件
                this.uploadInput.addEventListener("click", function(e) {
                    self.funUploadFiles(e);
                }, false);
            }


        }
    };


    $.fn.zyUpload = function(options,param){
        var otherArgs = Array.prototype.slice.call(arguments, 1);
        if (typeof options == 'string') {
            var fn = this[0][options];
            if($.isFunction(fn)){
                return fn.apply(this, otherArgs);
            }else{
                throw ("zyUpload - No such method: " + options);
            }
        }

        return this.each(function(){
            var para = {};    // 保留参数
            var self = this;  // 保存组件对象

            var defaults = {
                width            : "700px",  					      // 宽度
                height           : "400px",  					      // 宽度
                itemWidth        : "140px",                           // 文件项的宽度
                itemHeight       : "120px",                           // 文件项的高度
                url              : "/upload/UploadAction",  	      // 上传文件的路径
                fileType         : [],                                // 上传文件的类型
                fileSize         : 51200000,                          // 上传文件的大小
                multiple         : true,  						      // 是否可以多个文件上传
                dragDrop         : false,  						      // 是否可以拖动上传文件
//					edit             : true,  						      // 是否可以编辑文件（裁剪）
                tailor           : false,  						      // 是否可以截取图片
                del              : true,  						      // 是否可以删除文件
                finishDel        : false,  						      // 是否在上传文件完成后删除预览
                /* 提供给外部的接口方法 */
                onSelect         : function(selectFiles, allFiles){}, // 选择文件的回调方法  selectFile:当前选中的文件  allFiles:还没上传的全部文件
                onDelete		 : function(file, files){},           // 删除一个文件的回调方法 file:当前删除的文件  files:删除之后的文件
                onSuccess		 : function(file, response){},        // 文件上传成功的回调方法
                onFailure		 : function(file, response){},        // 文件上传失败的回调方法
                onComplete		 : function(response){}               // 上传完成的回调方法
            };

            para = $.extend(defaults,options);

            this.init = function(){
                this.createHtml();  // 创建组件html
                this.createCorePlug();  // 调用核心js
            };

            /**
             * 功能：创建上传所使用的html
             * 参数: 无
             * 返回: 无
             */
            this.createHtml = function(){
                var multiple = "";  // 设置多选的参数
                para.multiple ? multiple = "multiple" : multiple = "";
                var html= '';

                if(para.dragDrop){
                    // 创建带有拖动的html
                    html += '<form id="uploadForm" action="'+para.url+'" method="post" enctype="multipart/form-data">';
                    html += '	<div class="upload_box">';
                    html += '		<div class="upload_main">';
                    html += '			<div class="upload_choose">';
                    html += '				<div class="convent_choice">';
                    html += '					<div class="andArea">';
                    html += '						<div class="filePicker">点击选择文件</div>';
                    html += '						<input id="fileImage" type="file" size="30" name="fileselect[]" '+multiple+'>';
                    html += '					</div>';
                    html += '				</div>';
                    html += '				<span id="fileDragArea" class="upload_drag_area">或者将文件拖到此处</span>';
                    html += '			</div>';
                    html += '			<div class="status_bar">';
                    html += '				<div id="status_info" class="info">选中0张文件，共0B。您最多选择5张图片</div>';
                    html += '				<div class="btns">';
                    html += '					<div class="webuploader_pick">继续选择</div>';
                    html += '					<div class="upload_btn">开始上传</div>';
                    html += '				</div>';
                    html += '			</div>';
                    html += '			<div id="preview" class="upload_preview"></div>';
                    html += '		</div>';
                    html += '		<div class="upload_submit">';
                    html += '			<button type="button" id="fileSubmit" class="upload_submit_btn">确认上传文件</button>';
                    html += '		</div>';
                    html += '		<div id="uploadInf" class="upload_inf"></div>';
                    html += '	</div>';
                    html += '</form>';
                }else{
                    var imgWidth = parseInt(para.itemWidth.replace("px", ""))-15;

                    // 创建不带有拖动的html
                    html += '<form id="uploadForm" action="'+para.url+'" method="post" enctype="multipart/form-data">';
                    html += '	<div class="upload_box">';
                    html += '		<div class="upload_main single_main">';
                    html += '			<div class="status_bar">';
                    html += '				<div id="status_info" class="info">选中0张文件，共0B。您最多选择5张图片</div>';
                    html += '				<div class="btns">';
                    html += '					<input id="fileImage" type="file" size="30" name="fileselect[]" '+multiple+'>';
                    html += '					<div class="webuploader_pick">选择文件</div>';
                    html += '					<div class="upload_btn">开始上传</div>';
                    html += '				</div>';
                    html += '			</div>';
                    html += '			<div id="preview" class="upload_preview">';
                    html += '				<div class="add_upload">';
                    html += '					<a style="height:'+para.itemHeight+';width:'+para.itemWidth+';" title="点击添加文件" id="rapidAddImg" class="add_imgBox" href="javascript:void(0)">';
                    html += '						<div class="uploadImg" style="width:'+imgWidth+'px">';
                    html += '							<img class="upload_image" src="/public/app/site/statics/css/images/add_img.png" style="width:expression(this.width > '+imgWidth+' ? '+imgWidth+'px : this.width)" />';
                    html += '						</div>';
                    html += '					</a>';
                    html += '				</div>';
                    html += '			</div>';
                    html += '		</div>';
                    html += '		<div class="upload_submit">';
                    html += '			<button type="button" id="fileSubmit" class="upload_submit_btn">确认上传文件</button>';
                    html += '		</div>';
                    html += '		<div id="uploadInf" class="upload_inf"></div>';
                    html += '	</div>';
                    html += '</form>';
                }

                $(self).append(html).css({"width":para.width,"height":para.height});

                // 初始化html之后绑定按钮的点击事件
                this.addEvent();
            };

            /**
             * 功能：显示统计信息和绑定继续上传和上传按钮的点击事件
             * 参数: 无
             * 返回: 无
             */
            this.funSetStatusInfo = function(files){
                var size = 0;
                var num = files.length;
                $.each(files, function(k,v){
                    // 计算得到文件总大小
                    size += v.size;
                });

                // 转化为kb和MB格式。文件的名字、大小、类型都是可以现实出来。
                if (size > 1024 * 1024) {
                    size = (Math.round(size * 100 / (1024 * 1024)) / 100).toString() + 'MB';
                } else {
                    size = (Math.round(size * 100 / 1024) / 100).toString() + 'KB';
                }

                // 设置内容
                if ($('.upload_append_list').length<5){
                    $("#status_info").html("选中"+num+"张文件，共"+size+"。"+"您最多选择5张图片");
                }else {
                    return false;
                }
            };

            /**
             * 功能：过滤上传的文件格式等
             * 参数: files 本次选择的文件
             * 返回: 通过的文件
             */
            this.funFilterEligibleFile = function(files){
                var arrFiles = [];  // 替换的文件数组
                for (var i = 0, file; file = files[i]; i++) {
                    // 获取上传文件的后缀名
                    var newStr = file.name.split("").reverse().join("");
                    if(newStr.split(".")[0] != null){
                        var type = newStr.split(".")[0].split("").reverse().join("");
                        if(jQuery.inArray(type, para.fileType) > -1){
                            // 类型符合，可以上传
                            if (file.size >= para.fileSize) {
                                alert('您这个"'+ file.name +'"文件大小过大');
                            } else {
                                // 在这里需要判断当前所有文件中
                                arrFiles.push(file);
                            }
                        }else{
                            alert('您这个"'+ file.name +'"上传类型不符合');
                        }
                    }else{
                        alert('您这个"'+ file.name +'"没有类型, 无法识别');
                    }
                }
                return arrFiles;
            };

            /**
             * 功能： 处理参数和格式上的预览html
             * 参数: files 本次选择的文件
             * 返回: 预览的html
             */
            this.funDisposePreviewHtml = function(file, e){
                var html = "";
                var imgWidth = parseInt(para.itemWidth.replace("px", ""))-15;
                var imgHeight = parseInt(para.itemHeight.replace("px", ""))-10;

                // 处理配置参数编辑和删除按钮
                var editHtml = "";
                var delHtml = "";

                if(para.tailor){  // 显示裁剪按钮
                    editHtml = '<span class="file_edit" data-index="'+file.index+'" title="编辑"></span>';
                }
                if(para.del){  // 显示删除按钮
                    delHtml = '<span class="file_del" data-index="'+file.index+'" title="删除"></span>';
                }

                var newStr = file.name.split("").reverse().join("");
                var type = newStr.split(".")[0].split("").reverse().join("");
                // 处理不同类型文件代表的图标
                var fileImgSrc = "/public/app/site/statics/css/images/fileType/";
                if(type == "rar"){
                    fileImgSrc = fileImgSrc + "rar.png";
                }else if(type == "zip"){
                    fileImgSrc = fileImgSrc + "zip.png";
                }else if(type == "txt"){
                    fileImgSrc = fileImgSrc + "txt.png";
                }else if(type == "ppt"){
                    fileImgSrc = fileImgSrc + "ppt.png";
                }else if(type == "xls"){
                    fileImgSrc = fileImgSrc + "xls.png";
                }else if(type == "pdf"){
                    fileImgSrc = fileImgSrc + "pdf.png";
                }else if(type == "psd"){
                    fileImgSrc = fileImgSrc + "psd.png";
                }else if(type == "ttf"){
                    fileImgSrc = fileImgSrc + "ttf.png";
                }else if(type == "swf"){
                    fileImgSrc = fileImgSrc + "swf.png";
                }else{
                    fileImgSrc = fileImgSrc + "file.png";
                }

                // 图片上传的是图片还是其他类型文件
                if (file.type.indexOf("image") == 0) {
                    html += '<div id="uploadList_'+ file.index +'" class="upload_append_list">';
                    html += '	<div class="file_bar">';
                    html += '		<div style="padding:5px;">';
                    html += '			<p class="file_name" title="'+file.name+'">' + file.name + '</p>';
                    html += 			editHtml;  // 编辑按钮的html
                    html += 			delHtml;   // 删除按钮的html
                    html += '		</div>';
                    html += '	</div>';
                    html += '	<a style="height:'+para.itemHeight+';width:'+para.itemWidth+';" href="#" class="imgBox">';
                    html += '		<div class="uploadImg" style="width:'+imgWidth+'px;max-width:'+imgWidth+'px;max-height:'+imgHeight+'px;">';
                    html += '			<img id="uploadImage_'+file.index+'" class="upload_image" src="' + e.target.result + '" style="width:expression(this.width > '+imgWidth+' ? '+imgWidth+'px : this.width);" />';
                    html += '		</div>';
                    html += '	</a>';
                    html += '	<p id="uploadProgress_'+file.index+'" class="file_progress"></p>';
                    html += '	<p id="uploadFailure_'+file.index+'" class="file_failure">上传失败，请重试</p>';
                    html += '	<p id="uploadTailor_'+file.index+'" class="file_tailor" tailor="false">裁剪完成</p>';
                    html += '	<p id="uploadSuccess_'+file.index+'" class="file_success"></p>';
                    html += '</div>';

                }else{
                    html += '<div id="uploadList_'+ file.index +'" class="upload_append_list">';
                    html += '	<div class="file_bar">';
                    html += '		<div style="padding:5px;">';
                    html += '			<p class="file_name">' + file.name + '</p>';
                    html += 			delHtml;   // 删除按钮的html
                    html += '		</div>';
                    html += '	</div>';
                    html += '	<a style="height:'+para.itemHeight+';width:'+para.itemWidth+';" href="#" class="imgBox">';
                    html += '		<div class="uploadImg" style="width:'+imgWidth+'px">';
                    html += '			<img id="uploadImage_'+file.index+'" class="upload_file" src="' + fileImgSrc + '" style="width:expression(this.width > '+imgWidth+' ? '+imgWidth+'px : this.width)" />';
                    html += '		</div>';
                    html += '	</a>';
                    html += '	<p id="uploadProgress_'+file.index+'" class="file_progress"></p>';
                    html += '	<p id="uploadFailure_'+file.index+'" class="file_failure">上传失败，请重试</p>';
                    html += '	<p id="uploadSuccess_'+file.index+'" class="file_success"></p>';
                    html += '</div>';
                }

                return html;
            };

            /**
             * 功能: 创建弹出层插件，会在其中进行裁剪操作
             * 参数: imgSrc 当前裁剪图片的路径
             * 返回: 无
             */
            this.createPopupPlug = function(imgSrc, index, name){
                // 初始化裁剪插件
                $("body").zyPopup({
                    src        :   imgSrc,            // 图片的src路径
                    index      :   index,             // 图片在预览区域的索引
                    name       :   name,              // 图片的名字
                    onTailor   :   function(val, quondamImgInfo){     // 回调返回裁剪的坐标和宽高的值
                        // 做裁剪成功的图片预览处理
                        var nWidth = parseInt(para.itemWidth.replace("px", ""));
                        var nHeight = parseInt(para.itemHeight.replace("px", ""));
                        var qWidth = val.width;
                        var qHeight = val.height;

                        // 计算出选中区域的的比例
                        var ratio = nWidth / qWidth;
                        // 计算出原图片在预览区域的宽度和高度
                        var width = ratio * quondamImgInfo.width;
                        var height = ratio * quondamImgInfo.height;
                        // 计算出margin-left和margin-top的值
                        var left = val.leftX * ratio;
                        var top  = val.rightY * ratio - qHeight * ratio;

                        $("#uploadImage_" + index).css({
                            "width"    : width,
                            "height"   : height,
                            "margin-left" : -left,
                            "margin-top" : -top
                        });

                        $("#uploadTailor_" + index).show();
                        console.info(val);
                        var tailor = "{'leftX':"+val.leftX+",'leftY':"+val.leftY+",'rightX':"+val.rightX+",'rightY':"+val.rightY+",'width':"+val.width+",'height':"+val.height+"}";
//						$.getScript("jquery.json-2.4.js", function(){
//							$("#uploadTailor_" + index).attr("tailor",$.toJSON(val));
//						});
                        $("#uploadTailor_" + index).attr("tailor",tailor);
                    }
                });
            };

            /**
             * 功能：调用核心插件
             * 参数: 无
             * 返回: 无
             */
            this.createCorePlug = function(){
                var params = {
                    fileInput: $("#fileImage").get(0),
                    uploadInput: $("#fileSubmit").get(0),
                    dragDrop: $("#fileDragArea").get(0),
                    url: $("#uploadForm").attr("action"),

                    filterFile: function(files) {
                        // 过滤合格的文件
                        return self.funFilterEligibleFile(files);
                    },
                    onSelect: function(selectFiles, allFiles) {
                        para.onSelect(selectFiles, allFiles);  // 回调方法
                        self.funSetStatusInfo(ZYFILE.funReturnNeedFiles());  // 显示统计信息
                        var html = '', i = 0;
                        // 组织预览html
                        var funDealtPreviewHtml = function() {
                            file = selectFiles[i];
                            if (file) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    // 处理下配置参数和格式的html
                                    html += self.funDisposePreviewHtml(file, e);

                                    i++;
                                    // 再接着调用此方法递归组成可以预览的html
                                    funDealtPreviewHtml();
                                };
                                reader.readAsDataURL(file);
                            } else {
                                // 走到这里说明文件html已经组织完毕，要把html添加到预览区
                                if($('.upload_append_list').length<5){
                                    funAppendPreviewHtml(html);
                                }

                            }
                            // var a = $('.upload_append_list').length;
                            // if (a < 3) {
                            //     $('.upload_append_list').each(function(index, element) {
                            //         if (index >= 3) {
                            //             $(this).remove();
                            //         }
                            //     })
                            // }
                        };

                        // 添加预览html
                        var funAppendPreviewHtml = function(html){
                            // 添加到添加按钮前
                            if(para.dragDrop){
                                $("#preview").append(html);
                            }else{
                                $(".add_upload").before(html);
                            }
                            // 绑定删除按钮
                            funBindDelEvent();
                            funBindHoverEvent();
                        };

                        // 绑定删除按钮事件
                        var funBindDelEvent = function(){
                            if($(".file_del").length>0){
                                // 删除方法
                                $(".file_del").click(function() {
                                    ZYFILE.funDeleteFile(parseInt($(this).attr("data-index")), true);
                                    return false;
                                });
                            }

                            if($(".file_edit").length>0){
//								if($("head").html().indexOf("zyPopup")<0){  // 代表没有加载过js和css文件
//									// 动态引入裁剪的js和css文件
//									$("<link>").attr({ rel: "stylesheet",
//								        type: "text/css",
//								        href: "zyPopup/css/zyPopup.css"
//								    }).appendTo("head");
//									$.getScript("zyPopup/js/zyPopup.js", function(){
//										// 编辑方法
//										$(".file_edit").click(function() {
//											// 获取选择的文件索引
//											var imgIndex = $(this).attr("data-index");
//											var imgName = $(this).prev(".file_name").attr("title");
//											var imgSrc = $("#uploadImage_"+imgIndex).attr("src");
//											// 打开弹出层
//											self.createPopupPlug(imgSrc, imgIndex, imgName);
//											return false;	
//										});
//									});
//								}else{  // 加载过js和css文件
                                // 编辑方法
                                $(".file_edit").click(function() {
                                    // 获取选择的文件索引
                                    var imgIndex = $(this).attr("data-index");
                                    var imgName = $(this).prev(".file_name").attr("title");
                                    var imgSrc = $("#uploadImage_"+imgIndex).attr("src");
                                    // 打开弹出层
                                    self.createPopupPlug(imgSrc, imgIndex, imgName);
                                    return false;
                                });
//								}
                            }
                        };

                        // 绑定显示操作栏事件
                        var funBindHoverEvent = function(){
                            $(".upload_append_list").hover(
                                function (e) {
                                    $(this).find(".file_bar").addClass("file_hover");
                                },function (e) {
                                    $(this).find(".file_bar").removeClass("file_hover");
                                }
                            );
                        };

                        funDealtPreviewHtml();
                    },
                    onDelete: function(file, files) {
                        para.onDelete(file, files);  // 回调方法
                        // 移除效果
                        $("#uploadList_" + file.index).remove();
                        // 重新设置统计栏信息
                        self.funSetStatusInfo(files);
                        console.info("剩下的文件");
                        console.info(files);
                    },
                    onProgress: function(file, loaded, total) {
                        var eleProgress = $("#uploadProgress_" + file.index), percent = (loaded / total * 100).toFixed(2) + '%';
                        if(eleProgress.is(":hidden")){
                            eleProgress.show();
                        }
                        eleProgress.css("width",percent);
                    },
                    onSuccess: function(file, response) {
                        para.onSuccess(file, response);  // 回调方法
                        $("#uploadProgress_" + file.index).hide();
                        $("#uploadSuccess_" + file.index).show();
                        //$("#uploadInf").append("<p>上传成功，文件地址是：" + response + "</p>");
                        // 根据配置参数确定隐不隐藏上传成功的文件
                        if(para.finishDel){
                            // 移除效果
                            $("#uploadList_" + file.index).fadeOut();
                            // 重新设置统计栏信息
                            self.funSetStatusInfo(ZYFILE.funReturnNeedFiles());
                        }
                        if($("#uploadTailor_"+file.index).length>0){
                            $("#uploadTailor_" + file.index).hide();
                        }
                    },
                    onFailure: function(file, response) {
                        para.onFailure(file, response);  // 回调方法
                        $("#uploadProgress_" + file.index).hide();
                        $("#uploadSuccess_" + file.index).show();
                        if($("#uploadTailor_"+file.index).length>0){
                            $("#uploadTailor_" + file.index).hide();
                        }
                        $("#uploadInf").append("<p>文件" + file.name + "上传失败！</p>");
                        //$("#uploadImage_" + file.index).css("opacity", 0.2);
                    },
                    onComplete: function(response){
                        para.onComplete(response);  // 回调方法
                        console.info(response);
                    },
                    onDragOver: function() {
                        $(this).addClass("upload_drag_hover");
                    },
                    onDragLeave: function() {
                        $(this).removeClass("upload_drag_hover");
                    }

                };

                ZYFILE = $.extend(ZYFILE, params);
                ZYFILE.init();
            };

            /**
             * 功能：绑定事件
             * 参数: 无
             * 返回: 无
             */
            this.addEvent = function(){
                // 如果快捷添加文件按钮存在
                if($(".filePicker").length > 0){
                    // 绑定选择事件
                    $(".filePicker").bind("click", function(e){
                        $("#fileImage").click();
                    });
                }

                // 绑定继续添加点击事件
                $(".webuploader_pick").bind("click", function(e){
                    $("#fileImage").click();
                });

                // 绑定上传点击事件
                $(".upload_btn").bind("click", function(e){
                    // 判断当前是否有文件需要上传
                    if(ZYFILE.funReturnNeedFiles().length > 0){
                        $("#fileSubmit").click();
                    }else{
                        alert("请先选中文件再点击上传");
                    }
                });

                // 如果快捷添加文件按钮存在
                if($("#rapidAddImg").length > 0){
                    // 绑定添加点击事件
                    $("#rapidAddImg").bind("click", function(e){
                        $("#fileImage").click();
                    });
                };



            };


            // 初始化上传控制层插件
            this.init();
        });
    };
})(jQuery);

//获取页面的get参数
;(function($){
    $.getParameterByName=function(name){
        name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
        var regexS = "[\\?&]"+name+"=([^&#]*)";
        var regex = new RegExp( regexS );
        var results = regex.exec( window.location.href );
        if( results == null )
            return "";
        else
            return decodeURIComponent(results[1].replace(/\+/g, " "));
    }
})(jQuery);
//图片懒加载
;(function($, window, document, undefined) {
    var $window = $(window);

    $.fn.lazyload = function(options) {
        var elements = this;
        var $container;
        var settings = {
            threshold       : 0,
            failure_limit   : 0,
            event           : "scroll",
            effect          : "show",
            container       : window,
            data_attribute  : "original",
            skip_invisible  : false,
            appear          : null,
            load            : null,
            placeholder     : "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"
        };

        function update() {
            var counter = 0;

            elements.each(function() {
                var $this = $(this);
                if (settings.skip_invisible && !$this.is(":visible")) {
                    return;
                }
                if ($.abovethetop(this, settings) ||
                    $.leftofbegin(this, settings)) {
                    /* Nothing. */
                } else if (!$.belowthefold(this, settings) &&
                    !$.rightoffold(this, settings)) {
                    $this.trigger("appear");
                    /* if we found an image we'll load, reset the counter */
                    counter = 0;
                } else {
                    if (++counter > settings.failure_limit) {
                        return false;
                    }
                }
            });

        }

        if(options) {
            /* Maintain BC for a couple of versions. */
            if (undefined !== options.failurelimit) {
                options.failure_limit = options.failurelimit;
                delete options.failurelimit;
            }
            if (undefined !== options.effectspeed) {
                options.effect_speed = options.effectspeed;
                delete options.effectspeed;
            }

            $.extend(settings, options);
        }

        /* Cache container as jQuery as object. */
        $container = (settings.container === undefined ||
        settings.container === window) ? $window : $(settings.container);

        /* Fire one scroll event per scroll. Not one scroll event per image. */
        if (0 === settings.event.indexOf("scroll")) {
            $container.on(settings.event, function() {
                return update();
            });
        }

        this.each(function() {
            var self = this;
            var $self = $(self);

            self.loaded = false;

            /* If no src attribute given use data:uri. */
            if ($self.attr("src") === undefined || $self.attr("src") === false) {
                if ($self.is("img")) {
                    $self.attr("src", settings.placeholder);
                }
            }

            /* When appear is triggered load original image. */
            $self.one("appear", function() {
                if (!this.loaded) {
                    if (settings.appear) {
                        var elements_left = elements.length;
                        settings.appear.call(self, elements_left, settings);
                    }
                    $("<img />")
                        .one("load", function() {
                            var original = $self.attr("data-" + settings.data_attribute);
                            $self.hide();
                            if ($self.is("img")) {
                                $self.attr("src", original);
                            } else {
                                $self.css("background-image", "url('" + original + "')");
                            }
                            $self[settings.effect](settings.effect_speed);

                            self.loaded = true;

                            /* Remove image from array so it is not looped next time. */
                            var temp = $.grep(elements, function(element) {
                                return !element.loaded;
                            });
                            elements = $(temp);

                            if (settings.load) {
                                var elements_left = elements.length;
                                settings.load.call(self, elements_left, settings);
                            }
                        })
                        .attr("src", $self.attr("data-" + settings.data_attribute));
                }
            });

            /* When wanted event is triggered load original image */
            /* by triggering appear.                              */
            if (0 !== settings.event.indexOf("scroll")) {
                $self.on(settings.event, function() {
                    if (!self.loaded) {
                        $self.trigger("appear");
                    }
                });
            }
        });

        /* Check if something appears when window is resized. */
        $window.on("resize", function() {
            update();
        });

        /* With IOS5 force loading images when navigating with back button. */
        /* Non optimal workaround. */
        if ((/(?:iphone|ipod|ipad).*os 5/gi).test(navigator.appVersion)) {
            $window.on("pageshow", function(event) {
                if (event.originalEvent && event.originalEvent.persisted) {
                    elements.each(function() {
                        $(this).trigger("appear");
                    });
                }
            });
        }

        /* Force initial check if images should appear. */
        $(document).ready(function() {
            update();
        });

        return this;
    };

    /* Convenience methods in jQuery namespace.           */
    /* Use as  $.belowthefold(element, {threshold : 100, container : window}) */

    $.belowthefold = function(element, settings) {
        var fold;

        if (settings.container === undefined || settings.container === window) {
            fold = (window.innerHeight ? window.innerHeight : $window.height()) + $window.scrollTop();
        } else {
            fold = $(settings.container).offset().top + $(settings.container).height();
        }

        return fold <= $(element).offset().top - settings.threshold;
    };

    $.rightoffold = function(element, settings) {
        var fold;

        if (settings.container === undefined || settings.container === window) {
            fold = $window.width() + $window.scrollLeft();
        } else {
            fold = $(settings.container).offset().left + $(settings.container).width();
        }

        return fold <= $(element).offset().left - settings.threshold;
    };

    $.abovethetop = function(element, settings) {
        var fold;

        if (settings.container === undefined || settings.container === window) {
            fold = $window.scrollTop();
        } else {
            fold = $(settings.container).offset().top;
        }

        return fold >= $(element).offset().top + settings.threshold  + $(element).height();
    };

    $.leftofbegin = function(element, settings) {
        var fold;

        if (settings.container === undefined || settings.container === window) {
            fold = $window.scrollLeft();
        } else {
            fold = $(settings.container).offset().left;
        }

        return fold >= $(element).offset().left + settings.threshold + $(element).width();
    };

    $.inviewport = function(element, settings) {
        return !$.rightoffold(element, settings) && !$.leftofbegin(element, settings) &&
            !$.belowthefold(element, settings) && !$.abovethetop(element, settings);
    };

    /* Custom selectors for your convenience.   */
    /* Use as $("img:below-the-fold").something() or */
    /* $("img").filter(":below-the-fold").something() which is faster */

    $.extend($.expr[":"], {
        "below-the-fold" : function(a) { return $.belowthefold(a, {threshold : 0}); },
        "above-the-top"  : function(a) { return !$.belowthefold(a, {threshold : 0}); },
        "right-of-screen": function(a) { return $.rightoffold(a, {threshold : 0}); },
        "left-of-screen" : function(a) { return !$.rightoffold(a, {threshold : 0}); },
        "in-viewport"    : function(a) { return $.inviewport(a, {threshold : 0}); },
        /* Maintain BC for couple of versions. */
        "above-the-fold" : function(a) { return !$.belowthefold(a, {threshold : 0}); },
        "right-of-fold"  : function(a) { return $.rightoffold(a, {threshold : 0}); },
        "left-of-fold"   : function(a) { return !$.rightoffold(a, {threshold : 0}); }
    });

})(jQuery, window, document);

//上拉 下拉加载更多  dropload.js
;(function($){
    'use strict';
    var win = window;
    var doc = document;
    var $win = $(win);
    var $doc = $(doc);
    $.fn.dropload = function(options){
        return new MyDropLoad(this, options);
    };
    var MyDropLoad = function(element, options){
        var me = this;
        me.$element = element;
        // 上方是否插入DOM
        me.upInsertDOM = false;
        // loading状态
        me.loading = false;
        // 是否锁定
        me.isLockUp = false;
        me.isLockDown = false;
        // 是否有数据
        me.isData = true;
        me._scrollTop = 0;
        me._threshold = 0;
        me.init(options);
    };

    // 初始化
    MyDropLoad.prototype.init = function(options){
        var me = this;
        me.opts = $.extend(true, {}, {
            scrollArea : me.$element,                                            // 滑动区域
            domUp : {                                                            // 上方DOM
                domClass   : 'dropload-up',
                domRefresh : '<div class="dropload-refresh">↓下拉刷新</div>',
                domUpdate  : '<div class="dropload-update">↑释放更新</div>',
                domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>'
            },
            domDown : {                                                          // 下方DOM
                domClass   : 'dropload-down',
                domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
                domNoData  : '<div class="dropload-noData">暂无数据</div>'
            },
            autoLoad : true,                                                     // 自动加载
            distance : 50,                                                       // 拉动距离
            threshold : '',                                                      // 提前加载距离
            loadUpFn : '',                                                       // 上方function
            loadDownFn : ''                                                      // 下方function
        }, options);

        // 如果加载下方，事先在下方插入DOM
        if(me.opts.loadDownFn != ''){
            me.$element.append('<div class="'+me.opts.domDown.domClass+'">'+me.opts.domDown.domRefresh+'</div>');
            me.$domDown = $('.'+me.opts.domDown.domClass);
        }

        // 计算提前加载距离
        if(!!me.$domDown && me.opts.threshold === ''){
            // 默认滑到加载区2/3处时加载
            me._threshold = Math.floor(me.$domDown.height()*1/3);
        }else{
            me._threshold = me.opts.threshold;
        }

        // 判断滚动区域
        if(me.opts.scrollArea == win){
            me.$scrollArea = $win;
            // 获取文档高度
            me._scrollContentHeight = $doc.height();
            // 获取win显示区高度  —— 这里有坑
            me._scrollWindowHeight = doc.documentElement.clientHeight;
        }else{
            me.$scrollArea = me.opts.scrollArea;
            me._scrollContentHeight = me.$element[0].scrollHeight;
            me._scrollWindowHeight = me.$element.height();
        }
        fnAutoLoad(me);

        // 窗口调整
        $win.on('resize',function(){
            if(me.opts.scrollArea == win){
                // 重新获取win显示区高度
                me._scrollWindowHeight = win.innerHeight;
            }else{
                me._scrollWindowHeight = me.$element.height();
            }
        });

        // 绑定触摸
        me.$element.on('touchstart',function(e){
            if(!me.loading){
                fnTouches(e);
                fnTouchstart(e, me);
            }
        });
        me.$element.on('touchmove',function(e){
            if(!me.loading){
                fnTouches(e, me);
                fnTouchmove(e, me);
            }
        });
        me.$element.on('touchend',function(){
            if(!me.loading){
                fnTouchend(me);
            }
        });

        // 加载下方
        me.$scrollArea.on('scroll',function(){
            me._scrollTop = me.$scrollArea.scrollTop();

            // 滚动页面触发加载数据
            if(me.opts.loadDownFn != '' && !me.loading && !me.isLockDown && (me._scrollContentHeight - me._threshold) <= (me._scrollWindowHeight + me._scrollTop)){
                loadDown(me);
            }
        });
    };

    // touches
    function fnTouches(e){
        if(!e.touches){
            e.touches = e.originalEvent.touches;
        }
    }

    // touchstart
    function fnTouchstart(e, me){
        me._startY = e.touches[0].pageY;
        // 记住触摸时的scrolltop值
        me.touchScrollTop = me.$scrollArea.scrollTop();
    }

    // touchmove
    function fnTouchmove(e, me){
        me._curY = e.touches[0].pageY;
        me._moveY = me._curY - me._startY;

        if(me._moveY > 0){
            me.direction = 'down';
        }else if(me._moveY < 0){
            me.direction = 'up';
        }

        var _absMoveY = Math.abs(me._moveY);

        // 加载上方
        if(me.opts.loadUpFn != '' && me.touchScrollTop <= 0 && me.direction == 'down' && !me.isLockUp){
            e.preventDefault();

            me.$domUp = $('.'+me.opts.domUp.domClass);
            // 如果加载区没有DOM
            if(!me.upInsertDOM){
                me.$element.prepend('<div class="'+me.opts.domUp.domClass+'"></div>');
                me.upInsertDOM = true;
            }

            fnTransition(me.$domUp,0);

            // 下拉
            if(_absMoveY <= me.opts.distance){
                me._offsetY = _absMoveY;
                // todo：move时会不断清空、增加dom，有可能影响性能，下同
                me.$domUp.html(me.opts.domUp.domRefresh);
                // 指定距离 < 下拉距离 < 指定距离*2
            }else if(_absMoveY > me.opts.distance && _absMoveY <= me.opts.distance*2){
                me._offsetY = me.opts.distance+(_absMoveY-me.opts.distance)*0.5;
                me.$domUp.html(me.opts.domUp.domUpdate);
                // 下拉距离 > 指定距离*2
            }else{
                me._offsetY = me.opts.distance+me.opts.distance*0.5+(_absMoveY-me.opts.distance*2)*0.2;
            }

            me.$domUp.css({'height': me._offsetY});
        }
    }

    // touchend
    function fnTouchend(me){
        var _absMoveY = Math.abs(me._moveY);
        if(me.opts.loadUpFn != '' && me.touchScrollTop <= 0 && me.direction == 'down' && !me.isLockUp){
            fnTransition(me.$domUp,300);

            if(_absMoveY > me.opts.distance){
                me.$domUp.css({'height':me.$domUp.children().height()});
                me.$domUp.html(me.opts.domUp.domLoad);
                me.loading = true;
                me.opts.loadUpFn(me);
            }else{
                me.$domUp.css({'height':'0'}).on('webkitTransitionEnd mozTransitionEnd transitionend',function(){
                    me.upInsertDOM = false;
                    $(this).remove();
                });
            }
            me._moveY = 0;
        }
    }

    // 如果文档高度不大于窗口高度，数据较少，自动加载下方数据
    function fnAutoLoad(me){
        if(me.opts.autoLoad){
            if((me._scrollContentHeight - me._threshold) <= me._scrollWindowHeight){
                loadDown(me);
            }
        }
    }

    // 重新获取文档高度
    function fnRecoverContentHeight(me){
        if(me.opts.scrollArea == win){
            me._scrollContentHeight = $doc.height();
        }else{
            me._scrollContentHeight = me.$element[0].scrollHeight;
        }
    }

    // 加载下方
    function loadDown(me){
        me.direction = 'up';
        me.$domDown.html(me.opts.domDown.domLoad);
        me.loading = true;
        me.opts.loadDownFn(me);
    }

    // 锁定
    MyDropLoad.prototype.lock = function(direction){
        var me = this;
        // 如果不指定方向
        if(direction === undefined){
            // 如果操作方向向上
            if(me.direction == 'up'){
                me.isLockDown = true;
                // 如果操作方向向下
            }else if(me.direction == 'down'){
                me.isLockUp = true;
            }else{
                me.isLockUp = true;
                me.isLockDown = true;
            }
            // 如果指定锁上方
        }else if(direction == 'up'){
            me.isLockUp = true;
            // 如果指定锁下方
        }else if(direction == 'down'){
            me.isLockDown = true;
            // 为了解决DEMO5中tab效果bug，因为滑动到下面，再滑上去点tab，direction=down，所以有bug
            me.direction = 'up';
        }
    };

    // 解锁
    MyDropLoad.prototype.unlock = function(){
        var me = this;
        // 简单粗暴解锁
        me.isLockUp = false;
        me.isLockDown = false;
        // 为了解决DEMO5中tab效果bug，因为滑动到下面，再滑上去点tab，direction=down，所以有bug
        me.direction = 'up';
    };

    // 无数据
    MyDropLoad.prototype.noData = function(flag){
        var me = this;
        if(flag === undefined || flag == true){
            me.isData = false;
        }else if(flag == false){
            me.isData = true;
        }
    };

    // 重置
    MyDropLoad.prototype.resetload = function(){
        var me = this;
        if(me.direction == 'down' && me.upInsertDOM){
            me.$domUp.css({'height':'0'}).on('webkitTransitionEnd mozTransitionEnd transitionend',function(){
                me.loading = false;
                me.upInsertDOM = false;
                $(this).remove();
                fnRecoverContentHeight(me);
            });
        }else if(me.direction == 'up'){
            me.loading = false;
            // 如果有数据
            if(me.isData){
                // 加载区修改样式
                me.$domDown.html(me.opts.domDown.domRefresh);
                fnRecoverContentHeight(me);
                fnAutoLoad(me);
            }else{
                // 如果没数据
                me.$domDown.html(me.opts.domDown.domNoData);
            }
        }
    };

    // css过渡
    function fnTransition(dom,num){
        dom.css({
            '-webkit-transition':'all '+num+'ms',
            'transition':'all '+num+'ms'
        });
    }
})(window.Zepto || window.jQuery);

//日历控件
;(function ($) {
    var LQ=jQuery;
    LQ.selectUi={
        show:function(options){
            var def={
                id:"", //selectUi的ID值
                hiddenInput:"", //设置下拉列表获取值保存的字段；
                selectInit:"", //接收下拉表数据，数组[{name:name,value:value}]
                selectNext:"", //二级菜单值
                pulldown:function(){},//下拉列表选择后返回函数
                callback:function(){} //callback 初始插件时返回函数
            };
            var ini=$.extend(def,options);

            var $this=$("#"+ini.id);
            if($this.length<=0) return;

            $this.css({zIndex:10});
            $this.addClass("select_ul_ui");

            if(ini.selectInit){
                if(typeof(ini.selectInit)=='object'){
                    var option='';
                    if(typeof(ini.selectInit[0]) != 'object' && ini.selectInit[0]=='') return;
                    for(var i=0; i<ini.selectInit.length; i++){
                        option+="<option value="+ini.selectInit[i]['AID']+">"+ini.selectInit[i]['AName']+"</option>";
                        //option+="<option value="+ini.selectInit[i]['value']+">"+ini.selectInit[i]['name']+"</option>";
                    }
                    $this.children('select').remove();
                    $this.append('<select>'+option+'</select>');
                }

            }

            var sel=$this.children("select");
            if(sel.length<=0) return;
            var sellen=sel.children("option").length;
            var ulid;
            var html="";
            sel.hide();

            if(ini.hiddenInput){
                $u=ini.hiddenInput;
            }else{
                $u=ini.id;
            }

            /*是否传值过来*/
            $val=$this.children(".selectfocus").attr("data-value");
            $options=sel.find("option");
            if($val != undefined){
                if($options.length==0){
                    //获取同类值
                    val=LQ.selectUi.getPreventData($val);
                    LQ.selectUi.appendData(ini.id,val);
                    LQ.selectUi.selectOption(sel,$val);

                }else{
                    LQ.selectUi.selectOption(sel,$val);

                }
            }

            var items=0;
            for(var i=0; i<sel.children("option").length; i++){
                html+="<li data-val="+sel.children("option").eq(i).val()+">"+sel.children("option").eq(i).html()+"</li>";
                items++;

            }
            ulid="ul_"+$u;
            $this.append('<input type=\"hidden\" name=\"'+$u+'\" id=\"'+$u+'\" />');

            /*传值后设置hidden值*/

            if($val != undefined){
                LQ.selectUi.setHiddenValue($this,$val);
            }

            /*是否已经选定值*/
            if(sel.find("option[selected]").text() != ''){
                $this.children(".selectfocus").html('<em>'+sel.find("option[selected]").text()+'</em>');
                $("#"+ini.hiddenInput).val(sel.find("option[selected]").val());
            }

            $this.children("#"+ulid+"").remove();
            $this.append('<ul id='+ulid+'>'+html+'</ul>');

            var ul=$this.children("ul");
            if(items>10){
                ul.height(200);
            }

            ini.callback();

            ul.css({zIndex:11}).width($this.width()-2);
            ul.children("li").bind("click",function(e){
                e.stopPropagation();
                $(this).parent().siblings('.selectfocus').html('<em>'+$(this).text()+'</em>');
                $(this).parent().siblings('input[type="hidden"]').val($(this).attr("data-val"));
                ulStatus();
                ini.pulldown();

                if(ini.selectNext){
                    LQ.selectUi.selectFun(ini.selectNext,$(this).attr("data-val"));
                }
            });

            $this.bind("click",function(e){
                e.stopPropagation();
                var id=$(".select_ul_ui").index($this); //获取索引值
                ulhide(id);
                ulStatus();
            });

            $(document).bind("click",function(e){
                var status=ul.css("display");
                if(status!="none"){
                    ul.hide();
                    ul.parent().css({zIndex:11});
                }
            });

            function ulStatus(){
                if(ul.css("display")=="none"){
                    ul.show();
                    ul.parent().css({zIndex:13});
                }else{
                    ul.hide();
                    ul.parent().css({zIndex:11});
                }
            }

            function ulhide(id){
                var len=$(".select_ul_ui").length;
                if(len==0) return;
                for(var i=0; i<len; i++){
                    if(i!=id){
                        $(".select_ul_ui").eq(i).children("ul").hide().parent().css({zIndex:11});
                    }
                }
            }

        },
        selectOption:function($sel,$val){
            if($val==undefined) return;
            $sel.find("option").each(function(index,element){
                if($(element).val()==$val){
                    $(element).attr("selected","true");
                }
            })
        },
        setHiddenValue:function($this,$val){
            if($val==undefined) return;
            $this.children('input[type="hidden"]').val($val);
        },
        selectFun:function(obj,value){
            var id = obj['selectid'];
            $("#"+id).show();
            $("#"+id).children('.selectfocus').html('<em>'+obj['selectTxt']+'</em>');
            $("#"+id).children('input[type="hidden"]').val('');
            LQ.selectUi.appendData(id,value);
            $("#"+id).find("li").bind("click",function(e){
                e.stopPropagation();
                $(this).parent().siblings('.selectfocus').html('<em>'+$(this).text()+'</em>');
                $(this).parent().siblings('input[type="hidden"]').val($(this).attr("data-val"));
                $(this).parent().hide().css({zIndex:11});
            });
        },
        appendData:function(id,val){
            var items=0;
            var value=LQ.selectUi.getData(val);
            if(value){
                if(typeof(value)=='object'){
                    var option='';
                    var listr='';
                    if(typeof(value[0]) != 'object' && value[0]=='') return;
                    for(var i=0; i<value.length; i++){
                        option+="<option value="+value[i]['AID']+">"+value[i]['AName']+"</option>";
                        listr+="<li data-val="+value[i]['AID']+">"+value[i]['AName']+"</li>";
                        items++;
                    }
                    $("#"+id).children("select").empty();
                    $("#"+id).children("select").append(option);
                    $("#"+id).children("ul").empty();
                    $("#"+id).children("ul").append(listr);
                }
            }

            var ul=$("#"+id).children("ul");
            if(items>10){
                ul.height(200);
            }else{
                ul.height('');
            }

        },
        getData:function(value){
            var html=[];
            for(var i=0; i<areas.length; i++){
                if(areas[i]["APid"]==value){
                    html.push(areas[i]);
                }
            }
            return html;
        },
        getPreventData:function(value){
            var $id=null;
            for(var i=0; i<areas.length; i++){
                if(areas[i]["AID"]==value){
                    $id=areas[i]["APid"];
                }
            }
            return $id;
        }
    };
    var lq_datetimepick = false;
    $.fn.lqdatetimepicker = function (options) {
        lq_datetimepick = true;
        return this.each(function () {
            var $this = $(this);
            if ($("#lq-datetimepick").length > 0) $("#lq-datetimepick").remove();
            var _this = {
                css: "datetime-day", //datetime-hour 时分样式 ，datetime-day 日期样式
                offset: {
                    left : 0,
                    top : 10
                },
                dateType: 'H', //H选择时分，D选择日期
                date: {
                    'H' : {
                        begin : '8:00', //开始时分
                        end : '23:30', //结束时分
                        step : "10" //时分步长
                    },
                    'D' : {
                        month : new Date(), //日期默认时间
                        selected : (new Date()).getDate()
                    },
                    'M' : {
                        begin : 1, //月份开始
                        end : 12, //月份结束
                        selected : (new Date()).getMonth()+1  //月份初始
                    },
                    'Y' : {
                        begin : 2001, //年份开始
                        end : (new Date()).getFullYear(), //年份结束
                        selected : (new Date()).getFullYear() //年份初始
                    }
                },
                selectback : function(){}, //选择时间的事件回调
                callback : function () { } //初始化时间事件回调
            };
            $.extend(_this, options);

            var _obj = $("<div class=\"lq-datetimepick\" id=\"lq-datetimepick\" />");
            var _arr = $("<div class=\"datetime-arr\" />");
            var _container = $("<div class=\"select-datetime\" />");
            var _selectitem = $("<div class=\"datetime-select\" />");
            var _header = $("<dl class=\"datetime-time\"></dl>");
            var _item = $("<dl class=\"datetime-time\"></dl>");


            var _day;

            var _datevalue = $this.val() == '' ? new Date() : new Date($this.val().replace(/-/g, "/"));
            var _dateyear = _datevalue.getFullYear();
            var _datemonth = _datevalue.getMonth()+1;
            var _datedate = _datevalue.getDate();

            var _x = $this.offset().left + _this.offset.left,
                _y = $this.offset().top + $this.outerHeight() + _this.offset.top,
                _w = $this.outerWidth();

            if(_this.css != undefined || _this.css != ''){
                _header.addClass(_this.css);
                _item.addClass(_this.css);
            }

            if($this.val() != ''){
                _this.date.D.month = new Date($this.val().replace(/-/g, "/"));
            }


            $.fn.lqdatetimepicker.setDateData($this,_obj,_item,_this);

            //日期
            if(_this.dateType == 'D'){

                //年份
                var _select_year = $.fn.lqdatetimepicker.setSelectData(_this,'Y');
                var _selectul_year = $("<div class=\"selectul\" id=\"lqyear\" />");
                var _select_year_t = $("<div class=\"selectfocus\"></div>");
                if(_dateyear != '') _select_year_t.attr("data-value",_dateyear);
                _select_year_t.html("<em>选择年份</em>");
                _select_year_t.appendTo(_selectul_year);
                _select_year.appendTo(_selectul_year);
                _selectul_year.appendTo(_selectitem);
                _selectitem.appendTo(_container);


                //月份
                var _select_month = $.fn.lqdatetimepicker.setSelectData(_this,'M');
                var _selectul_month = $("<div class=\"selectul\" id=\"lqmonth\" />");
                var _select_month_t = $("<div class=\"selectfocus\"></div>");
                if(_datemonth != '') _select_month_t.attr("data-value",_datemonth);
                _select_month_t.html("<em>选择月份</em>");
                _select_month_t.appendTo(_selectul_month);
                _select_month.appendTo(_selectul_month);
                _selectul_month.appendTo(_selectitem);
                _selectitem.appendTo(_container);

                //星期
                _week = $.fn.lqdatetimepicker.intWeek();
                for(var i=0; i<7; i++){
                    _day = $("<dt><span>"+_week[i]+"</span></dt>");
                    _day.appendTo(_header);
                }
                _header.appendTo(_container);
            }

            _arr.appendTo(_obj);
            _container.appendTo(_obj);
            _item.appendTo(_container);
            _obj.appendTo("body").css({
                width : _w+'px',
                left : _x + 'px',
                top : _y  + 'px'
            }).show();
            _this.callback();

            LQ.selectUi.show({
                id:"lqyear",
                hiddenInput:"selectYear",
                pulldown:function(){
                    var _year = $("#selectYear").val();
                    var _month = $("#selectMonth").val();
                    var _day = $(".datetime-time>dd.selected").attr("data-value");
                    _day = _day==undefined ? _this.date.D.selected : _day;
                    _this.date.D.month = new Date(_year+'/'+_month+'/'+_day);
                    $.fn.lqdatetimepicker.setDateData($this,_obj,_item,_this);
                }
            });
            LQ.selectUi.show({
                id:"lqmonth",
                hiddenInput:"selectMonth",
                pulldown:function(){
                    var _year = $("#selectYear").val();
                    var _month = $("#selectMonth").val();
                    var _day = $(".datetime-time>dd.selected").attr("data-value");
                    _day = _day==undefined ? _this.date.D.selected : _day;
                    _this.date.D.month = new Date(_year+'/'+_month+'/'+_day);
                    $.fn.lqdatetimepicker.setDateData($this,_obj,_item,_this);
                }
            });

            _obj.on("click",function(e){
                e.stopPropagation();
            });

            $(document).on("click",function(e){
                if(lq_datetimepick){
                    _obj.remove();
                }
            });

        })

    };

    $.fn.lqdatetimepicker.setDateData = function($this,_obj,_item,_this){
        var _time;
        var _datetime = $.fn.lqdatetimepicker.setDateTime(_this);
        if (typeof(_datetime) == 'object'){
            _item.empty();
            for (var i=0; i<_datetime.length; i++){
                _time = $("<dd data-value="+_datetime[i]+"><em>"+_datetime[i]+"</em></dd>");
                if(_this.dateType == 'D'){
                    _time.attr('data-value',_this.date.D.month.getFullYear()+'-'+(_this.date.D.month.getMonth()+1)+'-'+_time.attr('data-value'))
                }
                _time.on("click",function(){
                    $this.val($(this).attr("data-value"));
                    _obj.remove();
                    _this.selectback();
                });
                _time.hover(function(){
                    $(this).addClass('over');
                },function(){
                    $(this).removeClass('over');
                });
                if($this.val() == _datetime[i]){
                    _time.addClass('selected')
                }
                if(($this.val() == '') && (_this.dateType == 'D') && (_this.date.D.month.getDate() == _datetime[i])){
                    _time.addClass('current');
                }
                if((new Date($this.val()).getDate() == _datetime[i]) && (_this.dateType == 'D')){
                    _time.addClass('current');
                }
                if(_datetime[i] == ''){
                    _time.attr("data-value",'');
                    _time.addClass('blank');
                    _time.off("click");
                }
                _time.appendTo(_item);
            }
        }
    };

    $.fn.lqdatetimepicker.setDateTime = function(_this){
        var dateTime;
        if(_this.dateType == 'H'){
            dateTime = $.fn.lqdatetimepicker.intHourTime(_this);
        }else if(_this.dateType == 'D') {
            dateTime = $.fn.lqdatetimepicker.intDayTime(_this);
        }
        return dateTime;
    };

    $.fn.lqdatetimepicker.setSelectData = function(_this,type){
        var _data;
        var _cell;
        var _select = $("<select></select>");
        if(type == 'Y'){
            _data = $.fn.lqdatetimepicker.intYearTime(_this);
            _cell = '年';
        }
        if(type == 'M'){
            _data = $.fn.lqdatetimepicker.intMonthTime(_this);
            _cell = '月'
        }
        for(var i=0; i<_data.length; i++){
            $("<option></option>").text(_data[i]+_cell).attr("value",_data[i]).appendTo(_select);
        }
        return _select;

    };

    /*时分*/
    $.fn.lqdatetimepicker.intHourTime = function(_this){
        var begindate = _this.date.H.begin;
        var enddate = _this.date.H.end;
        var stepdate = _this.date.H.step;
        var _a = [];
        var _date = new Date();
        var _now = _date.getFullYear()+"/"+(_date.getMonth()+1)+"/"+_date.getDate();
        var _begindate = new Date(_now+" "+begindate);
        var _enddate = new Date(_now+" "+enddate);

        var _hours = _enddate.getHours() - _begindate.getHours();
        var _minutes = _enddate.getMinutes() - _begindate.getMinutes();
        var _len = (_hours*60 + _minutes)/stepdate;

        for(var i=0; i<=_len; i++){
            var _t = $.fn.lqdatetimepicker.dateAdd('M',stepdate*i,_begindate);
            _a.push(_t.getHours()+":"+(_t.getMinutes() >= 10 ? _t.getMinutes() : '0'+_t.getMinutes()));
        }
        return _a;
    };

    /*日期*/
    $.fn.lqdatetimepicker.intDayTime = function(_this){
        var _a = [];
        var _date = _this.date.D.month;
        var _year = _date.getFullYear();
        var _month = _date.getMonth();
        var _week = new Date(_year+'/'+(_month+1)+'/1').getDay(); // 当前月的第一天
        var _day = 32-new Date(_year,_month,32).getDate();
        var _cell = Math.ceil((_week + _day)/7)*7 - (_week + _day);

        for(var w=0; w<_week; w++){
            _a.push('');
        }
        for(var i=0; i<_day; i++){
            _a.push(i+1);
        }
        for(var w=0; w<_cell; w++){
            _a.push('');
        }
        return _a;
    };

    /*月份*/
    $.fn.lqdatetimepicker.intMonthTime = function(_this){
        var _a = [];
        var _month_begin = _this.date.M.begin;
        var _month_end = _this.date.M.end;
        for(var i=_month_begin,j=_month_end+1; i<j; i++){
            _a.push(i);
        }
        return _a;
    };

    /*年份*/
    $.fn.lqdatetimepicker.intYearTime = function(_this){
        var _a = [];
        var _year_begin = _this.date.Y.begin;
        var _year_end = _this.date.Y.end;
        for(var i=_year_begin,j=_year_end+1; i<j; i++){
            _a.push(i);
        }
        return _a;
    };

    $.fn.lqdatetimepicker.intWeek = function(){
        return ['星期日','星期一','星期二','星期三','星期四','星期五','星期六']
    };

    $.fn.lqdatetimepicker.dateAdd = function(interval, NumDay, dtDate){
        var dtTmp = new Date(dtDate);
        if(isNaN(dtTmp)) dtTmp = new Date();
        switch(interval.toUpperCase())  {
            case "S" : return new Date(Date.parse(dtTmp) + (1000 * NumDay));
            case "M" : return new Date(Date.parse(dtTmp) + (60000 * NumDay));
            case "H" : return new Date(Date.parse(dtTmp) + (3600000 * NumDay));
            case "D" : return new Date(Date.parse(dtTmp) + (86400000 * NumDay));
            case "W" : return new Date(Date.parse(dtTmp) + ((86400000 * 7) * NumDay));
            case "M" : return new Date(dtTmp.getFullYear(), (dtTmp.getMonth()) + NumDay, dtTmp.getDate(),  dtTmp.getHours(),  dtTmp.getMinutes(),  dtTmp.getSeconds());
            case "Y" : return new Date((dtTmp.getFullYear()  +  NumDay),  dtTmp.getMonth(),  dtTmp.getDate(),  dtTmp.getHours(),  dtTmp.getMinutes(),  dtTmp.getSeconds());
        }
    };


})(jQuery);

//活动日历
;(function(root, factory) {
    if (typeof define === 'function' && define.amd) {
        define('calendar', ['jquery'], factory);
    } else if (typeof exports === 'object') {
        module.exports = factory(require('jquery'));
    } else {
        factory(root.jQuery);
    }
}(this, function($) {

    // default config

    var defaults = {

            // 宽度
            width: 280,
            // 高度, 不包含头部，头部固定高度
            height: 280,

            zIndex: 1,

            // selector or element
            // 设置触发显示的元素，为null时默认显示
            trigger: null,

            // 偏移位置，可设正负值
            // trigger 设置时生效
            offset: [0, 1],

            // 自定义类，用于重写样式
            customClass: '',

            // 显示视图
            // 可选：date, month
            view: 'date',

            // 默认日期为当前日期
            date: new Date(),
            format: 'yyyy/mm/dd',

            // 一周的第一天
            // 0表示周日，依次类推
            startWeek: 0,

            // 星期格式
            weekArray: ['日', '一', '二', '三', '四', '五', '六'],

            // 设置选择范围
            // 格式：[开始日期, 结束日期]
            // 开始日期为空，则无上限；结束日期为空，则无下限
            // 如设置2015年11月23日以前不可选：[new Date(), null] or ['2015/11/23']
            selectedRang: null,

            // 日期关联数据 [{ date: string, value: object }, ... ]
            // 日期格式与 format 一致
            // 如 [ {date: '2015/11/23', value: '面试'} ]
            data: null,

            // 展示关联数据
            // 格式化参数：{m}视图，{d}日期，{v}value
            // 设置 false 表示不显示
            label: '{d}\n{v}',

            // 切换字符
            prev: '&lt;',
            next: '&gt;',

            // 切换视图
            // 参数：view, y, m
            viewChange: $.noop,

            // view: 视图
            // date: 不同视图返回不同的值
            // value: 日期关联数据
            onSelected: function(view, date, value) {
                // body...
            },

            // 参数同上
            onMouseenter: $.noop,

            onClose: $.noop
        },

    // static variable

        ACTION_NAMESPACE = 'data-calendar-',

        DISPLAY_VD = '[' + ACTION_NAMESPACE + 'display-date]',
        DISPLAY_VM = '[' + ACTION_NAMESPACE + 'display-month]',

        ARROW_DATE = '[' + ACTION_NAMESPACE + 'arrow-date]',
        ARROW_MONTH = '[' + ACTION_NAMESPACE + 'arrow-month]',

        ITEM_DAY = ACTION_NAMESPACE + 'day',
        ITEM_MONTH = ACTION_NAMESPACE + 'month',

        DISABLED = 'disabled',
        MARK_DATA = 'markData',

        VIEW_CLASS = {
            date: 'calendar-d',
            month: 'calendar-m'
        },

        OLD_DAY_CLASS = 'old',
        NEW_DAY_CLASS = 'new',
        TODAY_CLASS = 'now',
        SELECT_CLASS = 'selected',
        MARK_DAY_HTML = '<i class="dot"></i>',
        DATE_DIS_TPL = '{year}/<span class="m">{month}</span>',

        ITEM_STYLE = 'style="width:{w}px;height:{h}px;line-height:{h}px"',
        WEEK_ITEM_TPL = '<li ' + ITEM_STYLE + '>{wk}</li>',
        DAY_ITEM_TPL = '<li ' + ITEM_STYLE + ' class="{class}" {action}>{value}</li>',
        MONTH_ITEM_TPL = '<li ' + ITEM_STYLE + ' ' + ITEM_MONTH + '>{m}月</li>',

        TEMPLATE = [
            '<div class="calendar-inner">',
            '<div class="calendar-views">',
            '<div class="view view-date">',
            '<div class="calendar-hd">',
            '<a href="javascript:;" data-calendar-display-date class="calendar-display">',
            '{yyyy}/<span class="m">{mm}</span>',
            '</a>',
            '<div class="calendar-arrow">',
            '<span class="prev" title="上一月" data-calendar-arrow-date>{prev}</span>',
            '<span class="next" title="下一月" data-calendar-arrow-date>{next}</span>',
            '</div>',
            '</div>',
            '<div class="calendar-ct">',
            '<ol class="week">{week}</ol>',
            '<ul class="date-items"></ul>',
            '</div>',
            '</div>',
            '<div class="view view-month">',
            '<div class="calendar-hd">',
            '<a href="javascript:;" data-calendar-display-month class="calendar-display">{yyyy}</a>',
            '<div class="calendar-arrow">',
            '<span class="prev" title="上一年" data-calendar-arrow-month>{prev}</span>',
            '<span class="next" title="下一年" data-calendar-arrow-month>{next}</span>',
            '</div>',
            '</div>',
            '<ol class="calendar-ct month-items">{month}</ol>',
            '</div>',
            '</div>',
            '</div>',
            '<div class="calendar-label"><p>HelloWorld</p><i></i></div>'
        ],
        OS = Object.prototype.toString;

    // utils

    function isDate(obj) {
        return OS.call(obj) === '[object Date]';
    }

    function isString(obj) {
        return OS.call(obj) === '[object String]';
    }


    function getClass(el) {
        return el.getAttribute('class') || el.getAttribute('className');
    }

    // extension methods

    String.prototype.repeat = function(data) {
        return this.replace(/\{\w+\}/g, function(str) {
            var prop = str.replace(/\{|\}/g, '');
            return data[prop] || '';
        });
    };

    String.prototype.toDate = function() {
        var dt = new Date(),
            dot = this.replace(/\d/g, '').charAt(0),
            arr = this.split(dot);

        dt.setFullYear(arr[0]);
        dt.setMonth(arr[1] - 1);
        dt.setDate(arr[2]);
        return dt;
    };

    Date.prototype.format = function(exp) {
        var y = this.getFullYear(),
            m = this.getMonth() + 1,
            d = this.getDate();

        return exp.replace('yyyy', y).replace('mm', m).replace('dd', d);
    };

    Date.prototype.isSame = function(y, m, d) {
        if (isDate(y)) {
            var dt = y;
            y = dt.getFullYear();
            m = dt.getMonth() + 1;
            d = dt.getDate();
        }
        return this.getFullYear() === y && this.getMonth() + 1 === m && this.getDate() === d;
    };

    Date.prototype.add = function(n) {
        this.setDate(this.getDate() + n);
    };

    Date.prototype.minus = function(n) {
        this.setDate(this.getDate() - n);
    };

    Date.prototype.clearTime = function(n) {
        this.setHours(0);
        this.setSeconds(0);
        this.setMinutes(0);
        this.setMilliseconds(0);
        return this;
    };

    Date.isLeap = function(y) {
        return (y % 100 !== 0 && y % 4 === 0) || (y % 400 === 0);
    };

    Date.getDaysNum = function(y, m) {
        var num = 31;

        switch (m) {
            case 2:
                num = this.isLeap(y) ? 29 : 28;
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                num = 30;
                break;
        }
        return num;
    };

    Date.getSiblingsMonth = function(y, m, n) {
        var d = new Date(y, m - 1);
        d.setMonth(m - 1 + n);
        return {
            y: d.getFullYear(),
            m: d.getMonth() + 1
        };
    };

    Date.getPrevMonth = function(y, m, n) {
        return this.getSiblingsMonth(y, m, 0 - (n || 1));
    };

    Date.getNextMonth = function(y, m, n) {
        return this.getSiblingsMonth(y, m, n || 1);
    };

    Date.tryParse = function(obj) {
        if (!obj) {
            return obj;
        }
        return isDate(obj) ? obj : obj.toDate();
    };


    // Calendar class

    function Calendar(element, options) {
        this.$element = $(element);
        this.options = $.extend({}, $.fn.calendar.defaults, options);
        this.$element.addClass('calendar ' + this.options.customClass);
        this.width = this.options.width;
        this.height = this.options.height;
        this.date = this.options.date;
        this.selectedRang = this.options.selectedRang;
        this.data = this.options.data;
        this.init();
    }

    Calendar.prototype = {
        constructor: Calendar,
        getDayAction: function(day) {
            var action = ITEM_DAY;
            if (this.selectedRang) {
                var start = Date.tryParse(this.selectedRang[0]),
                    end = Date.tryParse(this.selectedRang[1]);

                if ((start && day < start.clearTime()) || (end && day > end.clearTime())) {
                    action = DISABLED;
                }
            }

            return action;
        },
        getDayData: function(day) {
            var ret, data = this.data;

            if (data) {

                for (var i = 0, len = data.length; i < len; i++) {
                    var item = data[i];

                    if (day.isSame(item.date.toDate())) {
                        ret = item.value;
                    }
                }
            }

            return ret;
        },
        getDayItem: function(y, m, d, f) {
            var dt = this.date,
                idt = new Date(y, m - 1, d),
                data = {
                    w: (this.width / 7).toFixed(1),
                    h: (this.height / 7).toFixed(1),
                    value: d
                },
                markData,
                $item;

            var selected = dt.isSame(y, m, d) ? SELECT_CLASS : '';
            if (f === 1) {
                data['class'] = OLD_DAY_CLASS;
            } else if (f === 3) {
                data['class'] = NEW_DAY_CLASS;
            } else {
                data['class'] = '';
            }

            if (dt.isSame(y, m, d)) {
                data['class'] += ' ' + TODAY_CLASS;
            }

            data.action = this.getDayAction(idt);
            markData = this.getDayData(idt);

            $item = $(DAY_ITEM_TPL.repeat(data));

            if (markData) {
                $item.data(MARK_DATA, markData);
                $item.html(d + MARK_DAY_HTML);
            }

            return $item;
        },
        getDaysHtml: function(y, m) {
            var year, month, firstWeek, daysNum, prevM, prevDiff,
                dt = this.date,
                $days = $('<ol class="days"></ol>');

            if (isDate(y)) {
                year = y.getFullYear();
                month = y.getMonth() + 1;
            } else {
                year = Number(y);
                month = Number(m);
            }

            firstWeek = new Date(year, month - 1, 1).getDay() || 7;
            prevDiff = firstWeek - this.options.startWeek;
            daysNum = Date.getDaysNum(year, month);
            prevM = Date.getPrevMonth(year, month);
            prevDaysNum = Date.getDaysNum(year, prevM.m);
            nextM = Date.getNextMonth(year, month);
            // month flag
            var PREV_FLAG = 1,
                CURR_FLAG = 2,
                NEXT_FLAG = 3,
                count = 0;

            for (var p = prevDaysNum - prevDiff + 1; p <= prevDaysNum; p++, count++) {

                $days.append(this.getDayItem(prevM.y, prevM.m, p, PREV_FLAG));
            }

            for (var c = 1; c <= daysNum; c++, count++) {
                $days.append(this.getDayItem(year, month, c, CURR_FLAG));
            }

            for (var n = 1, nl = 42 - count; n <= nl; n++) {

                $days.append(this.getDayItem(nextM.y, nextM.m, n, NEXT_FLAG));
            }

            return $('<li></li>').width(this.options.width).append($days);
        },
        getWeekHtml: function() {
            var week = [],
                weekArray = this.options.weekArray,
                start = this.options.startWeek,
                len = weekArray.length,
                w = (this.width / 7).toFixed(1),
                h = (this.height / 7).toFixed(1);

            for (var i = start; i < len; i++) {
                week.push(WEEK_ITEM_TPL.repeat({
                    w: w,
                    h: h,
                    wk: weekArray[i]
                }));
            }

            for (var j = 0; j < start; j++) {
                week.push(WEEK_ITEM_TPL.repeat({
                    w: w,
                    h: h,
                    wk: weekArray[j]
                }));
            }

            return week.join('');
        },
        getMonthHtml: function() {
            var month = [],
                w = this.width / 4,
                h = this.height / 4,
                i = 1;

            for (; i < 13; i++) {
                month.push(MONTH_ITEM_TPL.repeat({
                    w: w,
                    h: h,
                    m: i
                }));
            }

            return month.join('');
        },
        setMonthAction: function(y) {
            var m = this.date.getMonth() + 1;

            this.$monthItems.children().removeClass(TODAY_CLASS);
            if (y === this.date.getFullYear()) {
                this.$monthItems.children().eq(m - 1).addClass(TODAY_CLASS);
            }
        },
        fillStatic: function() {
            var staticData = {
                prev: this.options.prev,
                next: this.options.next,
                week: this.getWeekHtml(),
                month: this.getMonthHtml()
            };

            this.$element.html(TEMPLATE.join('').repeat(staticData));
        },
        updateDisDate: function(y, m) {
            this.$disDate.html(DATE_DIS_TPL.repeat({
                year: y,
                month: m
            }));
        },
        updateDisMonth: function(y) {
            this.$disMonth.html(y);
        },
        fillDateItems: function(y, m) {
            var ma = [
                Date.getPrevMonth(y, m), {
                    y: y,
                    m: m
                },
                Date.getNextMonth(y, m)
            ];

            this.$dateItems.html('');
            for (var i = 0; i < 3; i++) {
                var $item = this.getDaysHtml(ma[i].y, ma[i].m);
                this.$dateItems.append($item);
            }

        },
        hide: function(view, date, data) {
            this.$trigger.val(date.format(this.options.format));
            this.options.onClose.call(this, view, date, data);
            this.$element.hide();
        },
        trigger: function() {

            this.$trigger = this.options.trigger instanceof $ ? this.options.trigger : $(this.options.trigger);

            var _this = this,
                $this = _this.$element,
                post = _this.$trigger.offset(),
                offs = _this.options.offset;

            $this.addClass('calendar-modal').css({
                left: (post.left + offs[0]) + 'px',
                top: (post.top + _this.$trigger.outerHeight() + offs[1]) + 'px',
                zIndex: _this.options.zIndex
            });

            _this.$trigger.click(function() {
                $this.show();
            });

            $(document).click(function(e) {
                if (_this.$trigger[0] != e.target && !$.contains($this[0], e.target)) {
                    $this.hide();
                }
            });
        },
        render: function() {
            this.$week = this.$element.find('.week');
            this.$dateItems = this.$element.find('.date-items');
            this.$monthItems = this.$element.find('.month-items');
            this.$label = this.$element.find('.calendar-label');
            this.$disDate = this.$element.find(DISPLAY_VD);
            this.$disMonth = this.$element.find(DISPLAY_VM);

            var y = this.date.getFullYear(),
                m = this.date.getMonth() + 1;

            this.updateDisDate(y, m);
            this.updateMonthView(y);

            this.fillDateItems(y, m);

            this.options.trigger && this.trigger();

        },
        setView: function(view) {
            this.$element.removeClass(VIEW_CLASS.date + ' ' + VIEW_CLASS.month)
                .addClass(VIEW_CLASS[view]);
            this.view = view;
        },
        updateDateView: function(y, m, dirc, cb) {
            m = m || this.date.getMonth() + 1;

            var _this = this,
                $dis = this.$dateItems,
                exec = {
                    prev: function() {
                        var pm = Date.getPrevMonth(y, m),
                            ppm = Date.getPrevMonth(y, m, 2),
                            $prevItem = _this.getDaysHtml(ppm.y, ppm.m);

                        m = pm.m;
                        y = pm.y;

                        $dis.animate({
                            marginLeft: 0
                        }, 300, 'swing', function() {
                            $dis.children(':last').remove();
                            $dis.prepend($prevItem).css('margin-left', '-100%');

                            $.isFunction(cb) && cb.call(_this);
                        });
                    },
                    next: function() {
                        var nm = Date.getNextMonth(y, m),
                            nnm = Date.getNextMonth(y, m, 2),
                            $nextItem = _this.getDaysHtml(nnm.y, nnm.m);

                        m = nm.m;
                        y = nm.y;

                        $dis.animate({
                            marginLeft: '-200%'
                        }, 300, 'swing', function() {
                            $dis.children(':first').remove();
                            $dis.append($nextItem).css('margin-left', '-100%');

                            $.isFunction(cb) && cb.call(_this);
                        });

                    }
                };


            if (dirc) {
                exec[dirc]();
            } else {
                this.fillDateItems(y, m);
            }

            this.updateDisDate(y, m);

            this.setView('date');

            return {
                y: y,
                m: m
            };
        },
        updateMonthView: function(y) {
            this.updateDisMonth(y);
            this.setMonthAction(y);
            this.setView('month');
        },
        getDisDateValue: function() {
            var arr = this.$disDate.html().split('/'),
                y = Number(arr[0]),
                m = Number(arr[1].match(/\d{1,2}/)[0]);

            return [y, m];
        },
        selectedDay: function(d, type) {
            var arr = this.getDisDateValue(),
                y = arr[0],
                m = arr[1],
                toggleClass = function() {
                    this.$dateItems.children(':eq(1)')
                        .find('[' + ITEM_DAY + ']:not(.' + NEW_DAY_CLASS + ', .' + OLD_DAY_CLASS + ')')
                        .removeClass(SELECT_CLASS)
                        .filter(function(index) {
                            return parseInt(this.innerHTML) === d;
                        }).addClass(SELECT_CLASS);
                };

            if (type) {
                var ret = this.updateDateView(y, m, {
                    'old': 'prev',
                    'new': 'next'
                }[type], toggleClass);
                y = ret.y;
                m = ret.m;
                this.options.viewChange('date', y, m);
            } else {
                toggleClass.call(this);
            }

            return new Date(y, m - 1, d);
        },
        showLabel: function(event, view, date, data,target) {
            var $lbl = this.$label;
            var _this = this;
            console.log(event);

            $lbl.find('p').html(this.options.label.repeat({
                m: view,
                d: date.format(this.options.format),
                v: data
            }).replace(/\n/g, '<br>'));

            var w = $lbl.outerWidth(),
                h = $lbl.outerHeight();
            $lbl.css({
                left: ( $(target).offset().left - w / 2 -100) + 'px',
                top: ( $(target).offset().top  - h) + 'px'
            }).show();
        },
        hasLabel: function() {
            if (this.options.label) {
                $('body').append(this.$label);
                return true;
            }
            return false;
        },
        event: function() {
            var _this = this,
                vc = _this.options.viewChange;

            // view change
            _this.$element.on('click', DISPLAY_VD, function() {
                var arr = _this.getDisDateValue();
                _this.updateMonthView(arr[0], arr[1]);

                vc('month', arr[0], arr[1]);

            }).on('click', DISPLAY_VM, function() {
                var y = this.innerHTML;

                _this.updateDateView(y);
                vc('date', y);
            });

            // arrow
            _this.$element.on('click', ARROW_DATE, function() {
                var arr = _this.getDisDateValue(),
                    type = getClass(this),
                    y = arr[0],
                    m = arr[1];

                var d = _this.updateDateView(y, m, type, function() {
                    vc('date', d.y, d.m);
                });

            }).on('click', ARROW_MONTH, function() {

                var y = Number(_this.$disMonth.html()),
                    type = getClass(this);

                y = type === 'prev' ? y - 1 : y + 1;
                _this.updateMonthView(y);
                vc('month', y);
            });

            // selected
            _this.$element.on('click', '[' + ITEM_DAY + ']', function(e) {
                var d = parseInt(this.innerHTML),
                    cls = getClass(this),
                    type = /new|old/.test(cls) ? cls.match(/new|old/)[0] : '';

                var day = _this.selectedDay(d, type);

                _this.options.onSelected.call(this, 'date', day, $(this).data(MARK_DATA));

                _this.$trigger && _this.hide('date', day, $(this).data(MARK_DATA));

            }).on('click', '[' + ITEM_MONTH + ']', function() {
                var y = Number(_this.$disMonth.html()),
                    m = parseInt(this.innerHTML);

                _this.updateDateView(y, m);
                vc('date', y, m);
                _this.options.onSelected.call(this, 'month', new Date(y, m - 1));
            });

            // hover
            _this.$element.on('mouseenter', '[' + ITEM_DAY + ']', function(e) {
                var target=e.target;
                var arr = _this.getDisDateValue(),
                    day = new Date(arr[0], arr[1] - 1, parseInt(this.innerHTML));

                if (_this.hasLabel && $(this).data(MARK_DATA)) {
                    $('body').append(_this.$label);
                    _this.showLabel(e, 'date', day, $(this).data(MARK_DATA),target);
                }

                _this.options.onMouseenter.call(this, 'date', day, $(this).data(MARK_DATA));
            }).on('mouseleave', '[' + ITEM_DAY + ']', function() {
                _this.$label.hide();
            });
        },
        resize: function() {
            var w = this.width,
                h = this.height,
                hdH = this.$element.find('.calendar-hd').outerHeight();

            this.$element.width(w).height(h + hdH)
                .find('.calendar-inner, .view')
                .css('width', w + 'px');

            this.$element.find('.calendar-ct').width(w).height(h);

        },
        init: function() {

            this.fillStatic();
            this.resize();
            this.render();
            this.view = this.options.view;
            this.setView(this.view);
            this.event();
        },
        setData: function(data) {
            this.data = data;

            if (this.view === 'date') {
                var d = this.getDisDateValue();
                this.fillDateItems(d[0], d[1]);
            } else if (this.view === 'month') {
                this.updateMonthView(this.$disMonth.html());
            }
        },
        methods: function(name, args) {
            if (OS.call(this[name]) === '[object Function]') {
                return this[name].apply(this, args);
            }
        }
    };

    $.fn.calendar = function(options) {
        var calendar = this.data('calendar'),
            fn,
            args = [].slice.call(arguments);

        if (!calendar) {
            return this.each(function() {
                return $(this).data('calendar', new Calendar(this, options));
            });
        }
        if (isString(options)) {
            fn = options;
            args.shift();
            return calendar.methods(fn, args);
        }

        return this;
    };

    $.fn.calendar.defaults = defaults;

}));

//倒计时
/**
 * downCount: Simple Countdown clock with offset
 * Author: Sonny T. <hi@sonnyt.com>, sonnyt.com
 */

;(function ($) {

    $.fn.downCount = function (options, callback) {
        var settings = $.extend({
            date: null,
            offset: null
        }, options);

        // Throw error if date is not set
        if (!settings.date) {
            $.error('Date is not defined.');
        }

        // Throw error if date is set incorectly
        if (!Date.parse(settings.date)) {
            $.error('Incorrect date format, it should look like this, 12/24/2012 12:00:00.');
        }

        // Save container
        var container = this;

        /**
         * Change client's local date to match offset timezone
         * @return {Object} Fixed Date object.
         */
        var currentDate = function () {
            // get client's current date
            var date = new Date();

            // turn date to utc
            var utc = date.getTime() + (date.getTimezoneOffset() * 60000);

            // set new Date object
            var new_date = new Date(utc + (3600000*settings.offset));

            return new_date;
        };

        /**
         * Main downCount function that calculates everything
         */
        function countdown () {
            var target_date = new Date(settings.date), // set target date
                current_date = currentDate(); // get fixed current date

            // difference of dates
            var difference = target_date - current_date;

            // if difference is negative than it's pass the target date
            if (difference < 0) {
                // stop timer
                clearInterval(interval);

                if (callback && typeof callback === 'function') callback();

                return;
            }

            // basic math variables
            var _second = 1000,
                _minute = _second * 60,
                _hour = _minute * 60,
                _day = _hour * 24;

            // calculate dates
            var days = Math.floor(difference / _day),
                hours = Math.floor((difference % _day) / _hour),
                minutes = Math.floor((difference % _hour) / _minute),
                seconds = Math.floor((difference % _minute) / _second);

            // fix dates so that it will show two digets
            days = (String(days).length >= 2) ? days : '0' + days;
            hours = (String(hours).length >= 2) ? hours : '0' + hours;
            minutes = (String(minutes).length >= 2) ? minutes : '0' + minutes;
            seconds = (String(seconds).length >= 2) ? seconds : '0' + seconds;

            // based on the date change the refrence wording
            // var ref_days = (days === 1) ? 'day' : 'days',
            //     ref_hours = (hours === 1) ? 'hour' : 'hours',
            //     ref_minutes = (minutes === 1) ? 'minute' : 'minutes',
            //     ref_seconds = (seconds === 1) ? 'second' : 'seconds';
            var ref_days = '天',
                ref_hours = '时',
                ref_minutes = '分',
                ref_seconds = '秒';

            // set to DOM
            container.find('.days').text(days);
            container.find('.hours').text(hours);
            container.find('.minutes').text(minutes);
            container.find('.seconds').text(seconds);

            container.find('.days_ref').text(ref_days);
            container.find('.hours_ref').text(ref_hours);
            container.find('.minutes_ref').text(ref_minutes);
            container.find('.seconds_ref').text(ref_seconds);
        };
        countdown();
        // start
        var interval = setInterval(countdown, 1000);
    };

})(jQuery);

//数字滚动特效
;(function($) {
    $.fn.numberAnimate = function(setting) {
        var defaults = {
            speed : 1000,//动画速度
            num : "", //初始化值
            iniAnimate : true, //是否要初始化动画效果
            symbol : '',//默认的分割符号，千，万，千万
            dot : 0 //保留几位小数点
        };
        //如果setting为空，就取default的值
        var setting = $.extend(defaults, setting);

        //如果对象有多个，提示出错
        if($(this).length > 1){
            alert("just only one obj!");
            return;
        }

        //如果未设置初始化值。提示出错
        if(setting.num == ""){
            alert("must set a num!");
            return;
        }
        var nHtml = '<div class="mt-number-animate-dom" data-num="{{num}}">\
            <span class="mt-number-animate-span">0</span>\
            <span class="mt-number-animate-span">1</span>\
            <span class="mt-number-animate-span">2</span>\
            <span class="mt-number-animate-span">3</span>\
            <span class="mt-number-animate-span">4</span>\
            <span class="mt-number-animate-span">5</span>\
            <span class="mt-number-animate-span">6</span>\
            <span class="mt-number-animate-span">7</span>\
            <span class="mt-number-animate-span">8</span>\
            <span class="mt-number-animate-span">9</span>\
            <span class="mt-number-animate-span">.</span>\
          </div>';

        //数字处理
        var numToArr = function(num){
            num = parseFloat(num).toFixed(setting.dot);
            if(typeof(num) == 'number'){
                var arrStr = num.toString().split("");
            }else{
                var arrStr = num.split("");
            }
            //console.log(arrStr);
            return arrStr;
        };

        //设置DOM symbol:分割符号
        var setNumDom = function(arrStr){
            var shtml = '<div class="mt-number-animate">';
            for(var i=0,len=arrStr.length; i<len; i++){
                if(i != 0 && (len-i)%3 == 0 && setting.symbol != "" && arrStr[i]!="."){
                    shtml += '<div class="mt-number-animate-dot">'+setting.symbol+'</div>'+nHtml.replace("{{num}}",arrStr[i]);
                }else{
                    shtml += nHtml.replace("{{num}}",arrStr[i]);
                }
            }
            shtml += '</div>';
            return shtml;
        };

        //执行动画
        var runAnimate = function($parent){
            $parent.find(".mt-number-animate-dom").each(function() {
                var num = $(this).attr("data-num");
                num = (num=="."?10:num);
                var spanHei = $(this).height()/11; //11为元素个数
                var thisTop = -num*spanHei+"px";
                if(thisTop != $(this).css("top")){
                    if(setting.iniAnimate){
                        //HTML5不支持
                        if(!window.applicationCache){
                            $(this).animate({
                                top : thisTop
                            }, setting.speed);
                        }else{
                            $(this).css({
                                'transform':'translateY('+thisTop+')',
                                '-ms-transform':'translateY('+thisTop+')',   /* IE 9 */
                                '-moz-transform':'translateY('+thisTop+')',  /* Firefox */
                                '-webkit-transform':'translateY('+thisTop+')', /* Safari 和 Chrome */
                                '-o-transform':'translateY('+thisTop+')',
                                '-ms-transition':setting.speed/1000+'s',
                                '-moz-transition':setting.speed/1000+'s',
                                '-webkit-transition':setting.speed/1000+'s',
                                '-o-transition':setting.speed/1000+'s',
                                'transition':setting.speed/1000+'s'
                            });
                        }
                    }else{
                        setting.iniAnimate = true;
                        $(this).css({
                            top : thisTop
                        });
                    }
                }
            });
        };

        //初始化
        var init = function($parent){
            //初始化
            $parent.html(setNumDom(numToArr(setting.num)));
            runAnimate($parent);
        };

        //重置参数
        this.resetData = function(num){
            var newArr = numToArr(num);
            var $dom = $(this).find(".mt-number-animate-dom");
            if($dom.length < newArr.length){
                $(this).html(setNumDom(numToArr(num)));
            }else{
                $dom.each(function(index, el) {
                    $(this).attr("data-num",newArr[index]);
                });
            }
            runAnimate($(this));
        };
        //init
        init($(this));
        return this;
    }
})(jQuery);

//展开收起字数控制
;(function($){
    $.fn.moreText = function(options){
        var defaults = {
            maxLength:50,
            mainCell:".brief",
            openBtn:'展开',
            closeBtn:'收起'
        };
        return this.each(function() {
            var _this = $(this);

            var opts = $.extend({},defaults,options);
            var maxLength = opts.maxLength;
            var TextBox = $(opts.mainCell,_this);
            var openBtn = opts.openBtn;
            var closeBtn = opts.closeBtn;

            var countText = TextBox.html();
            console.log(countText);
            var newHtml = '';
            if(countText.length > maxLength){
                newHtml = countText.substring(0,maxLength)+'...<span class="moreText" style="color: #00a2d4">'+openBtn+'</span>';
            }else{
                newHtml = countText;
            }
            TextBox.html(newHtml);
            TextBox.on("click",".moreText",function(){
                if($(this).text()==openBtn){
                    TextBox.html(countText+' <span class="moreText" style="color: #00a2d4">'+closeBtn+'</span>');
                }else{
                    TextBox.html(newHtml);
                }
            })
        })
    }
})(jQuery);