<?php
//启动会话
session_start();
?>
<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | level3</title>
    <link rel="shortcut icon" href="TemplateData3/favicon.ico">
    <link rel="stylesheet" href="TemplateData3/style.css">
    <script src="TemplateData3/UnityProgress.js"></script>
    <script src="Build3/UnityLoader.js"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "Build3/test.json", {onProgress: UnityProgress});
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
    case 3.01:
        $intid = 301;
        break;
    case 3.02:
        $intid = 302;
        break;
    case 3.07:
        $intid = 307;
        break;
    case 3.10:
        $intid = 310;
        break;
}
?>
  <body>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title" style = "color:#07B441;font-size: 25px">LEVEL 3</div>
      </div>
    </div>
    <center>
      <button style = "width:100px;height:50px;border-radius: 4px;color:#F8F8FF;background-color:#07B441;border-color:#07B441" onclick="window.location.href='level1.php'">LEVEL 1</button>
      <button style = "width:100px;height:50px;border-radius: 4px;color:#F8F8FF;background-color:#07B441;border-color:#07B441" onclick="window.location.href='level2.php'">LEVEL 2</button>
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
