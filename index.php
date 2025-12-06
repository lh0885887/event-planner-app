<?php
session_start();
require_once __DIR__ . '/controllers/siteController.php';
require_once __DIR__ . '/models/registrationModel.php';

// Define base url
define('BASE_URL', '/dashboard/App Fall25/event-final-project/event-planner-app');


$route = $_GET['route'] ?? 'upcoming-events';

switch ($route) {

    // Routes that dont need data
    case 'admin-login':
        showPage($route);
        break;

    // Shows upcoming events
    case 'upcoming-events':
        showEvents();
        break;

    // Individual details for event
    case 'event-details':
        showOneEvent();
        break;

    // Pointer for event-details form data & direct to success page
    case 'register':
        handleRegistration();
        // header('Location: ' . BASE_URL . "/index.php?route=register-success");
        // exit;
        break;

    case 'register-success':
        showRegisterSuccess();
        break;

    default:
        showEvents();
}
