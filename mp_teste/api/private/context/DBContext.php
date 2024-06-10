<?php

class DBContext{
    private $Server;
    private $User;
    private $Password;
    private $Database;
    public $Pdo;
    private static $Instance = null;

    private function __construct(){
        $this->Server = 'localhost';
        $this->User = 'user_bsg';
        $this->Password = '2TScu202RFUV@iwA';
        $this->Database = 'bike_sport_gaspar';
        $this->Pdo = new PDO("mysql:host=$this->Server;dbname=$this->Database", $this->User, $this->Password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8MB4"));
    }
    public static function GetInstance(){
        if(self::$Instance === null){
            self::$Instance = new self();
        }
        return self::$Instance->Pdo;
    }
}
