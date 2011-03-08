<?
include("inc/attributes/include/session.php");
?>
<?php
if($session->logged_in){header("Location: index.php");}
else {
?>

<html>
	<head>
		<title>Lay-out loginpage</title>
		<link rel="stylesheet" type="text/css" media="screen" href="inc/css/mystyle.css" />
		<script type="text/javascript">
			function checkEnter(e){ 

			var characterCode 
			if(e && e.which){ 
			e = e
			characterCode = e.which;
			}
			else{
			e = event;
			characterCode = e.keyCode;
			}

			if(characterCode == 13){ 
			document.formtologin.submit(); 
			return false;
			}

			}

		</script>
	</head>
	<body class="login">
			<div class="login">
				<div id="title">
					<p> LOGIN </p>
				</div>
				<div id="loginform">
					<?
					echo $form->error("user");
					echo $form->error("pass"); 
					?>
					<form action="inc/attributes/process.php" method="POST" name="formtologin" >
						<p> USERNAME </p>
						<input type="text" name="user" maxlength="30" value="<? echo $form->value("user"); ?>"/>
						<p> PASSWORD </p>
						<input type="password" name="pass" maxlength="30" value="<? echo $form->value("pass"); ?>"/>
						<br> </br>
						<submit>PRESS ENTER TO LOGIN OR <a href="register.php" >CLICK HERE</a> TO REGISTER</submit>
						<input type="hidden" name="sublogin" value="1">
						<input type="submit" style="visibility: hidden;" />
					</form>
				</div>
			</div>
	</body>
</html>

<?php
}
?>