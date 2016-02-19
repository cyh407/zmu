<?php
namespace Admin\Controller;
use Think\Controller;
class CertificateController extends Controller {
  public function index($q=1){
    $db = M("certificate");

    $page=getpage($db,array(),25);
    $this->page=$page->show();
    $this->certificate = $db->page($p.',50')->select();
    $this->display();
  }
}

?>
