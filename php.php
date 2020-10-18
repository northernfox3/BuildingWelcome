<?php
require_once("config.php");
ini_set("date.timezone","Australia/Sydney");
$numsql = "SELECT * FROM dunling_chat";
$numery = mysqli_query($config,$numsql);
$num = mysqli_num_rows($numery);
if($num<5){
$num="0";
}else{
$num = $num - 5;
}
$sql = "SELECT * FROM dunling_chat ORDER BY id ASC LIMIT $num,5";
$ery = mysqli_query($config,$sql);
while($chat = mysqli_fetch_array($ery)){
$time = $chat['time'];
$time = date("H:i:s",$time);
echo '<span style="color:#FF0000">';
echo $chat['nicheng'].' </span><span style="color:green;">'.$time." </span><br/>";
echo $chat['content'].'<P><p/>'; 
}
?>