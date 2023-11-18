<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['email'])
        && isset($_POST['password']) && isset($_POST['verPassword'])&& isset($_POST['number']))
    {

        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $verPassword = $_POST['verPassword'];
        $number = $_POST['number'];



        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "restaurant";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM login WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO login(firstName, lastName, email, password,verPassword, number) values(?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);

                $stmt->bind_param("sssssi",$firstName,  $lastName, $email, $password,$verPassword, $number);

                    if ($password === $verPassword) {
                        if ($stmt->execute()) {
                            // echo "New record inserted sucessfully.";
                            header('Location: account.html');
                        }
                        else {
                            echo $stmt->error;
                        }
                    }
                    else {

                        echo "<script type='text/javascript'>alert('Password and confirm password do not match 😣🤨.')window.history.back(1);</script>";
                    }


            }
            else {
                echo "<script>alert('{$email} - This email has already taken 🤨😏.')window.history.back(1);</script>";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "<script>alert('All field are required.😒')window.history.back(1);</script>";
        die();
    }
}

?>