<?php
session_start();
class Connection{
    private $conn;
    public function __construct(){
     $this->conn = mysqli_connect("localhost","root","","mysite");
    }

   public function registration($username,$password,$password2){
    $duplicate = mysqli_query($this->conn,"select * from users where 
    username = '$username'; ");
    if(mysqli_num_rows($duplicate)>0){
        return 10;
        //Username has already taken
    }else{
        if($password == $password2){
            $query = "insert into users values('','$username','$password') ";
            mysqli_query($this->conn,$query);
            return 1;
            //registration successfuls

        }else{
            return 100;
            //Password does not match
        }
    }
   }
   public $id;
   public function login($username,$password){
    $result = mysqli_query($this->conn,"select * from users where username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)>0){
       if($password == $row['password']){
           $this->id = $row['id'];
           return 1;
           //login successful
       }else{
        return 10;
        //wrong password
       }
    }
    else{
        return 100;
        //User not registered
    }
   }
   public function idUser(){
    return $this->id;
   }
}
?>