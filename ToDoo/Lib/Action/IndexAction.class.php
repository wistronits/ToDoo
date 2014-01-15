<?php

// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
    	$this->login_out();
	$test = $this->is_login();
	echo $test;
	$this->display();
    }
    public function login(){

    	if(empty($_POST['email'])){
    		$this->display('Common/login');
    	}else{
    		if($_POST['email'] == 'xiao_shuai_de@163.com'){
    			session('login',true);
    			$this->success('登录成功，正在跳转到首页',U('User/index'));
    		}else{
    			$this->display('Common/login');
    		}
    	}
    	
    }
}