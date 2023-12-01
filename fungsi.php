<?php
require_once('Dbconfig.php');

class Login extends Dbconfig{
    public $id;
    public function login($username, $password){
      $result = mysqli_query($this->connection, "SELECT * FROM login WHERE username = '$username'");
      $row = mysqli_fetch_assoc($result);
  
      if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
          $this->id = $row["id"];
          return 1;
          // Login successful
        }
        else{
          return 10;
          // Wrong password
        }
      }
      else{
        return 100;
        // User not registered
      }
    }
  
    public function idUser(){
      return $this->id;
    }
  }