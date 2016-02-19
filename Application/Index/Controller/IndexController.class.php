<?php
namespace Index\Controller;
use Think\Controller;
class indexController extends Controller {
	//显示登录窗体
	public function index(){
		$this->display();
	}

	//设置登录验证码
	Public function verify(){
    $config=array(
      'useCurve'=>false,
      'fontSize'=>15,
      'length'=>4,
      'imageW'=>100,
      'imageH'=>30,
      'codeSet'=>'0123456789',
      'reset'=>false,
    );
		$Verify = new \Think\Verify($config);
    $Verify->fonttty = '1.ttf';
    $Verify -> entry();
	}
	//登录表单操作
	Public function login(){
		if(!IS_POST) halt('页面不存在');
    $verify = new \Think\Verify(array('reset'=>false));
		if($verify->check(I('code'))){
    }
    else
      $this->error('验证码错误,请重新登录',U("Index/Index/index"));

		$db = M('user');
		$where = array('username' => I('username'),'password' => I('password','','md5'));
		$user = $db->where($where)->find();
		if(!$user){
			$this->error('用户名或密码错误，请重新登录');
		}
		$data = array(
			'id'=>$user['id'],
			'loginip' => get_client_ip(),
			'logintime'=> time()
		);
		$db->save($data);
		session('userid',$user['id']);
		session('username',$user['username']);
		session('logintime',$data['logintime']);
		session('dutyid',$user['dutyid']);
		if($user['dutyid'] == 1){//管理员
			$this->redirect('Admin/Index/index');
		}else if($user['dutyid'] == 2){//学生

		}
	}

	//退出登录
	Public function logout(){
		session_unset();
		session_destroy();
		$this->redirect('Index/Index/index');
	}

	//修改密码
	Public function resetPassword(){

	}
}
