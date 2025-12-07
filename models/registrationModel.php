<?php

require_once "db.php";

function getRegistrations()
{
    $pdo = get_pdo();

    $stmt = $pdo->prepare("
        SELECT r.name, r.email, e.title
        FROM registrations r
        JOIN events e ON r.event_id = e.id
        ORDER BY e.title, r.name
    ");

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getTitles()
{
    $pdo = get_pdo();

    $stmt = $pdo->prepare("
    SELECT e.title from
    ");

    $stmt->execute();

    return $stmt->fetchAll();
}

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
