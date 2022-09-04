<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact us</title>
    <link rel="icon" type="image/x-icon" href="./icons/Invigorate DAO logo.jpg">
    <link rel="stylesheet" href="./contact.css">
</head>

<body>
    <div id="background">
        <header>
            <div id="menu_icon">
                <img src="./icons/menu_open.png" id="open" onclick="nav();">
            </div>

            <div id="logo_container">
                <img src="./icons/Invigorate DAO (primary logo).png" alt="" id="logo">
            </div>

            <div id="nav_cover">
                <div id="nav_subcover">
                    <div id="menu">
                        <h1>Home</h1>
                        <h1>Home</h1>
                        <h1>Home</h1>
                        <h1>Home</h1>
                    </div>
                </div>
            </div>
        </header>

        <div id="main">
            <div id="contact_form">

                <div id="section_one">
                    <center>
                        <h2 id="title">HOW CAN WE HELP ?</h2>
                    </center><br><br>
                    <form action="./contact.php" method="POST">
                        <input type="text" name="name" id="name" placeholder="Enter your full name" required>
                        <input type="text" name="organisation" id="organisation" placeholder="Your organisation"
                            required><br><br><br>
                        <input type="email" name="email" id="email" placeholder="Enter your email address"
                            required><br><br><br>
                        <textarea name="message" id="message" placeholder="Enter your message"
                            required></textarea><br><br>
                        <input type="submit" name="submit" id="submit" value="SEND">
                    </form>
                </div>

                <div id="section_two">
                    <div id="bg_image"></div>
                </div>
            </div>
        </div>

        <footer role="contentinfo">
            <div id="footer_subsection">
                <div id="footer_logo"></div>

                <div id="links">
                    <h1>FAQ</h1>
                    <h1>ABOUT</h1>
                    <h1>CONTACT</h1>
                    <h1>|</h1>
                    <h1>TWITTER</h1>
                    <h1>DISCORD</h1>
                    <h1>LINKEDIN</h1>
                    <h1>TELEGRAM</h1>
                </div>

                <div id="copyright">
                    <h1>&#169; 2022 Copyright by InvigorateDAO </h1>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="./contact.js"></script>

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

                header("location: ./contact.php?form = request sent successfully");
            }
        ?>
</body>

</html>