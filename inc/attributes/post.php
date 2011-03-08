<?php   
   $self = $_SERVER['PHP_SELF']; //the $self variable equals this file
    $ipaddress = ("$_SERVER[REMOTE_ADDR]"); //the $ipaddress var equals users IP
    include ('inc/attributes/db.php'); // for db details
    
    // defines a $connect variable, which when used
    // will attempt to connect to the databse using
    // details provided in config.php
    // if it fails, will display error - or die();
    $connect = mysql_connect($host,$username,$password) or die('<p class="error">Unable to connect to the database server at this time.</p>');
    
    // connect to database using details provided
    // and uses the $connect variable above
    // if it fails, will return error - or die();
    mysql_select_db($database,$connect) or die('<p class="error">Unable to connect to the database at this time.</p>');
    
    
        // checks the POST to see if something has been submitted
        if(isset($_POST['send'])) {
            // are any of the fields empty? the || means 'or'
            if(empty($_POST['title']) || empty($_POST['author']) || empty($_POST['email']) || empty($_POST['message'])) {
                echo('<p class="error" onMouseOver="javascript:writemessage()" >Please fill in all fields</p>');
            } else	{ 
            	if(strlen($_POST['message']) < 80)	{
            			echo('<p class="error" onMouseOver="javascript:writemessage()" >Please fill in at least 80 characters</p>');
            	} else	{
            		
            
                // if there are no empty fields, insert into the database:
        
                // escape special characters to stop xss and sql injecting
                // we take the 'name' and 'post' parts from the POST
                // and run it through htmlspecialchars()
                // this stops users sending HTML code, as it could be malicious
                //
                // also runs through mysql_real_escape_string()
                // stops users sending SQL code, which could be used to access the db
                $title = htmlspecialchars(mysql_real_escape_string($_POST['title'])); 
                $author = htmlspecialchars(mysql_real_escape_string($_POST['author'])); 
                $email = htmlspecialchars(mysql_real_escape_string($_POST['email'])); 
                $message = mysql_real_escape_string(nl2br($_POST['message']));
                $message = str_replace("\r\n"," ",$message);               
            
                    // this is our SQL string to insert shouts into db
                    $sql = "INSERT INTO inbox SET title='$title', author='$author', email='$email', message='$message', ipaddress='$ipaddress';";
            
                        // we run the SQL string now
                        // if it succeeds, display message
                        if (@mysql_query($sql)) {
                            echo('<p class="success">Your message has been succesfully send</p>');
                        } else {
                            // if it errors, send message
                            echo('<p class="error">There was an unexpected error when posting your shout.</p>');
                        }
            	}
            }
        }
    
        // now we retrieve the 6 latest shouts from the db
        $query = "SELECT * FROM inbox ORDER BY `id` DESC LIMIT 6;";
    
        // run the query. if it fails, display error
        $result = @mysql_query("$query") or die('<p class="error">There was an unexpected error grabbing shouts from the database.</p>');
        

        
?>