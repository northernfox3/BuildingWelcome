<?php
require_once("config.php");
isset($_POST['content'])?$content=$_POST['content']:$content=null;
isset($_POST['nicheng'])?$nicheng=$_POST['nicheng']:$nicheng=null;
$time = time();
$sql = "INSERT INTO dunling_chat (nicheng,content,time) VALUES ('$nicheng','$content','$time')";
if ($config->multi_query($sql) === TRUE) {
    echo "ok";
} 
?>