<?php

class DAO {
    private $servername = "us-cdbr-iron-east-01.cleardb.net";
    private $db = "heroku_05684d6fdd64121";
    private $username = "b53d76fc3ea9d7";
    private $password = "1be6ec47";

    public function getConnection() { 
        return new PDO("mysql:host={$this->servername};dbname={$this->db}", $this->username, $this->password);
    }
    
    
    public function saveUser($first_name, $last_name, $email, $pass) {
        $conn = $this->getConnection();
        $saveQuery = 
        "INSERT INTO users
            (first_name, last_name, email, pass)
            VALUES
            (:first_name, :last_name, :email, :pass)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":first_name", $first_name);
        $q->bindParam(":last_name", $last_name);
        $q->bindParam(":email", $email);
        $q->bindParam(":pass", $pass);
        $q->execute();
    }
    
    public function getLogin($email, $pass) {
        $conn = $this->getConnection();
        $getQuery = 
            "SELECT *
            FROM users
            WHERE email = :email and pass = :pass";
        $q = $conn->prepare($getQuery);
        $q->bindParam(":email", $email);
        $q->bindParam(":pass", $pass);
        $q->execute();
        $row_count = $q->rowCount();
 
        $q = $conn->query($getQuery);
        
        if ($row_count>0){
          
            $_SESSION['logged'] = true;
            $_SESSION['message']='Got em';
            header('Location: ../support.php'); 
        }
        else {
        $_SESSION['logged'] = false;
        $_SESSION['message'] = 'Invalid username or password' ;
        header('Location: ../support.php');
        }
    }
    public function getComments () {
      
        $conn = $this->getConnection();
        return $conn->query("select id, image_path, name, comment, date_entered from comment order by date_entered desc", PDO::FETCH_ASSOC);
      }
      public function saveComment ($name, $comment) {
      $path="";
        $conn = $this->getConnection();
        $saveQuery =
            "INSERT INTO comment
            (name, comment, image_path)
            VALUES
            (:name, :comment, :image_path)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":name", $name);
        $q->bindParam(":comment", $comment);
        $q->bindParam(":image_path", $path);
        $q->execute();
      }
      public function deleteComment ($id) {
        $conn = $this->getConnection();
        $saveQuery = "DELETE FROM comment WHERE id = :id";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":id", $id);
        $q->execute();
      }
}


?>
