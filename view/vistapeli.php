<?php

require_once("controller/function_AutoLoad.php");

function mostrapeli() {
    $pelicula = new pelicula('', '', '', '', '', '', '', '', '');
    $paper = new rol('', '', '', '');
    $actor = new actor('', '', '', '', '');
    $director = new director('', '', '', '');
    $idpel = $_REQUEST['id'];
    $peli = $pelicula->obtenirPelicula($idpel);
    $directorPeli = $director->obtenirDirector($peli->getIdDirector());
    $arrActorsPeliConcreta = array();
    $papersDeLaPeliConcreta = $pelicula->obtenirPapersDeLaPeli($idpel);



    echo"<div class = 'main-login main-center espaitop'>";
    echo "<div class = 'text-center'>";
    $imatge = "<img class='rodona2'heigh ='150px' width='150px' src='view/";
    $foto = $peli->getFoto();

    $pathphoto = $imatge . $foto . "'>";
    echo $pathphoto;

    echo"</div>";
    echo"<div class = 'text-center'>";
    $tipus = $peli->getTipus();
    $nom = $peli->getNom();
    echo"<h1><b>$nom</b></h1>";
    echo"</div>";
    echo"<div class = 'text-center'>";
    echo"<h2>$tipus</h2>";
    echo"</div>";
    echo"<hr class = 'colorhr'>";
    echo"<div class = 'form-group'>";
    echo"<label for = 'nom' class = 'cols-sm-2 control-label colorlabel text-left'>Director</label>";
    echo"<div class = 'cols-sm-10'>";
    echo"<div class = 'input-group labelbord'>";
    echo"<span class = 'input-group-addon'><i class = 'fa fa-bullhorn fa-lg fa1' aria-hidden = 'true'></i></span>";
    $nomDirector = $directorPeli->getNom();
    $cognomDirector = $directorPeli->getCognom();
    $nomComplet = $nomDirector . " " . $cognomDirector;
    echo"<p class = 'espaidir'><b>$nomComplet</b></p>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo" <div class = 'form-group'>";
    echo"<label for = 'actors' class = 'cols-sm-2 control-label colorlabel'>Actors</label>";
    echo"<div class = 'cols-sm-10'>";
    echo"<div class = 'input-group labelbord margin1'>";
    echo"<span class = 'input-group-addon'><i class = 'fa fa-user-circle-o fa-lg fa1' aria-hidden = 'true'></i></span>";

    for ($i = 0; $i < count($papersDeLaPeliConcreta); $i++) {
        $nifActor = $papersDeLaPeliConcreta[$i]->getIdActor();
        $nomPaper = $papersDeLaPeliConcreta[$i]->getNom();
        $actorParticipant = $actor->obtenirActor($nifActor);
        $nomActor = $actorParticipant->getNom();
        $cognomActor = $actorParticipant->getCognom();
        $nomComplet = $nomActor . " " . $cognomActor;
        echo"<p class = 'espaidir'><b>$nomPaper: $nomComplet  </b></p>";
    }
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo"<div class = 'form-group'>";
    echo"<label for = 'projeccio' class = 'cols-sm-2 control-label colorlabel'>Projecció</label>";
    echo"<div class = 'cols-sm-10'>";
    echo"<div class = 'input-group labelbord'>";
    echo"<span class = 'input-group-addon'><i class = 'fa fa-calendar fa fa1' aria-hidden = 'true'></i></span>";
    $datainici = $peli->getDataInici();
    $datafi = $peli->getDataFi();
    echo"<p class = 'espaidir'><b>$datainici </b>-<b> $datafi</b></p>";
    echo"</div>";
    echo"</div>";
    echo"</div>";
    echo"<div class = 'form-group '>";
    echo"<label for = 'descripcio' class = 'cols-sm-2 control-label colorlabel'>Descripció</label>";
    echo"<div class = 'cols-sm-10'>";
    echo"<div class = 'input-group labelbord'>";
    $descripcio = $peli->getDescripcio();
    echo"<span class = 'input-group-addon'><i class = 'fa fa-file-text-o fa-lg fa1' aria-hidden = 'true'></i></span>";
    echo"<textarea text-center disabled name = 'descripcio' rows = '15' cols = '15' class = 'form-control'>";
    echo $descripcio;
    echo"</textarea>";
    echo"</div>";
    //valoracio
    $valoracio = $peli->getValoracio();
    switch ($valoracio) {
        case "1":
            echo"<br>";
            echo"<div class='form-group'>";
            echo"<label for = 'valoracio' class = 'colorlabel'>Valoració</label>";
            echo"<p class='clasificacion'>";
            echo"<input id='radio1' name='estrellas'disabled value='5' type='radio'>";
            echo"<label class='star' for='radio1'>★</label>";
            echo"<input id='radio2' name='estrellas' disabled value='4' type='radio'>";
            echo"<label class='star' for='radio2'>★</label>";
            echo"<input id='radio3' name='estrellas' disabled value='3' type='radio'>";
            echo"<label class='star' for='radio3'>★</label>";
            echo"<input id='radio4' name='estrellas' disabled value='2' type='radio'>";
            echo"<label class='star' for='radio4'>★</label>";
            echo"<input id='radio5' name='estrellas' checked='checked' value='1' type='radio'>";
            echo"<label class='star' for='radio5'>★</label>";
            echo"</p>";
            echo"</div>";
            break;
        case "2":
            echo"<br>";
            echo"<div class='form-group'>";
            echo"<label for = 'valoracio' class = 'colorlabel'>Valoració</label>";
            echo"<p class='clasificacion'>";
            echo"<input id='radio1' name='estrellas'disabled value='5' type='radio'>";
            echo"<label class='star' for='radio1'>★</label>";
            echo"<input id='radio2' name='estrellas' disabled value='4' type='radio'>";
            echo"<label class='star' for='radio2'>★</label>";
            echo"<input id='radio3' name='estrellas' disabled value='3' type='radio'>";
            echo"<label class='star' for='radio3'>★</label>";
            echo"<input id='radio4' name='estrellas' checked='checked' value='2' type='radio'>";
            echo"<label class='star' for='radio4'>★</label>";
            echo"<input id='radio5' name='estrellas' disabled value='1' type='radio'>";
            echo"<label class='star' for='radio5'>★</label>";
            echo"</p>";
            echo"</div>";
            break;
        case "3":
            echo"<br>";
            echo"<div class='form-group'>";
            echo"<label for = 'valoracio' class = 'colorlabel'>Valoració</label>";
            echo"<p class='clasificacion'>";
            echo"<input id='radio1' name='estrellas'disabled value='5' type='radio'>";
            echo"<label class='star' for='radio1'>★</label>";
            echo"<input id='radio2' name='estrellas' disabled value='4' type='radio'>";
            echo"<label class='star' for='radio2'>★</label>";
            echo"<input id='radio3' name='estrellas' checked='checked' value='3' type='radio'>";
            echo"<label class='star' for='radio3'>★</label>";
            echo"<input id='radio4' name='estrellas' disabled value='2' type='radio'>";
            echo"<label class='star' for='radio4'>★</label>";
            echo"<input id='radio5' name='estrellas' disabled value='1' type='radio'>";
            echo"<label class='star' for='radio5'>★</label>";
            echo"</p>";
            echo"</div>";
            break;
        case "4":
            echo"<br>";
            echo"<div class='form-group'>";
            echo"<label for = 'valoracio' class = 'colorlabel'>Valoració</label>";
            echo"<p class='clasificacion'>";
            echo"<input id='radio1' name='estrellas'disabled value='5' type='radio'>";
            echo"<label class='star' for='radio1'>★</label>";
            echo"<input id='radio2' name='estrellas' checked='checked' value='4' type='radio'>";
            echo"<label class='star' for='radio2'>★</label>";
            echo"<input id='radio3' name='estrellas' disabled value='3' type='radio'>";
            echo"<label class='star' for='radio3'>★</label>";
            echo"<input id='radio4' name='estrellas' disabled value='2' type='radio'>";
            echo"<label class='star' for='radio4'>★</label>";
            echo"<input id='radio5' name='estrellas' disabled value='1' type='radio'>";
            echo"<label class='star' for='radio5'>★</label>";
            echo"</p>";
            echo"</div>";
            break;
        case "5":
            echo"<br>";
            echo"<div class='form-group'>";
            echo"<label for = 'valoracio' class = 'colorlabel'>Valoració</label>";
            echo"<p class='clasificacion'>";
            echo"<input id='radio1' name='estrellas' checked='checked' value='5' type='radio'>";
            echo"<label class='star' for='radio1'>★</label>";
            echo"<input id='radio2' name='estrellas' disabled value='4' type='radio'>";
            echo"<label class='star' for='radio2'>★</label>";
            echo"<input id='radio3' name='estrellas' disabled value='3' type='radio'>";
            echo"<label class='star' for='radio3'>★</label>";
            echo"<input id='radio4' name='estrellas' disabled value='2' type='radio'>";
            echo"<label class='star' for='radio4'>★</label>";
            echo"<input id='radio5' name='estrellas' disabled value='1' type='radio'>";
            echo"<label class='star' for='radio5'>★</label>";
            echo"</p>";
            echo"</div>";
            break;
        default:
            echo"<br>";
            echo"<div class='form-group'>";
            echo"<label for = 'valoracio' class = 'colorlabel'>Valoració</label>";
            echo"<p class='clasificacion'>";
            echo"<input id='radio1' name='estrellas' disabled value='5' type='radio'>";
            echo"<label class='star' for='radio1'>★</label>";
            echo"<input id='radio2' name='estrellas' disabled value='4' type='radio'>";
            echo"<label class='star' for='radio2'>★</label>";
            echo"<input id='radio3' name='estrellas' disabled value='3' type='radio'>";
            echo"<label class='star' for='radio3'>★</label>";
            echo"<input id='radio4' name='estrellas' disabled value='2' type='radio'>";
            echo"<label class='star' for='radio4'>★</label>";
            echo"<input id='radio5' name='estrellas' disabled value='1' type='radio'>";
            echo"<label class='star' for='radio5'>★</label>";
            echo"</p>";
            echo"</div>";
            break;
    }
    echo"</div>";
    echo"</div>";
    echo"</div>";
}

?>