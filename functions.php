<?php

    define('DBINFO', 'mysql:host=localhost;dbname=id18700440_vislogistics');
    define('DBUSER','id18700440_vlogistics');
    define('DBPASS','QVWrJ0g*Q1??CtSJ');

    function fetchAll($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->query($query);
        return $stmt->fetchAll();
    }
    function performQuery($query){
        $con = new PDO(DBINFO, DBUSER, DBPASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }

?>