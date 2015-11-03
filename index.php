<?php
//session_start();
//echo "The value is:".$_SESSION['fname'].$_SESSION['lname'];
echo $_COOKIE["FirstName"]. $_COOKIE['LastName']."<br />";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Employee from</title>
    <style>
        .total {
            width: 450px;
            margin: 0 auto;
            background: #ddd;
            padding: 50px;
        }

        input {
            background: #fff;
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            color: #222;
            font-weight: 300;
            margin-bottom:5px;
        }
    </style>
</head>

<body>
<div class="total">
    <form action="page2.php" method="post">

        <input type="text" placeholder="Name" name="name" required>
        <input type="text" placeholder="Age" name="age" required>
        <input type="text" placeholder="Address" name="address" required>
        <input type="text" placeholder="Degignation" name="designation" required>
        <input type="text" placeholder="Sallary" name="salary" >
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <input type="submit" name="save" value="Sign up">
    </form>
    <a href="login.php" target="_blank" style="text-decoration: none;">Login</a>
</div>
</body>

</html>
