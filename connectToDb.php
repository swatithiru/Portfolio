<?php

$servername = "localhost";
$username = "swatithi_swati1";
$passworddb = "Selvi2510$";
$dbname = "swatithi_CreateDB";

try {
    
        $db = mysqli_connect($servername,$username,$passworddb,$dbname);
        //echo $db ? 'connected' : 'not connected';
    }
    catch(Exception $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
?>