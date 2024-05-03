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
              <div class="name-t">Washington, D.C. - Вашингтон</div>
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
      <p class="history-text">The USA is a presidential republic.</p>
      <p class="history-text">
        The United States is a federal union which is made up of fifty states
        and one independent district - the District of Columbia. The District of
        Columbia is the territory of the national capital of the USA,
        Washington, with its own laws and regulations. Washington, D.C. is
        situated on both banks of the Potomac river, between the two states,
        Maryland and Virginia.
      </p>
      <p class="history-text">
        This place was chosen by the first American President George Washington.
        The plot of land of a hundred square miles was bought from private
        owners by the state. In 1790 George Washington laid the corner-stone of
        the Capitol where the Congress sits. The place was called the District
        of Columbia in honour of Columbus, the discoverer of America. The
        capital got the name of Washington after the name of its founder.
        Washington has been the federal capital since 1800.
      </p>
      <p class="history-text">
        Washington is sometimes called the heart of America. It is the place
        where the federal government works and where each President of the
        United States lives.
      </p>
      <p class="history-text">
        Washington is smaller in size than the largest cities of the USA, such
        as New York, Chicago, Detroit or Los Angeles. The population of
        Washington is about 11 million people. The buildings in Washington are
        not very tall because no building must be taller than the Capitol. But
        in political sense Washington is the centre of the country and the most
        important city of the United States.
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
          <li class="li-q">How many parts is the USA made up of?</li>
          <li class="li-q">What is the District of Columbia?</li>
          <li class="li-q">How was Washington, D.C. founded?</li>
          <li class="li-q">What is Washington famous for?</li>
          <li class="li-q">
            In what sense is Washington the most important city in the USA?
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
            США состоят из 50 штатов и независимого округа Колумбия.
          </li>
          <li class="li-q">
            Округ Колумбия имеет собственные законы и установления.
          </li>
          <li class="li-q">
            Место для Вашингтона, расположенного по обеим берегам реки Потомак,
            было выбрано Джорджем Вашингтоном.
          </li>
          <li class="li-q">
            Город получил свое название в честь Джорджа Вашингтона.
          </li>
          <li class="li-q">
            В Вашингтоне работает правительство США и живут американские
            президенты.
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
