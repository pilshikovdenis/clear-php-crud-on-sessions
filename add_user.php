<?php

if (!empty($_POST)) {
    session_start();

    $_SESSION['users_list'][] = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email']
    ];

    header('Location: http://localhost/project1-crud-sessions/');
}
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
    <p>Please write your details in this form</p>
    <form method="post" action="">
        <div class="mb-3">
            <label for="inputFirstName" class="form-label">First name</label>
            <input type="text" class="form-control" id="inputFirstName" name="first_name">
        </div>
        <div class="mb-3">
            <label for="inputLastName" class="form-label">Last name</label>
            <input type="text" class="form-control" id="inputLastName" name="last_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>

