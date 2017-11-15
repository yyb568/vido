<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 控制器基类
 * add by yinyibin
 * 2015年12月10日11:33:26
 */
if (ENVIRONMENT != 'product'){
	ini_set('memory_limit', '256M');
}
class MY_Controller extends CI_Controller{

	/**
	 * 常量变量定义
	 */
	public $template = array();			//模板数据
	/**
	 * 初始化操作
	 * add by yinyibin
	 * 2015年12月10日11:34:15
	 */
	public function __construct(){
		parent::__construct();
		$this->isLogin();			// 检查登录状态
	}

	/**
	 * 判断用户是否登陆
	 * add by yinyibin
	 * 2015年12月10日11:34:44
	 */
	public function isLogin(){
		redirect(site_url("login/index"));
		exit();
	}

}