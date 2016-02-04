<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "volunteam";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $img = "img/";

        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO feed (person_name, charity_name, comment, image) 
        VALUES (:person_name, :charity_name, :comment, :image)");

        $stmt->bindParam(':person_name', $_POST['personName']);
        $stmt->bindParam(':charity_name', $_POST['charityName']);
        $stmt->bindParam(':comment', $_POST['comment']);
        $stmt->bindValue(':image', $img . $_POST['image']);

        $stmt->execute();

        echo "New records created successfully";
        header('Location: index.php');
        }
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
    $conn = null;
