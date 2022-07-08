<!doctype html>
<html lang="ru">
<head>
    <!-- Обязательные метатеги -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Test Form</title>
</head>
<body>
<div class="container">
    <div class="">
        <h1>Test Form</h1>
        <div id="message_add_user" class="alert " role="alert" style="display: none;">

        </div>
        <form id="add_user_id" action="/add-user" method=post
              oninput='password2.setCustomValidity(password2.value != password1.value ? "Passwords do not match." : "")'>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputLastName" class="form-label">Last Name</label>
                <input name="lastname" type="text" class="form-control" id="exampleInputLastName" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password1" class="form-label">Password</label>
                <input name="password1" type="password" class="form-control" id="password1" required>
            </div>
            <div class="mb-3">
                <label for="password2" class="form-label">Repeat password</label>
                <input name="password2" type="password" class="form-control" id="password2">
            </div>
            <button id="button_submit_form_id" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="">

    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="/public/js/script.js"></script>
</body>
</html>
