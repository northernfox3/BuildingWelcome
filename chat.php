<?php

isset($_COOKIE['nc'])?$nc = $_COOKIE['nc']:$nc = null;
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat Room</title>
<meta name="keywords" content="聊天" />
<meta name="description" content="聊天" />
<link type="text/css" href="css/index.css" rel="stylesheet" />
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/index.js"></script>
</head>
<body>
    
<title>Chat Room</title>
<div id="title">Chat Room</div>
<div id="chat">
<div class="window"></div>
</div>
<div id="shuru"><textarea style="width: 100%;height:50px;resize:none;" id="content"></textarea></div>
<div id="form"><input type="submit" value="send" id="send" class="send" /><input type="hidden" id="nicheng" class="nicheng" value="<?php echo $nc;?>" /></div>
<div id="form"><input type="button" class="fanhui" value="reset nickname" id="reset"  /></div>
<button style = "width:95%;height:40px;border-radius: 4px;color:#F8F8FF;background-color:#07B441;border-color:#07B441" onclick="window.location.href='login.php'">exit</button>

<div id="bottom">Tendy 2020 </div>
<div id="bg"></div>
<div id="window">
<div class="t">
<div class="title">Set nickname</div>
<div class="nc">

<input type="text" value="<?php echo $nc;?>" id="nc" style="width: 60%;height:30px;text-align:center;" /><br /><br />
<input type="button" id="setting" value="confirm" style="width: 60%;height:30px;" />

</div>
</div>
</div>

</body>
