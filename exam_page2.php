<?php
$num1=$_GET['num1'];
$num2=$_GET['num2'];
//echo $num1."<br>".$num2;
$result=0;
$firstnum=$_POST['firstnum'];
$secondnum=$_POST['secondnum'];
$add=$_POST['add'];
$sub=$_POST['sub'];
$multi=$_POST['multi'];
$divi=$_POST['divi'];
echo "Your Numbers Were: ".$num1." and ".$num2."<br>";
//echo $add.$sub.$multi.$divi;
if(isset($add))
{
$result=$firstnum+$secondnum;
    echo"The Result is:".$result;
}
elseif(isset($sub))
{
    $result=$firstnum-$secondnum;
    echo"The Result is:".$result;
}
elseif(isset($multi))
{
    $result=$firstnum*$secondnum;
    echo"The Result is:".$result;
}
elseif(isset($divi))
{
    $result=$firstnum/$secondnum;
    echo"The Result is:".$result;
}
?>
<html>
<head>
    <title>Page two</title>
</head>
<body>
<form action="" method="post">
    <input type="text" hidden name="firstnum" value="<?php echo $num1?>">
    <input type="text" hidden  name="secondnum" value="<?php echo $num2?>">
    <table>
        <tr>
            <td>
                <input type="submit" name="add" value="+">
            </td>
            <td>
                <input type="submit" name="sub" value="-">
            </td>
        </tr>
        <br><br>
        <tr>
            <td>
                <input type="submit" name="multi" value="*">
            </td>
            <td>
                <input type="submit" name="divi" value="/">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
