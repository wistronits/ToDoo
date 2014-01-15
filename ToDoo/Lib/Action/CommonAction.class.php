<?php
class CommonAction extends Action{
	//析构函数
	public function __construct(){
		parent::__construct();

	}
	/**
	 * 检测用户是否登录，
	 * 如果登录返回true，否者返回false
	 * 
	 */
	public function is_login(){
		if( session('login')=='true'){
			//登录信息验证成功返回true
			return true;
		}else{
			//跳转到登录界面
			$this->error('登录验证信息失效，请重新登录',U('Index/login'));
		};
	}
	/**
	 * 用户注销
	 */
	public function login_out(){
		session('login',null);
	}

}