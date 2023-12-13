<?php

namespace Class;

class Database {

    public static function getConnection(){

        $path = dirname(__FILE__) . "/../env/env.ini";

        realpath($path) ;


    }

}


?>