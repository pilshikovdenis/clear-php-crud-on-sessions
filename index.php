<?php
session_start();
print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <h2>Simple CRUD application v1(only functional style, storage in sessions)</h2>
    <p>some text about me</p>

    <div class="button-container mb-2">
        <button type="button" class="btn btn-success" onclick="window.location='add_user.php'">Add</button>
        <button type="button" class="btn btn-danger" onclick="window.location='clear_all_data.php'">Clear all data</button>
    </div>
    <table class="table table-dark table-striped">
        <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($_SESSION)): ?>
            <?php foreach ($_SESSION['users_list'] as $row): ?>
                <tr>
                    <td><?= $row['first_name'] ?? '' ?></td>
                    <td><?= $row['last_name'] ?? '' ?></td>
                    <td><?= $row['email'] ?? '' ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>

