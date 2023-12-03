<!DOCTYPE html>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
    body {
      background-color: <?php echo $_POST['colore_preferito']; ?>;
    }
  </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<div class="container  d-flex justify-content-center align-items-center">
<h1>
<?php 
if ($_POST['password'] == "info2023"){
    echo "PASSWORD: esatta";
} else{
    echo "PASSWORD: sbagliata";
}
?>
<div class="container d-flex justify-content-center align-items-center">
<h5><a href="index.html">Tornare alla pagina iniziale</a></h5>
</div>
</div>

<div class="container text-center min-vh-100">
  <div class="row">
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo "Nome:";
    }
    ?>
    </div>
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo $_POST['nome'];
    }
    ?>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo "Cognome:";
    }
    ?>
    </div>
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo $_POST['cognome'];
    }
    ?>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo "Email:";
    }
    ?>
    </div>
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo $_POST['email'];
    }
    ?>
    </div>
  </div>


  <div class="row">
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo "Data di nascita:";
    }
    ?>
    </div>
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo $_POST['nascita'];
    }
    ?>
    </div>
  </div>

  <div class="row">
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo "Colore preferito";
    }
    ?>    </div>
    <div class="col">
    <?php 
    if ($_POST['password'] == "info2023"){
        echo $_POST['colore_preferito'];
    }
    ?>
    </div>
  </div>
</div>
<?php   
$colore = $_POST['colore_preferito'];
echo "body bgcolor = $colore"
?>
</body>