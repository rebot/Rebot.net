<html>

	<head>
		<link rel="stylesheet" type="text/css" media="screen" href="mystyle.css" />
		<!-- <script type="text/javascript" src="myjavascript.js" ></script> -->
		<?php include("myjavascript.php"); ?>
		<?php include("analytics.php"); ?>
		<title>Rebot style test</title>
	</head>
	
	<body>
		<header>
			<div id="write">
				<!-- m staat voor het menu'tje (zoals shout) -->
				<ul class="m1">
					<a href="#" onClick="javascript:writemessage()" onMouseover="document.getElementById('js-m1').src ='http://dl.dropbox.com/u/4981807/ToolbarComposeHover.png';" onMouseOut="document.getElementById('js-m1').src ='http://dl.dropbox.com/u/4981807/ToolbarCompose.png';">
						<img src="http://dl.dropbox.com/u/4981807/ToolbarCompose.png" id="js-m1"/>
					</a>
				</ul>
				<ul class="m2">
					<a href="#" onClick="javascript:writemessage()" onMouseover="document.getElementById('js-m2').src ='http://dl.dropbox.com/u/4981807/ToolbarReplyHover.png';" onMouseOut="document.getElementById('js-m2').src ='http://dl.dropbox.com/u/4981807/ToolbarReply.png';">
						<img src="http://dl.dropbox.com/u/4981807/ToolbarReply.png" id="js-m2" />
					</a>
				</ul>
				<ul class="m3">
					<a href="#" onClick="javascript:writemessage()" onMouseover="document.getElementById('js-m3').src ='http://dl.dropbox.com/u/4981807/ToolbarArchiveHover.png';" onMouseOut="document.getElementById('js-m3').src ='http://dl.dropbox.com/u/4981807/ToolbarArchive.png';">
						<img src="http://dl.dropbox.com/u/4981807/ToolbarArchive.png" id="js-m3"/>
					</a>				
				</ul>
				<ul class="m4">
					<a href="#" onClick="javascript:writemessage()" onMouseover="document.getElementById('js-m4').src ='http://dl.dropbox.com/u/4981807/ToolbarDeleteHover.png';" onMouseOut="document.getElementById('js-m4').src ='http://dl.dropbox.com/u/4981807/ToolbarDelete.png';">
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
					<a href="images.php">
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
				<div class="shouts">
					<star><a href="#" onClick="star(); return false;"><img src="http://dl.dropbox.com/u/4981807/UnselectedmessageStarred.png" /></a></star>
						<ul>
							<h1> Lorem ipsum dolor </h1>
							<h2> sit amet, consectetur adipiscing </h2>
						
							<?php 
						
							$message = "elit. Duis lorem felis, rhoncus sed facilisis at, dignissim sed arcu. Pellentesque sit amet, consectetur adipiscing elit. Duis lorem felis, rhoncus sed facilisis at, dignissim sed arcu. Pellentesque habitant morbi tristique";
							$id =1;
						
    						$count_charts = strlen($message); 
                 
    						if($count_charts > 80) 
    						{ 
                 
   							$message = substr ($message, 0, 80)."..."; 
     
    						echo '<p>'.$message.'</p>'; 
    						echo '<view><a href="#" onClick="javascript:content'.$id.'()" > read more </a></view>' ;
             
    						}; 
     
							?> 
									
						</ul>
				</div>
				<div class="shouts">
					<star></star>
						<ul>
							<h1> Lorem ipsum dolor </h1>
							<h2> sit amet, consectetur adipiscing </h2>
							<?php 
						
							$message = "elit. Duis lorem felis, rhoncus sed facilisis at, dignissim sed arcu. Pellentesque sit amet, consectetur adipiscing elit. Duis lorem felis, rhoncus sed facilisis at, dignissim sed arcu. Pellentesque habitant morbi tristique";
							$id =2;
						
    						$count_charts = strlen($message); 
                 
    						if($count_charts > 80) 
    						{ 
                 
   							$message = substr ($message, 0, 80)."..."; 
     
    						echo '<p>'.$message.'</p>'; 
    						echo '<view><a href="#" onClick="javascript:content'.$id.'()" > read more </a></view>' ;
             
    						}; 
     
							?>
							
						</ul>
				</div>
				<div class="shouts">
					<star></star>
					<ul>
						<h1> Lorem ipsum dolor </h1>
						<h2> sit amet, consectetur adipiscing </h2>
						<p> elit. Duis lorem felis, rhoncus sed facilisis at, dignissim sed arcu. Pellentesque </p>
						<view> 
							<a href="www.google.be"> read more </a>
						</view>
					</ul>
				</div>
				<div class="shouts">
					<star></star>
					<ul>
						<h1> Lorem ipsum dolor </h1>
						<h2> sit amet, consectetur adipiscing </h2>
						<p> elit. Duis lorem felis, rhoncus sed facilisis at, dignissim sed arcu. Pellentesque </p>
						<view> 
							<a href="www.google.be"> read more </a>
						</view>
					</ul>
				</div>
				<div class="shouts">
					<star></star>
					<ul>
						<h1> Lorem ipsum dolor </h1>
						<h2> sit amet, consectetur adipiscing </h2>
						<p> elit. Duis lorem felis, rhoncus sed facilisis at, dignissim sed arcu. Pellentesque </p>
						<view> 
							<a href="www.google.be"> read more </a>
						</view>
					</ul>
				</div>
				<div class="shouts">
					<star></star>
					<ul>
						<h1> Lorem ipsum dolor </h1>
						<h2> sit amet, consectetur adipiscing </h2>
						<p> elit. Duis lorem felis, rhoncus sed facilisis at, dignissim sed arcu. Pellentesque </p>
						<view> 
							<a href="www.google.be"> read more </a>
						</view>
					</ul>
				</div>
			</div>
			<div id="message"><form>
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
					<a href="#" onMouseover="javascript:button()" >
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