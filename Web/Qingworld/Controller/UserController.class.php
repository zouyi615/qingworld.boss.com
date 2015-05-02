<?php
namespace Qingworld\Controller;
use Think\Controller;

class UserController extends Controller {
    public function index(){
    	//初始载入前10位用户
    	$userlist = $this->getUserList(0,10);
    	$this->assign('userlist',$userlist);
        $this->display();
    }
    /*获取用户列表start(起始),end(结束)；用于用户列表的分页*/
    public function getUserList($start,$end){    	
    	$User = M("userinfo"); // 实例化User对象
    	$userlist = $User->field("uid,username,adminid,groupid,regdate,lastvisit,posts,credits,email,ustate")
    					 ->order('regdate desc')
    					 ->limit($start.','.$end)
    					 ->select();
    	return $userlist;
    }
    /*根据条件获取用户信息*/
    public function getUserByname($condition){    	
    	$User = M("userinfo"); // 实例化User对象
    	$userlist = $User->where($condition)
    					 ->select();
    	return $userlist;
    }
}