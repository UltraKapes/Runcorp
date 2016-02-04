<?php

require_once("config/database.php");
$db = Database::getInstance();

$statement = $db->prepare("INSERT INTO opportunites VALUES (:name)");
$statement->execute([
    ':name' => "hello kapes"
]);
$db->commit();
