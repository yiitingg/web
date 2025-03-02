<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="refresh" content="2;url=SL200-1.php">
</head>

<body>
    <?php
    // 接收來自表單的數據
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $semester_reservation = ($_POST['semester_reservation'] == 'yes') ? 1 : 0; // 如果選擇 "yes"，設為 1，否則設為 0
    $start_date = $_POST['start_date'];
    $start_time = $_POST['start_time'];
    $end_date = $_POST['end_date'];
    $end_time = $_POST['end_time'];

    // 連接到資料庫
    $link = mysqli_connect('localhost', 'root', '12345678', 'users');
    if (!$link) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // 插入單次預約的 SQL 語句
    $sql = "INSERT INTO reservation (name, email, phone, semester_reservation, start_date, start_time, end_date, end_time) 
        VALUES ('$name', '$email', '$phone', '$semester_reservation', '$start_date', '$start_time', '$end_date', '$end_time')";

    // 執行插入操作
    if (mysqli_query($link, $sql)) {
        echo "預約成功", "<br>";
    } else {
        echo "預約失敗", "<br>";
    }

    // 如果選擇了學期預借，則動態讀取學期範圍
    if ($semester_reservation == 1) {
        // 從資料庫獲取學期的開始和結束日期
        $semester_sql = "SELECT start_date, end_date FROM semester ORDER BY id DESC LIMIT 1";
        $semester_result = mysqli_query($link, $semester_sql);
        if ($semester_row = mysqli_fetch_assoc($semester_result)) {
            $semester_start_date = $semester_row['start_date'];
            $semester_end_date = $semester_row['end_date'];
        } else {
            echo "無法讀取學期範圍", "<br>";
            exit;
        }

        // 將學期開始日期和結束日期轉換為時間戳
        $start_date_time = strtotime($semester_start_date);
        $end_date_time = strtotime($semester_end_date);

        // 持續添加每週的預約
        while ($start_date_time <= $end_date_time) {
            // 每週的預約日期（這裡以週一為例）
            $current_date = date("Y-m-d", $start_date_time);

            // 插入學期預借的 SQL 語句，重複每週相同的預約
            $semester_sql = "INSERT INTO reservation (name, email, phone, semester_reservation, start_date, start_time, end_date, end_time) 
                             VALUES ('$name', '$email', '$phone', 1, '$current_date', '$start_time', '$current_date', '$end_time')";

            // 執行 SQL 查詢
            if (mysqli_query($link, $semester_sql)) {
                echo "學期預約成功：", $current_date, "<br>";
            } else {
                echo "學期預約失敗：", $current_date, "<br>";
            }

            // 增加 1 週的時間
            $start_date_time = strtotime("+1 week", $start_date_time);
        }
    }

    // 關閉資料庫連接
    mysqli_close($link);
    ?>

</body>

</html>
