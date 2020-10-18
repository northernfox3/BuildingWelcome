<?php
//启动会话
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | LEVEL2</title>
    <link rel="shortcut icon" href="TemplateData2/favicon.ico">
    <link rel="stylesheet" href="TemplateData2/style.css">
    <script src="TemplateData2/UnityProgress.js"></script>
    <script src="Build2/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build2/E.json", {onProgress: UnityProgress});
    </script>
  </head>
  <style>
p1 {
background-color: none;
font-family: cursive;
font-size: 200px;
}

.glow {
font-size: 25px;
color: #0B71A7;
text-align: center;
-webkit-animation: glow 2s ease-in-out infinite alternate;
-moz-animation: glow 2s ease-in-out infinite alternate;
animation: glow 2s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
from {
  text-shadow: 0 0 10px #07B441, 0 0 20px #07B441, 0 0 30px #07B441;
}

to {
  text-shadow: 0 0 20px #07B441, 0 0 30px #07B441, 0 0 40px #07B441, 0 0 50px #07B441;
}
}
</style>
   <?php
  //获取缓存值
    $ROOMid = $_SESSION["roomid"];
    switch ($ROOMid) {
    case 2.01:
        $intid = 201;
        break;
    case 2.04:
        $intid = 204;
        break;
    case 2.07:
        $intid = 207;
        break;
    case 2.10:
        $intid = 210;
        break;
}
?>
  <body>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title" style = "color:#07B441;font-size: 25px">LEVEL 2</div>
      </div>
    </div>
    <center>
      <button style = "width:100px;height:50px;border-radius: 4px;color:#F8F8FF;background-color:#07B441;border-color:#07B441" onclick="window.location.href='level1.php'">LEVEL 1</button>
      <button style = "width:100px;height:50px;border-radius: 4px;color:#F8F8FF;background-color:#07B441;border-color:#07B441" onclick="window.location.href='level3.php'">LEVEL 3</button>
      <br/>
      <br/>

      <button style = "width:100px;height:50px;border-radius: 4px;color:#F8F8FF;background-color:#07B441;border-color:#07B441" onclick="window.location.href='visitor_meeting.php'">Meeting</button>
      <button style = "width:100px;height:50px;border-radius: 4px;color:#F8F8FF;background-color:#07B441;border-color:#07B441" onclick="window.location.href='login.php'">Exit</button>

      <br/>
      <br/>

      <br/>
      <button style = "width:200px;height:50px;border-radius: 4px;color:#F8F8FF;background-color:#07B441;border-color:#07B441" onclick="unityInstance.SendMessage('Arrow', 'setID', <?=$intid?>)">Start Navigation</button>
    <br/><br/><br/><br/>
    <p1 class="glow">Please Click On the Room Number for Directions</p1>
    </center>
  </body>
</html>
