<?php

include "db.php";

function get_upcoming_events() {
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
function get_event($id) {
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