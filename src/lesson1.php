<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Урок 1</title>
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
          <div class="lesson-t">Урок грамматики 1 Present Continuous</div>
        </div>
        <div class="stars" style="margin-top: -440px">
          <img src="img/shape-stars.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="lesson">
      <p class="lesson-text">Изучите следующую ситуацию:</p>
      <p class="lesson-text">
        Sarah is in her car. She is on her way to work. She is driving to work.
        – Она едет на работу. Это означает: она ведёт машину сейчас, в момент
        речи. Действие не завершено. Am/is/are + -ing это the present
        continuous.
      </p>
      <p class="lesson-text">
        I am doing something = Я делаю что-либо = Я в процессе работы над этим
        (в процессе ‘делания’), т.е. я начал делать это, но еще не закончил
      </p>

      <p class="lesson-text">
        Действие не обязательно происходит в момент речи. Например: Стив говорит
        (is talking) с другом по телефону. Он говорит: I’m reading a really good
        book at the moment. It’s about a man who ... Я сейчас читаю очень
        интересную книгу. Она о мужчине, который...
      </p>
      <p class="lesson-text">
        Стив не читает (is not reading) книгу в момент речи. Он имеет в виду,
        что он начал читать ее, но еще не закончил. Он в процессе чтения этой
        книги.
      </p>
      <p class="lesson-text">
        Мы можем использовать present continuous со словами today / this week /
        this year и другими словами, означающими промежутки времени, связанными
        с текущим промежутком времени (сейчас), т.е. сегодня это сейчас, эта
        неделя - она идет сейчас и т.п
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