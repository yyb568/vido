<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 首页
 * add by yyb5683@gmail.com
 * 2017年6月12日16:31:04
 */
class Login extends CI_Controller {

	/**
	 * 初始化
	 * add by yyb5683@gmail.com
	 * 2017年6月12日16:32:00
	 */
	public function __construct(){
		parent::__construct();
		// $wxConfig = $this->getWxJsConfig();
	}
	
	public function index(){
        echo 1;die;
        $this->load->view("login/login",$this->template);
	}
	
}

