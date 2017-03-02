<?php
class Home_Controller extends Base_Controller {
    public function __construct() {
        parent::__construct();
        $this->config->load('twig');//加载twig配置文件
        $twig_config = $this->config->item('twig_home');//前台模板引擎设置
        $tplName = 'default';//数据库查询当前模板名字
        $twig_config['template_dir'] = $twig_config['template_dir'].$tplName;
        $this->load->library('Twig',$twig_config);
        $this->site = $this->site->getSiteInfo();
        $navs = getLinks("navLink",false);
        $links = getLinks("footerLink",false);
        $this->twig->assign('navs',$navs);
        $this->twig->assign('site',$this->site);
        $current_nav = array();
        foreach ($navs as $key => $value) {
            if($value['active']=='true'){
                $current_nav = $value;
                break;
            }
        }

        $this->twig->assign('current_nav',$current_nav);
        $this->twig->assign('links',$links);
    }
}
