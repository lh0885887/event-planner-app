<h1 class="mt-3">Upcoming Events</h1>

<?php if (empty($events)): ?>
    <p>No upcoming events were found.</p>
<?php else: ?>
    <table class="table">
        <th scope="col">Title</th>
        <th scope="col">Date</th>
        <th scope="col">Location</th>
        <?php foreach ($events as $event): ?>
            <tr>
                <td>
                    <!-- TODO: Add proper href to details page -->
                    <?= $event['title']; ?>
                </td>
                <td><?= $event['event_date']; ?></td>
                <td><?= $event['location']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endif; ?>