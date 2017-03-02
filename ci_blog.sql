/*
Navicat MySQL Data Transfer

Source Server         : local
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : ci_blog

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2017-02-28 17:48:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ci_article`
-- ----------------------------
DROP TABLE IF EXISTS `ci_article`;
CREATE TABLE `ci_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `content` text,
  `description` varchar(200) DEFAULT NULL,
  `cover_img` varchar(200) DEFAULT NULL,
  `author_id` int(11) DEFAULT NULL,
  `is_top` tinyint(1) DEFAULT '0',
  `is_review` tinyint(1) DEFAULT '1' COMMENT '是否审核',
  `is_show` tinyint(1) DEFAULT '1' COMMENT '是否发布，否则为草稿',
  `is_del` tinyint(1) DEFAULT '0',
  `publishtime` datetime DEFAULT NULL,
  `createtime` datetime DEFAULT NULL,
  `updatetime` datetime DEFAULT NULL,
  `is_comment` tinyint(1) DEFAULT '1' COMMENT '是否允许评论',
  `hit_num` int(11) DEFAULT '0' COMMENT '设置点击次数',
  `real_hit_num` int(11) DEFAULT '0' COMMENT '真实点击次数',
  `release_source` varchar(200) CHARACTER SET utf32 DEFAULT NULL COMMENT '发布来源',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_article
-- ----------------------------
INSERT INTO `ci_article` VALUES ('8', '6', '萨达', '<p>爱迪生<br></p>', '阿达', '', '1', '1', '1', '1', '0', '2016-12-13 00:00:00', '2016-12-30 14:31:37', '2016-12-30 14:32:41', '0', '12', '0', '3');
INSERT INTO `ci_article` VALUES ('9', '6', 'q\'we', '<p>qw额<br></p>', '请问', '', '1', '0', '1', '1', '0', '2016-11-20 00:00:00', '2016-12-30 14:32:58', '2016-12-30 14:37:33', '1', '21', '0', '3');
INSERT INTO `ci_article` VALUES ('10', '10', '你的内网对黑客完全透明！（Xerosploit 使用）', '<p><br></p><div><p>i春秋首发，由于版权原因更新迟了几天。</p><br><blockquote>Xerosploit is a penetration testing toolkit whose goal is to perform man in the middle attacks for testing purposes. It brings various modules that allow to realise efficient attacks, and also allows to carry out denial of service attacks and port scanning. Powered by bettercap and nmap.<br>以上是官方介绍，翻译过来大致为：Xerosploit是一个渗透测试工具包，通过调用bettercap与nmap，可以进行中间人攻击。它具有各种模块，可以实现高效的攻击，并允许执行拒绝服务攻击和端口扫描。 </blockquote><br><br>作者：sn0w<br>链接：https://zhuanlan.zhihu.com/p/25031766<br>来源：知乎<br>著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。</div><p><br></p>', 'i春秋首发，由于版权原因更新迟了几天。\n\n    Xerosploit is a penetration testing toolkit whose goal is to perform man in the middle attacks for testing purposes. It brings various modules that allow to realise efficient ', 'uploads/article/cut_77a27ada2adcde215d7893cc272ae114.png', '1', '1', '1', '1', '0', '2017-02-08 00:00:00', '2017-02-08 13:20:03', '2017-02-08 13:20:03', '1', '101', '1', '');
INSERT INTO `ci_article` VALUES ('5', '8', '222', '<p>33444<br><img style=\"width: 408px;\" src=\"http://www.blog.com/uploads/article/d07576281c61dc3fdec2e52c35f45918.png\"></p>', '333', 'uploads/article/cut_e1d052a5b41a86fb568aeec57d063544.png', '1', '1', '1', '1', '1', '2016-12-30 00:00:00', '2016-12-29 14:08:04', '2016-12-30 14:31:19', '1', '55', '0', '66');
INSERT INTO `ci_article` VALUES ('6', '6', '2', '<p>3333<br></p>', '333', 'uploads/article/cut_47d55162b6da06ec30912ae1985608b3.png', '1', '0', '1', '1', '1', '2016-12-21 00:00:00', '2016-12-29 14:11:07', '2016-12-30 14:31:08', '1', '12', '0', '333');
INSERT INTO `ci_article` VALUES ('7', '8', '1111', '<p>2222222222<br></p>', '2222', '', '1', '1', '1', '1', '1', '2016-12-29 15:29:53', '2016-12-29 15:29:53', '2016-12-29 15:29:53', '1', '2', '0', '111');
INSERT INTO `ci_article` VALUES ('11', '10', '再一次获取你的WIFI密码（fluxion附视频）', '<p><br></p><div>作者：sn0w<br>链接：https://zhuanlan.zhihu.com/p/24666526<br>来源：知乎<br>著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。<br><br><p><b>距离上次的文章快两个月了，临近毕业事情比较多所以没时间研究这些东西</b></p><p><b>现在还在准备2017年上半年的实习单位</b></p><p><b>如果各位大佬有单位可以考虑一下我，活好水多不粘人。</b></p><br>上一次关于WIFI破解的文章：<a href=\"https://zhuanlan.zhihu.com/p/21596402\" class=\"internal\">知乎专栏</a><p>这次偏向于社工，让目标自己输入密码，省去了跑包的时间。</p><br><br><blockquote>fluxion是一款无线安全测试工具，其攻击的原理更偏向于社会工程学中的钓鱼。我最喜欢fluxion的原因是它有一个人性化的脚本，可以迅速帮你检查所需要的插件并进行安装，可以在短时间内搭建出一个完整的环境。而且在新版中增加了对中文的支持，这是国外好多安全工具没有的。</blockquote><br><br>\ngithub地址：<a href=\"https://link.zhihu.com/?target=https%3A//github.com/deltaxflux/fluxion\" class=\" wrap external\" target=\"_blank\" rel=\"nofollow noreferrer\">deltaxflux/fluxion</a><br><br><br>\n工作原理（大体步骤）<br><br>\n　　1.扫描能够接收到的WIFI信号<br><br>\n　　2.抓取握手包(这一步的目的是为了验证WiFi密码是否正确)<br><br>\n　　3.使用WEB接口<br><br>\n　　4.启动一个假的AP实例来模拟原本的接入点<br><br>\n　　5.然后会生成一个MDK3进程。如果普通用户已经连接到这个WiFi，也会输入WiFi密码<br><br>\n　　6.随后启动一个模拟的DNS服务器并且抓取所有的DNS请求，并且会把这些请求重新定向到一个含有恶意脚本的HOST地址<br><br>\n　　7.随后会弹出一个窗口提示用户输入正确的WiFi密码<br><br>\n　　8.用户输入的密码将和第二步抓到的握手包做比较来核实密码是否正确<br><br>\n　　9.这个程序是自动化运行的，并且能够很快的抓取到WiFi密码<br><br><b>环境设置</b><br>- 目标WIFI SSID:WIFITEST(360安全路由器p1)<br>- 目标设备：Redmi Note 3（模拟目标wifi的主人）<br>- 操作机：Kali 2016.2（<a href=\"https://link.zhihu.com/?target=http%3A//www.kali.org\" class=\" wrap external\" target=\"_blank\" rel=\"nofollow noreferrer\">Penetration Testing and Ethical Hacking Linux Distribution</a>）</div><p><br></p>', '作者：sn0w\n链接：https://zhuanlan.zhihu.com/p/24666526\n来源：知乎\n著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。\n\n距离上次的文章快两个月了，临近毕业事情比较多所以没时间研究这些东西\n\n现在还在准备2017年上半年的实习单位\n\n如果各位大佬有单位可以考虑一下我，活好水多不粘人。\n上一次关于WIFI破解的文章：知乎专栏\n\n这次偏向于社', '', '1', '1', '1', '1', '0', '2017-02-08 13:21:27', '2017-02-08 13:21:27', '2017-02-08 15:53:32', '1', '13', '13', '');
INSERT INTO `ci_article` VALUES ('12', '11', '一次人肉搜索的社会工程学实践', '<p><br></p><div><p>　最近支付宝AR实景红包很火，发布后没多久就被发现可以作弊，用线索图复制一份、去除横条，再错位叠加处理，就几乎可以骗过支付宝的图像识别。我用此法捞了一些红包，有用户加我为好友，问我是否有和他同一款的XX（物品），以为我这样才拿到红包。支付宝通过好友之后，默认可以看到好友的姓名和支付宝账号（支付宝顺着这个优势做实名社交还是可行的）。比如这个用户名是pan***的字母开头加9位数字@<a href=\"https://link.zhihu.com/?target=http%3A//qq.com\" class=\" external\" target=\"_blank\" rel=\"nofollow noreferrer\"><span class=\"invisible\">http://</span><span class=\"visible\">qq.com</span><span class=\"invisible\"></span></a>的邮箱，我直觉认为这9位数字就是QQ号。一个念头突然想起，我想再次验证一下从一个用户的单点信息通过网络搜集到全面的个人信息的可行性，以证明大数据时代没有隐私，于是我开始了一步步的探索（图片黑色涂框为本文处理，下同）。</p><p>　　首先，查看该QQ的资料，和支付宝资料吻合，证实猜测。访问QQ空间，没有设防，而且动态不少。最近访问用户一眼就瞄到另一个从头像和昵称判断有可能是同一个主人的QQ。这个访问过去，需要好友权限，小号先记录在案。</p><p>　　翻看说说动态，得到很多有价值的“线索”，主要有：<br></p><p>　　一、看到一条参加培训课的图片，从上可知公司名称，后面又看见一张有名片的照片，座机、手机、公司地址、工作邮箱都有了。</p><br><br>作者：xneter<br>链接：https://zhuanlan.zhihu.com/p/24576104<br>来源：知乎<br>著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。</div><p><br></p>', '　最近支付宝AR实景红包很火，发布后没多久就被发现可以作弊，用线索图复制一份、去除横条，再错位叠加处理，就几乎可以骗过支付宝的图像识别。我用此法捞了一些红包，有用户加我为好友，问我是否有和他同一款的XX（物品），以为我这样才拿到红包。支付宝通过好友之后，默认可以看到好友的姓名和支付宝账号（支付宝顺着这个优势做实名社交还是可行的）。比如这个用户名是pan***的字母开头加9位数字@http://qq', 'uploads/article/cut_5bf9a127eae7007fe5fd26a516dafcb2.png', '1', '0', '1', '1', '0', '2017-02-08 13:21:56', '2017-02-08 13:23:56', '2017-02-10 10:34:32', '1', '12', '12', '');
INSERT INTO `ci_article` VALUES ('13', '5', '如何看待 2017 年 1 月中国外汇储备跌破 3 万亿美元？', '<pre>defined(\'BASEPATH\') OR exit(\'No direct p access allowed\');<br>class Article extends Home_Controller {<br>&nbsp;&nbsp; &nbsp;public function __construct(){<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;parent::__construct();<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $this-&gt;load-&gt;model(\'article_model\');<br>&nbsp;&nbsp; &nbsp;}<br><br>&nbsp;&nbsp; &nbsp;public function articleList($page_index = 1,$cid = null ){<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$articles = $this-&gt;article_model-&gt;gets_by_article($page_index,$this-&gt;input-&gt;get(\'size\'));<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$data[\'articles\'] = $articles;<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$hots = $this-&gt;article_model-&gt;gets_by_article(\'1\',\'5\',\'hot\');<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$data[\'hots\'] = $hots;<br>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;$this-&gt;twig-&gt;render(\'Article/list\',$data);<br>&nbsp;&nbsp; &nbsp;}<br><br>&nbsp;&nbsp; &nbsp;public function detail($article_id){<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$data = $this-&gt;article_model-&gt;getArticle($article_id);<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$arr[\'article\'] = $data;<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$rands = $this-&gt;article_model-&gt;gets_by_article(\'1\',\'5\',\'rand\');<br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;$arr[\'rands\'] = $rands;<br>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;$this-&gt;twig-&gt;render(\'Article/detail\',$arr);<br>&nbsp;&nbsp; &nbsp;}<br>}<br><br></pre><div class=\"zm-editable-content clearfix\"><pre>function article_favorite(This){<br>    var $this = $(This);<br>    var article_id = $this.attr(\'article_id\');<br>    var favorited = $this.attr(\'favorited\');<br><br>    layer.load();<br>    $.post(<br>        \'/api/article/favorite\',<br>        {<br>            article_id: article_id<br>        },<br>        function(json){<br>            layer.closeAll(\'loading\');<br>            if(json.error_code == \'ok\'){<br>                if(favorited == 0){<br>                    $this.attr(\'favorited\', 1);<br>                    $this.attr(\'title\', \'取消收藏\');<br>                    $(\'&gt;.iconfont\', $this).html(\'&amp;#xe609;\');<br>                    layer.msg(\'收藏成功\');<br>                }<br>                else{<br>                    $this.attr(\'favorited\', 0);<br>                    $this.attr(\'title\', \'收藏\');<br>                    $(\'&gt;.iconfont\', $this).html(\'&amp;#xe60a;\');<br>                    layer.msg(\'收藏取消成功\');<br>                }<br>            }<br>            else{<br>                show_error(json.error_code);<br>            }<br>        },<br>        \'json\'<br>    );<br>}<br></pre></div><div class=\"zm-editable-content clearfix\">并不觉得是什么大新闻。<br><br>需要先弄清几个基本概念，什么是经常项，什么是资本项，什么是外汇储备。具体定义大家自行百度，我这里打个比方助于理解。<br><br>假设，王二做跨境电商，卖东西到美国，今年挣了100美元。此时，经常项账户就是顺差100美元。然后，没有结束，因为报表没有做平，王二这个时候有两个选择：<br>选择A，把100美元卖给央行，央行给他对应的人民币，央行那这100美元再去买美国国债。此时，经常项顺差100美元，资本项为0，外汇储备100美元，报表平了。<br>选择B，把100美元自己留着，持有现金也行，用这100美元买美国股票也行，投资房地产也行。此时，经常项顺差100美元，资本项逆差100美元，外汇储备为0，报表也平了。<br><br>通过上面的例子，你会发现，<u>只要经常项是顺差，则这个顺差的金额，要么通过资本项“外流”，要么通过外汇储备“外流”，必须选一个。</u>外汇储备这个科目，只要是正数，就永远是逆差。<br><br>接着假设，因为王二的生意赚钱，他国外的贸易伙伴想入股他的生意，和他说，我投资你100美元吧，给我点股权，后面给我利息或者回报。王二想了想，同意了。于是王二有了200美元。此时，王二还是两个选择：<br>选择C，把200美元卖给央行，央行给他对应的人民币，央行那这200美元再去买美国国债。此时，经常项顺差100，资本项顺差100，外汇储备200美元，报表平了。<br>选择D，把200美元自己留着，持有现金也行，用这200美元买美国股票也行，投资房地产也行。但是，这种情况，王二的合作伙伴会生气了，买美国股票房子我自己就能干，要你干嘛，投资你的意义何在？等于我根本没投资你啊。如果真的是这样，那么此时，经常项顺差100，资本项逆差100，外汇储备为0，报表也平了。注意，王二的合作伙伴投资他的钱，完全没体现在报表中。<br><br><u>曾经的中国，经常项顺差，资本项也是顺差，这就是后面王二选择C的情况。</u>而且，曾经中国要求强制结汇，王二也只能选择C，把美元换给央行。于是，央行积累了越来越多的外汇储备。<br><br><br>而最近几年，<b>资本项科目的情况发生了变化</b>。<br><br>首先，王二的贸易伙伴因为种种原因，不投资给他了，有贸易伙伴自己的原因（经济不好没闲钱），也有王二这边的原因（中国的干预、保护、资本项审批，以及外资企业水土不服，竞争不过内资）。<br>其次，王二觉得国外很多东西相当便宜啊（经济危机导致房子降价，公司估值便宜），于是王二也不像以前那样，把美元换给央行了，而是自己去买房子股票了（中国企业海外并购）。<br>第三，中国这边政策也开始鼓励大家走出去，多去国外拓展市场做生意哈（一带一路，华为格力小米等等）。<br>第四，美元在加息，美元汇率走强，既然不要求强制结汇了，那我这几年持有美元不换成人民币比较划算啊。<br><br>这几个情况一叠加，于是，中国的资本项由原来的顺差，变成了逆差。而经常项呢，并没有变，依旧是每年<a href=\"tel:4000-5000\">4000-5000</a>亿美元的顺差。<br><br>前面解释了，经常项的顺差，要么通过资本项逆差外流，要么通过外汇储备外流。由于目前资本项的逆差金额超过了经常项顺差，因此，外汇储备就降低了。<br><br><br>以上解释了外汇储备下降的部分原因（还有其他原因包括美国债券价格下跌、非美元货币资产的估值浮动、央行对汇率的市场干预等），下面拓展几个问题。<br><br><b>1，外汇储备越多越好吗？</b><br>个人认为不是。外汇储备是央行管理的，由于金额巨大，基本只能买美国国债，投资收益低，效率差。而如果由一家家公司自己管理，效率会提高很多，而且可以出面买很多政府不能买的东西，比如英特尔、波音这样公司的股权。国际上，中国的外汇储备规模是爆表的，第二名日本1.2万亿，第三名沙特6000亿，后面的基本都可以忽略了。<br><br><b>2，外储下降所以中国要完蛋了？</b><br>根本两码事。经常项依然还是顺差，中国在国际贸易中的地位并没有任何变化。<br><br><b>3，外储下降所以人民币要跌？</b><br>决定汇率长期走势的是贸易经常项。不是资本项也不是外储。外储可以对汇率起到平滑作用，相当于央行的水库，上游水多的时候就积水，水少的时候就开闸放水，目前外汇储备的减少，也有相当一部分原因是央行在干预汇率短期走势。至于长期，只要央行水库的上游，每年还能流进几千亿美元的顺差，就不值得担心。<br><br><b>4，资本项逆差所以人民币要跌？</b><br>资本项只能短期影响汇率，经济是有周期的，未来中国也会重新进入加息周期，而美元也会重新降息，那个时候，投资环境又会变了。资本项长期靠不住，热钱进出都是正常的，都是逐利的。经常项才值得关注，因为他才是外贸的实质。<br><br><br>看评论有什么内容，我再补充吧。\n</div>', '如何看待 2017 年 1 月中国外汇储备跌破 3 万亿美元？', 'uploads/article/cut_0ac7c821770358b3984e12452fb8466f.png', '1', '0', '1', '1', '0', '2017-02-08 13:26:30', '2017-02-08 13:26:30', '2017-02-09 17:25:16', '1', '198', '197', '');
INSERT INTO `ci_article` VALUES ('14', '9', '11111111111111', '<p>1111111111111111111111111111111111111111111<br></p>', '11111111111111111111111111111', '', '1', '0', '1', '1', '1', '2017-02-08 00:00:00', '2017-02-08 18:18:28', '2017-02-08 18:18:28', '1', '0', '0', '');

-- ----------------------------
-- Table structure for `ci_article_category`
-- ----------------------------
DROP TABLE IF EXISTS `ci_article_category`;
CREATE TABLE `ci_article_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `name` varchar(20) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_article_category
-- ----------------------------
INSERT INTO `ci_article_category` VALUES ('11', '9', 'Linux', 'Linux技术笔记', '0', '2017-01-23 17:44:41');
INSERT INTO `ci_article_category` VALUES ('9', '0', '技术笔记', '平时工作中，记录下的东西', '0', '2017-01-23 17:43:27');

-- ----------------------------
-- Table structure for `ci_article_comment`
-- ----------------------------
DROP TABLE IF EXISTS `ci_article_comment`;
CREATE TABLE `ci_article_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` int(11) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `content` text,
  `createtime` datetime DEFAULT NULL,
  `is_show` tinyint(1) DEFAULT '0',
  `is_del` tinyint(4) DEFAULT '0',
  `reply` text,
  `reply_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_article_comment
-- ----------------------------
INSERT INTO `ci_article_comment` VALUES ('10', '13', '121', '56465@qq.com', null, '465456465', '2017-02-13 08:40:22', '1', '1', null, null);
INSERT INTO `ci_article_comment` VALUES ('11', '13', '454654@qq.com', '4654654@qq.com', 'http://www.baidu.com', '\n54\n54\n45\n45', '2017-02-13 08:40:43', '1', '0', null, null);
INSERT INTO `ci_article_comment` VALUES ('12', '13', 'kerry@qq.com', 'gaoyuan@qq.com', null, 'asdasdaddada', '2017-02-13 09:31:08', '1', '0', '谢谢你的评论', '2017-02-14 07:21:36');
INSERT INTO `ci_article_comment` VALUES ('13', '13', '454654', '465456@qq.com', null, 'sadasdasda', '2017-02-13 10:13:05', '1', '0', '65465465465', '2017-02-14 07:15:42');
INSERT INTO `ci_article_comment` VALUES ('14', '13', '56465465', '5654654@qq.com', null, '465465456456', '2017-02-14 05:12:26', '1', '0', '是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒是的撒', '2017-02-14 07:20:31');
INSERT INTO `ci_article_comment` VALUES ('15', '13', '测试评论 啦啦啦', '5646545645@qq.com', null, '4564sa54das54d44564sa54das54d44564sa54das54d44564sa54das54d44564sa54das54d44564sa54das54d44564sa54das54d44564sa54das54d44564sa54das54d44564sa54das54d4', '2017-02-14 07:28:41', '0', '1', null, null);
INSERT INTO `ci_article_comment` VALUES ('16', '13', '6454', '454545@qq.com', null, '撒打算阿萨德按时阿萨德\n的萨达上课了卡萨丁阿萨德啊阿萨德啊', '2017-02-14 07:29:28', '1', '0', '哈哈 666', '2017-02-14 07:30:05');

-- ----------------------------
-- Table structure for `ci_auth_menu`
-- ----------------------------
DROP TABLE IF EXISTS `ci_auth_menu`;
CREATE TABLE `ci_auth_menu` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL,
  `class` varchar(50) DEFAULT NULL,
  `method` varchar(255) NOT NULL,
  `sort` tinyint(4) unsigned NOT NULL DEFAULT '99',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `icon` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_auth_menu
-- ----------------------------
INSERT INTO `ci_auth_menu` VALUES ('1', '0', '系统主页', 'System', '', '1', '1', 'fa fa-dashboard');
INSERT INTO `ci_auth_menu` VALUES ('2', '0', '权限菜单', 'AuthMenu', 'add,edit,del,order', '4', '1', 'fa fa-list');
INSERT INTO `ci_auth_menu` VALUES ('3', '0', '用户管理', 'UserManage', 'add,edit,del,isEnable', '5', '1', 'fa fa-user');
INSERT INTO `ci_auth_menu` VALUES ('4', '0', '用户组管理', 'GroupManage', 'add,edit,del,isEnable,grant', '3', '1', 'fa fa-users');
INSERT INTO `ci_auth_menu` VALUES ('74', '72', '文章分类', 'ArticleCategory', 'add,edit,del,order', '99', '1', '');
INSERT INTO `ci_auth_menu` VALUES ('73', '72', '文章管理', 'Article', 'add,edit,del', '99', '1', '');
INSERT INTO `ci_auth_menu` VALUES ('72', '0', '内容管理', '', '', '99', '1', 'fa fa-file-text');
INSERT INTO `ci_auth_menu` VALUES ('71', '0', '站点设置', 'SiteSeting', 'baseConfig,contactConfig', '2', '1', 'fa fa-gears');
INSERT INTO `ci_auth_menu` VALUES ('75', '0', '标签管理', 'Tags', 'add,edit,del', '99', '1', 'fa fa-tags');
INSERT INTO `ci_auth_menu` VALUES ('76', '0', '链接管理', '', '', '99', '1', 'fa fa-link');
INSERT INTO `ci_auth_menu` VALUES ('77', '76', '链接分类', 'LinkCategory', 'add,edit,del,order', '99', '1', '');
INSERT INTO `ci_auth_menu` VALUES ('78', '76', '链接列表', 'Link', 'add,edit,del,order', '99', '1', '');
INSERT INTO `ci_auth_menu` VALUES ('79', '72', '文章评论', 'ArticleComment', 'del,status,reply', '99', '1', '');

-- ----------------------------
-- Table structure for `ci_link`
-- ----------------------------
DROP TABLE IF EXISTS `ci_link`;
CREATE TABLE `ci_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tid` int(11) DEFAULT NULL COMMENT '分类id',
  `pid` int(11) DEFAULT '0' COMMENT '父级id',
  `target` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `router_url` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `sort` int(11) DEFAULT '0',
  `keywords` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of ci_link
-- ----------------------------
INSERT INTO `ci_link` VALUES ('1', '首页', '14', '0', '_self', '/', '/', '1', '1', '网站首页', '最新发布');
INSERT INTO `ci_link` VALUES ('13', '技术笔记', '14', '0', '_self', 'home/Article/articleCategory/9', 'tech', '1', '2', '技术笔记', '这是技术笔记');
INSERT INTO `ci_link` VALUES ('17', 'withcode', '15', '0', '_self', 'http://www.withcode.com', '', '1', '0', 'withcode', 'withcode');

-- ----------------------------
-- Table structure for `ci_link_category`
-- ----------------------------
DROP TABLE IF EXISTS `ci_link_category`;
CREATE TABLE `ci_link_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) DEFAULT '0',
  `name` varchar(20) DEFAULT NULL,
  `identity_key` varchar(200) DEFAULT NULL,
  `sort` int(11) DEFAULT '0',
  `createtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_link_category
-- ----------------------------
INSERT INTO `ci_link_category` VALUES ('14', '0', '导航链接', 'navLink', '0', '2017-01-13 13:46:48');
INSERT INTO `ci_link_category` VALUES ('15', '0', '底部链接', 'footerLink', '0', '2017-01-13 16:10:42');

-- ----------------------------
-- Table structure for `ci_relation_tags`
-- ----------------------------
DROP TABLE IF EXISTS `ci_relation_tags`;
CREATE TABLE `ci_relation_tags` (
  `object_id` int(11) NOT NULL DEFAULT '0',
  `type` enum('article') NOT NULL DEFAULT 'article',
  `tag_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`type`,`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_relation_tags
-- ----------------------------
INSERT INTO `ci_relation_tags` VALUES ('6', 'article', '17');
INSERT INTO `ci_relation_tags` VALUES ('9', 'article', '18');
INSERT INTO `ci_relation_tags` VALUES ('12', 'article', '18');
INSERT INTO `ci_relation_tags` VALUES ('13', 'article', '17');
INSERT INTO `ci_relation_tags` VALUES ('13', 'article', '18');
INSERT INTO `ci_relation_tags` VALUES ('16', 'article', '21');

-- ----------------------------
-- Table structure for `ci_site_config`
-- ----------------------------
DROP TABLE IF EXISTS `ci_site_config`;
CREATE TABLE `ci_site_config` (
  `sitename` varchar(20) DEFAULT NULL,
  `description` text,
  `keywords` text,
  `tcp` varchar(50) DEFAULT NULL COMMENT '备案号',
  `is_open` tinyint(1) DEFAULT '1',
  `close_desc` text COMMENT '关闭描述',
  `statistical_code` text COMMENT '统计代码',
  `tel` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `blog` varchar(50) DEFAULT NULL,
  `wechat` varchar(20) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_site_config
-- ----------------------------
INSERT INTO `ci_site_config` VALUES ('我的站点', '22', '33', '44', '1', '7777', '55', '111111', '11112222', '333333', '33', '333', '33333');

-- ----------------------------
-- Table structure for `ci_tags`
-- ----------------------------
DROP TABLE IF EXISTS `ci_tags`;
CREATE TABLE `ci_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `fontcolor` varchar(20) DEFAULT NULL,
  `bordercolor` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_tags
-- ----------------------------
INSERT INTO `ci_tags` VALUES ('18', 'php', '#1ab394', '#ffffff', '#1ab394');
INSERT INTO `ci_tags` VALUES ('17', '技术文章', '#1ab394', '#ffffff', '#1ab394');

-- ----------------------------
-- Table structure for `ci_user`
-- ----------------------------
DROP TABLE IF EXISTS `ci_user`;
CREATE TABLE `ci_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `password` char(32) NOT NULL,
  `photo` varchar(200) DEFAULT NULL COMMENT '头像',
  `user_profile` text COMMENT '个人描述',
  `email` varchar(50) NOT NULL,
  `realname` varchar(50) NOT NULL,
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `tel` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updatetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `lasttime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `regip` char(15) NOT NULL,
  `lastip` char(15) NOT NULL,
  `logincount` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `usergroup` (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_user
-- ----------------------------
INSERT INTO `ci_user` VALUES ('1', '1', 'admin', 'admin', 'f0c5e35537259eb3dd20e444f26d37bd', 'uploads/user/cut_9c1e71dc73db7faf560d633900956a91.png', '111111', 'admin@x6cms.com', '小六', '1', '', '15208491440', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2017-02-14 05:20:17', '192.168.1.1', '127.0.0.1', '39', '1');
INSERT INTO `ci_user` VALUES ('2', '2', 'kerry', 'kerry', 'f0c5e35537259eb3dd20e444f26d37bd', null, null, 'admin@x6cms.com', 'sss', '1', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0', '1');
INSERT INTO `ci_user` VALUES ('15', '1', 'a699811', 'a699811', 'b8af56eb1f4347777d46946e9410a9ee', null, null, '410202049@qq.com', 'kerry', '1', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0', '1');

-- ----------------------------
-- Table structure for `ci_user_group`
-- ----------------------------
DROP TABLE IF EXISTS `ci_user_group`;
CREATE TABLE `ci_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` text NOT NULL,
  `create_time` datetime DEFAULT NULL COMMENT '创建时间',
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ci_user_group
-- ----------------------------
INSERT INTO `ci_user_group` VALUES ('1', 'Administrators', '1', 'a:3:{i:0;a:2:{s:2:\"id\";i:1;s:4:\"rule\";a:0:{}}i:1;a:2:{s:2:\"id\";i:4;s:4:\"rule\";a:2:{i:0;s:4:\"edit\";i:1;s:3:\"add\";}}i:2;a:2:{s:2:\"id\";i:2;s:4:\"rule\";a:3:{i:0;s:3:\"add\";i:1;s:4:\"edit\";i:2;s:3:\"del\";}}}', '2016-08-24 16:00:15', 'super manage');
INSERT INTO `ci_user_group` VALUES ('2', 'Editor', '1', 'a:5:{i:0;a:2:{s:2:\"id\";i:1;s:4:\"rule\";a:0:{}}i:1;a:2:{s:2:\"id\";i:71;s:4:\"rule\";a:2:{i:0;s:10:\"baseConfig\";i:1;s:13:\"contactConfig\";}}i:2;a:2:{s:2:\"id\";i:4;s:4:\"rule\";a:5:{i:0;s:3:\"add\";i:1;s:4:\"edit\";i:2;s:3:\"del\";i:3;s:8:\"isEnable\";i:4;s:5:\"grant\";}}i:3;a:2:{s:2:\"id\";i:2;s:4:\"rule\";a:4:{i:0;s:3:\"add\";i:1;s:4:\"edit\";i:2;s:3:\"del\";i:3;s:5:\"order\";}}i:4;a:2:{s:2:\"id\";i:3;s:4:\"rule\";a:4:{i:0;s:3:\"add\";i:1;s:4:\"edit\";i:2;s:3:\"del\";i:3;s:8:\"isEnable\";}}}', '2016-08-25 17:15:09', 'Editor of the site');
