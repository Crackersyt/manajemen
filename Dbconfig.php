<?php
session_start();
require_once('fungsi.php');

class Dbconfig{

    public $connection;
    public function __construct(){
        $this->db_connect();
    }


    public function db_connect() {
        $this->connection = mysqli_connect('localhost', 'root', '', 'menejemen');
        if (mysqli_connect_error()) {
            die("Connect Failed");
        }
    }

    public function check($a){
        $return = mysqli_real_escape_string($this->connection,$a);
        return $return;
    }
}