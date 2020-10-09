<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | PHPMotors.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./css/styles.css" />
</head>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpMotors/snippets/navBar.php'; ?>
    <div class="main">
        <h2 class="mainHeader">Welcome to PHP Motors!</h2>
        <div class="mainImageContainer">
            <div class="mainItemDetails">
                <h3>DMC Delorean 3 cup holders superman doors fuzzy dice!</h3>

                <button class="btn btn-primary">Own Today</button>
            </div>
        </div>
    </div>

    <div class="wrapController">
        <div class="productInfoContainer">
            <h3 class="itemDetailHeader">Delorean Upgrades</h3>
            <div class="itemOptionsContainer">
                <div class="productUpgrade">
                    <img src="/phpMotors/images/upgrades/flux-cap.png" alt="Flux Capacitor" />
                    <div class="upgradeName">Flux Capacitor</div>
                </div>
                <div class="productUpgrade">
                    <img src="/phpMotors/images/upgrades/flame.jpg" alt="Flame decal" />
                    <div class="upgradeName">Flame Decal</div>
                </div>
            </div>
            <div class="itemOptionsContainer">
                <div class="productUpgrade">
                    <img src="/phpMotors/images/upgrades/bumper_sticker.jpg" alt="Bumber Stickers" />
                    <div class="upgradeName">Bumber Stickers</div>
                </div>
                <div class="productUpgrade">
                    <img src="/phpMotors/images/upgrades/hub-cap.jpg" alt="Hub Caps" />
                    <div class="upgradeName">Hub Caps</div>
                </div>
            </div>
        </div>
        <div class="productInfoContainer">
            <h3 class="itemDetailHeader">DMC Delorean Reviews</h3>
            <ul class="reviews">
                <li class="reviewItem">
                    "So fast its almost like traveling in time." (4/5)
                </li>
                <li class="reviewItem">"Coolest ride on the road." (4/5)</li>
                <li class="reviewItem">"I'm feeling Marty McFly!" (5/5)</li>
                <li class="reviewItem">
                    "The most futuristic ride of our day. " (4.5/5)
                </li>
                <li class="reviewItem">"80's livin and I love it!" (5/5)</li>
            </ul>
        </div>
    </div>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/phpMotors/snippets/footer.php'; ?>
</body>

</html>