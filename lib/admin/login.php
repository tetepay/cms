<?php exit('404');?>
{include header}
<!-- hook.admin_login_header -->
<form action="{url admin/login}" method="post" class="login">
	<div class="headline">登录 · 请输入密码</div>
	<input type="password" name="password" placeholder="密码" />
	{if $conf.vcode.open}
	<input type="text" name="vcode" class="vcode-input" placeholder="验证码"/>
	<img src="{url vcode}" onclick="this.src='{url vcode}'" class="vcode-img" title="点击更换验证码" alt="验证码"/>
	{/if}
	<!-- hook.admin_login_form -->
	<input type="submit" class="btn" value="提交"/>
	<!-- hook.admin_login_form_bottom -->
</form>
<!-- hook.admin_login_footer -->
{include footer}