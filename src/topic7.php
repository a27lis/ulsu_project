<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Текст</title>
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
        <div class="topic-header-pic-disc">
          <ul class="ul-topic">
            <li class="li-topic">
              <div class="name-t">Russia - Россия</div>
            </li>
            <li class="li-topic">
              <hr class="hr-topic" />
            </li>
            <li class="li-topic">
              <div class="desc-topic">Тема 3. Russia</div>
            </li>
          </ul>
        </div>
        <div class="stars" style="margin-top: -230px">
          <img src="img/shape-stars.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="topic-full-text">
      <p class="history-text">The USA is a presidential republic.</p>
      <p class="history-text">
        Russia is one of the largest countries in the world. The vast territory
        of Russia lies in the eastern part of Europe and the northern part of
        Asia.
      </p>
      <p class="history-text">
        Russia is washed by twelve seas and three oceans. The oceans are: the
        Arctic, the Atlantic, the Pacific. The seas are: the White Sea, the
        Barents Sea, the Okhotsk Sea, the Black Sea, the Baltic Sea and others.
      </p>
      <p class="history-text">
        Russia borders on many countries, such as Mongolia and China in the
        south-east, Finland and Norway in the north-west, and so on. The land of
        Russia varies very much from forests to deserts, from high mountains to
        deep valleys. The main mountain chains are the Urals, the Caucasus and
        the Altai. There are a lot of great rivers and deep lakes on its
        territory. The longest rivers are the Volga in Europe and the Ob, the
        Yenisei and the Lena in Asia. The largest lakes are Ladoga and Baikal.
        Baikal is the deepest lake in the world and its water is the purest on
        earth.
      </p>
      <p class="history-text">
        The Russian Federation is rich in natural and mineral resources. It has
        deposits of oil, gas, coal, iron, gold and many others. The current
        population of Russia is more than 150 million people. The European part
        of the country is densely peopled, and most population live in cities
        and towns and their outskirts. The capital of the Russian Federation is
        Moscow, with the population of about 12,5 million people. Russia is a
        presidential republic. It is one of the leading powers in the world.
      </p>
      <div class="scribble-topic">
        <img src="img/scribble.svg" alt="" />
      </div>
    </div>

    <div class="exersises">
      <div class="sparkle-left-t">
        <img src="img/sparkle-left.svg" alt="" />
      </div>
      <div class="questions">
        <div class="h1-q">Answer the questions</div>
        <ol class="questions-list">
          <li class="li-q">Where does the vast territory of Russia lie?</li>
          <li class="li-q">What oceans and seas is Russia washed by?</li>
          <li class="li-q">What countries does Russia border on?</li>
          <li class="li-q">
            What countries does Russia border on? What are the main mountain
            chains, rivers and lakes in Russia?
          </li>
          <li class="li-q">What mineral resources are there in Russia?</li>
        </ol>
      </div>

      <div class="sparkle-translate">
        <img src="img/sparkle-right.svg" alt="" />
      </div>
      <div class="translate">
        <div class="h1-t">Translate into English</div>
        <ol class="questions-list">
          <li class="li-q">
            Россия расположена в восточной части Европы и северной части Азии.
          </li>
          <li class="li-q">
            Обширная территория России омывается Северным Ледовитым,
            Атлантическим и Тихим океанами.
          </li>
          <li class="li-q">
            Россия граничит с Монголией, Китаем, Финляндией и другими странами.
          </li>
          <li class="li-q">
            Россия располагает большим количеством месторождений полезных
            ископаемых. Город получил свое название в честь Джорджа Вашингтона.
          </li>
          <li class="li-q">
            Полезные ископаемые России включают (include) нефть, газ, уголь,
            железо, золото и др.
          </li>
        </ol>
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
    <script src="js/reg.js"></script>
  </body>
</html>
