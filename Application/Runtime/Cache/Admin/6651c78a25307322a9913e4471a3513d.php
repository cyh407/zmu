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

        
<h2 class="sub-header ">学生基本信息<a href="<?php echo U('Admin/StudentInfo/add');?>" type="button" class="add btn btn-primary">添加学生</a></h2>

  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>姓名</th>
        <th>学号</th>
        <th>年级</th>
        <th>班级</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($student)): foreach($student as $key=>$v): ?><tr>
          <td><?php echo ($v["name"]); ?></td>
          <td><?php echo ($v["studyno"]); ?></td>
          <td><?php echo ($v["grade"]); ?></td>
          <td><?php echo ($v["class"]); ?></td>
          <td>
            <a class="btn btn-sm btn-danger" href="<?php echo U('Admin/StudentInfo/delete',array('studyno'=>$v['studyno']));?>">删除</a>
            <a class="btn btn-sm btn-success" href="<?php echo U('Admin/StudentInfo/modify',array('studyno'=>$v['studyno']));?>">修改</a>
          </td>
        </tr><?php endforeach; endif; ?>
    </tbody>
  </table>
  <div class="page"><?php echo ($page); ?></div>


      </div>
    </div>
  </div>