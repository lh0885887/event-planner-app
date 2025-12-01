<?php
require_once __DIR__ . '/../models/eventModel.php';

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
    include __DIR__ . '/../views/event.php';
    include $footer;
}