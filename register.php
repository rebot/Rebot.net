<?
include("inc/attributes/include/session.php");
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
			document.formtoregister.submit(); 
			return false;
			}

			}

		</script>
	</head>
	<body class="register">
			<div class="register">
				<div id="title">
					<p> REGISTER </p>
				</div>
				<div id="registerform">
					<?
					if($session->logged_in){
  						 echo "<p class=\"error\">You've already registered. Please return <a href=\"index.php\">home</a></p>";
  			
					}
					else if(isset($_SESSION['regsuccess'])){
							if($_SESSION['regsuccess']){
      							echo "<p class=\"success\">Welcome ".$_SESSION['reguname'].". You are now registered. Log in <a href=\"index.php\">here</a></p>";
      							echo "<img src=\"http://dl.dropbox.com/u/4981807/success%20kopie.png\" style=\"max-width: 330px; max-height: 90%; text-align: center; \" />";
     						}
  							else{
      							echo "<p class=\"error\">Sorry, we were unable to registrate you. Please try again later.</p>";
      						}
   							unset($_SESSION['regsuccess']);
   							unset($_SESSION['reguname']);
					}
					else{
					?>
					<?
					echo $form->error("user"); 
					echo $form->error("pass");
					echo $form->error("email");
					?>
					<form action="inc/attributes/process.php" method="POST" name="formtoregister" >
						<p> USERNAME </p>
						<input type="text" name="user" maxlength="30" value="<? echo $form->value("user"); ?>"/>
						<p> PASSWORD </p>
						<input type="password" name="pass" maxlength="30" value="<? echo $form->value("pass"); ?>"/>
						<p> EMAIL </p>
						<input type="text" name="email" maxlength="50" value="<? echo $form->value("email"); ?>">
						<br> </br>
						<submit>PRESS ENTER TO REGISTER OR <a href="main.php" >CLICK HERE</a> TO LOGIN</submit>
						<input type="hidden" name="subjoin" value="1">
						<input type="submit" style="visibility: hidden;" />
					</form>
					<?
					}
					?>
				</div>
			</div>
	</body>
</html>