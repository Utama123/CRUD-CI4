<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <h1>Form Registrasi</h1>
    <?php if (session()->getFlashdata('errors')): ?>
        <ul>
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </ul>
    <?php endif; ?>

    <form action="/register" method="post">
        <?= csrf_field() ?>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?= old('username') ?>" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label for="confirm_password">Konfirmasi Password:</label>
        <input type="password" name="confirm_password" id="confirm_password" required>
        <br>
        <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="/login">Login</a></p>
</body>
</html>
