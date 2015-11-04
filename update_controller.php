<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 11/4/15
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

    $id=$_POST['id'];
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
        $sql="UPDATE employee SET id='$id',name='$name',age=$age,address=$address,designation='$designation',salary=$salary,email=$email,password=$password WHERE id='$id'";
        $preparestatement=$dbcon->prepare($sql);
        $preparestatement->execute();
        echo("<script>alert('Successfully Updated..!!')</script>");
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

?>