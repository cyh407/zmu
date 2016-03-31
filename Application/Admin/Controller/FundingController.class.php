<?php
namespace Admin\Controller;
use Think\Controller;
class FundingController extends CommonController {
  public function index($p=1){
    $db = M("funding");

    $page=getpage($db,array(),25);
    $this->page=$page->show();

    $this->funding=$db->order('time DESC')->join('zmu_student on zmu_student.studyno = zmu_funding.studyno','left')
    ->field('zmu_funding.id,zmu_student.studyno as sno,zmu_funding.studyno,zmu_student.name,zmu_funding.money,zmu_funding.source,zmu_funding.reason,zmu_funding.period,zmu_funding.time')->page($p.',25')->select();
    $this->display();
  }
  public function add(){
    $this->display();
  }
  public function addHandle(){
    $data = $_POST;
    if(M('student')->where(array('studyno'=>$data['studyno']))->find()){
    }else{
      $this->display('你所添加的学号不存在');
    }
    $data['time']=time();
    if(M('funding')->add($data)){
      $this->success('添加成功');
    }else{
      $this->error('添加失败');
    }
  }
  public function delete($id){
    if(M('funding')->delete($id)){
      $this->success('删除成功');
    }else{
      $this->error('删除失败');
    }
  }
}
