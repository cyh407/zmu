<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>梦工厂教师管理页面</title>

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
      <a class="navbar-brand" href="#">梦工厂学生管理系统</a>
    </div>
    <!--
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Settings</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Help</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </div>
    -->
  </div>
</nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li class="active"><a href="#"><span class="icon glyphicon glyphicon-bullhorn"></span>通知公告</a></li>
          <li><a href="#"><span class="icon glyphicon glyphicon-education "></span>学生基本信息</a></li>
          <li><a href="#"><span class="icon glyphicon glyphicon-queen"></span>学生干部管理</a></li>
          <li><a href="#"><span class="icon glyphicon glyphicon-stats"></span>学生成绩</a></li>
          <li><a href="#"><span class="icon glyphicon glyphicon-thumbs-up"></span>学生获奖</a></li>
          <li><a href="#"><span class="icon glyphicon glyphicon-heart"></span>学生资助情况</a></li>
          <li><a href="#"><span class="icon glyphicon glyphicon-th-list"></span>学生考勤</a></li>
          <li><a href="#"><span class="icon glyphicon glyphicon-lamp"></span>学生请假</a></li>
          <li><a href="#"><span class="icon glyphicon glyphicon-yen"></span>奖学金管理</a></li>
        </ul>
      </div>
      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

        <h1 class="page-header">Dashboard</h1>

<div class="row placeholders">
  <div class="col-xs-6 col-sm-3 placeholder">
    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
    <h4>Label</h4>
    <span class="text-muted">Something else</span>
  </div>
  <div class="col-xs-6 col-sm-3 placeholder">
    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
    <h4>Label</h4>
    <span class="text-muted">Something else</span>
  </div>
  <div class="col-xs-6 col-sm-3 placeholder">
    <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
    <h4>Label</h4>
    <span class="text-muted">Something else</span>
  </div>
  <div class="col-xs-6 col-sm-3 placeholder">
    <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
    <h4>Label</h4>
    <span class="text-muted">Something else</span>
  </div>
</div>

<h2 class="sub-header">Section title</h2>

  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Header</th>
        <th>Header</th>
        <th>Header</th>
        <th>Header</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1,001</td>
        <td>Lorem</td>
        <td>ipsum</td>
        <td>dolor</td>
        <td>sit</td>
      </tr>
      <tr>
        <td>1,002</td>
        <td>amet</td>
        <td>consectetur</td>
        <td>adipiscing</td>
        <td>elit</td>
      </tr>
      <tr>
        <td>1,003</td>
        <td>Integer</td>
        <td>nec</td>
        <td>odio</td>
        <td>Praesent</td>
      </tr>
      <tr>
        <td>1,003</td>
        <td>libero</td>
        <td>Sed</td>
        <td>cursus</td>
        <td>ante</td>
      </tr>
      <tr>
        <td>1,004</td>
        <td>dapibus</td>
        <td>diam</td>
        <td>Sed</td>
        <td>nisi</td>
      </tr>
      <tr>
        <td>1,005</td>
        <td>Nulla</td>
        <td>quis</td>
        <td>sem</td>
        <td>at</td>
      </tr>
      <tr>
        <td>1,006</td>
        <td>nibh</td>
        <td>elementum</td>
        <td>imperdiet</td>
        <td>Duis</td>
      </tr>
      <tr>
        <td>1,007</td>
        <td>sagittis</td>
        <td>ipsum</td>
        <td>Praesent</td>
        <td>mauris</td>
      </tr>
      <tr>
        <td>1,008</td>
        <td>Fusce</td>
        <td>nec</td>
        <td>tellus</td>
        <td>sed</td>
      </tr>
      <tr>
        <td>1,009</td>
        <td>augue</td>
        <td>semper</td>
        <td>porta</td>
        <td>Mauris</td>
      </tr>
      <tr>
        <td>1,010</td>
        <td>massa</td>
        <td>Vestibulum</td>
        <td>lacinia</td>
        <td>arcu</td>
      </tr>
      <tr>
        <td>1,011</td>
        <td>eget</td>
        <td>nulla</td>
        <td>Class</td>
        <td>aptent</td>
      </tr>
      <tr>
        <td>1,012</td>
        <td>taciti</td>
        <td>sociosqu</td>
        <td>ad</td>
        <td>litora</td>
      </tr>
      <tr>
        <td>1,013</td>
        <td>torquent</td>
        <td>per</td>
        <td>conubia</td>
        <td>nostra</td>
      </tr>
      <tr>
        <td>1,014</td>
        <td>per</td>
        <td>inceptos</td>
        <td>himenaeos</td>
        <td>Curabitur</td>
      </tr>
      <tr>
        <td>1,015</td>
        <td>sodales</td>
        <td>ligula</td>
        <td>in</td>
        <td>libero</td>
      </tr>
    </tbody>
  </table>


      </div>
    </div>
  </div>