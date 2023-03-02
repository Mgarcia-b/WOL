<?php

// Create connection
$db = new mysqli("dbwol.crgpm7pxclx2.us-east-2.rds.amazonaws.com", "autuser", "Pinoccio..11", "DBTEST", 3306);
if ($db->connect_error) {
    die('Error de Conexión (' . $db->connect_errno . ') '
            . $db->connect_error);
}
// $db = new mysqli("10.10.2.51", "sistemas", "#Tum@dre!", "medios", 3306);
// if ($db->connect_error) {
//     die('Error de Conexión (' . $db->connect_errno . ') '
//             . $db->connect_error);
// }
?>