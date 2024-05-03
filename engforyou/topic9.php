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
              <div class="name-t">Moscow - Москва</div>
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
      <p class="history-text">
        Moscow is the capital of Russia, its administrative, economic, political
        and educational centre. It is one of Russia’s major cities with the
        population of about 9 million people. Its total area is about 900
        thousand square kilometres.
      </p>
      <p class="history-text">
        The city was founded by Prince Yuri Dolgoruky and was first mentioned in
        the chronicles in 1147. At that time it was a small frontier settlement.
        By the 15th century Moscow had grown into a wealthy city.
      </p>
      <p class="history-text">
        In the 16th century, under Ivan the Terrible, Moscow became the capital
        of the state of Muscovy. In the 18th century Peter the Great transferred
        the capital to St. Petersburg, but Moscow remained the heart of Russia.
        That is why it became the main target of Napoleon’s attack in 1812.
        During the war of 1812 three quarters of the city were destroyed by
        fire, but by the middle of the 19th century Moscow was completely
        rebuilt.
      </p>
      <p class="history-text">
        The present-day Moscow is the seat of the government of the Russian
        Federation. President of Russia lives and works here; government offices
        are located here, too. Moscow is a major industrial city. Its leading
        industries are engineering, chemical and light industries.
      </p>
      <p class="history-text">
        Moscow is known for its many historical buildings, museums and art
        galleries, as well as for the famous Bolshoi, Maly and Art theatres.
        There are more than 80 museums in Moscow, among them the unique Pushkin
        Museum of Fine Arts and the State Tretyakov Gallery, the Andrey Rublyov
        Museum of Early Russian Art and many others. Moscow is a city of science
        and learning. There are over 80 higher education institutions in the
        city, including a number of universities.
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
          <li class="li-q">What branches does the Government consist of?</li>
          <li class="li-q">What is the role of Moscow in Russia?</li>
          <li class="li-q">When was Moscow founded?</li>
          <li class="li-q">When did it become the capital?</li>
          <li class="li-q">
            What part does the present-day Moscow play in the life of Russia.
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
            Москва - административный, экономический, политический центр России
            и один из крупнейших городов страны.
          </li>
          <li class="li-q">
            Население Москвы - около 12,5 миллионов человек, общая площадь - 900
            000 кв. километров.
          </li>
          <li class="li-q">
            Москва была основана Юрием Долгоруким и впервые упоминалась в
            летописях в 1147 году.
          </li>
          <li class="li-q">
            Из пограничного поселка Москва превратилась в процветающий город,
            столицу Московии.
          </li>
          <li class="li-q">
            Москва осталась центром России и стала основной целью Наполеона при
            нападении на Россию.
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
