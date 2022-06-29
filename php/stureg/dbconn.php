<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "csregistration";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_connect_error());
        }
    if(isset($_POST['submit'])){    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $registernumber = $_POST['registernumber'];
    $course = $_POST['course'];
    $email = $_POST['email'];
    }
    
    $sql = "INSERT INTO `vijay`(`firstname`, `lastname`, `registernumber`, `course`, `email`) VALUES ('$firstname','$lastname','$registernumber','$course','$email')";

    if(mysqli_query($conn,$sql)){
       echo"Success";
    }

    mysqli_close($conn);
?>
   