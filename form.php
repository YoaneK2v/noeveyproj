<?php 

if(isset($_POST['submit'])) {

    // getting and storing inputs in variables
    $email = $_POST['email'];
    $password = $_POST['password'];

    //database details. You have created these details in the third step. Use your own
    $host = "localhost";
    $username = "formdb_user";
    $password = "abc123";
    $dbname = "form_connect";

    //create connection
    $con = mysqli_connect($host, $username,$password, $dbname);

    //check connection if it is working or not

    if (!$con){
        die("connection failed!" . mysqli_connect_error());
    }


    //This below line is a code to Send form entries to database
    $sql = "INSERT INTO user_connect (id, email_user, password_user) VALUES('O', '$email', '$password')";

    //fire query to save entries and check it with if statement

    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Connect successfully";
    }
    else{
        echo "Error, connect no match";
    }

    //connection closed
    mysqli_close($con);

}

?>