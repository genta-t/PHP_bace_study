<?php

if (!empty($_GET)) {
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
}

?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form method="GET" action="inquiryForm.php">
        氏名
        <input type="text" name="your_name">
        <br>
        <input type="checkbox" name="sports[]" value="野球">野球
        <input type="checkbox" name="sports[]" value="サッカー">サッカー
        <input type="checkbox" name="sports[]" value="バスケ">バスケ

        <input type="submit" name="送信">
    </form>
</body>