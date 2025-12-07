<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="upcoming-events">Event Planner</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="upcoming-events">Upcoming Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admin-login">Admin Login</a>
        </li>
        <?php if ((isset($_SESSION['isAdmin'])) && $_SESSION['isAdmin'] == true): ?>
          <li class="nav-item">
            <a class="nav-link" href="event-form">Create New Event</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>