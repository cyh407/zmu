<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="遵义医学院学生信息管理系统，梦工场学生管理系统，尖括号工作室">
    <meta name="author" content="cyh">

    <!-- Note there is no responsive meta tag here -->

    <!--link rel="icon" href="../../favicon.ico"-->

    <title>梦工场学生管理系统</title>

    <!-- Bootstrap core CSS -->
    <link href="/Public/css/bootstrap-3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/Public/css/bootstrap-3.3.5/assets/non-responsive.css" rel="stylesheet">
    <link href="/Public/css/index.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="/Public/css/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/Public/css/bootstrap-3.3.5/assets/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/Public/css/bootstrap-3.3.5/assets/html5shiv.min.js"></script>
      <script src="/Public/css/bootstrap-3.3.5/assets/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    .what{
      width:100%;
      margin-top: -80px;
    }
    .notice{
      height:330px;
    }
    .divider{
      height:10px;
      border-top: 1px solid #AAA;
    }
    .time{
      color:#AAA;
    }
    .infoCell{
      margin-top: 5px;
    }
    .top{
      background-color: #020;
    }
    #leaveContent{
      height:260px;
      resize: none;
    }
    #leaveSubmit{
      width:100%;
    }
    .leave{
      height:330px;
    }
    .top-right{
      display:inline-block;
      margin-left: 10px;
    }
    </style>
  </head>

  <body>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/Public/js/jquery-1.11.3.min.js"></script>
    <script src="/Public/css/bootstrap-3.3.5/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/Public/css/bootstrap-3.3.5/assets/ie10-viewport-bug-workaround.js"></script>
    <!---->
    <div class="top">
      <div class="container">
        <a href="＃">设为首页</a>
        <a class="top-right pull-right" href="<?php echo U('Index/Index/logout');?>">退出登陆</a>
        <a class="top-right pull-right" href="<?php echo U('Home/Index/password');?>">修改密码</a>
      </div>
    </div>
    <div class="topbar">
      <div class="topImage">
      </div>
    </div>
    <div class="content clearfix">
      <div class="container">
        <div class="row">
          <form method="post" action="<?php echo U('Home/Index/setPassword');?>">
            <div class="form-group">
              <label>原密码</label>
              <input type="password" name="password" class="form-control" placeholder="原密码">
            </div>
            <div class="form-group">
              <label >新密码</label>
              <input type="password" name="newPassword" class="form-control" placeholder="新密码">
            </div>
            <div class="form-group">
              <label >重复新密码</label>
              <input type="password" name="newPassword1" class="form-control" placeholder="新密码">
            </div>
            <button type="submit" class="btn btn-default">提交更改</button>
          </form>
        </div>
      </div>
    </div>
</html>