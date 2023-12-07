<!DOCTYPE html>
<html>
<head>
    <title>アンケートフォーム</title>
</head>
<body>
    <!-- フォームの開始。データはwrite.phpに送信される -->
    <form action="write.php" method="post">
        <!-- 名前入力フィールド -->
        <label for="name">名前:</label><br>
        <input type="text" id="name" name="name"><br>

        <!-- Email入力フィールド -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <!-- チェックボックスによる複数選択肢 -->
        <label>聞きたい問い:</label><br>
        <input type="checkbox" name="questions[]" value="問い1"> 問い1 趣味<br>
        <input type="checkbox" name="questions[]" value="問い2"> 問い2 特技<br>
        <input type="checkbox" name="questions[]" value="問い3"> 問い3 好きな食べ物<br>

        <!-- 送信ボタン -->
        <input type="submit" value="送信">
    </form> 
</body>
</html>

