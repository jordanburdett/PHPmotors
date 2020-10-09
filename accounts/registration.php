<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | PHPMotors.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/phpMotors/css/styles.css">
    <link rel="stylesheet" href="/phpMotors/css/loginForms.css">
</head>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpMotors/snippets/navBar.php'; ?>

    <h1 class="mainHeader">Register</h1>

    <form method="post">
        <div class="inputContainer">

            <label for="clientFirstname">First Name</label>
            <input placeholder="First Name" type="text" name="clientFirstname" id="clientFirstname">

            <label for="clientLastname">Last Name</label>
            <input placeholder="Last Name" type="text" name="clientLastname" id="clientLastname">

            <label for="clientEmail">Email</label>
            <input placeholder="Email" type="email" name="clientEmail" id="clientEmail">


            <label for="clientPassword">Password</label>
            <input placeholder="Password" type="password" name="clientPassword" id="clientPassword">

            <button type="submit" class="btn">Create Account</button>
        </div>

    </form>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpMotors/snippets/footer.php'; ?>
</body>

</html>