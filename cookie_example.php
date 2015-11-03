<?php
/**
 * Created by PhpStorm.
 * User: rajesh
 * Date: 10/28/15
 * Time: 8:30 AM
 */
//setcookie(name, value, expire, path, domain, security);
//Name − This sets the name of the cookie and is stored in an environment variable called HTTP_COOKIE_VARS. This variable is used while accessing cookies.
//
//Value − This sets the value of the named variable and is the content that you actually want to store.
//
//Expiry − This specify a future time in seconds since 00:00:00 GMT on 1st Jan 1970. After this time cookie will become inaccessible. If this parameter is not set then cookie will automatically expire when the Web Browser is closed.
//
//Path − This specifies the directories for which the cookie is valid. A single forward slash character permits the cookie to be valid for all directories.
//
//Domain − This can be used to specify the domain name in very large domains and must contain at least two periods to be valid. All cookies are only valid for the host and domain which created them.
//
//Security − This can be set to 1 to specify that the cookie should only be sent by secure transmission using HTTPS otherwise set to 0 which mean cookie can be sent by regular HTTP.

setcookie("FirstName", "abcd", time()+3600, "/","", 0);
setcookie("LastName", "efgh", time()+3600, "/", "",  0);
?>
<html>

<head>
    <title>Setting Cookies with PHP</title>
</head>

<body>
<?php echo "Set Cookies"."<br>"?>
<?php
if( isset($_COOKIE["FirstName"]))
    echo "Welcome " . $_COOKIE["FirstName"].$_COOKIE['LastName'] . "<br />";

else
    echo "Sorry... Not recognized" . "<br />";
?>

</body>

</html>
