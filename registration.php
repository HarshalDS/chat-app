<?php
    session_start();
    include("db.php");
    
    if($_SERVER['REQUEST_METHOD']=="POST"){

        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        if(!empty($email) && !empty($password) && !is_numeric($email))
        {
            $query = "insert into loginform (username, email, password) values ('$username','$email','$password')";

            mysqli_query($con, $query);

            echo"<script type='text/javascript'>alert('Successfully sign up')</script>";
        }

        else{
            echo"<script type='text/javascript'>alert('plese enter valid credentials')</script>";
        }
    }

    
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Registration Page</title>
   <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(135deg, #6e8efb, #a777e3);
}

.registration-container {
    background-color: #fff;
    padding: 2rem;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

.registration-form h2 {
    margin-bottom: 1.5rem;
    color: #333;
    text-align: center;
}

.input-group {
    margin-bottom: 1.5rem;
}

.input-group label {
    display: block;
    margin-bottom: 0.5rem;
    color: #555;
}

.input-group input {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.input-group input:focus {
    border-color: #6e8efb;
    outline: none;
}

button {
    width: 100%;
    padding: 0.75rem;
    background-color: #6e8efb;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #a777e3;
}
   </style>
</head>
<body>
    <div class="registration-container">
        <form class="registration-form" method="POST">
            <h2>Register</h2>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Submit</button>
        </form>
        <p>Already have an accoutn <a href="loginpage.php">Login here</a></p>
    </div>
</body>
</html>
