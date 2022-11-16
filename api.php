<?php

  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Methods: GET, POST', 'OPTIONS');
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Max-Age: 86400");
  header("Access-Control-Allow-Headers: X-Requested-With");


  $method   =   $_SERVER['REQUEST_METHOD'];
  if($method  != 'POST'){  
      exit();
  }


  if($_SERVER['REQUEST_METHOD']==='POST' && empty($_POST)) {
     $data = json_decode(file_get_contents('php://input'),true); 
     var_dump($data);
   } 
   
   
 ?>
