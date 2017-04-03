
<?php

require_once("function_AutoLoad.php");
require_once("cookie_ctl.php");
require_once("../config/config.inc.php");
require_once("../config/db.inc.php");

$agenc = new agencia("Agencia Actors");
$x = $agenc->cercarPelicules(trim($_POST['str']));
/*
  foreach ($x as $codigo => $nombre) {
  $peli = new pelicula('','','','','','','','','');
  $peli = $nombre;
  $nom = $peli->getNom();
  $id = $peli->getIdPelicula();
  $elementos_json[] = "\"$id\": \"$nom\"";
  }

  echo "{" . implode(",", $elementos_json) . "}" */

$texto = strtolower(trim($_POST["str"]));

$sugerencias = array();
foreach ($x as $indice => $nombre) {
    $peli = new pelicula('', '', '', '', '', '', '', '', '');
    $peli = $nombre;
    $nom = $peli->getNom();
    $id = $peli->getIdPelicula();

    if (preg_match('/^(' . $texto . ')/i', $nom)) {
        $sugerencias[] = $id . " - " . $nom;
        if (count($sugerencias) > 20) {
            break;
        }
    }
}

if (isset($_GET["modo"]) && $_GET["modo"] != null) {
    $modo = $_GET["modo"];
} else {
    $modo = "json";
}

if ($modo == "ul") {
    if (count($sugerencias) > 0) {
        echo "<ul>\n<li>";
        echo implode($sugerencias, "</li>\n<li>");
        echo "</li>\n</ul>";
    } else {
        echo "<ul></ul>";
    }
} else {
    if (count($sugerencias) > 0) {
        echo "[ \"";
        echo implode($sugerencias, "\", \"");
        echo "\"]";
    } else {
        echo "[]";
    }
}
?>