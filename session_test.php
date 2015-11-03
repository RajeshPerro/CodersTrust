<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 10/28/15
 * Time: 11:05 AM
 */
session_start();
echo "The value is:".$_SESSION['fname'].$_SESSION['lname'];
//$sum=$_SESSION['fname']+$_SESSION['lname'];
//echo "<br> Sum=".$sum;
?>