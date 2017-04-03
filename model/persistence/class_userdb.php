<?php

include_once("controller/function_AutoLoad.php");
require_once("config/config.inc.php");
require_once("config/db.inc.php");

class userdb {

    public function adduser($user) {
        $query = "insert into user values('', '" . $user->getName() . "', '" . $user->getPassword() . "');";
        $con = new db();
        $con->consulta($query);
        $con->close();
    }

    public function checkUser($user) {
        $query = "SELECT username FROM user WHERE username = '" . $user->getName() . "' AND password = '" . $user->getPassword() . "';";
        $result = null;
        $con = new db();
        $result = $con->consulta($query);
        if (sizeof($result) == 1) {
            $row = $result->fetch_assoc();
            $result = $row['username'];
        }
        $con->close();
        return $result;
    }

}

?>