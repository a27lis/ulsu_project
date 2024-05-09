<div class="modalBackground">
    <div class="modalActive">
    <div class="modalClose">
        <img src="icons/ic-cross.svg" />
    </div>
    <div class="modalWindow">
        <div class="reg-title">Регистрация</div>
        <div class="reg-text">Email</div>
        <input type="text" id="regFormEmail"/>
        <div class="reg-text" style="margin-top: 14px">Пароль</div>
        <input type="text" id="regFormPassword"/>
        <button class="btn-modal" id="btn-reg-form">Зарегистрироваться</button>
    </div>
    </div>
</div>
<div class="modalBackgroundS modalBackground">
    <div class="modalActiveS modalActive">
    <div class="modalCloseS modalClose">
        <img src="icons/ic-cross.svg" />
    </div>
    <div class="modalWindowS modalWindow">
        <div class="reg-title">Войти</div>
        <div class="reg-text">Email</div>
        <input type="text" id="loginFormEmail"/>
        <div class="reg-text"  style="margin-top: 14px">Пароль</div>
        <input type="text" id="loginFormPassword" />
        <button class="btn-modal btn-modal-s" id="btn-sign-in-form">Войти</button>
    </div>
    </div>
</div>


<div class="navigation">
    <div class="logo">
        <img src="img/logo.svg" alt="logo" />
    </div>
    <ul class="menu">
        <li><a class="menu-item" href="index.php">Главная</a></li>

        <li><a class="menu-item" href="about.php">О нас</a></li>
        <li>
        <a class="menu-item lessons" style="cursor: default">Уроки</a>
        </li>
        <li>
        <div class="dropdown">
            <img
            class="arrow-down"
            src="icons/ic-arrow-down.svg"
            alt="arrow"
            onclick="myFunction()"
            />
            <div id="dropdown-content" class="dropdown-content">
            <ul class="dropdown-menu">
                <li class="dr-li">
                <a class="menu-item dropdown-item" href="topics.php"
                    >Тексты</a
                >
                </li>
                <hr />
                <li class="dr-li">
                <a class="menu-item dropdown-item" href="grammar.php"
                    >Грамматика</a
                >
                </li>
                <hr />
                <li class="dr-li">
                <a class="menu-item dropdown-item" href="speaking.php"
                    >Говорение</a
                >
                </li>
                <hr />
                <li class="dr-li">
                <a class="menu-item dropdown-item" href="game.php">Игра</a>
                </li>
                <hr />
                <li class="dr-li">
                <a class="menu-item dropdown-item" href="times.php"
                    >Времена</a
                >
                </li>
            </ul>
            </div>
        </div>
        </li>
        <?
            if($_COOKIE['email']){
                echo "<li><button class='btn-sign-in' style='margin-left: 480px;' id='btn-go-out'>Выйти</button></li>";
            } else {
                echo "<li><button class='btn-reg' id='btn-reg'>Регистрация</button></li>
                <li><button class='btn-sign-in' id='btn-sign-in'>Войти</button></li>";
            }
        ?>
    </ul>
</div>
<script src="js/login-form.js"></script>
<script src="js/reg-form.js"></script>
<script src="js/go-out.js"></script>