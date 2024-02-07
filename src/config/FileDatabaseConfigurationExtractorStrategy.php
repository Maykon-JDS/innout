<?php

namespace Class\Strategy;

abstract class FileDatabaseConfigurationExtractorStrategy{

    abstract public function getHost() : String;
    
    abstract public function getUsername() : String;
    
    abstract public function getPassword() : String;

    abstract public function getDatabase() : String;

}


?>