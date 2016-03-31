<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
      $this->notice = M('notice')->order('time DESC')->limit(6)->select();
      $info = M('student');
      $this->info = $info->where(array('studyno'=>session('username')))->find();
      $this->certificate = M('certificate')->where(array('studyno'=>session('username')))->select();
      $this->funding = M('funding')->where(array('studyno'=>session('username')))->select();
      $this->scholarship = M('scholarship')->where(array('studyno'=>session('username')))->select();
      $this->attendance = M('attendance')->where(array('studyno'=>session('username'),'status'=>array('neq',0)))->select();
      $this->leave = M('leave')->order('time DESC')->where(array('studyno'=>session('username')))->limit(6)->select();
      $this->display();
    }
    public function leave(){
      $leaveContent = I('leaveContent');
      $data = array(
        'content'=>$leaveContent,
        'studyno'=>session('username'),
        'time'=>time(),
        'status'=>0
      );
      $rt = array(
        'status'=>1,
        'msg'=>'请假条已提交，请耐心等待回复。',
        'leaveContent'=>$leaveContent,
      );
      if(M('leave')->add($data)){

      }else{
        $rt['status']=0;
        $rt['msg']="提交失败";
      }
      $this->ajaxReturn($rt);
    }
    public function password(){
      $this->display();
    }
    public function setPassword(){
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
    public function notice($id=0){
      $this->notice=M('notice')->find($id);
      $this->display();
    }
}
