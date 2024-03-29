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

            <table>

                <tr>
                    <th></th>
                    <th>Фильм</th>
                    <th class="center">Год</th>
                    <th class="center">Рейтинг</th>
                </tr>
                <tr>
                    <td class="center"><img src="<?=TEMPLATE_DIR_PUBLIC?>assets/img/inter.png"></td>
                    <td>1. <a href="show.html">Интерстеллар</a></td>
                    <td class="center">2014</td>
                    <td class="center rating">8.1</td>
                </tr>
                <tr>
                    <td class="center"><img src="<?=TEMPLATE_DIR_PUBLIC?>assets/img/matrix.png"></td>
                    <td>2. <a href="#">Матрица</a> </td>
                    <td class="center">1999</td>
                    <td class="rating center">8.0</td>
                </tr>
                <tr>
                    <td class="center"><img src="<?=TEMPLATE_DIR_PUBLIC?>assets/img/max.png"></td>
                    <td>3. <a href="#">Безумный макс</a></td>
                    <td class="center">2015</td>
                    <td class="rating center">7.5</td>
                </tr>
                <tr>
                    <td class="center"><img src="<?=TEMPLATE_DIR_PUBLIC?>assets/img/cloud.png"></td>
                    <td>4. <a href="#">Облачный атлас</a></td>
                    <td class="center">2013</td>
                    <td class="rating center">7.4</td>
                </tr>

            </table>

        </div>

    </div>
<?= $footer ?>