<!DOCTYPE html>
<html lang="it">
    <head> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
        <h1> Tabella come richiesto </h1>
        <?php
        echo '<table border="1">';
        for($i=0; $i<$_GET["rows"]; $i++) {
            echo '<tr>';
            for ($k=0; $k<$_GET["cols"]; $k++) {
                echo '<td>' . $_GET["text"] . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    ?>
    </body>
    </html>