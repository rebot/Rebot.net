<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/developer-style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<?php include("javascript/myjavascript.php"); ?>
<title>Rebot</title>
<meta content="keyword1,keyword2,keyword3" name="keywords" />
<meta content="Description of your page" name="description" />
</head>

<body>
	<menubar></menubar>
	<header></header>
	<content>
		<div id ="inbox">
		
				<?php include("attributes/post.php"); ?>
				
				<?php
				
				// while we still have rows from the db, display them
        		while ($row = mysql_fetch_array($result)) {
        
        		$eid = stripslashes($row['id']);
        		$etitle = stripslashes($row['title']);
            	$eauthor = stripslashes($row['author']);
           	 	$eemail = stripslashes($row['email']);
            	$emessage = stripslashes($row['message']);
            
            	$emessage = preg_replace('#(^|[\n ])((http|https|ftp|ftps)://[\w\#$%&~/.\-;:=,?@\[\]\(\)+]*)#sie', "'\\1<a href=\"'.trim('\\2').'\" target=\"_blank\" rel=\"nofollow\">\\2'.(strlen('\\2')>30?substr('\\2', strlen('\\2')-10, strlen('\\2')):'').'</a>'", $emessage);
				$emessage = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]\(\)+]*)#sie", "'\\1<a href=\"http://'.trim('\\2').'\" target=\"_blank\" rel=\"nofollow\">\\2'.(strlen('\\1')>30?substr('\\2', strlen('\\2')-10, strlen('\\2')):'').'</a>'", $emessage);
            
            	// Woop! We can use Gravatars aswell!!
            	$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5(strtolower($eemail))."&size=70"; 
           
           		$eemail = base64_encode($eemail);
           		$eemail = base64_encode($eemail);
           		$eemail = base64_encode($eemail);
           
           		$cname = base64_encode($ename);
           
            	echo '<div class="shouts">';
            		echo '<star><a href="#" onClick="star(); return false;"><img src="http://dl.dropbox.com/u/4981807/UnselectedmessageStarred.png" /></a></star>';
        				echo '<ul>';
        					echo '<h1>'.$etitle.'</h1>';
        					echo '<h2> writen by '.$eauthor.' </h2>';
        							// shorten the message to a certain amount of characters: here 80
    								$count_charts = strlen($emessage); 
                					if($count_charts > 80) 
    								{ 
                					$dmessage = substr ($emessage, 0, 80)."..."; 
        							}
									echo '<p>'.$dmessage.'</p>'; 
									echo '<view><a href="#" onClick="javascript:content'.$eid.'()" >+</a></view>' ;
									
					echo '</ul>';
				echo '</div>';				
				};
				
				?>
				
		</div>	
	</content>

</body>

</html>

<!--
<div id="topbar">
</div>
<div id="content">
</div>
<div id="footer">
Support iWebKit by sending us traffic; please keep this footer on your page, consider it a thank you for our work :-)
<a class="noeffect" href="http://snippetspace.com">Powered by iWebKit</a></div>

-->
