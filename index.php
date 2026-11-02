<?php
session_start();
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

<?php if (isset($_SESSION["lietotajvards"])): ?>

    <p>
        Sveiks,
        <?php echo $_SESSION["lietotajvards"]; ?>!
    </p>

    <p>
        Tava loma:
        <?php echo $_SESSION["loma"]; ?>
    </p>

    <?php if ($_SESSION["loma"] == "admin"): ?>

        <a href="admin.php">
            Admin panelis
        </a>

        <br><br>

    <?php endif; ?>

    <a href="logout.php">
        Iziet
    </a>

<?php else: ?>

    <p>
        Tu neesi pieslēdzies.
    </p>

    <a href="login.php">
        Login
    </a>

<?php endif; ?>

</div>
</body>
</html>