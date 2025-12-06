<?php

require_once "db.php";

// For event details
function register($event_id, $name, $email): void
{
    $pdo = get_pdo();

    $stmt = $pdo->prepare("
    INSERT INTO registrations (event_id, name, email)
    VALUES (:event_id, :name, :email)
    ");

    $stmt->execute([
        ":event_id" => $event_id,
        ":name" => $name,
        ":email" => $email
    ]);
}
