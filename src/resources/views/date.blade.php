<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/date.css') }}" />
</head>
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
        <div class="select__date">
            <button class="arrow-button__left">＜</button>
            <h2>xxxx-xx-xx</h2>
            <button class="arrow-button__right">＞</button>
        </div>
        <div class="table">
            <div class="row-header">
                <div class="cell">名前</div>
                <div class="cell">勤務開始</div>
                <div class="cell">勤務終了</div>
                <div class="cell">休憩時間</div>
                <div class="cell">勤務時間</div>
            </div>
            <div class="row-data">
                <div class="cell">テスト太郎</div>
                <div class="cell">10:00:00</div>
                <div class="cell">20:00:00</div>
                <div class="cell">00:30:00</div>
                <div class="cell">09:30:00</div>
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