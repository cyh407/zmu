<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>梦工场教师管理页面</title>

    <!-- Bootstrap -->
    <link href="/Application/Admin/View/Public/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Application/Admin/View/Public/css/admin.css" charset="utf-8">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/Application/Admin/View/Public/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/Application/Admin/View/Public/js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="/Application/Admin/View/Public/js/jquery/jquery-1.12.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/Application/Admin/View/Public/js/bootstrap.min.js"></script>
  </head>
  <body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img id="logo" src="/Application/Admin/View/Public/image/学士帽.jpg" alt="梦工厂学生管理系统" class="img-circle">
      <a class="navbar-brand" href="#">梦工场学生管理系统</a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo U('Index/Index/logout');?>">退出登录</a></li>
        <li><a href="<?php echo U('Admin/Index/password');?>">修改密码</a></li>
      </ul>
      <!--form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </div-->

  </div>
</nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li class="active"><a href="<?php echo U('Admin/Notice/index');?>"><span class="icon glyphicon glyphicon-bullhorn"></span>通知公告</a></li>
          <li><a href="<?php echo U('Admin/StudentInfo/index');?>"><span class="icon glyphicon glyphicon-education "></span>学生基本信息</a></li>
          <li><a href="<?php echo U('Admin/Master/index');?>"><span class="icon glyphicon glyphicon-queen"></span>学生干部管理</a></li>
          <!--li><a href="<?php echo U('Admin/Score/index');?>"><span class="icon glyphicon glyphicon-stats"></span>学生成绩</a></li-->
          <li><a href="<?php echo U('Admin/Certificate/index');?>"><span class="icon glyphicon glyphicon-thumbs-up"></span>学生获奖</a></li>
          <li><a href="<?php echo U('Admin/Funding/index');?>"><span class="icon glyphicon glyphicon-heart"></span>学生资助情况</a></li>
          <li><a href="<?php echo U('Admin/Attendance/index');?>"><span class="icon glyphicon glyphicon-th-list"></span>学生考勤</a></li>
          <li><a href="<?php echo U('Admin/Leave/index');?>"><span class="icon glyphicon glyphicon-lamp"></span>学生请假</a></li>
          <li><a href="<?php echo U('Admin/Scholarship/index');?>"><span class="icon glyphicon glyphicon-yen"></span>奖学金管理</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <form action="<?php echo U('Admin/StudentInfo/modifyHandle');?>" method="post" class="form-horizontal">
  <!--学号-->
  <div class="form-group">
    <label for="studyno" class="col-sm-2 control-label">学号</label>
    <div class="col-sm-10">
      <input type="num" class="form-control" id="studyno" name="studyno" value="<?php echo ($student["studyno"]); ?>" readonly>
    </div>
  </div>
  <!--姓名-->
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">姓名</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" value="<?php echo ($student["name"]); ?>">
    </div>
  </div>
  <!--年级-->
  <div class="form-group">
    <label for="grade" class="col-sm-2 control-label">年级</label>
    <div class="col-sm-10">
      <input type="num" class="form-control" id="grade" name="grade" value="<?php echo ($student["grade"]); ?>">
    </div>
  </div>
  <!--班级-->
  <div class="form-group">
    <label for="calss" class="col-sm-2 control-label">班级</label>
    <div class="col-sm-10">
      <input type="num" class="form-control" id="class" name="class" value="<?php echo ($student["class"]); ?>">
    </div>
  </div>
  <!--性别-->
  <div class="form-group">
    <label for="gender" class="col-sm-2 control-label">性别</label>
    <div class="col-sm-10">
      <label class="radio-inline">
        <input type="radio" name="gender" id="gender" value="男" <?php if($student["gender"] == "男"): ?>checked<?php endif; ?>> 男
      </label>
      <label class="radio-inline">
        <input type="radio" name="gender" id="gender" value="女" <?php if($student["gender"] == "女"): ?>checked<?php endif; ?>> 女
      </label>
    </div>
  </div>
  <!--政治面貌-->
  <div class="form-group">
    <label for="political" class="col-sm-2 control-label">政治面貌</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="political" name="political" value="<?php echo ($student["political"]); ?>">
    </div>
  </div>
  <!--出生日期-->
  <div class="form-group">
    <label for="birthday" class="col-sm-2 control-label">出生日期</label>
    <div class="col-sm-10">
      <input type="datetime" class="form-control" name="birthday" value="<?php echo (date("Y-m-d",$student["birthday"])); ?>">
    </div>
  </div>
  <!--身份证号-->
  <div class="form-group">
    <label for="no" class="col-sm-2 control-label">身份证号</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="no" value="<?php echo ($student["no"]); ?>">
    </div>
  </div>
  <!--家庭住址-->
  <div class="form-group">
    <label for="address" class="col-sm-2 control-label">家庭住址</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="address" value="<?php echo ($student["address"]); ?>">
    </div>
  </div>
  <!--家庭电话-->
  <div class="form-group">
    <label for="homephone" class="col-sm-2 control-label">家庭电话</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="homephone" value="<?php echo ($student["homephone"]); ?>">
    </div>
  </div>
  <!--个人电话-->
  <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">个人电话</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" value="<?php echo ($student["phone"]); ?>">
    </div>
  </div>
  <!--寝室号-->
  <div class="form-group">
    <label for="roomno" class="col-sm-2 control-label">寝室号</label>
    <div class="col-sm-10">
      <input type="num" class="form-control" name="roomno" value="<?php echo ($student["roomno"]); ?>">
    </div>
  </div>
  <!--特长爱好-->
  <div class="form-group">
    <label for="speciality" class="col-sm-2 control-label">特长爱好</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="speciality" value="<?php echo ($student["speciality"]); ?>">
    </div>
  </div>
  <!--高考成绩-->
  <div class="form-group">
    <label for="score" class="col-sm-2 control-label">高考成绩</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="score" value="<?php echo ($student["score"]); ?>">
    </div>
  </div>
  <!--cet4-->
  <div class="form-group">
    <label for="cst4" class="col-sm-2 control-label">英语四级成绩</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="cet4" value="<?php echo ($student["cet4"]); ?>">
    </div>
  </div>
  <!--cet6-->
  <div class="form-group">
    <label for="cet6" class="col-sm-2 control-label">英语六级成绩</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="cet6" value="<?php echo ($student["cet6"]); ?>">
    </div>
  </div>
  <!--是否贷款-->
  <div class="form-group">
    <label for="loan" class="col-sm-2 control-label">是否贷款</label>
    <div class="col-sm-10">
      <label class="radio-inline">
        <input type="radio" name="loan" value="1"  <?php if($student["loan"] == 1): ?>checked<?php endif; ?>>是
      </label>
      <label class="radio-inline">
        <input type="radio" name="loan" value="0" <?php if($student["loan"] == 0): ?>checked<?php endif; ?>> 否
      </label>
    </div>
  </div>
  <!--提交按钮-->
      <button type="submit" class="col-md-12 btn btn-default">保存</button>
</form>


      </div>
    </div>
  </div>