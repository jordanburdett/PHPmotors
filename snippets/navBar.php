<nav>
    <ul>
        <li class="navImage">
            <img src="/phpMotors/images/site/logo.png" alt="Company Logo" class="navImage" />
        </li>
        <?php
        if ($navList != NULL) {
            echo $navList;
        }
        ?>
        <li class="navItem flexAlignRight"><a href="/phpMotors/accounts/index.php?action=login">My Account</a></li>
    </ul>
</nav>