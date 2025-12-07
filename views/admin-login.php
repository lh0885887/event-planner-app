<h1 class="mt-3">Admin Login</h1>

<form method="post" action="<?= BASE_URL . '/index.php?route=verify' ?>" style="text-align: left;">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" aria-describedby="username">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Pasword</label>
        <input type="password" name="password" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Sign In</button>
</form>