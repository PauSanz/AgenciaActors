<<<<<<< HEAD
<?php

require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $director = new director("", "", "", "", "");
    $x = $director->obtenirDirector($id);
}
require_once ('view/header_view.php');
require_once ('view/modifyDirector.php');
=======
<?php

require_once("function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $director = new director("", "", "", "", "");
    $x = $director->obtenirDirector($id);
}
require_once ('view/header_view.php');
require_once ('view/modifyDirector.php');
>>>>>>> master
require_once ('view/footer_view.php');