<?php
$grouped = [];

foreach ($registrations as $reg) {
    // Creates an assoc array for each unique title, then assigns each unique record to it.
    $grouped[$reg['title']][] = $reg;
}
?>

<h1 class="mt-3">Registrations</h1>
<br>

<!-- EXAMPLE -->
<!-- <pre>var_dump($grouped)</pre> -->

<?php if (empty($grouped)): ?>
    <p>No registrations were found.</p>
<?php else: ?>
    <?php foreach ($grouped as $title => $regs): ?>
        <h2 class="mt-4"><?= $title ?></h2>
        <hr>

        <ul class="list-unstyled">
            <?php foreach ($regs as $r): ?>
                <li>
                    <strong><?= $r['name'] ?></strong><br>
                    <small><?= $r['email'] ?></small>
                </li>
            <?php endforeach; ?>
        </ul>

    <?php endforeach; ?>
<?php endif; ?>