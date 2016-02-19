<?php
namespace Admin\Controller;
use Think\Controller;
class StudentInfoController extends CommonController {
  //查看学生
  public function index($p=0){
    $db = M("student");

    $page=getpage($db,array(),25);
    $this->page=$page->show();
    $this->student = $db->where(array('isdelete'=>0))->field('studyno,grade,class,name')->page($p.',50')->order('addtime desc')->select();
    $this->display();
  }
  //添加学生
  public function add(){
    $this->display();
  }
  //保存学生基本信息
  public function addHandle(){
    $data = $_POST;
    $data['addtime']=time();
    $data['birthday']=strtotime($data['birthday']);
    $user['username']=$data['studyno'];
    $user['password']=md5('123456');
    $user['dutyid']=2;
    /*打开事务
      查看user表中有没有studyno
      查看student表中有没有studyno
      studyno就是username
    */
    $inUser = M('user')->where(array('username'=>$data['studyno']))->find();
    $inStudent = M('student')->where(array('studyno'=>$data['studyno']))->find();
    if($inUser || $inStudent){
      $this->error("所添加的学生已存在");
    }

    if(M('user')->add($user) && M('student')->add($data)){
      $this->success('添加成功');
    }else{
      $this->error('添加失败');
    }
  }
  //删除学生
  public function delete($studyno){
    /*
      1.设置user表中的delete＝1
      2.设置student表中的delete＝1
    */
    M('user')->where(array('username'=>$studyno))->setfield('delete',1);
    M('student')->where(array('studyno'=>$studyno))->setfield('isdelete',1);
    $this->success('删除成功');
  }
  //修改
  public function modify($studyno){
    $this->student=M('student')->where(array('studyno'=>$studyno))->find();
    $this->display();
  }
  //保存修改
  public function modifyhandle(){
    $data = $_POST;
    $data['birthday']=strtotime($data['birthday']);
    if(M('student')->save($data)){
      $this->success('修改成功');
    }else{
      $this->error('修改失败');
    }
  }
}
