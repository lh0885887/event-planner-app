<?php

require_once __DIR__ . '/../models/eventModel.php';
require_once __DIR__ . '/../models/registrationModel.php';
require_once __DIR__ . '/../models/adminModel.php';

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

// EVENTS
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

function createEvent()
{
    $title = $_POST['event_title'];
    $date = $_POST['event_date'];
    $location = $_POST['event_location'];
    $description = $_POST['event_description'];

    create($title, $date, $location, $description);

    header('Location: ' . BASE_URL . "/index.php?route=upcoming-events");
    exit;
}

function editEvent()
{

    global $header;
    global $footer;

    $id = $_GET['id'];
    $event = get_event($id);

    include $header;
    include __DIR__ . '/../views/update-event.php';
    include $footer;
}

function updateEvent()
{
    $id = $_POST['id'];
    $title = $_POST['event_title'];
    $date = $_POST['event_date'];
    $location = $_POST['event_location'];
    $description = $_POST['event_description'];

    update($id, $title, $date, $location, $description);

    header('Location: ' . BASE_URL . "/index.php?route=upcoming-events");
    exit;
}

function deleteEvent()
{
    $id = $_POST['id'];
    delete_event($id);

    header('Location: ' . BASE_URL . "/index.php?route=upcoming-events");
    exit;
}


// REGISTRATION
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

// ADMIN LOGIN
function verifyAdmin()
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admins = getAdmins();

    foreach ($admins as $admin) {
        if (! empty($username) && password_verify($password, $admin['password_hash'])) {

            $_SESSION['isAdmin'] = true;
            header('Location: ' . BASE_URL . "/index.php?route=upcoming-events");
            exit;
        } else {
            $_SESSION['isAdmin'] = false;
        }
    }

    header('Location: ' . BASE_URL . "/index.php?route=admin-login");
    exit;
}

function showRegistrations()
{
    global $header;
    global $footer;

    $registrations = getRegistrations();

    include $header;
    include __DIR__ . '/../views/registrations.php';
    include $footer;
}
