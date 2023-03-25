<?php
    $dsn = 'mysql:host=s465z7sj4pwhp7fn.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=cf92s5dn4q6jkov1';
    $username = 'vvff5qwejsq5djcj';
    $password = 's3t41rzl0gkg04b0';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>