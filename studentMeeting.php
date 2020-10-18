<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>

        <meta charset="UTF-8">
        <title>Meeting information</title>

          <style>

body {
    width: 1000px;
    margin: 40px auto;
    font-family: 'trebuchet MS', 'Lucida sans', Arial;
    font-size: 14px;
    color: #444;
}

table {
    *border-collapse: collapse; /* IE7 and lower */
    border-spacing: 0;
    width: 100%;
}

#enter {
  color:cornflowerblue;
}

.bordered {
    border: solid #ccc 1px;
    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
    -webkit-box-shadow: 0 1px 1px #ccc;
    -moz-box-shadow: 0 1px 1px #ccc;
    box-shadow: 0 1px 1px #ccc;
}

.bordered tr:hover {
    background: #fbf8e9;
    -o-transition: all 0.1s ease-in-out;
    -webkit-transition: all 0.1s ease-in-out;
    -moz-transition: all 0.1s ease-in-out;
    -ms-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}

.bordered td, .bordered th {
    border-left: 1px solid #ccc;
    border-top: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

.bordered th {
    background-color: #dce9f9;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ebf3fc), to(#dce9f9));
    background-image: -webkit-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:    -moz-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:     -ms-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:      -o-linear-gradient(top, #ebf3fc, #dce9f9);
    background-image:         linear-gradient(top, #ebf3fc, #dce9f9);
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;
    border-top: none;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

.bordered td:first-child, .bordered th:first-child {
    border-left: none;
}

.bordered th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.bordered th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.bordered th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.bordered tr:last-child td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.bordered tr:last-child td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}



/*----------------------*/

.zebra td, .zebra th {
    padding: 10px;
    border-bottom: 1px solid #f2f2f2;
}

.zebra tbody tr:nth-child(even) {
    background: #f5f5f5;
    -webkit-box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;
    -moz-box-shadow:0 1px 0 rgba(255,255,255,.8) inset;
    box-shadow: 0 1px 0 rgba(255,255,255,.8) inset;
}

.zebra th {
    text-align: left;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
    border-bottom: 1px solid #ccc;
    background-color: #eee;
    background-image: -webkit-gradient(linear, left top, left bottom, from(#f5f5f5), to(#eee));
    background-image: -webkit-linear-gradient(top, #f5f5f5, #eee);
    background-image:    -moz-linear-gradient(top, #f5f5f5, #eee);
    background-image:     -ms-linear-gradient(top, #f5f5f5, #eee);
    background-image:      -o-linear-gradient(top, #f5f5f5, #eee);
    background-image:         linear-gradient(top, #f5f5f5, #eee);
}

.zebra th:first-child {
    -moz-border-radius: 6px 0 0 0;
    -webkit-border-radius: 6px 0 0 0;
    border-radius: 6px 0 0 0;
}

.zebra th:last-child {
    -moz-border-radius: 0 6px 0 0;
    -webkit-border-radius: 0 6px 0 0;
    border-radius: 0 6px 0 0;
}

.zebra th:only-child{
    -moz-border-radius: 6px 6px 0 0;
    -webkit-border-radius: 6px 6px 0 0;
    border-radius: 6px 6px 0 0;
}

.zebra tfoot td {
    border-bottom: 0;
    border-top: 1px solid #fff;
    background-color: #f1f1f1;
}

.zebra tfoot td:first-child {
    -moz-border-radius: 0 0 0 6px;
    -webkit-border-radius: 0 0 0 6px;
    border-radius: 0 0 0 6px;
}

.zebra tfoot td:last-child {
    -moz-border-radius: 0 0 6px 0;
    -webkit-border-radius: 0 0 6px 0;
    border-radius: 0 0 6px 0;
}

.zebra tfoot td:only-child{
    -moz-border-radius: 0 0 6px 6px;
    -webkit-border-radius: 0 0 6px 6px
    border-radius： 0 0 6px 6px
}

</style>

    </head>
    <body>

        <h3>
          <?php
          include "studentinfo.php";
          ?>

            <table class="bordered">
                <tr>
                    <td >
                        <form id="form1" name="form1" method="post" action="" style="margin:0px; padding:0px;">
                            <table width="20" height="42" border="0" align="center" cellpadding="0" cellspacing="0" class="bk">
                                <tr>
                                    <td  align="center">
                                        <select name="seltype" id="seltype">
                                            <option value="passkey">Passkey</option>
                                            <option value="hostname">Name</option>
                                        </select>
                                    </td>
                                    <td  align="center">
                                        <input type="text" name="coun" id="coun" />
                                    </td>
                                    <td  align="center">
                                        <input type="submit" name="button" id="button" value="search" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
            </table>

            <table class="bordered">
                <tr>
                   <th>MeetingID</th>
                    <th>HostName</th>
                    <th>Passkey</th>
                    <th>Time</th>
                    <th>RoomID</th>
                    <th>Location</th>
                </tr>


                <?php
                $conn= mysqli_connect("localhost", "admin","admin", "project");
                if ($conn->connect_error) {
                die("连接失败: " . $conn->connect_error);
                }
                mysqli_set_charset($conn, "utf8");
                $sql = "SELECT * FROM meeting WHERE " . $_POST['seltype'] . " LIKE ('%" . $_POST['coun'] . "%')";
                $rs = mysqli_query($conn, $sql) or die('<div id = "enter"> Enter Passkey or Host Name to Search <div/>');


                if ($rs->num_rows > 0) {
    // 输出数据
    while ($row = mysqli_fetch_assoc($rs)) {
        echo "<tr>";
        echo "<td>{$row['meetingID']}</td>";
        echo "<td>{$row['hostname']}</td>";
        echo "<td>{$row['passkey']}</td>";
        echo "<td>{$row['time']}</td>";
        echo "<td>{$row['roomID']}</td>";
        $id=$row['roomID'];
        $_SESSION['roomid']=$row['roomID'];
        $float=floatval($id);
         if($float>1&&$float<2){
            echo "<td><a href ='level1.php'>Go To Map</a></td>";
        }else if($float>2&&$float<3){
                echo "<td><a href ='level2.php'>Go To Map</a></td>";
        } else {
            echo "<td><a href ='level3.php'>Go To Map</a></td>";
        }
        echo "</tr>";
    }
} else {
  echo "<p style='color:cornflowerblue;'> No Result";
}
?>
            </table>

        </h3>
    </body>
</html>
