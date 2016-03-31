<?php
namespace Admin\Controller;
use Think\Controller;
class attendanceController extends CommonController {
  public function index($p=1){
    $db = M("attendance");

    $page=getpage($db,array(),25);
    $this->page=$page->show();

    $this->attendance=$db->order('time DESC')->join('zmu_student on zmu_student.studyno = zmu_attendance.studyno','left')
    ->page($p.',25')->select();
    $this->display();
  }

  public function add(){
    $this->display();
  }
  public function addHandle(){
    $data = $_POST;
    if(M('student')->where(array('studyno'=>$data['studyno']))->find()){

    }else{
      $this->error('添加的学号不存在');
    }
    $data['time']=time();
    if(M('attendance')->add($data)){
      $this->success('添加成功');
    }else{
      $this->error('添加失败');
    }
  }
}
