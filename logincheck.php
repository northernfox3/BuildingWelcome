<?php
//登录处理界面
//判断是否按下提交按钮
    session_start();
    if(isset($_POST["submit"]) && $_POST["submit"] == "login")
    {
    //将用户名和密码存入变量中，供后续使用
        $user = $_POST["userid"];
        $psw = $_POST["userpwd"];
        $type="";
        if($user == "" || $psw == "")
        {
        //用户名或者密码其中之一为空，则弹出对话框，确定后返回当前页的上一页
            echo "<script>alert('Please enter userid or password！'); history.go(-1);</script>";
        }
        else
        {  //确认用户名密码不为空，则连接数据库
            $conn = mysqli_connect("localhost","admin","admin");
             if(mysqli_errno($conn)){
                echo mysqli_errno($conn);
                exit;
             }
            mysqli_select_db($conn,"project");
            mysqli_set_charset($conn,'utf8');
            $sql = "SELECT managerid,password,type FROM manager WHERE managerid = '$user' AND password = '$psw'";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);


            // 测试输出数据
            while ($row = $result->fetch_assoc()) {
                echo $row["type"];

                if ($num) {
                    $_SESSION['userid']=$row['managerid'];
                    if ($row["type"] == "manager") {
                        echo "<script>alert('login successful'); window.location.href='menu.php';</script>";
                    } else if ($row["type"] == "student") {
                        echo "<script>alert('login successful'); window.location.href='studentinfo.php';</script>";
                    } else if ($row["type"] == "staff") {
                        echo "<script>alert('login successful'); window.location.href='STAFFINFO.php';</script>";
                    }
                } else {
                    echo "<script>alert('Incorrect userid or password！');history.go(-1);</script>";
                }
            }

    }
} else if(isset($_POST["button"]) && $_POST["button"] == "visitor"){
    echo "<script>alert('login successful'); window.location.href='visitor_meeting.php';</script>";
} else
    {
        echo "<script>alert('Login failed！');</script>";
    }


?>
