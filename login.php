<?php

require_once "auth.php";
require_once "db.php";

$kluda = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lietotajvards = trim($_POST["lietotajvards"] ?? "");
    $parole = trim($_POST["parole"] ?? "");

    $sql = "SELECT * FROM lietotaji
            WHERE lietotajvards = ?";

    $stmt = $savienojums->prepare($sql);
    $stmt->bind_param("s", $lietotajvards);
    $stmt->execute();

    $rezultats = $stmt->get_result();

    if ($rezultats->num_rows == 1) {

        $lietotajs = $rezultats->fetch_assoc();

        if (
            password_verify(
                $parole,
                $lietotajs["parole_hash"]
            )
        ) {

            $_SESSION["id"] =
                $lietotajs["id"];

            $_SESSION["lietotajvards"] =
                $lietotajs["lietotajvards"];

            $_SESSION["loma"] =
                $lietotajs["loma"];

            header("Location: index.php");
            exit;

        } else {

            $kluda = "Nepareiza parole";

        }

    } else {

        $kluda = "Lietotājs nav atrasts";

    }
}

?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Solar Cargo Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<h1>Solar Cargo Login</h1>

<form method="POST">

    <input
        type="text"
        name="lietotajvards"
        placeholder="Lietotājvārds"
        required
    >

    <br><br>

    <input
        type="password"
        name="parole"
        placeholder="Parole"
        required
    >

    <br><br>

    <button type="submit">
        Ieiet
    </button>

</form>

<p>
    <?php echo escape($kluda); ?>
</p>

</div>
</body>
</html>