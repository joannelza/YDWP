<!doctype html>
<head>
    <title>YDWP| Event planner</title>
</head>
<body>
    <?php 
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $subject=$_POST["subject"];
    $message=$_POST["message"];
    ?>
    <?php
    $servername="localhost";
    $username="root";
    $password="cellotape";
    $dbname="ydwp";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die(mysqli_connect_error());
    }
    $sql="INSERT INTO form(fname,lname,email,subject,message) values('$fname','$lname','$email','$subject','$message')";
    if(mysqli_query($conn,$sql)){
        echo "Form submitted successfully";
    }
    else{
        echo "error",$sql,"<br>",mysqli_error($conn);
    
    }
    mysqli_close($conn);
    ?>
    </body>
    </html>
