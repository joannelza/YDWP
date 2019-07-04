<!doctype html>
<body>
    <h1>Account created successfully.</h1>
<?php 
    $uname=$_POST["uname"];
    $pword=$_POST["password"];
    $servername="localhost";
    $username="root";
    $password="cellotape";
    $dbname="login";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die(mysqli_connect_error());
    }
    $sql="INSERT INTO student(uname,pword) values('$uname','$pword')";
    if(mysqli_query($conn,$sql)){
        echo "New account created successfully.";}
    else{
        echo "error".$sql."br".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
    </body>
    </html>