<div id="wrapper">
    <form action="/admin/login" method="post">

        <label>Логин</label>
        <input name="login" type="text" placeholder="Введите свой логин">

        <label>Пароль</label>
        <input name="password" type="password" placeholder="Введите пароль">

        <button type="submit">Войти</button>

        <div id="message">
            <p><? 
                    if (isset($_SESSION['message']))
                        echo $_SESSION['message'];
                    unset($_SESSION['message']); 
                ?>
            </p>
        </div>
    </form>
</div>