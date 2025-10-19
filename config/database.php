<?php
class Database
{
    private $servername = 'localhost';
    private $username   = 'root';
    private $password   = 'chelse@11';
    private $dbname     = 'php_oop';
    //method
    protected function connect()
    {
        try {
            $pdo = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->connect()->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo ("connected successfully");
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
    public function getData($table,$fields)
    {
        // to get data
        try {
            $sql = "SELECT $fields FROM $table";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            print_r($result);
            $stmt = null;
            return $result;
        } catch (PDOException $e) {
            echo "error: " . $e->getMessage();
        }
    }
    //function to insert data
    public function insertData($table)
    {
        try{
        $sql = "INSERT INTO $table ('name', email,phone ) VALUES ('jenous','jenousdongol11@gmail.com','9818084977');";
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute();
        $stmt=null;
    }
    catch(PDOException $e)
    {
        echo "error: ".$e->getMessage();
    }
}
}