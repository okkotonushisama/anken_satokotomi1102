<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atte</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <p class="header__logo">Atte</p>
        </div>
    </header>

    <main>
        <div class="login-form__content">
            <div class="login-form__heading">
                <h2>会員登録</h2>
            </div>
            <form class="form" action="/register" method="post">
            @csrf
                <div class="form__name">
                    <input type="text" name="name" placeholder="名前">
                </div>
                <div class="form__email">
                    <input type="email" name="email" placeholder="メールアドレス">
                </div>
                <div class="form__password">
                    <input type="password" name="password" placeholder="パスワード">
                </div>
                <div class="form__password_confirmation">
                    <input type="password" name="password_confirmation" placeholder="確認用パスワード">
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">会員登録</button>
                </div>
                <div class="form__exit">
                    <div class="form-exit__group">
                        <p class="form-exit__text">アカウントをお持ちの方はこちらから</p>
                        <div class="form-exit__link">
                            <a href="/login">ログイン</a>
                        </div>
                    </div>
                </div>
            </form>
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