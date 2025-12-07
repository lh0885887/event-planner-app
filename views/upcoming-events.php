<h1 class="mt-3">Upcoming Events</h1>

<?php if (empty($events)): ?>
    <p>No upcoming events were found.</p>
<?php else: ?>
    <table class="table">
        <th scope="col">Title</th>
        <th scope="col">Date</th>
        <th scope="col">Location</th>
        <?php if ((isset($_SESSION['isAdmin'])) && $_SESSION['isAdmin'] == true): ?>
            <th>Edit Event</th>
            <th>Delete Event</th>
        <?php endif; ?>
        <?php foreach ($events as $event): ?>
            <tr>
                <td>
                    <!-- TODO: Add proper href to details page -->
                    <a href="event-details?id=<?= $event['id']; ?>"><?= $event['title']; ?></a>
                </td>

                <td><?= date("M j, Y", strtotime($event['event_date'])); ?></td>
                <td><?= $event['location']; ?></td>

                <?php if ((isset($_SESSION['isAdmin'])) && $_SESSION['isAdmin'] == true): ?>
                    <td>
                        <a href="update-event?id=<?= $event['id']; ?>"><button class="btn btn-info" style="font-weight: bold;">Edit</button></a>
                    </td>
                    <td>
                        <form method="post" action="<?= BASE_URL . '/index.php?route=delete' ?>">
                            <input type="hidden" name="id" value="<?= $event['id']; ?>">
                            <button type="submit" class="btn btn-danger" style="font-weight: bold;">Delete</button>
                        </form>
                    </td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>