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
                The United Kingdom - Соединенное Королевство
              </div>
            </li>
            <li class="li-topic">
              <hr class="hr-topic" />
            </li>
            <li class="li-topic">
              <div class="desc-topic">
                Тема 1. The United Kingdom of Great Britain and Nothern Ireland
              </div>
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
        The United Kingdom of Great Britain and Northern Ireland is situated on
        the British Isles. The British Isles consist of two large islands, Great
        Britain and Ireland, and about five thousands small islands. Their total
        area is over 244 000 square kilometres.
      </p>
      <p class="history-text">
        The United Kingdom is one of the world’s smaller countries. Its
        population is over 57 million. About 80 percent of the population is
        urban.
      </p>
      <p class="history-text">
        Ireland. Their capitals are London, Cardiff, Edinburgh and Belfast
        respectively. Great Britain consists of England, Scotland and Wales and
        does not include Northern Ireland. But in everyday speech «Great
        Britain» is used in the meaning of the «United Kingdom of Great Britain
        and Northern Ireland». The capital of the UK is London.
      </p>
      <p class="history-text">
        The British Isles are separated from the Continent by the North Sea, the
        English Channel and the Strait of Dover. The western coast of Great
        Britain is washed by the Atlantic Ocean and the Irish Sea.
      </p>
      <p class="history-text">
        The surface of the British Isles varies very much. The north of Scotland
        is mountainous and is called Highlands. The south, which has beautiful
        valleys and plains, is called Lowlands. The north and west of England
        are mountainous, but the eastern, central and south-eastern parts of
        England are a vast plain. Mountains are not very high. Ben Nevis in
        Scotland is the highest mountain (1343 m). There are a lot of rivers in
        Great Britain, but they are not very long. The Severn is the longest
        river, while the Thames is the deepest and the most important one. The
        mountains, the Atlantic Ocean and the warm waters of the Gulf Stream
        influence the climate of the British Isles. It is mild the whole year
        round. The UK is a highly developed industrial country. It produces and
        exports machinery, electronics, textile. One of the chief industries of
        the country is shipbuilding. The UK is a constitutional monarchy with a
        parliament and the Queen as Head of State.
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
          <li class="li-q">What islands is the United Kingdom situated on?</li>
          <li class="li-q">What is the country’s population?</li>
          <li class="li-q">What is the United Kingdom made up of?</li>
          <li class="li-q">What is the United Kingdom washed by?</li>
          <li class="li-q">
            How can you characterize the surface of the British Isles?
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
            Соединенное Королевство Великобритании и Северной Ирландии
            расположено на Британских островах, состоящих из двух больших и
            тысяч малых островов.
          </li>
          <li class="li-q">
            Население Великобритании в основном (mostly) городское и составляет
            более 57 миллионов человек.
          </li>
          <li class="li-q">
            Соединенное Королевство состоит из четырех частей; в Великобританию
            входят Англия, Шотландия и Уэльс.
          </li>
          <li class="li-q">
            Британские острова омываются Атлантическим океаном, Ирландским
            морем, Северным морем и проливами Ла-Манш и Па-де-Кале
          </li>
          <li class="li-q">
            Британские острова состоят из гористой части и низин.
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
