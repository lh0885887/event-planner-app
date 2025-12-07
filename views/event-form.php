<h1 class="mt-3">Create a New Event</h1>

<form method="post" action="<?= BASE_URL . '/index.php?route=event-created' ?>" style="text-align: left;">
    <div class="mb-3">
        <label for="event_title" class="form-label">Event Title</label>
        <input type="text" name="event_title" class="form-control" aria-describedby="title">
    </div>
    <div class="mb-3">
        <label for="event_date" class="form-label">Event Date</label>
        <input type="date" name="event_date" class="form-control" aria-describedby="event date">
    </div>
    <div class="mb-3">
        <label for="event_location" class="form-label">Event Location</label>
        <input type="text" name="event_location" class="form-control" aria-describedby="location">
    </div>
    <div class="mb-3">
        <label for="event_description" class="form-label">Event Description</label>
        <input type="text" name="event_description" class="form-control" aria-describedby="description">
    </div>

    <button type="submit" class="btn btn-success">Create Event</button>
</form>