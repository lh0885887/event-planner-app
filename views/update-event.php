<h1 class="mt-3">Update Event Details</h1>

<form method="post" action="<?= BASE_URL . '/index.php?route=event-updated' ?>" style="text-align: left;">
    <div class="mb-3">
        <label for="event_title" class="form-label">Event Title</label>
        <input type="text" name="event_title" class="form-control" aria-describedby="title" value="<?= $event['title'] ?>">
    </div>
    <div class="mb-3">
        <label for="event_date" class="form-label">Event Date</label>
        <input type="date" name="event_date" class="form-control" aria-describedby="date" value="<?= date('Y-m-d', strtotime($event['event_date'])) ?>">
    </div>
    <div class="mb-3">
        <label for="event_location" class="form-label">Event Location</label>
        <input type="text" name="event_location" class="form-control" aria-describedby="location" value="<?= $event['location'] ?>">
    </div>
    <div class="mb-3">
        <label for="event_description" class="form-label">Event Description</label>
        <input type="text" name="event_description" class="form-control" aria-describedby="description" value="<?= $event['description'] ?>">
    </div>

    <input type="hidden" name="id" value="<?= $event['id'] ?>">

    <button type="submit" class="btn btn-info">Update Event</button>
</form>