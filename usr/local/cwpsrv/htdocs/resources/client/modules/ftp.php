<?php

	$command = "pure-pw userdel $user_login-ftptemp;(echo ".$_SESSION['rkey']."; echo ".$_SESSION['rkey'].") | pure-pw useradd $user_login-ftptemp -d /home/$user_login/public_html/  -u  $user_login;pure-pw mkdb";
	//echo $command;
	shell_exec($command);

?>
	<form method="POST" id="ftp_form" action="<?php echo ($htdocs_link) ?>/webftp_simple/">
		<input type="hidden" name="login" value="1">		
		<input type="hidden" name="ftp_user" value="<?php echo ("$user_login-ftptemp") ?>">		
		<input type="hidden" name="ftp_pass" value="<?php echo ($_SESSION['rkey']) ?>">
	</form>

	<script type="text/javascript">
		document.getElementById("ftp_form").submit();
	</script>