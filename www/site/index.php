<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
</head>

<body>

    <h1>Hello World!</h1>

    <h2>PHP</h2>

    <?php

        echo '<p>Hello World from PHP!';

    ?>


    <h2>MySQL</h2>

    <?php

        $serverName   = 'lamp-db';
        $databaseName = 'helloWorld';
        $username     = 'root';
        $password     = 'root';

        try {
            $conn = new PDO("mysql:host=$serverName;dbname=$databaseName", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch(PDOException $e) {
            die('Connection failed: ' . $e->getMessage());
        }

        $stmt = $conn->query('SELECT * FROM messages LIMIT 1');
        $message = $stmt->fetch();

        echo '<p>' . $message['content'];
    ?>

</body>
</html>

