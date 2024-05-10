<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Твой Английский</title>
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
        <div class="header-title">
          <ul class="header-ul">
            <li><div class="pro">Про</div></li>
            <li><div class="your-eng">Твой Английский</div></li>
          </ul>
        </div>
        <div class="stars">
          <img src="img/shape-stars.svg" alt="" />
        </div>
      </div>
      <div class="scribble">
        <img src="img/scribble.svg" alt="" />
      </div>
    </div>

    <div class="topics">
      <div class="title">
        <div class="title-topics">Топики</div>
        <div class="title-topics-desc">Поработай с текстом</div>
      </div>
      <div class="sparkle">
        <img src="img/sparkle.svg" alt="sparkle" />
      </div>

      <div class="card-holder">
        <ul class="cards-list">
          <li>
            <div
              class="card with-shadow first"
              onclick="window.location.href = 'topic.php?paramId=1'"
            >
              <ul class="first-row-links">
                <li>
                  <div class="cover">
                    <img class="image-cover" src="img/cover1.png" alt="" />
                  </div>
                </li>
                <li>
                  <div class="topic-text-block">
                    <div class="theme">Тема 1</div>
                    <div class="topic-title">The United Kingdom</div>
                    <hr class="divider-topic" />
                    <div class="some-text">
                      The United Kingdom of Great Britain and Northern Ireland
                      is situated on the British...
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div
              class="card third"
              onclick="window.location.href = 'topic.php?paramId=9'"
            >
              <ul class="first-row-links">
                <li>
                  <div class="cover">
                    <img class="image-cover" src="img/cover3.png" alt="" />
                  </div>
                </li>
                <li>
                  <div class="topic-text-block">
                    <div class="theme">Тема 3</div>
                    <div class="topic-title" style="color: black">Moscow</div>
                    <hr class="divider-topic" />
                    <div class="some-text">
                      Moscow is the capital of Russia, its administrative,
                      economic, political...
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div
              class="card with-shadow five"
              onclick="window.location.href = 'topic.php?paramId=5'"
            >
              <ul class="first-row-links">
                <li>
                  <div class="cover">
                    <img class="image-cover" src="img/cover5.png" alt="" />
                  </div>
                </li>
                <li>
                  <div class="topic-text-block">
                    <div class="theme">Тема 2</div>
                    <div class="topic-title">US Government</div>
                    <hr class="divider-topic" />
                    <div class="some-text">
                      The USA is a presidential republic. The legislative..
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li>
            <div
              class="card second"
              onclick="window.location.href = 'topic.php?paramId=6'"
            >
              <ul class="first-row-links">
                <li>
                  <div class="cover">
                    <img class="image-cover" src="img/cover2.png" alt="" />
                  </div>
                </li>
                <li>
                  <div class="topic-text-block">
                    <div class="theme">Тема 2</div>
                    <div class="topic-title" style="color: black">
                      Washington, D.C.
                    </div>
                    <hr class="divider-topic" />
                    <div class="some-text">
                      The United States is a federal union which is made up of
                      fifty states...
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <div
              class="card four with-shadow"
              onclick="window.location.href = 'topic.php?paramId=2'"
            >
              <ul class="first-row-links">
                <li>
                  <div class="cover">
                    <img class="image-cover" src="img/cover4.png" alt="" />
                  </div>
                </li>
                <li>
                  <div class="topic-text-block">
                    <div class="theme">Тема 1</div>
                    <div class="topic-title">UK Political System</div>
                    <hr class="divider-topic" />
                    <div class="some-text">
                      The United Kingdom of Great Britain and Northern Ireland
                      is constitutional monarchy. This
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="card four" onclick="window.location.href = 'topic.php?paramId=4'">
              <ul class="first-row-links">
                <li>
                  <div class="cover">
                    <img class="image-cover" src="img/cover6.png" alt="" />
                  </div>
                </li>
                <li>
                  <div class="topic-text-block">
                    <div class="theme">Тема 2</div>
                    <div class="topic-title">The United States of America</div>
                    <hr class="divider-topic" />
                    <div class="some-text">
                      The Unites States of America are situated in the central
                      part of the North American...
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <div class="all-btn">
        <form action="topics.php">
          <button class="btn-all" href="topics.php" style="margin-left: 0px">
            Посмотреть все тексты
          </button>
        </form>
      </div>
      <div class="scribble" style="margin-top: 82px">
        <img src="img/scribble.svg" alt="" />
      </div>
    </div>

    <div class="links">
      <div class="sсribble-sec">
        <img src="img/scribble-sec.svg" alt="sparkle" />
      </div>

      <div class="title">
        <div class="title-links">Обзор разделов</div>
        <div class="title-links-desc">Выбери самый интересный и изучи!</div>
      </div>

      <div class="links-holder">
        <ul class="first-row-links">
          <li class="link-el" onClick="window.location.href='grammar.php'">
            <div class="link-page">
              <div class="icon">
                <img class="grammar" src="icons/ic-grammar.svg" alt="" />
              </div>
              <div class="text-block">
                <div class="link-t">Грамматика</div>
                <div class="link-d">
                  Адаптация знаменитого курса Рэймонда Мёрфи
                </div>
              </div>
            </div>
          </li>
          <li class="link-el" onClick="window.location.href='speaking.php'">
            <div class="link-page">
              <div class="icon">
                <img class="speaking" src="icons/ic-speaking.svg" alt="" />
              </div>
              <div class="text-block">
                <div class="link-t">Говорение</div>
                <div class="link-d">
                  Улучшай понимание английской речи и свое произношение
                </div>
              </div>
            </div>
          </li>
          <li class="link-el" onClick="window.location.href='game.php'">
            <div class="link-page">
              <div class="icon">
                <img class="game" src="icons/ic-game.svg" alt="" />
              </div>
              <div class="text-block">
                <div class="link-t">Игра</div>
                <div class="link-d">
                  Игра на память, чтобы запомнить больше слов
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="links-holder-sec">
        <ul class="first-row-links">
          <li class="link-el" onClick="window.location.href='times.php'">
            <div class="link-page">
              <div class="icon">
                <img class="times" src="icons/ic-times.svg" alt="" />
              </div>
              <div class="text-block">
                <div class="link-t">Времена глагола</div>
                <div class="link-d">
                  Упражняйся в составлении предложений в нужном времени
                </div>
              </div>
            </div>
          </li>
          <li class="link-el" onClick="window.location.href='topics.php'">
            <div class="link-page">
              <div class="icon">
                <img class="verbs" src="icons/ic-verbs.svg" alt="" />
              </div>
              <div class="text-block">
                <div class="link-t">Тексты</div>
                <div class="link-d">
                  Запоминай новые слова, их значение и употребление
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="any-btn">
        <button
          class="btn-sign-in"
          style="margin-left: 0px"
          onclick="openRandomUrl()"
        >
          Выбрать случайный
        </button>
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
