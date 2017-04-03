<<<<<<< HEAD
<?php
function addMenu() {
    if (isset($_COOKIE['user'])) {
        ?>
        <li id="addMenu" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formularis <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="?ctl=pelicula&act=afegir">Afegir Pel·licula</a>
                </li>
                <li>
                    <a href="?ctl=actor&act=afegir">Afegir Actor</a>
                </li>
                <li>
                    <a href="?ctl=director&act=afegir">Afegir Director</a>
                </li>
                <li>
                    <a href="?ctl=paper&act=afegir">Afegir Paper</a>
                </li> 
            </ul>
        </li> 
        <?php
    }
}
?>

=======
<?php
function addMenu() {
    if (isset($_COOKIE['user'])) {
        ?>
        <li id="addMenu" class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formularis <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="?ctl=pelicula&act=afegir">Afegir Pel·licula</a>
                </li>
                <li>
                    <a href="?ctl=actor&act=afegir">Afegir Actor</a>
                </li>
                <li>
                    <a href="?ctl=director&act=afegir">Afegir Director</a>
                </li>
                <li>
                    <a href="?ctl=paper&act=afegir">Afegir Paper</a>
                </li> 
            </ul>
        </li> 
        <?php
    }
}
?>

>>>>>>> master
