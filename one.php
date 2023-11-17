<?php
  if (isset($_POST["enlace"])) {
    $enlace = $_POST["enlace"];

    // Obtener el ID del enlace
    $id = substr($enlace, 18, 40);

    // Agregar otro dominio y unos / más
    $nuevo_enlace = "https://api.onedrive.com/v1.0/shares/" . $id . "/root/content";

    // Mostrar el nuevo enlace
    echo $nuevo_enlace;
  }
?>
