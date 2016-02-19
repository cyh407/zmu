<?php
namespace Admin\Controller;
use Think\Controller;
class NoticeController extends CommonController {

  public function index($p=1){
    $db = M("notice");

    $page=getpage($db,array(),25);
    $this->page=$page->show();

    $this->notice=$db->order('time DESC')->where(array('delete'=>0))->page($p.',25')->select();
    $this->display();
  }

  //显示公告编辑页面
  public function notice(){
    $this->display();
  }

  //保存公告内容
  public function noticeHandle(){
    $data=array(
      userid=>session('userid'),
      title=>I('title','请输入标题'),
      content=>I('content','请输入通知公告内容'),
      time=>time(),
    );
    if(M('notice')->add($data)){
      $this->success('通知公告添加成功');
    }else{
      $this->error('通知公告添加失败');
    }
  }

  //细节
  public function detial($id){
    $this->notice = M('notice')->find($id);
    $this->display();

  }

  //删除
  public function delete($id){
    if(M('notice')->delete($id)){
      $this->success('删除成功');
    }else{
      $this->error('删除失败');
    }
  }

  //修改
  public function update($id){
    $this->notice = M('notice')->find($id);
    $this->display();
  }
  //保存修改
  public function updateHandle(){
    $data=array(
      'id'=>I('id'),
      userid=>0,
      title=>I('title','请输入标题'),
      content=>I('content','请输入通知公告内容'),
      time=>time(),
    );
    if(M('notice')->save($data)){
      $this->success('通知公告修改成功',U('Admin/Notice/index'));
    }else{
      $this->error('通知公告修改失败');
    }
  }

}
