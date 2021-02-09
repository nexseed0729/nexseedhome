<!DOCTYPE html>
<html lang="ja" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="./img/LOGO.png">
    <link rel="stylesheet" href="https://nexseed0729.github.io/nexseedhome/style2.css"/>
    <link rel="stylesheet" href="https://nexseed0729.github.io/nexseedhome/responsive.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans+JP:400,700" rel="stylesheet">h
    <title>株式会社　NEXSEED</title>
</head>
<body>
    <?php require_once('header.tpl.php') ?>
    <div class="login">
        <h1>
            新規機能
        </h1>
        <div class="sign-up">
            <form action="#" method="POST">
                <div>
                    <label for="signup-id">ユーザー名を決めてください</label>
                    <div>
                        <input name="username" id="signup-id" placeholder="ユーザー">
                    </div>
                </div>
                <div>
                    <label for="signup-padd">パスワードを決めてください</label>
                    <div>
                        <input name="passward" id="signup-pass" placeholder="パスワード">
                    </div>
                </div>
                <div>
                    <button name="signup" type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
    <?php require_once('footer.tpl.php') ?>
</body>
</html>
