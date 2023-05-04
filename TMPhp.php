!<?php
        $conn = mysqli_connect("localhost", "root", "", "FinalTMA_Data_Unit");

        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        $fname = $_REQUEST['name1'];
        $lname = $_REQUEST['name2'];
        $mail = $_REQUEST['user-email'];

        $sql = "INSERT INTO Data_Conversion VALUES ('$fname',
            '$lname','$mail')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        mysqli_close($conn);
?>