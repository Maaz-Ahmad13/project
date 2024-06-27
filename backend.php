<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fit Fusion</title>
    <style>

        *{
            background-color:black;
            text-align:center;
            color:white;
        }
        .divs{
            margin:2rem;
            padding:2rem;
            display:flex;
            flex-direction: column;
            border:2px solid white;
        }
        #input{

            background-color: black;
            border: 1px solid white;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;

        }
        .divs a{
            color:red;
        }
        .divs span{
            color:red;
        }
        @media(max-width:370px){
            .divs a{
                font-size:20px;
            }
        }
    </style>
</head>
<body>
    <div class="divs">
    <?php
    require_once('server2.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $phone=$_POST['phone'];
        $password = $_POST['password'];
        $confirm_pass = $_POST['confirm_pass'];

        $insert_query = "INSERT INTO form (name,age,email,phone_no,password,confirm_pass) VALUES ('$name','$age','$email','$phone','$password','$confirm_pass')";

        if (mysqli_query($connection, $insert_query)) {
            echo ".";
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($connection);
        }
        mysqli_close($connection);

    }
        $connection=mysqli_connect('localhost','root','','project');

        $fetch="SELECT * from form WHERE name='$name'";
        $result=mysqli_query($connection,$fetch);

        echo "<h1>Hi <span>'$name'</span> how are you!</h1>";
        echo "<h1>Your joining letter has been sent to your email ";

        echo "<a href='#home'> '$email'<br><br>";

        echo "<a href='index.php'><input type='button' id='input' value='Back To Home'></a>";


    ?>
</div>
    <p><br><br><br><br><br><br><br><br></p>
    <p>all rights @reserved</p>
    <p>Designed by SamuraiOp</p>
    <p>KPK PAKISTAN</p>
</body>
</html>





   





