<?php
namespace Admin\Controller;
use Think\Controller;
class CertificateController extends Controller {
  public function index($p=1){
    $db = M("certificate");
    $page=getpage($db,array(),25);
    $this->page=$page->show();
    $this->certificate = $db->page($p.',25')->join('zmu_student on zmu_student.studyno = zmu_certificate.studyno','left')
    ->field('zmu_certificate.image,zmu_certificate.period,zmu_certificate.id,zmu_certificate.studyno,zmu_student.studyno,zmu_certificate.name as name ,zmu_student.name as studentName')->select();
    //p($this->certificate);
    $this->display();
  }

  public function addHandle(){
    $data = $_POST;
    $data['userid'] = session('userid');
    if(M('student')->where(array('studyno'=>$data['studyno']))->find()){

    }else{
      $this->error('你所添加的学号不存在，请重新添加');
    }
    // 上传文件
    $upload = new \Think\Upload();// 实例化上传类
    $upload->maxSize=5*1024*1024;// 设置附件上传大小（字节）
    $upload->exts=array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
    $upload->rootPath='./Uploads/'; // 设置附件上传根目录
    $upload->savePath='Certificate/'; // 设置附件上传（子）目录
    $upload->autoSub = true;//开启子目录
    $upload->subName = array('date','Ym');
    $info   =   $upload->uploadOne($_FILES['image']);
    if(!$info) {// 上传错误提示错误信息
        $this->error($upload->getError());
    }else{// 上传成功
    }
    $data['image']=$info['savepath'].$info['savename'];
    if(M('certificate')->add($data)){
      $this->success('保存成功');
    }else{
      $this->error('保存失败');
    }
  }
  public function delete($id=0){
    $db=M('certificate');
    if($db->where(array('id'=>$id))->delete()){
      $this->success('删除成功');
    }else{
      $this->error("删除失败");
    }
  }
}

?>
