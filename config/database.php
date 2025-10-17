<?php
class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "chelse@11";
    private $dbname = "php_oop";

    //method
    protected function connect()
    {
        try {
            $pdo = new PDO("mysqli:host=" . $this->servername . ";username=" . $this->username . ";password= " . $this->password . ";dbname=" . $this->dbname);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo ("connection successfull");
            return $pdo;
        } catch (PDOException $e) {
            echo "error " . $e->getMessage();
        }
    }
}

//class to perform sql query

class Query extends Database
{
    //method
    public function getData()
    {
        $sql = "SELECT *FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
    }
}
