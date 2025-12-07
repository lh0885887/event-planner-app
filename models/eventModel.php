<?php

require_once "db.php";

function get_upcoming_events()
{
    $pdo = get_pdo();

    $stmt = $pdo->prepare("
    SELECT *
    FROM events
    WHERE event_date > CURRENT_DATE();
    ");
    $stmt->execute();
    return $stmt->fetchAll();
}

// For event details
function get_event($id)
{
    $pdo = get_pdo();

    $stmt = $pdo->prepare("
    SELECT *
    FROM events
    where events.id = :id
    ");

    $stmt->execute([
        ":id" => $id
    ]);

    return $stmt->fetch();
}

function delete_event($id): void
{
    $pdo = get_pdo();

    $stmt = $pdo->prepare("
    DELETE FROM events
    WHERE events.id = :id
    ");

    $stmt->execute([
        ":id" => $id
    ]);
}

function create($title, $event_date, $location, $description): void
{
    $pdo = get_pdo();

    $stmt = $pdo->prepare("
    INSERT INTO events (title, event_date, location, description)
    VALUES (:title, :event_date, :location, :description)
    ");

    $stmt->execute([
        ":title" => $title,
        ":event_date" => $event_date,
        ":location" => $location,
        ":description" => $description
    ]);
}

function update($id, $title, $event_date, $location, $description): void
{
    $pdo = get_pdo();

    $stmt = $pdo->prepare("
    UPDATE events
    SET title = :title, event_date = :event_date, location = :location, description = :description
    WHERE events.id = :id
    ");

    $stmt->execute([
        ":id" => $id,
        ":title" => $title,
        ":event_date" => $event_date,
        ":location" => $location,
        ":description" => $description
    ]);
}
