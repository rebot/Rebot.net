<?php 

include ('attributes/db.php');
$connect = mysql_connect($host,$username,$password);
mysql_select_db($database,$connect);
$query = "SELECT * FROM inbox ORDER BY `id` DESC LIMIT 4;";
$result = @mysql_query("$query");

?>

<?php

while ($row = mysql_fetch_array($result)) {
        
$eid = stripslashes($row['id']);
$edate = stripslashes($row['date']);
$etitle = stripslashes($row['title']);
$eauthor = stripslashes($row['author']);
$eemail = stripslashes($row['email']);
$emessage = stripslashes($row['message']);
            
$emessage = preg_replace('#(^|[\n ])((http|https|ftp|ftps)://[\w\#$%&~/.\-;:=,?@\[\]\(\)+]*)#sie', "'\\1<a href=\"'.trim('\\2').'\" target=\"_blank\" rel=\"nofollow\">\\2'.(strlen('\\2')>30?substr('\\2', strlen('\\2')-10, strlen('\\2')):'').'</a>'", $emessage);
$emessage = preg_replace("#(^|[\n ])((www|ftp)\.[\w\#$%&~/.\-;:=,?@\[\]\(\)+]*)#sie", "'\\1<a href=\"http://'.trim('\\2').'\" target=\"_blank\" rel=\"nofollow\">\\2'.(strlen('\\1')>30?substr('\\2', strlen('\\2')-10, strlen('\\2')):'').'</a>'", $emessage);
            
// Woop! We can use Gravatars aswell!!
$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5(strtolower($eemail))."&size=250"; 


//$id =1;
//$title = "Dit is een test";
//$today = date("d/m/y H:i");
//$author = "a Genius";
//$message = "Morbi works lacinia lacus luctus ultricies. Integer ultricies, tellus non posuere tristique, nisl nisl volutpat lorem, ac iaculis libero purus pharetra eros. Proin tincidunt quam eget risus ultrices eget aliquam elit blandit. Maecenas eros erat, fringilla quis cursus quis, rhoncus non risus. Donec tempus massa vitae diam dignissim nec tempus augue pharetra. Duis lorem arcu, sagittis ac convallis eu, ullamcorper vitae ante. Proin gravida nulla in justo convallis non pellentesque sem pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam laoreet lacus a justo tincidunt tincidunt. Phasellus ut pretium justo. Vivamus eget lorem metus, at malesuada nisl. Nulla bibendum, lorem vitae tincidunt pellentesque, nunc libero pretium tellus, in sollicitudin felis ipsum at dui. Morbi pulvinar, neque sed dapibus elementum, magna erat imperdiet mauris.";
//$photo = "http://dl.dropbox.com/u/4981807/bomb.png";

echo '<script type="text/javascript">';

echo 'function content'.$eid.'(){';
echo "document.getElementById('js-title').innerHTML ='<ul><h1>$etitle</h1></ul>';";
echo "document.getElementById('js-date').innerHTML ='$edate';";
echo "document.getElementById('js-author').innerHTML ='$eauthor';";
echo "document.getElementById('js-message').innerHTML ='<ul><p>$emessage</p></ul>';";
echo "document.getElementById('js-photo').src ='$grav_url';";
echo "document.getElementById('js-submit').style.visibility='hidden';";
echo '};';

echo '</script>'; 

};

?>

<script type="text/javascript">

function writemessage(){
		document.getElementById('js-title').innerHTML ='<input placeholder="Title" name="title" maxlength="25" style="width: 100%; height: 35px; padding: 8.5px 0px 8.5px 8.5px; font-size: 15px; font-weight: bold; border: 0px; background-image: url(http://dl.dropbox.com/u/4981807/title-bar.png); background-size: 35px; font-family: helvetica;" />';
		document.getElementById('js-author').innerHTML ='<input placeholder="Name" name="author" maxlength="10" style="position: absolute; width: 100%; margin: -9px 0px 0px -114px; padding: 9px 3px 7px 114px; border: 0px; border-bottom: 1px dashed #B4B4B4; background-color: transparent; float: left; font-size: 12px; font-weight: normal; font-family: helvetica; font-weight: bold; color: #388819;" />';
		document.getElementById('js-message').innerHTML ='<ul style="padding-left: 0px;"><textarea placeholder="message" name="message" maxlength="1000" rows="12.8" style="width: 100%; max-width: 100%; height: 100%; margin: -19px 0px 0px -1px; padding: 19px 15px 0px 34px; border: 0px; /*border-right: 1px dashed #B4B4B4;*/ background-color: transparent; font-size: 12px; font-weight: normal; font-family: helvetica; line-height: 15px; text-align: justify;" ></textarea></ul>';
		document.getElementById('js-submit').style.visibility='visible';
		};

function button(){
		document.getElementById('js-button').style.background='-webkit-gradient(linear, left top, left bottom, from(#43B8FD), to(#329AEB))';
		document.getElementById('js-button').style.color='white';
		document.getElementById('js-button').style.border='1px solid #8C8C8C';
		};
		
</script>