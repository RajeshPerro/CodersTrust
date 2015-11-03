<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 10/28/15
 * Time: 9:56 AM
 */
$add=$_POST['add'];
$sub=$_POST['sub'];
echo $sub;
echo $add;

if(isset($add))
{
    echo "Add clicked";
}
else
{
    echo "Sub clicked";
}

?>
<html>
<head></head>
<body>
<form action="" method="post">
<input type="submit" name="add" value="+">

<input type="submit" name="sub" value="-">
</form>
<body>
</html>