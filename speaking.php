<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Говорение</title>
    <script
			  src="https://code.jquery.com/jquery-3.7.1.min.js"
			  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
			  crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style-remake.css" />
    <link rel="stylesheet" href="css/gallery.css" />
  </head>
  <body>
    <div class="header">
    <?php
        include 'navigation.php'
      ?>
      <div class="brand">
        <div class="swirl">
          <img src="img/shape-swirl.svg" alt="" />
        </div>
        <div class="header-title" style="margin-top: -390px">
          <div class="pro">Говорение</div>
        </div>
        <div class="stars" style="margin-top: -440px">
          <img src="img/shape-stars.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="title">
      <div class="title-gallery">Темы</div>
    </div>
    <div class="grammar-b" style="padding-bottom: 60px">
      <div class="topic-info">
        <div class="topic-el">
          <a class="menu-item" style="cursor: default">
            Travelling/Путешествия
          </a>
        </div>
        <div class="topic-el">
          <a class="menu-item" style="cursor: default">My city/Мой город </a>
        </div>
        <div class="topic-el">
          <a class="menu-item" style="cursor: default">
            Best friend/Лучший друг
          </a>
        </div>
      </div>
    </div>

    <div class="gallery-block">
      <div class="title">
        <div class="title-gallery">Опиши картинку</div>
      </div>

      <div class="custom-gallery">
        <div id="gallery">
          <div class="slide">
            <img src="img/describe1.jpg" alt="1" />
          </div>
          <div class="slide">
            <img src="img/describe2.jpg" alt="1" />
          </div>
          <div class="slide">
            <img src="img/describe3.jpg" alt="1" />
          </div>
          <div class="slide">
            <img src="img/describe4.jpg" alt="1" />
          </div>
        </div>
      </div>
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
    <script src="js/gallery.js"></script>
    <script src="js/speaking.js"></script>
    <script src="js/reg.js"></script>
  </body>
</html>
