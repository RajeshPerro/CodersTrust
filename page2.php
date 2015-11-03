<?php
session_start();
$_SESSION['email_page2']=$_GET['email'];
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 9/30/15
 * Time: 10:40 AM
 */
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

if(isset($_POST['save']))
{

    $name=$_POST['name'];
    $age=$_POST['age'];
    $address=$_POST['address'];
    $designation=$_POST['designation'];
    $salary=$_POST['salary'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    //$error = false;
    if(!empty(trim($_POST['name'])) || !empty(trim($_POST['salary'])))
    {
        //echo $name.$age.$address.$designation.$salary.$email.$password;
        $sql="INSERT INTO employee(name, age, address, designation, salary, email, password) VALUES ('$name','$age','$address','$designation','$salary','$email','$password')";
        $preparestatement=$dbcon->prepare($sql);
        $preparestatement->execute();
        echo("<script>alert('Successfully saved..!!')</script>");
        echo("<script>location.href='index.php'</script>");

    }
    else
    {

        echo("<script>alert('Sorry.! You put some field empty!')</script>");
        echo("<script>location.href='index.php'</script>");
    }
}
else
{

    echo("<script>alert('something went wrong')</script>");
    echo("<script>location.href='index.php'</script>");
}


//$id=$_GET['id'];
//$name=$_GET['name'];
//$age=$_GET['age'];
//$address=$_GET['address'];
//$designation=$_GET['designation'];
//$salary=$_GET['salary'];
//$email=$_GET['email'];
//$password=$_GET['password'];
//echo $name.$age.$address.$designation.$salary.$email.$password;

?>
<html>
<head>

</head>
<body>
<a href="page3.php"><input type="button" value="Page3"></a>
</body>
</html>
