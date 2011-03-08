<?
include("inc/attributes/include/session.php");
?>
<?php
if($session->logged_in){
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
	<!-- In my head, i've added:
		* my javascript file (located in the folder inc/javascript)
		* my css file (located in the folder inc/css
		* my analytics file (here should be your google analitics code if you have one)
	-->
	<head>
		<link rel="stylesheet" type="text/css" media="screen" href="inc/css/mystyle.css" />
		<!-- <script type="text/javascript" src="myjavascript.js" ></script> -->
		<?php include("inc/javascript/myjavascript.php"); ?>
		<?php include("inc/attributes/analytics.php"); ?>
		<title>Rebot style test</title>
	</head>
	
	<body>
		<header class="home">
			<div id="write">
				<!-- m staat voor het menu'tje (zoals shout) -->
				<ul class="m1">
					<a href="#" onClick="javascript:writemessage()" onMouseover="document.getElementById('js-m1').src ='http://dl.dropbox.com/u/4981807/ToolbarComposeHover.png';" onMouseOut="document.getElementById('js-m1').src ='http://dl.dropbox.com/u/4981807/ToolbarCompose.png';">
						<img src="http://dl.dropbox.com/u/4981807/ToolbarCompose.png" id="js-m1"/>
					</a>
				</ul>
				<ul class="m2">
					<a href="#"  onMouseover="document.getElementById('js-m2').src ='http://dl.dropbox.com/u/4981807/ToolbarReplyHover.png';" onMouseOut="document.getElementById('js-m2').src ='http://dl.dropbox.com/u/4981807/ToolbarReply.png';">
						<img src="http://dl.dropbox.com/u/4981807/ToolbarReply.png" id="js-m2" />
					</a>
				</ul>
				<ul class="m3">
					<a href="#"  onMouseover="document.getElementById('js-m3').src ='http://dl.dropbox.com/u/4981807/ToolbarArchiveHover.png';" onMouseOut="document.getElementById('js-m3').src ='http://dl.dropbox.com/u/4981807/ToolbarArchive.png';">
						<img src="http://dl.dropbox.com/u/4981807/ToolbarArchive.png" id="js-m3"/>
					</a>				
				</ul>
				<ul class="m4">
					<a href="#"  onMouseover="document.getElementById('js-m4').src ='http://dl.dropbox.com/u/4981807/ToolbarDeleteHover.png';" onMouseOut="document.getElementById('js-m4').src ='http://dl.dropbox.com/u/4981807/ToolbarDelete.png';">
						<img src="http://dl.dropbox.com/u/4981807/ToolbarDelete.png" id="js-m4"/>
					</a>				
				</ul>
				<ul class="search">
					<form>
						<input placeholder="Search" name="search" type="text" cols="25" />					
					</form>
				</ul>
			</div>
		</header>
	
		<content>
			<div id="menu">
				<ul class="home">
					<a href="test2.php">
						<img src="http://dl.dropbox.com/u/4981807/SidebarInboxSelected.png" />
					</a>
				</ul>
				<ul class="images">
					<a href="inc/pages/images.php">
						<img src="http://dl.dropbox.com/u/4981807/SidebarFavorite.png" />
					</a>
				</ul>
				<ul class="blog">
					<a href="#">
						<img src="http://dl.dropbox.com/u/4981807/SidebarDraft.png" />
					</a>
				</ul>
				<ul class="archief">
					<a href="#">
						<img src="http://dl.dropbox.com/u/4981807/SidebarArchived.png" />
					</a>
				</ul>
			</div>
			<div id="inbox">
				
				<?php include("inc/attributes/post.php"); ?>
				
				<?php
				
				// while we still have rows from the db, display them
        		while ($row = mysql_fetch_array($result)) {
        
        		$eid = stripslashes($row['id']);
        		$etitle = stripslashes($row['title']);
            	$eauthor = stripslashes($row['author']);
            	$eauthor = strtolower($eauthor);
           	 	$eemail = stripslashes($row['email']);
            	$emessage = stripslashes($row['message']);
            	$emessage = str_replace("<br />","",$emessage);
            	$emessage = str_replace("\r\n"," ",$emessage);
            
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
									echo '<view><a href="#" onClick="javascript:content'.$eid.'()" ><img src="http://dl.dropbox.com/u/4981807/read-more.png"/ style="position: absolute; left: -1px; margin: 0px; padding: 0px; width: 100%; height: 100%; border-left: 1px solid #B4B4B4"></a></view>' ;
									
					echo '</ul>';
				echo '</div>';				
				};
				
				?>
			
			</div>
			<div id="message"><form action="<?php $self ?>" method="post" >
				<div class="title" id="js-title">
					<ul>
						<h1> Lorem ipsum dolor </h1>
					</ul>
				</div>
				<div class="info">
					<ul>
						<star><img src="http://dl.dropbox.com/u/4981807/UnselectedmessageStarred.png" /></star>
						<p> Message from </p>
						<p style="color: #388819; font-weight: bold;" id="js-author"> consectetur<p> 
						<p class="right" id="js-date">04/02/11   22:46</p>
						<input id="js-email" name="email" type="text" cols="20" value="rebot8@gmail.com" style="visibility: hidden;"/>
					</ul>
				</div>
				<div class="content" id="js-message">
					<ul>
						<p>Morbi iaculis lacinia lacus luctus ultricies. Integer ultricies, tellus non posuere tristique, nisl nisl volutpat lorem, ac iaculis libero purus pharetra eros. Proin tincidunt quam eget risus ultrices eget aliquam elit blandit. Maecenas eros erat, fringilla quis cursus quis, rhoncus non risus. Donec tempus massa vitae diam dignissim nec tempus augue pharetra. Duis lorem arcu, sagittis ac convallis eu, ullamcorper vitae ante. Proin gravida nulla in justo convallis non pellentesque sem pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam laoreet lacus a justo tincidunt tincidunt. Phasellus ut pretium justo. Vivamus eget lorem metus, at malesuada nisl. Nulla bibendum, lorem vitae tincidunt pellentesque, nunc libero pretium tellus, in sollicitudin felis ipsum at dui. Morbi pulvinar, neque sed dapibus elementum, magna erat imperdiet mauris.</p>
					</ul>					
				</div>
				<div class="photo">
					<img src="http://dl.dropbox.com/u/4981807/Android%20512.png" id="js-photo"/>
				</div>
				<div class="submit" id="js-submit">
					<input name="send" type="hidden" />
					<a href="#" onMouseover="javascript:buttonon()" onMouseOut="javascript:buttonoff()" >
						<button id="js-button">Submit</button>
					</a>
					<arrow1></arrow1>
					<text1></text1>
				</div>
			</form>
			</div>
		</content>
	
	</body>
	
</html>

<?php
}
else	{header("Location: main.php");}
?>