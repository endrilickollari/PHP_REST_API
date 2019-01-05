<?php
class Category{
 
    // database connection and table name
    private $conn;
    private $table_name = "categories";
 
    // object properties
    public $Id;
    public $FirstName;
    public $LastName;
    public $BirthDate;
    public $Address;
    public $Tel;
 
    public function __construct($db){
        $this->conn = $db;
    }
 
    // used by select drop-down list
    public function readAll(){
        //select all data
        $query = "SELECT
                    Id, FirstName, LastName, BirthDate, Address, Tel
                FROM
                    " . $this->table_name . "
                ORDER BY
                    FirastName";
 
        $stmt = $this->conn->prepare( $query );
        $stmt->execute();
 
        return $stmt;
    }
    // used by select drop-down list
public function read(){
 
    //select all data
    $query = "SELECT
                Id, FirstName, LastName, BirthDate, Address, Tel
            FROM
                " . $this->table_name . "
            ORDER BY
                FirstName";
 
    $stmt = $this->conn->prepare( $query );
    $stmt->execute();
 
    return $stmt;
}
}
?>