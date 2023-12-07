<?php
// POSTリクエストを受け取ったか確認
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // POSTデータから各値を取得
    $name = $_POST['name'];
    $email = $_POST['email'];
    // questionsが存在すれば、カンマ区切りの文字列に変換
    $questions = isset($_POST['questions']) ? implode(", ", $_POST['questions']) : '';

    // 保存するデータをカンマ区切りで結合
    $data = "$name, $email, $questions\n";

    // ファイルを追記モードで開く
    $file = fopen("data.txt", "a");
    // データをファイルに書き込む
    fwrite($file, $data);
    // ファイルを閉じる
    fclose($file);

    // read.phpにリダイレクト
    header("Location: read.php");
}
?>

