<?php
require_once 'db.php';

function getAdmins()
{
    $pdo = get_pdo();

    $stmt = $pdo->prepare("
    SELECT *
    FROM admins
    ");

    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
