<!DOCTYPE html>
<html>
<head>
    <title>アンケート結果</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>Email</th>
            <th>聞きたい問い</th>
        </tr>
        <?php
        $filename = "data.txt";
        if (file_exists($filename)) {
            $file = fopen($filename, "r");
            while (($line = fgets($file)) !== false) {
                list($name, $email, $questions) = explode(", ", $line);
                echo "<tr>";
                echo "<td>$name</td>";
                echo "<td>$email</td>";
                echo "<td>$questions</td>";
                echo "</tr>";
            }
            fclose($file);
        } else {
            echo "<tr><td colspan='3'>まだデータがありません。</td></tr>";
        }
        ?>
    </table>
</body>
</html>

