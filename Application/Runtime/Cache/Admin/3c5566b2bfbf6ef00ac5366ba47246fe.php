<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
	<title><?php echo (C("SITE_NAME")); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="/Public/css/admin/admin_login.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" language="javascript" src="/Public/js/admin/jquery.js"></script>
</head>
<body>
<div class="admin_login_wrap" id="wrap_height">
	<div class="admin_login_logo"><img src="/Public/images/admin/logo.png"></div>
	<div class="admin_login_border">
		<div class="admin_input">
			<form action="/index.php/Admin/Public/checkLogin/" method="post">
				<ul class="admin_items">
					<li>
						<input type="text" name="phone" value="" class="admin_input_style br3 w250" placeholder="帐号" />
					</li>
					<li>
						<input type="password" name="password" value="" class="admin_input_style br3 w250" placeholder="密码" />
					</li>
					<li class="cb">
						<div class="fl">
							<input type="text" name="verify" value="" class="admin_input_style br3 w150" placeholder="验证码" />
						</div>
						<div class="ml170"><a href="javascript:;"><img id="verify" src="<?php echo U('verify','','');?>" title='点击更换'></a></div>
					</li>
					<li>
						<span onclick="on_password();">
							<input type="checkbox" name="" id="login_checkbox">&nbsp;<label for="login_checkbox">记住密码</label>
							<input type="hidden" name="" id="on_pass" value="0">
						</span>
						<a href='JavaScript:alert("请联系管理员修改密码！");' class="c1 ml10">忘记密码?</a>
					</li>
					<li style="margin-bottom:0;">
						<input type="submit" value="登录" class="btn-primary br3" />
					</li>
				</ul>
			</form>
		</div>
	</div>
	<p class="admin_copyright">微聚科技 &copy;&nbsp;2014-2015</p>
</div>


<script type="text/javascript">
	$(function(){
		var bh=document.documentElement.clientHeight;
		var dh=document.getElementById("wrap_height").offsetHeight;
		$("#wrap_height").css("margin-top",(bh-dh)/2+"px");

		//点击更换验证码
		var verifyUrl = $('#verify').attr('src');
		$('#verify').click(function(){
			$(this).attr('src',verifyUrl+'/'+Math.random());
		});
	});
</script>

</body>
</html>