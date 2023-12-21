<?php
    $con = mysqli_connect('localhost','root','','record');
    if(isset($_POST['save'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];
        $query = "INSERT INTO information(name,email,feedback) VALUES('$name','$email','$feedback')";
        $run = mysqli_query($con,$query);
    }
    echo "Connection Successfull!!"
?>