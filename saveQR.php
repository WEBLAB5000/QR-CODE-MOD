<?php
    // when the request is a POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // open the database
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="QRcodes";
        
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        
        if(!$conn)
        {
            die("Connection failed".$mysqli_connect_error());
        }


        // get the data from the POST request
        $result = $_POST['result'];
        $name = $_POST['name'];

        // insert the data into the database
        $sql = "INSERT INTO `qr` (`result`, `name`) VALUES ('$result', '$name')";
        $result = mysqli_query($conn, $sql);

        // close the database connection
        mysqli_close($conn);

        // redirect to the index page
        header('Location: index.html');

    }
?>