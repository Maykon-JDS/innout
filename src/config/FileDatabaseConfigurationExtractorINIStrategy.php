<?php 

namespace Class\Strategy;

use Class\Strategy\FileDatabaseConfigurationExtractorStrategy;

class FileDatabaseConfigurationExtractorINIStrategy extends FileDatabaseConfigurationExtractorStrategy {

    function __construct(string $filename)
    {

        // $ini_array = parse_ini_file($filename);

    }


    public function getHost() : String {

        return "";

    }
    
    public function getUsername() : String {

        return "";

    }
    
    public function getPassword() : String {

        return "";

    }

    public function getDatabase() : String {

        return "";

    }

    protected function checkIfTheFileExists(String $filename) : void {


    }


}