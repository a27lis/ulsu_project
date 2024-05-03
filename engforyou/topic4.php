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
              <div class="name-t">
                The United States of America - Соединённые Штаты Америки
              </div>
            </li>
            <li class="li-topic">
              <hr class="hr-topic" />
            </li>
            <li class="li-topic">
              <div class="desc-topic">Тема 2. The United States of America</div>
            </li>
          </ul>
        </div>
        <div class="stars" style="margin-top: -230px">
          <img src="img/shape-stars.svg" alt="" />
        </div>
      </div>
    </div>

    <div class="topic-full-text">
      <p class="history-text">
        The Unites States of America are situated in the central part of the
        North American continent. Its western coast is washed by the Pacific
        Ocean and its eastern coast - by the Atlantic Ocean. The total area of
        the USA is over nine million square kilometres. The population of the
        USA is about 323 million people; most of the population lives in towns
        and cities.
      </p>
      <p class="history-text">
        The USA is a very large country, so it has several different climatic
        regions. The coldest regions are in the north and north-east. The south
        has a subtropical climate. The United States is a land of rivers and
        lakes. The northern state of Minnesota is a land of 10 000 lakes. The
        longest rivers in the USA are the Mississippi, the Missouri and the Rio
        Grande. The highest mountains are the Rocky Mountains, the Cordillera
        and the Sierra Nevada.
      </p>
      <p class="history-text">
        The United States is rich in natural and mineral resources. It produces
        copper, oil, iron ore and coal. It is a highly-developed industrial and
        agricultural country.
      </p>
      <p class="history-text">
        There are many big cities in the USA, such as New York, Chicago, Los
        Angeles, Philadelphia and others. The national capital is Washington,
        D.C. Its population is about 3,4 million. Washington was built in the
        late eighteenth century as the centre of government. It was named after
        George Washington.
      </p>
      <p class="history-text">
        The USA became the world leading country at the beginning of the
        twentieth century.
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
          <li class="li-q">
            What can you say about the geographical position of the United
            States of America?
          </li>
          <li class="li-q">
            What is the total area and the population of the United States?
          </li>
          <li class="li-q">What is the climate of the United States like?</li>
          <li class="li-q">
            Why is the United States called a land of rivers and lakes?
          </li>
          <li class="li-q">
            How can you characterize the natural and mineral resources of the
            country?
          </li>
        </ol>
      </div>

      <div class="sparkle-translate">
        <img src="img/sparkle-right.svg" alt="" />
      </div>
      <div class="translate">
        <div class="h1-t">Translate into English</div>
        <ol class="questions-list">
          <li class="li-q">
            Соединенные Штаты Америки расположены в центральной части материка
            Северная Америка и омываются Тихим и Атлантическим океанами.
          </li>
          <li class="li-q">
            Население США, составляющее около 323 миллионов человек, живет, в
            основном (mostly), в городах.
          </li>
          <li class="li-q">
            США - высокоразвитая промышленная и аграрная страна с богатыми
            природными ресурсами.
          </li>
          <li class="li-q">
            США богаты полезными ископаемыми: медью, нефтью, железной рудой и
            углем.
          </li>
          <li class="li-q">
            Столица страны, Вашингтон, получила название в честь Джорджа
            Вашингтона.
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
