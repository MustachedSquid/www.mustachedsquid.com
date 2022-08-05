<?php

    require_once 'config.php';
    require_once 'structure.php';

    function create_connection(): mysqli{
        // Create connection
        $conn = new mysqli(SERVERNAME, USERNAME, PASSWD, DBNAME);

        // Check connection
        if ($conn->connect_error) {
            create_header();
            create_content("Connection failed: " . $conn->connect_error);
            create_footer();
            die();
        }
        return $conn;
    }
?>
