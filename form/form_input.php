<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="form.css">
    <title>form</title>
</head>
<body>
    <section class="formsection">
        <h1>お問い合わせ</h1>
        <form action="form_output.php" method="POST">
            <div class="name">
                <h2>お名前</h2>
                <label>姓：<input type="text" name="first_name" size="4"></label>
                <label>名：<input type="text" name="second_name" size="4"></label>
            </div>
            <div class="gender">
                <h2>性別</h2>
                <label for="male"><input id="male" type="radio" name="gender" value="male">男</label>
                <label for="female"><input id="female" type="radio" name="gender" value="female">女</label>
                <label for="others"><input id="others" type="radio" name="gender" value="others">その他</label>
            </div>
            <div class="address">
                <h2>住所</h2>
                <input type="text" name="address" size="60">
            </div>
            <div class="phone">
                <h2>連絡先</h2>
                <label>電話番号：<input type="text" name="phone" size="4" /></labrl> -
                <input type="text" name="phone" size="4"> -
                <input type="text" name="phone" size="4">
            </div>
            <div class="mail">
                <label>
                    メールアドレス：
                    <input type="text" name="mail" size="20" />
                    @
                    <input type="text" name="mail" size="20">
                </label>
            </div>
            <div class="enquete">
                <h2>どこで知ったか</h2>
                <label>雑誌<input type="checkbox" name="from" value="book"></label>
                <label>新聞<input type="checkbox" name="from" value="paper"></label>
            </div>
            <div class="question">
                <h2>質問カテゴリ</h2>
                <select class="category" name="q_category">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <h2>質問内容</h2>
                <textarea name="q_text" rows="8" cols="60"></textarea>
            </div>
            <div class="submitbtn">
                <button type="submit">送信</button>
                <button type="reset">リセット</button>
            </div>
        </form>
    </section>
</body>
</html>
