<?php
header("content-type:text/html;charset=utf8");
$config = mysqli_connect("localhost", "admin","admin", "project");
if ($config->connect_error) {
    die("连接失败: " . $config->connect_error);
}
mysqli_set_charset($config, "utf8");
?>
