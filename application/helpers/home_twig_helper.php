<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('getLinks')) {
	function getLinks($identityKey){
		$CI = &get_instance();
		$cData = $CI->db->get_where('link_category',array('identity_key'=>$identityKey))
		->row_array();
		$links = $CI->db->order_by('sort','asc')->get_where('link',array('status'=>'1','tid'=>$cData['id']))
		->result_array();
		$routerUrl = $CI->uri->segment(1);
        $routerUrl = $routerUrl ? $routerUrl : '/';
        $nav = $CI->db->get_where('link',array('router_url'=>$routerUrl))->row_array();
        $activeNavs = getPid($nav['id'],$links);
        foreach ($links as $key => $value) {
            if($activeNavs){
                foreach ($activeNavs as $k => $v) {
                    if($value['id'] ==$v['id']){
                        $links[$key]['active'] = "true";
                        break;
                    }
                    $links[$key]['active'] = "false";

                }
            }
            $href = $links[$key]['router_url'] ? $links[$key]['router_url'] : $links[$key]['url'];
            $links[$key]['href'] = preg_match("/^(http:\/\/|https:\/\/).*$/",$href) ? $href : base_url($href);
            
        }
		return tree($links);
	}
}
if (!function_exists('dump')) {
	function dump($arr){
		echo "<pre>";
		print_r( $arr);
		echo "</pre>";
	}
}