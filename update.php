<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 11/4/15
 * Time: 9:22 AM
 */

$id=$_GET['id'];
//echo $id;
include('pdo_connection.php');
include('database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

$sql="SELECT * FROM employee WHERE id='$id'";
$data = $dbcon->query($sql);
$row = $data->fetch(PDO::FETCH_ASSOC);
//print_r($row);
?>
<html>
<form action="" method="post">

    <input type="text" placeholder="Name" name="name" value="<?php echo $row['name']?>">
    <input type="text" placeholder="Age" name="age" value="<?php echo $row['age']?>">
    <input type="text" placeholder="Address" name="address" value="<?php echo $row['address']?>">
    <input type="text" placeholder="Degignation" name="designation" value="<?php echo $row['designation']?>">
    <input type="text" placeholder="Sallary" name="salary" value="<?php echo $row['salary']?>">
    <input type="email" placeholder="Email" name="email" value="<?php echo $row['email']?>">
    <input type="text" placeholder="Password" name="password" value="<?php echo $row['password']?>">
    <input type="submit" name="save" value="Update">
</form>
</html>
