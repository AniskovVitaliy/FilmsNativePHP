<?= $header ?>
<div class="site_content">

    <div class="sidebar_container">

        <div class="sidebar">
            <h2>Поиск</h2>
            <form method="post" action="#" id="search_form" >
                <input type="search" name="search_field" placeholder="ваш запрос" />
                <input type="submit" class="btn" value="найти" />
            </form>
        </div>

        <div class="sidebar">
            <h2>Вход</h2>
            <form method="post" action="#" id="login">

                <input type="text" name="login_field" placeholder="логин" />
                <input type="password" name="password_field" placeholder="пароль" />
                <input type="submit" class="btn" value="вход" />
                <div class="lables_passreg_text">
                    <span><a href="#">забыли пароль?</a></span> | <span><a href="#">регистрация</a></span>
                </div>

            </form>
        </div>

        <div class="sidebar">
            <h2>Новости</h2>
            <span>31.02.2018</span>
            <p>Мы запустили расширенный поиск</p>
            <a href="#">читать</a>
        </div>

        <div class="sidebar">
            <h2>Рейтинг фильмов</h2>
            <ul>
                <li><a href="show.html">Интерстеллар</a><span class="rating_sidebar">8.1</span></li>
                <li><a href="#">Матрица</a><span class="rating_sidebar">8.0</span></li>
                <li><a href="#">Безумный макс</a><span class="rating_sidebar">7.5</span></li>
                <li><a href="#">Облачный атлас</a><span class="rating_sidebar">7.4</span></li>
            </ul>
        </div>

    </div>

    <div class="content">

        <h1>Контакты</h1>
        <p>Отправьте ваш отзыв о портале Кино</p>

        <div class="send send_contact">
            <form method="post" action="#" id="contact">
                <input type="text" name="review_name" placeholder="ваше имя">
                <input type="text" name="review_email" placeholder="ваш email">
                <textarea name="review_text"></textarea>
                <input class="btn" type="submit" value="отправить">
            </form>
        </div>

    </div>

</div>
<?= $footer ?>
