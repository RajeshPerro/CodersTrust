<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 11/2/15
 * Time: 9:48 AM
 */
session_start();
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);
if(isset($_POST['login']))
{
    $Email=$_POST['email'];
    $Pass=$_POST['password'];
    $sql="SELECT * FROM employee WHERE email='$Email' AND password='$Pass'";
    $data = $dbcon->query($sql);
    $row = $data->fetch(PDO::FETCH_ASSOC);

    trim($dbuser = $row['email']);
    trim($dbpass = $row['password']);
     if ($dbpass != "" && $dbuser != "")
    {
        session_start();
        $_SESSION['user'] = $dbuser;
        echo("<script>location.href='user_data.php'</script>");
    }
    else {
        $string = ' Sorry! Try again.\n Username or Password is Wrong.';
        echo "<script>alert(\"$string\")</script>";
        echo("<script>location.href='login.php'</script>");
    }
}
?>

<html>
<head>
    <title>User | Login</title>
</head>
<body>
<center>
<table>
    <tr>
        <th></th>
        <th style="font-size: larger;">User Login</th>
    </tr>
    <form action="" method="post">
        <tr>
            <td>E-mail: </td>
            <td><input type="email" name="email" size="20"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password" size="20"></td>
        </tr>
        <tr>
            <td></td>

            <td><input type="submit" name="login" value="Login" size="20" style="background-color: green; color: white;"> <a href="index.php"><input type="button" value="Cancel" size="20" style="background-color: darkred; color: white;"></a></td>
        </tr>
    </form>
</table>
</center>
</body>
</html>
