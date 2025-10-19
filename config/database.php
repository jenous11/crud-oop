<?php
class Database
{
    private $servername = "localhost";
    private $username   = "root";
    private $password   = "chelse@11";
    private $dbname     = "php_oop";
    //method
    protected function connect()
    {
        try {
            $pdo = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->dbname, $this->username, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo ("connected successfully");
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
    public function getData($table, $fields)
    {
        // to get data
        try {
            $sql = "SELECT $fields FROM $table";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo "error: " . $e->getMessage();
        }
    }
    //function to insert data
    public function insertData($table, $param)
    {
        try {
        // echo"<pre>";
        // print_r($param);
        $fields=array();
        $values=array();

        foreach($param as $key=>$value){
            $fields[]=$key;
            $values[]=$value;
        }
        // print_r($fields);
        // print_r($values);

        $fields=implode("," , $fields);
        $values=implode("','" , $values);
        $values ="'" . $values . "'";
        exit;


        //this shows values in the screen
        //    echo "<pre>";
        // echo "Fields: $fields\n";
        // echo "Values: $values\n";
        // echo "</pre>";

           echo $sql = "INSERT INTO $table ($fields) 
           VALUES ($values);";
        //    exit; 

           $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            // $stmt = null;
        } catch (PDOException $e) {
            echo "error: " . $e->getMessage();
        }
    }
}
