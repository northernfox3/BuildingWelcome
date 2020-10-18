<?php

isset($_COOKIE['nc'])?$nc = $_COOKIE['nc']:$nc = null;
if($nc==null){
    echo "nocookie";
}else{
    echo $nc;
}
?>