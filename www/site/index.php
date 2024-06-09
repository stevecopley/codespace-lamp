<h1>Hello World!</h1>

<h2>PHP</h2>

<?php

    echo 'Hello from PHP!!!';

?>


<h2>MySQL</h2>

<?php

    $serverName   = "127.0.0.1";
    $databaseName = "test";
    $username     = "root";
    $password     = "root";

    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
    } 
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
