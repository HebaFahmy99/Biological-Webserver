<?php   
 $firstName = $lastName = $gender = $email = $PhoneNum = $password = "";

function InsertUser($conn){  
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $PhoneNum = $_POST["PhoneNum"];
    $password = $_POST["password"]; 
    if(isset($_POST['submitBtn'])){ 
        if(!(empty($firstName)&& empty($lastName) && empty($gender) && empty($email) && empty($PhoneNum) && empty($password))){ 
            $seq = "INSERT INTO users (UserId, FName, LName, Gender, Email, PhoneNumber, Password) VALUES (NULL, '$firstName', '$lastName', '$gender', '$email', '$PhoneNum', '$password')";
            if($conn->query($seq) === TRUE){ 
                header("Location:login.php");
            } 
            else{ 
                echo "Error: ".$seq ."<br>" . $conn->error;
            }
        }
    }
}

function SelectUser($conn){ 
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    if(isset($_POST['submitLogin'])){ 
        if(!(empty($email) &&empty($password))){ 
            $seq = "SELECT Email,Password FROM users WHERE Email = '$email' AND Password = '$password' "; 
            $result = $conn->query($seq); 
            if($result->num_rows >0){ 
                header("Location:ConjuctivitiesDB.php");
            } 
            else{ 
                header("Location:Error404.php");
            }
        }
    } 

}
    $servername = "localhost"; 
    $username = "root"; 
    $password = "usbw"; 
    $dbname = "userdata" ; 
    $conn = new mysqli($servername, $username, $password,$dbname); 

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    else {  
        echo "Database Connected successfully";   
        InsertUser($conn);  
        SelectUser($conn);
    }  
    $conn->close();
?>