<!doctype html>
<body>

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
    $sql="select uname,pword from student where uname='$uname' and pword='$pword'";
    if(mysqli_query($conn,$sql)){
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)) {
        echo "Username " . $row["uname"]. "<br>";
    }
    echo "Welcome";}

    else {
        echo "Username or password entered wrong.";
    }
    }
    else {
        echo "error".$sql."br".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
    </body>
    </html>