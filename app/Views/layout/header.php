<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Sistem Informasi Sekolah' ?></title>
</head>
<body>
    <div style="margin-bottom: 20px; text-align: right; background-color: #f0f0f0; padding: 10px;">
        <?php if (session()->get('logged_in')): ?>
            <p>Halo, <?= esc(session()->get('username')) ?> | <a href="/logout">Logout</a></p>
        <?php endif; ?>
    </div>
