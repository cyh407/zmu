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
    .certificate .period{
      margin-top:1px;
      margin-bottom: 1px;
      height:12px;
    }
    .certificate .name{
      margin-top: 3px;
      margin-bottom: 5px;
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
          <!--通知公告-->
          <div class="col-md-6">
            <div class="notice panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">通知&公告</h3>
              </div>
              <div class="panel-body">
                <ul class="list-group">
                  <?php if(is_array($notice)): foreach($notice as $key=>$v): ?><a href="<?php echo U('Home/index/notice',array('id'=>$v['id']));?>" class="list-group-item"><?php echo (mb_substr($v["title"],0,20,'utf-8')); ?> <span class="pull-right time"><?php echo (date('Y-m-d',$v["time"])); ?></span></a><?php endforeach; endif; ?>
                </ul>
              </div>
            </div>
          </div>
          <!--what图-->
          <div class="col-md-6">
            <img class="what" src="/Public/img/what.png">
          </div>
          <!--分割线-->
          <div class="col-md-12 divider"></div>
          <!--请假界面-->
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-6">
                <div class="leave clearfix panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">请假记录</h3>
                  </div>
                  <div class="panel-body">
                    <table id="leaveList" class="table">
                      <tr>
                        <th>请假内容</th>
                        <th>请假时间</th>
                        <th>状态</th>
                      </tr>
                      <?php if(is_array($leave)): foreach($leave as $key=>$l): ?><tr>
                          <td><?php echo (mb_substr($l["content"],0,10,'utf-8')); ?>...</td>
                          <td><?php echo (date("Y-m-d",$l["time"])); ?></td>
                          <td>
                            <?php if($l['status'] == 0): ?>等待处理<?php endif; ?>
                            <?php if($l['status'] == 1): ?>同意<?php endif; ?>
                            <?php if($l['status'] == 2): ?>拒绝<?php endif; ?>
                          </td>
                        </tr><?php endforeach; endif; ?>
                    </table>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="leaveContent">请假条内容</label>
                  <textarea id="leaveContent" class="form-control" placeholder="直接写请假内容，不用写抬头"></textarea>
                </div>
                <button id="leaveSubmit" class="btn btn-warning">提交请假条</button>
              </div>
            </div>
          </div>
          <!--个人资料-->
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">个人资料</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">学号</div>
                      <input type="text" class="form-control" value="<?php echo ($info["studyno"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">姓名</div>
                      <input type="text" class="form-control" value="<?php echo ($info["name"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">年级</div>
                      <input type="text" class="form-control" value="<?php echo ($info["grade"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">班级</div>
                      <input type="text" class="form-control" value="<?php echo ($info["class"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">性别</div>
                      <input type="text" class="form-control" value="<?php echo ($info["gender"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">政治面貌</div>
                      <input type="text" class="form-control" value="<?php echo ($info["political"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">出生日期</div>
                      <input type="text" class="form-control" value="<?php echo ($info["birthday"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">身份证号</div>
                      <input type="text" class="form-control" value="<?php echo ($info["no"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-12 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">家庭详细地址</div>
                      <input type="text" class="form-control" value="<?php echo ($info["address"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">家庭电话</div>
                      <input type="text" class="form-control" value="<?php echo ($info["homephone"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">个人电话</div>
                      <input type="text" class="form-control" value="<?php echo ($info["phone"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">寝室号</div>
                      <input type="text" class="form-control" value="<?php echo ($info["roomno"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">特长/爱好</div>
                      <input type="text" class="form-control" value="<?php echo ($info["speciality"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">高考成绩</div>
                      <input type="text" class="form-control" value="<?php echo ($info["score"]); ?>" readonly>
                    </div>
                  </div>
                  <div class="col-md-6 infoCell">
                    <div class="input-group">
                      <div class="input-group-addon">是否贷款</div>
                      <input type="text" class="form-control"
                        <?php if($info['loan'] == 1): ?>value="是"
                        <?php else: ?>
                          value="否"<?php endif; ?>
                       readonly>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--奖状-->
          <div class="col-md-12 certificate">
            <div class=".clearfix panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">奖状&证书</h3>
              </div>
              <div class="panel-body">
                <ul class="list-group">
                  <?php if(is_array($certificate)): foreach($certificate as $key=>$v): ?><div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        <img src="<?php echo '/Uploads/'.$v['image'] ?>" alt="<?php echo ($v["name"]); ?>" style="height: 200px; width: 100%; display: block;">
                        <div class="caption">
                          <h6 class="period"><?php echo ($v["period"]); ?></h6>
                          <h3 class="name"><?php echo ($v["name"]); ?></h3>
                        </div>
                      </div>
                    </div><?php endforeach; endif; ?>
                </ul>
              </div>
            </div>
          </div>
          <!--奖金-->
          <div class="col-md-12">
            <div class=".clearfix panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">获得的资助</h3>
              </div>
              <div class="panel-body">
                <table class="table">
                  <tr>
                    <th>金额</th>
                    <th>时间</th>
                    <th>来源</th>
                    <th>原因</th>
                  </tr>
                  <?php if(is_array($funding)): foreach($funding as $key=>$f): ?><tr>
                      <td><?php echo ($f["money"]); ?></td>
                      <td><?php echo ($f["period"]); ?></td>
                      <td><?php echo ($f["source"]); ?></td>
                      <td><?php echo ($f["reason"]); ?></td>
                    </tr><?php endforeach; endif; ?>
                </table>
              </div>
            </div>
          </div>
          <!--奖金-->
          <div class="col-md-12">
            <div class=".clearfix panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">获得的奖学金</h3>
              </div>
              <div class="panel-body">
                <table class="table">
                  <tr>
                    <th>金额</th>
                    <th>名称</th>
                    <th>时间</th>
                  </tr>
                  <?php if(is_array($scholarship)): foreach($scholarship as $key=>$s): ?><tr>
                      <td><?php echo ($s["money"]); ?></td>
                      <td><?php echo ($s["name"]); ?></td>
                      <td><?php echo ($s["period"]); ?></td>
                    </tr><?php endforeach; endif; ?>
                </table>
              </div>
            </div>
          </div>

          <!--不良考勤纪录-->
          <div class="col-md-12">
            <div class=".clearfix panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">不良考勤记录</h3>
              </div>
              <div class="panel-body">
                <table class="table">
                  <tr>
                    <th>日期</th>
                    <th>节次</th>
                    <th>活动内容</th>
                    <th>状态</th>
                  </tr>
                  <?php if(is_array($attendance)): foreach($attendance as $key=>$a): ?><tr>
                      <td><?php echo (date('Y-m',$a["time"])); ?></td>
                      <td><?php echo ($a["section"]); ?></td>
                      <td><?php echo ($a["content"]); ?></td>
                      <td>
                        <?php if($a['status'] == 1): ?>请假<?php endif; ?>
                        <?php if($a['status'] == 2): ?>迟到<?php endif; ?>
                        <?php if($a['status'] == 3): ?>早退<?php endif; ?>
                        <?php if($a['status'] == 4): ?>旷课<?php endif; ?>
                      </td>
                    </tr><?php endforeach; endif; ?>
                </table>
              </div>
            </div>
          </div>
          <!--请假记录-->
          <div class="col-md-12">
            <div class=".clearfix panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">请假记录</h3>
              </div>
              <div class="panel-body">
                <table class="table">
                  <tr>
                    <th>请假内容</th>
                    <th>请假时间</th>
                    <th>状态</th>
                  </tr>
                  <?php if(is_array($leave)): foreach($leave as $key=>$l): ?><tr>
                      <td><?php echo ($l["content"]); ?></td>
                      <td><?php echo (date("Y-m-d",$l["time"])); ?></td>
                      <td>
                        <?php if($l['status'] == 1): ?>等待处理<?php endif; ?>
                        <?php if($l['status'] == 2): ?>同意<?php endif; ?>
                        <?php if($l['status'] == 3): ?>拒绝<?php endif; ?>
                      </td>
                    </tr><?php endforeach; endif; ?>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#leaveSubmit').click(function(){
        $leaveContent = $('#leaveContent');
        leaveContent = $leaveContent.val().trim();
        if(leaveContent){
        }else{
          $leaveContent.focus();
          alert('请假内容不能为空')
          return;
        }
        $.post("<?php echo U('Home/Index/leave');?>",{'leaveContent':leaveContent},function(result){
          if(result.status){
            alert('请假条提交成功，请刷新页面后在请假记录中查看老师的回复');
            $leaveContent.val('请假条提交成功，请刷新页面后在请假记录中查看老师的回复');
          }else{
            alert('请假条提交失败');
          }
        });
      });
    });
  </script>
</html>