<h1>Hello World!</h1>

<h2>PHP</h2>

<?php

    echo 'Hello from PHP!!!';

?>


<h2>MySQL</h2>

<?php

    $serverName   = 'lamp-db';
    $databaseName = 'test';
    $username     = 'root';
    $password     = 'root';

    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    catch(PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }

    echo '<p>Connected successfully';

    $stmt = $pdo->query('SELECT * FROM messages LIMIT 1');

    $message = $stmt->fetch();

    echo '<p>' . $message['content'];
?>
