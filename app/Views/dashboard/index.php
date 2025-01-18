<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h1>Selamat Datang, <?= session()->get('username'); ?></h1>
    <p>Role Anda: <?= session()->get('role'); ?></p>
    <a href="/logout">Logout</a>
</body>
</html>
