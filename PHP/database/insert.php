<!DOCTYPE html>
<html>

<head>
    <title>Insert page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "portfolio");

        // Check connection
        if ($conn === false) {
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $project = isset($_POST['project']) ? $_POST['project'] : '';
        $message = isset($_POST['message']) ? $_POST['message'] : '';

        // Performing insert query execution
        // here our table name is contacts
        $sql = "INSERT INTO contacts(name, email, project,message)  VALUES ('$name','$email','$project','$message')";

        if (mysqli_query($conn, $sql)) {
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$name\n"
                . "$email\n $project\n $message");
        } else {
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>