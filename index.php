<?php
    if(isset($_POST['name']))
    {
        $sub = 0;
        $server = 'localhost';
        $user = 'root';
        $password = '';
        $con = mysqli_connect($server, $user, $password);
        if (!$con)
        {
            die ("Failed to connect" . mysqli_connect_error());
        }
        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $class = $_POST['class'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $sql = "insert into `Addd`.`student` values ('$name' , '$fname', '$mname', '$class', '$phone', '$email');";
        if ($con->query($sql) == true)
        {
            $sub = 1;
        }
        else{
            $sub = 2;
        }
        $con->close();
    }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Applicaiton Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="nav">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
            </ul>
        </nav>
    </div>
    <div class="cont">
        <h1>Addimission Form.</h1>
        <?php
            $sub = 0;
            if ($sub == 1)
            {
            echo "<p>Subbmitted</p>";
            }
            elseif ($sub == 2)
            {
                echo "Sorry";
            }
            else
            {

            }

        ?>
        <form method="post" action="index.php" id="form">
            <p class="input">Enter your full name.</p>
            <input type="text" id="name" name="name" placeholder="Enter Your name" class="input">
            <p class="input">Enter your father's name.</p>
            <input type="text" id="fname" name="fname" placeholder="Father's Name" class="input">
            <p class="input">Enter your mother's name</p>
            <input type="text" id="mname" name="mname" placeholder="Mother's Name" class="input">
            <p class="input">Select your class.</p>
            <select name="class" id="class" class="input">
                <option value="none">Select your class.</option>
                <option value="Nr">Nr</option>
                <option value="1st">1st</option>
                <option value="2nd">2nd</option>
                <option value="3rd">3rd</option>
                <option value="4th">4th</option>
                <option value="5th">5th</option>
                <option value="6th">6th</option>
                <option value="7th">7th</option>
                <option value="8th">8th</option>
            </select>
            <p class="input">Enter your phone number.</p>
            <input class="input" id="phone" maxlenght="10" required length=10 type="number" name="phone" placeholder="Mobile Number">
            <p class="input">Enter your E-Mail ID.</p>
            <input class="input" id="email" type="email" id="email" name="email" placeholder="E-Mail">
            <p class="input">Enter your address.</p>
            <input class="input" id="address" type="text" placeholder="Address" name="address"> <br>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>