<?php $url_base = "http://localhost/crudphp/";
include "config.php";
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location: login.php");
  exit();
}

$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html>

<head>
  <title>Sistema ERP</title>
  <link rel="icon" href="imagen/favicon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
  <link rel="stylesheet" href="bootstrap/bootstrap-icons-1.11.1/bootstrap-icons.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5 {
      font-family: "Raleway", sans-serif
    }
  </style>
</head>

<body class="w3-light-grey">

  <!-- Top container -->
  <div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
    <span class="w3-bar-item w3-right">Logo</span>
  </div>

  <!-- Sidebar/menu -->
  <nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="w3-container w3-row">
      <div class="w3-col s8 w3-bar">
        <span>Usuario, <strong><?php echo $usuario['nombre']; ?></strong></span><br>
        <a href="logout.php" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i> Salir</a>
        <div class="image">
          <img src="imagen/<?php echo $usuario['imagen']; ?>" class="img-circle elevation-2" alt="User Image" width="50px" height="50px">
        </div>
      </div>
    </div>
    <hr>
    <div class="w3-container">
      <h5>Dashboard</h5>
    </div>
    <div class="w3-bar-block">
      <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
      <a href="readcliente.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Clientes</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-handshake-o"></i>  Proveedores</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-lightbulb-o"></i>  Productos</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file-text"></i>  Ventas</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-usd"></i>  Compras</a>
      <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
    </div>
  </nav>


  <!-- Overlay effect when opening sidebar on small screens -->
  <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

  <!-- !PAGE CONTENT! -->
  <div class="w3-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="w3-container" style="padding-top:22px">