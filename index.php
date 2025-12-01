<?php
require_once __DIR__ . '/controllers/siteController.php';

// Define base url
define('BASE_URL', '/event-planner-final');

$route = $_GET['route'] ?? 'upcoming-events';

// Front controller. Reads $_GET['route'] and loads correct controller function
switch ($route) {
    case 'upcoming-events':
        showEvents();
        break;
    case 'events/show': //TODO: Hook up event details
        showOneEvent();
        break;
    case 'admin-login':
        showPage($route);
        break;
    case 'placeholder':
        break;

    default:
        showPage('upcoming-events');
}