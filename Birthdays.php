#!/usr/local/bin/php
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title> My First PHP Embedded Page </title>
</head>
</html>
<body>
<p>
    <?php
    date_default_timezone_set('America/Los_Angeles');
    for ($year= 1995; $year<= 2015; $year++){
        $bday= mktime(0,0,0,8,1,$year);
        echo date('n/j/Y', $bday), " was a ", date('l', $bday), "<br/>";
        $bday+= 24*3600*365;
    }
    ?>
</p>
</body>