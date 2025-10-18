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
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo ("connection successfully");
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
        try{
        $sql = "SELECT *FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<br>";
        print_r($result);
        $stmt=null;
        $pdo=null;
        }
        catch(PDOException $e)
        {
            echo "error: ".$e->getMessage();
        }


}
}