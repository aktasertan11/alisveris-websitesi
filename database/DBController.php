<?php


class DBController
{
    //Veritabanı bağlantısı
    protected $host ='localhost';
    protected $user ='root';
    protected  $password ='';
    protected  $database ='onlineav';

    public $conn = null;
    public function __construct(){
        $this->conn=mysqli_connect($this->host,$this->user,$this->password,$this->database);
        if ($this->conn->connect_error)
        {
            echo "Connection Fail !!!!" .$this->conn->connect_error;
        }
        echo 'Connection Successful...';
    }
    public function __destruct(){
        $this->closeConn();
    }
    protected function closeConn(){
        if ($this->conn != null){
            $this->conn->close();
            $this->conn =null;

        }
    }

}
