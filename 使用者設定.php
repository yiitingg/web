<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>校內資源</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/zh/thumb/d/da/Fu_Jen_Catholic_University_logo.svg/1200px-Fu_Jen_Catholic_University_logo.svg.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Serif+TC:wght@550&display=swap">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="index.css">

    <style>
        body {
            color: #00000099;
        }

        /* 連結顏色&禁用底線 */
        a {
            color: #125174;
            text-decoration: none;
        }

        /* 禁用游標懸停時的底線 */
        a:hover {
            text-decoration: none;
        }
    </style>
</head>

<body style="color: #00000099;">
    <div align="center">
        <table class="List" width="500" border="solid 1px black">
            <tr align="center">
                <td>使用者名稱</td>
                <td>使用者Email</td>
                <td>功能</td>
            </tr>
            <?php
            session_start(); // 啟動 session，確認當前使用者的資料
            if (isset($_SESSION['username'])) {
                $current_username = $_SESSION['username']; // 取得當前使用者的 username
                //step1
                $link = mysqli_connect('localhost', 'root', '12345678', 'users');
                //step3
                $sql = "SELECT * FROM accounts WHERE username = '$current_username'"; // 查詢當前使用者
                $result = mysqli_query($link, $sql);
                //step4
                if ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr><td>", $row['username'], "</td><td>", $row['email'], "</td><td align='center'><a href=update.php?username=",
                    $row['username'], ">[修改]</a>&nbsp;<a href=dblink.php?method=delete&username=", $row['username'], ">[刪除]</a></td></tr>";
                }
            } else {
                echo "<tr><td colspan='3' align='center'>未登入，請先登入</td></tr>";
            }
            ?>
            
        </table>
    </div>
</body>

</html>

<?php
/*
            //step1
            $link = mysqli_connect('localhost', 'root', '12345678', 'users');
            //step3
            $sql = "select * from account username=$username and password=$password";
            $result = mysqli_query($link, $sql);
            //step4
            while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>", $row['username'], "</td>
                <td>", $row['email'],"</td>
                <td align='center'><a href=update.php?username="
                ,$row['username'],">[修改]</a>&nbsp;<a href=dblink.php?method=delete&username=",$row['username'],">[刪除]</a></td>
            </tr>";
            }
            */
?>