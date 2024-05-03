<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Тексты</title>
    <script
			  src="https://code.jquery.com/jquery-3.7.1.min.js"
			  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
			  crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style-remake.css" />
  </head>
  <body>
    <div class="header">
      <?
        include 'navigation.php'
      ?>
      <div class="brand">
        <div class="swirl">
          <img src="img/shape-swirl.svg" alt="" />
        </div>
        <div class="header-title" style="margin-top: -390px">
          <div class="pro">Тексты</div>
        </div>
        <div class="stars" style="margin-top: -440px">
          <img src="img/shape-stars.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="topics-list">
      <ul class="ul-topics">
        <li class="li-topic">
          <div class="topic-info">
            <div class="title-topic">
              Тема 1. The United Kingdom of Great Britain and Nothern Ireland
            </div>
            <div class="topic-el">
              <a class="menu-item" href="topic1.php">
                The United Kingdom - Соединенное Королевство
              </a>
            </div>
            <div class="topic-el">
              <a class="menu-item" href="topic2.php">
                UK Political System - Политическая система Соединенного
                Королевства
              </a>
            </div>
            <div class="topic-el">
              <a class="menu-item" href="topic3.php">London - Лондон </a>
            </div>
          </div>
        </li>
        <li>
          <div class="topic-info">
            <div class="title-topic">Тема 2. The United States of America</div>
            <div class="topic-el">
              <a class="menu-item" href="topic4.php">
                The United States of America - Соединённые Штаты Америки
              </a>
            </div>
            <div class="topic-el">
              <a class="menu-item" href="topic5.php">
                US Government - Правительство США
              </a>
            </div>
            <div class="topic-el">
              <a class="menu-item" href="topic6.php">
                Washington, D.C. - Вашингтон
              </a>
            </div>
          </div>
        </li>
        <li>
          <div class="topic-info">
            <div class="title-topic">Тема 3. Russia</div>
            <div class="topic-el">
              <a class="menu-item" href="topic7.php"> Russia - Россия </a>
            </div>
            <div class="topic-el">
              <a class="menu-item" href="topic8.php">
                State System of Russia - Государственная система России
              </a>
            </div>
            <div class="topic-el">
              <a class="menu-item" href="topic9.php"> Moscow - Москва </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="scribble" style="margin-top: 122px">
      <img src="img/scribble-red.svg" alt="scribble" />
    </div>
    <div class="footer">
      <div class="logo-year">
        <img src="img/footer-logo.svg" alt="" />
      </div>
      <div class="footer-nav">
        <ul class="first-col">
          <li class="footer-item">
            <a class="menu-item" href="about.php">О нас</a>
          </li>
          <li class="footer-item">
            <a class="menu-item" href="grammar.php" style="color: #cd4631"
              >Грамматика</a
            >
          </li>
          <li class="footer-item">
            <a class="menu-item" href="speaking.php">Говорение</a>
          </li>
        </ul>
        <ul class="second-col">
          <li class="footer-item">
            <a class="menu-item" href="topics.php" style="color: #cd4631"
              >Тексты</a
            >
          </li>
          <li class="footer-item">
            <a class="menu-item" href="times.php">Времена</a>
          </li>
          <li class="footer-item">
            <a class="menu-item" href="game.php" style="color: #cd4631"
              >Игра</a
            >
          </li>
        </ul>
      </div>
      <hr style="margin-top: 380px" />
      <div class="rules">
        <img src="img/terms.svg" alt="" />
      </div>
    </div>
    <script src="js/menu.js"></script>
    <script src="js/reg.js"></script>
  </body>
</html>
