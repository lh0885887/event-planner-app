<?php
session_start();
require_once __DIR__ . '/controllers/siteController.php';
require_once __DIR__ . '/models/registrationModel.php';
require_once __DIR__ . '/models/adminModel.php';

// Define base url
define('BASE_URL', '/dashboard/App Fall25/event-final-project/event-planner-app');


$route = $_GET['route'] ?? 'upcoming-events';

switch ($route) {

    // Routes that dont need data
    case 'admin-login':
    case 'event-form':
        showPage($route);
        break;

    case 'verify':
        verifyAdmin();
        break;

    // Shows upcoming events
    case 'upcoming-events':
        showEvents();
        break;

    // EVENT ACTIONS
    case 'event-created':
        createEvent();
        break;

    case 'update-event':
        editEvent();
        break;
    case 'event-updated':
        updateEvent();
        break;

    case 'delete':
        deleteEvent();
        break;

    // Individual details for event
    case 'event-details':
        showOneEvent();
        break;

    // Pointer for event-details form data & direct to success page
    case 'register':
        handleRegistration();
        break;

    case 'register-success':
        showRegisterSuccess();
        break;

    case 'registrations':
        showRegistrations();
        break;

    default:
        showEvents();
}
