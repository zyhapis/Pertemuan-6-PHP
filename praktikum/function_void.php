<?php
function salam($nama = "")
{
    echo "<h2>Assalamu'alaikum " . ($nama ? strtoupper($nama) : "") . "</h2>";
}

salam("ali");
salam("fadil");
salam();
?>