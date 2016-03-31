<?php
namespace Admin\Controller;
use Think\Controller;
class LeaveController extends CommonController {
  public function index($p=1){
    $db = M("leave");

    $page=getpage($db,array(),25);
    $this->page=$page->show();

    $this->leave=$db->order('time DESC')->join('zmu_student on zmu_student.studyno = zmu_leave.studyno','left')->page($p.',25')->select();

    $this->display();
  }

  public function accept($id=0){
    if(M('leave')->where(array('id'=>$id))->setField('status',1)){
      $this->success('您同意请假');
    }else{
      $this->error("操作失败");
    }
  }
  /*
  public function no($id=0){
    if(M('leave')->where(array('id'=>$id))->setField('status',2)){
      $this->success('您拒绝了这个请假请求');
    }else{
      $this->error("操作失败");
    }
  }
  */
  public function no($id=0){
    $this->leave=M('leave')->join('zmu_student on zmu_student.studyno = zmu_leave.studyno','left')->where(array('zmu_leave.id'=>$id))->find();
    $this->display();
  }
  public function noHandle($studyno){
    $data = $_POST;
    $data['status']=2;
    if(M('leave')->save($data)){
      $this->success('操作成功');
    }
  }
}
