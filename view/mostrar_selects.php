<?php

require_once("controller/function_AutoLoad.php");

function mostrarDirectors($idDirector = null) {
    $agencia = new agencia("ASDF");
    $arrayDirectors = $agencia->rebreDirectors();
    echo "<select name='idDirector'>";
    foreach ($arrayDirectors as $director) {
        if ($idDirector == $director->getNif()) {
            echo "<option value='" . $director->getNif() . "' selected ='selected'>" . $director->getNom() . " " . $director->getCognom() . "</option>";
        } else {
            echo "<option value='" . $director->getNif() . "'>" . $director->getNom() . " " . $director->getCognom() . "</option>";
        }
    }
    echo "</select>";
}

function mostrarActors($nifActor = null) {

    $agencia = new agencia("ASDF");
    $arrayActors = $agencia->rebreActors();
    echo "<select name='actor'>";
    foreach ($arrayActors as $actor) {
        if ($nifActor == $actor->getNif()) {
            echo "<option value='" . $actor->getNif() . "' selected='selected'>" . $actor->getNom() . " " . $actor->getCognom() . "</option>";
        } else {
            echo "<option value='" . $actor->getNif() . "'>" . $actor->getNom() . " " . $actor->getCognom() . "</option>";
        }
    }
    echo "</select>";
}

function mostrarPelis($idPelicula = null) {
    $agencia = new agencia("ASDF");
    $arrayPelicules = $agencia->rebrePelis();
    echo "<select name='pelicula'>";
    foreach ($arrayPelicules as $peli) {
        if ($idPelicula == $peli->getIdPelicula()) {
            echo "<option value='" . $peli->getIdPelicula() . "' selected='selected'>" . $peli->getNom() . "</option>";
        } else {
            echo "<option value='" . $peli->getIdPelicula() . "'>" . $peli->getNom() . "</option>";
        }
    }
    echo "</select>";
}

function mostrarGeneres($genere = null) {
    $agencia = new agencia("ASDF");
    $arrayGeneres = array("Home", "Dona", "Altres");
    echo "<select name='genere'>";
    for ($i = 0; $i < count($arrayGeneres); $i++) {
        if ($genere == $arrayGeneres[$i]) {
            echo "<option value='" . $i . "' selected='selected'>" . $arrayGeneres[$i] . "</option>";
        } else {
            echo "<option value='" . $i . "'>" . $arrayGeneres[$i] . "</option>";
        }
    }
    echo "</select>";
}
