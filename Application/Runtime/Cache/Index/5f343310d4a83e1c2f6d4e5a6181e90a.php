<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>	遵义医学院学生信息</title>
	<meta name="description" content="">
	<meta name="keywords" content="学生管理系统,遵义医学院大学生">
	<script src="/Application/Index/View/Public/jquery/jquery-1.12.0.min.js" charset="utf-8"></script>
	<style type="text/css">
			body {margin:0;padding:0; font:12px "宋体", arial,sans-serif;}
			div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,h6,pre,form,fieldset,input,textarea,blockquote,p{padding:0; margin:0;}
			table,td,tr,th{font-size:12px;}
			li{list-style-type:none;}
			img{vertical-align:top;border:0;}
			ol,ul {list-style:none;}
			input{margin:0;padding:0}
			input,img{line-height:normal}
			em{font-style:normal;}
			.clear{clear:both;}
			a {color:#333333; text-decoration:none;}
			a:visited{text-decoration:none;}
			a:hover{color:#ff6600;text-decoration:underline;}
			a:active{color:#333333;}
			.header,.container,.footer {width:980px;margin:0px auto;clear:both;}
			.container_student{width:100%; height:400px;margin:0px auto;clear:both;background:url(/Application/Index/View/Public/Image/login_student.jpg) no-repeat center top;}
			.container980{width:295px; height:272px;margin:0px auto;clear:both; padding-top:128px; padding-left:685px; color:#3f3f3f}
			.header_left{float:left;height:100px; width:325px;}
			.header_right{float:right;height:100px; width:265px;}
			.loginfooter{background:url(images/logindownbg.png) no-repeat top; text-align:center; color:#8d8c8c; height:60px; line-height:60px; font-family:Verdana,arial,sans-serif;}
			.loginfooter a{color:#8d8c8c;}
			.loginfooter a:hover{color:#ff6600;}
			/*高度垂直居中自适应*/
			/*IREFOX+IE7*/
			html,body{height:100%;overflow-y:hidden;}
			#infoBox[id]{text-align:center; width:100%; height:100%; display:table;}
			#info[id]{display:table-cell;vertical-align:middle;} /*这里可以指个宽度试试，是可以自适应的*/
			/*IE6*/
			*html #infoBox{position:absolute; top:50%; width:100%; text-align:center; display:block; height:auto}
			*html #info{position:relative; top:-50%; text-align:center;} /*这里可以指个宽度试试，是可以自适应的*/
			/*IE7*/
			*+html #infoBox[id]{position:absolute; top:50%; width:100%; text-align:center; display:block; height:auto}
			*+html #info[id]{position:relative; top:-50%; text-align:center;} /*这里可以指个宽度试试，是可以自适应的*/
			.btn{
				background-color:rgb(92, 184, 92);
				border-bottom-color:rgb(76, 174, 76);
				border-radius:3px;
				border-style:solid;
				border-width:1px;
				border-collapse:collapse;
				border-image-outset:0px;
				border-image-repeat:stretch;
				border-image-slice:100%;
				border-color:rgb(76, 174, 76);
				box-sizing:border-box;
				color:rgb(255, 255, 255);
				cursor:pointer;
				display:inline-block;
				font-family:'Helvetica Neue', Helvetica, Arial, sans-serif;
				font-size:12px;
				font-weight:normal;
				height:30px;
				line-height:18px;
				margin-bottom:0px;
				padding-bottom:5px;
				padding-left:10px;
				padding-right:10px;
				padding-top:5px;
				text-align:center;
				text-decoration:none;
				touch-action:manipulation;
				vertical-align:middle;
				white-space:nowrap;
				width:80px;
			}
			.btn-danger{
				background-color:rgb(217, 83, 79);
				border-color:rgb(212,63,58);
			}
			.btn-danger:hover{
				color:#000;
			}
		</style>
</head>
<body>
<div id="infoBox">
		<div id="info">
			<div class="header">
				<div class="header_left"><img style="width:100px;height:100px;" src="/Application/Index/View/Public/Image/login_logo.png"></div>
				<div class="header_right"><img src="/Application/Index/View/Public/images/companylogo.png"></div>
				<div class="clear"></div>
			</div>
			<div class="container_student">
				<div class="container980">
					<form name="aspnetForm" method="post" action="<?php echo U("Index/index/login");?>" id="aspnetForm">
						<table width="250" border="0" cellspacing="0" cellpadding="0">
							<tbody><tr>
								<td width="45" height="42" align="left">用户名</td>
								<td><input name="username" type="text" onblur="this.style.borderColor='#d1d1d1'" onfocus="this.style.borderColor='#338cce'" style="height: 28px; width: 197px; border: 1px solid rgb(209, 209, 209); padding-left: 5px; line-height: 28px;">
								</td>
							</tr>
							<tr>
								<td height="42" align="left">密 码</td>
								<td><input name="password" type="password" id="_ctl0_txtpassword" onblur="this.style.borderColor='#d1d1d1'" onfocus="this.style.borderColor='#338cce'" style="height:28px;width:197px;BORDER-RIGHT:#b9b9b9 1px solid; BORDER-TOP:#b9b9b9 1px solid; PADDING-LEFT:5px; BORDER-LEFT:#b9b9b9 1px solid; LINE-HEIGHT:28px; BORDER-BOTTOM:#b9b9b9 1px solid">
								</td>
							</tr>
							<tr>
								<td height="40" align="left" style="WIDTH: 42px; HEIGHT: 40px">验证码</td>
								<td align="left" style="HEIGHT: 40px"><input name="code" type="text" onblur="this.style.borderColor='#d1d1d1';" onfocus="this.style.borderColor='#338cce';" style="height:28px;width:50px;BORDER-RIGHT:#b9b9b9 1px solid; BORDER-TOP:#b9b9b9 1px solid; PADDING-LEFT:5px; OVERFLOW:hidden; BORDER-LEFT:#b9b9b9 1px solid; LINE-HEIGHT:28px; BORDER-BOTTOM:#b9b9b9 1px solid; diplay:block">
									<img id="code" src="<?php echo U('Index/index/verify');?>"> <a href="Javascript:void(change_code(this));">
										看不清？</a></td>
							</tr>
							<tr>
								<td height="74">&nbsp;</td>
								<td><div style="FLOAT:left">
									<input type="submit" class="btn btn-success" value="登陆"/>
									<a href="<?php echo U('Admin/Notice/update',array('id'=>$v['id']));?>" type="button" class="btn btn-danger">重置</a>
									</div>
								</td>
							</tr>
							</tbody></table>
					</form>
				</div>
			</div>
			<div class="footer loginfooter">说明：1.使用IE6以上&nbsp;&nbsp;2.1024*768分辨率浏览本系统&nbsp;&nbsp;3.请不要屏蔽弹出窗口&nbsp;&nbsp;4.技术支持：要屏蔽弹出窗口&nbsp;&nbsp;4.技术支持：<a href="#" target="_blank">尖括号软件工作室</a></div>
		</div>
	</div>
	<script type="text/javascript">
	function change_code(obj){
		$("#code").attr("src","<?php echo U('Index/Index/verify');?>"+'/'+Math.random());
		return false;
	}
	</script>
</body>
</html>