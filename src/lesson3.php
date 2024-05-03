<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Урок 3</title>
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
        <div class="header-lesson" style="margin-top: -390px">
          <div class="lesson-t">Урок грамматики 3 Past Simple</div>
        </div>
        <div class="stars" style="margin-top: -440px">
          <img src="img/shape-stars.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="lesson">
      <p class="lesson-text">Изучите следующую ситуацию:</p>
      <p class="lesson-text">
        Wolfgang Amadeus Mozart was an Austrian musician and composer. He lived
        from 1756 to 1791. He started composing at the age of five and wrote
        more than 600 pieces of music. He was only 35 years old when he died.
        Вольфганг Амадей Моцарт был австрийским музыкантом и композитором. Он
        жил с 1756 по 1791 год. Он начал сочинять музыку в возрасте пяти лет
        написал более чем 600 музыкальных произведений. Ему было всего лишь 35
        лет, когда он умер.
      </p>
      <p class="lesson-text">
        Очень часто глагол в past simple имеет окончание -ed (у правильных
        глаголов)
      </p>

      <p class="lesson-text">
        В вопросительных и отрицательных предложениях мы используем did/didn’t +
        инфинитив (enjoy/see/go и др.)
      </p>
      <p class="lesson-text">
        Прошедшие формы глагола to be (am/is/are) это was/were
      </p>
      <p class="lesson-text">
        Заметьте, что мы не используем did в отрицаниях и вопросах с was/were
      </p>
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
