<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (session()->getFlashdata('error')): ?>
        <p style="color: red;"><?= session()->getFlashdata('error'); ?></p>
    <?php endif; ?>
    <form method="post" action="/login">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="text" name="password" id="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
