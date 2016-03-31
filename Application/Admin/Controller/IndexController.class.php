<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {

  public function index(){
    $this->display();
  }
  public function setpassword(){
    $newPassword = I('newPassword');
    $newPassword1 = I('newPassword1');
    if($newPassword1==$newPassword){

    }else{
      $this->error('两次新密码设置不统一，请重新设置');
    }
    if(M('user')->where(array('username'=>session('username'),'password'=>md5(I('password'))))->find()){

    }else{
      $this->error('原密码输入错误');
    }
    if(M('user')->where(array('id'=>session('userid')))->setField('password',md5($newPassword))){
      $this->success('密码修改成功');
    }
    $this->error('密码修改失败');
  }
}
