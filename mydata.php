<?php
class Chart{
    private $host;
    private $user;
    private $pass;
    private $database;

    public $conn;
    public function __construct($host, $user, $pass, $database){
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->database = $database;
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
        
        if(!$this->conn){
            die("Error ". $this->conn->connect_error);
    }else{
        // echo "Connected";
    }
}

//============INSERT===================
public function InsertData($name,$email, $tel, $password){
    $name = mysqli_real_escape_string($this->conn, $name);
    $email = mysqli_real_escape_string($this->conn, $email);
    $tel = mysqli_real_escape_string($this->conn, $tel);
    $password = mysqli_real_escape_string($this->conn, $password);
    
    $stmt = "INSERT INTO `users` (`name`, `email`, `tel`, `password`) VALUES (?,?, ?, ?)";
    $stmt=$this->conn->prepare($stmt);
    $stmt->bind_param("ssis",$name,$email,$tel,$password);
    if ($stmt->execute()){
        return 1;
}else{
    return 0;
}
}
}
$my_obj = new Chart("localhost", "root", "", "chart");