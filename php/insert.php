<html>
    <head>
        <title>SUCCESFULL REGISTERING</title>
    </head>
    <body>

<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "myLogin";
                    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);
                // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $Firstname = $_POST ["Firstname"];	
        $Lastname = $_POST ["Lastname"];
        $Email = $_POST ["Email"];
        $Birtday = $_POST ["Birtday"];
        $Phone = $_POST ["Phone"];
        $Address = $_POST ["Address"];
        $Course = $_POST ["Course"];
        $Campus = $_POST ["Campus"];
        $Lschool = $_POST ["Lschool"];
        $Father_FName = $_POST ["Father_FName"];
        $Father_LName = $_POST ["Father_LName"];
        $Mother_FName = $_POST ["Mother_FName"];
        $Mother_LName = $_POST ["Mother_LName"];

        $sql = "INSERT INTO login_data (Firstname, Lastname, Email, Birtday, Phone, Address, Course, Campus, Lschool, Father_FName, Father_LName, Mother_FName, Mother_LName)
        VALUES ('$Firstname', '$Lastname', '$Email', '$Birtday','$Phone' ,'$Address', '$Course', '$Campus', '$Lschool', '$Father_FName', '$Father_LName', '$Mother_FName', '$Mother_LName')";
    
        if ($conn->query($sql) === TRUE) {
            echo "Form submitted successfully";

        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();

        header('location:apply.php')?>
    </body>
</html>