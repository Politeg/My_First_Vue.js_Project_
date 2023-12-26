<?php
class Database
{
    //private $host = 'localhost';
    //private $login = 'mritsagn';
    //private $password = 'UvJcKP';
    //private $bd = 'mritsagn_m3';

    private $host = 'localhost';
    private $login = 'root';
    private $password = '';
    private $bd = 'kurs';
    public $conn;

    public function getConnection()
    {
        $this->conn = new mysqli("$this->host", "$this->login", "$this->password", "$this->bd");
        return $this->conn;
    }
}