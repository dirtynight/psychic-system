<?PHP
// Datei: conf.inc.php

// Können wir php und darüber mit einer DB (MySQL) 
// verbinden ?


define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PASS', '');

$db_link = @mysql_connect (MYSQL_HOST,
                           MYSQL_BENUTZER,
                           MYSQL_KENNWORT);

if(!$db_link){
    die("Sach mal einen Satz mit X");
    } else {
    echo "YO ! YO YO !!!";
    }
    
    
    ?>
    
