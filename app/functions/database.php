<?php

class database{


    private $dbhost;
    private $dbpassword;
    private $dbport;
    private $dbname;
    private $dbuser;
    

    function __construct(string $dbhost, string $dbuser, string $dbpassword, string $dbport, string $dbname) {
        $this->dbhost = $dbhost;
        $this->dbname = $dbname;
        $this->dbuser = $dbuser;
        $this->dbport = $dbport;
        $this->dbpassword = $password;
    }


    function connection(){

        try{
            $db = new PDO('mysql:host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpassword);

        }catch(PDOException $e){
            print("Erreur " . $e->getMessage());
            die();
        }
    }


}
