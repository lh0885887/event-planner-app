<?php

require_once __DIR__ . '/../models/eventModel.php';
require_once __DIR__ . '/../models/registrationModel.php';

$header = __DIR__ . '/../partials/header.php';
$footer = __DIR__ . '/../partials/footer.php';

function showPage($view)
{
    global $header;
    global $footer;

    $view = __DIR__ . "/../views/$view.php";
    include $header;
    include $view;
    include $footer;
}

function showEvents()
{
    global $header;
    global $footer;
    $events = get_upcoming_events();
    include $header;
    include __DIR__ . '/../views/upcoming-events.php';
    include $footer;
}

function showOneEvent()
{
    global $header;
    global $footer;

    $id = $_GET['id'];
    $event = get_event($id);

    include $header;
    include __DIR__ . '/../views/event-details.php';
    include $footer;
}



function handleRegistration()
{

    $event_id = $_POST['event_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    register($event_id, $name, $email);

    // store for next page
    $_SESSION['success_name'] = $name;
    $_SESSION['success_email'] = $email;

    header('Location: ' . BASE_URL . "/index.php?route=register-success");
    exit;
}

function showRegisterSuccess()
{
    global $header;
    global $footer;

    $name = $_SESSION['success_name'];
    $email = $_SESSION['success_email'];

    include $header;
    include __DIR__ . '/../views/register-success.php';
    include $footer;
}
