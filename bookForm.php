<?php

   $dbname = "localhost";
   $username = "root";
   $password = "1234567";
   $conn = new mysqli($dbname , $username , $password,"wt");
   if ($conn){
      echo "Connection Successful";
      if(isset($_POST['send'])){
         $name = $_POST['name'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $address = $_POST['address'];
         $location = $_POST['location'];
         $guests = $_POST['guests'];
         $arrivals = $_POST['arrivals'];
         $leaving = $_POST['leaving'];
   
         $request = " insert into book_form values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
         $conn->query($request);
   
         header('location:book.php'); 
   
      }else{
         echo 'something went wrong please try again!';
      }   

   }
   else{
      echo "user doesn't exist";
   }

   
?>