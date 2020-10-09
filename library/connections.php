<?php
/******
 * Proxy Connection to the phpmotors database
 */
function phpmotorsConnect(){
    $server = 'localhost';
    $dbname= 'phpmotors';
    $username = 'iClient';
    $password = 'PYpWe8tP4rMI63Vj';
    $dsn = "mysql:host=$server;dbname=$dbname";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    try {
        $link = new PDO($dsn, $username, $password, $options);
        return $link;
    } catch(PDOException $e) {
        header('Location: http://localhost:8080/phpMotors/view/500.php');
        exit();
    }
}
?>