<!DOCTYPE html>
<html lang="it">
    <head> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <?php
        if (isset($_GET["password"]) && isset($_GET["username"])) {
            $inserisci_password = $_GET["password"];
            $inserisci_username = $_GET["username"];

            if ($inserisci_password == "passwordSegreta" && $inserisci_username == "utente") {
                echo "<h2> Username e Password corrette, BENVENUTO! </h2>";
                exit();
            }
            elseif (isset($_GET["contatore"]) && $_GET["contatore"] > 1) {
                $_GET["contatore"]--;
                echo "<h2> Username o Password errate, RIPROVA! </h2>";
                exit();
            }
            else {
                echo "<h2> NON HAI PIU TENTATIVI A DISPOSIZIONE! </h2>";
                exit();
            }
        }
    ?>
    </body>
    </html>