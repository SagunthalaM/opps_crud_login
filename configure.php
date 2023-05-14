<?php
class Users{
    private $con;
    public function __construct(){
        $this->con = mysqli_connect("localhost","root","","tutorial");
        if(mysqli_connect_error()){
            echo mysqli_connect_error();
        }
    }
    public function addRecord($data){
       $query = "INSERT INTO crud set
        first_name = '".$data['first_name']."',
        last_name = '".$data['last_name']."',
        email = '".$data['email']."',
        phone = '".$data['phone']."',
        position = '".$data['position']."',
        gender = '".$data['gender']."' ";      
        $runQuery = mysqli_query($this->con,$query);
        if($runQuery){
            return true;
        }else{
            return mysqli_errno($this->con);
        }
    }
    public function tableList(){
        $query = "SELECT * FROM crud";
        $getQuery = mysqli_query($this->con,$query);
        $responseArray=[];
        while($data = mysqli_fetch_array($getQuery)){
            $responseArray[]=$data;
        }
       return $responseArray;
    }
    public function getFormData($id){
        $query = "SELECT * FROM crud where id = '".$id."' ";
        $getQuery = mysqli_query($this->con,$query);
        $getData = mysqli_fetch_array($getQuery);
        //echo "<pre>",print_r($getData).die;
        return $getData;
    }
    public function updatedata($data,$id){
        $query = "update crud set 
         first_name = '".$data['first_name']."',
         last_name = '".$data['last_name']."',
         email = '".$data['email']."',
         phone = '".$data['phone']."',
         position = '".$data['position']."',
         gender = '".$data['gender']."' 
         where id = '".$id."'";
         $runQuery = mysqli_query($this->con,$query);
         if($runQuery){
             return true;
         }else{
            return false;
         }
     }

    public function deleteData($id){
        $query = "delete FROM crud where id = '".$id."' ";
        $getQuery = mysqli_query($this->con,$query);
        if($getQuery){
            return true;
        }else{
            return  mysqli_errno($thid->con);
        }
    }
}
?>

   