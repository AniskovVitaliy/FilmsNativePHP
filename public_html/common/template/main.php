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

            <h1>Новые фильмы</h1>

            <div class="films_block">

                <? foreach ($films as $film) { ?>
                    <a href="#"><img src="<?= IMG_DIR . $film['img'] ?>"></a>
                <? } ?>

            </div>

            <h1>Новые сериалы</h1>

            <div class="films_block">

                    <? foreach ($serials as $serial) { ?>
                        <a href="#"><img src="<?= IMG_DIR . $serial['img'] ?>"></a>
                    <? } ?>

            </div>


            <div class="posts">

                <hr>
                <h2> <a href="#">Как снимали Интерстеллар</a> </h2>
                <div class="posts_content">
                    <p>
                        45 лет исполнилось Кристоферу Нолану — одному из самых успешных режиссеров нашего времени, чьи работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималась студия Paramount. Когда Кристофер Нолан занял место режиссера, студия Warner Bros., которая выпускала его последние фильмы, добилась участия в проекте.
                    </p>
                </div>

                <p><a href="#">читать</a></p>

                <hr>
                <h2><a href="#">Актер Том Хенкс поделился впечатлением о фестивале</a></h2>
                <div class="posts_content">
                    <p>16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл, Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.</p>
                </div>
                <p><a href="#">читать</a></p>

            </div>


        </div>

    </div>

<?= $footer ?>





