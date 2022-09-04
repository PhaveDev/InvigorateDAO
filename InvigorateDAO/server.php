<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $organisation = $_POST['organisation'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        include('./connect.php');
        $sql = "INSERT INTO contact (name, organisation, email, message) VALUES (?,?,?,?)";

        $statement = $pdoConnect->prepare($sql);

        $statement->execute(
            array(
                $name,
                $organisation,
                $email,
                $message
            )
        );

        echo("Request successful");
    }
?>