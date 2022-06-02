<?php
    
    $host = 'yogalife.mysql.database.azure.com';
    $username = 'exdwxphpya';
    $password = '@Kvodr2001';
    $db_name = 'yogalife';

    $conn = mysqli_init(); 
    mysqli_ssl_set($conn,NULL,NULL, "../SSL/DigiCertGlobalRootCA.crt.pem", NULL, NULL);
    mysqli_real_connect($conn, $host, $username, $password, $db_name, 3206, MYSQLI_CLIENT_SSL);
    if (mysqli_connect_errno($conn)) {
        die('Failed to connect to MySQL: '.mysqli_connect_error());
        }
?> 