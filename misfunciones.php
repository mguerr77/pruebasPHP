<?php

// Archivo: funciones.php

function juegoDeColores() {
  // Defino los colores disponibles
  $colores = ["rojo", "verde", "azul", "amarillo", "naranja"];

  // El programa elige un color al azar
  $colorElegido = $colores[rand(0,4)];
  $coloresProbados = array();
  // Procesa la entrada del formulario si se ha enviado
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $colorUsuario = $_POST["color"];

    if ($colorUsuario == $colorElegido) {
      echo "¡Correcto! El color era " . $colorElegido . ".\n";
    }
    else 
    {
      echo "Incorrecto. Inténtalo de nuevo.\n";
      array_push($coloresProbados,$colorUsuario);
    }
  else
    {
  // Genera el formulario HTML
  echo "<h1>Adivina el color</h1>";
  echo "<form method='post'>";
  foreach ($colores as $color) {
    //if ($color == $colorElegido[array_search($color, $coloresProbados)])
    //{}
    //else{
        echo "<input type='radio' name='color' id='$color' value='$color'>";
        echo "<label for='$color'>$color</label><br>";
    //}    
}
  echo "<button type='submit'>Adivinar</button>";
  echo "</form>";
  }
}
?>