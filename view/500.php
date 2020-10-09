<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template | PHPMotors.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <nav>
        <ul>
            <li class="navImage">
                <h1 style="display:none;">PHPMotors</h1>
                <img src="../images/site/logo.png" alt="Company Logo" class="navImage" />
            </li>
            <li class="navItem"><a>Home</a></li>
            <li class="navItem"><a>Classic</a></li>
            <li class="navItem"><a>Sports</a></li>
            <li class="navItem"><a>SUV</a></li>
            <li class="navItem"><a>Trucks</a></li>
            <li class="navItem"><a>Used</a></li>
            <li class="navItem flexAlignRight"><a>My Account</a></li>
        </ul>
    </nav>

    <h1>ERROR</h1>
    <p>Sorry our server seems to be experiencing some technical difficulties. Please check back later</p>
    <hr>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpMotors/snippets/footer.php'; ?>

    <script src="javascript.js"></script>
</body>

</html>