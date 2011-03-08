<?php

# configuratie bestand van mijn persoonlijke database
# waarin adres bestanden e.d. geplaatst kan worden.

// $user = je gebruikersnaam voor mysql 
// $password = het wachtwoord 
// $host = het adres van je mysql server, normaliter is dit localhost
// $dbname = de naam van je mysql database

$user= "rebot_inbox";
$password="lolebroek";
$host="localhost";
$dbname="rebot_inbox";

$db = mysql_connect ($host, $user, $password) or die ("Kan geen verbinding maken met de database ");
mysql_select_db ($dbname,$db);

?>