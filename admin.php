<?php

require_once "auth.php";

requireRole("admin");
?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Admin panelis</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Admin panelis</h1>

    <p>Šo lapu drīkst apskatīt tikai administrators.</p>

    <p>
        Lietotājs:
        <?php echo escape($_SESSION["lietotajvards"]); ?>
    </p>

    <a href="index.php">Atpakaļ</a>
</div>
</body>
</html>