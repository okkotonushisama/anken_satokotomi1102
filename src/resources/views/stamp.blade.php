<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/stamp.css') }}" />
</head>

<body>
    <body>
    <header class="header">
        <div class="header__inner">
            <p class="header__logo">Atte</p>
        </div>
        <nav class="menu-bar">
            <ul>
                <li><a href="/">ホーム</a></li>
                <li><a href="/attendance">日付一覧</a></li>
                <li><a href="/login">ログアウト</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="content">
            <h2>xxxxxxさんお疲れ様です！</h2>
            <div class="form__button">
                <button class="start-work__button" type="submit">勤務開始</button>
                <button class="end-work__button" type="submit">勤務終了</button>
                <button class="start-save__button" type="submit">休憩開始</button>
                <button class="end-save__button" type="submit">休憩終了</button>
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <p class="footer__text">
                Atte,inc.
            </p>
        </div>
    </footer>
</body>

</html>
</body>
</html>