<h1 class="mt-3">Event Details</h1>
<hr>

<div style="text-align: left;">
    <h2 class="mt-3">Join us for <?= $event['title']; ?>!</h2>
    <ul>
        <li class="mt-3"><span style="font-weight: bold;">When: </span><?= date("M j, Y", strtotime($event['event_date'])); ?></li>
        <li><span style="font-weight: bold;">Where: </span><?= $event['location'] ?></li>
        <li><span style="font-weight: bold;">What to expect: </span><?= $event['description'] ?></li>
    </ul>
</div>

<hr>
<div>
    <h1 class="pt-3" style="text-decoration: underline;">Register Here:</h1>

    <form method="post" action="<?= BASE_URL . '/index.php?route=register' ?>" style="text-align: left;">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" aria-describedby="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control">
        </div>

        <!-- Hidden input to pass in event_id -->
        <input type="hidden" name="event_id" value="<?= $event['id']; ?>">

        <button type="submit" class="btn btn-success">Register</button>
    </form>
</div>