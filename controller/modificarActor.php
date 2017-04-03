<<<<<<< HEAD
<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $actor = new actor("", "", "", "", "", "");
    $x = $actor->obtenirActor($id);
}
require_once ('view/header_view.php');
require_once ('view/modifyActor.php');
require_once ('view/footer_view.php');
=======
<?php

require_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $actor = new actor("", "", "", "", "", "");
    $x = $actor->obtenirActor($id);
}
require_once ('view/header_view.php');
require_once ('view/modifyActor.php');
require_once ('view/footer_view.php');
>>>>>>> master
?>