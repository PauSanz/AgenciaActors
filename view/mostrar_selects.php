<?php

require_once("controller/function_AutoLoad.php");

function mostrarDirectors() {
    $agencia = new agencia("ASDF");
    $arrayDirectors = $agencia->rebreDirectors();
    echo "<select name='idDirector'>";
    foreach ($arrayDirectors as $director) {
        echo "<option value='" . $director->getNif() . "'>" . $director->getNom() . " " . $director->getCognom() . "</option>";
    }
    echo "</select>";
    //}
}

function mostrarActors() {

    $agencia = new agencia("ASDF");
    $arrayActors = $agencia->rebreActors();
    echo "<select name='actor'>";
    foreach ($arrayActors as $actor) {
        echo "<option value='" . $actor->getNif() . "'>" . $actor->getNom() . " " . $actor->getCognom() . "</option>";
    }
    echo "</select>";
    //}
}

function mostrarPelis() {
    $agencia = new agencia("ASDF");
    $arrayPelicules = $agencia->rebrePelis();
    echo "<select name='pelicula'>";
    foreach ($arrayPelicules as $peli) {
        echo "<option value='" . $peli->getIdPelicula() . "'>" . $peli->getNom() . "</option>";
    }
    echo "</select>";
}
