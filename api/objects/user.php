<?php

class User
{
    private $conn;
    private $table = "users";
    public $id;
    public $name;
    public $email;
    public $password;
    public $role;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function login()
    {
        // Prepare the query to fetch the user based on email only
        $query = "SELECT id, name, email, role, password FROM " . $this->table . " WHERE email = :email";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();

        return $stmt;
    }


    function signUp()
    {
        if ($this->isAlreadyExist()) {
            return false;
        }

        $query = "INSERT INTO " . $this->table . " SET name=:name, email=:email, password=:password, role=:role";

        // prepare the query and remove unwanted input
        $stmt = $this->conn->prepare($query);
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $this->role = htmlspecialchars(strip_tags($this->role));
        // bind the user input
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":role", $this->role);
        // execute the query
        if ($stmt->execute()) {
            $this->id = $this->conn->lastInsertId();
            return true;
        }
    }

    function isAlreadyExist()
    {
        $query = "SELECT *
            FROM
                " . $this->table . " 
            WHERE
                email='" . $this->email . "'";
        // prepare query statement
        $stmt = $this->conn->prepare($query);
        // execute query
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}