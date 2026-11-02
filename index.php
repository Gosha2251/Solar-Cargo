<?php

require_once "auth.php";
?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Solar Cargo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Solar Cargo</h1>

    <?php if (isLoggedIn()): ?>
        <p>
            Sveiks,
            <?php echo escape($_SESSION["lietotajvards"]); ?>!
        </p>

        <p>
            Tava loma:
            <?php echo escape($_SESSION["loma"]); ?>
        </p>

        <?php if ($_SESSION["loma"] === "admin"): ?>
            <p>
                <a href="admin.php">Admin panelis</a>
            </p>
        <?php endif; ?>

        <p>
            <a href="logout.php">Iziet</a>
        </p>
    <?php else: ?>
        <p>Tu neesi pieslēdzies.</p>

        <p>
            <a href="login.php">Ieiet sistēmā</a>
        </p>
    <?php endif; ?>
</div>
</body>
</html>