<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "volunteam";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $status = 1;

        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO events (charity_name, description, address, contact_name, contact_number, contact_email, max_volunteers, status, title) 
        VALUES (:charity_name, :description, :address, :contact_name, :contact_number, :contact_email, :max_volunteers, :status, :title)");
        $stmt->bindParam(':charity_name', $_POST['charityName']);
        $stmt->bindParam(':description', $_POST['description']);
        $stmt->bindParam(':address', $_POST['address']);
        $stmt->bindParam(':contact_name', $_POST['contactName']);
        $stmt->bindParam(':contact_number', $_POST['contactNumber']);
        $stmt->bindParam(':contact_email', $_POST['contactEmail']);
        $stmt->bindParam(':max_volunteers', $_POST['maxVolunteers']);
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':title', $_POST['title']);

        $stmt->execute();

        echo "New records created successfully";
        header('Location: opps.php');
        }
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
    $conn = null;
