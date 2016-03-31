<?php
namespace Admin\Controller;
use Think\Controller;
class MasterController extends CommonController {
  public function index(){
    $sql = "select zmu_duty.name as dutyName,zmu_master.studyno,zmu_student.name,zmu_student.phone,zmu_student.grade,zmu_student.`class` from zmu_master left join zmu_duty on zmu_master.id=zmu_duty.id left join zmu_student on zmu_master.studyno = zmu_student.studyno";
    $this->master = M()->query($sql);
    $this->display();
  }
  //添加干部职务
  public function addDuty($dutyName){
    $data = array('name'=>$dutyName);
    if(M('duty')->add($data)){
      $this->ajaxReturn(“”,"添加成功",1);
    }else{
      $this->ajaxReturn(array(
        'status'=>0,
        'message'=>'添加失败'
      ));
    }
  }
  //添加学生干部表单
  public function add(){
    $this->duty = M('duty')->select();
    $this->display();
  }
  //添加学生干部
  public function addHandle(){
    $data = $_POST;
    if(M('student')->find($data['studyno'])){
    }else{
      $this->error('你所添加的学号不存在');
    }
    if(M('master')->add($data)){
      $this->success('添加成功');
    }else{
      $this->error('添加失败');
    }
  }
  //删除学生干部
  public function delete($studyno){
    if(M('master')->where(array('studyno'=>$studyno))->delete()){
      $this->success('删除成功');
    }else{
      $this->error('删除失败');
    }
  }
}
