<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
  public function _initialize(){
		if(!isset($_SESSION['userid'])||session('dutyid')!=1){
			$this->redirect('Index/index/index');
		}
	}
  public function index(){
    $this->display();
  }
}
