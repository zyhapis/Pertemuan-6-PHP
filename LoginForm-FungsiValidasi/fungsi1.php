<?php
function ototentikasi($uname, $pass)
{
    // user admin , password 123456
    if ($uname == "admin" && $pass == "123456") {
        return true;
    } else {
        return false;
    }
}
?>