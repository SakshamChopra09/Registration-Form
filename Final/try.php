<?php
$insert = false;
if (isset($_POST['name'])) {

    //connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    //check connection success
    if (!$con) {
        die("Connection failed due to" . mysqli_connect_error());
    }
    // echo "Connected successfully to database";


    //collect post variables
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    @$gender = $_POST['gender'];
    $security_question = $_POST['security_question'];
    $answer = $_POST['answer'];
    $box = $_POST['box'];


    $sql = "INSERT INTO `form details`.`details` (`Name`,`Phone`,`Email_ID`,`Password`,`Gender`,`Security_Question`,`Answer_to_Sec_Ques`,`Bio`, `dt_filled_on`) 
    VALUES ('$name','$contact','$email','$password','$gender','$security_question','$answer','$box',current_timestamp());";
    // echo $sql;

    //execute the query
    if ($con->query($sql) == true) {
        // echo "Succesfully inserted";

        //flag for sucessful insertion
        $insert = true;
    } else {
        // echo "ERROR: $sql <br> $con->error";
    }

    //close the connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="complete.css">
</head>
<script type="text/javascript" src="complete.js"></script>

<body>
    <img class="cont">
    <!-- src="https://studyinthestates.dhs.gov/sites/default/files/styles/blog_image/public/iStock-537453120.jpg?itok=kWkpN-SM"> -->
    <!-- <img class="cont" src="https://studyinthestates.dhs.gov/sites/default/files/styles/blog_image/public/iStock-537453120.jpg?itok=kWkpN-SM"/> -->
    <div class="ani1"></div>
    <!-- <div class="ani2"></div> -->
    <h1>REGISTRATION FORM</h1>
    <br>

    <p class="desc">This is a registration form for participating in an event. It asks for your personal details as well as your bio, so that you can move further in the event. Fill it wisely :)</p>
    <!-- A short description of the form -->
    <br>
    <form action="try.php" method="post">

        <!-- <img src="https://studyinthestates.dhs.gov/sites/default/files/styles/blog_image/public/iStock-537453120.jpg?itok=kWkpN-SM" align="right"> -->
        <div class="NAME">
            <label for="name">Enter your name </label>
            <input name="name" type="text" id="name" onblur="validateName();" placeholder="Your Name" required><span id="msg1"></span>
            <br>
        </div>


        <div class="CONTACT">
            <label for="contact">Enter your contact number </label>
            <input name="contact" type="number" id="contact" onblur="validateContact();" placeholder="Your 10 digit Contact Number" required><span id="msg2"></span>
            <br>
        </div>


        <div class="EMAIL">
            <label for="email">Enter your email id </label>
            <input name="email" type="email " id="email" onblur="validateEmail();" placeholder="xyz@abc.com" required><span id="msg3"></span>
            <br>
        </div>

        <div class="PASSWORD">
            <label for="password">Enter your password </label>
            <input name="password" type="password" id="password" placeholder="Your Password" required><span id="msg4"></span>
            <br>
        </div>

        <div class="surround">
            <p class="abt">
                Select your gender</p>
            <div class="gen">
                <input type="radio" name="gender" value="MALE" id="option1">
                <label for="option1">MALE</label><br>
                <input type="radio" name="gender" value="FEMALE" id="option2">
                <label for="option2">FEMALE</label>
            </div>
        </div>
        <br><br>

        <div class="SECURITY">
            <label for="security_question">Select the security question and answer</label>

            <select name="security_question" id="security_question">
                <option value="q1">Which is your favourite show</option>
                <option value="q2">What is your favourite dish</option>
                <option value="q3">Where do you want to visit in the world</option>
            </select>
        </div>
        <br>

        <div class="ANSWER">
            <label for="answer">Answer</label>
            <input type="text" name="answer" id="answer">
        </div>
        <br><br>

        <p class="abt">About Yourself</p>
        <textarea name="box" id="box" cols="25" rows="5" placeholder="Type your bio here..."></textarea>
        <br>
        <br>


        <button class="submission">SUBMIT
            <!-- <input type="image" src="https://www.pngitem.com/pimgs/m/353-3531325_submit-now-png-transparent-images-submit-button-png.png" alt="Submit" width="110" height="110"> -->
        </button>

    </form>

    <?php
    if ($insert == true) {
        echo "<div class='after_submit'>Thanks for Submitting the form</p></div>";
    }
    ?>

    <!-- </div> -->

</body>

</html>