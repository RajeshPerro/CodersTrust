<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 11/5/15
 * Time: 2:28 PM
 */
$menu_name=$_POST['menu_name'];
$data=$_POST['editor1'];
include ('../pdo_connection.php');
include ('../database_config.php');
$db_user =$database_user;
$db_pass =$databse_pass;
$db_name=$database_name;
$dbcon=$connection_object->connection('localhost',$db_user,$db_pass,$db_name);

if(isset($_POST['save'])) {

    $menu_name=$_POST['menu_name'];
    $data=$_POST['editor1'];
    $sql="INSERT INTO site_data(menu_name, editor1) VALUES ('$menu_name','$data')";
    $preparestatement=$dbcon->prepare($sql);
    $preparestatement->execute();
    echo("<script>alert('Successfully saved..!!')</script>");
    echo("<script>location.href='data_input.php'</script>");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>A Simple Page with CKEditor</title>
    <!-- Make sure the path to CKEditor is correct. -->
    <script src="ckeditor/ckeditor.js"></script>
</head>
<body>
<form action="" method="post">
            Select Your area:<select name="menu_name">
                <option>--Select--</option>
                <option value="About">About</option>
                <option value="Description">Description</option>
                <option value="Company">Company Profile</option>

            </select>
    <br><br>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea><br><br>
    <input type="submit" value="Save" name="save">
</form>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
    </script>

</body>
</html>
