<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="form.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>form</title>
</head>
<body>
    <section class="formsection">
        <h1>お問い合わせ</h1>
        <form action="form_output.php" method="POST">
            <div class="name">
                <h2>お名前</h2>
                <label>姓：<input type="text" name="first_name" placeholder=""></label>
                <label>名：<input type="text" name="second_name" placeholder=""></label>
            </div>
            <div class="gender">
                <h2>性別</h2>
                <label for="male"><input id="male" type="radio" name="gender" value="male"><span class="radiobtn"></span><span>男</span></label>
                <label for="female"><input id="female" type="radio" name="gender" value="female"><span class="radiobtn"></span><span>女</span></label>
                <label for="others"><input id="others" type="radio" name="gender" value="others"><span class="radiobtn"></span><span>その他</span></label>
            </div>
            <div class="address">
                <h2>住所</h2>
                <input type="text" name="address">
            </div>
            <div class="contact">
                <h2>連絡先</h2>
                <div class="phone">
                    <label>電話番号：
                        <input type="text" name="phone" maxlength="4"> -
                        <input type="text" name="phone" maxlength="4"> -
                        <input type="text" name="phone" maxlength="4">
                    </labrl>
                </div>
                <div class="mail">
                    <label>メールアドレス：
                        <input type="text" name="mail" maxlength="64" /> @
                        <input type="text" name="domain" maxlength="255">
                    </label>
                </div>
            </div>
            <div class="enquete">
                <h2>どこで知ったか</h2>
                <label><input type="checkbox" name="from" value="book"><span class="checkbox"><i class="fa fa-check"></i></span><span>雑誌</span></label>
                <label><input type="checkbox" name="from" value="paper"><span class="checkbox"><i class="fa fa-check"></i></span><span>新聞</span></label>
            </div>
            <div class="question">
                <h2>質問カテゴリ</h2>
                <select class="category" name="q_category">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
                <h2>質問内容</h2>
                <textarea class="text" name="q_text" rows="8" cols="60"></textarea>
            </div>
            <div class="submitbtn">
                <button type="button" onclick="submit()">送信</button>
                <button type="reset">リセット</button>
            </div>
        </form>
    </section>
</body>
</html>
