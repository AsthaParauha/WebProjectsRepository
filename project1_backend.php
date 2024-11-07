<?php

    
    // creating table 
    // $table= "CREATE TABLE Contacted_People( serial_no int AUTO_INCREMENT PRIMARY KEY, 
    //             name varchar(72) NOT NULL,
    //             email varchar(255) NOT NULL,
    //             contact_number varchar(110) NOT NULL,
    //             address varchar (225) NOT NULL
    //             );";
    
    // $creation= mysqli_query($con, $table);
    // if($creation){
    //     echo "<br> table created successfully.";
    // }
    // else{
    //     echo "table was not creted successfully.".mysqli_connect_error();
    // }

    echo "here your data is submited.";


    if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "this is post method";
               $name=$_REQUEST['name'];
               $email=$_REQUEST['Email'];
               $contact_no=$_REQUEST['Contact_number'];
               $address= $_REQUEST['Address'];
               echo " <br> your name is $name and your email is $email.";
               //  connecting to the database
                $servername= "localhost";
                $username= "root";
                $password= "";
                $database="Astha_Portfolio";

                // connection
                $con= mysqli_connect($servername, $username, $password,$database); //this returns ture on success and false on fail.
                if (!$con){
                    die("connection was not successfull.");
                }
                else{
                    echo "connected successfully.";
                    }
                   
            //    inserting values
               $insert= "INSERT INTO  Contacted_People VALUES (2, '$name', '$email', '$contact_no', '$address');";
               $inserted= mysqli_query($con, $insert);
               if($inserted){
                   echo "values inserted successfully.";
                 }
               else{
                   echo "values not inserted successfully.".mysqli_connect_error();
               }
           }
             ?>