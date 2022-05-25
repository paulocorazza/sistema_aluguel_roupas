<?php

if(!empty($_POST['clothe_code'])){
    $data = array();
       
//    //database details
   $dbHost     = 'localhost:3306';
   $dbUsername = 'root';
   $dbPassword = 'password';
   $dbName     = 'loja';
   
 

   $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
   if($db->connect_error){
       die("Unable to connect database: " . $db->connect_error);
   }
    
    //get user data from the database
    $query = $db->query("SELECT * FROM clothes WHERE code = {$_POST['clothe_code']}");
    
    if($query->num_rows > 0){
        $userData = $query->fetch_assoc();
        $data['status'] = 'ok';
        $data['result'] = $userData;
    }else{
        $data['status'] = 'err';
        $data['result'] = '';
    }

    echo json_encode($data);
}